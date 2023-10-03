<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Product\Product;
use App\Models\Product\Category;
use App\Models\Product\CategoryTranslation;
use App\Models\Product\ProductTranslation;
use App\Models\User\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private $createRoute;
    private $success_message;
    private $error_message;
    private $languages;
    private $model_instance_translation;

    public function __construct()
    {
        $this->model_instance = Product::class;
        $this->index_view = 'dashboard.products.index';
        $this->create_view = 'dashboard.products.create';
        $this->show_view = 'dashboard.products.show';
        $this->edit_view = 'dashboard.products.edit';

        $this->create_route = 'dashboard.products.create';
        $this->edit_route = 'dashboard.products.edit';


        $this->success_message = 'Product created successfully';
        $this->error_message = "Failed to create product.";

        $this->update_success_message = 'Product updated successfully!';
        $this->update_error_message = "Unfortunately, the product could not be updated";

        $this->delete_message = 'Product deleted successfully';
        $this->error = 'Something went Wrong';
        $this->model_instance_translation = ProductTranslation::class;
        $this->languages = Language::all();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filter = request()->has('filter') ? request()->filter : 'all';


        if ($filter == "all") {
            $products = $this->model_instance::all()->sortBy('id');
        } else
            $products = $this->model_instance::all()->sortBy('id');

        $categories = Category::where('status', '=', 'active')->get();


        return view($this->index_view, compact(['products', 'categories', 'filter']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status', '=', 'active')->get();
        return view($this->create_view, compact('categories'));
    }

    private function productStoreValidationRules()
    {
        $rules = [
            'title' => 'required|string|min:3|max:200',
            'slug' => 'required|string|unique:products,slug|max:255',
            'description' => 'required|string|min:3',
            'excerpt' => 'nullable|string|max:500',
            'category_id' => 'required|exists:categories,id',
            'featured_image' => 'required|image|mimes:jpg,jpeg,png',
            'status' => 'required|in:published,draft,private,deleted',
            'featured' => 'required|boolean',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:500',
        ];
        foreach ($this->languages as $language) {
            if ($language->code != 'en') {
                $rules[$language->code . '.title'] = 'required|string|min:3|max:200';
                $rules[$language->code . '.slug'] = 'required|string|min:3|max:20';
                $rules[$language->code . '.description'] = 'required|string';
                $rules[$language->code . '.meta_title'] = 'nullable|string';
                $rules[$language->code . '.meta_description'] = 'nullable|string';
            }
        }

        $rules['image.*'] = 'image|mimes:jpg,jpeg,png,webp';
        return $rules;
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate($this->productStoreValidationRules());


            DB::beginTransaction();
            $object = $this->model_instance::create(Arr::except($validated_data, ['image', 'gallery']));

            foreach ($this->languages as $language) {
                if ($language->code != 'en') {
                    // Create translation model records
                    if (isset($validated_data[$language->code])) {
                        $TranslationData = $validated_data[$language->code];
                        $TranslationData['product_id'] = $object->id;
                        $TranslationData['language_id'] = $language->id;
                        //return $TranslationData;
                        $Model = $this->model_instance_translation::create($TranslationData);
                        $Model->save();
                    }
                }
            }
            if ($request->hasFile('gallery')) {
                $ProductImages = $request->file('gallery');
                if (is_array($ProductImages)) {
                    foreach ($ProductImages as $image) {
                        $img_file_path = Storage::disk('public_images')->put('products', $image);
                        $image_name = $image->getClientOriginalName();
                        $image_url = getMediaUrl($img_file_path);
                        $object->media()->create([
                            'image_url' => $image_url,
                            'image_name' => $image_name,
                            'is_featured' => 'false',
                        ]);
                    }
                }
            }


            if ($request->has('featured_image')) {
                $image = $request->file('featured_image');
                $img_file_path = Storage::disk('public_images')->put('products', $image);
                $image_name = $image->getClientOriginalName();
                $image_url = getMediaUrl($img_file_path);
                $object->media()->create([
                    'image_url' => $image_url,
                    'image_name' => $image_name,
                    'is_featured' => 'true',
                ]);
            }

            $object->save();
            DB::commit();
            $logMessage = trans('products.create_log') . '#' . $object->id;
            //UserActivity::logActivity($logMessage);
            return redirect()->route($this->create_route)->with('success', $this->success_message);

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

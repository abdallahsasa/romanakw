<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Product\Category;
use App\Models\Product\CategoryTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    private $index_view;
    private $create_view;
    private $edit_view;
    private $show_view;
    private $success_message;
    private $error_message;
    private $languages;


    public function __construct()
    {
        $this->model_instance = Category::class;
        $this->model_instance_translation = CategoryTranslation::class;
        $this->index_view = 'dashboard.categories.index';
        $this->create_view = 'dashboard.categories.create';
        $this->show_view = 'dashboard.categories.show';
        $this->edit_view = 'dashboard.categories.edit';


        $this->success_message = 'Category created successfully';
        $this->error_message = "Failed to create Category.";
        $this->delete_message = 'Category deleted successfully';
        $this->error = 'Something went Wrong';
        $this->update_success_message = 'Category Updated successfully';

        $this->update_error_message = "Category Couldn't Been Updated";
        $this->languages = Language::all();

    }

    public function index()
    {
        $categories = $this->model_instance::all();
        return view($this->index_view, compact(['categories']));
    }

    public function create()
    {
        $categories = $this->model_instance::all();
        return view($this->create_view, compact(['categories']));
    }
    public function StoreValidationRules()
    {
        $rules = [
            'status' => 'required|in:active,inactive',
            'name' => 'required|string|min:3|max:200',
            'slug' => 'required|string|min:3|max:20',
            'description' => 'required|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'image' => 'required|image',
        ];
        foreach ($this->languages as $language) {
            if($language->code!='en') {
                $rules[$language->code . '.name'] = 'required|string|min:3|max:200';
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


        $validated_data = $request->validate($this->StoreValidationRules());
        $object="";


        // Create the category model record
        $objectData = Arr::except($validated_data, ['image', 'ar', 'tr']);
        $object = $this->model_instance::create($objectData);
            $object->sort_number = $object->id;

            if ($request->has('image')) {
                $image = $validated_data["image"];
                $img_file_path = Storage::disk('public_images')->put('categories', $image);
                $image_name = $request->file('image')->getClientOriginalName();
                $image_url = getMediaUrl($img_file_path);
                $object->image_url = $image_url;
                $object->image_name = $image_name;
                $object->update();
            }
        foreach ($this->languages as $language) {
            if ($language->code != 'en') {
                // Create translation model records
                if (isset($validated_data[$language->code ])) {
                    $TranslationData = $validated_data[$language->code];
                    $TranslationData['category_id'] = $object->id;
                    $TranslationData['language_id'] = $language->id;
                    //return $TranslationData;
                    $Model = $this->model_instance_translation::create($TranslationData);
                    $Model->save();
                }
            }
        }

        $log_message = trans('categories.create_log') . '#' . $object->id;
//            UserActivity::logActivity($log_message);

            return redirect()->route($this->create_view, $object->id)->with('success', $this->success_message);

    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $category = $this->model_instance::findOrFail($id);
        $categories =  $this->model_instance::all();
        return view($this->edit_view,compact(['category','categories']));
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

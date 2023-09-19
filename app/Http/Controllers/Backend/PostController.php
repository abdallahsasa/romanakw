<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Post\App;
use App\Http\Controllers\Backend\Post\Illuminate;
use App\Http\Controllers\Controller;
use App\Models\Post\Post;
use App\Models\User\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    private $createRoute;
    private $successMessage;
    private $errorMessage;


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Arr;
    use App\Models\Post;
    use App\Models\PostCategory;

    private function postStoreValidationRules()
    {
        return [
            'title' => 'required|string|min:3|max:200',
            'slug' => 'required|string|unique:posts,slug|max:255',
            'description' => 'required|string|min:3',
            'excerpt' => 'nullable|string|max:500',
            'category_id' => 'required|exists:post_categories,id',
            'featured_image' => 'required|image|mimes:jpg,jpeg,png',
            'status' => 'required|in:published,draft,private,deleted',
            'video_link' => 'nullable|string|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:500',
        ];
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->postStoreValidationRules());

        try {
            $post = Post::create(Arr::except($validatedData, ['featured_image']));

            if ($request->hasFile('featured_image')) {
                $image = $validatedData["featured_image"];
                $imgFilePath = Storage::disk('public_images')->put('posts', $image);
                $imageName = $request->file('featured_image')->getClientOriginalName();
                $imageUrl = getMediaUrl($imgFilePath);

                $post->featured_image_name = $imageName;
                $post->featured_image_url = $imageUrl;
                $post->update();
            }

            $logMessage = trans('posts.create_log') . '#' . $post->id;
            UserActivity::logActivity($logMessage);

            return redirect()->route($this->createRoute, $post->id)->with('success', $this->successMessage);
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route($this->createRoute)->with('error', $this->errorMessage);
        }
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

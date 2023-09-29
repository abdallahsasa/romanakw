<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Post\Post;
use App\Models\Post\PostCategory;
use App\Models\Post\PostTranslation;
use App\Models\Realestate\realestate;
use App\Models\Restaurant\Restaurant;
use App\Models\Restaurants\RestaurantCategory;
use Illuminate\Http\Request;

class RealestateController extends Controller
{
    private $createRoute;
    private $success_message;
    private $error_message;
    private $languages;
    private $model_instance_translation;

    public function __construct()
    {
        $this->model_instance = Restaurant::class;
        $this->index_view = 'dashboard.restaurants.index';
        $this->create_view = 'dashboard.restaurants.create';
        $this->show_view = 'dashboard.restaurants.show';
        $this->edit_view = 'dashboard.restaurants.edit';

        $this->create_route = 'dashboard.restaurants.create';
        $this->edit_route = 'dashboard.restaurants.edit';


        $this->success_message = 'Restaurant created successfully';
        $this->error_message = "Failed to create Restaurant";

        $this->update_success_message = 'Restaurant updated successfully!';
        $this->update_error_message = "Unfortunately, the restaurant could not be updated";

        $this->delete_message = 'Restaurant deleted successfully';
        $this->error = 'Something went Wrong';
        $this->model_instance_translation = PostTranslation::class;
        $this->languages = Language::all();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filter = request()->has('filter') ? request()->filter : 'all';


        if ($filter == "all") {
            $posts = $this->model_instance::all()->sortBy('id');
        } else
            $posts = $this->model_instance::all()->sortBy('id');

        return view($this->index_view, compact(['posts', 'filter']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(realestate $realestate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(realestate $realestate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, realestate $realestate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(realestate $realestate)
    {
        //
    }
}

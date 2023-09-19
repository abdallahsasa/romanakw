<?php

use App\Http\Controllers\Backend\ContactUsController;
use App\Http\Controllers\Backend\PostCategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/',[\App\Http\Controllers\FrontEnd\NavigationController::class, 'home'])->name('home');
Route::get('/home', [\App\Http\Controllers\FrontEnd\NavigationController::class, 'home'])->name('home');


Route::middleware(['auth','verified'])->group(function () {
});

Route::group(['prefix' => 'dashboard'], function () {

    Route::get('/index', [\App\Http\Controllers\Backend\NavigationController::class, 'index'])->name('dashboard.home');

    Route::get('/posts/index', [\App\Http\Controllers\Backend\PostController::class, 'index'])->name('dashboard.posts.index');
    Route::get('/posts/data', [\App\Http\Controllers\Backend\PostController::class, 'getProductsData'])->name('dashboard.posts.data');
    Route::get('/posts/create', [\App\Http\Controllers\Backend\PostController::class, 'create'])->name('dashboard.posts.create');
    Route::post('/posts/store', [\App\Http\Controllers\Backend\PostController::class, 'store'])->name('dashboard.posts.store');
    Route::get('/posts/edit/{id}', [\App\Http\Controllers\Backend\PostController::class, 'edit'])->name('dashboard.posts.edit');
    Route::put('/posts/update/{id}', [\App\Http\Controllers\Backend\PostController::class, 'update'])->name('dashboard.posts.update');
    Route::delete('/posts/destroy/{id}', [\App\Http\Controllers\Backend\PostController::class, 'destroy'])->name('dashboard.posts.destroy');
    Route::delete('/posts/media/delete/{id}', [\App\Http\Controllers\Backend\PostController::class, 'deleteImage'])->name('dashboard.posts.deleteImage');

    Route::get('/categories/index', [\App\Http\Controllers\Backend\PostCategoryController::class, 'index'])->name('dashboard.categories.index');
    Route::get('/categories/create', [\App\Http\Controllers\Backend\PostCategoryController::class, 'create'])->name('dashboard.categories.create');
    Route::post('/categories/store', [\App\Http\Controllers\Backend\PostCategoryController::class, 'store'])->name('dashboard.categories.store');
    Route::get('/categories/edit/{id}', [\App\Http\Controllers\Backend\PostCategoryController::class, 'edit'])->name('dashboard.categories.edit');
    Route::put('/categories/update/{id}', [\App\Http\Controllers\Backend\PostCategoryController::class, 'update'])->name('dashboard.categories.update');
    Route::delete('/categories/destroy/{id}', [\App\Http\Controllers\Backend\PostCategoryController::class, 'destroy'])->name('dashboard.categories.destroy');



    Route::get('/restaurants/index', [\App\Http\Controllers\Backend\RestaurantController::class, 'index'])->name('dashboard.restaurants.index');
    Route::get('/restaurants/create', [\App\Http\Controllers\Backend\RestaurantController::class, 'create'])->name('dashboard.restaurants.create');
    Route::post('/restaurants/store', [\App\Http\Controllers\Backend\RestaurantController::class, 'store'])->name('dashboard.restaurants.store');
    Route::get('/restaurants/edit/{id}', [\App\Http\Controllers\Backend\RestaurantController::class, 'edit'])->name('dashboard.restaurants.edit');
    Route::put('/restaurants/update/{id}', [\App\Http\Controllers\Backend\RestaurantController::class, 'update'])->name('dashboard.restaurants.update');
    Route::delete('/restaurants/destroy/{id}', [\App\Http\Controllers\Backend\RestaurantController::class, 'destroy'])->name('dashboard.restaurants.destroy');


    Route::get('/services/index', [\App\Http\Controllers\Backend\ServiceController::class, 'index'])->name('dashboard.services.index');
    Route::get('/services/create', [\App\Http\Controllers\Backend\ServiceController::class, 'create'])->name('dashboard.services.create');
    Route::post('/services/store', [\App\Http\Controllers\Backend\ServiceController::class, 'store'])->name('dashboard.services.store');
    Route::get('/services/edit/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'edit'])->name('dashboard.services.edit');
    Route::put('/services/update/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'update'])->name('dashboard.services.update');
    Route::delete('/services/destroy/{id}', [\App\Http\Controllers\Backend\ServiceController::class, 'destroy'])->name('dashboard.services.destroy');

    Route::get('/hotels/index', [\App\Http\Controllers\Backend\HotelController::class, 'index'])->name('dashboard.hotels.index');
    Route::get('/hotels/create', [\App\Http\Controllers\Backend\HotelController::class, 'create'])->name('dashboard.hotels.create');
    Route::post('/hotels/store', [\App\Http\Controllers\Backend\HotelController::class, 'store'])->name('dashboard.hotels.store');
    Route::get('/hotels/edit/{id}', [\App\Http\Controllers\Backend\HotelController::class, 'edit'])->name('dashboard.hotels.edit');
    Route::put('/hotels/update/{id}', [\App\Http\Controllers\Backend\HotelController::class, 'update'])->name('dashboard.hotels.update');
    Route::delete('/hotels/destroy/{id}', [\App\Http\Controllers\Backend\HotelController::class, 'destroy'])->name('dashboard.hotels.destroy');

    Route::get('/cars/index', [\App\Http\Controllers\Backend\CarController::class, 'index'])->name('dashboard.cars.index');
    Route::get('/cars/create', [\App\Http\Controllers\Backend\CarController::class, 'create'])->name('dashboard.cars.create');
    Route::post('/cars/store', [\App\Http\Controllers\Backend\CarController::class, 'store'])->name('dashboard.cars.store');
    Route::get('/cars/edit/{id}', [\App\Http\Controllers\Backend\CarController::class, 'edit'])->name('dashboard.cars.edit');
    Route::put('/cars/update/{id}', [\App\Http\Controllers\Backend\CarController::class, 'update'])->name('dashboard.cars.update');
    Route::delete('/cars/destroy/{id}', [\App\Http\Controllers\Backend\CarController::class, 'destroy'])->name('dashboard.cars.destroy');


    Route::get('/cars-dealer/index', [\App\Http\Controllers\Backend\UserController::class, 'dealer_index'])->name('dashboard.dealers.index');
    Route::get('/cars-dealer/create', [\App\Http\Controllers\Backend\UserController::class, 'dealer_create'])->name('dashboard.dealers.create');
    Route::post('/cars-dealer/store', [\App\Http\Controllers\Backend\UserController::class, 'dealer_store'])->name('dashboard.dealers.store');
    Route::get('/cars-dealer/edit/{id}', [\App\Http\Controllers\Backend\UserController::class, 'dealer_edit'])->name('dashboard.dealers.edit');
    Route::put('/cars-dealer/update/{id}', [\App\Http\Controllers\Backend\UserController::class, 'dealer_update'])->name('dashboard.dealers.update');
    Route::delete('/cars-dealer/destroy/{id}', [\App\Http\Controllers\Backend\UserController::class, 'dealer_destroy'])->name('dashboard.dealers.destroy');

    Route::get('/users/index', [\App\Http\Controllers\Backend\UserController::class, 'user_index'])->name('dashboard.users.index');
    Route::get('/users/create', [\App\Http\Controllers\Backend\UserController::class, 'user_create'])->name('dashboard.users.create');
    Route::post('/users/store', [\App\Http\Controllers\Backend\UserController::class, 'user_store'])->name('dashboard.users.store');
    Route::get('/users/edit/{id}', [\App\Http\Controllers\Backend\UserController::class, 'user_edit'])->name('dashboard.users.edit');
    Route::put('/users/update/{id}', [\App\Http\Controllers\Backend\UserController::class, 'user_update'])->name('dashboard.users.update');
    Route::delete('/users/destroy/{id}', [\App\Http\Controllers\Backend\UserController::class, 'user_destroy'])->name('dashboard.users.destroy');

    Route::get('/editors/index', [\App\Http\Controllers\Backend\UserController::class, 'editor_index'])->name('dashboard.editors.index');
    Route::get('/editors/create', [\App\Http\Controllers\Backend\UserController::class, 'editor_create'])->name('dashboard.editors.create');
    Route::post('/editors/store', [\App\Http\Controllers\Backend\UserController::class, 'editor_store'])->name('dashboard.editors.store');
    Route::get('/editors/edit/{id}', [\App\Http\Controllers\Backend\UserController::class, 'editor_edit'])->name('dashboard.editors.edit');
    Route::put('/editors/update/{id}', [\App\Http\Controllers\Backend\UserController::class, 'editor_update'])->name('dashboard.editors.update');
    Route::delete('/editors/destroy/{id}', [\App\Http\Controllers\Backend\UserController::class, 'editor_destroy'])->name('dashboard.editors.destroy');


    Route::get('/contact-us/index', [ContactUsController::class, 'index'])->name('dashboard.contact-us.index');
    Route::get('/contact-us/create', [ContactUsController::class, 'createSubject'])->name('dashboard.contact-us.create');
    Route::post('/contact-us/store', [ContactUsController::class, 'store'])->name('dashboard.contact-us.store');
    Route::delete('/contact-us/destroy/{id}', [ContactUsController::class, 'destroySubject'])->name('dashboard.contact-us.destroy');




});


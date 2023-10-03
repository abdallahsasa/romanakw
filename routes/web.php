<?php

use App\Http\Controllers\Backend\ContactUsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\FrontEnd\ContactUsPageController;
use App\Http\Controllers\FrontEnd\ProductPageController;
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

Route::get('/',[\App\Http\Controllers\FrontEnd\NavigationController::class, 'home'])->name('website.home');
Route::get('/home', [\App\Http\Controllers\FrontEnd\NavigationController::class, 'home'])->name('website.home');
Route::get('contact', [ContactUsPageController::class, 'index'])->name('website.contact');

Route::get('/products', [ProductPageController::class, 'index'])->name('website.products.index');
Route::get('/product/{id}', [ProductPageController::class, 'details'])->name('website.product.details');





Route::middleware(['auth','verified'])->group(function () {
});

Route::group(['prefix' => 'dashboard'], function () {

    Route::get('/index', [\App\Http\Controllers\Backend\NavigationController::class, 'index'])->name('dashboard.home');

    Route::get('/products/index', [\App\Http\Controllers\Backend\ProductController::class, 'index'])->name('dashboard.products.index');
    Route::get('/products/data', [\App\Http\Controllers\Backend\ProductController::class, 'getProductsData'])->name('dashboard.products.data');
    Route::get('/products/create', [\App\Http\Controllers\Backend\ProductController::class, 'create'])->name('dashboard.products.create');
    Route::post('/products/store', [\App\Http\Controllers\Backend\ProductController::class, 'store'])->name('dashboard.products.store');
    Route::get('/products/edit/{id}', [\App\Http\Controllers\Backend\ProductController::class, 'edit'])->name('dashboard.products.edit');
    Route::put('/products/update/{id}', [\App\Http\Controllers\Backend\ProductController::class, 'update'])->name('dashboard.products.update');
    Route::delete('/products/destroy/{id}', [\App\Http\Controllers\Backend\ProductController::class, 'destroy'])->name('dashboard.products.destroy');
    Route::delete('/products/media/delete/{id}', [\App\Http\Controllers\Backend\ProductController::class, 'deleteImage'])->name('dashboard.products.deleteImage');

    Route::get('/categories/index', [\App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('dashboard.categories.index');
    Route::get('/categories/create', [\App\Http\Controllers\Backend\CategoryController::class, 'create'])->name('dashboard.categories.create');
    Route::post('/categories/store', [\App\Http\Controllers\Backend\CategoryController::class, 'store'])->name('dashboard.categories.store');
    Route::get('/categories/edit/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'edit'])->name('dashboard.categories.edit');
    Route::put('/categories/update/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'update'])->name('dashboard.categories.update');
    Route::delete('/categories/destroy/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'destroy'])->name('dashboard.categories.destroy');

    Route::get('/contact-us/index', [ContactUsController::class, 'index'])->name('dashboard.contact-us.index');
    Route::get('/contact-us/create', [ContactUsController::class, 'createSubject'])->name('dashboard.contact-us.create');
    Route::post('/contact-us/store', [ContactUsController::class, 'store'])->name('dashboard.contact-us.store');
    Route::delete('/contact-us/destroy/{id}', [ContactUsController::class, 'destroySubject'])->name('dashboard.contact-us.destroy');




});


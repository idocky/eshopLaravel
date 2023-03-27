<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('locale/{locale}', [\App\Http\Controllers\HomeController::class, 'changeLocale'])->name('locale');

Route::middleware(['set_locale'])->group(function() {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
    Route::resource('/collection', '\App\Http\Controllers\CollectionController');


    Route::view('/item/details','item_details');
    Route::view('/checkout','checkout');
    Route::view('/admin','admin.index');

    Route::group(['prefix' => 'admin', 'namespace' => '\App\Http\Controllers\Admin'], function(){
        Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
        Route::resource('categories', 'CategoriesController');
        Route::resource('tags', 'TagsController');
        Route::resource('collections', 'CollectionsController');
        Route::resource('banners', 'BannersController');
        Route::resource('items', 'ItemsController');
    });

});

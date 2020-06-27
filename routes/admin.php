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
Route::match(['get', 'post'], 'admin', ['as' => 'admin', 'uses' => 'backend\LoginController@login']);
Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'backend\LoginController@logout']);

$adminPrefix = "";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['admin']], function() {
    Route::match(['get', 'post'], 'admin-dashboard', ['as' => 'admin-dashboard', 'uses' => 'backend\dashboard\DashboardController@dashboard']);
    
    // extra-facilities
    Route::match(['get', 'post'], 'extra-facilities', ['as' => 'extra-facilities', 'uses' => 'backend\extrafacailies\ExtrafacilitiesController@extrafacilities']);
    Route::match(['get', 'post'], 'add-extra-facilities', ['as' => 'add-extra-facilities', 'uses' => 'backend\extrafacailies\ExtrafacilitiesController@addextrafacilities']);
    Route::match(['get', 'post'], 'edit-extra-facilities/{id}', ['as' => 'edit-extra-facilities','uses' => 'backend\extrafacailies\ExtrafacilitiesController@editextrafacilities']);
    Route::match(['get', 'post'], 'extrafacilities-ajaxAction', ['as' => 'extrafacilities-ajaxAction', 'uses' => 'backend\extrafacailies\ExtrafacilitiesController@ajaxAction']);

    // Blog Category
    Route::match(['get', 'post'], 'blog-category', ['as' => 'blog-category', 'uses' => 'backend\blog\BlogCategoryController@list']);
    Route::match(['get', 'post'], 'add-blog-category', ['as' => 'add-blog-category', 'uses' => 'backend\blog\BlogCategoryController@add']);
    Route::match(['get', 'post'], 'edit-blog-category/{id}', ['as' => 'edit-blog-category', 'uses' => 'backend\blog\BlogCategoryController@edit']);
    Route::match(['get', 'post'], 'blog-category-ajaxAction', ['as' => 'blog-category-ajaxAction', 'uses' => 'backend\blog\BlogCategoryController@ajaxAction']);
    
    // Blog
    Route::match(['get', 'post'], 'blog', ['as' => 'blog', 'uses' => 'backend\blog\BlogController@list']);
    Route::match(['get', 'post'], 'add-blog', ['as' => 'add-blog', 'uses' => 'backend\blog\BlogController@add']);
    Route::match(['get', 'post'], 'edit-blog/{id}', ['as' => 'edit-blog', 'uses' => 'backend\blog\BlogController@edit']);
    Route::match(['get', 'post'], 'blog-ajaxAction', ['as' => 'blog-ajaxAction', 'uses' => 'backend\blog\BlogController@ajaxAction']);
    
});

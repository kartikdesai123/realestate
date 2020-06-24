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

Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'frontend\HomeController@home']);

// property
Route::match(['get', 'post'], 'property', ['as' => 'property', 'uses' => 'frontend\PropertyController@propertylist']);
Route::match(['get', 'post'], 'property-details/{id}', ['as' => 'property-details', 'uses' => 'frontend\PropertyController@propertydetails']);

// blog
Route::match(['get', 'post'], 'blog', ['as' => 'blog', 'uses' => 'frontend\BlogController@blog']);
Route::match(['get', 'post'], 'blog-details/{id}', ['as' => 'blog-details', 'uses' => 'frontend\BlogController@blogdetails']);


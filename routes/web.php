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

Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'frontend\HomeController@homepage']);
Route::match(['get', 'post'], 'property_list', ['as' => 'property_list', 'uses' => 'frontend\PropertyController@propertylist']);


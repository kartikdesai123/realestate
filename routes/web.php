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

Route::match(['get', 'post'], 'signin', ['as' => 'signin', 'uses' => 'frontend\LoginController@index']);
Route::match(['get', 'post'], 'signup', ['as' => 'signup', 'uses' => 'frontend\LoginController@register']);

// property

Route::match(['get', 'post'], 'property', ['as' => 'property', 'uses' => 'frontend\PropertyController@propertylist']);
Route::match(['get', 'post'], 'property-details/{id}', ['as' => 'property-details', 'uses' => 'frontend\PropertyController@propertydetails']);

// Submit Property
Route::match(['get', 'post'], 'submit-property', ['as' => 'submit-property', 'uses' => 'frontend\PropertyController@submitproperty']);

// blog
Route::match(['get', 'post'], 'blog', ['as' => 'blog', 'uses' => 'frontend\BlogController@blog']);
Route::match(['get', 'post'], 'blog-details/{id}', ['as' => 'blog-details', 'uses' => 'frontend\BlogController@blogdetails']);

// services
Route::match(['get', 'post'], 'services', ['as' => 'services', 'uses' => 'frontend\ServicesController@services']);

// plan
Route::match(['get', 'post'], 'plan', ['as' => 'plan', 'uses' => 'frontend\PlanController@plan']);

// faq
Route::match(['get', 'post'], 'faq', ['as' => 'faq', 'uses' => 'frontend\FaqController@faq']);

// term-condition
Route::match(['get', 'post'], 'term-condition', ['as' => 'term-condition', 'uses' => 'frontend\TermsconditionController@termcondition']);

// about-us
Route::match(['get', 'post'], 'about-us', ['as' => 'about-us', 'uses' => 'frontend\AboutusController@aboutus']);

// contact-us
Route::match(['get', 'post'], 'contact-us', ['as' => 'contact-us', 'uses' => 'frontend\ContactusController@contactus']);



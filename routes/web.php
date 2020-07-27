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
Route::match(['get', 'post'], 'forgot-password', ['as' => 'forgot-password', 'uses' => 'frontend\LoginController@forgotpassword']);
Route::match(['get', 'post'], 'reset-password/{token}', ['as' => 'reset-password', 'uses' => 'frontend\LoginController@resetpassword']);
Route::match(['get', 'post'], 'testing-mail', ['as' => 'testing-mail', 'uses' => 'frontend\LoginController@testingmail']);
Route::match(['get', 'post'], 'getCookie', ['as' => 'getCookie', 'uses' => 'frontend\PlanController@getCookie']);
Route::match(['get', 'post'], 'setCookie', ['as' => 'setCookie', 'uses' => 'frontend\PlanController@setCookie']);

Route::match(['get', 'post'], 'email-verify/{token}', ['as' => 'email-verify', 'uses' => 'frontend\LoginController@emailverify']);

Route::match(['get', 'post'], 'user-register', ['as' => 'user-register', 'uses' => 'frontend\LoginController@userregister']);
Route::match(['get', 'post'], 'agent-register', ['as' => 'agent-register', 'uses' => 'frontend\LoginController@agentregister']);
Route::match(['get', 'post'], 'agency-register', ['as' => 'agency-register', 'uses' => 'frontend\LoginController@agencyregister']);
Route::match(['get', 'post'], 'company-register', ['as' => 'company-register', 'uses' => 'frontend\LoginController@companyregister']);


Route::match(['get', 'post'], 'user-logout', ['as' => 'user-logout', 'uses' => 'frontend\LoginController@logout']);
Route::match(['get', 'post'], 'my-profile', ['as' => 'my-profile', 'uses' => 'frontend\LoginController@myprofile']);
Route::match(['get', 'post'], 'change-password', ['as' => 'change-password', 'uses' => 'frontend\LoginController@changepasswpord']);
Route::match(['get', 'post'], 'my-property', ['as' => 'my-property', 'uses' => 'frontend\LoginController@myproperty']);


// Submit Property
Route::match(['get', 'post'], 'search', ['as' => 'search', 'uses' => 'frontend\SearchController@index']);

// property

Route::match(['get', 'post'], 'property', ['as' => 'property', 'uses' => 'frontend\PropertyController@propertylist']);
Route::match(['get', 'post'], 'property-details/{id}', ['as' => 'property-details', 'uses' => 'frontend\PropertyController@propertydetails']);

//  Property Video Call
Route::match(['get', 'post'], 'video-call-schedule', ['as' => 'video-call-schedule', 'uses' => 'frontend\PropertyController@videocallschedule']);
Route::match(['get', 'post'], 'approve-video-call-request/{id}', ['as' => 'approve-video-call-request', 'uses' => 'frontend\PropertyController@approve']);
Route::match(['get', 'post'], 'reject-video-call-request/{id}', ['as' => 'reject-video-call-request', 'uses' => 'frontend\PropertyController@reject']);

// Property VIsit
Route::match(['get', 'post'], 'personal-visit-schedule', ['as' => 'personal-visit-schedule', 'uses' => 'frontend\PropertyController@personalvisit']);
Route::match(['get', 'post'], 'approve-personal-visit-request/{id}', ['as' => 'approve-personal-visit-request', 'uses' => 'frontend\PropertyController@visitapprove']);
Route::match(['get', 'post'], 'reject-personal-visit-request/{id}', ['as' => 'reject-personal-visit-request', 'uses' => 'frontend\PropertyController@visitreject']);

// Contact
Route::match(['get', 'post'], 'contact-owner', ['as' => 'contact-owner', 'uses' => 'frontend\PropertyController@contactowner']);

// Submit Property
Route::match(['get', 'post'], 'submit-property', ['as' => 'submit-property', 'uses' => 'frontend\PropertyController@submitproperty']);

// blog
Route::match(['get', 'post'], 'blog', ['as' => 'blog', 'uses' => 'frontend\BlogController@blog']);
Route::match(['get', 'post'], 'blog-details/{id}', ['as' => 'blog-details', 'uses' => 'frontend\BlogController@blogdetails']);


// agent

Route::match(['get', 'post'], 'agent', ['as' => 'agent', 'uses' => 'frontend\AgentController@agentList']);
Route::match(['get', 'post'], 'agent-details/{id}', ['as' => 'agent-details', 'uses' => 'frontend\AgentController@agentDetail']);

// agency-detail

Route::match(['get', 'post'], 'agency', ['as' => 'agency', 'uses' => 'frontend\AgencyController@agencyList']);
Route::match(['get', 'post'], 'agency-details/{id}', ['as' => 'agency-details', 'uses' => 'frontend\AgencyController@agencyDetail']);


// company-detail

Route::match(['get', 'post'], 'company', ['as' => 'company', 'uses' => 'frontend\CompanyController@companyList']);
Route::match(['get', 'post'], 'company-details/{id}', ['as' => 'company-details', 'uses' => 'frontend\CompanyController@companyDetail']);


// services
Route::match(['get', 'post'], 'services', ['as' => 'services', 'uses' => 'frontend\ServicesController@services']);

// plan
Route::match(['get', 'post'], 'plan', ['as' => 'plan', 'uses' => 'frontend\PlanController@plan']);
Route::match(['get', 'post'], 'plan-details/{id}', ['as' => 'plan-details', 'uses' => 'frontend\PlanController@plandetails']);
Route::match(['get', 'post'], 'plan-detail-ajaxAction', ['as' => 'plan-detail-ajaxAction', 'uses' => 'frontend\PlanController@ajaxAction']);

// faq
Route::match(['get', 'post'], 'faq', ['as' => 'faq', 'uses' => 'frontend\FaqController@faq']);

// term-condition
Route::match(['get', 'post'], 'term-condition', ['as' => 'term-condition', 'uses' => 'frontend\TermsconditionController@termcondition']);

// about-us
Route::match(['get', 'post'], 'about-us', ['as' => 'about-us', 'uses' => 'frontend\AboutusController@aboutus']);

// contact-us
Route::match(['get', 'post'], 'contact-us', ['as' => 'contact-us', 'uses' => 'frontend\ContactusController@contactus']);





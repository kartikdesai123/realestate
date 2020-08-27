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
    
    // Users List
    Route::match(['get', 'post'], 'admin-user-list', ['as' => 'admin-user-list', 'uses' => 'backend\users\UsersController@list']);
    Route::match(['get', 'post'], 'admin-user-list-ajaxAction', ['as' => 'admin-user-list-ajaxAction', 'uses' => 'backend\users\UsersController@ajaxAction']);
   
    // Agent List
    Route::match(['get', 'post'], 'admin-agent-list', ['as' => 'admin-agent-list', 'uses' => 'backend\users\AgentController@list']);
    Route::match(['get', 'post'], 'admin-agent-list-ajaxAction', ['as' => 'admin-agent-list-ajaxAction', 'uses' => 'backend\users\AgentController@ajaxAction']);
   
    // agency List
    Route::match(['get', 'post'], 'admin-agency-list', ['as' => 'admin-agency-list', 'uses' => 'backend\users\AgencyController@list']);
    Route::match(['get', 'post'], 'admin-agency-list-ajaxAction', ['as' => 'admin-agency-list-ajaxAction', 'uses' => 'backend\users\AgencyController@ajaxAction']);
  
    // company List
    Route::match(['get', 'post'], 'admin-company-list', ['as' => 'admin-company-list', 'uses' => 'backend\users\CompanyController@list']);
    Route::match(['get', 'post'], 'admin-company-list-ajaxAction', ['as' => 'admin-company-list-ajaxAction', 'uses' => 'backend\users\CompanyController@ajaxAction']);

    // Blog Category
    Route::match(['get', 'post'], 'blog-category', ['as' => 'blog-category', 'uses' => 'backend\blog\BlogCategoryController@list']);
    Route::match(['get', 'post'], 'add-blog-category', ['as' => 'add-blog-category', 'uses' => 'backend\blog\BlogCategoryController@add']);
    Route::match(['get', 'post'], 'edit-blog-category/{id}', ['as' => 'edit-blog-category', 'uses' => 'backend\blog\BlogCategoryController@edit']);
    Route::match(['get', 'post'], 'blog-category-ajaxAction', ['as' => 'blog-category-ajaxAction', 'uses' => 'backend\blog\BlogCategoryController@ajaxAction']);
    
    // Blog
    Route::match(['get', 'post'], 'admin-blog', ['as' => 'admin-blog', 'uses' => 'backend\blog\BlogController@list']);
    Route::match(['get', 'post'], 'admin-add-blog', ['as' => 'admin-add-blog', 'uses' => 'backend\blog\BlogController@add']);
    Route::match(['get', 'post'], 'admin-edit-blog/{id}', ['as' => 'admin-edit-blog', 'uses' => 'backend\blog\BlogController@edit']);
    Route::match(['get', 'post'], 'admin-view-blog/{id}', ['as' => 'admin-view-blog', 'uses' => 'backend\blog\BlogController@view']);
    Route::match(['get', 'post'], 'admin-blog-ajaxAction', ['as' => 'admin-blog-ajaxAction', 'uses' => 'backend\blog\BlogController@ajaxAction']);
    // Plan
    Route::match(['get', 'post'], 'admin-plan', ['as' => 'admin-plan', 'uses' => 'backend\plan\PlanController@list']);
    Route::match(['get', 'post'], 'admin-add-plan', ['as' => 'admin-add-plan', 'uses' => 'backend\plan\PlanController@add']);
    Route::match(['get', 'post'], 'admin-edit-plan/{id}', ['as' => 'admin-edit-plan', 'uses' => 'backend\plan\PlanController@edit']);
    Route::match(['get', 'post'], 'admin-view-plan/{id}', ['as' => 'admin-view-plan', 'uses' => 'backend\plan\PlanController@view']);
    Route::match(['get', 'post'], 'admin-plan-ajaxAction', ['as' => 'admin-plan-ajaxAction', 'uses' => 'backend\plan\PlanController@ajaxAction']);

    // Plan
    Route::match(['get', 'post'], 'admin-plan-details', ['as' => 'admin-plan-details', 'uses' => 'backend\plan\PlanDetailsController@list']);
    Route::match(['get', 'post'], 'admin-add-plan-details', ['as' => 'admin-add-plan-details', 'uses' => 'backend\plan\PlanDetailsController@add']);
    Route::match(['get', 'post'], 'admin-edit-plan-details/{id}', ['as' => 'admin-edit-plan-details', 'uses' => 'backend\plan\PlanDetailsController@edit']);
    Route::match(['get', 'post'], 'admin-view-plan-details/{id}', ['as' => 'admin-view-plan-details', 'uses' => 'backend\plan\PlanDetailsController@view']);
    Route::match(['get', 'post'], 'admin-plan-details-ajaxAction', ['as' => 'admin-plan-details-ajaxAction', 'uses' => 'backend\plan\PlanDetailsController@ajaxAction']);

    //Terms & Condition
    Route::match(['get', 'post'], 'admin-terms-condition', ['as' => 'admin-terms-condition', 'uses' => 'backend\termscondition\TermsConditionController@termscondition']);
    
    //General-settings
    Route::match(['get', 'post'], 'admin-general-settings', ['as' => 'admin-general-settings', 'uses' => 'backend\generalsettings\GeneralSettingsController@generalsettings']);
    
    // About-us
    Route::match(['get', 'post'], 'admin-about-us', ['as' => 'admin-about-us', 'uses' => 'backend\aboutus\AboutusController@aboutus']);
    
    // Home-City
    Route::match(['get', 'post'], 'admin-home-city', ['as' => 'admin-home-city', 'uses' => 'backend\homecity\HomecityController@index']);
    Route::match(['get', 'post'], 'admin-edit-home/{id}', ['as' => 'admin-edit-home', 'uses' => 'backend\homecity\HomecityController@edit']);
    Route::match(['get', 'post'], 'admin-home-ajaxAction', ['as' => 'admin-home-ajaxAction', 'uses' => 'backend\homecity\HomecityController@ajaxAction']);
    
    
    // Plan
    Route::match(['get', 'post'], 'admin-faq', ['as' => 'admin-faq', 'uses' => 'backend\faq\FaqController@list']);
    Route::match(['get', 'post'], 'admin-add-faq', ['as' => 'admin-add-faq', 'uses' => 'backend\faq\FaqController@add']);
    Route::match(['get', 'post'], 'admin-edit-faq/{id}', ['as' => 'admin-edit-faq', 'uses' => 'backend\faq\FaqController@edit']);
    Route::match(['get', 'post'], 'admin-faq-ajaxAction', ['as' => 'admin-faq-ajaxAction', 'uses' => 'backend\faq\FaqController@ajaxAction']);
    
    // Services
    Route::match(['get', 'post'], 'admin-services-details', ['as' => 'admin-services-details', 'uses' => 'backend\servicesDetails\ServiceDetailsController@servicesDetails']);
    
    // Header Silder Text
    Route::match(['get', 'post'], 'header-silder-text', ['as' => 'header-silder-text', 'uses' => 'backend\headertext\HeaderSilderTextController@text']);

    // Reported Property 
    Route::match(['get', 'post'], 'admin-reported-property', ['as' => 'admin-reported-property', 'uses' => 'backend\reportedproperty\ReportedpropertyController@list']);
    Route::match(['get', 'post'], 'admin-reported-property-ajaxAction', ['as' => 'admin-reported-property-ajaxAction', 'uses' => 'backend\reportedproperty\ReportedpropertyController@ajaxAction']);
    // Plan
    Route::match(['get', 'post'], 'admin-services', ['as' => 'admin-services', 'uses' => 'backend\servicesDetails\ServicesController@list']);
    Route::match(['get', 'post'], 'admin-add-services', ['as' => 'admin-add-services', 'uses' => 'backend\servicesDetails\ServicesController@add']);
    Route::match(['get', 'post'], 'admin-edit-services/{id}', ['as' => 'admin-edit-services', 'uses' => 'backend\servicesDetails\ServicesController@edit']);
    Route::match(['get', 'post'], 'admin-view-services/{id}', ['as' => 'admin-view-services', 'uses' => 'backend\servicesDetails\ServicesController@view']);
    Route::match(['get', 'post'], 'admin-services-ajaxAction', ['as' => 'admin-services-ajaxAction', 'uses' => 'backend\servicesDetails\ServicesController@ajaxAction']);
});
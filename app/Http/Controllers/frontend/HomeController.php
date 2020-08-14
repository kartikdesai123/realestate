<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PropertyDetails;
use App\Model\Home;
use App\Model\HomeCity;
use App\Model\Blog;
use Config;
use App\Model\Users;
use App\Model\Propertyreview;
class HomeController extends Controller
{
    
    function __construct(){

    }

    public function home(Request $request){

        $objUsers = new Users();
        $data['agentList'] = $objUsers->agentListHome();

        $objPropertyreview = new Propertyreview();
        $data['review'] = $objPropertyreview->reviewList();
        
        $objUsers = new Users();
        $data['companyList'] = $objUsers->companyList();
        
        $objBlog = new Blog();
        $data['blogDetails'] = $objBlog->getBlogList();

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Real Estate';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Real Estate';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Real Estate';
        $data['css'] = array(
            'select2/select2.css',
            'range-slider/ion.rangeSlider.css',
            'owl-carousel/owl.carousel.min.css',
            'magnific-popup/magnific-popup.css',
            'typeahead/typeahead.css',
        );
        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'jquery.appear.js',
            'counter/jquery.countTo.js',
            'select2/select2.full.js',
            'range-slider/ion.rangeSlider.min.js',
            'owl-carousel/owl.carousel.min.js',
            'magnific-popup/jquery.magnific-popup.min.js',
            'countdown/jquery.downCount.js',
            'typeahead/handlebars.min.js',
            'typeahead/typeahead.bundle.min.js',
        );
        $data['js'] = array(
            'home.js'
        );
        $data['funinit'] = array(
            'Home.init()'
        );
        
        $objhomePage = new Home();
        $data['property_location'] = $objhomePage->propertiesByLocation();
        $data['feature_property'] = $objhomePage->featuredProperty();
        
        $objhomeCity = new HomeCity();
        $data['homecity'] = $objhomeCity->gethomeCity();
       
        return view('frontend.pages.home.home', $data);
    }
}

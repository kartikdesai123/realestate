<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class HomeController extends Controller
{
    //
    function __construct(){

    }

    public function home(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Real Estate';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Real Estate';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Real Estate';
        $data['css'] = array(
            'select2/select2.css',
            'range-slider/ion.rangeSlider.css',
            'owl-carousel/owl.carousel.min.css',
            'magnific-popup/magnific-popup.css',
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
        );
        $data['js'] = array(
            'home.js'
        );
        $data['funinit'] = array(
            'Home.init()'
        );
        return view('frontend.pages.home.home', $data);
    }
}

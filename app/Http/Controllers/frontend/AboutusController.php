<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class AboutusController extends Controller
{
    function __construct(){

    }

    public function aboutus(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || About us ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || About us ';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || About us ';

        $data['css'] = array(
            'owl-carousel/owl.carousel.min.css',
            'magnific-popup/magnific-popup.css',
        );

        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'jquery.appear.js',
            'counter/jquery.countTo.js',
            'owl-carousel/owl.carousel.min.js',
            'magnific-popup/jquery.magnific-popup.min.js',
        );
        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'About Us' => 'About Us',
        ));
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.aboutus.aboutus', $data);
    }
}

<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class BlogController extends Controller
{
    function __construct(){

    }

    public function blog(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blogs';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blogs';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blogs';
        $data['css'] = array(
            'owl-carousel/owl.carousel.min.css',
        );
        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'owl-carousel/owl.carousel.min.js',
        );
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.blog.blog', $data);
    }

    public function blogdetails(Request $request,$id){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blog Details';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blog Details';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blog Details';
        $data['css'] = array(
            'owl-carousel/owl.carousel.min.css',
        );
        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'owl-carousel/owl.carousel.min.js',
        );
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.blog.blogdetails', $data);
    }
}

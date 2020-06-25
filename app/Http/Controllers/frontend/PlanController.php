<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class PlanController extends Controller
{
    function __construct(){

    }

    public function plan(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan';

        $data['css'] = array(
            'owl-carousel/owl.carousel.min.css',
        );

        $data['plugincss'] = array(
            
        );
        $data['pluginjs'] = array(
            'owl-carousel/owl.carousel.min.js',
        );

        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.plan.plan', $data);
    }
}

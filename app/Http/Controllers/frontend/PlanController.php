<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class PlanController extends Controller
{
    function __construct(){

    }

    public function services(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan';

        $data['css'] = array();

        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'jquery.appear.js',
            'counter/jquery.countTo.js',
        );

        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.plan.plan', $data);
    }
}

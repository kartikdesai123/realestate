<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class ServicesController extends Controller
{
    function __construct(){

    }

    public function services(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Real Estate';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Real Estate';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Real Estate';

        $data['css'] = array();

        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'jquery.appear.js',
            'counter/jquery.countTo.js',
        );

        $data['js'] = array();
        $data['funinit'] = array();
        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Services' => 'Services',
        ));
        return view('frontend.pages.services.services', $data);
    }
}

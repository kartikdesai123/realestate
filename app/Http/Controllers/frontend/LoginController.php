<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class LoginController extends Controller
{
    function __construct(){

    }

    public function index(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Login ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Login ';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Login ';

        $data['css'] = array(
            'magnific-popup/magnific-popup.css',
        );

        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'jquery.appear.js',
            'counter/jquery.countTo.js',
            'magnific-popup/jquery.magnific-popup.min.js',
        );

        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.login.login', $data);
    }
    
    public function register(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Register ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Register ';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Register ';

        $data['css'] = array(
            'magnific-popup/magnific-popup.css',
        );

        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'jquery.appear.js',
            'counter/jquery.countTo.js',
            'magnific-popup/jquery.magnific-popup.min.js',
        );

        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.login.register', $data);
    }
}

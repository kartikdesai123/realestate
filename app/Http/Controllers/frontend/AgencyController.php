<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class AgencyController extends Controller
{
    function __construct(){

    }

    public function agencyList(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency List';

        $data['css'] = array(
            'magnific-popup/magnific-popup.css',
        );

        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'jquery.appear.js',
            'magnific-popup/jquery.magnific-popup.min.js',
        );

        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.agency.list', $data);
    }
    
    public function agencyDetail(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency Detail';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency Detail';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency Detail';

        $data['css'] = array(
            'magnific-popup/magnific-popup.css',
        );

        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'jquery.appear.js',
            'magnific-popup/jquery.magnific-popup.min.js',
        );

        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.agency.detail', $data);
    }
}

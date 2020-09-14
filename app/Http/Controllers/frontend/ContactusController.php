<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class ContactusController extends Controller
{
    function __construct(){
         parent::__construct();
    }

    public function contactus (Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Contact us ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Contact us ';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Contact us ';

        $data['css'] = array();

        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'jquery.appear.js',
            'counter/jquery.countTo.js',
        );
        $data['header'] = array(
            'breadcrumb' => array(
                'Home' => route("home"),
                'Contact Us' => "Contact Us",
        ));
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.contactus.contactus', $data);
    }
}

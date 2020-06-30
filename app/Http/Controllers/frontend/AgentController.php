<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class AgentController extends Controller
{
    function __construct(){

    }

    public function agentList(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agent List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agent List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agent List';

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
        return view('frontend.pages.agent.list', $data);
    }
    
    public function agentDetail(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agent Detail';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agent Detail';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agent Detail';

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
        return view('frontend.pages.agent.detail', $data);
    }
}
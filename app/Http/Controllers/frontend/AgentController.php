<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class AgentController extends Controller
{
    function __construct(){

    }

    public function agentDetail(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agent';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agent';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agent';

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

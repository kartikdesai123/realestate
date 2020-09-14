<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Users;
use App\Model\PropertyDetails;

class AgentController extends Controller
{
    function __construct(){
         parent::__construct();
    }

    public function agentList(Request $request){
        if($request->input('agentype')){
            $data['agentType']=$agentType = $request->input('agentype');
        }else{
            $data['agentType']=$agentType = 0;
        }
        $objUsers =  new Users();
        $data['agencyList'] = $objUsers->agentList("AG",$agentType);

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

        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Agent List' => 'Agent  List',
        ));

        $data['js'] = array(
            'agent.js'
        );
        $data['funinit'] = array(
            'Agent.init()'
        );
        return view('frontend.pages.agent.list', $data);
    }
    
    public function agentDetail(Request $request,$id){
        $session = $request->session()->all();
        $objPropertyDetails = new PropertyDetails();
        $data['propertyList'] = $objPropertyDetails->getPropertyList($id);

        

        $objUsers =  new Users();
        $data['agencyList'] = $objUsers->agentDetail($id);

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
        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Agent List' => route("agent"),
                'Agent Details' => 'Agent Details',
        ));
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.agent.detail', $data);
    }
}

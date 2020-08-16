<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;

use App\Model\Users;
use App\Model\PropertyDetails;
class AgencyController extends Controller
{
    function __construct(){

    }

    public function agencyList(Request $request){
        $objUsers =  new Users();
        $data['agencyList'] = $objUsers->agencyList("AY");

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

        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Agency List' => 'Agency  List',
        ));

        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.agency.list', $data);
    }
    
    public function agencyDetail(Request $request,$agencyId){

        $session = $request->session()->all();


        $objPropertyDetails = new PropertyDetails();
        $data['propertyList'] = $objPropertyDetails->getAgencyPropertyList($agencyId);

        $objUsers = new Users();
        $data['agencyDetail'] = $objUsers->agencyDetail($agencyId);
        
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

        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Agency List' => route("agency"),
                'Agency Details' => 'Agency  Details',
        ));

        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.agency.detail', $data);
    }
}

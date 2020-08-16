<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Users;
use App\Model\Companydetails;
use App\Model\PropertyDetails;
class CompanyController extends Controller
{
    function __construct(){

    }

    public function companyList(Request $request){

        $objUsers =  new Users();
        $data['companyList'] = $objUsers->companyListHome("CC");

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Company List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Company List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Company List';

        $data['css'] = array(
            'magnific-popup/magnific-popup.css',
        );

        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'jquery.appear.js',
            'magnific-popup/jquery.magnific-popup.min.js',
        );

        $data['header'] = array(
            'breadcrumb' => array(
                'Home' => route("home"),
                'Company List' => 'Company List',
        ));

        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.company.list', $data);
    }
    
    public function companyDetail(Request $request,$companyId){
        $session = $request->session()->all();

        $objPropertyDetails = new PropertyDetails();
        $data['propertyList'] = $objPropertyDetails->getCompanyPropertyList($companyId);

        $objUsers = new Users();
        $data['companyDetail'] = $objUsers->companyDetail($companyId);

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Company Detail';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Company Detail';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Company Detail';

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
                'Company List' => route("company"),
                'Company Details' => 'Company Details',
        ));
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.company.detail', $data);
    }
}

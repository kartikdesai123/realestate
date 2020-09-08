<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\PropertyDetails;
use App\Model\Search;
use App\Model\Home;

class SearchController extends Controller
{
    function __construct(){

    }

    public function index(Request $request,$city = NULL){
       
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Search';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Search';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Search';

        $data['css'] = array(
            'jquery-ui/jquery-ui.min.css',
        );
         $data['pluginjs'] = array(
             'jquery-ui/jquery-ui.min.js',
        );
        $data['js'] = array(
            'search.js',
        );
        $data['funinit'] = array(
            'Search.mapint()',
        );
        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Property Search' => 'Property Search',
        ));
        
        if($city){
            $objSearch = new Search();
            $data['property'] = $objSearch->propertiesSearch($city);
        }
        
        $objPropetyByLoc = new Home();
        $data['property_location'] = $objPropetyByLoc->propertiesByLocation();
        
        return view('frontend.pages.search.search', $data);
    }

    public function plandetails(Request $request,$id){
        $objPlan = new Plan();
        $data['plan'] =  $objPlan->editDetails($id);

        $objPlandetails = new Plandetails();
        $data['plandetails'] =  $objPlandetails->plandetails($id);
        

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan - ' . ucfirst($data['plan'][0]->planname);
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan - ' . ucfirst($data['plan'][0]->planname);
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan - ' . ucfirst($data['plan'][0]->planname);

        $data['css'] = array();

        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
        );

        $data['js'] = array(
            'planDetails.js');
        $data['funinit'] = array(
            'PlanDetails.selectPlan()'
        );

        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Property Search' => 'Property Search',
        ));
        return view('frontend.pages.plan.plandetails', $data);
    }
}

<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Plan;
use App\Model\Plandetails;
class PlanController extends Controller
{
    function __construct(){

    }

    public function plan(Request $request){
        $objPlan = new Plan();
        $data['planlist'] =  $objPlan->getplanList();
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan';

        $data['css'] = array(
            'owl-carousel/owl.carousel.min.css',
        );

        $data['plugincss'] = array(
            
        );
        $data['pluginjs'] = array(
            'owl-carousel/owl.carousel.min.js',
        );

        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.plan.plan', $data);
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
        return view('frontend.pages.plan.plandetails', $data);
    }
}

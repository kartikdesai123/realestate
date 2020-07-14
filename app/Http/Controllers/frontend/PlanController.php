<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

        $data['header'] = array(
            'breadcrumb' => array(
                'Home' => route("home"),
                'Plan List' => "Plan List",
        ));
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
        $data['header'] = array(
            'breadcrumb' => array(
                'Home' => route("home"),
                'Plan List' => route("plan"),
                'Plan Details' => "Plan Details",
        ));
        
        return view('frontend.pages.plan.plandetails', $data);
    }

    public function setCookie(Request $request) {
        $minutes = 1;
        $response = new Response('Hello World');
        $response->withCookie(cookie('name', 'virat', $minutes));
        return $response;
     }


    public function getCookie(Request $request) {
        $value = $request->cookie('planId');
        echo $value;
     }

    public function ajaxAction(Request $request){
        
        $action = $request->input('action');
        switch ($action) {
            case 'selectPlan':
                $objPlandetails = new Plandetails();
                $planUser = $objPlandetails->getPlanuser($request->input('planId'));
                print_r($planUser);
                exit;

                $minutes = 10;
                $response = new Response();
                $response->withCookie(cookie('planId', $request->input('planId'), $minutes));
                return $planUser[0]->planfor;

                // $response = new Response();
                // $response->withCookie(cookie()->forever('planId', $request->input('planId')));
                // exit;
                
        }
    }
}

<?php

namespace App\Http\Controllers\backend\termscondition;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\TermsCondition;

class TermsConditionController extends Controller
{
    function __construct(){

    }

    public function termscondition(Request $request){
    	if ($request->isMethod("post")) {
    		// echo "<pre>";print_r($request->input());die;
           $objTerms = new TermsCondition();
           $result = $objTerms->addeditTerms($request);
           if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Terms & conditions successfully updated';
                $return['redirect'] = route('admin-terms-condition');
            } else {
            	$return['status'] = 'error';
                $return['message'] = 'Something goes to wrong.';
            }
            echo json_encode($return);
            exit;
        }
        $objGetTerms = new TermsCondition();
        $data['termsdata'] = $objGetTerms->getTermsCondition();

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Terms & Conditions';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Terms & Conditions';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Terms & Conditions';
        $data['pagetitle'] = "Terms & Conditions";
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
        
        );
        $data['pluginjs'] = array(
            'customjs/plugins/toastr/toastr.min.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'termscondition.js'
        );
        $data['funinit'] = array(
            'Termscondition.init()'
        );
        $data['header'] = array(
            'title' => 'Terms & Conditions',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Terms & Conditions' => "Terms & Conditions",
        ));
        return view('backend.pages.termscondition.termscondition', $data);
    }
}

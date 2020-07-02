<?php

namespace App\Http\Controllers\backend\servicesDetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Servicedetails;
class ServiceDetailsController extends Controller
{
    
    function __construct(){

    }

    public function servicesDetails(Request $request){
        if ($request->isMethod("post")) {
    		// echo "<pre>";print_r($request->input());die;
            $objServicedetails = new Servicedetails();
           $result = $objServicedetails->addServicedetails($request);
           if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'General settings successfully updated.';
                $return['redirect'] = route('admin-services-details');
            } else {
            	$return['status'] = 'error';
                $return['message'] = 'Something goes to wrong.';
            }
            echo json_encode($return);
            exit;
        }
        $objServicedetails = new Servicedetails();
        $data['details'] = $objServicedetails->getDetails();
        
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Service Details';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Service Details';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Service Details';
        $data['pagetitle'] = "Service Details";
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
            'servicedetails.js'
        );
        $data['funinit'] = array(
            'Servicedetails.init()'
        );
        $data['header'] = array(
            'title' => 'Service Details',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Service Details' => "Service Details",
        ));
        return view('backend.pages.servicesDetails.servicesDetails', $data);
    }
}

<?php

namespace App\Http\Controllers\backend\plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Plandetails;
use App\Model\Plan;
class PlanDetailsController extends Controller
{
    //
    function __construct(){

    }


    public function list(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan Details List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan Details List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan Details List';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
            'global/plugins/datatables/datatables.min.css',
            'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css',
        );
        $data['pluginjs'] = array(
            'customjs/plugins/toastr/toastr.min.js',
            'global/scripts/datatable.js',
            'global/plugins/datatables/datatables.min.js',
            'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'plandetails.js',
        );
        $data['funinit'] = array(
            'Plandetails.init()'
        );
        $data['header'] = array(
            'title' => 'Plan Details List',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Plan Details List' => "Plan Details List",
        ));
        return view('backend.pages.plan.plandetails.list', $data);
    }


    public function add(Request $request){

        $objPlan = new Plan();
        $data['planlist'] = $objPlan->getplan();
        
        if ($request->isMethod("post")) {
            
            $objPlandetails = new Plandetails();
            $result = $objPlandetails->add($request);

            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Plan details successfully added';
                $return['redirect'] = route('admin-plan-details');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'Plan details name already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
            }
            echo json_encode($return);
            exit;

           
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Plan Details';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Plan Details';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Plan Details';
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
            'plandetails.js',
        );
        $data['funinit'] = array(
            'Plandetails.add()'
        );
        $data['header'] = array(
            'title' => 'Add New Plan Details',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Plan Details' => route("admin-plan-details"),
                'Add Plan Details' => "Add Plan Details",
        ));
        return view('backend.pages.plan.plandetails.add', $data);
    }
    public function edit(Request $request,$id){

        $objPlan = new Plan();
        $data['planlist'] = $objPlan->getplan();
        
        $objPlandetails = new Plandetails();
        $data['editDetails'] = $objPlandetails->editDetails($id);
        if ($request->isMethod("post")) {
            
            $objPlandetails = new Plandetails();
            $result = $objPlandetails->edit($request);

            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Plan details successfully updated';
                $return['redirect'] = route('admin-plan-details');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'Plan details name already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
            }
            echo json_encode($return);
            exit;
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Plan Details';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Plan Details';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Plan Details';
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
            'plandetails.js',
        );
        $data['funinit'] = array(
            'Plandetails.edit()'
        );
        $data['header'] = array(
            'title' => 'Edit Plan Details',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Plan Details' => route("admin-plan-details"),
                'Edit Plan Details' => "Edit Plan Details",
        ));
        return view('backend.pages.plan.plandetails.edit', $data);
    }

    public function ajaxAction(Request $request){

        $action = $request->input('action');

        switch ($action) {
            case 'getdatatable':
               
                $objPlandetails = new Plandetails();
                $list = $objPlandetails->getdatatable();
                echo json_encode($list);
                break;
            case 'deletePlandetails':
                    $objPlandetails = new Plandetails();
                    $result = $objPlandetails->deletePlandetails($request->input('data'));
                    if ($result) {
                        $return['status'] = 'success';
                        $return['message'] = 'Plan details successfully deleted';
                        $return['redirect'] = route('admin-plan-details');
                    } else {
                        $return['status'] = 'error';
                        $return['message'] = 'Something goes to wrong.';
                    }
                    echo json_encode($return);
                    exit;
                echo json_encode($list);
                break;
        }

    }
}

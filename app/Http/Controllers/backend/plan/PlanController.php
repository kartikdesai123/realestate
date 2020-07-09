<?php

namespace App\Http\Controllers\backend\plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Plan;
class PlanController extends Controller
{
    function __construct(){

    }


    public function list(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Plan List';
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
            'plan.js',
        );
        $data['funinit'] = array(
            'Plan.init()'
        );
        $data['header'] = array(
            'title' => 'Plan List',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Plan List' => "Plan List",
        ));
        return view('backend.pages.plan.plan.list', $data);
    }



    public function add(Request $request){
        if ($request->isMethod("post")) {
            $objPlan = new Plan();
            $result = $objPlan->add($request);

            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Plan  successfully added';
                $return['redirect'] = route('admin-plan');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'Plan already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
            }
            echo json_encode($return);
            exit;
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Plan';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Plan';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Plan';
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
            'plan.js'
        );
        $data['funinit'] = array(
            'Plan.add()'
        );
        $data['header'] = array(
            'title' => 'Add New Plan',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Plan List' => route("admin-plan"),
                'Add Plan' => "Add Plan",
        ));
        return view('backend.pages.plan.plan.add', $data);
    }
    public function edit(Request $request,$id){
        if ($request->isMethod("post")) {

            $objPlan = new Plan();
            $result = $objPlan->edit($request);

            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Plan successfully updated';
                $return['redirect'] = route('admin-plan');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'Plan already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
            }
            echo json_encode($return);
            exit;
        }

        $objPlan = new Plan();
        $data['details'] = $objPlan->editDetails($id);

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Plan';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Plan';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Plan';
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
            'plan.js'
        );
        $data['funinit'] = array(
            'Plan.edit()'
        );
        $data['header'] = array(
            'title' => 'Edit Plan',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Plan List' => route("admin-plan"),
                'Edit Plan' => "Edit Plan",
        ));
        return view('backend.pages.plan.plan.edit', $data);
    }


    public function ajaxAction(Request $request){

        $action = $request->input('action');

        switch ($action) {
            case 'getdatatable':
                $objPlan = new Plan();
                $list = $objPlan->getdatatable();
                echo json_encode($list);
                break;

            case 'deleteplan':
                    $objPlan = new Plan();
                    $result = $objPlan->deleteplan($request->input('data'));
                    if ($result) {
                        $return['status'] = 'success';
                        $return['message'] = 'Plan successfully deleted';
                        $return['redirect'] = route('admin-plan');
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

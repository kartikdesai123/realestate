<?php

namespace App\Http\Controllers\backend\servicesDetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Services;
class ServicesController extends Controller
{
    function __construct(){

    }

    public function list(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Services List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Services List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Services List';
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
            'services.js'
        );
        $data['funinit'] = array(
            'Services.init()'
        );
        $data['header'] = array(
            'title' => 'Services List',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Services List' => 'Services List'
        ));
        return view('backend.pages.services.list', $data);
    }


    
    public function add(Request $request){
        if ($request->isMethod("post")) {
            
            $objServices = new Services();
            $result = $objServices->add($request);

            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Services successfully added';
                $return['redirect'] = route('admin-services');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'Services already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
            }
            echo json_encode($return);
            exit;

           
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Services';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Services';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Services';
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
            'services.js'
        );
        $data['funinit'] = array(
            'Services.add()'
        );
        $data['header'] = array(
            'title' => 'Add New Plan',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Services List' => route("admin-services"),
                'Add Services' => "Add Services",
        ));
        return view('backend.pages.services.add', $data);
    }

    public function edit(Request $request,$id){
        if ($request->isMethod("post")) {
            
            $objServices = new Services();
            $result = $objServices->edit($request);

            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Services successfully updated';
                $return['redirect'] = route('admin-services');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'Services already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
            }
            echo json_encode($return);
            exit;

           
        }
        $objServices = new Services();
        $data['details'] = $objServices->editDetails($id);

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Services';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Services';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Services';
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
            'services.js'
        );
        $data['funinit'] = array(
            'Services.edit()'
        );
        $data['header'] = array(
            'title' => 'Edit Plan',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Services List' => route("admin-services"),
                'Edit Services' => "Edit Services",
        ));
        return view('backend.pages.services.edit', $data);
    }

    public function view(Request $request,$id){

        $objServices = new Services();
        $data['details'] = $objServices->editDetails($id);
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || View Service';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || View Service ';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || View Service ';        
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['header'] = array(
            'title' => 'View Service',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Service List' => route("admin-services"),
                'View Service' => "View Service",
        ));
        return view('backend.pages.services.view', $data);
    }

    public function ajaxAction(Request $request){

        $action = $request->input('action');

        switch ($action) {
            case 'getdatatable':
                $objServices = new Services();
                $list = $objServices->getdatatable();
                echo json_encode($list);
                break;

            case 'deleteservices':
                    $objServices = new Services();
                    $result = $objServices->deleteservices($request->input('data'));
                    if ($result) {
                        $return['status'] = 'success';
                        $return['message'] = 'Services successfully deleted';
                        $return['redirect'] = route('admin-services');
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

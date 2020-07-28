<?php

namespace App\Http\Controllers\backend\homecity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\HomeCity;

class HomecityController extends Controller
{
    //

    function __construct(){

    }

    public function index(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Home city List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Home city List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Home city List';
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
            'homecity.js'
        );
        $data['funinit'] = array(
            'Homecity.init()'
        );
        $data['header'] = array(
            'title' => 'Homecity List',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Home City List' => "Home City List",
        ));
        return view('backend.pages.homecity.list', $data);
    }

    public function edit (Request $request,$id){

        $objhomeCity = new HomeCity();
        $data['details'] = $objhomeCity->editDetails($id);
//        print_r($data['details']); exit();
        
        if ($request->isMethod("post")) {
            $objHome = new HomeCity();
            $result = $objHome->edit($request);
            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Home city successfully updated';
                $return['redirect'] = route('admin-home-city');
            } else {
               
                $return['status'] = 'error';
                $return['message'] = 'Something goes to wrong.';
                
            }
            echo json_encode($return);
            exit;
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Home city';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Home city';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Home city';
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
            'homecity.js'
        );
        $data['funinit'] = array(
            'Homecity.edit()'
        );
        $data['header'] = array(
            'title' => 'Edit Homecity',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Home city List' => route("admin-home-city"),
                'Edit Home city' => "Edit Home city",
        ));
        return view('backend.pages.homecity.edit', $data);
    }

    public function ajaxAction(Request $request){

        $action = $request->input('action');

        switch ($action) {
            case 'getdatatable':
                    $objhome = new HomeCity();
                    $list = $objhome->getdatatable();
                    
                echo json_encode($list);
                break;
        }
    }
}

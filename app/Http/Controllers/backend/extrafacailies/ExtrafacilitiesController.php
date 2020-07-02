<?php

namespace App\Http\Controllers\backend\extrafacailies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Extrafacilities;
class ExtrafacilitiesController extends Controller
{
    
    function __construct(){

    }

    public function extrafacilities(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Extra Facailies';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Extra Facailies';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Extra Facailies';
        $data['pagetitle'] = "Extra Facailies";
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
            'extrafacilities.js'
        );
        $data['funinit'] = array(
            'Extrafacilities.init()'
        );
        $data['header'] = array(
            'title' => 'Extra Facilities',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Extra Facilities' => "Extra Facilities",
        ));
        return view('backend.pages.extrafacilities.extrafacilities', $data);
    }



    public function addextrafacilities (Request $request){
        if ($request->isMethod("post")) {
            $objExtrafacilities = new Extrafacilities();
            $result = $objExtrafacilities->add($request);

            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Facilities details successfully added';
                $return['redirect'] = route('extra-facilities');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'Facilities details already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
            }
            echo json_encode($return);
            exit;

        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Extra Facailies';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Extra Facailies';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Extra Facailies';
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
            'extrafacilities.js'
        );
        $data['funinit'] = array(
            'Extrafacilities.add()'
        );
        $data['header'] = array(
            'title' => 'Add New Extra Facilities',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Extra Facilities List' => route("extra-facilities"),
                'Add Extra Facilities' => "Add Extra Facilities",
        ));
        return view('backend.pages.extrafacilities.addextrafacilities', $data);
    }


    public function editextrafacilities (Request $request,$id){

        $objExtrafacilities = new Extrafacilities();
        $data['details'] = $objExtrafacilities->editdetails($id);
        if ($request->isMethod("post")) {
            $objExtrafacilities = new Extrafacilities();
            $result = $objExtrafacilities->edit($request);
            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Facilities details successfully added';
                $return['redirect'] = route('extra-facilities');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'Facilities details already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
            }
            echo json_encode($return);
            exit;
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Extra Facailies';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Extra Facailies';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Extra Facailies';
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
            'extrafacilities.js'
        );
        $data['funinit'] = array(
            'Extrafacilities.edit()'
        );
        $data['header'] = array(
            'title' => 'Edit Extra Facilities',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Extra Facilities List' => route("extra-facilities"),
                'Edit Extra Facilities' => "Edit Extra Facilities",
        ));
        return view('backend.pages.extrafacilities.editextrafacilities', $data);
    }



    public function ajaxAction(Request $request){

        $action = $request->input('action');

        switch ($action) {
            case 'getdatatable':
                    $objExtrafacilities = new Extrafacilities();
                    $list = $objExtrafacilities->getdatatable();
                    
                echo json_encode($list);
                break;
            case 'deletefacilities':
                    $objExtrafacilities = new Extrafacilities();
                    $result = $objExtrafacilities->deletefacilities($request->input('data'));
                    if ($result) {
                        $return['status'] = 'success';
                        $return['message'] = 'Facilities details successfully deleted';
                        $return['redirect'] = route('extra-facilities');
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

<?php

namespace App\Http\Controllers\backend\sliderimage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Sliderimage;
use Config;

class SliderimageController extends Controller
{
    //
    function __construct(){

    }

    public function list(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Slider Images List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Slider Images List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Slider Images List';
        $data['pagetitle'] = "Slider Images List";
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
            'imageslider.js'
        );
        $data['funinit'] = array(
            'Imageslider.init()'
        );
        $data['header'] = array(
            'title' => 'Slider Images List',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Slider Images List' => "Slider Images List",
        ));
        return view('backend.pages.sliderimage.list', $data);
    }


    public function add (Request $request){
        if ($request->isMethod("post")) {

            $objSliderimage = new Sliderimage();
            $result = $objSliderimage->add($request);
            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Slider successfully added';
                $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Submit");';
                $return['redirect'] = route('admin-slider-image');
            } else {
                    $return['status'] = 'error';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Submit");';
                    $return['message'] = 'Something goes to wrong.';
            }
            echo json_encode($return);
            exit;

        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Slider Image';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Slider Image';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Slider Image';
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
            'imageslider.js'
        );
        $data['funinit'] = array(
            'Imageslider.add()'
        );
        $data['header'] = array(
            'title' => 'Add New  Slider Image',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                ' Slider Image List' => route("admin-slider-image"),
                'Add  Slider Image' => "Add  Slider Image",
        ));
        return view('backend.pages.sliderimage.add', $data);
    }


    public function ajaxAction(Request $request){

        $action = $request->input('action');

        switch ($action) {

            case 'getdatatable':
                $objSliderimage = new Sliderimage();
                $list = $objSliderimage->getdatatable();
                    
                echo json_encode($list);
                break;

            case 'deleteImage':
               
                $objSliderimage = new Sliderimage();
                $result = $objSliderimage->deleteImage($request->input('data'));

                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Slider successfully deleted';
                    $return['redirect'] = route('admin-slider-image');
                } else {
                        $return['status'] = 'error';
                        $return['message'] = 'Something goes to wrong.';
                }
                echo json_encode($return);
                exit;
        }
    }

}

<?php

namespace App\Http\Controllers\backend\headertext;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Headersildertext;
class HeaderSilderTextController extends Controller
{
    //

    function __construct(){
        
    }

    public  function text(Request $request){
        if ($request->isMethod("post")) {
    		
               $objHeadersildertext = new Headersildertext();
               $result = $objHeadersildertext->addedit($request);
               if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Header slider text successfully updated.';
                    $return['redirect'] = route('header-silder-text');
                } else {
                	$return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
                echo json_encode($return);
                exit;
        }
       
        
        $objHeadersildertext = new Headersildertext();
        $data['details'] = $objHeadersildertext->getdetails();

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Header Slider Text';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Header Slider Text';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Header Slider Text';
        $data['pagetitle'] = "Header Slider Text";
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
            'headersildertext.js'
        );
        $data['funinit'] = array(
            'Headersildertext.init()'
        );
        $data['header'] = array(
            'title' => 'Header Slider Text',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Header Slider Text' => "Header Slider Text",
        ));
        return view('backend.pages.headersildertext.addedit', $data);
    }
}

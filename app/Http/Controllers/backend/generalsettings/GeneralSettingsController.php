<?php

namespace App\Http\Controllers\backend\generalsettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\GeneralSettings;

class GeneralSettingsController extends Controller
{
    //
    function __construct(){

    }

    public function generalsettings (Request $request){
        if ($request->isMethod("post")) {
    		// echo "<pre>";print_r($request->input());die;
           $objGeneralSettings = new GeneralSettings();
           $result = $objGeneralSettings->addGeneralSettings($request);
           if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'General settings successfully updated.';
                $return['redirect'] = route('admin-general-settings');
            } else {
            	$return['status'] = 'error';
                $return['message'] = 'Something goes to wrong.';
            }
            echo json_encode($return);
            exit;
        }
        $objGeneralSettings = new GeneralSettings();
        $data['generalSettingsDetails'] = $objGeneralSettings->getGeneralSettings();
        
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || General Settings';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || General Settings';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || General Settings';
        $data['pagetitle'] = "General Settings";
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
            'generalsettings.js'
        );
        $data['funinit'] = array(
            'Generalsettings.init()'
        );
        $data['header'] = array(
            'title' => 'General Settings',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'General Settings' => "General Settings",
        ));
        return view('backend.pages.generalsettings.generalsettings', $data);
    }
}

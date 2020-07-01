<?php

namespace App\Http\Controllers\backend\aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Aboutus;
class AboutusController extends Controller
{
    function __construct(){


    }


    public function aboutus(Request $request){
        if ($request->isMethod("post")) {
    		// echo "<pre>";print_r($request->input());die;
            $objAboutus = new Aboutus();
            $result = $objAboutus->addAboutus($request);
           if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'About us successfully updated.';
                $return['redirect'] = route('admin-about-us');
            } else {
            	$return['status'] = 'error';
                $return['message'] = 'Something goes to wrong.';
            }
            echo json_encode($return);
            exit;
        }
        $objAboutus = new Aboutus();
        $data['aboutusDetails'] = $objAboutus->aboutus();
        
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || About Us';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || About Us';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || About Us';
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
            'aboutus.js'
        );
        $data['funinit'] = array(
            'Aboutus.init()'
        );
        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'About Us' => "About Us",
        ));
        return view('backend.pages.aboutus.aboutus', $data);
    }
}

<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Users;
use App\Model\Agent;
use App\Model\Agency;
use App\Model\Company;
class LoginController extends Controller
{
    function __construct(){

    }

    public function index(Request $request){
        
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Login ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Login ';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Login ';

        $data['css'] = array(
            'magnific-popup/magnific-popup.css',
        );

        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'jquery.appear.js',
            'counter/jquery.countTo.js',
            'magnific-popup/jquery.magnific-popup.min.js',
        );

        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.login.login', $data);
    }
    
    public function register(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Register ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Register ';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Register ';

        $data['css'] = array(
            'toastr/toastr.min.css',
            'magnific-popup/magnific-popup.css',
        );

        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'validate/jquery.validate.min.js',
            'jquery.appear.js',
            'counter/jquery.countTo.js',
            'magnific-popup/jquery.magnific-popup.min.js',
        );

        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'register.js'
        );
        $data['funinit'] = array(
            'Register.init()'
        );
        return view('frontend.pages.login.register', $data);
    }


    public function userregister(Request $request){
        if ($request->isMethod("post")) {
            $objUsers = new Users();
            $result = $objUsers->addUser($request);
            if($result == "true"){
                $return['status'] = 'success';
                $return['message'] = 'Well done your registration succesfully completed';
                $return['redirect'] = route('signup');
            }else{
                if($result == "usernameexits"){
                    $return['status'] = 'error';
                    $return['message'] = 'username already exits';
                    
                }else{
                    if($result == "emailexits"){
                        $return['status'] = 'error';
                        $return['message'] = 'email already exits';
                        
                    }else{
                        $return['status'] = 'error';
                        $return['message'] = 'Something goes to wrong';
                        
                    }
                }
                
            }
            

            return json_encode($return);
            exit();
        }else{
            return redirect('signup');
        }
    }
    public function agentregister(Request $request){
        if ($request->isMethod("post")) {

        }else{
            return redirect('signup');
        }
    }
    public function agencyregister(Request $request){
        if ($request->isMethod("post")) {

        }else{
            return redirect('signup');
        }
    }
    public function companyregister(Request $request){
        if ($request->isMethod("post")) {

        }else{
            return redirect('signup');
        }
    }
}

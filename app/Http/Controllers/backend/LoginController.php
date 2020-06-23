<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Session;
use Redirect;
class LoginController extends Controller
{
    
    function __construct(){
        
    }

    public function login(Request $request){

        if ( $request->isMethod( 'post' ) ) {
            if ( Auth::guard('admin')->attempt( ['email' => $request->input( 'email' ), 'password' => $request->input( 'password' )] ) ) {

                $loginData = array(
                    'firstname' => Auth::guard('admin')->user()->firstname,
                    'lastname' => Auth::guard('admin')->user()->lastname,
                    'email' => Auth::guard('admin')->user()->email,
                    'userimage' => Auth::guard('admin')->user()->userimage,
                    'id' => Auth::guard('admin')->user()->id
                );

                Session::push( 'logindata', $loginData );
                
                $return['status'] = 'success';
                $return['message'] = 'Well Done login Successfully!';
                $return['redirect'] = route('admin-dashboard');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'Invalid Login Id/Password';
            }
            return json_encode($return);
            exit();
        }


        $data['title'] = "Real Estate";
        $data['description'] = "Real Estate";
        $data['keywords'] = "Real Estate";
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'login.js',
        );
        $data['funinit'] = array("Login.init()");
        return view('backend.pages.login.login', $data);
    }


    public function logout(Request $request) {
        $this->resetGuard();
        return redirect()->route('admin');
    }

    public function resetGuard() {
        Auth::logout();
        Auth::guard('admin')->logout();
        Session::forget('logindata');
    }
}

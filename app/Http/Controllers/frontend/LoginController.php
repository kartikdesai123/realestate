<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Users;
use App\Model\Agent;
use App\Model\Agency;
use App\Model\Company;
use Hash;
use Auth;
use Session;
use Redirect;
use App\Model\Sendmail;
use App\Model\Emailverify;
use DB;
class LoginController extends Controller
{
    function __construct(){

    }

    public function index(Request $request){
        if ($request->isMethod("post")) {
            
            if ( Auth::guard('users')->attempt( ['email' => $request->input( 'email' ), 'password' => $request->input( 'password' ) , 'email_verfied' => "0" ,"isDeleted"=>"0"] ) ) {
                $return['status'] = 'error';
                $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Login");';
                $return['message'] = "Your email account isn't verified";
            }else{
                if ( Auth::guard('users')->attempt( ['email' => $request->input( 'email' ), 'password' => $request->input( 'password' ) , 'roles' => "U" ,"isDeleted"=>"0"] ) ) {

                    $loginData = array(
                       
                        'username' => Auth::guard('users')->user()->username,
                        'email' => Auth::guard('users')->user()->email,
                        'userimage' => Auth::guard('users')->user()->userimage,
                        'roles' => Auth::guard('users')->user()->roles,
                        'about' => Auth::guard('users')->user()->about,
                        'id' => Auth::guard('users')->user()->id
                    );
                    
                    Session::push( 'logindata', $loginData );
                    
                    $return['status'] = 'success';
                    $return['message'] = 'Well Done login Successfully!';
                    $return['redirect'] = route('home');
                } else {
                    if ( Auth::guard('agent')->attempt( ['email' => $request->input( 'email' ), 'password' => $request->input( 'password' ) , 'roles' => "AG" ,"isDeleted"=>"0"] ) ) {
    
                        $loginData = array(
                            
                            'username' => Auth::guard('agent')->user()->username,
                            'email' => Auth::guard('agent')->user()->email,
                            'userimage' => Auth::guard('agent')->user()->userimage,
                            'roles' => Auth::guard('agent')->user()->roles,
                            'about' => Auth::guard('agent')->user()->about,
                            'id' => Auth::guard('agent')->user()->id
                        );
        
                        Session::push( 'logindata', $loginData );
                        
                        $return['status'] = 'success';
                        $return['message'] = 'Well Done login Successfully!';
                        $return['redirect'] = route('home');
                    } else {
                        if ( Auth::guard('agency')->attempt( ['email' => $request->input( 'email' ), 'password' => $request->input( 'password' ) , 'roles' => "AY" ,"isDeleted"=>"0"] ) ) {
    
                            $loginData = array(
                                
                                'username' => Auth::guard('agency')->user()->username,
                                'email' => Auth::guard('agency')->user()->email,
                                'userimage' => Auth::guard('agency')->user()->userimage,
                                'roles' => Auth::guard('agency')->user()->roles,
                                'about' => Auth::guard('agency')->user()->about,
                                'id' => Auth::guard('agency')->user()->id
                            );
            
                            Session::push( 'logindata', $loginData );
                            
                            $return['status'] = 'success';
                            $return['message'] = 'Well Done login Successfully!';
                            $return['redirect'] = route('home');
                        } else {
                            if ( Auth::guard('company')->attempt( ['email' => $request->input( 'email' ), 'password' => $request->input( 'password' ) , 'roles' => "CC" ,"isDeleted"=>"0"] ) ) {
    
                                $loginData = array(
                                    
                                    'username' => Auth::guard('company')->user()->username,
                                    'email' => Auth::guard('company')->user()->email,
                                    'userimage' => Auth::guard('company')->user()->userimage,
                                    'roles' => Auth::guard('company')->user()->roles,
                                    'about' => Auth::guard('company')->user()->about,
                                    'id' => Auth::guard('company')->user()->id
                                );
                
                                Session::push( 'logindata', $loginData );
                                
                                $return['status'] = 'success';
                                $return['message'] = 'Well Done login Successfully!';
                                $return['redirect'] = route('home');
                            } else {
                                $return['status'] = 'error';
                                $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Login");';
                                $return['message'] = 'Invalid Login Id/Password';
                            }
                        }
                    }  
                }

            }
            
            return json_encode($return);
            exit();
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Login ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Login ';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Login ';

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
            'login.js'
        );
        $data['funinit'] = array(
            'Login.init()'
        );
        return view('frontend.pages.login.login', $data);
    }
    
    public function userregister(Request $request){
        if ($request->isMethod("post")) {
            $objUsers = new Users();
            $result = $objUsers->addUser($request);
            if($result == "true"){
                $return['status'] = 'success';
                $return['message'] = 'Well done your registration succesfully completed';
                $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                $return['redirect'] = route('user-register');
            }else{
                if($result == "usernameexits"){
                    $return['status'] = 'error';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                    $return['message'] = 'username already exits';
                    
                }else{
                    if($result == "emailexits"){
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                        $return['message'] = 'email already exits';
                        
                    }else{
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                        $return['message'] = 'Something goes to wrong';
                    }
                }
            }
            return json_encode($return);
            exit();
        }
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
        return view('frontend.pages.login.userregister', $data);
    }


    public function agentregister(Request $request){
        if ($request->isMethod("post")) {
            $objAgent = new Agent();
            $result = $objAgent->addAgent($request);
            if($result == "true"){
                $return['status'] = 'success';
                $return['message'] = 'Well done your registration succesfully completed';
                $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                $return['redirect'] = route('agent-register');
            }else{
                if($result == "usernameexits"){
                    $return['status'] = 'error';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                    $return['message'] = 'username already exits';
                    
                }else{
                    if($result == "emailexits"){
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                        $return['message'] = 'email already exits';
                        
                    }else{
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                        $return['message'] = 'Something goes to wrong';
                        
                    }
                }
                
            }
            return json_encode($return);
            exit();

        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agent Register ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agent Register ';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agent Register ';

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
        return view('frontend.pages.login.agentregister', $data);
    }


    public function agencyregister(Request $request){
        if ($request->isMethod("post")) {
            $objAgency = new Agency();
            $result = $objAgency->addAgency($request);
            if($result == "true"){
                $return['status'] = 'success';
                $return['message'] = 'Well done your registration succesfully completed';
                $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                $return['redirect'] = route('agency-register');
            }else{
                if($result == "usernameexits"){
                    $return['status'] = 'error';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                    $return['message'] = 'username already exits';
                    
                }else{
                    if($result == "emailexits"){
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                        $return['message'] = 'email already exits';
                        
                    }else{
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                        $return['message'] = 'Something goes to wrong';
                        
                    }
                }
                
            }
            return json_encode($return);
            exit();
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency Register ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency Register ';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency Register ';

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
        return view('frontend.pages.login.agencyregister', $data);
    }


    public function companyregister(Request $request){
        if ($request->isMethod("post")) {
            $objCompany = new Company();
            $result = $objCompany->addCompany($request);
            if($result == "true"){
                $return['status'] = 'success';
                $return['message'] = 'Well done your registration succesfully completed';
                $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                $return['redirect'] = route('company-register');
            }else{
                if($result == "usernameexits"){
                    $return['status'] = 'error';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                    $return['message'] = 'username already exits';
                }else{
                    if($result == "emailexits"){
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                        $return['message'] = 'email already exits';
                        
                    }else{
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                        $return['message'] = 'Something goes to wrong';
                        
                    }
                }
            }
            return json_encode($return);
            exit();
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Construction Company Register ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Construction Company Register ';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Construction Company Register ';

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
        return view('frontend.pages.login.companyregister', $data);
    }


    public function myprofile(Request $request){
        $session = $request->session()->all();
        if(isset($session['logindata'])){

            if ($request->isMethod("post")) {
                
                $objUsers = new Users();
                $result = $objUsers->editProfile($request,$session['logindata'][0]['id'],$session['logindata'][0]['roles']);
                if($result == "true"){
                    $return['status'] = 'success';
                    $return['message'] = 'Your profile successfully updated';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                    $return['redirect'] = route('my-profile');
                }else{
                    if($result == "usernameexits"){
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                        $return['message'] = 'username already exits';
                        
                    }else{
                        if($result == "emailexits"){
                            $return['status'] = 'error';
                            $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                            $return['message'] = 'email already exits';
                            
                        }else{
                            $return['status'] = 'error';
                            $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                            $return['message'] = 'Something goes to wrong';
                            
                        }
                    }
                    
                }
                
    
                return json_encode($return);
                exit();
                
            }
            $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Profile ';
            $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Profile ';
            $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Profile ';

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
                'myprofile.js'
            );
            $data['funinit'] = array(
                'Myprofile.init()'
            );
            return view('frontend.pages.profile.myprofile', $data);
        }else{
            return redirect('signup');
        }
       
    }
    public function myproperty(Request $request){
        $session = $request->session()->all();
        if(isset($session['logindata'])){

            if ($request->isMethod("post")) {
                
                $objUsers = new Users();
                $result = $objUsers->editProfile($request,$session['logindata'][0]['id'],$session['logindata'][0]['roles']);
                if($result == "true"){
                    $return['status'] = 'success';
                    $return['message'] = 'Your profile successfully updated';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                    $return['redirect'] = route('my-profile');
                }else{
                    if($result == "usernameexits"){
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                        $return['message'] = 'username already exits';
                        
                    }else{
                        if($result == "emailexits"){
                            $return['status'] = 'error';
                            $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                            $return['message'] = 'email already exits';
                            
                        }else{
                            $return['status'] = 'error';
                            $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                            $return['message'] = 'Something goes to wrong';
                            
                        }
                    }
                    
                }
                
    
                return json_encode($return);
                exit();
                
            }
            $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Profile ';
            $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Profile ';
            $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Profile ';

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
                'myprofile.js'
            );
            $data['funinit'] = array(
                'Myprofile.init()'
            );
            return view('frontend.pages.profile.myproperty', $data);
        }else{
            return redirect('signup');
        }
       
    }


    public function changepasswpord(Request $request) {
        $session = $request->session()->all();
        if(isset($session['logindata'])){

            if ($request->isMethod("post")) {
                // $session['logindata'][0]['id'],
                $objUsers = new Users();
                $result = $objUsers->editChangePasswpord($request,$session['logindata'][0]['id']);
                if($result == "true"){
                    $return['status'] = 'success';
                    $return['message'] = 'Your profile successfully updated';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Save change");';
                    $return['redirect'] = route('change-password');
                }else{
                    if($result == "mismatch"){
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Save change");';
                        $return['message'] = 'Your old password not match with database ';
                    }else{
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Save change");';
                        $return['message'] = 'Something goes to wrong';
                    }
                }
                return json_encode($return);
                exit();
            }
            $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Profile ';
            $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Profile ';
            $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Profile ';

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
                'myprofile.js'
            );
            $data['funinit'] = array(
                'Myprofile.changepassword()'
            );
            return view('frontend.pages.profile.changepassword', $data);
        }else{
            return redirect('signup');
        }
    }


    public function testingmail(){
        $objSendmail = new Sendmail();
        $Sendmail = $objSendmail->sendMailltesting();
        exit;
    }
    public function emailverify(Request $request,$token){

        $objEmailVerify = new Emailverify();
        $data['getdetails'] = $objEmailVerify->getDetails($token);
        
        $objEmailVerify = new Emailverify();
        $countToken = $objEmailVerify->checkToken($token);

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Login ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Login ';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Login ';

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
            'login.js'
        );
        $data['funinit'] = array(
            'Login.init()'
        );
        
        if($countToken == "verify"){
            return view('frontend.pages.verifyemail.verify', $data);
               
        }else{
            if($countToken == "mismatchToken"){
                return view('frontend.pages.verifyemail.tokenmismatch', $data);
                
            }else{
                return view('frontend.pages.verifyemail.wrong', $data);
               
            }
        }
        die();
    }


    public function logout(Request $request) {
        $this->resetGuard();
        return redirect()->route('home');
    }

    public function resetGuard() {
        Auth::logout();
        Auth::guard('users')->logout();
        Auth::guard('agent')->logout();
        Auth::guard('agency')->logout();
        Auth::guard('company')->logout();
        Session::forget('logindata');
    }
}

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
use App\Model\Forgotpassword;
use App\Model\Extrafacilities;
use App\Model\Plandetails;
use App\Model\PropertyAudio;
use App\Model\PropertyFloorPlan;
use App\Model\PropertyPhoto;
use App\Model\PropertyTourView;
use App\Model\PropertyVideo;
use App\Model\PropertyDetails;
use App\Model\AgentDetails;
use App\Model\AgencyDetails;
use App\Model\Companydetails;
use App\Model\UsersPayment;
use DB;

class LoginController extends Controller
{
    function __construct(){
         parent::__construct();
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
                        'expire_date' => Auth::guard('users')->user()->expiry_date,
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
                            'expire_date' => Auth::guard('agent')->user()->expiry_date,
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
                                'expire_date' => Auth::guard('agency')->user()->expiry_date,
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
                                    'expire_date' => Auth::guard('company')->user()->expiry_date,
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

        $data['header'] = array(
            'breadcrumb' => array(
                'Home' => route("home"),
                'Sign In' => "Sign In",
        ));

        return view('frontend.pages.login.login', $data);
    }
    
    public function userregister(Request $request){
        // if ($request->isMethod("post")) {
        //     $objUsers = new Users();
        //     $result = $objUsers->addUser($request);
        //     if($result == "true"){
        //         $return['status'] = 'success';
        //         $return['message'] = 'Well done your registration succesfully completed';
        //         $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //         $return['redirect'] = route('user-register');
        //     }else{
        //         if($result == "usernameexits"){
        //             $return['status'] = 'error';
        //             $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //             $return['message'] = 'username already exits';
                    
        //         }else{
        //             if($result == "emailexits"){
        //                 $return['status'] = 'error';
        //                 $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //                 $return['message'] = 'email already exits';
                        
        //             }else{
        //                 $return['status'] = 'error';
        //                 $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //                 $return['message'] = 'Something goes to wrong';
        //             }
        //         }
        //     }
        //     return json_encode($return);
        //     exit();
        // }
        
        if ($request->cookie('planId')) {
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

        $data['header'] = array(
            'breadcrumb' => array(
                'Home' => route("home"),
                'User Registration' => "User Registration",
        ));

        $data['funinit'] = array(
            'Register.init()'
        );
        $data['plan_id'] = $request->cookie('planId');
        // $data['plan_detail'] = Plandetails::where('id','=',$data['plan_id'])->get()->toArray();
        // $amount = $data['plan_detail'][0]['amount'];
        // $data['time'] = time();
        // $data['signature'] = md5('4Vj8eK4rloUd272L48hsrarnUA~508029~'.time().'~'.$amount.'~COP');

        return view('frontend.pages.login.userregister', $data);
        }else{
            return redirect()->route('plan');
        }
    }


    public function agentregister(Request $request){
        // if ($request->isMethod("post")) {
        //     $objAgent = new Agent();
        //     $result = $objAgent->addAgent($request);
        //     if($result == "true"){
        //         $return['status'] = 'success';
        //         $return['message'] = 'Well done your registration succesfully completed';
        //         $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //         $return['redirect'] = route('agent-register');
        //     }else{
        //         if($result == "usernameexits"){
        //             $return['status'] = 'error';
        //             $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //             $return['message'] = 'username already exits';
                    
        //         }else{
        //             if($result == "emailexits"){
        //                 $return['status'] = 'error';
        //                 $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //                 $return['message'] = 'email already exits';
                        
        //             }else{
        //                 $return['status'] = 'error';
        //                 $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //                 $return['message'] = 'Something goes to wrong';
                        
        //             }
        //         }
                
        //     }
        //     return json_encode($return);
        //     exit();

        // }
        
        if ($request->cookie('planId')) {
            
            $data['title'] = Config::get('constants.PROJECT_NAME') . ' || Agent Register ';
            $data['description'] = Config::get('constants.PROJECT_NAME') . ' || Agent Register ';
            $data['keywords'] = Config::get('constants.PROJECT_NAME') . ' || Agent Register ';

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

            $data['header'] = array(
                'breadcrumb' => array(
                    'Home' => route("home"),
                    'Agent Registration' => "Agent Registration",
            ));
            
            $data['plan_id'] = $request->cookie('planId');
            $data['plan_detail'] = Plandetails::where('id','=',$data['plan_id'])->get()->toArray();
            $amount = $data['plan_detail'][0]['planprice'];
            $data['time'] = time();
            $data['signature'] = md5('4Vj8eK4rloUd272L48hsrarnUA~508029~'.time().'~'.$amount.'~COP');

            return view('frontend.pages.login.agentregister', $data);
        } else {
            return redirect()->route('plan');
        }
        
        
    }


    public function agencyregister(Request $request){
        // if ($request->isMethod("post")) {
        //     $objAgency = new Agency();
        //     $result = $objAgency->addAgency($request);
        //     if($result == "true"){
        //         $return['status'] = 'success';
        //         $return['message'] = 'Well done your registration succesfully completed';
        //         $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //         $return['redirect'] = route('agency-register');
        //     }else{
        //         if($result == "usernameexits"){
        //             $return['status'] = 'error';
        //             $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //             $return['message'] = 'username already exits';
                    
        //         }else{
        //             if($result == "emailexits"){
        //                 $return['status'] = 'error';
        //                 $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //                 $return['message'] = 'email already exits';
                        
        //             }else{
        //                 $return['status'] = 'error';
        //                 $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //                 $return['message'] = 'Something goes to wrong';
                        
        //             }
        //         }
                
        //     }
        //     return json_encode($return);
        //     exit();
        // }
        
        if ($request->cookie('planId')) {
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

        $data['header'] = array(
            'breadcrumb' => array(
                'Home' => route("home"),
                'Agency Registration' => "Agency Registration",
        ));

        $data['funinit'] = array(
            'Register.init()'
        );
        $data['plan_id'] = $request->cookie('planId');

        $data['plan_detail'] = Plandetails::where('id','=',$data['plan_id'])->get()->toArray();
        $amount = $data['plan_detail'][0]['planprice'];
        $data['time'] = time();
        $data['signature'] = md5('4Vj8eK4rloUd272L48hsrarnUA~508029~'.time().'~'.$amount.'~COP');

        return view('frontend.pages.login.agencyregister', $data);
        
        } else {
            return redirect()->route('plan');
        }
    }


    public function companyregister(Request $request){
        // if ($request->isMethod("post")) {
            
        //     $objCompany = new Company();
        //     $result = $objCompany->addCompany($request);
        //     if($result == "true"){
        //         $return['status'] = 'success';
        //         $return['message'] = 'Well done your registration succesfully completed';
        //         $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //         $return['redirect'] = route('company-register');
        //     }else{
        //         if($result == "usernameexits"){
        //             $return['status'] = 'error';
        //             $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //             $return['message'] = 'username already exits';
        //         }else{
        //             if($result == "emailexits"){
        //                 $return['status'] = 'error';
        //                 $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //                 $return['message'] = 'email already exits';
                        
        //             }else{
        //                 $return['status'] = 'error';
        //                 $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
        //                 $return['message'] = 'Something goes to wrong';
                        
        //             }
        //         }
        //     }
        //     return json_encode($return);
        //     exit();
        // }
        
        if ($request->cookie('planId')) {
            
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

        $data['header'] = array(
            'breadcrumb' => array(
                'Home' => route("home"),
                ' Construction Company Registration' => " Construction Company Registration",
        ));

        $data['funinit'] = array(
            'Register.init()'
        );
        
        $data['plan_id'] = $request->cookie('planId');
        $data['plan_detail'] = Plandetails::where('id','=',$data['plan_id'])->get()->toArray();
        $amount = $data['plan_detail'][0]['planprice'];
        $data['time'] = time();
        $data['signature'] = md5('4Vj8eK4rloUd272L48hsrarnUA~508029~'.time().'~'.$amount.'~COP');

        return view('frontend.pages.login.companyregister', $data);
        } else {
            return redirect()->route('plan');
        }
    }


    public function myprofile(Request $request){
        $session = $request->session()->all();
        
        if(isset($session['logindata'])){
            if($session['logindata'][0]['roles'] == "AG"){
                $objAgencyDetails = new AgentDetails();
                $data['agentDetails'] = $objAgencyDetails->getAgentDetails($session['logindata'][0]['id']);

            }
            if($session['logindata'][0]['roles'] == "CC"){
                $objCompanydetails = new Companydetails();
                $data['companyDetails'] = $objCompanydetails->getCompanydetails($session['logindata'][0]['id']);

            }
            
            if($session['logindata'][0]['roles'] == "AY"){

                $objAgencyDetails = new AgencyDetails();
                $data['agencyDetails'] = $objAgencyDetails->getAgencyDetails($session['logindata'][0]['id']);
                
            }
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
            $data['header'] = array(
                'breadcrumb' => array(
                    'Home' => route("home"),
                    'My Profile' => "My Profile",
            ));
            return view('frontend.pages.profile.myprofile', $data);
        }else{
            return redirect('signin');
        }
       
    }

    public function myagent(Request $request){
        $session = $request->session()->all();
//       
        if(isset($session['logindata'])){
            
            $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Agent ';
            $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Agent ';
            $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Agent ';

            $data['css'] = array(
                'toastr/toastr.min.css',
                'magnific-popup/magnific-popup.css',
                'datatable/datatables.min.css',
                'datatable/plugins/bootstrap/datatables.bootstrap.css',
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
                'datatable/datatable.js',
                'datatable/datatables.min.js',
                'datatable/plugins/bootstrap/datatables.bootstrap.js',
                'comman_function.js',
                'ajaxfileupload.js',
                'jquery.form.min.js',
                'myagent.js'
            );
            $data['funinit'] = array(
                'Myagent.init()'
            );
            $data['header'] = array(
                'breadcrumb' => array(
                    'Home' => route("home"),
                    'My Agent' => "My Agent",
            ));
            
            $userPayment = UsersPayment::where('user_id','=',$session['logindata'][0]['id'])->get()->toArray();
            $data['plan_detail'] = Plandetails::where('id','=',$userPayment[0]['plan_id'])->get()->toArray();
            $data['total_agent'] = Users::where('users.parent_id',$session['logindata'][0]['id'])->where('users.isDeleted',"0")->count();
            
            return view('frontend.pages.profile.myagent', $data);
        }else{
            return redirect('signin');
        }
       
    }
    public function addmyagent(Request $request){
        $session = $request->session()->all();
        
        if(isset($session['logindata'])){

            if ($request->isMethod("post")) {
                $session = $request->session()->all();

                $objAgent = new Agent();
                $result = $objAgent->addMyAgent($request,$session['logindata'][0]['id']);
                if($result == "true"){
                    $return['status'] = 'success';
                    $return['message'] = 'Well done your registration succesfully completed';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                    $return['redirect'] = route('my-agent');
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


            
            $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Agent ';
            $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Agent ';
            $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Agent ';

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
                'myagent.js'
            );
            $data['funinit'] = array(
                'Myagent.add()'
            );
            $data['header'] = array(
                'breadcrumb' => array(
                    'Home' => route("home"),
                    'My Agent' => "My Agent",
            ));
            return view('frontend.pages.profile.addmyagent', $data);
        }else{
            return redirect('signin');
        }
       
    }
    public function editmyagent(Request $request,$id){

        $objExtrafacilities = new Users();
        $data['details'] = $objExtrafacilities->getAgentDetails($id);

       

        if ($request->isMethod("post")) {

            $objExtrafacilities = new Agent();
            $result = $objExtrafacilities->editAgentDetails($request);
            
            if($result == "true"){
                $return['status'] = 'success';
                $return['message'] = 'Agent Details succesfully updated';
                $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                $return['redirect'] = route('my-agent');
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

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Agent Details';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Agent Details';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Agent Details';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
        );
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
            'myagent.js'
        );
        $data['funinit'] = array(
            'Myagent.edit()'
        );
        $data['header'] = array(
            'title' => 'Edit Agent Details',
            'breadcrumb' => array(
                'Home' => route("home"),
                'My Agent' => route("my-agent"),
                'Edit Agent Details' => "Edit Agent Details",
        ));
        return view('frontend.pages.profile.editmyagent', $data);
    }

    public function myproperty(Request $request){
        $session = $request->session()->all();
        
        if(isset($session['logindata'])){
            
            $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Property';
            $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Property';
            $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || My Property';

            $data['css'] = array(
                
            );

            $data['plugincss'] = array();
            $data['pluginjs'] = array(
            );

            $data['js'] = array(
                'comman_function.js',
                'ajaxfileupload.js',
                'jquery.form.min.js',
                'myprofile.js'
            );
            $data['funinit'] = array(
            );

            $data['header'] = array(
                'breadcrumb' => array(
                    'Home' => route("home"),
                    'My Profile' => route("my-profile"),
                    'My Property' => "My Property",
            ));
            
            $objPropetyList = new PropertyDetails();
            $data['property'] = $objPropetyList->getPropertyList($session['logindata'][0]['id']);
            $userPayment = UsersPayment::where('user_id','=',$session['logindata'][0]['id'])->get()->toArray();
            if(!empty($userPayment)){
                $data['plan_detail'] = Plandetails::where('id','=',$userPayment[0]['plan_id'])->get()->toArray();
               $data['page_name'] = count($data['property']).' of '.$data['plan_detail'][0]['planproperty'].' My Properties' ;
            }else{
                $data['plan_detail'] = array();
            $data['page_name'] = 'My Properties' ;
            }
            
            return view('frontend.pages.profile.myproperty', $data);
        }else{
            return redirect('signin');
        }
    }
    
    public function saveHomes(Request $request){
        $session = $request->session()->all();
        
        if(isset($session['logindata'])){
            $data['page_name'] = 'Save Property';
            $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Save Property';
            $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Save Property';
            $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Save Property';

            $data['css'] = array(
                
            );

            $data['plugincss'] = array();
            $data['pluginjs'] = array(
            );

            $data['js'] = array(
                'comman_function.js',
                'ajaxfileupload.js',
                'jquery.form.min.js',
                'myprofile.js'
            );
            $data['funinit'] = array(
            );

            $data['header'] = array(
                'breadcrumb' => array(
                    'Home' => route("home"),
                    'My Profile' => route("my-profile"),
                    'My Property' => "My Property",
            ));
            
            $objPropetyList = new PropertyDetails();
            $data['property'] = $objPropetyList->saveHomes($session['logindata'][0]['id'],'sale');
            
            return view('frontend.pages.profile.myproperty', $data);
        }else{
            return redirect('signin');
        }
    }
    
    public function assignAgent(Request $request,$userid,$propertyid){
        $session = $request->session()->all();
        
        if(isset($session['logindata'])){

            if ($request->isMethod("post")) {
                $objUsers = new Users();
                $result = $objUsers->assignAgent($request);
                
                if($result == "true"){
                    $return['status'] = 'success';
                    $return['message'] = 'Agent assign successfully to this property';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Save change");';
                    $return['redirect'] = route('my-property');
                }else{
                    if($result == "assignalready"){
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Save change");';
                        $return['message'] = 'Agent already assign';
                    }else{
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Save change");';
                        $return['message'] = 'Something goes to wrong';
                    }
                }
                return json_encode($return);
                exit();
            }
        
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Assign Agent ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Assign Agent';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Assign Agent';

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
            'myprofile.js'
        );
        $data['funinit'] = array(
            'Myprofile.assign_agent()'
        );

        $data['header'] = array(
            'breadcrumb' => array(
                'Home' => route("home"),
                'Assign Agent' => "Assign Agent",
        ));
        
        $objUsers = new Users();
        $data['agent'] = $objUsers->getAgentList();
        $data['user_id'] = $userid;
        $data['property_id'] = $propertyid;
        
        $objProperty = new PropertyDetails();
        $data['property'] = $objProperty->getPropertyInfo($propertyid);
        return view('frontend.pages.profile.assignagent', $data);
        
        }else{
            return redirect('signin');
        }
    }
    public function saveRental(Request $request){
        $session = $request->session()->all();
        
        if(isset($session['logindata'])){
            $data['page_name'] = 'Rental Property';
            $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Save Rental Property';
            $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Save Rental Property';
            $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Save Rental Property';

            $data['css'] = array(
                
            );

            $data['plugincss'] = array();
            $data['pluginjs'] = array(
            );

            $data['js'] = array(
                'comman_function.js',
                'ajaxfileupload.js',
                'jquery.form.min.js',
                'myprofile.js'
            );
            $data['funinit'] = array(
            );

            $data['header'] = array(
                'breadcrumb' => array(
                    'Home' => route("home"),
                    'My Profile' => route("my-profile"),
                    'My Property' => "My Property",
            ));
            
            $objPropetyList = new PropertyDetails();
            $data['property'] = $objPropetyList->saveHomes($session['logindata'][0]['id'],'rent');
            
            return view('frontend.pages.profile.myproperty', $data);
        }else{
            return redirect('signin');
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

            $data['header'] = array(
                'breadcrumb' => array(
                    'Home' => route("home"),
                    'My Profile' => route("my-profile"),
                    'Change Passsword' => "Change Passsword",
            ));
            return view('frontend.pages.profile.changepassword', $data);
        }else{
            return redirect('signin');
        }
    }


    public function resetpassword (Request $request,$token) {
            $data['token'] = $token;
            $objUser = new Users();
            $data['userDetails'] = $objUser->getDtailsByToken($token);

            if ($request->isMethod("post")) {
                
                $objUsers = new Users();
                $result = $objUsers->resetpassword($request);
                if($result == "true"){
                    $return['status'] = 'success';
                    $return['message'] = 'Your password successfully reset';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Save change");';
                    $return['redirect'] = route('signin');
                }else{
                    $return['status'] = 'error';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Save change");';
                    $return['message'] = 'Something goes to wrong';
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
                'Myprofile.resetPassword()'
            );

            $data['header'] = array(
                'breadcrumb' => array(
                    'Home' => route("home"),
                    'Reset Passsword' => "Reset Passsword",
            ));

            if(count($data['userDetails']) == "1"){
               
                return view('frontend.pages.login.resetpassword', $data);
            }else{
                return view('frontend.pages.verifyemail.tokenmismatch', $data);
            }
            
            
            
    }

    public function forgotpassword(Request $request){
        if ($request->isMethod("post")) { 
                $objForgotpassword = new Forgotpassword();
                $result = $objForgotpassword->creteToken($request);
                if($result == "true"){
                    $return['status'] = 'success';
                    $return['message'] = 'Reset password link successfully sent to your register mail';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Save change");';
                    $return['redirect'] = route('change-password');
                }else{
                    if($result == "notVerify"){
                        $return['status'] = 'error';
                        $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Save change");';
                        $return['message'] = 'Your email is not verified';
                    }else{
                        if($result == "notfound"){
                            $return['status'] = 'error';
                            $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Save change");';
                            $return['message'] = 'Your email is not register';
                        }else{
                            $return['status'] = 'error';
                            $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Save change");';
                            $return['message'] = 'Something goes to wrong.Please try again';
                        }
                    }
                }
               
                return json_encode($return);
                exit();
            }
            $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Forgot Password ';
            $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Forgot Password ';
            $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Forgot Password ';

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
                'Myprofile.forgotpassword()'
            );

            $data['header'] = array(
                'breadcrumb' => array(
                    'Home' => route("home"),
                    'Sign In' => route("signin"),
                    'Forgot Passsword' => "Forgot Passsword",
            ));
            return view('frontend.pages.login.forgotpassword', $data);

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

        $data['header'] = array(
            'breadcrumb' => array(
                'Home' => route("home"),
                'Email Verify' => "Email Verify",
        ));
        
        if($countToken == "verify"){
            return view('frontend.pages.verifyemail.verify', $data);
               
        }else{
            if($countToken == "mismatchToken"){
                return view('frontend.pages.verifyemail.tokenmismatch', $data);
                
            }else{
                return view('frontend.pages.verifyemail.wrong', $data);
               
            }
        }
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


    public function ajaxAction(Request $request){
        $action = $request->input('action');

        switch ($action) {
            case 'getdatatable':
                $session = $request->session()->all();

                $objUsers = new Users();
                $list = $objUsers->get_agent_datatable($session['logindata'][0]['id']);                    
                echo json_encode($list);
                break;
            case 'deleteAgent':
                
                $objAgent = new Agent();
                $result = $objAgent->deleteAgent($request->input('data'));                    
                if($result == "true"){
                    $return['status'] = 'success';
                    $return['message'] = 'Agent Details succesfully deleted';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                    $return['redirect'] = route('my-agent');
                }else{
                    $return['status'] = 'error';
                    $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Register");';
                    $return['message'] = 'Something goes to wrong'; 
                      
                }
                echo json_encode($return);
                exit();
        }
    }
    
    
    public function currentPlan(Request $request){
        
        $session = $request->session()->all();
        
        if(isset($session['logindata'])){
            
            $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Current plan';
            $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Current plan';
            $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Current plan';

            $data['css'] = array(
                
            );

            $data['plugincss'] = array();
            $data['pluginjs'] = array(
            );

            $data['js'] = array(
                'comman_function.js',
                'ajaxfileupload.js',
                'jquery.form.min.js',
                'myprofile.js'
            );
            $data['funinit'] = array(
            );

            $data['header'] = array(
                'breadcrumb' => array(
                    'Home' => route("home"),
                    'My Profile' => route("my-profile"),
                    'Current plan' => "Current plan",
            ));
            
            
            $userPayment = UsersPayment::where('user_id','=',$session['logindata'][0]['id'])->get()->toArray();
            if(!empty($userPayment)){
                $data['plandetails'] = Plandetails::where('id','=',$userPayment[0]['plan_id'])->get();
            }else{
                $data['plandetails'] = array();
            }
            $data['page_name'] = 'Current plan';
            return view('frontend.pages.profile.currentplan', $data);
        }else{
            return redirect('signin');
        }
    }
    
    public function payResponse(Request $request){

        if(($request->input('message') == "APPROVED") && ($request->input('transactionId') != '')){
            
            $explode = explode('-',$request->input('extra3'));
            $roles = $explode[0]; 
            if($roles == 'AG'){
                $routeRedirect = 'agent-register';
            }else if($roles == 'AY'){
                $routeRedirect = 'agency-register';
            }else if($roles == 'CC'){
                $routeRedirect = 'company-register';
            }else{
                $routeRedirect = 'user-register';
            }
            
            
            $objUserPay = new UsersPayment();
            $result = $objUserPay->addPaymentUser($request);
            if($result){
                return redirect()->route($routeRedirect)->with('success', 'Account Activation Request has been submitted Successfully! Please check mail and verify your email');
            }  
        }else{
            $explode = explode('-',$request->input('extra3'));
            $roles = $explode[0]; 
            if($roles == 'AG'){
                $routeRedirect = 'agent-register';
            }else if($roles == 'AY'){
                $routeRedirect = 'agency-register';
            }else if($roles == 'CC'){
                $routeRedirect = 'company-register';
            }else{
                $routeRedirect = 'user-register';
            }
            return redirect()->route($routeRedirect)->with('unsuccess', 'Payment made not successfully done please try again later');
        }
        
    }
    
    public function payConfirm(Request $request){
        echo "<pre/>"; print_r($request->input()); exit();
    }
}

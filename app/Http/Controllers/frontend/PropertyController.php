<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use Session;
use App\Model\Extrafacilities;
use App\Model\PropertyAudio;
use App\Model\PropertyFloorPlan;
use App\Model\PropertyPhoto;
use App\Model\PropertyTourView;
use App\Model\PropertyVideo;
use App\Model\PropertyDetails;
use App\Model\Sendmail;
class PropertyController extends Controller
{
    
    function __construct(){

    }

    public function propertylist(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Property List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Property List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Property List';
        $data['css'] = array(
            'select2/select2.css',
            'range-slider/ion.rangeSlider.css',
        );
        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'select2/select2.full.js',
            'range-slider/ion.rangeSlider.min.js',
        );

        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Property List' => "Property List",
        ));

        $data['js'] = array(
            'property.js',
            'home.js'
        );
        $data['funinit'] = array(
            'Home.init()',
            'Property.calculation()',
        );
        
        $objPropetyList = new PropertyDetails();
        $data['property'] = $objPropetyList->getPropertyList();
        
        return view('frontend.pages.property.propertylist', $data);
    }
    
    public function propertydetails(Request $request,$slug){
        $data['slug'] =$slug;
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Property Details';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Property Details';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Property Details';
        $data['css'] = array(
            'toastr/toastr.min.css',
            'datetimepicker/datetimepicker.min.css',
            'slick/slick-theme.css',
            'select2/select2.css',
            'jquery.fancybox.css',
            'components.min.css',
            'plugins.min.css',
        );
        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'validate/jquery.validate.min.js',
            'slick/slick.min.js',
            'datetimepicker/moment.min.js',
            'datetimepicker/datetimepicker.min.js',
            'fancybox/source/jquery.fancybox.js',
            'select2/select2.full.js',
        );
        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Property List' => route("property"),
                'Property Details' => 'Property Details',
        ));
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'property.js',
        );
        $data['funinit'] = array(
            'Property.calculation()',
            'Property.mapint()',
            'Property.form()',
        );
        
        $objPropetyDetail = new PropertyDetails();
        $data['propertyDetail'] = $objPropetyDetail->getPropertyDetail($slug);
        if(empty($data['propertyDetail'])){
            return redirect('property')->with('error', 'Property not found');
        }
        
        $objRecentPropety = new PropertyDetails();
        $data['recentPropety'] = $objRecentPropety->getRecentProperty($slug);
        
        return view('frontend.pages.property.propertydetails', $data);
    }

    public function  videocallschedule(Request $request){
        if($request->isMethod("post")) {
            $objSendmail = new Sendmail();
            $res = $objSendmail->videocallschedule($request);
            if($res){
                $return['status'] = 'success';
                $return['message'] = 'Your schedule a video call request successfully sent to property owner .He/She will replay back soon';
                $return['redirect'] = route('property-details',$request->input('slug'));
            }else{
                $return['status'] = 'error';
                $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Login");';
                $return['message'] = 'Invalid Login Id/Password';
            }
            return json_encode($return);
            exit();
        }else{
            return redirect('home');
        }
    }

    public function  contactowner(Request $request){
        if($request->isMethod("post")) {
            $objSendmail = new Sendmail();
            $res = $objSendmail->contactowner($request);
            if($res){
                $return['status'] = 'success';
                $return['message'] = 'Your request successfully sent to property owner .He/She will replay back soon';
                $return['redirect'] = route('home');
            }else{
                $return['status'] = 'error';
                $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Login");';
                $return['message'] = 'Invalid Login Id/Password';
            }
            return json_encode($return);
            exit();
        }else{
            return redirect('home');
        }
    }
    
    public function  personalvisit(Request $request){
        if($request->isMethod("post")) {
            $objSendmail = new Sendmail();
            $res = $objSendmail->personalvisit($request);
            if($res){
                $return['status'] = 'success';
                $return['message'] = 'Your personal visit request successfully sent to property owner .He/She will replay back soon';
                $return['redirect'] = route('property-details',$request->input('slug'));
            }else{
                $return['status'] = 'error';
                $return['jscode'] = '$("#loader").hide();$(".btnsubmit:visible").removeAttr("disabled");$(".btnsubmit:visible").text("Login");';
                $return['message'] = 'Invalid Login Id/Password';
            }
            return json_encode($return);
            exit();
        }else{
            return redirect('home');
        }
    }
    public function submitproperty(Request $request){
        
        $session = $request->session()->all();
            if(isset($session['logindata'])){
                if($request->isMethod("post")) {
                    $objPropertyDetails = new PropertyDetails();
                    $res = $objPropertyDetails->addProperty($request,$session['logindata'][0]['id']);
                    if($res){
                        return back()->with('success', 'Property succesfully added');
                    }else{
                        return back()->with('error', 'Something goes to wrong please try again');
                    }
                }
            
            $objExtrafacilities = new Extrafacilities();
            $data['other'] = $objExtrafacilities->getlist();

            $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Submit Property Details';
            $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Submit Property Details';
            $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Submit Property Details';
            $data['css'] = array(
                'toastr/toastr.min.css',
                'owl-carousel/owl.carousel.min.css',
                'magnific-popup/magnific-popup.css',
                'select2/select2.css',
                'components.min.css',
                'plugins.min.css',
            );
            $data['plugincss'] = array();
            $data['pluginjs'] = array(
                'toastr/toastr.min.js',
                'validate/jquery.validate.min.js',
                'validate/additional-methods.min.js',
                'jquery.appear.js',
                'counter/jquery.countTo.js',
                'bootstrap-wizard/jquery.bootstrap.wizard.min.js',
                'owl-carousel/owl.carousel.min.js',
                'select2/select2.full.js',
                
                'magnific-popup/jquery.magnific-popup.min.js',
            );

            $data['header'] = array(
                'title' => 'About Us',
                'breadcrumb' => array(
                    'Home' => route("home"),
                    'Property List' => route("property"),
                    'Property Submit' => 'Property Submit',
            ));
            $data['js'] = array(
                'comman_function.js',
                'ajaxfileupload.js',
                'jquery.form.min.js',
                'home.js',
                'propertyDetails.js',
                'map.js',
            );
            $data['funinit'] = array(
                'Home.init()',
                'PropertyDetails.init()'
            );
            return view('frontend.pages.property.submitproperty', $data);
        }else{
            return redirect('signin');
        }
    }
    
}

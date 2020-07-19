<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use Session;
class PropertyController extends Controller
{
    //
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
            'home.js'
        );
        $data['funinit'] = array(
            'Home.init()'
        );
        return view('frontend.pages.property.propertylist', $data);
    }
    public function propertydetails(Request $request,$id){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Property Details';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Property Details';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Property Details';
        $data['css'] = array(
            'datetimepicker/datetimepicker.min.css',
            'slick/slick-theme.css',
            'select2/select2.css',
        );
        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'slick/slick.min.js',
            'datetimepicker/moment.min.js',
            'datetimepicker/datetimepicker.min.js',
            'select2/select2.full.js',
        );
        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Property List' => route("property"),
                'Property Details' => 'Property Details',
        ));
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.property.propertydetails', $data);
    }

    public function submitproperty(Request $request){
        $session = $request->session()->all();
            if(isset($session['logindata'])){
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
                'propertyDetails.js'
            );
            $data['funinit'] = array(
                'PropertyDetails.init()'
            );
            return view('frontend.pages.property.submitproperty', $data);
        }else{
            return redirect('signin');
        }
    }
}

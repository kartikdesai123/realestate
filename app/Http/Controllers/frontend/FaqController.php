<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Faqs;

class FaqController extends Controller
{
    function __construct(){

    }

    public function faq(Request $request){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || FAQs ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || FAQs';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || FAQs';

        $data['css'] = array(
            
        );

        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'select2/select2.full.js'
        );

        $data['header'] = array(
            'breadcrumb' => array(
                'Home' => route("home"),
                'FAQs List' => "FAQs List",
        ));

        $data['js'] = array();
        $data['funinit'] = array();
        $objFaq = new Faqs();
        $data['faq'] = $objFaq->getFaq();
        
        return view('frontend.pages.faq.faq', $data);
    }
}

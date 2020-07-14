<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\TermsCondition;
class TermsconditionController extends Controller
{
    function __construct(){

    }

    public function termcondition(Request $request){
        $objTermsCondition = new TermsCondition();
        $data['termsandcondi'] =  $objTermsCondition->getTermsCondition();
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || FAQs ';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || FAQs';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || FAQs';

        $data['css'] = array(
        );

        $data['plugincss'] = array();
        $data['pluginjs'] = array(           
        );

        $data['js'] = array();
        $data['funinit'] = array();

        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Term Condition' => 'Term Condition',
        ));
        return view('frontend.pages.termcondition.termcondition', $data);
    }
}

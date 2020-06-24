<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class PropertyController extends Controller {

    function __construct() {
        
    }

    public function propertylist(Request $request) {
        $data['title'] = ('constants.PROJECT_NAME') . " || " . Config::get('title.HOMEPAGE');
        $data['description'] = Config::get('constants.PROJECT_NAME') . " || " . Config::get('meta.HOMEPAGE');
        $data['keywords'] = Config::get('keyword.HOMEPAGE');
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.property.propertylist', $data);
    }

}

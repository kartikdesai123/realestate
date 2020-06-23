<?php

namespace App\Http\Controllers\backend\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function __construct(){

    }

    public function dashboard(Request $request){
        $data['title'] = "Real Estate || Dashboard";
        $data['description'] = "Real Estate || Dashboard";
        $data['keywords'] = "Real Estate || Dashboard";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('backend.pages.dashboard.dashboard', $data);
    }
}

<?php

namespace App\Http\Controllers\backend\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Companylist;
use Config;
class CompanyController extends Controller
{
    //
    function __construct(){

    }

    public function list(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Users List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Users List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Users List';        
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
            'global/plugins/datatables/datatables.min.css',
            'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css',
        );
        $data['pluginjs'] = array(
            'customjs/plugins/toastr/toastr.min.js',
            'global/scripts/datatable.js',
            'global/plugins/datatables/datatables.min.js',
            'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'users.js'
        );
        $data['funinit'] = array(
            'Users.init()'
        );
        $data['header'] = array(
            'title' => 'Users List',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Users List' => "Users List",
        ));
        return view('backend.pages.users.users.list', $data);
    }
}

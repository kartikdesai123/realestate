<?php

namespace App\Http\Controllers\backend\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Agencylist;
use Config;
class AgencyController extends Controller
{
   //
   function __construct(){

}

public function list(Request $request){
    $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency List';
    $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency List';
    $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency List';        
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
        'agency.js'
    );
    $data['funinit'] = array(
        'Agency.init()'
    );
    $data['header'] = array(
        'title' => 'Agency List',
        'breadcrumb' => array(
            'Dashboard' => route("admin-dashboard"),
            'Agency List' => "Agency List",
    ));
    return view('backend.pages.users.angency.list', $data);
}


public function view(Request $request,$id){
        
    $objAgentlist = new Agencylist();
    $data['userDetails'] = $objAgentlist->getAgencyDetails($id);
    
    $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency Details';
    $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency Details';
    $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Agency Details';        
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
        'agency.js'
    );
    $data['funinit'] = array(
        'Agency.view()'
    );
    $data['header'] = array(
        'title' => 'Agency Details',
        'breadcrumb' => array(
        'Dashboard' => route("admin-dashboard"),
        'agency List' => route("admin-agency-list"),
        'Agency Details' => "Agency Details",
    ));
    return view('backend.pages.users.angency.view', $data);
}


public function ajaxAction(Request $request){
    $action = $request->input('action');
    switch ($action) {
        
        case 'getdatatable':
            $objAgentlist = new Agencylist();
            $list = $objAgentlist->getdatatable();
            echo json_encode($list);
            break;
        case 'get_agent_datatable':
            $objAgentlist = new Agencylist();
            $list = $objAgentlist->get_agent_datatable($request->input('data')['id']);
            echo json_encode($list);
            break;
        
    }
}
}

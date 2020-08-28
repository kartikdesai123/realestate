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
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Company List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Company List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Company List';        
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
            'companylist.js'
        );
        $data['funinit'] = array(
            'Companylist.init()'
        );
        $data['header'] = array(
            'title' => 'Company List',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Company List' => "Company List",
        ));
        return view('backend.pages.users.company.list', $data);
    }

    public function view(Request $request,$id){
        
        $objCompanylist = new Companylist();
        $data['userDetails'] = $objCompanylist->getCompanyDetails($id);

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Company Details';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Company Details';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Company Details';        
        $data['css'] = array(
        );
        $data['plugincss'] = array(
            
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
        );
        $data['funinit'] = array(
        );
        $data['header'] = array(
            'title' => 'Company Details',
            'breadcrumb' => array(
            'Dashboard' => route("admin-dashboard"),
            'Company List' => route("admin-company-list"),
            'Company Details' => "Company Details",
        ));
        return view('backend.pages.users.company.view', $data);
    }

    public function ajaxAction(Request $request){
        $action = $request->input('action');
        switch ($action) {
            
            case 'getdatatable':
                $objCompanylist = new Companylist();
                $list = $objCompanylist->getdatatable();
                    
                echo json_encode($list);
                break;
            
        }
    }
}

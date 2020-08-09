<?php

namespace App\Http\Controllers\backend\reportedproperty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ReportProperty;
use Config;
class ReportedpropertyController extends Controller
{
    function __construct(){

    }

    public function list(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Reported Properties List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Reported Properties List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Reported Properties List';
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
            'reportedproperties.js',
        );
        $data['funinit'] = array(
            'Reportedproperties.init()'
        );
        $data['header'] = array(
            'title' => 'Reported Properties List',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Reported Properties List' => "Reported Properties List",
        ));
        return view('backend.pages.reportedproperties.list', $data);
    }


    public function ajaxAction(Request $request){

        $action = $request->input('action');

        switch ($action) {
            case 'getdatatable':
                $objReportProperty = new ReportProperty();
                $list = $objReportProperty->getdatatable();
                echo json_encode($list);
                break;
            case 'changestatus':
                $objReportProperty = new ReportProperty();
                $result = $objReportProperty->changestatus($request->input('data'));
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Property Status successfully updated';
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
                echo json_encode($return);
                exit;
            }
        }
}

<?php

namespace App\Http\Controllers\backend\faq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Faqs;
class FaqController extends Controller
{
    //

    function __construct(){

    }

    public function list(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || FAQs List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || FAQs List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || FAQs List';
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
            'faq.js'
        );
        $data['funinit'] = array(
            'Faq.init()'
        );
        $data['header'] = array(
            'title' => 'FAQs List',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'FAQs List' => "FAQs List",
        ));
        return view('backend.pages.faq.list', $data);
    }


    public function add (Request $request){
        if ($request->isMethod("post")) {
            $objFaqs = new Faqs();
            $result = $objFaqs->add($request);
            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'FAQs successfully added';
                $return['redirect'] = route('admin-faq');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'FAQs already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
            }
            echo json_encode($return);
            exit;
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New FAQs';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New FAQs';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New FAQs';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
            'customjs/plugins/toastr/toastr.min.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'faq.js'
        );
        $data['funinit'] = array(
            'Faq.add()'
        );
        $data['header'] = array(
            'title' => 'Add New FAQs',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'FAQs List' => route("admin-faq"),
                'Add New FAQs' => "Add New FAQs",
        ));
        return view('backend.pages.faq.add', $data);
    }
    public function edit (Request $request,$id){

        $objFaqs = new Faqs();
        $data['details'] = $objFaqs->editDetails($id);

        if ($request->isMethod("post")) {
            $objFaqs = new Faqs();
            $result = $objFaqs->edit($request);
            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'FAQs successfully updated';
                $return['redirect'] = route('admin-faq');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'FAQs already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
            }
            echo json_encode($return);
            exit;
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit FAQs';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit FAQs';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit FAQs';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
            'customjs/plugins/toastr/toastr.min.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'faq.js'
        );
        $data['funinit'] = array(
            'Faq.edit()'
        );
        $data['header'] = array(
            'title' => 'Edit FAQs',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'FAQs List' => route("admin-faq"),
                'Edit FAQs' => "Edit FAQs",
        ));
        return view('backend.pages.faq.edit', $data);
    }

    public function ajaxAction(Request $request){

        $action = $request->input('action');

        switch ($action) {
            case 'getdatatable':
                    $objFaqs = new Faqs();
                    $list = $objFaqs->getdatatable();
                    
                echo json_encode($list);
                break;
            case 'deletefaqs':
                    $objFaqs = new Faqs();
                    $result = $objFaqs->deletefaqs($request->input('data'));
                    if ($result) {
                        $return['status'] = 'success';
                        $return['message'] = 'Faqs successfully deleted';
                        $return['redirect'] = route('admin-faq');
                    } else {
                        $return['status'] = 'error';
                        $return['message'] = 'Something goes to wrong.';
                    }
                    echo json_encode($return);
                    exit;
                echo json_encode($list);
                break;
        }
    }
}

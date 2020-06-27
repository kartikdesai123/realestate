<?php

namespace App\Http\Controllers\backend\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class BlogController extends Controller
{
    function __construct(){

    }


    public function list(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blog Category';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blog Category';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blog Category';        
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
            'blog.js'
        );
        $data['funinit'] = array(
            'Blog.init()'
        );
        $data['header'] = array(
            'title' => 'Blog List',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Blog List' => "Blog List",
        ));
        return view('backend.pages.blog.blog.list', $data);
    }
}

<?php

namespace App\Http\Controllers\backend\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Blogcategory;
class BlogCategoryController extends Controller
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
            'blogcategory.js'
        );
        $data['funinit'] = array(
            'Blogcategory.init()'
        );
        $data['header'] = array(
            'title' => 'Blog Category List',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Blog Category List' => "Blog Category List",
        ));
        return view('backend.pages.blog.blogcategory.list', $data);
    }


    public function add(Request $request){
        if ($request->isMethod("post")) {
            $objBlogcategory = new Blogcategory();
            $result = $objBlogcategory->add($request);
            
            echo json_encode($result);
            exit;
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add Blog Category';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add Blog Category';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add Blog Category';        
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
            'blogcategory.js'
        );
        $data['funinit'] = array(
            'Blogcategory.add()'
        );
        $data['header'] = array(
            'title' => 'Add Blog Category',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Blog Category List' => route("blog-category"),
                'Add Blog Category' => "Add Blog Category",
        ));
        return view('backend.pages.blog.blogcategory.add', $data);
    }

    public function edit (Request $request,$id){

        $objBlogcategory = new Blogcategory();
            $data['details'] = $objBlogcategory->editdetails($id);
        if ($request->isMethod("post")) {
            $objBlogcategory = new Blogcategory();
            $result = $objBlogcategory->edit($request);
            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Blog category  successfully updated';
                $return['redirect'] = route('blog-category');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'Blog category already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
                
            }
            echo json_encode($return);
            exit;
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Extra Facailies';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Extra Facailies';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Extra Facailies';
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
            'blogcategory.js'
        );
        $data['funinit'] = array(
            'Blogcategory.edit()'
        );
        $data['header'] = array(
            'title' => 'Add Blog Category',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Blog Category List' => route("blog-category"),
                'Edit Blog Category' => "Edit Blog Category",
        ));
        return view('backend.pages.blog.blogcategory.edit', $data);
    }

    public function ajaxAction(Request $request){
        $action = $request->input('action');

        switch ($action) {
            case 'getdatatable':
                $objBlogcategory = new Blogcategory();
                $list = $objBlogcategory->getdatatable();
                    
                echo json_encode($list);
                break;

            case 'deleteBlogcategory':
                    $objExtrafacilities = new Blogcategory();
                    $result = $objExtrafacilities->deleteBlogcategory($request->input('data'));
                    if ($result) {
                        $return['status'] = 'success';
                        $return['message'] = 'Blog category successfully deleted';
                        $return['redirect'] = route('blog-category');
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

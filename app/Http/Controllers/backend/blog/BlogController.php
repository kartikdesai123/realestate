<?php

namespace App\Http\Controllers\backend\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Blog;
use App\Model\Blogcategory;
class BlogController extends Controller
{
    function __construct(){
    }


    public function list(Request $request){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blog List';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blog List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blog List';        
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



    public function add(Request $request){

        if ($request->isMethod("post")) {
           $objBlog = new Blog();
           $result = $objBlog->addBlog($request);
           if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Blog category  successfully updated';
                $return['redirect'] = route('admin-blog');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'Blog title already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
            }
            echo json_encode($return);
            exit;
        }
        $objBlogcategory = new Blogcategory();
        $data['blogcategory'] = $objBlogcategory->blogcategory();
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Blog';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Blog List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Add New Blog List';        
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
            'blog.js'
        );
        $data['funinit'] = array(
            'Blog.add()'
        );
        $data['header'] = array(
            'title' => 'Add New Blog',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Blog List' => route("blog"),
                'Add New Blog' => "Add New Blog",
        ));
        return view('backend.pages.blog.blog.add', $data);
    }


    public function view(Request $request,$id){

        $objBlog = new Blog();
        $data['blogdetails'] = $objBlog->blogdetails($id);

        $objBlogcategory = new Blogcategory();
        $data['blogcategory'] = $objBlogcategory->blogcategory();
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || View Blog';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || View Blog List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || View Blog List';        
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['header'] = array(
            'title' => 'View Blog',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Blog List' => route("blog"),
                'View Blog' => "View Blog",
        ));
        return view('backend.pages.blog.blog.view', $data);
    }

    public function edit(Request $request,$id){

        if ($request->isMethod("post")) {
           $objBlog = new Blog();
           $result = $objBlog->editBlog($request);
            if ($result == "true") {
                $return['status'] = 'success';
                $return['message'] = 'Blog category  successfully updated';
                $return['redirect'] = route('admin-blog');
            } else {
                if ($result == "exits") {
                    $return['status'] = 'error';
                    $return['message'] = 'Blog title already exits';
                }else{
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
            }
            echo json_encode($return);
            exit;
        }
        $objBlog = new Blog();
        $data['blogdetails'] = $objBlog->blogdetails($id);
        
        $objBlogcategory = new Blogcategory();
        $data['blogcategory'] = $objBlogcategory->blogcategory();

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Blog';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Blog List';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Edit Blog List';        
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
            'blog.js'
        );
        $data['funinit'] = array(
            'Blog.edit()'
        );
        $data['header'] = array(
            'title' => 'Edit Blog',
            'breadcrumb' => array(
                'Dashboard' => route("admin-dashboard"),
                'Blog List' => route("blog"),
                'Edit Blog' => "Edit Blog",
        ));
        return view('backend.pages.blog.blog.edit', $data);
    }


    public function ajaxAction(Request $request){
        $action = $request->input('action');

        switch ($action) {
            case 'getdatatable':
             
                $objBlog = new Blog();
                $list = $objBlog->getdatatable();                    
                echo json_encode($list);
                break;
            case 'deleteBlog':
             
                $objBlog = new Blog();
                $result = $objBlog->deleteBlog($request->input('data'));                    
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Blog successfully deleted';
                    $return['redirect'] = route('admin-blog');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong.';
                }
                echo json_encode($return);
                exit;
        }
    }
}

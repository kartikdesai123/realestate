<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Model\Blog;
use App\Model\Blogcategory;
use App\Model\GeneralSettings;
class BlogController extends Controller
{
    function __construct(){

    }

    public function blog(Request $request){

        $getId = $request->get("categoryid");
        
        $objBlogcategory = new Blogcategory();
        $data['categoryList'] = $objBlogcategory->getcategoryList();

        $objGeneralSettings = new GeneralSettings();
        $data['generalSettings'] = $objGeneralSettings->getGeneralSettings();
//        print_r($data['generalSettings']); exit();
        if($getId){
            // editdetails
            // $objBlogcategory = new Blogcategory();
            // $data['blog'] = $objBlogcategory->editdetails($getId);

            $objBlog = new Blog();
            $data['getBlogList'] = $objBlog->getBlogList($getId);
        }else{


            $objBlog = new Blog();
            $data['getBlogList'] = $objBlog->getBlogList();
        }
//        print_r($data['getBlogList'][0]->blogCategoryName); exit();
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blogs';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blogs';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blogs';
        $data['css'] = array(
            'owl-carousel/owl.carousel.min.css',
        );
        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'owl-carousel/owl.carousel.min.js',
        );
        $data['js'] = array();
        $data['funinit'] = array();

        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Blog List' => 'Blog List',
        ));

        return view('frontend.pages.blog.blog', $data);
    }

    public function blogdetails(Request $request,$id){

        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blog Details';
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blog Details';
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . ' || Blog Details';
        $data['css'] = array(
            'owl-carousel/owl.carousel.min.css',
        );
        $data['plugincss'] = array();
        $data['pluginjs'] = array(
            'owl-carousel/owl.carousel.min.js',
        );

        $data['header'] = array(
            'title' => 'About Us',
            'breadcrumb' => array(
                'Home' => route("home"),
                'Blog List' => route("blog"),
                'Blog Details' => 'Blog Details',
        ));

        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.blog.blogdetails', $data);
    }
}

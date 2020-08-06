<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table ="blog";

    public function getdatatable(){

        $requestData = $_REQUEST;
        $columns = array(
            0 => 'blog.id',
            1 => 'blog.title',
            2 => 'blogcategory.blogCategoryName',
            3 => 'blog.authorName',
            4 => 'blog.created_at',
        );
        $query = Blog ::from('blog')
                        ->join("blogcategory","blogcategory.id","=","blog.category")
                        ->where('blog.is_deleted','0');

        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function($query) use ($columns, $searchVal, $requestData) {
                $flag = 0;
                foreach ($columns as $key => $value) {
                    $searchVal = $requestData['search']['value'];
                    if ($requestData['columns'][$key]['searchable'] == 'true') {
                        if ($flag == 0) {
                            $query->where($value, 'like', '%' . $searchVal . '%');
                            $flag = $flag + 1;
                        } else {
                            $query->orWhere($value, 'like', '%' . $searchVal . '%');
                        }
                    }
                }
            });
        }

        $temp = $query->orderBy($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);

        $totalData = count($temp->get());
        $totalFiltered = count($temp->get());

        $resultArr = $query->skip($requestData['start'])
                ->take($requestData['length'])
                ->select('blog.id','blog.title','blogcategory.blogCategoryName','blog.created_at','blog.authorName')
                ->get();
        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            $actionhtml = '';
            $actionhtml = '<a href="'.route('admin-view-blog',$row['id']).'"  class="btn btn-icon primary"  ><i class="fa fa-eye"></i></a>'
                    .'<a href="'.route('admin-edit-blog',$row['id']).'"  class="btn btn-icon primary"  ><i class="fa fa-edit"></i></a>'
                    . '<a href="" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deleteBlog" data-id="' . $row["id"] . '" ><i class="fa fa-trash" ></i></a>';
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $row['title'];
            $nestedData[] = $row['blogCategoryName'];
            $nestedData[] = $row['authorName'];
            $nestedData[] = date("d-M-Y h:i:s",strtotime($row['created_at']));
            $nestedData[] = $actionhtml;
            $data[] = $nestedData;
        }
        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );
        return $json_data;
    }


    public function addBlog($request){
        $count = Blog::where("title",$request->input('blogtitle'))
                        ->count();
        if($count == 0){
            $objBlog = new Blog();
            $objBlog->title =$request->input('blogtitle');
            $objBlog->description = $request->input('blogdescription');
            $objBlog->category = $request->input('blogcategory');
            $objBlog->authorName =$request->input('authorname');
            $objBlog->is_deleted = "0";
            $objBlog->created_at = date("Y-m-d h:i:s");
            $objBlog->updated_at = date("Y-m-d h:i:s");
            if($objBlog->save()){
                return "true";
            }else{
                return "wrong";
            }
        }else{
            return "exits";
        }
            
    }
    public function editBlog($request){
            $count = Blog::where("title",$request->input('blogtitle'))
                        ->where("id","!=",$request->input('id'))
                        ->count();
                if($count == 0){
                    $objBlog = Blog::find($request->input('id')); 
                    $objBlog->title =$request->input('blogtitle');
                    $objBlog->description = $request->input('blogdescription');
                    $objBlog->category = $request->input('blogcategory');
                    $objBlog->authorName =$request->input('authorname');
                    $objBlog->updated_at = date("Y-m-d h:i:s");
                    if($objBlog->save()){
                        return "true";
                    }else{
                        return "wrong";
                    }
                }else{
                    return "exits";
                }
    }


    public function blogdetails($id){
        return  $query = Blog ::from('blog')
                        ->join("blogcategory","blogcategory.id","=","blog.category")
                        ->where("blog.id",$id)
                        ->select('blog.id','blog.title','blog.category','blogcategory.blogCategoryName','blog.description','blog.created_at','blog.authorName')
                        ->get();
       
    }


    public function deleteBlog($data){
        $objBlog = Blog::find($data['id']);
        $objBlog->is_deleted = "1";
        $objBlog->updated_at = date("Y-m-d h:i:s");
        return $objBlog->save();
    }

    public function getBlogList($categoryid=null){
    
        if($categoryid){
            return  $query = Blog ::from('blog')
                        ->join("blogcategory","blogcategory.id","=","blog.category")
                        ->where("blog.category",$categoryid)
                        ->select('blog.id','blog.title','blog.category','blogcategory.blogCategoryName','blog.description','blog.created_at','blog.authorName')
                        ->paginate(3);
        }else{
            return  $query = Blog ::from('blog')
                    ->join("blogcategory","blogcategory.id","=","blog.category")
                    ->select('blog.id','blog.title','blog.category','blogcategory.blogCategoryName','blog.description','blog.created_at','blog.authorName')
                    ->paginate(3);
            
        }
    }
}

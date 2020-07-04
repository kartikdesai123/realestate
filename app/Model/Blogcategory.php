<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Blog;
use DB;
class Blogcategory extends Model
{
    protected $table ="blogcategory";

    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'id',
            1 => 'blogCategoryName',
        );
        $query = Extrafacilities ::from('blogcategory')
                            ->where('is_deleted','0');

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
                ->select('id', 'blogCategoryName')
                ->get();
        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            $actionhtml = '';
            $actionhtml = '<a href="'.route('edit-blog-category',$row['id']).'"  class="btn btn-icon primary"  ><i class="fa fa-edit"></i></a>'
                    . '<a href="" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deleteBlogcategory" data-id="' . $row["id"] . '" ><i class="fa fa-trash" ></i></a>';
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $row['blogCategoryName'];
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


    public function add($request){
        $exitsArray = [];
        $errorArray = [];
        foreach($request->input('category') as $key => $value){
           $count = Blogcategory::where("blogCategoryName",$value)->count();
           if($count  == 0){
                $objExtrafacilities = new Blogcategory();
                $objExtrafacilities->blogCategoryName =$value;
                $objExtrafacilities->is_deleted = "0";
                $objExtrafacilities->created_at = date("Y-m-d h:i:s");
                $objExtrafacilities->updated_at = date("Y-m-d h:i:s");
                if($objExtrafacilities->save()){

                }else{
                    array_push($errorArray,$value);
                }
              
           }else{
               array_push($exitsArray,$value);
           }         

           
        }
        if(count($exitsArray) != 0){
            $str = implode(",",$exitsArray);
            $return['status'] = 'success';
            $return['message']= "Blog Category Succesfully added.but ".$str." category already exits.";
            $return['redirect'] = route('blog-category');
       }else{
            if(count($errorArray) != 0){
                $str = implode(",",$errorArray);
                $return['status'] = 'success';
                $message= "Blog Category Succesfully added.but".$str." category not added.";
                $return['redirect'] = route('blog-category');
            }else{
                $return['status'] = 'success';
                $return['message']="Blog Category Succesfully added";
                $return['redirect'] = route('blog-category');
            }
       }
       return $return;
    }

    public function editdetails($id){
        return Blogcategory::select("blogCategoryName","id")
                    ->where("id",$id)
                    ->get();
    }


    public function edit($request){
        $count = Blogcategory::where("blogCategoryName",$request->input("category"))
                            ->where("id","!=",$request->input('id'))
                            ->count();
        if($count  == 0){
            $objBlogcategory = Blogcategory::find($request->input('id'));
            $objBlogcategory->blogCategoryName =$request->input("category");
            $objBlogcategory->updated_at = date("Y-m-d h:i:s");
            if($objBlogcategory->save()){
                return "true";
            }else{
                return "false";
            }
        }else{
            return "exits";
        }
    }
    public function deleteBlogcategory($data){
        $objBlogcategory = Blogcategory::find($data['id']);
        $objBlogcategory->is_deleted = "1";
        $objBlogcategory->updated_at = date("Y-m-d h:i:s");
        return $objBlogcategory->save();
    }

    public function blogcategory(){
        return Blogcategory::select("blogCategoryName","id")
                                ->where('is_deleted','0')
                                ->get();
    }
    public function getcategoryList(){
        return Blogcategory::select("blogcategory.blogCategoryName","blogcategory.id",DB::raw("count(blog.category) as count"))
                                ->leftJoin("blog","blog.category","=","blogcategory.id")
                                ->where('blogcategory.is_deleted','0')
                                ->groupBy('blogcategory.id')
                                ->get();
    }
    
}

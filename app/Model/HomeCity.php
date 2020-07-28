<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
class HomeCity extends Model
{
    //
    protected $table = "home_city";
    
     public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'home_city.id',
            1 => 'home_city.city_name',
            2 => 'home_city.total_propeties',
            3 => 'home_city.is_home',
            4 => 'home_city.updated_at',
        );
        $query = Blog::from('home_city');

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
                ->select('home_city.id','home_city.city_name','home_city.total_propeties','home_city.is_home','home_city.updated_at')
                ->get();
        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            $actionhtml = '';
            $actionhtml ='<a href="'.route('admin-edit-home',$row['id']).'"  class="btn btn-icon primary"  ><i class="fa fa-edit"></i></a>';
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $row['city_name'];
            $nestedData[] = $row['total_propeties'];
            $nestedData[] = ($row['is_home'] == '1') ? 'Yes' : 'No';
            $nestedData[] = date("d-M-Y h:i:s",strtotime($row['updated_at']));
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
    
    public function editDetails($id){
        return HomeCity::select("*")->where("id",$id)->get();
    }
    
    public function edit($request){
        
        
        $objHome = HomeCity::find($request->input('id')); 

            if ($request->file('home_image')) {  
                
                $image = $request->file('home_image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/home_city');
                $image->move($destinationPath, $name);
                $objHome->images = $name;
            }
            
            $objHome->is_home = (@$request->input('is_home')) ? '1' : '0';
            $objHome->updated_at = date("Y-m-d h:i:s");
            if($objHome->save()){                
                return "true";
            }else{                
                return "wrong";
            }
    }
    
   public function gethomeCity(){
        return HomeCity::select('*')->where('is_home','=','1')->get();
    }
}


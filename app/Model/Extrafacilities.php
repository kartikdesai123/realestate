<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Extrafacilities extends Model
{
    //
    protected $table ="extrafacilities";

    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'id',
            1 => 'facilitiesName',
        );
        $query = Extrafacilities ::from('extrafacilities')
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
                ->select('id', 'facilitiesName')
                ->get();
        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            $actionhtml = '';
            $actionhtml = '<a href="'.route('edit-extra-facilities',$row['id']).'"  class="btn btn-icon primary"  ><i class="fa fa-edit"></i></a>'
                    . '<a href="" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deletefacilities" data-id="' . $row["id"] . '" ><i class="fa fa-trash" ></i></a>';
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $row['facilitiesName'];
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

        $count = Extrafacilities::where("facilitiesName",$request->input('facilities'))
                    ->where("is_deleted","0")
                    ->count();

        if($count == 0){
            $objExtrafacilities = new Extrafacilities();
            $objExtrafacilities->facilitiesName =$request->input("facilities");
            $objExtrafacilities->is_deleted = "0";
            $objExtrafacilities->created_at = date("Y-m-d h:i:s");
            $objExtrafacilities->updated_at = date("Y-m-d h:i:s");
            if($objExtrafacilities->save()){                
                return "true";
            }else{                
                return "wrong";
            }
        }else{
            return "exits";
        }
    }
    public function edit($request){
        $count = Extrafacilities::where("facilitiesName",$request->input('facilities'))
                    ->where("id","!=",$request->input('id'))
                    ->where("is_deleted","0")
                    ->count();
        if($count == 0){
            $objExtrafacilities = Extrafacilities::find($request->input('id'));
            $objExtrafacilities->facilitiesName =$request->input("facilities");
            $objExtrafacilities->updated_at = date("Y-m-d h:i:s");
            if($objExtrafacilities->save()){                
                return "true";
            }else{                
                return "wrong";
            }
        }else{
            return "exits";
        }
    }
    
    public function editdetails($id){
        return Extrafacilities::select("facilitiesName","id")->where("id",$id)->get();
    }
    public function deletefacilities($data){
        $objExtrafacilities = Extrafacilities::find($data['id']);
        $objExtrafacilities->is_deleted = "1";
        $objExtrafacilities->updated_at = date("Y-m-d h:i:s");
        return $objExtrafacilities->save();
    }
}

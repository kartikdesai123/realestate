<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Plandetails extends Model
{
    protected $table ="plandetails";
    //
    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'plandetails.id',
            1 => 'plan.planname',
            2 => 'plandetails.planname',
            3 => 'plandetails.planprice',
            4 => 'plandetails.plandays',
            5 => 'plandetails.planproperty',
            6 => 'plandetails.planagent',
        );
        $query = Blog ::from('plandetails')
                        ->join("plan","plan.id","=","plandetails.planid")
                        ->where('plandetails.is_deleted','0');

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
                ->select('plandetails.id','plan.planname as plan','plandetails.planname',
                        'plandetails.planagent','plandetails.planproperty',
                        'plandetails.planprice','plandetails.plandays',
                        'plandetails.noofvideo','plandetails.angleview')
                ->get();
        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            if($row['angleview'] == "Y"){
                $viewHtml = '<i class="fa fa-check" style="color:green"></i>';
            }else{
                $viewHtml = '<i class="fa fa-times  " style="color:red"></i>';
            }
            $actionhtml = '';
            $actionhtml = '<a href="'.route('admin-edit-plan-details',$row['id']).'"  class="btn btn-icon primary"  ><i class="fa fa-edit"></i></a>'
                    . '<a href="" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deletePlandetails" data-id="' . $row["id"] . '" ><i class="fa fa-trash" ></i></a>';
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $row['plan'];
            $nestedData[] = $row['planname'];
            $nestedData[] = $row['planprice'];
            $nestedData[] = $row['planproperty'];
            $nestedData[] = $row['planagent'];
            $nestedData[] = $row['plandays'];
            $nestedData[] = $row['noofvideo'];
            $nestedData[] = $viewHtml;
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
        $count = Plandetails::where("planid",$request->input('plan'))
                    ->where("planname",$request->input('planname'))
                    ->count();
        if($count == 0){
            $objPlandetails = new Plandetails();
            $objPlandetails->planid =$request->input('plan');
            $objPlandetails->planname = $request->input('planname');
            $objPlandetails->planprice = $request->input('planprice');
            $objPlandetails->plandays = $request->input('plandays');
            $objPlandetails->planproperty = $request->input('planproperty');
            $objPlandetails->planagent = $request->input('planagent');
            $objPlandetails->noofvideo = $request->input('noOfVideo');
            $objPlandetails->angleview = $request->input('angleView');
            $objPlandetails->is_deleted = "0";
            $objPlandetails->created_at = date("Y-m-d h:i:s");
            $objPlandetails->updated_at = date("Y-m-d h:i:s");
            if($objPlandetails->save()){                
                return "true";
            }else{                
                return "wrong";
            }
        }else{
            return "exits";
        }
    }


    public function edit($request){
        $count = Plandetails::where("planid",$request->input('plan'))
                    ->where("planname",$request->input('planname'))
                    ->where("id","!=",$request->input('id'))
                    ->count();

            if($count == 0){
                $objPlandetails = Plandetails::find($request->input('id')); 
                $objPlandetails->planid =$request->input('plan');
                $objPlandetails->planname = $request->input('planname');
                $objPlandetails->planprice = $request->input('planprice');
                $objPlandetails->plandays = $request->input('plandays');
                $objPlandetails->planproperty = $request->input('planproperty');
                $objPlandetails->planagent = $request->input('planagent');
                $objPlandetails->noofvideo = $request->input('noOfVideo');
                $objPlandetails->angleview = $request->input('angleView');
                $objPlandetails->updated_at = date("Y-m-d h:i:s");
                if($objPlandetails->save()){                
                    return "true";
                }else{                
                    return "wrong";
                }
            }else{
                return "exits";
            }
    }


    public function editDetails($id){
        return Plandetails::select("planid","id","planname","planprice","plandays","planproperty","planagent","noofvideo","angleview")
                    ->where("id",$id)
                    ->get();
    }

    public function deletePlandetails($data){
           
            $objPlandetails = Plandetails::find($data['id']); 
            $objPlandetails->is_deleted ="1";
            $objPlandetails->updated_at = date("Y-m-d h:i:s");
            return $objPlandetails->save();
    }

    public function plandetails($id){
        return Plandetails::select("plandetails.noofvideo","plandetails.angleview","plan.planfor","plandetails.planid","plandetails.planname","plandetails.planprice","plandetails.plandays","plandetails.planproperty","plandetails.planagent","plandetails.is_deleted","plandetails.id")
                            ->join("plan","plan.id","=","plandetails.planid")
                            ->where("plandetails.planid",$id)
                            ->where("plandetails.is_deleted","0")
                            ->get();
    }
}

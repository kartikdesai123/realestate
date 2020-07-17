<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table ="plan";
    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'plan.id',
            1 => 'plan.planname',
            2 => 'plan.plandescription',
            2 => 'plan.planfor',
            4 => 'plan.created_at',
        );
        $query = Blog ::from('plan')
                    ->where('plan.is_deleted','0');

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
                ->select('plan.id','plan.planname','plan.plan_icon','plan.plan_bg_image','plan.created_at','plan.plandescription','plan.planfor')
                ->get();
        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            
            $htmlPlan = url("public/upload/plan/icon/" . $row['plan_icon']);
            $htmlPlanBgImage = url("public/upload/plan/background_image/" . $row['plan_bg_image']);
            if($row['planfor'] == 'U'){
                $planfor = "Normal Users";
            }
            if($row['planfor'] == 'AG'){
                $planfor = "Agent";
            }
            if($row['planfor'] == 'AY'){
                $planfor = "Agency";
            }
            if($row['planfor'] == 'CC'){
                $planfor = "Construction Company";
            }

            $actionhtml = '';
            $actionhtml ='<a href="'.route('admin-edit-plan',$row['id']).'"  class="btn btn-icon primary"  ><i class="fa fa-edit"></i></a>'
                    .'<a href="" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deleteplan" data-id="' . $row["id"] . '" ><i class="fa fa-trash" ></i></a>';
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $row['planname'];
            $nestedData[] = $row['plandescription'];
            $nestedData[] = $planfor;
            if($row['plan_icon'] == null){
                $nestedData[] = "N/A";
            }else{
                $nestedData[] = '<img height="70px" width="70px" src="' . $htmlPlan . '" style="margin:20px;">';
            }
            if($row['plan_bg_image'] == null){
                $nestedData[] = "N/A";
            }else{
                $nestedData[] = '<img height="70px" width="70px" src="' . $htmlPlanBgImage . '" style="margin:20px;">';
            }
            
            
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


    public function add($request){

        $count = Plan::where("planname",$request->input('planname'))
                    ->count();

        if($count == 0){
            $objPlan = new Plan();
            if ($request->file('plan_icon')) {               
                $image = $request->file('plan_icon');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/plan/icon');
                $image->move($destinationPath, $name);
                $objPlan->plan_icon = $name;
            }
            if ($request->file('plan_bg_image')) {               
                $image = $request->file('plan_bg_image');
                $plan_bg_name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/plan/background_image');
                $image->move($destinationPath, $name);
                $objPlan->plan_bg_image = $name;
            }
            $objPlan->planname =$request->input('planname');
            $objPlan->plandescription = $request->input('plandescription');
            $objPlan->planfor = $request->input('planfor');
            $objPlan->is_deleted = "0";
            $objPlan->created_at = date("Y-m-d h:i:s");
            $objPlan->updated_at = date("Y-m-d h:i:s");
            if($objPlan->save()){                
                return "true";
            }else{                
                return "wrong";
            }
        }else{
            return "exits";
        }
    }
    public function edit($request){
        $count = Plan::where("planname",$request->input('planname'))
                    ->where("id","!=" , $request->input('id'))
                    ->count();
        if($count == 0){

            $imageDetails = Plan::select("plan_icon","plan_bg_image")
                    ->where("id", $request->input('id'))
                    ->get();
           
            $objPlan = Plan::find($request->input('id')); 

            if ($request->file('plan_icon')) {  
                
                $image = $request->file('plan_icon');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/plan/icon');
                $image->move($destinationPath, $name);
                $objPlan->plan_icon = $name;
            }
            if ($request->file('plan_bg_image')) {     
                
                $image = $request->file('plan_bg_image');
                $plan_bg_name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/plan/background_image');
                $image->move($destinationPath, $name);
                $objPlan->plan_bg_image = $name;
            }

            $objPlan->planname =$request->input('planname');
            $objPlan->plandescription = $request->input('plandescription');
            $objPlan->planfor = $request->input('planfor');
            $objPlan->updated_at = date("Y-m-d h:i:s");
            if($objPlan->save()){                
                return "true";
            }else{                
                return "wrong";
            }
        }else{
            return "exits";
        }
    }
    public function deleteplan($data){
            
            $objPlan = Plan::find($data['id']); 
            $objPlan->is_deleted ="1";
            $objPlan->updated_at = date("Y-m-d h:i:s");
            return $objPlan->save();
    }

    public function editDetails($id){
        return Plan::select("planname","id","plandescription","planfor","plan_icon","plan_bg_image")
                    ->where("id",$id)
                    ->get();
    }
    public function getplan(){
        return Plan::select("planname","id")
                    ->where("is_deleted","0")
                    ->get();
    }
    public function getplanList(){
        return Plan::select("planname","id","plandescription","plan_icon","plan_bg_image")
                    ->where("is_deleted","0")
                    ->get();
    }
}

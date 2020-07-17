<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
    protected $table ="services";



    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'services.id',
            1 => 'services.servicesName',
            2 => 'services.servicesImage',
            3 => 'services.servicesDescripation',
            4 => 'services.created_at',
        );
        $query = Blog ::from('services')
                        ->where('services.is_deleted','0');

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
                ->select('services.id','services.servicesName','services.servicesImage','services.servicesDescripation','services.created_at')
                ->get();
        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            $imagepath = url("public/upload/serviceImage/" . $row['servicesImage']);
            $actionhtml = '';
            $actionhtml = '<a href="'.route('admin-view-services',$row['id']).'"  class="btn btn-icon primary"  ><i class="fa fa-eye"></i></a>'
                    .'<a href="'.route('admin-edit-services',$row['id']).'"  class="btn btn-icon primary"  ><i class="fa fa-edit"></i></a>'
                    . '<a href="" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deleteservices" data-id="' . $row["id"] . '" ><i class="fa fa-trash" ></i></a>';
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = '<img height="70px" width="70px" src="' . $imagepath . '" style="margin:20px;">';
            $nestedData[] = $row['servicesName'];
            $nestedData[] = $row['servicesDescripation'];
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

        $count = Services::where("servicesName",$request->input('serviceName'))
                    ->where("is_deleted","0")
                    ->count();
        if($count == 0){
            $objServices = new Services();
            if ($request->file()) {

                $image = $request->file('serviceImage');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/serviceImage');
                $image->move($destinationPath, $name);
                $objServices->servicesImage = $name;

            }
            $objServices->servicesName = $request->input("serviceName");
            $objServices->servicesDescripation = $request->input("servicesdescription");
            $objServices->is_deleted = "0";
            $objServices->created_at = date("Y-m-d h:i:s");
            $objServices->updated_at = date("Y-m-d h:i:s");
            if($objServices->save()){                
                return "true";
            }else{                
                return "wrong";
            }
        }else{
            return "exits";
        }
        
    }
    public function edit($request){
        
        $count = Services::where("servicesName",$request->input('serviceName'))
                    ->where("id","!=",$request->input('id'))
                    ->where("is_deleted","0")
                    ->count();
        if($count == 0){
            $objServices = Services::find($request->input('id'));
            
            if ($request->file()) {
                $image = $request->file('serviceImage');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/serviceImage');
                $image->move($destinationPath, $name);
                $objServices->servicesImage = $name;
            }
            
            $objServices->servicesName = $request->input("serviceName");
            $objServices->servicesDescripation = $request->input("servicesdescription");
            $objServices->is_deleted = "0";
            $objServices->created_at = date("Y-m-d h:i:s");
            $objServices->updated_at = date("Y-m-d h:i:s");
            if($objServices->save()){                
                return "true";
            }else{                
                return "wrong";
            }
        }else{
            return "exits";
        }
        
    }

    public function editDetails($id){
        return Services::select("servicesName","servicesImage","servicesDescripation","id")
                        ->where("id",$id)
                        ->get();
    }
    public function deleteservices($data){
        $objServices = Services::find($data['id']); 
        $objServices->is_deleted ="1";
        $objServices->updated_at = date("Y-m-d h:i:s");
        return $objServices->save();
    }
}

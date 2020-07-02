<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Servicedetails extends Model
{
    //
    protected $table ="servicedetails";

    public function getDetails(){
        return Servicedetails::select("serviceDetails")
                            ->where("id",1)
                            ->get();
    }


    public function addServicedetails($request){
        $result = Servicedetails::updateOrInsert(
            ['id' => 1],
            ['serviceDetails' => $request->input("service_details"), 
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s")
            ]
            
    );  
    return $result; 
    }
}

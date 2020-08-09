<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Headersildertext extends Model
{
    //
    protected $table ="silder_header_text";


    public function getdetails(){
        return Headersildertext::select("text","id")
                                ->where("id",1)
                                ->get();
    }
    public function addedit($request){
        $result = Headersildertext::updateOrInsert(
            ['id' => 1],
            [ 
                'text' => $request->input("text"), 
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s")
            ]
        );  
        return $result;
    }

}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    //
    protected $table ="aboutus";

    public function aboutus(){
        return  Aboutus::selecT("aboutus")->where("id","1")->get();
    }


    public function addAboutus($request){
        $result = Aboutus::updateOrInsert(
            ['id' => 1],
            ['aboutus' => $request->input("about_us"), 
            "created_at" => date("Y-m-d h:i:s"),
            "updated_at" => date("Y-m-d h:i:s")
            ]
            
        );  
        return $result; 
    }
}

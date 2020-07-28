<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    //
    protected $table ="favourite";
   
    public function addFav($request){
        $getFav = Favourite::where("user_id",$request->input("user_id"))
                    ->where("property_id",$request->input("property_id"))
                    ->get()->toArray();

        if(empty($getFav)){
            $objFav = new Favourite();
            $objFav->user_id = $request->input("question");
            $objFav->property_id = $request->input("answer");
            $objFav->created_at = date("Y-m-d h:i:s");
            $objFav->updated_at = date("Y-m-d h:i:s");
            if($objFav->save()){
                return "added";
            }
        }else{
            $objFav = Faqs::find($getFav[0]['id']); 
            if($objFav->delete()){
                return "deleted";
            }
        }
    }

}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GeneralSettings extends Model
{
    protected $table ="generalsettings";
    public function addGeneralSettings($request){
        $result = GeneralSettings::updateOrInsert(
            ['id' => 1],
            [ 
                'facebook' => $request->input("facebook"), 
                'youTube' => $request->input("youTube"), 
                'instagram' => $request->input("instagram"), 
                'twitter' => $request->input("twitter"), 
                'linkedin' => $request->input("linkedin"), 
                'Address' => $request->input("address"), 
                'contactNumber' => $request->input("contactNumber"), 
                'email' => $request->input("email"), 
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s")
            ]
            
        );  
        return $result; 
    }
    public function getGeneralSettings(){
        return  GeneralSettings::select('facebook','youTube','instagram','twitter','linkedin','Address','contactNumber','email')
                            ->get();
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Auth;
use Config;
use Illuminate\Support\Facades\DB;
use App\Model\PropertyDetails;
use App\Model\Users;

class Search extends Model {

    function propertiesSearch($city){
        $property =  PropertyDetails::select('property_details.*',DB::raw('GROUP_CONCAT(property_photo.name) AS images'),'users.username','users.userimage','users.phoneno','users.roles','users.email')
                            ->join("property_photo","property_details.id","=","property_photo.property_id")
                            ->join("users","property_details.user_id","=","users.id");
                            if($city){
                               $property->where('property_details.city',$city); 
                            }
                            $property->groupBy('property_details.id');
                    $result = $property->get();
                      return $result;
    }
}
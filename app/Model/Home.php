<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Auth;
use Config;
use Illuminate\Support\Facades\DB;
use App\Model\PropertyDetails;
use App\Model\Users;

class Home extends Model {

    function propertiesByLocation(){
        $cityInfo = PropertyDetails::select('city', DB::raw('count(*) as total'))
                 ->groupBy('city')
                 ->get();
        
        return $cityInfo; 
    }
    
    
    function featuredProperty(){
      
       return PropertyDetails::select('property_details.*','users.username','users.userimage','users.phoneno','users.roles','users.email',
                                DB::raw('GROUP_CONCAT(property_photo.name) AS images'))
                            ->join("property_photo","property_details.id","=","property_photo.property_id")
                            ->join("users","property_details.user_id","=","users.id")
                            ->groupBy('property_details.id')
                            ->orderBy('property_details.id', 'desc')
                            ->limit(5)
                            ->get();
      
    }
}
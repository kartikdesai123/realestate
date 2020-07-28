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
}
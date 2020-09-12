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

    function propertiesSearch($city,$getParam){
        $property =  PropertyDetails::select('property_details.*',DB::raw('GROUP_CONCAT(property_photo.name) AS images'),'users.username','users.userimage','users.phoneno','users.roles','users.email')
                            ->join("property_photo","property_details.id","=","property_photo.property_id")
                            ->join("users","property_details.user_id","=","users.id");
                            if($city){
                               $property->where('property_details.city',$city); 
                            }
                            
                            if(isset($getParam['property_type']) && ($getParam['property_type'] != "")){
                                $property->where('property_details.type',$getParam['property_type']);
                            }
                            if(isset($getParam['property_status']) && ($getParam['property_status'] != "")){
                                $property->where('property_details.offer',$getParam['property_status']);
                            }
                            if(isset($getParam['property_city']) && ($getParam['property_city'] != "")){
                                $property->where('property_details.city',$getParam['property_city']);
                            }
                            if(isset($getParam['badroom']) && ($getParam['badroom'] != "")){
                                $property->where('property_details.badroom',$getParam['badroom']);
                            }
                            if(isset($getParam['agent']) && ($getParam['agent'] != "")){
                                $property->where('property_details.user_id',$getParam['agent']);
                                $property->where('users.roles','AG');
                            }
                            if(isset($getParam['company']) && ($getParam['company'] != "")){
                                $property->where('property_details.user_id',$getParam['company']);
                                $property->where('users.roles','CC');
                            }
                            if(isset($getParam['minarea']) && ($getParam['minarea'] != "")){
                                $property->where('property_details.area','>',$getParam['minarea']);
                            }
                            if(isset($getParam['maxarea']) && ($getParam['maxarea'] != "")){
                                $property->where('property_details.area','<',$getParam['maxarea']);
                            }
                            if(isset($getParam['price_range']) && ($getParam['price_range'] != "")){
                                $priceRange = explode(';', $getParam['price_range']);
                                $property->whereBetween('property_details.price',[$priceRange[0],$priceRange[1]]);
                            }
                            if(isset($getParam['sortby']) && ($getParam['sortby'] != "")){
                                if($getParam['sortby'] == 'low'){
                                    $property->orderBy('property_details.price','ASC');
                                }
                                if($getParam['sortby'] == 'high'){
                                    $property->orderBy('property_details.price','DESC');
                                }
                                
                            }
                            $property->groupBy('property_details.id');
                    $result = $property->get();
                      return $result;
    }
}
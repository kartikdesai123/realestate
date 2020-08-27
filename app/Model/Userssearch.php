<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
class Userssearch extends Model
{
    //
    protected $table = 'user_search';

 
    public function addEdituser($request,$id){
        $priceRange = explode(";",$request->input('price_range'));
        $result = DB::table('user_search')->updateOrInsert(
            ['user_id' => $id], 
            [       
                    'property_type' => $request->input("property_type"),
                    'property_status' => $request->input('property_status'),
                    'property_location' => $request->input('txtaddress'),
                    'property_distance' => $request->input('distance'),
                    'property_badroom' => $request->input('badroom'),
                    'property_sortby' => $request->input('sortby'),
                    'property_floorarea' => $request->input('floorarea'),
                    'property_agent' => $request->input('agent'),
                    'property_agency' => $request->input('agencies'),
                    'property_company' => $request->input('company'),
                    'property_minarea' => $request->input('minarea'),
                    'property_maxarea' => $request->input('maxarea'),
                    'max_price' => $priceRange[0],
                    'min_price' => $priceRange[1
                ],
                    "created_at" => date("Y-m-d h:i:s"),
                    "updated_at" => date("Y-m-d h:i:s")
            ]
        );

        return $result;
    }
}

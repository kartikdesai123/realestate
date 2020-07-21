<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\PropertyAudio;
use App\Model\PropertyFloorPlan;
use App\Model\PropertyPhoto;
use App\Model\PropertyTourView;
use App\Model\PropertyVideo;

class PropertyDetails extends Model
{
    //
    protected $table ="property_details";

    public function addProperty($request){
        
        $objPropertyDetails = new PropertyDetails();
        $objPropertyDetails->title =$request->input('propertyTitle');
        $objPropertyDetails->offer =$request->input('offer');
        $objPropertyDetails->period =$request->input('period');
        $objPropertyDetails->type =$request->input('type');
        $objPropertyDetails->price =$request->input('price');
        $objPropertyDetails->area =$request->input('area');
        $objPropertyDetails->rooms =$request->input('rooms');
        $objPropertyDetails->address =$request->input('txtaddress');
        $objPropertyDetails->friendly_address =$request->input('friendly');
        $objPropertyDetails->city =$request->input('txtCity');
        $objPropertyDetails->state =$request->input('txtState');
        $objPropertyDetails->country =$request->input('txtCountry');
        $objPropertyDetails->postalcode =$request->input('txtPostalCode');
        $objPropertyDetails->latitude =$request->input('latitude');
        $objPropertyDetails->longitude =$request->input('longitude');
        $objPropertyDetails->buliding_age =$request->input('buliding_age');
        $objPropertyDetails->badroom =$request->input('bedrooms');
        $objPropertyDetails->bathroom =$request->input('bathrooms');
        $objPropertyDetails->parking =$request->input('parking');
        $objPropertyDetails->cooling =$request->input('cooling');
        $objPropertyDetails->heating =$request->input('heating');
        $objPropertyDetails->sewer =$request->input('sewer');
        $objPropertyDetails->water =$request->input('water');
        $objPropertyDetails->exercise_room =$request->input('exercise_room');
        $objPropertyDetails->storage_room =$request->input('storagr_room');
        $objPropertyDetails->others =$request->input('facilites');
        $objPropertyDetails->created_at =date("Y-m-d h:i:s");
        $objPropertyDetails->updated_at =date("Y-m-d h:i:s");
        if($objPropertyDetails->save()){
            print_r($objPropertyDetails->id);
            die();
        }else{
            return false;
        }
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\PropertyAudio;
use App\Model\PropertyFloorPlan;
use App\Model\PropertyPhoto;
use App\Model\PropertyTourView;
use App\Model\PropertyVideo;
use DB;
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
            $propertyId = $objPropertyDetails->id ;

            if($request->file('photo')){
                
                $i = 0;
                foreach($request->file('photo') as $key => $value){
                    $i++;
                    $objPropertyPhoto = new PropertyPhoto();
                    $image = $request->file('photo')[$key];
                    $name = time().$i.'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload/property_photo');
                    $image->move($destinationPath, $name);

                    $objPropertyPhoto->property_id = $propertyId;
                    $objPropertyPhoto->name = $name;
                    $objPropertyPhoto->created_at = date("Y-m-d h:i:s");
                    $objPropertyPhoto->updated_at = date("Y-m-d h:i:s");
                    if($objPropertyPhoto->save()){
                        
                    }else{
                        DB::table('property_details')->where('id',$propertyId)->delete();
                        DB::table('property_photo')->where('property_id',$propertyId)->delete();
                        return false;
                    }
                }
            }

            if($request->file('tour_view')){
                
                $i = 0;
                foreach($request->file('tour_view') as $key => $value){
                    $i++;
                    $objPropertyTourView = new PropertyTourView();

                    $image = $request->file('tour_view')[$key];
                    $name = time().$i.'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload/property_tour_view');
                    $image->move($destinationPath, $name);

                    $objPropertyTourView->property_id = $propertyId;
                    $objPropertyTourView->name = $name;
                    $objPropertyTourView->created_at = date("Y-m-d h:i:s");
                    $objPropertyTourView->updated_at = date("Y-m-d h:i:s");
                    if($objPropertyTourView->save()){
                        
                    }else{
                        DB::table('property_details')->where('id',$propertyId)->delete();
                        DB::table('property_photo')->where('property_id',$propertyId)->delete();
                        DB::table('property_tour_view')->where('property_id',$propertyId)->delete();
                        return false;
                    }
                }
            }

            if($request->file('video')){
                
                $i = 0;
                foreach($request->file('video') as $key => $value){
                    $i++;
                    $objPropertyVideo = new PropertyVideo();
                    $image = $request->file('video')[$key];
                    $name = time().$i.'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload/property_video');
                    $image->move($destinationPath, $name);

                    $objPropertyVideo->property_id = $propertyId;
                    $objPropertyVideo->name = $name;
                    $objPropertyVideo->created_at = date("Y-m-d h:i:s");
                    $objPropertyVideo->updated_at = date("Y-m-d h:i:s");
                    if($objPropertyVideo->save()){
                        
                    }else{
                        DB::table('property_details')->where('id',$propertyId)->delete();
                        DB::table('property_photo')->where('property_id',$propertyId)->delete();
                        DB::table('property_tour_view')->where('property_id',$propertyId)->delete();
                        DB::table('property_video')->where('property_id',$propertyId)->delete();
                        return false;
                    }
                }
            }


            if($request->file('audio')){
                
                $i = 0;
                foreach($request->file('audio') as $key => $value){
                    $i++;
                    $objPropertyAudio = new PropertyAudio();
                    $image = $request->file('audio')[$key];
                    $name = time().$i.'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload/property_audio');
                    $image->move($destinationPath, $name);

                    $objPropertyAudio->property_id = $propertyId;
                    $objPropertyAudio->name = $name;
                    $objPropertyAudio->created_at = date("Y-m-d h:i:s");
                    $objPropertyAudio->updated_at = date("Y-m-d h:i:s");
                    if($objPropertyAudio->save()){
                        
                    }else{
                        DB::table('property_details')->where('id',$propertyId)->delete();
                        DB::table('property_photo')->where('property_id',$propertyId)->delete();
                        DB::table('property_tour_view')->where('property_id',$propertyId)->delete();
                        DB::table('property_video')->where('property_id',$propertyId)->delete();
                        DB::table('property_audio')->where('property_id',$propertyId)->delete();
                        return false;
                    }
                }
            }


            if($request->file('file')){
                
                
                    $objPropertyFloorPlan = new PropertyFloorPlan();
                    $image = $request->file('file');
                    $name = time().$i.'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload/property_floor_plan');
                    $image->move($destinationPath, $name);

                    $objPropertyFloorPlan->property_id = $propertyId;
                    $objPropertyFloorPlan->floor_file = $name;
                    $objPropertyFloorPlan->floor_title = $request->input('floortitle');
                    $objPropertyFloorPlan->area = $request->input('floorarea');
                    $objPropertyFloorPlan->description = $request->input('description');
                    $objPropertyFloorPlan->created_at = date("Y-m-d h:i:s");
                    $objPropertyFloorPlan->updated_at = date("Y-m-d h:i:s");
                    if($objPropertyFloorPlan->save()){
                        
                    }else{
                        DB::table('property_details')->where('id',$propertyId)->delete();
                        DB::table('property_photo')->where('property_id',$propertyId)->delete();
                        DB::table('property_tour_view')->where('property_id',$propertyId)->delete();
                        DB::table('property_video')->where('property_id',$propertyId)->delete();
                        DB::table('property_audio')->where('property_id',$propertyId)->delete();
                        DB::table('property_floor_plan')->where('property_id',$propertyId)->delete();
                        return false;
                    }
            }


            if($request->file('file2')){
                
                
                $objPropertyFloorPlan = new PropertyFloorPlan();
                $image = $request->file('file2');
                $name = time().$i.'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/property_floor_plan');
                $image->move($destinationPath, $name);

                $objPropertyFloorPlan->property_id = $propertyId;
                $objPropertyFloorPlan->floor_file = $name;
                $objPropertyFloorPlan->floor_title = $request->input('floortitle2');
                $objPropertyFloorPlan->area = $request->input('floorarea2');
                $objPropertyFloorPlan->description = $request->input('description2');
                $objPropertyFloorPlan->created_at = date("Y-m-d h:i:s");
                $objPropertyFloorPlan->updated_at = date("Y-m-d h:i:s");
                if($objPropertyFloorPlan->save()){
                    
                }else{
                    DB::table('property_details')->where('id',$propertyId)->delete();
                    DB::table('property_photo')->where('property_id',$propertyId)->delete();
                    DB::table('property_tour_view')->where('property_id',$propertyId)->delete();
                    DB::table('property_video')->where('property_id',$propertyId)->delete();
                    DB::table('property_audio')->where('property_id',$propertyId)->delete();
                    DB::table('property_floor_plan')->where('property_id',$propertyId)->delete();
                    return false;
                }
        }
            return true;    
            
        }else{
            return false;
        }
    }
}

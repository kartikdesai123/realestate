<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\PropertyAudio;
use App\Model\PropertyFeatures;
use App\Model\PropertyFloorPlan;
use App\Model\PropertyPhoto;
use App\Model\PropertyTourView;
use App\Model\PropertyVideo;
use App\Model\ReportProperty;
use App\Model\HomeCity;
use App\Model\Favourite;
use DB;

class PropertyDetails extends Model {

    //
    protected $table = "property_details";

    public function addProperty($request, $userId) {

        $url = strtolower($request->input('propertyTitle'));
        $slug = str_replace(' ', '-', $url);

        $objPropertyDetails = new PropertyDetails();
        $objPropertyDetails->user_id = $userId;
        $objPropertyDetails->title = $request->input('propertyTitle');
        $objPropertyDetails->slug = $slug;
        $objPropertyDetails->offer = $request->input('offer');
        $objPropertyDetails->period = $request->input('period');
        $objPropertyDetails->type = $request->input('type');
        $objPropertyDetails->price = $request->input('price');
        $objPropertyDetails->area = $request->input('area');
        $objPropertyDetails->about_property = $request->input('about_property');
        $objPropertyDetails->address = $request->input('txtaddress');
        $objPropertyDetails->friendly_address = $request->input('friendly');
        $objPropertyDetails->city = $request->input('txtCity');
        $objPropertyDetails->state = $request->input('txtState');
        $objPropertyDetails->country = $request->input('txtCountry');
        $objPropertyDetails->postalcode = $request->input('txtPostalCode');
        $objPropertyDetails->latitude = $request->input('latitude');
        $objPropertyDetails->longitude = $request->input('longitude');
        $objPropertyDetails->buliding_age = $request->input('buliding_age');
        $objPropertyDetails->badroom = $request->input('bedrooms');
        $objPropertyDetails->bathroom = $request->input('bathrooms');
        $objPropertyDetails->parking = $request->input('parking');
        $objPropertyDetails->cooling = $request->input('cooling');
        $objPropertyDetails->heating = $request->input('heating');
        $objPropertyDetails->sewer = $request->input('sewer');
        $objPropertyDetails->water = $request->input('water');
        $objPropertyDetails->exercise_room = $request->input('exercise_room');
        $objPropertyDetails->storage_room = $request->input('storagr_room');
//        $objPropertyDetails->others =$request->input('facilites');
        $objPropertyDetails->created_at = date("Y-m-d h:i:s");
        $objPropertyDetails->updated_at = date("Y-m-d h:i:s");
        if ($objPropertyDetails->save()) {
            $propertyId = $objPropertyDetails->id;

            if ($request->input('facilites')) {

                foreach ($request->input('facilites') as $key => $value) {

                    $objPropertyFeature = new PropertyFeatures();
                    $objPropertyFeature->user_id = $userId;
                    $objPropertyFeature->property_id = $propertyId;
                    $objPropertyFeature->fetures_id = $value;
                    $objPropertyFeature->created_at = date("Y-m-d h:i:s");
                    $objPropertyFeature->updated_at = date("Y-m-d h:i:s");
                    if ($objPropertyFeature->save()) {
                        
                    } else {
                        DB::table('property_details')->where('id', $propertyId)->delete();
                        DB::table('property_features')->where('property_id', $propertyId)->delete();
                        return false;
                    }
                }
            }

            if ($request->file('photo')) {

                $i = 0;
                foreach ($request->file('photo') as $key => $value) {
                    $i++;
                    $objPropertyPhoto = new PropertyPhoto();
                    $image = $request->file('photo')[$key];
                    $name = time() . $i . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload/property_photo');
                    $image->move($destinationPath, $name);

                    $objPropertyPhoto->user_id = $userId;
                    $objPropertyPhoto->property_id = $propertyId;
                    $objPropertyPhoto->name = $name;
                    $objPropertyPhoto->created_at = date("Y-m-d h:i:s");
                    $objPropertyPhoto->updated_at = date("Y-m-d h:i:s");
                    if ($objPropertyPhoto->save()) {
                        
                    } else {
                        DB::table('property_details')->where('id', $propertyId)->delete();
                        DB::table('property_features')->where('property_id', $propertyId)->delete();
                        DB::table('property_photo')->where('property_id', $propertyId)->delete();
                        return false;
                    }
                }
            }

            if ($request->file('tour_view')) {

                $i = 0;
                foreach ($request->file('tour_view') as $key => $value) {
                    $i++;
                    $objPropertyTourView = new PropertyTourView();

                    $image = $request->file('tour_view')[$key];
                    $name = time() . $i . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload/property_tour_view');
                    $image->move($destinationPath, $name);

                    $objPropertyTourView->user_id = $userId;
                    $objPropertyTourView->property_id = $propertyId;
                    $objPropertyTourView->name = $name;
                    $objPropertyTourView->created_at = date("Y-m-d h:i:s");
                    $objPropertyTourView->updated_at = date("Y-m-d h:i:s");
                    if ($objPropertyTourView->save()) {
                        
                    } else {
                        DB::table('property_details')->where('id', $propertyId)->delete();
                        DB::table('property_photo')->where('property_id', $propertyId)->delete();
                        DB::table('property_tour_view')->where('property_id', $propertyId)->delete();
                        return false;
                    }
                }
            }

            if ($request->file('video')) {

                $i = 0;
                foreach ($request->file('video') as $key => $value) {
                    $i++;
                    $objPropertyVideo = new PropertyVideo();
                    $image = $request->file('video')[$key];
                    $name = time() . $i . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload/property_video');
                    $image->move($destinationPath, $name);

                    $objPropertyVideo->user_id = $userId;
                    $objPropertyVideo->property_id = $propertyId;
                    $objPropertyVideo->name = $name;
                    $objPropertyVideo->created_at = date("Y-m-d h:i:s");
                    $objPropertyVideo->updated_at = date("Y-m-d h:i:s");
                    if ($objPropertyVideo->save()) {
                        
                    } else {
                        DB::table('property_details')->where('id', $propertyId)->delete();
                        DB::table('property_photo')->where('property_id', $propertyId)->delete();
                        DB::table('property_tour_view')->where('property_id', $propertyId)->delete();
                        DB::table('property_video')->where('property_id', $propertyId)->delete();
                        return false;
                    }
                }
            }


            if ($request->file('audio')) {

                $i = 0;
                foreach ($request->file('audio') as $key => $value) {
                    $i++;
                    $objPropertyAudio = new PropertyAudio();
                    $image = $request->file('audio')[$key];
                    $name = time() . $i . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload/property_audio');
                    $image->move($destinationPath, $name);

                    $objPropertyAudio->user_id = $userId;
                    $objPropertyAudio->property_id = $propertyId;
                    $objPropertyAudio->name = $name;
                    $objPropertyAudio->created_at = date("Y-m-d h:i:s");
                    $objPropertyAudio->updated_at = date("Y-m-d h:i:s");
                    if ($objPropertyAudio->save()) {
                        
                    } else {
                        DB::table('property_details')->where('id', $propertyId)->delete();
                        DB::table('property_photo')->where('property_id', $propertyId)->delete();
                        DB::table('property_tour_view')->where('property_id', $propertyId)->delete();
                        DB::table('property_video')->where('property_id', $propertyId)->delete();
                        DB::table('property_audio')->where('property_id', $propertyId)->delete();
                        return false;
                    }
                }
            }


            if ($request->file('file')) {


                $objPropertyFloorPlan = new PropertyFloorPlan();
                $image = $request->file('file');
                $name = time() . $i . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/property_floor_plan');
                $image->move($destinationPath, $name);

                $objPropertyFloorPlan->user_id = $userId;
                $objPropertyFloorPlan->property_id = $propertyId;
                $objPropertyFloorPlan->floor_file = $name;
                $objPropertyFloorPlan->floor_title = $request->input('floortitle');
                $objPropertyFloorPlan->area = $request->input('floorarea');
                $objPropertyFloorPlan->description = $request->input('description');
                $objPropertyFloorPlan->created_at = date("Y-m-d h:i:s");
                $objPropertyFloorPlan->updated_at = date("Y-m-d h:i:s");
                if ($objPropertyFloorPlan->save()) {
                    
                } else {
                    DB::table('property_details')->where('id', $propertyId)->delete();
                    DB::table('property_photo')->where('property_id', $propertyId)->delete();
                    DB::table('property_tour_view')->where('property_id', $propertyId)->delete();
                    DB::table('property_video')->where('property_id', $propertyId)->delete();
                    DB::table('property_audio')->where('property_id', $propertyId)->delete();
                    DB::table('property_floor_plan')->where('property_id', $propertyId)->delete();
                    return false;
                }
            }


            if ($request->file('file2')) {


                $objPropertyFloorPlan = new PropertyFloorPlan();
                $image = $request->file('file2');
                $name = time() . $i . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/property_floor_plan');
                $image->move($destinationPath, $name);

                $objPropertyFloorPlan->user_id = $userId;
                $objPropertyFloorPlan->property_id = $propertyId;
                $objPropertyFloorPlan->floor_file = $name;
                $objPropertyFloorPlan->floor_title = $request->input('floortitle2');
                $objPropertyFloorPlan->area = $request->input('floorarea2');
                $objPropertyFloorPlan->description = $request->input('description2');
                $objPropertyFloorPlan->created_at = date("Y-m-d h:i:s");
                $objPropertyFloorPlan->updated_at = date("Y-m-d h:i:s");
                if ($objPropertyFloorPlan->save()) {
                    
                } else {
                    DB::table('property_details')->where('id', $propertyId)->delete();
                    DB::table('property_photo')->where('property_id', $propertyId)->delete();
                    DB::table('property_tour_view')->where('property_id', $propertyId)->delete();
                    DB::table('property_video')->where('property_id', $propertyId)->delete();
                    DB::table('property_audio')->where('property_id', $propertyId)->delete();
                    DB::table('property_floor_plan')->where('property_id', $propertyId)->delete();
                    return false;
                }
            }

            if ($request->input('txtCity')) {
                $city = $request->input('txtCity');
                $checkHomeCity = HomeCity::where('city_name', '=', $city)->get()->toArray();
                if (empty($checkHomeCity)) {
                    $objHome = new HomeCity();
                    $objHome->city_name = $city;
                    $objHome->total_propeties = '1';
                    $objHome->is_home = '0';
                    $objHome->images = '';
                    $objHome->created_at = date("Y-m-d h:i:s");
                    $objHome->updated_at = date("Y-m-d h:i:s");
                    $objHome->save();
                } else {

                    $count = (int) $checkHomeCity[0]['total_propeties'] + 1;
                    $objHomeUpdate = HomeCity::find($checkHomeCity[0]['id']);
                    $objHomeUpdate->total_propeties = $count;
                    $objHomeUpdate->updated_at = date("Y-m-d h:i:s");
                    $objHomeUpdate->save();
                }
            }
            return true;
        } else {
            return false;
        }
    }

    public function getPropertyList($userId = NULL) {
        $property = PropertyDetails::select('property_details.*', DB::raw('GROUP_CONCAT(property_photo.name) AS images'), 'users.username', 'users.userimage', 'users.phoneno', 'users.roles', 'users.email')
                ->join("property_photo", "property_details.id", "=", "property_photo.property_id")
                ->join("users", "property_details.user_id", "=", "users.id");
        if ($userId) {
            $property->where('property_details.user_id', $userId);
        }
        $property->groupBy('property_details.id');
        $result = $property->get();
        return $result;
    }

    public function saveHomes($userId, $type) {
        $propertyId = array();
        $fav = Favourite::where('user_id', $userId)->get()->toArray();
        if (!empty($fav)) {
            for ($i = 0; $i < count($fav); $i++) {
                $propertyId[] = $fav[$i]['property_id'];
            }
        }
//        print_r($propertyId); exit();
        if (!empty($propertyId)) {
            $property = PropertyDetails::select('property_details.*', DB::raw('GROUP_CONCAT(property_photo.name) AS images'), 'users.username', 'users.userimage', 'users.phoneno', 'users.roles', 'users.email')
                    ->join("property_photo", "property_details.id", "=", "property_photo.property_id")
                    ->join("users", "property_details.user_id", "=", "users.id")
                    ->where('property_details.offer', $type)
                    ->whereIn('property_details.id', $propertyId)
                    ->groupBy('property_details.id')
                    ->get();

            return $property;
        }
    }
    
    public function getPropertyInfo($id){
        return PropertyDetails::select('property_details.*')
                        ->where("property_details.id", "=", $id)
                        ->groupBy('property_details.id')
                        ->get()->toArray();
    }
    public function getPropertyDetail($slug) {

        $detailProperty = PropertyDetails::select('property_details.*', DB::raw('GROUP_CONCAT(property_photo.name) AS images'), DB::raw('GROUP_CONCAT(DISTINCT (property_audio.name)) AS audio'), DB::raw('GROUP_CONCAT(DISTINCT (property_video.name)) AS video'), 'users.username', 'users.userimage', 'users.phoneno', 'users.roles', 'users.email')
                        ->join("property_photo", "property_details.id", "=", "property_photo.property_id")
                        ->join("property_audio", "property_details.id", "=", "property_audio.property_id")
                        ->join("property_video", "property_details.id", "=", "property_video.property_id")
                        ->join("users", "property_details.user_id", "=", "users.id")
                        ->where("property_details.slug", "=", $slug)
                        ->groupBy('property_details.id')
                        ->get()->toArray();

        if (!empty($detailProperty)) {

            $detailProperty[0]['features'] = PropertyFeatures::select('property_features.*', 'extrafacilities.facilitiesName')
                            ->join('extrafacilities', 'property_features.fetures_id', '=', 'extrafacilities.id')
                            ->where('property_features.property_id', $detailProperty[0]['id'])
                            ->get()->toArray();

            $detailProperty[0]['floor_plan'] = PropertyFloorPlan::select('property_floor_plan.*')
                            ->where('property_floor_plan.property_id', $detailProperty[0]['id'])
                            ->get()->toArray();

            $detailProperty[0]['tour_view'] = PropertyTourView::select('property_tour_view.*')
                            ->where('property_tour_view.property_id', $detailProperty[0]['id'])
                            ->get()->toArray();
        }

        return $detailProperty;
    }

    function compareProperty($slug) {

        $url = explode('compare', $slug);
        $slug1 = substr($url[0], 0, -1);
        $slug2 = substr($url[1], 1);
        $finalArray = array();
        $property1 = $this->getPropertyDetail($slug1);
        $property2 = $this->getPropertyDetail($slug2);
        
        if (!empty($property1) && !empty($property2)) {
            $property1[0]['features'] = array_column($property1[0]['features'], 'facilitiesName');
            $property2[0]['features'] = array_column($property2[0]['features'], 'facilitiesName');
            $finalArray = array(
                'property_1' => $property1,
                'property_2' => $property2,
            );
        }

        return $finalArray;
    }

    function getRecentProperty($slug) {
        return PropertyDetails::select('property_details.slug', 'property_details.title', 'property_details.price', DB::raw('GROUP_CONCAT(property_photo.name) AS images'))
                        ->join("property_photo", "property_details.id", "=", "property_photo.property_id")
                        ->where("property_details.slug", "!=", $slug)
                        ->groupBy('property_details.id')
                        ->orderBy('property_details.id', 'desc')
                        ->limit(4)
                        ->get();
    }

    function faveProperty($userId) {
        $propertyId = array();
        $fav = Favourite::where('user_id', $userId)->get()->toArray();
        if (!empty($fav)) {
            for ($i = 0; $i < count($fav); $i++) {
                $propertyId[] = $fav[$i]['property_id'];
            }
        }

        return $propertyId;
    }

    function reportProperty($request, $propertyId, $userId) {
        $objReport = new ReportProperty();
        $objReport->user_id = $userId;
        $objReport->property_id = $propertyId;
        $objReport->report_type = $request->input('type');
        $objReport->message = $request->input('message');
        $objReport->created_at = date("Y-m-d h:i:s");
        $objReport->updated_at = date("Y-m-d h:i:s");
        if ($objReport->save()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

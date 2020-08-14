<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\PropertyDetails;
class Propertyreview extends Model
{
    protected $table = 'property_review';
    //
    public function addReview($request){
        $propertyDetails = PropertyDetails::select("property_details.id")
                                            ->join("users","users.id","=","property_details.user_id")
                                            ->where("property_details.slug",$request->input('slug'))
                                            ->get();
        $property_id = $propertyDetails[0]->id;

        $objPropertyreview = new Propertyreview();
        $objPropertyreview->property_id = $property_id;
        $objPropertyreview->user_id = $request->input('userId');
        $objPropertyreview->star = $request->input('star');
        $objPropertyreview->review = $request->input('review');
        $objPropertyreview->created_at = date("Y-m-d h:i:s");
        $objPropertyreview->updated_at = date("Y-m-d h:i:s");
        return $objPropertyreview->save();
    }
    public function getReview($slug){
        $propertyDetails = PropertyDetails::select("property_details.id")
                                            ->join("users","users.id","=","property_details.user_id")
                                            ->where("property_details.slug",$slug)
                                            ->get();

        $property_id = $propertyDetails[0]->id;
        
        return Propertyreview::select("property_review.star","property_review.review","users.username","users.userimage")
                                ->join("users","users.id","=","property_review.user_id")
                                ->where("property_review.property_id",$property_id)
                                ->get();
    }
}

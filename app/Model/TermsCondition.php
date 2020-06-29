<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TermsCondition extends Model
{
	protected $table ="termscondition";

	public function getTermsCondition(){
        return TermsCondition::select("terms_conditions")->get();
    }

    public function addeditTerms($request){
        $objTermsCondition = TermsCondition::find('1');
        $objTermsCondition->terms_conditions =$request->input("terms_conditions");
        $objTermsCondition->updated_at = date("Y-m-d h:i:s");
        return $objTermsCondition->save();
            
    }
}

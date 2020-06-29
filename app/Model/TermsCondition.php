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

        $result = TermsCondition::updateOrInsert(
                ['id' => 1],
                ['terms_conditions' => $request->input("terms_conditions"), 
                    "created_at" => date("Y-m-d h:i:s"),
                    "updated_at" => date("Y-m-d h:i:s")
                ]
                
        );  
        return $result; 
            
    }
}

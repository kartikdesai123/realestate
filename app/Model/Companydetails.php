<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Companydetails extends Model
{
    protected $table="companyDetails";

    public function getCompanydetails($id){
        return Users::select("companyDetails.*")
                    ->leftjoin("companyDetails","companyDetails.user_id","=","users.id")
                    ->where("users.id",$id)
                    ->get();
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Companydetails extends Model
{
    protected $table="companydetails";

    public function getCompanydetails($id){
        return Users::select("companydetails.*")
                    ->leftjoin("companydetails","companydetails.user_id","=","users.id")
                    ->where("users.id",$id)
                    ->get();
    }
}

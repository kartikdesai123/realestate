<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Users;
class AgencyDetails extends Model
{
    //
    protected $table ="agencydetails";

    public function getAgencyDetails($id){
        return Users::select("agencydetails.*")
                    ->leftjoin("agencydetails","agencydetails.user_id","=","users.id")
                    ->where("users.id",$id)
                    ->get();
    }
}

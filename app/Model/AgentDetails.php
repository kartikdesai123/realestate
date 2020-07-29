<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Users;
class AgentDetails extends Model
{
    protected $table ="agentdetails";

    public function getAgentDetails($id){
            return Users::select("agentdetails.*")
                    ->leftjoin("agentdetails","agentdetails.user_id","=","users.id")
                    ->where("users.id",$id)
                    ->get();
    }
}

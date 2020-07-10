<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Users;
use DB;
use App\Model\Sendmail;
class Emailverify extends Model
{
    protected $table="email_token";
    //

    public function saveToken($id,$token){
        $objEmailverify = new Emailverify();
        $objEmailverify->userid = $id;
        $objEmailverify->token = $token;
        $objEmailverify->created_at = date("Y-m-d h:i:s");
        $objEmailverify->updated_at = date("Y-m-d h:i:s");
        return $objEmailverify->save();
    }

    public function checkToken($token){
        $count = Emailverify::where("token",$token)->count();
        if($count != 0){
            $details = Emailverify::where("email_token.token",$token)
                                ->join("users","users.id","=","email_token.userid")
                                ->select("users.username","users.email","email_token.userid","email_token.token")
                                ->get();

            $useName = $details[0]->username;
            $email = $details[0]->email;

            $objUser = Users::find($details[0]->userid);
            $objUser->email_verfied = "1";
            $objUser->updated_at = date("Y-m-d h:i:s");
            if($objUser->save()){

                $objSendmail = new Sendmail();
                $Sendmail = $objSendmail->welcomeMessage($useName,$email);

                $result  = DB::table('email_token')
                            ->where('token',$token)
                            ->delete();
                return "verify";
            }else{
                return "wrong";
            }
        }else{
            return "mismatchToken";
        }
    }
    public function getDetails($token){
        return Emailverify::where("email_token.token",$token)
                        ->join("users","users.id","=","email_token.userid")    
                        ->select("users.username")->get();
    
    }
}

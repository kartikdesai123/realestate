<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Users;
use App\Model\Sendmail;
use DB;
class Forgotpassword extends Model
{
    protected $table ="forgotpassword";

    public function creteToken($request){
        $checkMail = Users::where('email',$request->input('email'))
                    ->where("isDeleted","0")
                    ->count();
        if($checkMail == "1"){
            $checkMailVerify = Users::where('email',$request->input('email'))
                    ->where("isDeleted","0")
                    ->where("email_verfied","1")
                    ->count();
            if($checkMailVerify == "1"){
                $details = Users::select("id","username")
                            ->where('email',$request->input('email'))
                            ->where("isDeleted","0")
                            ->get();

                $result  = DB::table('forgotpassword')
                            ->where('userid',$details[0]->id)
                            ->delete();
                
                
                $token = bin2hex(random_bytes(10));

                $objForgotpassword = new Forgotpassword();
                $objForgotpassword->userid = $details[0]->id;
                $objForgotpassword->token = $token;
                $objForgotpassword->created_at = date("Y-m-d h:i:s");
                $objForgotpassword->updated_at = date("Y-m-d h:i:s");
                if($objForgotpassword->save()){
                    $objSendmail = new Sendmail();
                    $Sendmail = $objSendmail->forgotPassword($token,$details[0]->username,$request->input('email'));
                    return "true";
                }else{
                    return "wrong";
                }
            }else{
                return "notVerify";
            }
        }else{
            return "notfound";
        }
        
    }
}

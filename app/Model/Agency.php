<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Hash;
use App\Model\Users;
use App\Model\Emailverify;

class Agency extends Model
{
    protected $table="users";

    public function addAgency($request){
        $countusername = Users::where("username",$request->input('username'))
                        ->count(); 

        if($countusername != 0){
            return "usernameexits";
        }else{
            $countusername = Users::where("email",$request->input('email'))
                        ->count(); 
            if($countusername != 0){
                return "emailexits";
            }else{
                $objUser = new Users();
                if ($request->file('agencyuserimage')) {
                    
                    $image = $request->file('agencyuserimage');                   
                    $name = time() . '.' . $image->getClientOriginalExtension();                    
                    $destinationPath = public_path('/upload/userimage');
                    $image->move($destinationPath, $name);
                    $objUser->userimage = $name;
    
                }
                $objUser->username = $request->input('agencyusername');
                $objUser->email = $request->input('agencyemail');
                $objUser->password = Hash::make($request->input('agencypassword'));
                $objUser->phoneno = $request->input('agencyphoneno');
                $objUser->roles = "AY";
                $objUser->about = $request->input('agencyabout');
                $objUser->created_at = date("Y-m-d h:i:s");
                $objUser->updated_at = date("Y-m-d h:i:s");
                if($objUser->save()){
                    $id = $objUser->id;
                    $token = bin2hex(random_bytes(10));

                    $objEmailverify = new Emailverify();
                    $result = $objEmailverify->saveToken($id,$token);
                    if($result){

                        $objSendmail = new Sendmail();
                        $Sendmail = $objSendmail->userRegister($token,$request->input('agencyusername'),$request->input('agencyemail'));
                        if($Sendmail){
                            return "true";
                        }else{
                            return "wrong";
                        }
                    }else{
                        return "wrong";  
                    }
                }else{
                    return "wriong";
                }
            }
        }
    }
}

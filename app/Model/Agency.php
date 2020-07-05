<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Hash;
use App\Model\Users;
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
                    return "true";
                }else{
                    return "wriong";
                }
            }
        }
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Hash;
use App\Model\Users;
class Company extends Model
{
    protected $table="users";

    public function addCompany($request){
        
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
                if ($request->file('companyuserimage')) {
                    
                    $image = $request->file('companyuserimage');                   
                    $name = time() . '.' . $image->getClientOriginalExtension();                    
                    $destinationPath = public_path('/upload/userimage');
                    $image->move($destinationPath, $name);
                    $objUser->userimage = $name;
    
                }
                $objUser->username = $request->input('companyusername');
                $objUser->email = $request->input('companyemail');
                $objUser->password = Hash::make($request->input('companypassword'));
                $objUser->phoneno = $request->input('companyphoneno');
                $objUser->roles = "CC";
                $objUser->about = $request->input('companyabout');
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

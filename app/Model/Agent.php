<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Hash;
use App\Model\Users;
class Agent extends Model
{
    protected $table="users";


    public function addAgent($request){


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
                if ($request->file('agentuserimage')) {
                    
                    $image = $request->file('agentuserimage');
                   
                    $name = time() . '.' . $image->getClientOriginalExtension();
                    
                    $destinationPath = public_path('/upload/userimage');
                    $image->move($destinationPath, $name);
                    $objUser->userimage = $name;
    
                }
                $objUser->username = $request->input('agentusername');
                $objUser->email = $request->input('agentemail');
                $objUser->password = Hash::make($request->input('agentpassword'));
                $objUser->phoneno = $request->input('agentphoneno');
                $objUser->roles = "AG";
                $objUser->about = $request->input('agentabout');
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

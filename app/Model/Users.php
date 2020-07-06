<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Hash;
class Users extends Model
{
    protected $table="users";


    public function addUser($request){
        
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
                if ($request->file('userimage')) {
                    
                    $image = $request->file('userimage');
                   
                    $name = time() . '.' . $image->getClientOriginalExtension();
                    
                    $destinationPath = public_path('/upload/userimage');
                    $image->move($destinationPath, $name);
                    $objUser->userimage = $name;
    
                }
                $objUser->username = $request->input('username');
                $objUser->email = $request->input('email');
                $objUser->password = Hash::make($request->input('password'));
                $objUser->phoneno = $request->input('phoneno');
                $objUser->roles = "U";
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


    public function editProfile($request,$id,$role){
        $countusername = Users::where("username",$request->input('username'))
                        ->where("id","!=",$id)
                        ->count(); 

            if($countusername != 0){
                return "usernameexits";
            }else{
                $countusername = Users::where("email",$request->input('email'))
                                ->where("id","!=",$id)
                                ->count();

                if($countusername != 0){
                    return "emailexits";
                }else{
                   
                    $objUser = Users::find($id);
                    if ($request->file('userimage')) {
                        $oldImage = Users::where("id",$id)
                                    ->select('userimage')
                                    ->get();
                        $path = './public/upload/userimage/' . $oldImage[0]->userimage;
                        if (file_exists($path)) {
                            unlink($path);
                        }
                        
                        $image = $request->file('userimage');
                        $name = time() . '.' . $image->getClientOriginalExtension();
                        $destinationPath = public_path('/upload/userimage');
                        $image->move($destinationPath, $name);
                        $objUser->userimage = $name;
                    }
                    $objUser->username = $request->input('username');
                    $objUser->email = $request->input('email');
                    $objUser->phoneno = $request->input('phoneno');
                    if($role  != "U"){
                        $objUser->about = $request->input('aboutme');
                    }
                    $objUser->updated_at = date("Y-m-d h:i:s");
                    if($objUser->save()){
                        return "true";
                    }else{
                        return "wriong";
                    }
                }
            }
    }


    public function editChangePasswpord($request,$id){
        
        print_r($id);
        die();
    }
}

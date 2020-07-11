<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Hash;
use App\Model\Emailverify;
use App\Model\Forgotpassword;
use App\Model\Sendmail;
use DB;
class Users extends Model
{
    protected $table="users";


    public function addUser($request){
        
        // print_r($token);
        // die();
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
                   
                    $name = time() .'.' . $image->getClientOriginalExtension();
                    
                    $destinationPath = public_path('/upload/userimage');
                    $image->move($destinationPath, $name);
                    $objUser->userimage = $name;
    
                }
                $objUser->username = $request->input('username');
                $objUser->email = $request->input('email');
                $objUser->password = Hash::make($request->input('password'));
                $objUser->phoneno = $request->input('phoneno');
                $objUser->roles = "U";
                $objUser->email_verfied = "0";
                $objUser->created_at = date("Y-m-d h:i:s");
                $objUser->updated_at = date("Y-m-d h:i:s");
                if($objUser->save()){
                    $id = $objUser->id;
                    $token = bin2hex(random_bytes(10));

                    $objEmailverify = new Emailverify();
                    $result = $objEmailverify->saveToken($id,$token);
                    if($result){
                        $objSendmail = new Sendmail();
                        $Sendmail = $objSendmail->userRegister($token,$request->input('username'),$request->input('email'));
                        if($Sendmail){
                            return "true";
                        }else{
                            return "wrong";
                        }
                    }else{
                        return "wrong";  
                    }
                }else{
                    return "wrong";
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
                        return "wrong";
                    }
                }
            }
    }
    public function resetpassword($request){
        $userId = Users::select("users.id")
                        ->join("forgotpassword","forgotpassword.userid","=","users.id")
                        ->where("forgotpassword.token",$request->input('token'))
                        ->get();
        if($userId){
            $objUser = Users::find($userId[0]->id);
            $objUser->password = Hash::make($request->input('password'));
            $objUser->updated_at = date("Y-m-d h:i:s");
            if($objUser->save()){
                $result  = DB::table('forgotpassword')
                        ->where('token',$request->input('token'))
                        ->delete();
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
        print_r($userId[0]->id);
        die();

    }


    public function editChangePasswpord($request,$id){
        $passwordmatch= Users::where("id",$id)
                        ->select("password")
                        ->get();
        if (Hash::check($request->input('oldpassword'), $passwordmatch[0]->password)){
                $objUser = Users::find($id);
                $objUser->password = Hash::make($request->input('newpassword'));
                $objUser->updated_at = date("Y-m-d h:i:s");
                if($objUser->save()){
                    return "true";
                }else{
                    return "wrong";
                }
        }else{
            return "mismatch";
        }

        // Hash::check('plain-text-password'

    }

    public function getDtailsByToken($token){
        return Users::select("users.id","users.username")
                    ->join("forgotpassword","forgotpassword.userid","=","users.id")
                    ->where("forgotpassword.token",$token)
                    ->get();
    }
}

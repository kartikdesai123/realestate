<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Hash;
use App\Model\Users;
use App\Model\Emailverify;

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
                    $id = $objUser->id;
                    $token = bin2hex(random_bytes(10));

                    $objEmailverify = new Emailverify();
                    $result = $objEmailverify->saveToken($id,$token);
                    if($result){

                        $objSendmail = new Sendmail();
                        $Sendmail = $objSendmail->userRegister($token,$request->input('agentusername'),$request->input('agentemail'));
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
    public function addMyAgent($request,$id){

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
                // if ($request->file('agentuserimage')) {
                    
                //     $image = $request->file('agentuserimage');
                   
                //     $name = time() . '.' . $image->getClientOriginalExtension();
                    
                //     $destinationPath = public_path('/upload/userimage');
                //     $image->move($destinationPath, $name);
                //     $objUser->userimage = $name;
    
                // }
                $objUser->username = $request->input('agentusername');
                $objUser->email = $request->input('agentemail');
                $objUser->password = Hash::make($request->input('agentpassword'));
                $objUser->phoneno = $request->input('agentphoneno');
                $objUser->roles = "AG";
                $objUser->parent_id = $id;
                $objUser->about = $request->input('agentabout');
                $objUser->created_at = date("Y-m-d h:i:s");
                $objUser->updated_at = date("Y-m-d h:i:s");
                if($objUser->save()){
                    $id = $objUser->id;
                    $token = bin2hex(random_bytes(10));

                    $objEmailverify = new Emailverify();
                    $result = $objEmailverify->saveToken($id,$token);
                    if($result){

                        $objSendmail = new Sendmail();
                        $Sendmail = $objSendmail->userRegister($token,$request->input('agentusername'),$request->input('agentemail'));
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
    public function editAgent($request,$id){
        
        $countusername = Users::where("username",$request->input('username'))
                        ->where("id","!=",$id)
                        ->count(); 


        if($countusername != 0){
            return "usernameexits";
        }else{ 
            $objUser = Users::find($id);
            if ($request->file('userimage')) {
                $oldImage = Users::where("id",$id)
                            ->select('userimage')
                            ->get();
                        if($oldImage[0]->userimage != NULL){
                            $path = 'public/upload/userimage/' . $oldImage[0]->userimage;
                            
                            if (file_exists($path)) {
                                unlink($path);
                            }
                        }
                        $image = $request->file('userimage');
                        $name = time() . '.' . $image->getClientOriginalExtension();
                        $destinationPath = public_path('/upload/userimage');
                        $image->move($destinationPath, $name);
                        $objUser->userimage = $name;
                    
                
            }
            $objUser->username = $request->input('username');
            $objUser->phoneno = $request->input('phoneno');
            if($role  != "U"){
                $objUser->about = $request->input('aboutme');
            }
            $objUser->updated_at = date("Y-m-d h:i:s");
            if($objUser->save()){
                
                if($role  == "AY"){
                    $result = DB::table('agencydetails')->updateOrInsert(
                        ['user_id' => $id],
                        [   
                            'user_id' => $id, 
                            'location' => $request->input('location'), 
                            'facebook' => $request->input('facebook'), 
                            'twitter' => $request->input('twitter'), 
                            'linkedin' => $request->input('linkedin'), 
                            'website' => $request->input('website'), 
                            'licenses' => $request->input('licenses'), 
                            'officeno' => $request->input('officeno'),
                            'overview' => $request->input('overview'),
                            "created_at" => date("Y-m-d h:i:s"),
                            "updated_at" => date("Y-m-d h:i:s")
                        ]        
                    );
                }
                
                if($role  == "AG"){
                    $result = DB::table('agentdetails')->updateOrInsert(
                        ['user_id' => $id],
                        [   'user_id' => $id, 
                            'designation' => $request->input('designation'), 
                            'facebook' => $request->input('facebook'), 
                            'twitter' => $request->input('twitter'), 
                            'linkedin' => $request->input('linkedin'), 
                            'website' => $request->input('website'), 
                            'licenses' => $request->input('licenses'), 
                            'officeno' => $request->input('officeno'),
                            "created_at" => date("Y-m-d h:i:s"),
                            "updated_at" => date("Y-m-d h:i:s")
                        ]        
                    );
                }
                if($role  == "CC"){
                    $result = DB::table('companyDetails')->updateOrInsert(
                        ['user_id' => $id],
                        [  
                            'user_id' => $id, 
                            'location' => $request->input('location'), 
                            'facebook' => $request->input('facebook'), 
                            'twitter' => $request->input('twitter'), 
                            'linkedin' => $request->input('linkedin'), 
                            'website' => $request->input('website'), 
                            'licenses' => $request->input('licenses'), 
                            'officeno' => $request->input('officeno'),
                            'overview' => $request->input('overview'),
                            "created_at" => date("Y-m-d h:i:s"),
                            "updated_at" => date("Y-m-d h:i:s")
                        ]        
                    );
                }
                
                
                return "true";
            }else{
                return "wrong";
            }
        }
    }


    public function editAgentDetails($request){ 
        
        $countusername = Users::where("username",$request->input('username'))
                        ->where("id","!=",$request->input('userId'))
                        ->count(); 
        if($countusername != 0){
            return "usernameexits";
        }else{ 
            $countusername = Users::where("email",$request->input('email'))
                            ->where("id","!=",$request->input('userId'))
                            ->count(); 
            if($countusername != 0){
                return "emailexits";
            }else{
                // die();
                $objUser = Users::find($request->input('userId'));
                $objUser->username = $request->input('username');
                $objUser->email = $request->input('email');
                $objUser->phoneno = $request->input('phoneno');
                $objUser->updated_at = date("Y-m-d h:i:s");

                return $objUser->save();
                
            }
        }
    }
}

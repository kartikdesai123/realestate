<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Hash;
use App\Model\Emailverify;
use App\Model\Forgotpassword;
use App\Model\Sendmail;
use App\Model\AssignAgent;
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
                // if ($request->file('userimage')) {
                    
                //     $image = $request->file('userimage');
                   
                //     $name = time() .'.' . $image->getClientOriginalExtension();
                    
                //     $destinationPath = public_path('/upload/userimage');
                //     $image->move($destinationPath, $name);
                //     $objUser->userimage = $name;
    
                // }
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

    public function getAgentList(){
        $agentList = Users::where("roles",'AG')->get()->toArray();
        return $agentList;
    }
    public function getAgentDetails($id){
        return Users::select("id","email","username","phoneno")->where("id",$id)->get();
    }
    
   
    
    public function assignAgent($request){
        $countAssign = AssignAgent::where("user_id",$request->input('user_id'))
                        ->where("agent_id",$request->input('agent'))
                        ->where("property_id",$request->input('property_id'))
                        ->count(); 
        
        if($countAssign != 0){
            return "assignalready";
        }else{
            $assign = new AssignAgent();
            $assign->user_id = $request->input('user_id');
            $assign->agent_id = $request->input('agent');
            $assign->property_id = $request->input('property_id');
            $assign->created_at = date("Y-m-d h:i:s");
            $assign->updated_at = date("Y-m-d h:i:s");
            if ($assign->save()) {
                return "true";
            }else{
                return "wrong";
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

    public function agentList($userType){
        return Users::select("users.username","users.email","users.userimage","users.phoneno","users.about","users.id","agentdetails.designation")
                    ->leftjoin("agentdetails","agentdetails.user_id","=","users.id")
                    ->where("users.roles",$userType)
                    ->where("users.email_verfied","1")
                    ->where("users.isDeleted","0")
                    ->orderBy("users.id","DESC")
                    ->paginate(4);
    }

    public function agencyList($userType){
        return Users::select("users.username","users.email","users.userimage","users.phoneno","users.about","users.id","agencydetails.location")
                    ->leftjoin("agencydetails","agencydetails.user_id","=","users.id")
                    ->where("users.roles",$userType)
                    ->where("users.email_verfied","1")
                    ->where("users.isDeleted","0")
                    ->orderBy("users.id","DESC")
                    ->paginate(4);
    }

    public function companyListHome($userType){
        return Users::select("users.username","users.email","users.userimage","users.phoneno","users.about","users.id","companyDetails.location")
                    ->leftjoin("companyDetails","companyDetails.user_id","=","users.id")
                    ->where("users.roles",$userType)
                    ->where("users.email_verfied","1")
                    ->where("users.isDeleted","0")
                    ->orderBy("users.id","DESC")
                    ->paginate(4);
    }

    public function agentDetail($id){
        return Users::select("users.username","users.email","users.userimage","users.phoneno","users.about","users.id","agentdetails.*")
                    ->leftjoin("agentdetails","agentdetails.user_id","=","users.id")
                    ->where("users.id",$id)
                    ->get();
    }
    public function agencyDetail($id){
        return Users::select("users.username","users.email","users.userimage","users.phoneno","users.about","users.id","agencydetails.*")
                    ->leftjoin("agencydetails","agencydetails.user_id","=","users.id")
                    ->where("users.id",$id)
                    ->get();
    }
    public function companyDetail($id){
        return Users::select("users.username","users.email","users.userimage","users.phoneno","users.about","users.id","companyDetails.*")
                    ->leftjoin("companyDetails","companyDetails.user_id","=","users.id")
                    ->where("users.id",$id)
                    ->get();
    }

    public function agentListHome(){
        return Users::select("users.username","users.email","users.userimage","users.phoneno","users.about","users.id","agentdetails.designation")
                ->leftjoin("agentdetails","agentdetails.user_id","=","users.id")
                ->where("users.roles","AG")
                ->where("users.email_verfied","1")
                ->where("users.isDeleted","0")
                ->orderBy('users.id', 'desc')
                ->limit(4)
                ->get();
    }
    public function agentListSerch(){
        return Users::select("users.username","users.id")
                ->leftjoin("agentdetails","agentdetails.user_id","=","users.id")
                ->where("users.roles","AG")
                ->where("users.email_verfied","1")
                ->where("users.isDeleted","0")
                ->orderBy('users.id', 'desc')
                ->get();
    }
    public function companyList(){
        return Users::select("users.username","users.email","users.userimage","users.phoneno","users.about","users.id")
                ->where("users.roles","CC")
                ->where("users.email_verfied","1")
                ->where("users.isDeleted","0")                
                ->orderBy('users.id', 'desc')
                ->limit(4)
                ->get();
    }
    public function agencyListSerch(){
        return Users::select("users.username","users.email","users.userimage","users.phoneno","users.about","users.id")
                ->where("users.roles","AY")
                ->where("users.email_verfied","1")
                ->where("users.isDeleted","0")                
                ->orderBy('users.id', 'desc')
                ->limit(4)
                ->get();
    }
    public function companyListSerch(){
        return Users::select("users.username","users.id")
                ->where("users.roles","CC")
                ->where("users.email_verfied","1")
                ->where("users.isDeleted","0")                
                ->orderBy('users.id', 'desc')
                ->get();
    }

    public function get_agent_datatable($id){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'users.id',
            1 => 'users.username',
            2 => 'users.email',
            3 => 'users.userimage',
            4 => 'users.phoneno',
            4 => 'users.about',
        );
        $query = Blog ::from('users')
                        ->where('users.parent_id',$id);

        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function($query) use ($columns, $searchVal, $requestData) {
                $flag = 0;
                foreach ($columns as $key => $value) {
                    $searchVal = $requestData['search']['value'];
                    if ($requestData['columns'][$key]['searchable'] == 'true') {
                        if ($flag == 0) {
                            $query->where($value, 'like', '%' . $searchVal . '%');
                            $flag = $flag + 1;
                        } else {
                            $query->orWhere($value, 'like', '%' . $searchVal . '%');
                        }
                    }
                }
            });
        }

        $temp = $query->orderBy($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);

        $totalData = count($temp->get());
        $totalFiltered = count($temp->get());

        $resultArr = $query->skip($requestData['start'])
                ->take($requestData['length'])
                ->select('users.id','users.username','users.email','users.userimage','users.phoneno','users.about')
                ->get();
        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {

            $actionhtml = '';
            $actionhtml = '<a href="'.route('my-profile-edit',$row['id']).'"  class="btn btn-icon primary"  ><i class="fa fa-edit"></i></a>';

            if($row['userimage'] || $row['userimage'] != null){
                $image = url("public/upload/userimage/" . $row['userimage']);
            }else{
                $image = url("public/upload/userimage/default.jpg");
            }
            
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = '<img height="60px" width="100px" src="' . $image . '" style="margin:20px;"></center>';
            $nestedData[] = $row['username'];
            $nestedData[] = $row['email'];
            $nestedData[] = $row['phoneno'];
            $nestedData[] = $row['about'];
            $nestedData[] = $actionhtml;
            $data[] = $nestedData;
        }
        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );
        return $json_data;
    }
}

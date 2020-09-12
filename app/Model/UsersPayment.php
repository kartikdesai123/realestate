<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Hash;
use DB;
use Session;
use App\Model\Users;
use App\Model\Emailverify;

class UsersPayment extends Model
{
    protected $table = "users_payment";


    public function addPaymentUser($request){
        
        $explode = explode('-',$request->input('extra3'));
        $planId =  $explode[1];
        $roles =  $explode[0];
        $days = $explode[2];
        $userName = $explode[3];
        $amount = $request->input('TX_VALUE');
        
        $expiredate = date('Y-m-d', strtotime('+'.$days.' days'));

        if($roles == 'AG'){
            $routeRedirect = 'agent-register';
        }else if($roles == 'AY'){
            $routeRedirect = 'agency-register';
        }else if($roles == 'CC'){
            $routeRedirect = 'company-register';
        }else{
            $routeRedirect = 'user-register';
        }

        $objUser = new Users();
        $objUser->username = $userName;
        $objUser->email = $request->input('buyerEmail');
        $objUser->password = Hash::make($request->input('extra1'));
        $objUser->phoneno = $request->input('extra2');
        $objUser->roles = $roles;
        $objUser->expiry_date = $expiredate;
        $objUser->created_at = date("Y-m-d h:i:s");
        $objUser->updated_at = date("Y-m-d h:i:s");
        if($objUser->save()){
            $id = $objUser->id;

            $objPayment = new UsersPayment();
            $objPayment->user_id = $id;
            $objPayment->plan_id = $planId;
            $objPayment->amount = $amount;
            $objPayment->transaction_id = $request->input('transactionId');
            $objPayment->created_at = date("Y-m-d h:i:s");
            $objPayment->updated_at = date("Y-m-d h:i:s");
            if($objPayment->save()){
                $token = bin2hex(random_bytes(10));

                    $objEmailverify = new Emailverify();
                    $result = $objEmailverify->saveToken($id,$token);
                    if($result){
                        $objSendmail = new Sendmail();
                        $Sendmail = $objSendmail->userRegister($token,$userName,$request->input('buyerEmail'));
                        if($Sendmail){
                            return "success";
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

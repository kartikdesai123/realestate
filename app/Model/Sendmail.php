<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Auth;
use Config;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Model\PropertyDetails;
use App\Model\Users;
use App\Model\Propertyrequest;
use App\Model\PropertyContactOwner;

class Sendmail extends Model 
{

    public function sendMailltesting(){
        $mailData['data']='';
        $mailData['subject'] = 'Real Etate - Testing Mail';
        $mailData['attachment'] = array();
        $mailData['template'] ="emailsTemplate.testemail";
        $mailData['mailto'] = 'pkhunt240@rku.ac.in';
        $sendMail = new Sendmail;
        return $sendMail->sendSMTPMail($mailData);

    }
    public function videocallschedule($request){
       
        $propertyDetails = PropertyDetails::select("users.username","users.email","property_details.id")
                                            ->join("users","users.id","=","property_details.user_id")
                                            ->where("property_details.slug",$request->input('slug'))
                                            ->get();
                                            
        if($propertyDetails[0]->email){
            $token = bin2hex(random_bytes(10));

            $objPropertyrequest = new Propertyrequest();
            $objPropertyrequest->property_id = $propertyDetails[0]->id;
            $objPropertyrequest->token = $token;
            $objPropertyrequest->name = $request->input('name');
            $objPropertyrequest->email = $request->input('email');
            $objPropertyrequest->phoneno = $request->input('phone');
            $objPropertyrequest->date = $request->input('date');
            $objPropertyrequest->time = $request->input('time');
            $objPropertyrequest->message = $request->input('message');
            $objPropertyrequest->request_type = "0";
            $objPropertyrequest->created_at = date("Y-m-d h:i:s");
            $objPropertyrequest->updated_at = date("Y-m-d h:i:s");
             
            if($objPropertyrequest->save()){
                
                $mailData['data']=[];
                $mailData['data']['token']= $token;
                $mailData['data']['id'] = $objPropertyrequest->id;
                $mailData['data']['username']= $propertyDetails[0]->username;
                $mailData['data']['user_email']=$propertyDetails[0]->email;
                $mailData['data']['name']=$request->input('name');
                $mailData['data']['phoneno']=$request->input('phone');
                $mailData['data']['date']=$request->input('date');
                $mailData['data']['time']=$request->input('time');
                $mailData['data']['email']=$request->input('email');
                $mailData['data']['message']=$request->input('message');
                $mailData['subject'] = 'Real Etate - Video call schedule request';
                $mailData['attachment'] = array();
                $mailData['template'] ="emailsTemplate.videocallschedule";
                $mailData['mailto'] = $propertyDetails[0]->email;
                $sendMail = new Sendmail;
                $sendMail->sendSMTPMail($mailData);

                return true;
            }else{
                return false;
            }
            

        }else{
            return false;
        }    
       

    }
    public function personalvisit($request){

       
        $propertyDetails = PropertyDetails::select("users.username","users.email","property_details.id")
                                            ->join("users","users.id","=","property_details.user_id")
                                            ->where("property_details.slug",$request->input('slug'))
                                            ->get();
                                            
        if($propertyDetails[0]->email){

            $objPropertyrequest = new Propertyrequest();
            $objPropertyrequest->property_id = $propertyDetails[0]->id;
            $objPropertyrequest->name = $request->input('name');
            $objPropertyrequest->email = $request->input('email');
            $objPropertyrequest->phoneno = $request->input('phone');
            $objPropertyrequest->date = $request->input('date');
            $objPropertyrequest->time = $request->input('time');
            $objPropertyrequest->message = $request->input('message');
            $objPropertyrequest->request_type = "1";
            $objPropertyrequest->created_at = date("Y-m-d h:i:s");
            $objPropertyrequest->updated_at = date("Y-m-d h:i:s");
             
            if($objPropertyrequest->save()){
                
                $mailData['data']=[];
                $mailData['data']['id'] = $objPropertyrequest->id;
                $mailData['data']['username']= $propertyDetails[0]->username;
                $mailData['data']['user_email']=$propertyDetails[0]->email;
                $mailData['data']['name']=$request->input('name');
                $mailData['data']['phoneno']=$request->input('phone');
                $mailData['data']['date']=$request->input('date');
                $mailData['data']['time']=$request->input('time');
                $mailData['data']['email']=$request->input('email');
                $mailData['data']['message']=$request->input('message');
                $mailData['subject'] = 'Real Etate - Personal Visit schedule request';
                $mailData['attachment'] = array();
                $mailData['template'] ="emailsTemplate.personalvisit";
                $mailData['mailto'] = $propertyDetails[0]->email;
                $sendMail = new Sendmail;
                $sendMail->sendSMTPMail($mailData);

                return true;
            }else{
                return false;
            }
            

        }else{
            return false;
        }    
       

    }
    public function contactowner($request){
      
        $propertyDetails = PropertyDetails::select("users.username","users.email","property_details.id")
                                            ->join("users","users.id","=","property_details.user_id")
                                            ->where("property_details.slug",$request->input('slug'))
                                            ->get();
                                            
        if($propertyDetails[0]->email){

            $objPropertyContactOwner = new PropertyContactOwner();
            $objPropertyContactOwner->property_id = $propertyDetails[0]->id;
            $objPropertyContactOwner->name = $request->input('name');
            $objPropertyContactOwner->email = $request->input('email');
            $objPropertyContactOwner->phoneno = $request->input('phone');
            $objPropertyContactOwner->message = $request->input('message');
            $objPropertyContactOwner->agree = "1";
            $objPropertyContactOwner->created_at = date("Y-m-d h:i:s");
            $objPropertyContactOwner->updated_at = date("Y-m-d h:i:s");
             
            if($objPropertyContactOwner->save()){
                
                $mailData['data']=[];
                $mailData['data']['id'] = $objPropertyContactOwner->id;
                $mailData['data']['username']= $propertyDetails[0]->username;
                $mailData['data']['user_email']=$propertyDetails[0]->email;
                $mailData['data']['phoneno']=$request->input('phone');
                $mailData['data']['name']=$request->input('name');
                $mailData['data']['email']=$request->input('email');
                $mailData['data']['message']=$request->input('message');
                $mailData['subject'] = 'Real Etate - Try to Contact ';
                $mailData['attachment'] = array();
                $mailData['template'] ="emailsTemplate.contactyou";
                $mailData['mailto'] = $propertyDetails[0]->email;
                $sendMail = new Sendmail;
                $sendMail->sendSMTPMail($mailData);

                return true;
            }else{
                return false;
            }
            

        }else{
            return false;
        }    
       

    }
    public function userRegister($token,$username,$email){
        $mailData['data']['token']=$token;
        $mailData['data']['username']=$username;

        $mailData['subject'] = 'Real Etate - Please verify your account';
        $mailData['attachment'] = array();
        $mailData['template'] ="emailsTemplate.verifyaccount";
        $mailData['mailto'] = $email;
        $sendMail = new Sendmail;
        $sendMail->sendSMTPMail($mailData);
        return true;
    }
    public function forgotPassword($token,$username,$email){
        $mailData['data']['token']=$token;
        $mailData['data']['username']=$username;
        $mailData['subject'] = 'Real Etate - Reset Passsword link';
        $mailData['attachment'] = array();
        $mailData['template'] ="emailsTemplate.forgotpassword";
        $mailData['mailto'] = $email;
        $sendMail = new Sendmail;
        $sendMail->sendSMTPMail($mailData);
        return true;
    }

    public function welcomeMessage($username,$email){
        $mailData['data']['username']=$username;
        $mailData['subject'] = 'Real Etate - Your account succesfully verified';
        $mailData['attachment'] = array();
        $mailData['template'] ="emailsTemplate.welcomeMessage";
        $mailData['mailto'] = $email;
        $sendMail = new Sendmail;
        $sendMail->sendSMTPMail($mailData);
        return true;
    }


    public function sendSMTPMail($mailData)
    {
        
                $pathToFile = $mailData['attachment'];
            
                $mailsend = Mail::send($mailData['template'], ['data' => $mailData['data']], function ($m) use ($mailData,$pathToFile) {
                    $m->from('parthkhunt37@gmail.com', 'Real Estate');
        
                    $m->to($mailData['mailto'], "Real Estate")->subject($mailData['subject']);
                    if($pathToFile != ""){
                        // $m->attach($pathToFile);
                    }
                    
                    //  $m->cc($mailData['bcc']);
                });
                if($mailsend){
                    return true;
                }else{
                    return false;
                }
    }

    // public function sendSMTPMail($mailData)
    // {
        
    //             $pathToFile = $mailData['attachment'];
            
    //             $mailsend = Mail::send($mailData['template'], ['data' => $mailData['data']], function ($m) use ($mailData,$pathToFile) {
    //                 $m->from('info@mototivewebsolution.com', 'Real Estate');
        
    //                 $m->to($mailData['mailto'], "Real Estate")->subject($mailData['subject']);
    //                 if($pathToFile != ""){
    //                     // $m->attach($pathToFile);
    //                 }
                    
    //                 //  $m->cc($mailData['bcc']);
    //             });
    //             if($mailsend){
    //                 return true;
    //             }else{
    //                 return false;
    //             }
    // }
}
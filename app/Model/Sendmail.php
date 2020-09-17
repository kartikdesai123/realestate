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
use App\Model\Userssearch;

class Sendmail extends Model 
{

    public function sendMailltesting(){
        $mailData['data']='';
        $mailData['subject'] = 'Payment Transferred to Your Bank Account';
        $mailData['attachment'] = array();
        $mailData['template'] ="emailsTemplate.testemail";
        $mailData['mailto'] = 'mandaliyabansi123@gmail.com';
       
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
        $sendMail->sendRegisterSMTPMail($mailData);
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


    public function sendUsersMail($request,$userId){

        if($request->input('area2')){
            $area = $request->input('area2');
        }else{
            $area = 0;
        }


        $result =  Userssearch::select("user_id")
                                ->where("property_type",$request->input('type'))
                                ->orWhere("property_status",$request->input('offer'))
                                ->orWhere("property_location",$request->input('txtaddress'))
                                ->orWhere("property_badroom",$request->input('bedrooms'))
                                ->orWhere("property_floorarea",$request->input('floorarea'))
                                ->orWhere("property_floorarea",$area)
                                ->orWhere("property_agent",$userId)
                                ->orWhere("property_agency",$userId)
                                ->orWhere("property_company",$userId)
                                ->orWhere("property_minarea","<=",$request->input('area'))
                                ->orWhere("property_maxarea","=>",$request->input('area'))
                                ->get();                
        // print_r($result);
        // die();
    }

    // public function sendSMTPMail($mailData)
    // {
        
    //             $pathToFile = $mailData['attachment'];
            
    //             $mailsend = Mail::send($mailData['template'], ['data' => $mailData['data']], function ($m) use ($mailData,$pathToFile) {
    //                 $m->from('parthkhunt37@gmail.com', 'Real Estate');
        
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

    public function sendSMTPMail($mailData)
    {
        
      //  print_r();echo 'ddd';exit;
//        $view = view($mailData['template'],$mailData['data']);
        // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.mailjet.com/v3.1/send');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,  '{
  "Messages":[
    {
      "From": {
        "Email": "info@mototivewebsolution.com",
        "Name": "Tsuimubles"
      },
      "To": [
        {
          "Email": "'.$mailData['mailto'].'",
          "Name": "Tsuimubles"
        }
      ],
      "Subject": "'.$mailData['subject'].'",
      "TextPart": "Greetings from Mailjet.",
       "TemplateID": 1696880,
       "Variables": {    
       "name": "Tsuimubles"   
       },
       "TemplateLanguage":true,
      "CustomID": "AppGettingStartedTest"
    }
  ]
}');
//curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"Messages\":[{\"From\": {\n          \"Email\": \"info@mototivewebsolution.com\",\n          \"Name\": \"Kartik\"\n        },\n        \"To\": [\n          {\n            \"Email\": \"kartikdesai123@gmail.com\",\n            \"Name\": \"passenger 1\"\n          }\n        ],\n        \"TemplateID\": 1696880,\n        \"TemplateLanguage\": true,\n        \"Subject\": \"Verify Mail\",\n        \"Variables\": {\n    \"name\": \"kartik det234\"\n    }\n      }\n    ]\n  }");

//curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n  \"Messages\":[\n    {\n      \"From\": {\n        \"Email\": \"info@mototivewebsolution.com\",\n        \"Name\": \"Bansi\"\n      },\n      \"To\": [\n        {\n          \"Email\": \"info@mototivewebsolution.com\",\n          \"Name\": \"Bansi\"\n        }\n      ],\n      \"Subject\": \"My first Mailjet email\",\n      \"TextPart\": \"Greetings from Mailjet.\",\n      \"HTMLPart\": \"<h3>Dear passenger 1, welcome to <a href=https://www.mailjet.com/'>Mailjet</a>!</h3><br");
curl_setopt($ch, CURLOPT_USERPWD, '184c9ba8284ea0ae505f00f328d3376e' . ':' . 'c2814ee1a7bdc6c01ad4a278a0ca4264');

$headers = array();
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
//dd($result);exit;
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

curl_close($ch);


              //  $pathToFile = $mailData['attachment'];
            
//                $mailsend = Mail::send($mailData['template'], ['data' => $mailData['data']], function ($m) use ($mailData,$pathToFile) {
//                    $m->from('info@mototivewebsolution.com', 'Real Estate');
//        
//                    $m->to($mailData['mailto'], "Real Estate")->subject($mailData['subject']);
//                    if($pathToFile != ""){
//                        // $m->attach($pathToFile);
//                    }
//                    
//                    //  $m->cc($mailData['bcc']);
//                });
//                if($mailsend){
//                    echo 'success';
//                    dd($mailsend); 
//                    return true;
//                }else{
//                    echo 'fail';
//                    dd($mailsend);
//                    return false;
//                }
    }
    
    public function sendRegisterSMTPMail($mailData){
        $to = $mailData['mailto'];
$subject = "Verification Mail";

$message = "
<html>
<head>
<title>Verification Mail</title>
</head>
<body>
<p>This Register Mail!</p>
<table>
<tr>
<th>Firstname</th>
<th>".$mailData['data']['username']."</th>
</tr>
<tr>
<td>Plsease click no link</td>
<td><a href='http://tsuimubles.mototivewebsolution.com/email-verify/".$mailData['data']['token']."' target='_blank'>Click Here</a></td>
</tr>
</table>
</body>
</html>
";

//print_r($mailData['data']);
//$message = $view = view($mailData['template']);


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@mototivewebsolution.com/>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
    }
}
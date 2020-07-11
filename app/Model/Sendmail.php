<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Auth;
use Config;
use Illuminate\Support\Facades\DB;
use Mail;

class Sendmail extends Model 
{

    public function sendMailltesting(){
        $mailData['data']='';
        $mailData['subject'] = 'Real Etate - Testing Mail';
        $mailData['attachment'] = array();
        $mailData['template'] ="emailsTemplate.testemail";
        $mailData['mailto'] = 'parthkhunt12@gmail.com';
        $sendMail = new Sendmail;
        return $sendMail->sendSMTPMail($mailData);

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
                    $m->from('testewebexecute@gmail.com', 'Real Estate');
        
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
}
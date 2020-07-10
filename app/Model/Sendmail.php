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
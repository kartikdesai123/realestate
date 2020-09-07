<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Hash;
use DB;
use Session;
use App\Model\Plandetails;

class UsersPayment extends Model
{
    protected $table = "users_payment";


    public function addPayment($request,$userId){
        $getPlanDetal = $this->plandetails($request->input('plan_id'));
        
        if(!empty($getPlanDetal)){
//        $amount = $getPlanDetal[0]['planprice'];
//        $amount = 20000;
//            echo $amount; exit();
            
//        $api_endpoint   = 'https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu';
//        $merchantId = "508029";
//        $ApiKey   = "4Vj8eK4rloUd272L48hsrarnUA";
//        $accountId  = "512321";
//        $referenceCode = 'TestPayU12345';
//
//        $response_url = action('frontend\LoginController@payResponse');
//        $confirm_url = action('frontend\LoginController@payConfirm');
        
//        $refSale = mt_rand(100000,999999) . time();
//        $signature = md5($ApiKey.'~'.$merchantId.'~'.$referenceCode.'~'.$amount.'~USD');
//        $signature1 = md5("4Vj8eK4rloUd272L48hsrarnUA~508029~TestPayU~20000~COP");
//        echo $signature.'--'.$signature1; exit();
        
//        $data = array(
//            'merchantId'	=> $merchantId,
//            'accountId' 	=> $accountId,
//            'description'	=> 'Subscription plan',
//            'referenceCode'	=> $referenceCode,
//            'amount'            => $amount,
//            'currency'          => "COP",
//            'signature'         => $signature,
//            'refSale'          =>  $refSale,
//            'test'              => "1",
//            'buyerEmail'        => "test@test.com",
//            'responseUrl'	=> "$response_url",
//            'confirmationUrl'	=> "$confirm_url",
//        );

        
//        $data['bill_custref'] = "$request->phone";
        
//        $response = $this->api_request($data);
        // return $response;
//        echo "<pre/>"; print_r($response); exit();
        
//        $ref= trim($response['order']['ref']);
//        $url= trim($response['order']['url']);

        // dd($url);
//        Session::put('orderData', $request->all());
//        Session::put('order_reference', $ref);

//        $order->telr_order_ref = $ref;
//        $order->save();

        //Session::forget('cart');

//        if (empty($ref) || empty($url)) {
//            return redirect()->back()->with('unsuccess', 'Order Failed ! Please try again later');
//        }
//        else{
//            // return redirect()->to($url);
//            return redirect()->back()->with('url', $url);
//            return view('front.telr-frame', compact('url'));
//        }
            
        }
//        $objUser = new Users();
//        $objUser->user_id = $userId;
//        $objUser->plan_id = $request->input('plan_id');
//        $objUser->amount = $amount;
//        $objUser->created_at = date("Y-m-d h:i:s");
//        $objUser->updated_at = date("Y-m-d h:i:s");
//        if($objUser->save()){
//
//        }
    }
    
    public function planDetails($planId){
       $planDetail = Plandetails::select('plandetails.photos','plandetails.tourBooking','plandetails.audiobook',"plandetails.noofvideo","plandetails.angleview","plan.planfor","plandetails.planid","plandetails.planname","plandetails.planprice","plandetails.plandays","plandetails.planproperty","plandetails.planagent","plandetails.is_deleted","plandetails.id")
                            ->join("plan","plan.id","=","plandetails.planid")
                            ->where("plandetails.id",$planId)
                            ->where("plandetails.is_deleted","0")
                            ->get()->toArray();
                           
       return $planDetail;
    }
    
     public function api_request($data) {
        $api_endpoint   = 'https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu';
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_endpoint);
        curl_setopt($ch, CURLOPT_POST, count($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
        $results = curl_exec($ch);
        print_r($results); exit();
        curl_close($ch);
        $results = json_decode($results,true);
        return $results;
    }
    
}

@extends('frontend.layout.layout')
@section('content')
<!--=================================
Service -->
<section class="space-ptb signin mt-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-sm-10">
        <div class="section-title">
          <h2 class="text-center">Create an Account</h2>
        </div>
        <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link "   href="{{ route("user-register")}}"  aria-selected="true">Regular User</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link active"   href="{{ route("agent-register")}}"  >Agent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"   href="{{ route("agency-register")}}" >Agency</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"   href="{{ route("company-register")}}" >Company</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="regular-user" role="tabpanel" aria-labelledby="regular-user-tab">
              <form class="form-row mt-4 align-items-center" id="agent-register" method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">@csrf
                <div class="form-group col-sm-12">
                  <label>Username:</label>
                  <input type="hidden" class="form-control" name="plan_id" value="{{ $plan_id }}">
                  <input type="text" class="form-control username" name="agentusername" placeholder="Please enter agent's username">
                  <input name="merchantId"    type="hidden"  value="508029"   >
                <input name="accountId"     type="hidden"  value="512321" >
                <input name="description"   type="hidden"  value="Subscription plan type - {{ $plan_detail[0]['planname'] }}"  >
                <input name="referenceCode" type="hidden"  value="{{ $time }}" >
                <input name="amount"        type="hidden"  value="{{ $plan_detail[0]['planprice'] }}">
                <input name="currency"      type="hidden"  value="COP" >
                <input name="signature"     type="hidden"  value="{{ $signature }}"  >
                <input name="test"          type="hidden"  value="1" >
                <input name="buyerEmail"    type="hidden"  class='buyerEmail' value="" >
                <input name="extra1"    type="hidden"  class='passwords' value="" >
                <input name="extra2"    type="hidden"  class='phone' value="" >
                <input name="extra3" class="extra3"   type="hidden" value="AG-{{ $plan_id }}-{{ $plan_detail[0]['plandays'] }}" >
                <input name="responseUrl"    type="hidden"  value="{{ route('payment-response') }}" >
                <input name="confirmationUrl"    type="hidden"  value="{{ route('payment-confirm') }}" >
                </div>
                <div class="form-group col-sm-12">
                  <label>Email Address:</label>
                  <input type="email" class="form-control" name="agentemail" id='email' placeholder="Please enter agent's email">
                </div>
                <div class="form-group col-sm-12">
                  <label>Password:</label>
                  <input type="password" class="form-control password" name="agentpassword" id="agentpassword" placeholder="Please enter agent's password">
                </div>
                <div class="form-group col-sm-12">
                  <label>Confirm Password:</label>
                  <input type="password" class="form-control" name="agentcpassword" placeholder="Please enter agent's confirm password">
                </div>
                <div class="form-group col-sm-12">
                  <label>Phone no:</label>
                  <input type="text" class="form-control" name="agentphoneno" id='phoneNo' placeholder="Please enter agent's phone number">
                </div>
             
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-primary btn-block  btnsubmit">Register</button>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                    <li class="mr-1"><a href="{{ route('signin') }}">Already Registered User? Click here to signin</a></li>
                  </ul>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
@endsection
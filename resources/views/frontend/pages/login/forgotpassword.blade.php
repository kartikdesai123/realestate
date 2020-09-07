@extends('frontend.layout.layout')
@section('content')
<!--=================================
Service -->
<section class="space-ptb signin mt-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-sm-10">
        <div class="section-title">
          <h2 class="text-center">Forgot Password</h2>
        </div>
            
        <form class="form-row mt-4 mb-5 align-items-center" id="forgot-password-form" method="POST" >@csrf
                <div class="form-group col-sm-12">
                  <label>Email Address:</label>
                  <input type="email" class="form-control" name="email" placeholder="Please enter your register email address">
                </div>
                
                <div class="col-sm-6"> 
                  <button type="submit" class="btn btn-primary btn-block btnsubmit">Send reset link</button>
                </div>
                
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
  <!--=================================
  Service -->
  
 
@endsection
@extends('frontend.layout.layout')
@section('content')
<!--=================================
Service -->
<section class="space-ptb signin mt-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-sm-10">
        <div class="section-title">
          <h2 class="text-center">Signin an Account</h2>
        </div>
            
        <form class="form-row mt-4 mb-5 align-items-center" id="login-form" method="POST" >@csrf
                <div class="form-group col-sm-12">
                  <label>Email Address:</label>
                  <input type="email" class="form-control" name="email" placeholder="Please enter your register email address">
                </div>
                <div class="form-group col-sm-12">
                  <label>Password:</label>
                  <input type="password" class="form-control" name="password" placeholder="Please enter your password">
                </div>
                <div class="form-group col-sm-12" style="text-align: right">
                  <a href="{{ route('forgot-password') }}" class="text-primary">Forgot Password ?</a>
                </div>
                <div class="col-sm-6"> 
                  <button type="submit" class="btn btn-primary btn-block btnsubmit">Login</button>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                    <li class="mr-1"><a class="text-primary" href="{{ route('user-register') }}">Click here to Signup</a></li>
                  </ul>
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
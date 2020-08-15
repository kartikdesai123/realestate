@extends('frontend.layout.layout')
@section('content')

@php

    if (!empty(Auth()->guard('users')->user())) {
        $data = Auth()->guard('users')->user();
    }
    if (!empty(Auth()->guard('agent')->user())) {
        $data = Auth()->guard('agent')->user();
    }
    if (!empty(Auth()->guard('agency')->user())) {
        $data = Auth()->guard('agency')->user();
    }
    if (!empty(Auth()->guard('company')->user())) {
        $data = Auth()->guard('company')->user();
    }
    
@endphp

  <!--=================================
My profile -->
<section class="space-ptb">
    <div class="container">
      <div class="row">


        @include('frontend.pages.profile.details_header')
        <div class="col-12">
            <div class="col-12">
                <div class="section-title d-flex align-items-center">
                    <h2>My Agent</h2>
                </div>
            </div>
            
          <form id="add-my-agent" enctype="multipart/form-data" method="POST">
            @csrf
            
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label>Username:</label>
                <input type="text" class="form-control" name="agentusername" placeholder="Please enter agent's username">
              </div>
              <div class="form-group col-sm-6">
                <label>Email Address:</label>
                <input type="email" class="form-control" name="agentemail" placeholder="Please enter agent's email">
              </div>
              <div class="form-group col-sm-6">
                <label>Password:</label>
                <input type="password" class="form-control" name="agentpassword" id="agentpassword" placeholder="Please enter agent's password">
              </div>
              <div class="form-group col-sm-6">
                <label>Confirm Password:</label>
                <input type="password" class="form-control" name="agentcpassword" placeholder="Please enter agent's confirm password">
              </div>
              <div class="form-group col-sm-6">
                <label>Phone no:</label>
                <input type="text" class="form-control" name="agentphoneno" placeholder="Please enter agent's phone number">
              </div>
              
              <div class="form-group col-sm-6">
                <label>Photo:</label>
                <input type="file" class="form-control" name="agentuserimage" accept="image/*">
              </div>

              <div class="form-group col-sm-12">
                <label>About agent:</label>
                <textarea  class="form-control" name="agentabout" placeholder="Please enter about agent" rows="2"></textarea>
              </div>

              <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-block btnsubmit">Save Changes</button>
              </div>
            </div>
          </form>
         
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  My profile -->

  <!--=================================
  newsletter -->
  <section class="py-5 bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h3 class="text-white mb-0">Sign up to our newsletter to get the latest news and offers.</h3>
        </div>
        <div class="col-md-7 mt-3 mt-md-0">
          <div class="newsletter">
            <form>
              <div class="form-group mb-0">
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              <button type="submit" class="btn btn-dark b-radius-left-none">Get notified</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  newsletter -->
 
@endsection
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
              <div class="form-group col-sm-12">
                <label>Phone no:</label>
                <input type="text" class="form-control" name="agentphoneno" placeholder="Please enter agent's phone number">
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

@endsection
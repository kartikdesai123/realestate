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
<section class="space-ptb mt-100">
    <div class="container">
      <div class="row">
        @include('frontend.pages.profile.details_header')
        <div class="col-12">
          <div class="section-title d-flex align-items-center">
            <h2>Change Password</h2>
          </div>
          <form id="edit-password" enctype="multipart/form-data" method="POST">@csrf
            <div class="form-row">

              <div class="form-group col-md-12">
                <label>Old Password</label>
                <input type="password" class="form-control password" name="oldpassword" id="oldpassword">
              </div>

              <div class="form-group col-md-12">
                <label>New Password</label>
                <input type="password" class="form-control password" name="newpassword" id="newpassword">
              </div>


              <div class="form-group col-md-12">
                <label>Confirm new password</label>
                <input type="password" class="form-control" name="cnewpassword" >
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
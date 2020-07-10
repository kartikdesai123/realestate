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
        <div class="col-12 mb-5">
          <div class="profile-sidebar bg-holder bg-overlay-black-70" style="background-image: url({{ asset('public/frontend/assets/images/banner-01.jpg') }})">
            <div class="d-sm-flex align-items-center position-relative">
              <div class="profile-avatar">
                <img class="img-fluid  rounded-circle" src="{{ asset('public/upload/userimage/'.$data['userimage']) }}" alt="">
              </div>
              <div class="ml-sm-4">
              <h4 class="text-white">{{ $data['username'] }}</h4>
                <b class="text-white">{{ $data['email'] }}</b>
              </div>
              
            </div>
            <div class="profile-nav">
              <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route("my-profile")}}"><i class="far fa-user"></i> Edit Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route("change-password")}}"><i class="fa fa-key" ></i>
                        Change Password</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link " href="{{ route("my-property")}}"><i class="fa fa-university" ></i>
                          My Property
                      </a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
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
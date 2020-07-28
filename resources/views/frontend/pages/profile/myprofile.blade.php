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
          <div class="section-title d-flex align-items-center">
            <h2>Edit profile </h2>
            
          </div>
          <form id="edit-profile" enctype="multipart/form-data" method="POST">@csrf
            <div class="form-row">

              <div class="form-group col-md-6">
                <label>User name</label>
                <input type="text" class="form-control" name="username" value="{{ $data['username'] }}">
              </div>


              <div class="form-group col-md-6">
                <label>Email address</label>
                <input type="text" class="form-control" readonly value="{{ $data['email'] }}">
              </div>

              <div class="form-group col-md-12">
                <label>Profile Image</label>
                <input type="file" class="form-control" name="userimage">
              </div>
              
              @if($data['roles'] != "U")
                <div class="form-group col-md-12">
                    <label>About Me</label>
                    <textarea class="form-control" rows="4" name="aboutme">{{ $data['about'] }}</textarea>
                </div>
              @endif

              @if($data['roles'] == "AG")
                
                <div class="form-group col-md-6">
                  <label>Designation</label>
                  <input type="text" class="form-control" name="designation">
                </div>

                <div class="form-group col-md-6">
                  <label>Facebook</label>
                  <input type="text" class="form-control" name="facebook">
                </div>

                <div class="form-group col-md-6">
                  <label>Twitter</label>
                  <input type="text" class="form-control" name="twitter">
                </div>

                <div class="form-group col-md-6">
                  <label>Linkedin</label>
                  <input type="text" class="form-control" name="linkedin">
                </div>

                <div class="form-group col-md-6">
                  <label>Website</label>
                  <input type="text" class="form-control" name="website">
                </div>

                <div class="form-group col-md-6">
                  <label>Licenses</label>
                  <input type="text" class="form-control" name="licenses">
                </div>

                <div class="form-group col-md-12">
                  <label>Office Phone No</label>
                  <input type="text" class="form-control" name="officeno">
                </div>

              @endif
              @if($data['roles'] == "AY")
                
                <div class="form-group col-md-6">
                  <label>Location</label>
                  <input type="text" class="form-control" name="location">
                </div>

                <div class="form-group col-md-6">
                  <label>Facebook</label>
                  <input type="text" class="form-control" name="facebook">
                </div>

                <div class="form-group col-md-6">
                  <label>Twitter</label>
                  <input type="text" class="form-control" name="twitter">
                </div>

                <div class="form-group col-md-6">
                  <label>Linkedin</label>
                  <input type="text" class="form-control" name="linkedin">
                </div>

                <div class="form-group col-md-6">
                  <label>Website</label>
                  <input type="text" class="form-control" name="website">
                </div>

                <div class="form-group col-md-6">
                  <label>Licenses</label>
                  <input type="text" class="form-control" name="licenses">
                </div>

                <div class="form-group col-md-12">
                  <label>Office Phone No</label>
                  <input type="text" class="form-control" name="officeno">
                </div>

              @endif

              @if($data['roles'] != "U")
                <div class="form-group col-md-12">
                    <label>Overview</label>
                    <textarea class="form-control" rows="4" name="overview"></textarea>
                </div>
              @endif

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
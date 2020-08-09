@extends('frontend.layout.layout')
@section('content')

@php

    if (!empty(Auth()->guard('users')->user())) {
        $data = Auth()->guard('users')->user();
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
            <h2>Assign Agent</h2>
          </div>
            @if(count($agent))
          <form id="assign-agent" method="POST">@csrf
            <div class="form-row">
                <div class="form-group col-md-12">
                <label>Property Name</label>
                <input type="text" class="form-control" name="property_name" value="{{ $property[0]['title'] }}" readonly>
              </div> 
              <div class="form-group col-md-12">
                <label>Select Agent</label>
                <select class="form-control" id="agent" name="agent">
                      <option value="" >Please select agent</option>
                      @foreach($agent as $value)
                      <option value="{{ $value['id'] }}">{{ $value['username'] }}</option>
                      @endforeach
                 </select>
                <input type="hidden" name="user_id" value='{{ $user_id }}'>
                <input type="hidden" name="property_id" value='{{ $property_id }}'>
              </div>
              
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-block btnsubmit">Assign</button>
              </div>
            </div>
          </form>
            @endif
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
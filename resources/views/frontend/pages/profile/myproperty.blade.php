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
         
            <div class="container">
                <div class="section-title d-flex align-items-center">
                    <h2>My Property </h2>
                </div>
              <div class="row">
                <div class="col-lg-12">
                  @foreach($property as $key => $value)
          
          @php
          $imageCount = explode(',',$value['images']);
          @endphp
          <div class="property-item property-col-list mt-4">
            <div class="row no-gutters">
              <div class="col-lg-4 col-md-5">
                <div class="property-image bg-overlay-gradient-04">
                  <img class="img-fluid" src="{{ asset('public/upload/property_photo/'.$imageCount[0]) }}" alt="">
                  <div class="property-lable">
                    <span class="badge badge-md badge-primary">{{ ucfirst($value['type']) }}</span>
                    <span class="badge badge-md badge-info">{{ ucfirst($value['offer']) }}</span>
                  </div>
                  <!--<span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>-->
                  <div class="property-agent">
                    <div class="property-agent-image">
                      <img class="img-fluid" src="{{ asset('public/upload/userimage/'.$value['userimage']) }}" alt="">
                    </div>
                    <div class="property-agent-info">
                      <a class="property-agent-name" href="#">{{ $value['username'] }}</a>
                      {{-- <span class="d-block">{{ getTypeText($value['roles']) }}</span> --}}
                      <ul class="property-agent-contact list-unstyled">
                        <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="property-agent-popup">
                    <a href="#"><i class="fas fa-camera"></i> {{ count($imageCount) }}</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 col-md-7">
                <div class="property-details">
                  <div class="property-details-inner">
                    <div class="property-details-inner-box">
                      <div class="property-details-inner-box-left">
                        <h5 class="property-title"><a href="{{ route("property-details",$value['slug'])}}" target="_blank">{{ $value['title'] }}</a></h5>
                        <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>{{ $value['address'] }}</span>
                        <span class="property-agent-date"><i class="far fa-clock fa-md"></i>{{ humanTiming($value['created_at']) }}</span>
                      </div>
                      <div class="property-price">${{ $value['price'] }}<span class="d-block"> </span> </div>
                    </div>
                    <ul class="property-info list-unstyled d-flex">
                      <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>{{ $value['badroom'] }}</span></li>
                      <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>{{ $value['bathroom'] }}</span></li>
                      <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Sqft<span>{{ $value['area'] }}</span></li>
                    </ul>
                    <p class="mb-0 d-none d-block mt-3">{{ $value['about_property'] }}</p>
                  </div>
                  <div class="property-btn">
                    <a class="property-link" href="{{ route("property-details",$value['slug'])}}" target="_blank">See Details</a>
                    <ul class="property-listing-actions list-unstyled mb-0">
                      <li class="property-compare"><a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                      <li class="property-favourites"><a data-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

                  @if(count($property))
                  <div class="row">
                    <div class="col-12">
                      <ul class="pagination mt-3">
                        <li class="page-item disabled mr-auto">
                          <span class="page-link b-radius-none">Prev</span>
                        </li>
                        <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item ml-auto">
                          <a class="page-link b-radius-none" href="#">Next</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  @endif
                </div>
              </div>
            </div>
          
          <!--=================================
          Listing – grid view -->
          
         
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
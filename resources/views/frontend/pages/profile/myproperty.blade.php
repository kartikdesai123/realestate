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
                    <a class="nav-link " href="{{ route("change-password")}}"><i class="fa fa-key" ></i>
                        Change Password</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link active" href="{{ route("my-property")}}"><i class="fa fa-university" ></i>
                      My Property
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-12">
         
          
            <div class="container">
                <div class="section-title d-flex align-items-center">
                    <h2>Edit profile </h2>
                </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="property-item property-col-list mt-4">
                    <div class="row no-gutters">
                      <div class="col-lg-4 col-md-5">
                        <div class="property-image bg-overlay-gradient-04">
                          <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/01.jpg') }}" alt="">
                          <div class="property-lable">
                            <span class="badge badge-md badge-primary">Bungalow</span>
                            <span class="badge badge-md badge-info">Sale </span>
                          </div>
                          <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
                          <div class="property-agent">
                            <div class="property-agent-image">
                              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" alt="">
                            </div>
                            <div class="property-agent-info">
                              <a class="property-agent-name" href="#">Alice Williams</a>
                              <span class="d-block">Company Agent</span>
                              <ul class="property-agent-contact list-unstyled">
                                <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                                <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="property-agent-popup">
                            <a href="#"><i class="fas fa-camera"></i> 04</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-7">
                        <div class="property-details">
                          <div class="property-details-inner">
                            <div class="property-details-inner-box">
                              <div class="property-details-inner-box-left">
                                <h5 class="property-title"><a href="property-detail-style-01.html">Ample apartment at last floor </a></h5>
                                <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Virginia drive temple hills</span>
                                <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 days ago</span>
                              </div>
                              <div class="property-price">$150.00<span class="d-block"> / month</span> </div>
                            </div>
                            <ul class="property-info list-unstyled d-flex">
                              <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>1</span></li>
                              <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                              <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>145m</span></li>
                            </ul>
                            <p class="mb-0 d-none d-block mt-3">For those of you who are serious about having more, doing more, giving more and being with some understanding.</p>
                          </div>
                          <div class="property-btn">
                            <a class="property-link" href="{{ route("property-details",'1')}}">See Details</a>
                            <ul class="property-listing-actions list-unstyled mb-0">
                              <li class="property-compare"><a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                              <li class="property-favourites"><a data-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="property-item property-col-list mt-4">
                    <div class="row no-gutters">
                      <div class="col-lg-4 col-md-5">
                        <div class="property-image bg-overlay-gradient-04">
                          <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/02.jpg') }}" alt="">
                          <div class="property-lable">
                            <span class="badge badge-md badge-primary">Summer House</span>
                            <span class="badge badge-md badge-info">Hot </span>
                          </div>
                          <div class="property-agent">
                            <div class="property-agent-image">
                              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/02.jpg') }}" alt="">
                            </div>
                            <div class="property-agent-info">
                              <a class="property-agent-name" href="#">Alice Williams</a>
                              <span class="d-block">Company Agent</span>
                              <ul class="property-agent-contact list-unstyled">
                                <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                                <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="property-agent-popup">
                            <a href="#"><i class="fas fa-camera"></i> 12</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-7">
                        <div class="property-details">
                          <div class="property-details-inner">
                            <div class="property-details-inner-box">
                              <div class="property-details-inner-box-left">
                                <h5 class="property-title"><a href="property-detail-style-01.html">The citizen apartment 5th floor</a></h5>
                                <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Border st. nicholasville, ky</span>
                                <span class="property-agent-date"><i class="far fa-clock fa-md"></i>6 months ago</span>
                              </div>
                              <div class="property-price">$250.00<span class="d-block"> / month</span> </div>
                            </div>
                            <ul class="property-info list-unstyled d-flex">
                              <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                              <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>3</span></li>
                              <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>2,324m</span></li>
                            </ul>
                            <p class="mb-0 d-none d-block mt-3">Success isn’t really that difficult. There is a significant portion of the population here in North America, that actually.</p>
                          </div>
                          <div class="property-btn">
                            <a class="property-link" href="{{ route("property-details",'1')}}">See Details</a>
                            <ul class="property-listing-actions list-unstyled mb-0">
                              <li class="property-compare"><a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                              <li class="property-favourites"><a data-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="property-item property-col-list mt-4">
                    <div class="row no-gutters">
                      <div class="col-lg-4 col-md-5">
                        <div class="property-image bg-overlay-gradient-04">
                          <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/03.jpg') }}" alt="">
                          <div class="property-lable">
                            <span class="badge badge-md badge-primary">Summer House</span>
                            <span class="badge badge-md badge-info">Hot </span>
                          </div>
                          <div class="property-agent">
                            <div class="property-agent-image">
                              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/03.jpg') }}" alt="">
                            </div>
                            <div class="property-agent-info">
                              <a class="property-agent-name" href="#">Sara lisbon</a>
                              <span class="d-block">Company Agent</span>
                              <ul class="property-agent-contact list-unstyled">
                                <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                                <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="property-agent-popup">
                            <a href="#"><i class="fas fa-camera"></i> 03</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-7">
                        <div class="property-details">
                          <div class="property-details-inner">
                            <div class="property-details-inner-box">
                              <div class="property-details-inner-box-left">
                                <h5 class="property-title"><a href="property-detail-style-01.html">Cottage woods housed for sale</a></h5>
                                <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Newport st. mebane, nc</span>
                                <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 months ago</span>
                              </div>
                              <div class="property-price">$326.00<span class="d-block"> / month</span> </div>
                            </div>
                            <ul class="property-info list-unstyled d-flex">
                              <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>3</span></li>
                              <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                              <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,987m</span></li>
                            </ul>
                            <p class="mb-0 d-none d-block mt-3">I truly believe Augustine’s words are true and if you look at history you know it is true. There are many people in.</p>
                          </div>
                          <div class="property-btn">
                            <a class="property-link" href="{{ route("property-details",'1')}}">See Details</a>
                            <ul class="property-listing-actions list-unstyled mb-0">
                              <li class="property-compare"><a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                              <li class="property-favourites"><a data-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="property-item property-col-list mt-4">
                    <div class="row no-gutters">
                      <div class="col-lg-4 col-md-5">
                        <div class="property-image bg-overlay-gradient-04">
                          <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/04.jpg') }}" alt="">
                          <div class="property-lable">
                            <span class="badge badge-md badge-primary">Summer House</span>
                            <span class="badge badge-md badge-info">Hot </span>
                          </div>
                          <div class="property-agent">
                            <div class="property-agent-image">
                              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/04.jpg') }}" alt="">
                            </div>
                            <div class="property-agent-info">
                              <a class="property-agent-name" href="#">Anne Smith</a>
                              <span class="d-block">Company Agent</span>
                              <ul class="property-agent-contact list-unstyled">
                                <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                                <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="property-agent-popup">
                            <a href="#"><i class="fas fa-camera"></i> 12</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-7">
                        <div class="property-details">
                          <div class="property-details-inner">
                            <div class="property-details-inner-box">
                              <div class="property-details-inner-box-left">
                                <h5 class="property-title"><a href="property-detail-style-01.html">Executive 4 bed WDM ranch</a></h5>
                                <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Virginia drive temple hills</span>
                                <span class="property-agent-date"><i class="far fa-clock fa-md"></i>05 months ago</span>
                              </div>
                              <div class="property-price">$658.00<span class="d-block"> / month</span> </div>
                            </div>
                            <ul class="property-info list-unstyled d-flex">
                              <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                              <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                              <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>1,658m</span></li>
                            </ul>
                            <p class="mb-0 d-none d-block mt-3">We also know those epic stories, those modern-day legends surrounding the early failures of such supremely successful folks.</p>
                          </div>
                          <div class="property-btn">
                            <a class="property-link" href="{{ route("property-details",'1')}}">See Details</a>
                            <ul class="property-listing-actions list-unstyled mb-0">
                              <li class="property-compare"><a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                              <li class="property-favourites"><a data-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="property-item property-col-list mt-4">
                    <div class="row no-gutters">
                      <div class="col-lg-4 col-md-5">
                        <div class="property-image bg-overlay-gradient-04">
                          <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/05.jpg') }}" alt="">
                          <div class="property-lable">
                            <span class="badge badge-md badge-primary">Summer House</span>
                            <span class="badge badge-md badge-info">Hot </span>
                          </div>
                          <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
                          <div class="property-agent">
                            <div class="property-agent-image">
                              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/05.jpg') }}" alt="">
                            </div>
                            <div class="property-agent-info">
                              <a class="property-agent-name" href="#">Sara lisbon</a>
                              <span class="d-block">Company Agent</span>
                              <ul class="property-agent-contact list-unstyled">
                                <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                                <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="property-agent-popup">
                            <a href="#"><i class="fas fa-camera"></i> 04</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-7">
                        <div class="property-details">
                          <div class="property-details-inner">
                            <div class="property-details-inner-box">
                              <div class="property-details-inner-box-left">
                                <h5 class="property-title"><a href="property-detail-style-01.html">Cottage woods housed for sale</a></h5>
                                <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Newport st. mebane, nc</span>
                                <span class="property-agent-date"><i class="far fa-clock fa-md"></i>11 months ago</span>
                              </div>
                              <div class="property-price">$987.00<span class="d-block"> / month</span> </div>
                            </div>
                            <ul class="property-info list-unstyled d-flex">
                              <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                              <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                              <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,987m</span></li>
                            </ul>
                            <p class="mb-0 d-none d-block mt-3">We know this in our gut, but what can we do about it? How can we motivate ourselves? One of the most difficult aspects of achieving.</p>
                          </div>
                          <div class="property-btn">
                            <a class="property-link" href="{{ route("property-details",'1')}}">See Details</a>
                            <ul class="property-listing-actions list-unstyled mb-0">
                              <li class="property-compare"><a data-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                              <li class="property-favourites"><a data-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
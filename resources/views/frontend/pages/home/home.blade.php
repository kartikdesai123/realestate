@extends('frontend.layout.layout')
@section('content')

<style>
    .carousel-control-prev-icon {
        background-image: url('../public/frontend/assets/images/left.png');
    }
    .carousel-control-next-icon {
    background-image: url('../public/frontend/assets/images/right.png');
}
.select2-container--default .select2-selection--single .select2-selection__arrow:before {
    
     background-image: url('../public/frontend/assets/images/up.png');
    background-size: 15px 15px;
    display: inline-block;
    width: 15px; 
    height: 15px;
    content: "";
/*    font-family: "Font Awesome 5 Free";
    font-style: normal;
    font-weight: 900;
    color: #e1282e;*/
}
</style>
<div id="demo" class="carousel slide banner-slider" data-ride="carousel">

  <!-- Indicators -->
<!--   <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('public/frontend/assets/images/banner-02.jpg') }}" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('public/frontend/assets/images/banner-02.jpg') }}" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('public/frontend/assets/images/banner-02.jpg') }}" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
     <!--  property Type  -->
         <section class="property-search-field-top position-reletive">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="property-search-field bg-white">
                        <div class="property-search-item">
                           <form class=" basic-select-wrapper" method="POST" id="search">@csrf
                             <div class="form-row">
                              <div class="form-group col-lg-2 col-md-6">
                                 
                                 <select class="form-control basic-select buldingType" name="property_type">
                                    <option value="">Property type</option>
                                    @foreach($property_type as $key => $value)
                                 <option value="{{ $value->type }}">{{ $value->type }}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="form-group col-lg-2 col-md-6">
                                 <select class="form-control basic-select buldingStatus" name="property_status">
                                    <option value="">Status</option>.
                                    <option value="rent" >For Rent</option>
                                    <option value="sale">For Sale</option>
                                 </select>
                              </div>
                              <div class="form-group col-lg-3 col-md-6">
                                 <select class="form-control basic-select buldingStatus" name="property_status">
                                    <option value="">Location</option>.
                                    <option value="rent" >For Rent</option>
                                    <option value="sale">For Sale</option>
                                 </select>
                              </div>

                              
                              <div class="form-group col-lg-2">
                                 <span class="align-items-center ml-3 d-none d-md-block"><button class="btn btn-primary d-flex align-items-center" type="submit"><i class="fas fa-search mr-1"></i><span>Search</span></button></span>
                              </div>
                                 <div class="form-group col-lg-3">
                                 <span class="align-items-center ml-3 d-none d-md-block"><button class="btn btn-primary d-flex align-items-center adv_srh" type="submit"><span>Advance Search</span> <i class="fas fa-angle-double-down"></i></button></span>
                              </div>
                              
                              <div class="collapse advanced-search" id="advanced-search">
                                 <div class="card card-body">
                                    <div class="form-row">
                                       <div class="form-group col-md-3">
                                          <label>Distance from location</label>
                                          <select class="form-control basic-select" name="distance">
                                             <option value="">This area only</option>
                                             <option value="1">Within 1 mile</option>
                                             <option value="3">Within 3 miles</option>
                                             <option value="5">Within 5 miles</option>
                                             <option value="10">Within 10 miles</option>
                                             <option value="15">Within 15 miles</option>
                                             <option value="30">Within 30 miles</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label>Bedrooms</label>
                                          <select class="form-control basic-select" name="badroom">
                                             <option value="">No max</option>
                                             <option value="1">01</option>
                                             <option value="2">02</option>
                                             <option value="3">03</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label>Sort by</label>
                                          <select class="form-control basic-select" name="sortby">
                                             <option  value="">Most popular</option>
                                             <option  value="high">Highest price</option>
                                             <option value="low">Lowest price</option>
                                             <option value="reduced">Most reduced</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label>Floor area</label>
                                          <input class="form-control" placeholder="Type (sq ft)" name="floorarea">
                                          {{-- <select class="form-control basic-select" name="floor">
                                             <option>Select Floor</option>
                                             <option>01</option>
                                             <option>02</option>
                                             <option>03</option>
                                          </select> --}}
                                       </div>
                                    </div>
                                     <div class="form-row">
                                         <div class="form-group col-md-4">
                                          <label>Agent</label>
                                          <select class="form-control basic-select" name="agent">
                                             <option value="">Select Agent</option>
                                             @foreach($agentListSerch as $key => $value)
                                                <option value="{{ $value->id}}">{{ $value->username }}</option> 
                                             @endforeach
                                          </select>
                                       </div>
                                         <div class="form-group col-md-4">
                                          <label>Agencies</label>
                                          <select class="form-control basic-select" name="agencies">
                                             <option value="">Select Agencies</option>
                                             @foreach($agencyListSerch as $key => $value)
                                                <option value="{{ $value->id}}">{{ $value->username }}</option> 
                                             @endforeach
                                          </select>
                                       </div>
                                         <div class="form-group col-md-4">
                                          <label>Company</label>
                                          <select class="form-control basic-select" name="company">
                                             <option value="">Select Company</option>
                                             @foreach($companyListSerch as $key => $value)
                                                <option value="{{ $value->id}}">{{ $value->username }}</option> 
                                             @endforeach
                                          </select>
                                       </div>
                                     </div>
                                    <div class="form-row">
                                       <div class="form-group col-md-3">
                                          <label>Min Area (sq ft)</label>
                                          <input class="form-control" placeholder="Type (sq ft)" name="minarea">
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label>Max Area (sq ft)</label>
                                          <input class="form-control" placeholder="Type (sq ft)" name="maxarea">
                                       </div>
                                       <div class="form-group col-md-6 property-price-slider ">
                                          <label>Select Price Range</label>
                                          <input type="text" id="property-price-slider"  value="" name="price_range"/>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="d-md-none btn-block btn-mobile  m-3">
                                 <button class="btn btn-primary btn-block align-items-center" type="submit">
                                    <i class="fas fa-search mr-1"></i>
                                    <span>Search</span>
                                 </button>
                              </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
            Property Types -->

</div>



<!--=================================
         banner -->
         <!-- <section class="position-relative">
            <div class="banner bg-holder bg-overlay-gradient-02" style="background-image: url({{ asset('public/frontend/assets/images/banner-02.jpg') }});">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 col-xl-6">
                        <h1 class="text-white mb-4 display-4 font-weight-bold">Find the perfect home to buy or rent</h1>
                     </div>
                  </div>
               </div>
            </div>
            <svg class="banner-shap"
               xmlns="http://www.w3.org/2000/svg"
               xmlns:xlink="http://www.w3.org/1999/xlink"
               width="100%" height="100px">
               <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                  d="M1920.000,100.000 L0.000,100.000 L1920.000,-0.000 L1920.000,100.000 Z"/>
            </svg>
         </section> -->
         <!--=================================
            banner -->
         <!--=================================
            property Type -->
         <!-- <section class="property-search-field-top position-reletive">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="property-search-field bg-white">
                        <div class="property-search-item">
                           <form class="form-row basic-select-wrapper" method="POST" id="search">@csrf
                              <div class="form-group col-lg col-md-6">
                                 <label>Property type</label>
                                 <select class="form-control basic-select buldingType" name="property_type">
                                    <option value="">All Type</option>
                                    @foreach($property_type as $key => $value)
                                 <option value="{{ $value->type }}">{{ $value->type }}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="form-group col-lg col-md-6">
                                 <label>Status</label>
                                 <select class="form-control basic-select buldingStatus" name="property_status">
                                    <option value="">All Type</option>.
                                    <option value="rent" >For Rent</option>
                                    <option value="sale">For Sale</option>
                                 </select>
                              </div>
                              <div class="form-group d-flex col-lg-5">
                                 <div class="form-group-search">
                                    <label>Location</label>
                                    <div class="d-flex align-items-center">
                                        <i class="far fa-compass mr-1"></i>
                                        <input type="text" class="form-control txtaddress" name="txtaddress" id="txtaddress" placeholder="Address">
                                    </div>
                                 </div>
                                 <span class="align-items-center ml-3 d-none d-md-block"><button class="btn btn-primary d-flex align-items-center" type="submit"><i class="fas fa-search mr-1"></i><span>Search</span></button></span>
                              </div>
                              <div class="form-group text-center col-lg col-md-4 ">
                                 <div class="d-flex justify-content-center d-md-inline-block">
                                    <a class="more-search p-0" data-toggle="collapse" href="#advanced-search" role="button" aria-expanded="false" aria-controls="advanced-search"> <span class="d-block pr-2 mb-1">Advanced search</span>
                                    <i class="fas fa-angle-double-down"></i></a>
                                 </div>
                              </div>
                              <div class="collapse advanced-search" id="advanced-search">
                                 <div class="card card-body">
                                    <div class="form-row">
                                       <div class="form-group col-md-3">
                                          <label>Distance from location</label>
                                          <select class="form-control basic-select" name="distance">
                                             <option value="">This area only</option>
                                             <option value="1">Within 1 mile</option>
                                             <option value="3">Within 3 miles</option>
                                             <option value="5">Within 5 miles</option>
                                             <option value="10">Within 10 miles</option>
                                             <option value="15">Within 15 miles</option>
                                             <option value="30">Within 30 miles</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label>Bedrooms</label>
                                          <select class="form-control basic-select" name="badroom">
                                             <option value="">No max</option>
                                             <option value="1">01</option>
                                             <option value="2">02</option>
                                             <option value="3">03</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label>Sort by</label>
                                          <select class="form-control basic-select" name="sortby">
                                             <option  value="">Most popular</option>
                                             <option  value="high">Highest price</option>
                                             <option value="low">Lowest price</option>
                                             <option value="reduced">Most reduced</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label>Floor area</label>
                                          <input class="form-control" placeholder="Type (sq ft)" name="floorarea">
                                          {{-- <select class="form-control basic-select" name="floor">
                                             <option>Select Floor</option>
                                             <option>01</option>
                                             <option>02</option>
                                             <option>03</option>
                                          </select> --}}
                                       </div>
                                    </div>
                                     <div class="form-row">
                                         <div class="form-group col-md-4">
                                          <label>Agent</label>
                                          <select class="form-control basic-select" name="agent">
                                             <option value="">Select Agent</option>
                                             @foreach($agentListSerch as $key => $value)
                                                <option value="{{ $value->id}}">{{ $value->username }}</option> 
                                             @endforeach
                                          </select>
                                       </div>
                                         <div class="form-group col-md-4">
                                          <label>Agencies</label>
                                          <select class="form-control basic-select" name="agencies">
                                             <option value="">Select Agencies</option>
                                             @foreach($agencyListSerch as $key => $value)
                                                <option value="{{ $value->id}}">{{ $value->username }}</option> 
                                             @endforeach
                                          </select>
                                       </div>
                                         <div class="form-group col-md-4">
                                          <label>Company</label>
                                          <select class="form-control basic-select" name="company">
                                             <option value="">Select Company</option>
                                             @foreach($companyListSerch as $key => $value)
                                                <option value="{{ $value->id}}">{{ $value->username }}</option> 
                                             @endforeach
                                          </select>
                                       </div>
                                     </div>
                                    <div class="form-row">
                                       <div class="form-group col-md-3">
                                          <label>Min Area (sq ft)</label>
                                          <input class="form-control" placeholder="Type (sq ft)" name="minarea">
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label>Max Area (sq ft)</label>
                                          <input class="form-control" placeholder="Type (sq ft)" name="maxarea">
                                       </div>
                                       <div class="form-group col-md-6 property-price-slider ">
                                          <label>Select Price Range</label>
                                          <input type="text" id="property-price-slider"  value="" name="price_range"/>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="d-md-none btn-block btn-mobile  m-3">
                                 <button class="btn btn-primary btn-block align-items-center" type="submit">
                                    <i class="fas fa-search mr-1"></i>
                                    <span>Search</span>
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
         <!--=================================
            Property Types -->
         <!--=================================
            location -->
        <!--  <section class="space-ptb">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="section-title text-center">
                        <h2>Find properties in these cities</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="row">
                         @if(@$homecity[0])
                        <div class="col-md-6 mb-4 mb-lg-0">
                            @php
                            $city = str_replace(' ','-',strtolower($homecity[0]['city_name']));
                            @endphp
                           <a href="{{ route("search",$city)}}">
                              <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url({{ asset('public/upload/home_city/'.$homecity[0]['images']) }});">
                                 <div class="location-item-info">
                                    <h5 class="location-item-title">{{ $homecity[0]['city_name'] }}</h5>
                                    <span class="location-item-list">{{ $homecity[0]['total_propeties'] }} Properties</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                         @endif
                         @if(@$homecity[1])
                        <div class="col-md-6 mb-4 mb-md-0">
                           @php
                            $city = str_replace(' ','-',strtolower($homecity[1]['city_name']));
                           @endphp
                           <a href="{{ route("search",$city)}}">
                              <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url({{ asset('public/upload/home_city/'.$homecity[1]['images']) }});">
                                 <div class="location-item-info">
                                    <h5 class="location-item-title">{{ $homecity[1]['city_name'] }}</h5>
                                    <span class="location-item-list">{{ $homecity[1]['total_propeties'] }} Properties</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                         @endif
                         @if(@$homecity[2])
                        <div class="col-lg-12 mt-0 mt-lg-4">
                            @php
                            $city = str_replace(' ','-',strtolower($homecity[2]['city_name']));
                            @endphp
                           <a href="{{ route("search",$city)}}">
                              <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url({{ asset('public/upload/home_city/'.$homecity[2]['images']) }});">
                                 <div class="location-item-info">
                                    <h5 class="location-item-title">{{ $homecity[2]['city_name'] }}</h5>
                                    <span class="location-item-list">{{ $homecity[2]['total_propeties'] }} Properties</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                         @endif
                     </div>
                  </div>
                   @if(@$homecity[3])
                  <div class="col-lg-6 mt-4 mt-lg-0">
                    @php
                    $city = str_replace(' ','-',strtolower($homecity[3]['city_name']));
                    @endphp
                     <a href="{{ route("search",$city)}}">
                        <div class="location-item location-item-big bg-overlay-gradient bg-holder" style="background-image: url({{ asset('public/upload/home_city/'.$homecity[3]['images']) }});">
                           <div class="location-item-info">
                              <h5 class="location-item-title">{{ $homecity[3]['city_name'] }} </h5>
                              <span class="location-item-list">{{ $homecity[3]['total_propeties'] }} Properties</span>
                           </div>
                        </div>
                     </a>
                  </div>
                    @endif
               </div>
            </div>
         </section> -->
         <!--=================================
            location -->
         <!--=================================
            Featured properties-->
         <section class="space-pb featured-property">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="section-title">
                        <h2>Featured properties</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="owl-carousel owl-nav-top-left" data-nav-arrow="true" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-space="15">
                        @foreach($feature_property as $key => $value)
          
                        @php
                        $imageCount = explode(',',$value['images']);
                        @endphp
                         <div class="item">
                           <div class="property-item">
                              <div class="property-image bg-overlay-gradient-04">
                                  <div class="feature_propertiess">
                                      <img class="img-fluid" src="{{ asset('public/upload/property_photo/'.$imageCount[0]) }}" alt="">
                                  </div>
                                 <div class="property-lable">
                                   <!--  <span class="badge badge-md badge-primary rent_label">{{ ucfirst($value['type']) }}</span> -->
                                    <span class="badge badge-md badge-info sale_label">{{ ucfirst($value['offer']) }} </span>
                                 </div>
                                 <!--<span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>-->
<!--                                 <div class="property-agent">
                                    <div class="property-agent-image">
                                       <img class="img-fluid" src="{{ asset('public/upload/userimage/'.$value['userimage']) }}" alt="">
                                    </div>
                                    <div class="property-agent-info">
                                       <a class="property-agent-name" href="#">{{ $value['username'] }}</a>
                                       <span class="d-block">{{ getTypeText($value['roles']) }}</span>
                                       <ul class="property-agent-contact list-unstyled">
                                          <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                                          <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                                       </ul>
                                    </div>
                                 </div>-->
<!--                                 <div class="property-agent-popup">
                                    <a href="#"><i class="fas fa-camera"></i> {{ count($imageCount) }}</a>
                                 </div>-->
                              </div>
                              <div class="property-details">
                                 <div class="property-details-inner">
                                    <h5 class="property-title"><a href="{{ route("property-details",$value['slug'])}}" target="_blank">{{ $value['title'] }} </a></h5>
                                    <!-- <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>{{ $value['address'] }}</span>
                                    <span class="property-agent-date"><i class="far fa-clock fa-md"></i>{{ humanTiming($value['created_at']) }}</span> -->
                                    <div class="property-price">${{ $value['price'] }}</div>
                                    <ul class="property-info list-unstyled d-flex">
                                       
                                       <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>
                                        <div class="property-det-wrap">     
                                       <p>sqft</p>
                                       <span>{{ $value['area'] }}</span>
                                       </div>
                                       </li>
                                       <li class="flex-fill property-bath"><i class="fas fa-bath"></i>
                                       <div class="property-det-wrap">
                                       <p>Bath</p>
                                       <span>{{ $value['bathroom'] }}</span>
                                       </div>
                                       </li>
                                       <li class="flex-fill property-bed"><i class="fas fa-bed"></i>
                                       <div class="property-det-wrap">
                                      <p> Bed</p>
                                       <span>{{ $value['badroom'] }}</span>
                                       </div>
                                       </li>
                                        <li class="flex-fill property-type"><i class="fas fa-tag"></i>
                                        <div class="property-det-wrap"> 
                                        <p> Type</p>
                                       <span>{{ $value['type'] }}</span>
                                        </div>
                                        </li>
                                       </div>
                                    </ul>
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
                        
                        @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="col-12 text-center mt-4">
                     <a class="btn btn-link" href="{{ route('property') }}"><i class="fas fa-plus"></i>View All Listings</a>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
            Featured properties-->
         <!--=================================
            about-->
         <section class="space-ptb bg-holder bg-overlay-black-70 buy_sell_banner" style="background-image: url({{ asset('public/frontend/assets/images/bg/01.jpg') }});">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-12 text-center">
                     <div class="section-title">
                        <span class="font-weight-bold d-block mb-3">Buy or sell</span>
                        <h2 class="text-white">Looking to buy a new property or sell an existing one? Real Villa provides an excellent solution!</h2>
                     </div>
                     <a class="btn btn-primary mb-2 mb-sm-0" href="#">Submit Property</a>
                     <a class="btn btn-white mb-2 mb-sm-0" href="#">Browse Properties</a>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
            about-->
         <!--=================================
            offering the best-->
         <!-- <section class="space-ptb">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="section-title">
                        <h2>We are offering the best deal this week</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="owl-carousel owl-nav-top-left" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
                        <div class="item">
                           <div class="property-item property-col-list mb-0 text-center">
                              <div class="row no-gutters">
                                 <div class="col-lg-6">
                                    <div class="property-image bg-overlay-gradient-04">
                                       <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/medium-img-01.jpg') }}" alt="">
                                       <div class="property-lable">
                                          <span class="badge badge-md badge-primary">Studio</span>
                                          <span class="badge badge-md badge-info">New </span>
                                       </div>
                                       <div class="property-agent">
                                          <div class="property-agent-image">
                                             <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/06.jpg') }}" alt="">
                                          </div>
                                          <div class="property-agent-info">
                                             <a class="property-agent-name" href="#">Michael Bean</a>
                                             <span class="d-block">Research</span>
                                             <ul class="property-agent-contact list-unstyled">
                                                <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                                                <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="property-agent-popup">
                                          <a href="#"><i class="fas fa-camera"></i> 02</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="property-details pt-4">
                                       <div class="property-details-inner">
                                          <h5 class="property-title"><a href="{{ route("property-details",'1')}}">184 lexington avenue</a></h5>
                                          <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Hamilton rd. willoughby, oh</span>
                                          <span class="property-agent-date"><i class="far fa-clock fa-md"></i>3 years ago</span>
                                          <p class="mb-0 d-none d-block mt-3">The first thing to remember about success is that it is a process – nothing more, nothing less. There is really no magic to it.</p>
                                          <div class="property-price">$236.00<span> / month</span> </div>
                                          <ul class="property-info list-unstyled d-flex">
                                             <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                                             <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                                             <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,657m</span></li>
                                          </ul>
                                          <div class="property-countdown mt-4 mb-3 mb-lg-0">
                                             <h5 class="mb-3">Deal ends in: </h5>
                                             <div class="countdown countdown-small">
                                                <span class="theme-color days">00</span>
                                                <p class="days_ref">days</p>
                                             </div>
                                             <div class="countdown countdown-small">
                                                <span class="theme-color hours">00</span>
                                                <p class="hours_ref">hours</p>
                                             </div>
                                             <div class="countdown countdown-small">
                                                <span class="theme-color minutes">00</span>
                                                <p class="minutes_ref">minutes</p>
                                             </div>
                                             <div class="countdown countdown-small">
                                                <span class="theme-color seconds">00</span>
                                                <p class="seconds_ref">seconds</p>
                                             </div>
                                          </div>
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
                        </div>
                        <div class="item">
                           <div class="property-item property-col-list mb-0 text-center">
                              <div class="row no-gutters">
                                 <div class="col-lg-6">
                                    <div class="property-image bg-overlay-gradient-04">
                                       <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/medium-img-02.jpg') }}" alt="">
                                       <div class="property-lable">
                                          <span class="badge badge-md badge-primary">Summer House</span>
                                          <span class="badge badge-md badge-info">Hot </span>
                                       </div>
                                       <div class="property-agent">
                                          <div class="property-agent-image">
                                             <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/04.jpg') }}" alt="">
                                          </div>
                                          <div class="property-agent-info">
                                             <a class="property-agent-name" href="#">Michael Bean</a>
                                             <span class="d-block">Research</span>
                                             <ul class="property-agent-contact list-unstyled">
                                                <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                                                <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="property-agent-popup">
                                          <a href="#"><i class="fas fa-camera"></i> 02</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="property-details pt-4">
                                       <div class="property-details-inner">
                                          <h5 class="property-title"><a href="{{ route("property-details",'1')}}">Awesome family home</a></h5>
                                          <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>West Division Street</span>
                                          <span class="property-agent-date"><i class="far fa-clock fa-md"></i>1 years ago</span>
                                          <p class="mb-0 d-none d-block mt-3">TThere are basically six key areas to higher achievement. Some people will tell you there are four while others may tell you there.</p>
                                          <div class="property-price">$125.00<span> / month</span> </div>
                                          <ul class="property-info list-unstyled d-flex">
                                             <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>3</span></li>
                                             <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>3</span></li>
                                             <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>1,215m</span></li>
                                          </ul>
                                          <div class="property-countdown mt-4 mb-3 mb-lg-0">
                                             <h5 class="mb-3">Deal ends in: </h5>
                                             <div class="countdown countdown-small">
                                                <span class="theme-color days">00</span>
                                                <p class="days_ref">days</p>
                                             </div>
                                             <div class="countdown countdown-small">
                                                <span class="theme-color hours">00</span>
                                                <p class="hours_ref">hours</p>
                                             </div>
                                             <div class="countdown countdown-small">
                                                <span class="theme-color minutes">00</span>
                                                <p class="minutes_ref">minutes</p>
                                             </div>
                                             <div class="countdown countdown-small">
                                                <span class="theme-color seconds">00</span>
                                                <p class="seconds_ref">seconds</p>
                                             </div>
                                          </div>
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
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
         <!--=================================
            offering the best -->
         <!--=================================
            Browse properties by location -->
         <section class="space-ptb bg-light browse-properties">
            <div class="container">
               <div class="row">
                  
                  <div class="col-lg-12 text-right show-propert-title ">
                     <a class="btn btn-link p-0 mt-1" href="{{ route('property') }}"> Show All Properties</a>
                  </div>
           
                     
                       
                           <div class="col-lg-6 col-sm-6  border-right">
                           <div class="section-title">
                              <h2>BROWSE PROPERTIES BY LOCATION</h2>
                           </div>
                              <ul class="list-unstyled mb-0 city-list">
                                  @if(count($property_location))
                                    @foreach($property_location as $value)
                                    @php
                                    $city = str_replace(' ','-',strtolower($value['city']));
                                    @endphp
                                    <li><a href="{{ route("search",$city)}}">{{ $value['city'] }} <span class="ml-auto">{{ $value['total'] }}</span> </a></li>
                                    @endforeach
                                  @endif

                              </ul>
                           </div>
                         
                           <div class="col-lg-6">
                              <div class="bg-holder py-sm-5" style="background-image: url({{ asset('public/frontend/assets/images/google-map.png') }});">
                                 <div class="d-flex align-items-center justify-content-center">
                                    <div class="counter">
                                       <span class="timer" data-to="{{ count($property_location) }}" data-speed="10000">{{ count($property_location) }}</span>
                                    </div>
                                    <div class="counter-detail ml-3 mt-2">
                                       <span>Wide range of</span>
                                       <h5>Property</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                       
                         </div>
                
            </div>
         </section>
         <!--=================================
            Browse properties by location -->
         <!--=================================
            agent -->
         <section class="space-ptb">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="section-title text-center">
                        <h2>Meet our agents</h2>
                     </div>
                  </div>
               </div>
               <div class="row">

                  @foreach($agentList as $key => $value)
                  <div class="col-md-6 mb-4">
                     <div class="agent agent-02">
                           <div class="agent-detail">
                              <div class="agent-avatar avatar avatar-xlll">
                                 <img class="img-fluid" src="{{ asset('public/upload/userimage/'.$value['userimage']) }}" alt="">
                              </div>
                              <div class="agent-info">
                              <h5 class="mb-0"> <a href="{{ route("agent-details", $value['id']) }}">{{ $value['username'] }}</a></h5>
                                 <span class="text-primary">{{ $value['designation'] }}</span>
                                 <p class=" mb-0">{{ $value['about'] }}</p>
                                  <div class="agent-button">
                              <a class="btn btn-light btn-block" href="{{ route("agent-details",$value['id'])}}">View Profile</a>
                           </div>
                              </div>

                           </div>
                           
                        </div>
                     </div>
                  @endforeach
                  
                  
               </div>
            </div>
         </section>
         <!--=================================
            agent -->
         <!--=================================
            Company-->
         <!-- <section class="space-ptb">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="section-title text-center">
                        <h2>Construction Company</h2>
                     </div>
                  </div>
               </div>
               <div class="row">

                  @foreach($companyList as $key => $value)
                  <div class="col-md-6 mb-4">
                     <div class="agent agent-02">
                           <div class="agent-detail">
                              <div class="agent-avatar avatar avatar-xlll">
                                 <img class="img-fluid rounded-circle" src="{{ asset('public/upload/userimage/'.$value['userimage']) }}" alt="">
                              </div>
                              <div class="agent-info">
                              <h5 class="mb-0"> <a href="{{ route("agent-details", $value['id']) }}">{{ $value['username'] }}</a></h5>
                                 <p class="mt-3 mb-0">{{ $value['about'] }}</p>
                              </div>
                           </div>
                           <div class="agent-button">
                              <a class="btn btn-light btn-block" href="{{ route("company-details",$value['id'])}}">View Profile</a>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
         </section> -->
         <!--=================================
            Company -->
         <!--=================================
            Feature -->
         <section class="space-ptb bg-light">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-12">
                     <div class="section-title text-center">
                        <h2>Plenty of reasons to choose us</h2>
                     </div>
                  </div>
<!--                  <div class="col-lg-6">
                     <div class="popup-video mb-4 text-lg-right">
                        <a class="popup-icon popup-youtube d-flex justify-content-lg-end" href="https://www.youtube.com/watch?v=LgvseYYhqU0"> <span class="pr-3"> Play Video</span> <i class="flaticon-play-button"></i> </a>
                     </div>
                  </div>-->
               </div>
               <div class="row">
                  <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                     <div class="feature-info feature-info-02">
                        <div class="feature-info-detail">
                           <div class="feature-info-icon">
                              <i class="flaticon-like"></i>
                           </div>
                           <div class="feature-info-content">
                              <h6 class="mb-3 feature-info-title">Excellent reputation</h6>
                              <p>Our comprehensive database of listings and market info give the most accurate view of the market and your home value.</p>
                           </div>
                           <!-- <div class="feature-info-button">
                              <a class="btn btn-primary btn-block" href="#">See more Detail</a>
                           </div> -->
                        </div>
                        <div class="feature-info-bg bg-holder" style="background-image: linear-gradient(to bottom ,rgb(131 131 131 / 57%) 12%,rgb(16 92 114 )),url(http://localhost/realestate/public/frontend/assets/images/property/grid/01.jpg);"></div>

                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                     <div class="feature-info feature-info-02">
                        <div class="feature-info-detail">
                           <div class="feature-info-icon">
                              <i class="flaticon-agent"></i>
                           </div>
                           <div class="feature-info-content">
                              <h6 class="mb-3 feature-info-title">Best local agents</h6>
                              <p>You are just minutes from joining with the best agents who are fired up about helping you Buy or sell.</p>
                           </div>
                          <!--  <div class="feature-info-button">
                              <a class="btn btn-primary btn-block" href="#">See more Detail</a>
                           </div> -->
                        </div>
                        <div class="feature-info-bg bg-holder " style="background-image: linear-gradient(to bottom ,rgb(131 131 131 / 57%) 12%,rgb(16 92 114 )),url(http://localhost/realestate/public/frontend/assets/images/property/grid/02.jpg);"></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
                     <div class="feature-info feature-info-02">
                        <div class="feature-info-detail">
                           <div class="feature-info-icon">
                              <i class="flaticon-like-1"></i>
                           </div>
                           <div class="feature-info-content">
                              <h6 class="mb-3 feature-info-title">Peace of mind</h6>
                              <p>Rest guaranteed that your agent and their expert team are handling every detail of your transaction from start to end.</p>
                           </div>
                           <!-- <div class="feature-info-button">
                              <a class="btn btn-primary btn-block" href="#">See more Detail</a>
                           </div> -->
                        </div>
                        <div class="feature-info-bg bg-holder " style="background-image:linear-gradient(to bottom ,rgb(131 131 131 / 57%) 12%,rgb(16 92 114 )),url(http://localhost/realestate/public/frontend/assets/images/property/grid/03.jpg);"></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="feature-info feature-info-02">
                        <div class="feature-info-detail">
                           <div class="feature-info-icon">
                              <i class="flaticon-house-1"></i>
                           </div>
                           <div class="feature-info-content">
                              <h6 class="mb-3 feature-info-title">Tons of options</h6>
                              <p>Discover a place you’ll love to live in. Choose from our vast inventory and choose your desired house.</p>
                           </div>
                           <!-- <div class="feature-info-button">
                              <a class="btn btn-primary btn-block" href="#">See more Detail</a>
                           </div> -->
                        </div>
                        <div class="feature-info-bg bg-holder" style="background-image: linear-gradient(to bottom ,rgb(131 131 131 / 57%) 12%,rgb(16 92 114 )),url(http://localhost/realestate/public/frontend/assets/images/property/grid/04.jpg);"></div>


                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
            Feature -->


            <!--=================================
            testimonial -->
        <!--  <section class="space-pb">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-title">
                        <h2>Testimonials</h2>
                     </div>

                     
                     <div class="owl-carousel owl-nav-top-left" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
                        
                        @foreach($review as $key => $value)
                           <div class="item">
                              <div class="testimonial-02">
                                 <div class="testimonial-content">
                                 <p><i class="fas fa-quote-right quotes"></i>{{ $value->review }}</p>
                                 </div>
                                 <div class="testimonial-author">
                                    <div class="testimonial-avatar avatar avatar-lg mr-3">
                                       <img class="img-fluid rounded-circle" src="{{ asset('public/upload/userimage/'.$value->userimage) }}" alt="">
                                    </div>
                                    <div class="testimonial-name">
                                       <h6 class="text-primary mb-1">{{ $value->username }}</h6>
                                       <span>{{ $value->about }}</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        @endforeach
                        
                       
                     </div>
                  </div>
                  
               </div>
            </div>
         </section> -->
         <!--=================================
            testimonial -->

         <!--=================================
            News, tips & articles -->
        <!--  <section class="space-ptb">
            <div class="container">

               <div class="row">
                  <div class="col-12">
                     <div class="section-title text-center">
                        <h2>News, tips & articles</h2>
                     </div>
                  </div>
               </div>

               <div class="row">
                  @foreach($blogDetails as $key => $value)
                  <div class="col-lg-12">
                     {!!  $value->description !!}
                     <div class="blog-post">
                        <div class="blog-post-content">
                          <div class="blog-post-details">
                            <div class="blog-post-link mt-4">
                              <a class="btn btn-link p-0" href="{{ route("blog-details",'1')}}"> Continue read</a>
                            </div>
                          </div>
                          <div class="blog-post-footer">
                            <div class="blog-post-time">
                            <a href="#"> <i class="far fa-clock"></i>{{ date("d F, Y",strtotime( $value->created_at )) }}</a>
                            </div>
                            <div class="blog-post-author">
                              <span> By {{  $value->authorName }} </span>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </section> -->

         <!--=================================
            News, tips & articles -->


         

            
         <!--=================================
            newsletter -->
         
         <!--=================================
            newsletter -->
@endsection
<?php
foreach ($property_location as $key => $value) {
    unset($value['total']);
    $property_location[$key] = $value;  
}

?>
<script>
 <?php   
 if(!empty($property_location)){ ?>
    var data = '<?php echo json_encode($property_location); ?>';
<?php } else { ?>
     var data = '';
<?php }  ?>

</script> 
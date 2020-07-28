@extends('frontend.layout.layout')
@section('content')
<!--=================================
         banner -->
         <section class="position-relative">
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
         </section>
         <!--=================================
            banner -->
         <!--=================================
            property Type -->
         <section class="property-search-field-top position-reletive">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="property-search-field bg-white">
                        <div class="property-search-item">
                           <form class="form-row basic-select-wrapper">
                              <div class="form-group col-lg col-md-6">
                                 <label>Property type</label>
                                 <select class="form-control basic-select buldingType">
                                    <option>All Type</option>
                                    <option>Villa</option>
                                    <option>Apartment Building</option>
                                    <option>Commercial</option>
                                    <option>Office</option>
                                    <option>Residential</option>
                                    <option>Shop</option>
                                    <option>Apartment</option>
                                    <option value="project">Project</option>
                                 </select>
                              </div>
                              <div class="form-group col-lg col-md-6">
                                 <label>Status</label>
                                 <select class="form-control basic-select buldingStatus">
                                    <option>For Rent</option>
                                    <option>For Sale</option>
                                 </select>
                              </div>
                              <div class="form-group d-flex col-lg-5">
                                 <div class="form-group-search">
                                    <label>Location</label>
                                    <div class="d-flex align-items-center">
                                        <i class="far fa-compass mr-1"></i>
                                        <input type="text" id="autoComplate" placeholder="Search Location" class="form-control" />
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
                                          <select class="form-control basic-select">
                                             <option>This area only</option>
                                             <option>Within 1 mile</option>
                                             <option>Within 3 miles</option>
                                             <option>Within 5 miles</option>
                                             <option>Within 10 miles</option>
                                             <option>Within 15 miles</option>
                                             <option>Within 30 miles</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label>Bedrooms</label>
                                          <select class="form-control basic-select">
                                             <option>No max</option>
                                             <option>01</option>
                                             <option>02</option>
                                             <option>03</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label>Sort by</label>
                                          <select class="form-control basic-select">
                                             <option>Most popular</option>
                                             <option>Highest price</option>
                                             <option>Lowest price</option>
                                             <option>Most reduced</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label>Floor</label>
                                          <select class="form-control basic-select">
                                             <option>Select Floor</option>
                                             <option>01</option>
                                             <option>02</option>
                                             <option>03</option>
                                          </select>
                                       </div>
                                    </div>
                                     <div class="form-row">
                                         <div class="form-group col-md-4">
                                          <label>Agent</label>
                                          <select class="form-control basic-select">
                                             <option>Select Agent</option>
                                             <option>Agent1</option>
                                             <option>Agent2</option>
                                             <option>Agent3</option>
                                          </select>
                                       </div>
                                         <div class="form-group col-md-4">
                                          <label>Agencies</label>
                                          <select class="form-control basic-select">
                                             <option>Select Agencies</option>
                                             <option>Agencies1</option>
                                             <option>Agencies2</option>
                                             <option>Agencies3</option>
                                          </select>
                                       </div>
                                         <div class="form-group col-md-4">
                                          <label>Company</label>
                                          <select class="form-control basic-select">
                                             <option>Select Company</option>
                                             <option>Company1</option>
                                             <option>Company2</option>
                                             <option>Company3</option>
                                          </select>
                                       </div>
                                     </div>
                                    <div class="form-row">
                                       <div class="form-group col-md-3">
                                          <label>Min Area (sq ft)</label>
                                          <input class="form-control" placeholder="Type (sq ft)">
                                       </div>
                                       <div class="form-group col-md-3">
                                          <label>Max Area (sq ft)</label>
                                          <input class="form-control" placeholder="Type (sq ft)">
                                       </div>
                                       <div class="form-group col-md-6 property-price-slider ">
                                          <label>Select Price Range</label>
                                          <input type="text" id="property-price-slider" name="example_name" value="" />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="d-md-none btn-block btn-mobile  m-3">
                                 <button class="btn btn-primary btn-block align-items-center" type="submit"><i class="fas fa-search mr-1"></i><span>Search</span></button>
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
         <!--=================================
            location -->
         <section class="space-ptb">
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
                        <div class="col-md-6 mb-4 mb-lg-0">
                           <a href="property-grid.html">
                              <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url({{ asset('public/frontend/assets/images/location/01.jpg') }});">
                                 <div class="location-item-info">
                                    <h5 class="location-item-title">Mumbai</h5>
                                    <span class="location-item-list">10 Properties</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                           <a href="property-grid.html">
                              <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url({{ asset('public/frontend/assets/images/location/02.jpg') }});">
                                 <div class="location-item-info">
                                    <h5 class="location-item-title">Los angeles</h5>
                                    <span class="location-item-list">14 Properties</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-12 mt-0 mt-lg-4">
                           <a href="property-grid.html">
                              <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url({{ asset('public/frontend/assets/images/location/04.jpg') }});">
                                 <div class="location-item-info">
                                    <h5 class="location-item-title">Miami</h5>
                                    <span class="location-item-list">22 Properties</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 mt-4 mt-lg-0">
                     <a href="property-grid.html">
                        <div class="location-item location-item-big bg-overlay-gradient bg-holder" style="background-image: url({{ asset('public/frontend/assets/images/location/03.jpg') }});">
                           <div class="location-item-info">
                              <h5 class="location-item-title">San francisco </h5>
                              <span class="location-item-list">29 Properties</span>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
            location -->
         <!--=================================
            Featured properties-->
         <section class="space-pb">
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
                        <div class="item">
                           <div class="property-item">
                              <div class="property-image bg-overlay-gradient-04">
                                 <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/01.jpg') }}" alt="">
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
                                    <a href="#"><i class="fas fa-camera"></i> 06</a>
                                 </div>
                              </div>
                              <div class="property-details">
                                 <div class="property-details-inner">
                                    <h5 class="property-title"><a href="{{ route("property-details",'1')}}">Ample apartment at last floor </a></h5>
                                    <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Virginia drive temple hills</span>
                                    <span class="property-agent-date"><i class="far fa-clock fa-md"></i>10 days ago</span>
                                    <div class="property-price">$150.00<span> / month</span> </div>
                                    <ul class="property-info list-unstyled d-flex">
                                       <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>1</span></li>
                                       <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                                       <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>145m</span></li>
                                    </ul>
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
                        <div class="item">
                           <div class="property-item">
                              <div class="property-image bg-overlay-gradient-04">
                                 <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/02.jpg') }}" alt="">
                                 <div class="property-lable">
                                    <span class="badge badge-md badge-primary">Apartment</span>
                                    <span class="badge badge-md badge-info">New </span>
                                 </div>
                                 <div class="property-agent">
                                    <div class="property-agent-image">
                                       <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/02.jpg') }}" alt="">
                                    </div>
                                    <div class="property-agent-info">
                                       <a class="property-agent-name" href="#">John doe</a>
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
                              <div class="property-details">
                                 <div class="property-details-inner">
                                    <h5 class="property-title"><a href="{{ route("property-details",'1')}}">Awesome family home</a></h5>
                                    <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Vermont dr. hephzibah</span>
                                    <span class="property-agent-date"><i class="far fa-clock fa-md"></i>2 months ago</span>
                                    <div class="property-price">$326.00<span> / month</span> </div>
                                    <ul class="property-info list-unstyled d-flex">
                                       <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                                       <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>3</span></li>
                                       <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>215m</span></li>
                                    </ul>
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
                        <div class="item">
                           <div class="property-item">
                              <div class="property-image bg-overlay-gradient-04">
                                 <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/03.jpg') }}" alt="">
                                 <div class="property-lable">
                                    <span class="badge badge-md badge-primary">Summer House</span>
                                    <span class="badge badge-md badge-info">Hot </span>
                                 </div>
                                 <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
                                 <div class="property-agent">
                                    <div class="property-agent-image">
                                       <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/03.jpg') }}" alt="">
                                    </div>
                                    <div class="property-agent-info">
                                       <a class="property-agent-name" href="#">Felica queen</a>
                                       <span class="d-block">Investment</span>
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
                              <div class="property-details">
                                 <div class="property-details-inner">
                                    <h5 class="property-title"><a href="{{ route("property-details",'1')}}">Contemporary apartment</a></h5>
                                    <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Newport st. mebane, nc</span>
                                    <span class="property-agent-date"><i class="far fa-clock fa-md"></i>6 months ago</span>
                                    <div class="property-price">$658.00<span> / month</span> </div>
                                    <ul class="property-info list-unstyled d-flex">
                                       <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>3</span></li>
                                       <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>4</span></li>
                                       <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,189m</span></li>
                                    </ul>
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
                        <div class="item">
                           <div class="property-item">
                              <div class="property-image bg-overlay-gradient-04">
                                 <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/04.jpg') }}" alt="">
                                 <div class="property-lable">
                                    <span class="badge badge-md badge-primary">Duplex</span>
                                    <span class="badge badge-md badge-info">Hot </span>
                                 </div>
                                 <div class="property-agent">
                                    <div class="property-agent-image">
                                       <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/04.jpg') }}" alt="">
                                    </div>
                                    <div class="property-agent-info">
                                       <a class="property-agent-name" href="#">Sara lisbon</a>
                                       <span class="d-block">Construction</span>
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
                              <div class="property-details">
                                 <div class="property-details-inner">
                                    <h5 class="property-title"><a href="{{ route("property-details",'1')}}">Family home for sale</a></h5>
                                    <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Border st. nicholasville, ky</span>
                                    <span class="property-agent-date"><i class="far fa-clock fa-md"></i>12 months ago</span>
                                    <div class="property-price">$485.00<span> / month</span> </div>
                                    <ul class="property-info list-unstyled d-flex">
                                       <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                                       <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>1</span></li>
                                       <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>2,356m</span></li>
                                    </ul>
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
                  <div class="col-12 text-center mt-4">
                     <a class="btn btn-link" href="property-list.html"><i class="fas fa-plus"></i>View All Listings</a>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
            Featured properties-->
         <!--=================================
            about-->
         <section class="space-ptb bg-holder bg-overlay-black-70" style="background-image: url({{ asset('public/frontend/assets/images/bg/01.jpg') }});">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-8 text-center">
                     <div class="section-title">
                        <span class="text-primary font-weight-bold d-block mb-3">Buy or sell</span>
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
         <section class="space-ptb">
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
         </section>
         <!--=================================
            offering the best -->
         <!--=================================
            Browse properties by location -->
         <section class="space-ptb bg-light">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8">
                     <div class="section-title">
                        <h2>Browse properties by location</h2>
                     </div>
                  </div>
                  <div class="col-lg-4 text-lg-right mt-lg-2 mb-lg-0 mb-3">
                     <a class="btn btn-link p-0 mt-1" href="{{ route('property') }}"> Show All Properties</a>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="location-list">
                        <div class="row align-items-center">
                           <div class="col-lg-4 col-sm-6  border-right">
                              <ul class="list-unstyled mb-0">
                                  @if(count($property_location))
                                    @foreach($property_location as $value)
                                    @php
                                    $city = str_replace(' ','-',strtolower($value['city']));
                                    @endphp
                                    <li><a href="{{ route("search",$city)}}">{{ $value['city'] }} <span class="ml-auto">{{ $value['total'] }}</span> </a></li>
                                    @endforeach
                                  @endif
<!--                                 <li><a href="property-list.html">Belgium <span class="ml-auto">02</span> </a></li>
                                 <li><a href="property-list.html">Brazil <span class="ml-auto">02</span> </a></li>
                                 <li><a href="property-list.html">Central African Republic <span class="ml-auto">02</span> </a></li>
                                 <li><a href="property-list.html">Cook/ Chef <span class="ml-auto">02</span> </a></li>
                                 <li><a href="property-list.html">Dominica <span class="ml-auto">02</span> </a></li>
                                 <li><a href="property-list.html">Egypt <span class="ml-auto">02</span> </a></li>-->
                              </ul>
                           </div>
                           <div class="col-lg-4 col-sm-6">
<!--                              <ul class="list-unstyled mb-0">
                                 <li><a href="property-list.html">France <span class="ml-auto">02</span> </a></li>
                                 <li><a href="property-list.html">Greece <span class="ml-auto">02</span> </a></li>
                                 <li><a href="property-list.html">Hawaii* <span class="ml-auto">02</span> </a></li>
                                 <li><a href="property-list.html">India <span class="ml-auto">02</span> </a></li>
                                 <li><a href="property-list.html">Italy <span class="ml-auto">02</span> </a></li>
                                 <li><a href="property-list.html">Jordan <span class="ml-auto">02</span> </a></li>
                                 <li><a href="property-list.html">Kazakhstan <span class="ml-auto">02</span> </a></li>
                              </ul>-->
                           </div>
                           <div class="col-lg-4">
                              <div class="bg-holder py-sm-5" style="background-image: url({{ asset('public/frontend/assets/images/google-map.png') }});">
                                 <div class="d-flex align-items-center justify-content-center">
                                    <div class="counter">
                                       <span class="timer text-primary" data-to="{{ count($property_location) }}" data-speed="10000">{{ count($property_location) }}</span>
                                    </div>
                                    <div class="ml-3 mt-2">
                                       <span>Wide range of</span>
                                       <h5>Property</h5>
                                    </div>
                                 </div>
                              </div>
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
                  <div class="col-md-6 mb-4">
                     <div class="agent agent-02">
                        <div class="agent-detail">
                           <div class="agent-avatar avatar avatar-xlll">
                              <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/01.jpg') }}" alt="">
                           </div>
                           <div class="agent-info">
                              <h5 class="mb-0"> <a href="{{ route("agent-details",'1')}}">John doe</a></h5>
                              <span class="text-primary">Land development</span>
                              <p class="mt-3 mb-0">If success is a process with a number of defined steps, then it is just like any other process. </p>
                           </div>
                        </div>
                        <div class="agent-button">
                           <a class="btn btn-light btn-block" href="{{ route("agent-details",'1')}}">View Profile</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 mb-4">
                     <div class="agent agent-02">
                        <div class="agent-detail">
                           <div class="agent-avatar avatar avatar-xlll">
                              <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/02.jpg') }}" alt="">
                           </div>
                           <div class="agent-info">
                              <h5 class="mb-0"> <a href="{{ route("agent-details",'1')}}">Felica queen</a></h5>
                              <span class="text-primary">Construction</span>
                              <p class="mt-3 mb-0">Making a decision to do something – this is the first step. We all know that nothing moves until someone.</p>
                           </div>
                        </div>
                        <div class="agent-button">
                           <a class="btn btn-light btn-block" href="{{ route("agent-details",'1')}}">View Profile</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 mb-4 mb-md-0">
                     <div class="agent agent-02">
                        <div class="agent-detail">
                           <div class="agent-avatar avatar avatar-xlll">
                              <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/03.jpg') }}" alt="">
                           </div>
                           <div class="agent-info">
                              <h5 class="mb-0"> <a href="{{ route("agent-details",'1')}}">Joana williams</a></h5>
                              <span class="text-primary">Founder & CEO</span>
                              <p class="mt-3 mb-0">So, make the decision to move forward. Commit your decision to paper, just to bring it into focus.</p>
                           </div>
                        </div>
                        <div class="agent-button">
                           <a class="btn btn-light btn-block" href="{{ route("agent-details",'1')}}">View Profile</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="agent agent-02">
                        <div class="agent-detail">
                           <div class="agent-avatar avatar avatar-xlll">
                              <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/04.jpg') }}" alt="">
                           </div>
                           <div class="agent-info">
                              <h5 class="mb-0"> <a href="{{ route("agent-details",'1')}}">Paul flavius</a></h5>
                              <span class="text-primary">Company Agent</span>
                              <p class="mt-3 mb-0">You will sail along until you collide with an immovable object, after which you will sink.</p>
                           </div>
                        </div>
                        <div class="agent-button">
                           <a class="btn btn-light btn-block" href="{{ route("agent-details",'1')}}">View Profile</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
            agent -->
         <!--=================================
            Feature -->
         <section class="space-ptb bg-light">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="section-title">
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
                           <div class="feature-info-button">
                              <a class="btn btn-light btn-block" href="#">Read more</a>
                           </div>
                        </div>
                        <div class="feature-info-bg bg-holder bg-overlay-black-70" style="background-image: url({{ asset('public/frontend/assets/images/property/grid/01.jpg') }});"></div>
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
                           <div class="feature-info-button">
                              <a class="btn btn-light btn-block" href="#">Read more</a>
                           </div>
                        </div>
                        <div class="feature-info-bg bg-holder bg-overlay-black-70" style="background-image: url({{ asset('public/frontend/assets/images/property/grid/02.jpg') }});"></div>
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
                           <div class="feature-info-button">
                              <a class="btn btn-light btn-block" href="#">Read more</a>
                           </div>
                        </div>
                        <div class="feature-info-bg bg-holder bg-overlay-black-70" style="background-image: url({{ asset('public/frontend/assets/images/property/grid/03.jpg') }});"></div>
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
                           <div class="feature-info-button">
                              <a class="btn btn-light btn-block" href="#">Read more</a>
                           </div>
                        </div>
                        <div class="feature-info-bg bg-holder bg-overlay-black-70" style="background-image: url({{ asset('public/frontend/assets/images/property/grid/04.jpg') }});"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
            Feature -->
         <!--=================================
            News, tips & articles -->
         <section class="space-ptb">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="section-title text-center">
                        <h2>News, tips & articles</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4">
                     <div class="blog-post">
                        <div class="blog-post-image">
                           <img class="img-fluid" src="{{ asset('public/frontend/assets/images/blog/01.jpg') }}" alt="">
                        </div>
                        <div class="blog-post-content">
                           <div class="blog-post-details">
                              <div class="blog-post-category">
                                 <a class="mb-3" href="#"><strong>Home improvement</strong></a>
                              </div>
                              <div class="blog-post-title">
                                 <h5><a href="{{ route("blog-details",'1')}}">7 pieces of advice to newbies</a></h5>
                              </div>
                              <div class="blog-post-description">
                                 <p class="mb-0">You are going on a cruise, but when the ship sets sail, you discover.</p>
                              </div>
                           </div>
                           <div class="blog-post-footer">
                              <div class="blog-post-time">
                                 <a href="#"> <i class="far fa-clock"></i>02 Jan 2019</a>
                              </div>
                              <div class="blog-post-author">
                                 <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" alt="">Sara lisbon </a> </span>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 mt-4 mt-lg-0">
                     <div class="blog-post">
                        <div class="blog-post-image">
                           <img class="img-fluid" src="{{ asset('public/frontend/assets/images/blog/02.jpg') }}" alt="">
                        </div>
                        <div class="blog-post-content">
                           <div class="blog-post-details">
                              <div class="blog-post-category">
                                 <a class="mb-3" href="#"><strong>Tips and advice</strong></a>
                              </div>
                              <div class="blog-post-title">
                                 <h5><a href="{{ route("blog-details",'1')}}">Where to Invest in Real Estate</a></h5>
                              </div>
                              <div class="blog-post-description">
                                 <p class="mb-0">You will sail along until you collide with an immovable object.</p>
                              </div>
                           </div>
                           <div class="blog-post-footer">
                              <div class="blog-post-time">
                                 <a href="#"> <i class="far fa-clock"></i>14 Feb 2019</a>
                              </div>
                              <div class="blog-post-author">
                                 <span> By 
                                    <a href="#"> 
                                       <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/02.jpg') }}" alt="">Anne Smith
                                    </a> </span>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 mt-4 mt-lg-0">
                     <div class="blog-post">
                        <div class="blog-post-image">
                           <img class="img-fluid" src="{{ asset('public/frontend/assets/images/blog/03.jpg') }}" alt="">
                        </div>
                        <div class="blog-post-content">
                           <div class="blog-post-details">
                              <div class="blog-post-category">
                                 <a class="mb-3" href="#"><strong>Market trends</strong></a>
                              </div>
                              <div class="blog-post-title">
                                 <h5><a href="{{ route("blog-details",'1')}}">Cutting your losses in Real Estate</a></h5>
                              </div>
                              <div class="blog-post-description">
                                 <p class="mb-0">Trying to go through life without clarity is similar to sailing.</p>
                              </div>
                           </div>
                           <div class="blog-post-footer">
                              <div class="blog-post-time">
                                 <a href="#"> <i class="far fa-clock"></i>30 March 2019</a>
                              </div>
                              <div class="blog-post-author">
                                 <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/03.jpg') }}" alt="">Alice Williams</a> </span>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
            News, tips & articles -->
         <!--=================================
            testimonial -->
         <section class="space-pb">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-title">
                        <h2>Testimonials</h2>
                     </div>
                     <div class="owl-carousel owl-nav-top-left" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
                        <div class="item">
                           <div class="testimonial-02">
                              <div class="testimonial-content">
                                 <p><i class="fas fa-quote-right quotes"></i>Oliver always had a smile and was so quick to answer and get the job done.  I'll definitely suggest you to anyone we know who is selling or wanting to purchase a home. He is the best!</p>
                              </div>
                              <div class="testimonial-author">
                                 <div class="testimonial-avatar avatar avatar-lg mr-3">
                                    <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" alt="">
                                 </div>
                                 <div class="testimonial-name">
                                    <h6 class="text-primary mb-1">Michael Bean</h6>
                                    <span>Hamilton Rd. Willoughby</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="testimonial-02">
                              <div class="testimonial-content">
                                 <p><i class="fas fa-quote-right quotes"></i>Jennifer & Dave were both instructive and very valuable in making my decision. I would Surly recommend them to anyone looking for a hassle free and efficient real estate experience.</p>
                              </div>
                              <div class="testimonial-author">
                                 <div class="testimonial-avatar avatar avatar-lg mr-3">
                                    <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/avatar/02.jpg') }}" alt="">
                                 </div>
                                 <div class="testimonial-name">
                                    <h6 class="text-primary mb-1">Isabelle</h6>
                                    <span>West Division Street</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </section>
         <!--=================================
            testimonial -->
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
<?php
foreach ($property_location as $key => $value) {
    unset($value['total']);
    $property_location[$key] = $value;  
}

?>
<script>
var data = '<?php echo json_encode($property_location); ?>';
</script>
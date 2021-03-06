@extends('frontend.layout.layout')
@section('content')
<style>
        .ml-auto > .fa-chevron-down:before { 
            background-image: url('../public/frontend/assets/images/down1.png');
    background-size: 20px 20px;
    display: inline-block;
    width: 20px; 
    height: 20px;
    content:"";
        }
.select2-container--default .select2-selection--single .select2-selection__arrow:before{
    background-image: url('../public/frontend/assets/images/down.png');
    background-size: 15px 15px;
    display: inline-block;
    width: 15px; 
    height: 15px;
    content:"";
}

.short-by > .select2-container--default .select2-selection--single .select2-selection__arrow:before{
    background-image: url('../public/frontend/assets/images/down1.png');
    background-size: 15px 15px;
    display: inline-block;
    width: 15px; 
    height: 15px;
    content:unset;
}
    </style>

<!--=================================
Listing – grid view -->
<section class="space-ptb mt-100">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="section-title mb-3 mb-lg-4">
            <h2><span class="text-primary">{{ count ($property) }}</span> Results</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="property-filter-tag">
            <ul class="list-unstyled">
              <li><a href="#">Summer House <i class="fas fa-times-circle"></i> </a></li>
              <li><a class="filter-clear" href="#">Reset Search <i class="fas fa-redo-alt"></i> </a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 mb-5 mb-lg-0 order-lg-1 col-md-12 order-md-12 order-2">
          <div class="sidebar">
            <div class="widget">
              <div class="widget-title widget-collapse">
                <h6>Advanced filter</h6>
                <a class="ml-auto" data-toggle="collapse" href="#filter-property" role="button" aria-expanded="false" aria-controls="filter-property"> <i class="fas fa-chevron-down"></i> </a>
              </div>
              <div class="collapse show" id="filter-property">
                <form class="mt-3" method="GET" action="/search">
                  <div class="input-group mb-2 select-border">
                    <select class="form-control basic-select buldingType" name="property_type">
                      @foreach($property_type as $key => $value)
                        <option value="{{ $value->type }}">{{ $value->type }}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="input-group mb-2 select-border">
                    <select class="form-control basic-select buldingStatus" name="property_status">
                        <option value="">Status</option>.
                        <option value="rent" >For Rent</option>
                        <option value="sale">For Sale</option>
                    </select>
                  </div>
                  <div class="input-group mb-2 select-border">
                    <select class="form-control basic-select" name="badroom">
                      <option value="">Bedrooms</option>
                      <option value="1">01</option>
                      <option value="2">02</option>
                      <option value="3">03</option>
                    </select>
                  </div>
                  <div class="input-group mb-2 select-border">
                    <select class="form-control basic-select" name="sortby">
                      <option value="">Sort by</option>
                      <!--<option>Most popular</option>-->
                      <option  value="high">Highest price</option>
                      <option value="low">Lowest price</option>
                    </select>
                  </div>
<!--                  <div class="input-group mb-2 select-border">
                    <select class="form-control basic-select">
                      <option>Select Floor</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                    </select>
                  </div>-->
                  <div class="input-group mb-2 sqt-ft">
                    <input class="form-control" placeholder="Min Area Type (sq ft)" name="minarea">
                  </div>
                  <div class="input-group mb-2 sqt-ft">
                    <input class="form-control" placeholder="Max Area Type (sq ft)" name="maxarea">
                  </div>
                   <div class="form-group property-price-slider mt-3">
                    <label>Select Price Range (sq ft)</label>
                    <input type="text" id="property-price-slider" name="price_range" value="" />
                  </div>
                  <div class="input-group mb-2">
                    <button class="btn btn-primary btn-block align-items-center" type="submit"><i class="fas fa-filter mr-1"></i><span class="filter-head">Filter</span></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="widget">
              <div class="widget-title widget-collapse">
                <h6>Status of property</h6>
                <a class="ml-auto" data-toggle="collapse" href="#status-property" role="button" aria-expanded="false" aria-controls="status-property"> <i class="fas fa-chevron-down"></i> </a>
              </div>
              <div class="collapse show" id="status-property">
                <ul class="list-unstyled mb-0 pt-3">
                  <li><a href="#">For rent<span class="ml-auto">({{ $final['rent'] }})</span></a></li>
                  <li><a href="#">For Sale<span class="ml-auto">({{ $final['sale'] }})</span></a></li>
                </ul>
              </div>
            </div>
            <div class="widget">
              <div class="widget-title widget-collapse">
                <h6>Type of property</h6>
                <a class="ml-auto" data-toggle="collapse" href="#type-property" role="button" aria-expanded="false" aria-controls="type-property"> <i class="fas fa-chevron-down"></i> </a>
              </div>
              <div class="collapse show" id="type-property">
                <ul class="list-unstyled mb-0 pt-3">
                  <li><a href="#">Apartment<span class="ml-auto">({{ $final['appratment'] }})</span></a></li>
                  <li><a href="#">Commercial<span class="ml-auto">({{ $final['commercial'] }})</span></a></li>
                  <li><a href="#">Residential<span class="ml-auto">({{ $final['residential'] }})</span></a></li>
                  <li><a href="#">Shop<span class="ml-auto">({{ $final['shop'] }})</span></a></li>
                  <li><a href="#">Villa<span class="ml-auto">({{ $final['villa'] }})</span></a></li>
                  <li><a href="#">Office<span class="ml-auto">({{ $final['office'] }})</span></a></li>
                </ul>
              </div>
            </div>
            <div class="widget mortage-calc">
              <div class="widget-title">
                <h6>Mortgage calculator</h6>
              </div>
              <form>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                  </div>
                  <input type="text" class="form-control amount" placeholder="Total Amount">
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                  </div>
                  <input type="text" class="form-control downPayment" id="inlineFormInputGroup" placeholder="Down Payment">
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-percent"></i></div>
                  </div>
                  <input type="text" class="form-control rateofintrest" placeholder="Interest Rate">
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                  </div>
                  <input type="text" class="form-control loanyear" placeholder="Loan Term (Years)">
                </div>
                <div class="input-group mb-3 select-border">
                  <select class="form-control basic-select selectType">
                    <option value=''>Please Select</option>
                        <option value='weekly'>Weekly</option>
                        <option value='monthly'>Monthly</option>
                        <option value='yearly'>Yearly</option>
                  </select>
                </div>
                  <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                  </div>
                  <input type="text" class="form-control finalAmount" placeholder="Total Amount" readonly='true'>
                </div>
                <a class="btn btn-primary btn-block calculate" style="color: white">Calculate</a>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-9 order-lg-2 col-md-12 order-md-1 order-1 ">
          <div class="property-filter d-sm-flex">
            <ul class="property-short list-unstyled d-sm-flex mb-0">
              <li>
                <form class="form-inline">
                  <div class="form-group d-lg-flex d-block">
                    <label class="justify-content-start">Short by:</label>
                    <div class="short-by">
                      <select class="form-control basic-select design">
                        <option>Date new to old</option>
                        <option>Price Low to High</option>
                        <option>Price High to Low</option>
                        <option>Date Old to New</option>
                        <option>Date New to Old</option>
                      </select>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
          </div>
          @foreach($property as $key => $value)
          
          @php
          $imageCount = explode(',',$value['images']);
          @endphp
          <div class="property-item property-col-list mt-4">
            
              <div class="row no-gutters mb-3">
                <div class="col-lg-4 col-md-5">
                  <div class="property-image bg-overlay-gradient-04">
                      <div class="property_listing">
                          <img class="img-fluid" src="{{ asset('public/upload/property_photo/'.$imageCount[0]) }}" alt="">
                      </div>
                    
                    <div class="property-lable">
                      <span class="badge badge-md ">{{ ucfirst($value['type']) }}</span>
                      <span class="badge badge-md ">{{ ucfirst($value['offer']) }}</span>
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
                        <h5>{{ $value['title'] }}</h5>
                        <!--<span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>{{ $value['address'] }}</span>-->
                        <!--<span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>1 Year</span>-->
                        <h6><i class="fas fa-map-marker-alt fa-xs"></i> {{ $value['address'] }} <span class="property-agent-date"> <i class="far fa-clock fa-md"></i> {{ humanTiming($value['created_at']) }}</span></h6>
                        <p>$ {{ $value['price'] }}</p>
                          <!-- <h5 class="property-title"><a href="{{ route("property-details",$value['slug'])}}" target="_blank">{{ $value['title'] }}</a></h5>
                          <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>{{ $value['address'] }}</span>
                          <span class="property-agent-date"><i class="far fa-clock fa-md"></i>{{ humanTiming($value['created_at']) }}</span> -->
                        </div>
                        <div class="eminities-wrap">
                          <ul class="property-info list-unstyled d-flex">
                        <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>{{ $value['badroom'] }}</span></li>
                        <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>{{ $value['bathroom'] }}</span></li>
                        <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>Sqft<span>{{ $value['area'] }}</span></li>
                      </ul>
                      <div class="property-price" style=''>${{ $value['price'] }}<span class="d-block"> </span> </div>
                      </div>
                        </div>
                      

                      <p class="mb-0 d-none d-block mt-3">{{ $value['about_property'] }}</p>
                    </div>
                    <div class="property-btn">
                      <a class="property-link" href="{{ route("property-details",$value['slug'])}}" target="_blank">See More Details</a>
                      <ul class="property-listing-actions list-unstyled mb-0">
                        <li class="property-compare"><a data-toggle="tooltip"  class="compareProperty" data-slug="{{ $value['slug'] }}" data-placement="top" title="Compare" href="javascript:;"><i class="fas fa-exchange-alt"></i></a></li>
                        @php 
                        $color = '';
                        $class = 'far fa-heart';
                        if(is_array($favourite)){
                              if(in_array($value['id'],$favourite)){
                                  $class = 'fas fa-heart text-danger';  
                              }else{
                                  $class = 'far fa-heart';  
                              }
                        }
                        @endphp
                        <li class="property-favourites">
                            <a class="favourite" data-login-id="{{ $loginId }}" data-property-id="{{ $value['id'] }}" 
                              data-user-id="{{ $value['user_id']}}" data-href="{{ route('property-favourite') }}" data-toggle="tooltip" data-placement="top" 
                              title="Favourite" href="javascript:;">
                              <i class="{{ $class }}"></i>
                            </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
          @endforeach

          
<!--          <div class="row">
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
          </div>-->
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Listing – grid view -->
  
 
@endsection
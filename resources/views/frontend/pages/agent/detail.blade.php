@extends('frontend.layout.layout')
@section('content')
<!--=================================
detail -->
<section class="space-ptb mt-100">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="agent agent-03 mb-5">
          <div class="row no-gutters">
            <div class="col-md-3 text-center border-right">
              <div class="d-flex flex-column h-100">
                <div class="agent-avatar p-3 my-auto">
                  <img class="img-fluid rounded-circle" src="{{ asset('public/upload/userimage/'.$agencyList[0]->userimage) }}" alt="">
                </div>
                <div class="agent-listing text-center mt-auto">
                  <a href="#"><strong class="text-primary mr-2 d-inline-block">{{ count($propertyList)}}</strong>Listed Properties </a>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="d-flex h-100 flex-column">
                <div class="agent-detail">
                  <div class="d-block d-sm-flex">
                    <div class="agent-name mb-3 mt-sm-0">
                      <h2> <a href="#">{{ $agencyList[0]->username }}</a></h2>
                      <span>{{ $agencyList[0]->designation }}</span>
                    </div>
                    <div class="agent-social ml-auto">
                      <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="{{ $agencyList[0]->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
                        <li class="list-inline-item"><a href="{{ $agencyList[0]->twitter }}" target="_blank"><i class="fab fa-twitter"></i> </a></li>
                        <li class="list-inline-item"><a href="{{ $agencyList[0]->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i> </a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="agent-info">
                    <p class="mt-3 mb-3">{{ $agencyList[0]->about }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mt-sm-5">
        <div class="p-4 bg-light">
          <div class="section-title mb-4">
            <h4>Contact Detail</h4>
          </div>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Email:</strong>{{ $agencyList[0]->email }}</li>
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Licenses:</strong>{{ $agencyList[0]->licenses }}</li>
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Phone:</strong>{{ $agencyList[0]->phoneno }}</li>
            <li><strong class="text-dark d-inline-block mr-2">Office Number:</strong>{{ $agencyList[0]->officeno }}</li>
          </ul>
        </div>
      </div>
      <div class="col-md-8 mt-5">
        <div class="section-title mb-4">
          <h4>Contact {{ ucfirst($agencyList[0]->username) }}</h4>
        </div>
        <form>
          <div class="form-row">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="name" placeholder="Your name">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="phone" placeholder="Your phone">
            </div>
            <div class="form-group col-md-4">
              <input type="email" class="form-control" id="inputEmail4" placeholder="Your email">
            </div>
            <div class="form-group col-md-12">
              <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
            </div>
            <div class="col-md-12">
              <a class="btn btn-primary" href="#">Send message</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
  <!--=================================
  detail -->
  
  
<div class="container">
  <hr class="m-0 p-0" />
</div>

<!--=================================
Property -->
<section class="space-pt">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h4>Listing by {{ ucfirst($agencyList[0]->username) }}</h4>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($propertyList as $key => $value)
        @php
          $imageCount = explode(',',$value['images']);
        @endphp
        <div class="col-sm-6 col-md-4">
          <div class="property-item">
            <div class="property-image bg-overlay-gradient-04">
              <img class="img-fluid" src="{{ asset('public/upload/property_photo/'.$imageCount[0]) }}" alt="">
              <div class="property-lable">
                <span class="badge badge-md badge-primary">{{ ucfirst($value['type']) }}</span>
                <span class="badge badge-md badge-info"> {{ ucfirst($value['offer']) }}</span>
              </div>
              
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
      @endforeach

      

    </div>
  </div>
</section>
<!--=================================
Property -->

  
@endsection
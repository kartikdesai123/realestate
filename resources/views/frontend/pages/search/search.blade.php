@extends('frontend.layout.layout')
@section('content')
 @php
          $array = array();
          @endphp
<style>
       /* Set the size of the div element that contains the map */
      #mapInit {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
<section >
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="property-search-field bg-white">
          <!--<div class="property-search-item" style="border: 2px solid #eeeeee">-->
            <form class="form-row basic-select-wrapper">
              <div class="form-group d-flex col-lg-2" style="border: 0px"></div>
              <div class="form-group d-flex col-lg-8" style="border: 0px">
                <div class="form-group-search" >
                  
                  <div class="d-flex align-items-center" style="border: 1px solid #eeeeee; padding: 13px;">
                      <i class="far fa-compass mr-1"></i>
                      <!--<input class="form-control" type="search" placeholder="Search Location">-->
                      <input type="text" id="autoComplate" placeholder="Search Location" class="form-control" />
                  </div>
                </div>
                <span class="align-items-center ml-3 d-none d-lg-block"><button class="btn btn-primary d-flex align-items-center" type="submit"><i class="fas fa-search mr-1"></i><span>Search</span></button></span>
              </div>
              <div class="form-group d-flex col-lg-2" style="border: 0px"></div>
              <div class="d-lg-none btn-block btn-mobile m-3">
                
                <button class="btn btn-primary btn-block align-items-center" type="submit"><i class="fas fa-search mr-1"></i><span>Search</span></button>
              </div>
            </form>
          <!--</div>-->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="property-map">
  <div class="map-canvas">
     <div id="mapInit"></div>
  </div>
</section>
<!--=================================
banner -->

<!--=================================
banner -->

<section class="space-ptb">
    @if(isset($property))
        @if(count($property))
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section-title mb-3 mb-lg-4">
            <h2><span class="text-primary">{{ count($property) }}</span> Results</h2>
          </div>
        </div>
      </div>
      <div class="row">
       
        <div class="col-lg-12">
          
       @foreach($property as $key => $value)
          
          @php
         
          
          
          $imageCount = explode(',',$value['images']);
          $array[] = array($value['address'],$value['latitude'],$value['longitude'],$value['images']);
          @endphp
          
          <div class="property-item property-col-list mt-4">
            <div class="row no-gutters">
              <div class="col-lg-4 col-md-5">
                <div class="property-image bg-overlay-gradient-04">
                    <div class="property_listing">
                        <img class="img-fluid" src="{{ asset('public/upload/property_photo/'.$imageCount[0]) }}" alt="">
                    </div>
                  
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
        </div>
      
      </div>
    </div>
         @endif
       @endif
  </section>
  <!--=================================
  Listing – grid view -->
  
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
var data1 = '<?php echo json_encode($array); ?>';
</script>

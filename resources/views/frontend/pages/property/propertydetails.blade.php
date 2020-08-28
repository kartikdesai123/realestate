@extends('frontend.layout.layout')
@section('content')
<style>
      #mapInit {
        height: 400px;
        width: 100%;
       }
    </style>
<script>
var lat = '<?php echo $propertyDetail[0]['latitude']?>';
var lng = '<?php echo $propertyDetail[0]['longitude']?>';
var address = '<?php echo $propertyDetail[0]['address']?>';
</script>

<div class="wrapper">
    <!--=================================
    Property Detail -->
    
   
    <section class="space-ptb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <div class="property-detail-title">
              <h3>{{ $propertyDetail[0]['title'] }}</h3>
              <span class="d-block mb-4"><i class="fas fa-map-marker-alt fa-xs pr-2"></i>{{ $propertyDetail[0]['address'] }}</span>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="price-meta">
              <div class="mb-4 d-inline">
                <span class="price font-xll text-primary mr-2">${{ $propertyDetail[0]['price'] }}</span>
                <!--<span class="sub-price font-lg text-dark"><b>$6,500/Sqft </b> </span>-->
              </div>
              <ul class="property-detail-meta list-unstyled mt-1 mb-5 mb-lg-3">
                <li><a href="#"> <i class="fas fa-star text-warning pr-2"></i>3.9/5 </a></li>
                <li class="share-box">
                  <a href="#"> <i class="fas fa-share-alt"></i> </a>
                  <ul class="list-unstyled share-box-social">
                    <li> <a href="https://www.facebook.com/sharer/sharer.php?u={{ route("property-details",$propertyDetail[0]['slug'])}}" target="_blank"><i class="fab fa-facebook-f"></i></a> </li>
                    <li> <a href="https://twitter.com/intent/tweet?url={{ route("property-details",$propertyDetail[0]['slug'])}}" target="_blank"><i class="fab fa-twitter"></i></a> </li>
                    <li> <a href="https://web.whatsapp.com/send?text={{ route("property-details",$propertyDetail[0]['slug'])}}" target="_blank"><i class="fab fa-whatsapp"></i></a> </li>
                    <!--<li> <a href="#"><i class="fab fa-instagram"></i></a> </li>-->
                  </ul>
                </li>
                @php 
                       $color = '';
                       $class = 'fas fa-heart'; 
                       if(is_array($favourite)){
                            if(in_array($propertyDetail[0]['id'],$favourite)){
                              $class = 'fas fa-heart text-danger'; 
                            }else{
                                $class = 'fas fa-heart'; 
                            }
                       }
                       @endphp
                <li><a class="favourite" data-login-id="{{ $loginId }}" data-property-id="{{ $propertyDetail[0]['id'] }}" data-user-id="{{ $propertyDetail[0]['user_id'] }}" 
                       data-href="{{ route('property-favourite') }}" data-toggle="tooltip" data-placement="top" title="Favourite" > <i class="{{ $class }}"></i> </a></li>
                <!--<li><a href="#" data-toggle="tooltip" data-placement="top"  title="Compare"> <i class="fas fa-exchange-alt"  ></i> </a></li>-->
                <li><a href="{{ route("report-property",$propertyDetail[0]['id'])}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Report"> <i class="fa fa-exclamation-triangle"></i> </a></li>
               
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0 order-lg-2 order-md-2 order-sm-2 order-2">
            <div class="sticky-top">
              <div class="sidebar">
                <div class="agent-contact mb-4">
                  <div class="agent-contact-inner bg-dark p-4">
                    <div class="d-flex align-items-center mb-4">
                      <div class="agent-contact-avatar mr-3">
                        <img class="img-fluid rounded-circle avatar avatar-lg" src="{{ asset('public/upload/userimage/'.$propertyDetail[0]['userimage']) }}" alt="">
                      </div>
                      <div class="agent-contact-name">
                        <h6 class="text-white">{{ $propertyDetail[0]['username'] }}</h6>
                        <span>{{ getTypeText($propertyDetail[0]['roles']) }}</span>
                      </div>
                    </div>
                    <div class="d-flex mb-4 align-items-center">
                      <h6 class="text-primary border p-2 mb-0"><a href="#"><i class="fab fa-whatsapp"></i> Whatsapp</a></h6>
                      <a class="btn btn-link p-0 ml-auto text-white" href="{{ route('property') }}"><u>View all listing </u></a>
                    </div>
                    <div class="d-flex mb-4 align-items-center">
                      <h6 class="text-primary border p-2 mb-0"><a href="#"><i class="fas fa-phone-volume text-white pr-2"></i>{{ $propertyDetail[0]['phoneno'] }}</a></h6>
                      @if($propertyDetail[0]['companyImage'] != null || $propertyDetail[0]['companyImage'])
                          @if($propertyDetail[0]['userType'] == 'CC')
                            <a class="btn btn-link p-0 ml-auto " href="{{ route("company-details",$propertyDetail[0]['companyId'])}}">
                              <img class="img-fluid rounded-circle" src="{{ asset('public/upload/userimage/'.$propertyDetail[0]['companyImage']) }}" alt="">
                            </a>
                          @else
                          <a class="btn btn-link p-0 ml-auto " href="{{ route("agency-details",$propertyDetail[0]['companyId'])}}">
                            <img class="img-fluid rounded-circle" src="{{ asset('public/upload/userimage/'.$propertyDetail[0]['companyImage']) }}" alt="">
                            </a>
                          @endif
                      @else
                        
                      @endif
                    </div>
                  <form id="contact-form" action="{{ route('contact-owner') }}" method="POST">@csrf
                      <input type="hidden" value="{{ $slug }}" name="slug">

                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your name" name="name">
                      </div>

                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your email Adress" name="email">
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Phone number" name="phone">
                      </div>

                      <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Write Message" name="message"></textarea>
                      </div>

                      <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" value="1" id="customCheck1" name="agree" checked="checked">
                        <label class="custom-control-label text-white font-sm" for="customCheck1">I here by agree for processing my personal data </label>
                      </div>

                      <button type="submit" class="btn btn-primary btn-block btnsubmit">Send Message</button>
                    </form>
                  </div>
                </div>
                <div class="widget">
                  <div class="widget-title">
                    <h6>Mortgage calculator</h6>
                  </div>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                      </div>
                      <input type="text" class="form-control amount" id='amount' placeholder="Total Amount">
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
                      <input type="text" class="form-control finalAmount" readonly='true'>
                    </div>
                    <a class="btn btn-primary btn-block calculate" style="color: white">Calculate</a>
                </div>
                <div class="widget">
                  <div class="widget-title">
                    <h6>Recently listed properties</h6>
                  </div>
                    @foreach($recentPropety as $value)
                     @php
                      $images = explode(',',$value['images'])
                      @endphp
                  <div class="recent-list-item">
                    <img class="img-fluid" src="{{ asset('public/upload/property_photo/'.$images[0]) }}" alt="">
                    <div class="recent-list-item-info">
                      <a class="address mb-2" href="{{ route("property-details",$value['slug'])}}" target="_blank">{{ $value['title'] }}</a>
                      <span class="text-primary">${{ $value['price'] }} </span>
                    </div>
                  </div>
                    @endforeach
                </div>
                <div class="widget">
                  <div class="widget-title">
                    <h6>Leave a review for {{ $propertyDetail[0]['title'] }}</h6>
                  </div>


                  <div class="review d-flex">
                    @if($loginId == null || $loginId == '')
                  <span> <a href="{{ route('signin') }}"> <b>Login</b>  </a> to leave a review</span>
                    @else
                      <div class="review-avatar avatar avatar-xl mr-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/avatar/02.jpg') }}" alt="">
                      </div>

                      <div class="review-info flex-grow-1">
                        
                        <div class="mb-3">
                          
                          <form id="reviewform" method="POST" >@csrf
                          <input type="hidden" name="userId" value="{{ $loginId }}">
                          <input type="hidden" value="{{ $slug }}" name="slug">
                            <div class="form-group">
                              <span class="mb-2 d-block">Rating:</span>
                              <select name="star" class="form-control">
                                  <option value="">Rating</option>
                                  <option value="1">1 Star</option>
                                  <option value="2">2 Star</option>
                                  <option value="3">3 Star</option>
                                  <option value="4">4 Star</option>
                                  <option value="5">5 Star</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <span class="mb-2 d-block">Rating comment:</span>
                              <textarea class="form-control" rows="3" name="review"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn  btn-primary btnsubmit"> Submit your review</button>
                            </div>
                          </form>

                        </div>

                        
                      </div>
                    @endif
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 order-lg-1">
  
            <div class="property-detail-gallery overflow-hidden">
              <ul class="nav nav-tabs nav-tabs-02 mb-4" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link shadow active" id="photo-tab" data-toggle="pill" href="#photo" role="tab" aria-controls="photo" aria-selected="true">Photo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link shadow" id="map-tab" data-toggle="pill" href="#map" role="tab" aria-controls="map" aria-selected="false">Map</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="photo" role="tabpanel" aria-labelledby="photo-tab">
                  <div class="slider-slick">
                    <div class="slider slider-for detail-big-car-gallery">
                      @php
                      $images = explode(',',$propertyDetail[0]['images'])
                      @endphp
                      @foreach($images as $value)
                        <div class="detail_image">
                            <img class="img-fluid" src="{{ asset('public/upload/property_photo/'.$value) }}" alt="">
                        </div>
                      @endforeach
                    </div>
                    <div class="slider slider-nav">
                      @foreach($images as $value)
                      <div class="detail_image_slide">
                          <img class="img-fluid" src="{{ asset('public/upload/property_photo/'.$value) }}" alt="">
                      </div>
                        
                      @endforeach
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="map-tab">
                  <div id="mapInit"></div>
                </div>
<!--                <div class="tab-pane fade" id="street-map-view" role="tabpanel" aria-labelledby="street-map-view-tab">
                  <div id="street-view"></div>
                </div>-->
              </div>
            </div>
            <div class="property-info mt-5">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Property details</h5>
                </div>
                <div class="col-sm-9">
                  <div class="row mb-3">
                    <div class="col-sm-6">
                      <ul class="property-list list-unstyled">
                        <!--<li><b>Property ID:</b> RV151</li>-->
                        <li><b>Price:</b> ${{ $propertyDetail[0]['price'] }}</li>
                        <li><b>Property Size:</b> {{ $propertyDetail[0]['area'] }} Sq Ft</li>
                        <li><b>Bedrooms:</b> {{ $propertyDetail[0]['badroom'] }}</li>
                        <li><b>Bathrooms:</b> {{ $propertyDetail[0]['bathroom'] }}</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="property-list list-unstyled">
<!--                        <li><b>Garage:</b> 1</li>
                        <li><b>Garage Size:</b> 458 SqFt</li>-->
                        <li><b>Property Age:</b> {{ bulidingAgeText($propertyDetail[0]['buliding_age']) }}</li>
                        <li><b>Property Type:</b> {{ $propertyDetail[0]['type'] }}</li>
                        <li><b>Property Status:</b> {{ $propertyDetail[0]['offer'] }}</li>
                        <li><b>Water:</b> {{ $propertyDetail[0]['water'] }} Hours</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-description">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Description</h5>
                </div>
                <div class="col-sm-9">
                  <p>{{ $propertyDetail[0]['about_property'] }}</p>
                  <!--<p>Floor-to-ceiling windows accentuate the panoramic vistas that sweep across the Golden Gate Bridge, the downtown skyline, the artfully lit Bay Bridge and beyond. The floor plan features two bedroom suites, kitchen, living/dining room, two view terraces and ample storage space. </p>-->
                </div>
              </div>
            </div>
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-features">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Features</h5>
                </div>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="property-list-style-2 list-unstyled mb-0">
                        @if(count($propertyDetail[0]['features']))
                        @foreach($propertyDetail[0]['features'] as $value)
                        <li>{{ $value['facilitiesName'] }}</li>
                        @endforeach
                        @endif
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-address">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Address</h5>
                </div>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="property-list list-unstyled mb-0">
                        <li><b>Friendly Address:</b> {{ $propertyDetail[0]['friendly_address'] }}</li>
                        <li><b>Address:</b> {{ $propertyDetail[0]['address']}}</li>
                        <li><b>State:</b> {{ $propertyDetail[0]['state'] }}</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="property-list list-unstyled mb-0">
                        <li><b>City:</b> {{ $propertyDetail[0]['city'] }} </li>
                        <li><b>Zip:</b> {{ $propertyDetail[0]['postalcode'] }}</li>
                        <li><b>County:</b> {{ $propertyDetail[0]['country'] }} </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-floor-plans">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Floor plans</h5>
                </div>
                <div class="col-sm-9">
                  <div class="accordion-style-2" id="accordion">
                    @if(count($propertyDetail[0]['floor_plan']))
                    @php
                    $i = 0;
                    @endphp
                    @foreach($propertyDetail[0]['floor_plan'] as $floor)
                     <div class="card">
                      <div class="card-header" id="heading{{$i}}">
                        <h5 class="accordion-title mb-0">
                        <button class="btn btn-link d-flex ml-auto align-items-center" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">{{ $floor['floor_title']}} <i class="fas fa-chevron-down fa-xs"></i></button>
                        </h5>
                      </div>
                      <div id="collapse{{$i}}" class="collapse show accordion-content" aria-labelledby="heading{{$i}}" data-parent="#accordion">
                        <div class="card-body">
                          <p>{{ $floor['description']}}</p>
                          <a class="fancybox" rel="group" href="{{ asset('public/upload/property_floor_plan/'.$floor['floor_file']) }}">
                              
                          <img class="img-fluid" src="{{ asset('public/upload/property_floor_plan/'.$floor['floor_file']) }}" alt="">
                          </a>
                        </div>
                      </div>
                    </div>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                    @endif
                  </div>
                </div>
              </div>
            </div>
            @if($propertyDetail[0]['video'] != '')
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-video">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <ul class="nav nav-tabs " style="border: 0px" id="pills-tab" role="tablist">
                     @php
                    $video = explode(',',$propertyDetail[0]['video']);
                    $i=1;
                   @endphp
                   @foreach($video as $value)
                   @php
                     if($i == 1){
                         $class = 'active';
                     }else{
                         $class = '';
                     }
                   @endphp  
                    <li class="nav-item">
                      <a class="nav-link {{ $class }}" id="video-{{$i}}-tab" data-toggle="pill" href="#video-{{$i}}" role="tab" aria-controls="video-{{$i}}" aria-selected="true">Property Video {{ $i }}</a>
                    </li>
                     @php
                   $i++;
                  @endphp
                @endforeach
                  </ul>
                </div>

                <div class="col-sm-9">
                  <div class="tab-content" id="pills-tabContent">
                    @php
                  $j=1;
                  @endphp
                  @foreach($video as $value)
                  @php
                    $regex = "((https?|ftp)\:\/\/)?"; // SCHEME 
                    $regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass 
                    $regex .= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP 
                    $regex .= "(\:[0-9]{2,5})?"; // Port 
                    $regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path 
                    $regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query 
                    $regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor 
                    if($j == 1){
                        $class = 'show active';
                    }else{
                        $class = '';
                    }

                  @endphp
                    <div class="tab-pane fade {{ $class }}" id="video-{{$j}}" role="tabpanel" aria-labelledby="video-{{$j}}-tab">
                      @if(preg_match("/^$regex$/i", $value))
                    <iframe width="100%" height="300" src="{{ $value }}">         </iframe>

                      @else
                      <video class="" width="100%" height="300" controls>
                        <source src="{{  asset('public/upload/property_video/'.$value) }}">
                      </video>
                      @endif
                      
                    </div>
                  @php
                   $j++;
                  @endphp
                @endforeach

<!--                    <div class="tab-pane fade" id="tab-04" role="tabpanel" aria-labelledby="tab-04-tab">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/hqUw18s3f0w" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-05" role="tabpanel" aria-labelledby="tab-05-tab">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ouk2Vlhr1lE" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    </div>-->
                  </div>
                </div>
              </div>
            </div>
            @endif
            @if($propertyDetail[0]['audio'] != '')
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
              <ul class="nav nav-tabs mb-4" id="pills-tab" role="tablist">
                  @php
                   $audio = explode(',',$propertyDetail[0]['audio']);
                   $i=1;
                  @endphp
                  @foreach($audio as $value)
                  @php
                    if($i == 1){
                        $class = 'active';
                    }else{
                        $class = '';
                    }
                  @endphp
                    
                  
                <li class="nav-item">
                  <a class="nav-link {{ $class }}" id="tab-{{$i}}-tab" data-toggle="pill" href="#tab-audiobook-{{$i}}" role="tab" aria-controls="tab-audiobook-{{$i}}" aria-selected="true">Audiobook 0{{$i}}</a>
                </li>
                @php
                   $i++;
                  @endphp
                @endforeach
              </ul>
              <div class="tab-content" id="pills-tabContent">
                  @php
                  $j=1;
                  @endphp
                  @foreach($audio as $value)
                  @php
                    if($j == 1){
                        $class = 'show active';
                    }else{
                        $class = '';
                    }
                  @endphp
                <div class="tab-pane fade {{ $class }}" id="tab-audiobook-{{$j}}" role="tabpanel" aria-labelledby="tab-{{$j}}-tab">
                  <audio controls>
                    <source src="{{ asset('public/upload/property_audio/'.$value) }}" >
                  </audio>
                </div>
                  @php
                   $j++;
                  @endphp
                @endforeach
              </div>
            @endif


            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-schedule">
                <ul class="nav nav-tabs nav-tabs-02 mb-4" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link shadow active" id="video-tab" data-toggle="pill" href="#video" role="tab" aria-controls="video" aria-selected="true">Property Virtual Tour Request</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link shadow" id="tour-tab" data-toggle="pill" href="#tour" role="tab" aria-controls="tour" aria-selected="false">Property Virtual In Person Visit</a>
                </li>
              </ul>
              <div class="row">
                  <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane show fade active" id="video" role="tabpanel" aria-labelledby="video-tab">
                <div class="col-sm-4 mb-4 mb-sm-0">
                  <h5>Schedule a video call</h5>
                </div>
                <div class="col-sm-9">
                  <div class="form-row">
                  <form class="form-row mt-4 mb-5 align-items-center" action="{{ route("video-call-schedule") }}" id="video-call-form" method="POST" >@csrf
                      
                      <input type="hidden" value="{{ $slug }}" name="slug">  

                      <div class="form-group col-sm-6 datetimepickers">
                        <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                          <input type="text" name="date" class="form-control datetimepicker-input" placeholder="Date" data-target="#datetimepicker-01">
                          <div class="input-group-append" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-sm-6 datetimepickers">
                        <div class="input-group date" id="datetimepicker-03" data-target-input="nearest">
                          <input type="text" name="time" class="form-control datetimepicker-input" placeholder="Time" data-target="#datetimepicker-03"/>
                          <div class="input-group-append" data-target="#datetimepicker-03" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-sm-12">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                      </div>

                      <div class="form-group col-sm-12">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                      </div>

                      <div class="form-group col-sm-12">
                        <input type="number" name="phone" class="form-control" placeholder="Phones">
                      </div>

                      <div class="form-group col-sm-12">
                        <textarea class="form-control" name="message" rows="4" placeholder="Message"></textarea>
                      </div>

                      <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-primary btnsubmit">Submit</button>
                      </div>
                    </form>

                  </div>
                </div>
                  </div>
                  <div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="tour-tab">
                <div class="col-sm-4 mb-4 mb-sm-0">
                  <h5>Schedule a tour</h5>
                </div>


                <div class="col-sm-9">
                  <div class="form-row">
                    <form class="form-row mt-4 mb-5 align-items-center" action="{{ route("personal-visit-schedule") }}" id="personal-visit-form" method="POST" >@csrf
                      
                      <input type="hidden" value="{{ $slug }}" name="slug">  

                      <div class="form-group col-sm-6 datetimepickers">
                        <div class="input-group date" id="datetimepicker-02" data-target-input="nearest">
                          <input type="text" name="date" class="form-control datetimepicker-input" placeholder="Date" data-target="#datetimepicker-02">
                          <div class="input-group-append" data-target="#datetimepicker-02" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-sm-6 datetimepickers">
                        <div class="input-group date" id="datetimepicker-04" data-target-input="nearest">
                          <input type="text" name="time" class="form-control datetimepicker-input" placeholder="Time" data-target="#datetimepicker-04"/>
                          <div class="input-group-append" data-target="#datetimepicker-04" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-sm-12">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                      </div>

                      <div class="form-group col-sm-12">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                      </div>

                      <div class="form-group col-sm-12">
                        <input type="number" name="phone" class="form-control" placeholder="Phones">
                      </div>

                      <div class="form-group col-sm-12">
                        <textarea class="form-control" name="message" rows="4" placeholder="Message"></textarea>
                      </div>

                      <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-primary btnsubmit">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
                  </div>
                  </div>
                  
              </div>
               
            </div>
            @if(count($review) > 0)
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-nearby">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Users Reviews</h5>
                </div>

                <div class="col-sm-9">
                @foreach($review as $key => $value)
                  <div class="col-12">
                    <div class="review d-flex">
                      <div class="review-avatar avatar avatar-xl mr-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('public/upload/userimage/'.$value->userimage) }}" alt="">
                      </div>
                      <div class="review-info flex-grow-1">
                        <span class="mb-2 d-block" style="color: black"><b>{{ $value->username }}</b></span>
                        <ul class="list-unstyled list-inline">
                          @for($i = 0 ; $i < $value->star ; $i++)
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star"></i></li>
                          @endfor
                        </ul>
                        <div class="mb-3">
                          <span class="mb-2 d-block">{{ $value->review }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr >
                @endforeach
                
                </div>
              </div>
            </div>
            @endif
          </div>
  
        </div>
      </div>
    </section>
    <!--=================================
    Property Detail -->
  </div>
@endsection                            
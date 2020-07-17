@extends('frontend.layout.layout')
@section('content')


<div class="wrapper">
    <!--=================================
    Property Detail -->
    <section class="space-ptb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <div class="property-detail-title">
              <h3>The citizen apartment 5th floor</h3>
              <span class="d-block mb-4"><i class="fas fa-map-marker-alt fa-xs pr-2"></i>Border st. nicholasville, ky</span>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="price-meta">
              <div class="mb-4 d-inline">
                <span class="price font-xll text-primary mr-2">$1500000</span>
                <span class="sub-price font-lg text-dark"><b>$6,500/Sqft </b> </span>
              </div>
              <ul class="property-detail-meta list-unstyled mt-1 mb-5 mb-lg-3">
                <li><a href="#"> <i class="fas fa-star text-warning pr-2"></i>3.9/5 </a></li>
                <li class="share-box">
                  <a href="#"> <i class="fas fa-share-alt"></i> </a>
                  <ul class="list-unstyled share-box-social">
                    <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                    <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
                    <li> <a href="#"><i class="fab fa-linkedin"></i></a> </li>
                    <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                  </ul>
                </li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Favourite" > <i class="fas fa-heart"  ></i> </a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top"  title="Compare"> <i class="fas fa-exchange-alt"  ></i> </a></li>
                <li><a href="#"> <i class="fa fa-exclamation-triangle"></i> </a></li>
                <li><a href="#"> <i class="fa fa-play-circle"></i> </a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0 order-lg-2">
            <div class="sticky-top">
              <div class="sidebar">
                <div class="agent-contact mb-4">
                  <div class="agent-contact-inner bg-dark p-4">
                    <div class="d-flex align-items-center mb-4">
                      <div class="agent-contact-avatar mr-3">
                        <img class="img-fluid rounded-circle avatar avatar-lg" src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" alt="">
                      </div>
                      <div class="agent-contact-name">
                        <h6 class="text-white">Felica queen</h6>
                        <span>Company Agent</span>
                      </div>
                    </div>
                    <div class="d-flex mb-4 align-items-center">
                      <h6 class="text-primary border p-2 mb-0"><a href="#"><i style='color: white; padding-right: 5px;
    font-size: 22px;' class='fab'>&#xf40c;</i>Whatsapp</a></h6>
                      <a class="btn btn-link p-0 ml-auto text-white" href="{{ route('property') }}"><u>View all listing </u></a>
                    </div>
                    <form>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your email Adress">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Phone number">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Write Message"></textarea>
                      </div>
                      <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label text-white font-sm" for="customCheck1">I here by agree for processing my personal data </label>
                      </div>
                      <a class="btn btn-primary btn-block" href="#">Send Message</a>
                    </form>
                  </div>
                </div>
                <div class="widget">
                  <div class="widget-title">
                    <h6>Mortgage calculator</h6>
                  </div>
                  <form>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                      </div>
                      <input type="text" class="form-control" placeholder="Total Amount">
                    </div>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Down Payment">
                    </div>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-percent"></i></div>
                      </div>
                      <input type="text" class="form-control" placeholder="Interest Rate">
                    </div>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                      </div>
                      <input type="text" class="form-control" placeholder="Loan Term (Years)">
                    </div>
                    <div class="input-group mb-3 select-border">
                      <select class="form-control basic-select">
                        <option>Monthly</option>
                        <option>Weekly</option>
                        <option>Yearly</option>
                      </select>
                    </div>
                    <a class="btn btn-primary btn-block" href="#">Calculate</a>
                  </form>
                </div>
                <div class="widget">
                  <div class="widget-title">
                    <h6>Recently listed properties</h6>
                  </div>
                  <div class="recent-list-item">
                    <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/01.jpg') }}" alt="">
                    <div class="recent-list-item-info">
                      <a class="address mb-2" href="#">Ample apartment at last floor</a>
                      <span class="text-primary">$1,147,457 </span>
                    </div>
                  </div>
                  <div class="recent-list-item">
                    <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/02.jpg') }}" alt="">
                    <div class="recent-list-item-info">
                      <a class="address mb-2" href="#">Contemporary apartment</a>
                      <span class="text-primary">$2,577,577 </span>
                    </div>
                  </div>
                  <div class="recent-list-item">
                    <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/03.jpg') }}" alt="">
                    <div class="recent-list-item-info">
                      <a class="address mb-2" href="#">3 bedroom house in gardner</a>
                      <span class="text-primary">$3,575,547 </span>
                    </div>
                  </div>
                  <div class="recent-list-item">
                    <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/04.jpg') }}" alt="">
                    <div class="recent-list-item-info">
                      <a class="address mb-2" href="#">Stunning 2 bedroom home in village</a>
                      <span class="text-primary">$1,475,575 </span>
                    </div>
                  </div>
                </div>
                <div class="widget">
                  <div class="widget-title">
                    <h6>Leave a review for Rylan Tolbert</h6>
                  </div>
                  <div class="review d-flex">
                    <div class="review-avatar avatar avatar-xl mr-3">
                      <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/avatar/02.jpg') }}" alt="">
                    </div>
                    <div class="review-info flex-grow-1">
                      <span class="mb-2 d-block">Rating:</span>
                      <ul class="list-unstyled list-inline">
                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt"></i></li>
                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star"></i></li>
                      </ul>
                      <div class="mb-3">
                        <span class="mb-2 d-block">Rating comment:</span>
                        <div class="form-group">
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                      <span> <a href="login.html"> <b>Login</b>  </a> to leave a review</span>
                    </div>
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
                      <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/01.jpg') }}" alt="">
                      <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/02.jpg') }}" alt="">
                      <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/03.jpg') }}" alt="">
                      <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/04.jpg') }}" alt="">
                      <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/05.jpg') }}" alt="">
                      <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/06.jpg') }}" alt="">
                    </div>
                    <div class="slider slider-nav">
                      <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/01.jpg') }}" alt="">
                      <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/02.jpg') }}" alt="">
                      <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/03.jpg') }}" alt="">
                      <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/04.jpg') }}" alt="">
                      <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/05.jpg') }}" alt="">
                      <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/06.jpg') }}" alt="">
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="map-tab">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568" style="border:0; width: 100%; height: 100%;"></iframe>
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
                        <li><b>Property ID:</b> RV151</li>
                        <li><b>Price:</b> $484,400</li>
                        <li><b>Property Size:</b> 1466 Sq Ft</li>
                        <li><b>Bedrooms:</b> 4</li>
                        <li><b>Bathrooms:</b> 2</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="property-list list-unstyled">
                        <li><b>Garage:</b> 1</li>
                        <li><b>Garage Size:</b> 458 SqFt</li>
                        <li><b>Year Built:</b> 2019-01-09</li>
                        <li><b>Property Type:</b> Full  Family Home</li>
                        <li><b>Property Status:</b> For rent</li>
                      </ul>
                    </div>
                  </div>
                  <h6 class="text-primary">Additional details</h6>
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="property-list list-unstyled mb-0">
                        <li><b>Deposit:</b> 30%</li>
                        <li><b>Pool Size:</b> 457 Sqft</li>
                        <li><b>Last remodel year:</b> 1956</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="property-list list-unstyled mb-0">
                        <li><b>Amenities:</b> Clubhouse</li>
                        <li><b>Additional Rooms:</b> Guest Bat</li>
                        <li><b>Equipment:</b> Grill - Gas - light</li>
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
                  <p>The home features private entry copper-clad door leading to salon with marble floors. Stunning great room has soaring 45 foot ceilings with glass windows, polished concrete floors, exposed brick & sculptural steel beams. The chef's kitchen has honed granite counters, high-end S/S appliances, French cabinets & gas range.</p>
                  <p>Floor-to-ceiling windows accentuate the panoramic vistas that sweep across the Golden Gate Bridge, the downtown skyline, the artfully lit Bay Bridge and beyond. The floor plan features two bedroom suites, kitchen, living/dining room, two view terraces and ample storage space. </p>
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
                        <li>TV Cable</li>
                        <li>Air Conditioning</li>
                        <li>Barbeque</li>
                        <li>Gym</li>
                        <li>Swimming Pool</li>
                        <li>Laundry</li>
                        <li>Microwave</li>
                        <li>Outdoor Shower</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="property-list-style-2 list-unstyled mb-0">
                        <li>Lawn</li>
                        <li>Refrigerator</li>
                        <li>Sauna</li>
                        <li>Washer</li>
                        <li>Dryer</li>
                        <li>WiFi</li>
                        <li>Window Coverings</li>
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
                        <li><b>Address:</b> Virginia drive temple hills</li>
                        <li><b>State/County:</b> San francisco</li>
                        <li><b>Area:</b> Embarcadero</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="property-list list-unstyled mb-0">
                        <li><b>City:</b> San francisco</li>
                        <li><b>Zip:</b> 4848494</li>
                        <li><b>Country:</b> United States</li>
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
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="accordion-title mb-0">
                        <button class="btn btn-link d-flex ml-auto align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">First Floor <i class="fas fa-chevron-down fa-xs"></i></button>
                        </h5>
                      </div>
                      <div id="collapseOne" class="collapse show accordion-content" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <p>Introspection is the trick. Understand what you want, why you want it and what it will do for you. This is a critical factor, and as such, is probably the most difficult step. For this reason, most people never!</p>
                          <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/floor-plans-01.jpg') }}" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="accordion-title mb-0">
                        <button class="btn btn-link d-flex ml-auto align-items-center collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Second Floor <i class="fas fa-chevron-down fa-xs"></i>
                        </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse accordion-content" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                          <p>Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet of our lives. Telephones and e-mail, clients and managers, spouses and kids, TV, newspapers and radio.</p>
                          <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/floor-plans-01.jpg') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-video">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Property video</h5>
                  <h5>Property video 2 </h5>
                  <h5>Tour 360</h5>
                </div>
                <div class="col-sm-9">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kacyaEXqVhs" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-video">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Audio Book 1</h5>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Audio Book 2</h5>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Audio Book 3</h5>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Audio Book 4</h5>
                </div>
              </div>
            </div>
            
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
                    <div class="form-group col-sm-6 datetimepickers">
                      <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" placeholder="Date" data-target="#datetimepicker-01">
                        <div class="input-group-append" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-6 datetimepickers">
                      <div class="input-group date" id="datetimepicker-03" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" placeholder="Time" data-target="#datetimepicker-03"/>
                        <div class="input-group-append" data-target="#datetimepicker-03" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-12">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group col-sm-12">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-sm-12">
                      <input type="number" class="form-control" placeholder="Phones">
                    </div>
                    <div class="form-group col-sm-12">
                      <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group col-sm-12">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-6"></div>
                  </div>
                </div>
                  </div>
                  <div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="tour-tab">
                <div class="col-sm-4 mb-4 mb-sm-0">
                  <h5>Schedule a tour</h5>
                </div>
                <div class="col-sm-9">
                  <div class="form-row">
                    <div class="form-group col-sm-6 datetimepickers">
                      <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" placeholder="Date" data-target="#datetimepicker-01">
                        <div class="input-group-append" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-6 datetimepickers">
                      <div class="input-group date" id="datetimepicker-03" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" placeholder="Time" data-target="#datetimepicker-03"/>
                        <div class="input-group-append" data-target="#datetimepicker-03" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-12">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group col-sm-12">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-sm-12">
                      <input type="number" class="form-control" placeholder="Phones">
                    </div>
                    <div class="form-group col-sm-12">
                      <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group col-sm-12">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-6"></div>
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
    Property Detail -->
  </div>
  
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
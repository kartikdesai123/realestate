@extends('frontend.layout.layout')
@section('content')
<!--=================================
detail -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="agent agent-03 mb-5">
          <div class="row no-gutters">
            <div class="col-md-3 text-center border-right">
              <div class="d-flex flex-column h-100">
                <div class="agent-avatar p-3 my-auto">
                  <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/01.jpg') }}" alt="">
                </div>
                <div class="agent-listing text-center mt-auto">
                  <a href="#"><strong class="text-primary mr-2 d-inline-block">15</strong>Listed Properties </a>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="d-flex h-100 flex-column">
                <div class="agent-detail">
                  <div class="d-block d-sm-flex">
                    <div class="agent-name mb-3 mt-sm-0">
                      <h2> <a href="#">Alice Williams </a></h2>
                      <span>Farm and land brokerage</span>
                    </div>
                    <div class="agent-social ml-auto">
                      <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i> </a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i> </a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i> </a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="agent-info">
                    <p class="mt-3 mb-3">What is the exact sequence of events that will take you to where you want to be? Have a think consciously of what you need to do. Every outcome begins with the first step. When you decide you want to have a romantic meal for two, there are many steps that you need.</p>
                    <p class="mt-3">Success isnâ€™t really that difficult. There is a significant portion of the population here in North America, that actually want and need success to be hard! Why? So they then have a built-in excuse when things donâ€™t go their way! Pretty sad situation, to say the least. Have some fun and hypnotize yourself to be your very own â€œGhost of Christmas futureâ€� and see what the future holds for you.</p>
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
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Address:</strong>214 West Arnold St. New York</li>
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Website:</strong>potenzaglobalsolutions.com</li>
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Agency:</strong>Pomegranate real estatese</li>
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Licenses:</strong>A42C3326</li>
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Phone:</strong>(123) 345-6789</li>
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Company:</strong>Real villa</li>
            <li><strong class="text-dark d-inline-block mr-2">Office Number:</strong>(456) 478-2589</li>
          </ul>
        </div>
      </div>
      <div class="col-md-8 mt-5">
        <div class="section-title mb-4">
          <h4>Contact Alice Williams</h4>
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
          <h4>Listing by Alice Williams</h4>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4">
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
      <div class="col-sm-6 col-md-4">
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
      <div class="col-sm-6 col-md-4">
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
      <div class="col-sm-6 col-md-4">
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
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/05.jpg') }}" alt="">
            <div class="property-lable">
              <span class="badge badge-md badge-primary">Penthouses</span>
              <span class="badge badge-md badge-info">Rent </span>
            </div>
            <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
            <div class="property-agent">
              <div class="property-agent-image">
                <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/05.jpg') }}" alt="">
              </div>
              <div class="property-agent-info">
                <a class="property-agent-name" href="#">Mellissa Doe</a>
                <span class="d-block">Founder & CEO</span>
                <ul class="property-agent-contact list-unstyled">
                  <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                  <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                </ul>
              </div>
            </div>
            <div class="property-agent-popup">
              <a href="#"><i class="fas fa-camera"></i> 10</a>
            </div>
          </div>
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="{{ route("property-details",'1')}}">Luxury villa with pool</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>West Indian St. Missoula</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>2 years ago</span>
              <div class="property-price">$698.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>5</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>4</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>1,658m</span></li>
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
      <div class="col-sm-6 col-md-4">
        <div class="property-item">
          <div class="property-image bg-overlay-gradient-04">
            <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/06.jpg') }}" alt="">
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
          <div class="property-details">
            <div class="property-details-inner">
              <h5 class="property-title"><a href="{{ route("property-details",'1')}}">184 lexington avenue</a></h5>
              <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Hamilton rd. willoughby, oh</span>
              <span class="property-agent-date"><i class="far fa-clock fa-md"></i>3 years ago</span>
              <div class="property-price">$236.00<span> / month</span> </div>
              <ul class="property-info list-unstyled d-flex">
                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,657m</span></li>
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
</section>
<!--=================================
Property -->

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
@extends('frontend.layout.layout')
@section('content')
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="agent agent-03">
          <div class="row no-gutters">
            <div class="col-md-3 text-center border-right">
              <div class="d-flex flex-column h-100">
                <div class="agent-avatar p-3 my-auto">
                  <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agency/01.png') }}" alt="">
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
                      <h2> <a href="#">Pomegranate real estates</a></h2>
                      <span>Company Agent</span>
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
                    <p class="mt-3 mb-3">We all carry a lot of baggage, thanks to our upbringing. The majority of people carry with them, an entire series of self-limiting beliefs that will absolutely stop, and hold them back from, success. Things like</p>
                    <p class="mt-3">Tm not smart enough,i am not lucky enough, and the worst, Im not worthy are but a few of the self-limiting beliefs I have encountered. We carry them with us like rocks in a knapsack, and then use them to sabotage our success. So, how twisted is that? One of the main areas that I work on with my clients is shedding these non-supportive beliefs.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4 mt-sm-5">
        <div class="p-4 bg-light">
          <div class="section-title mb-4">
            <h4>Contact Detail</h4>
          </div>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Address:</strong>support@realvilla.demo</li>
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Website:</strong>potenzaglobalsolutions.com</li>
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Agency:</strong>Pomegranate real estates</li>
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Licenses:</strong>A42C3326</li>
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Phone:</strong>(123) 345-6789</li>
            <li class="mb-2"><strong class="text-dark d-inline-block mr-2">Company:</strong>realvilla</li>
            <li><strong class="text-dark d-inline-block mr-2">Office Number:</strong>(456) 478-2589</li>
          </ul>
        </div>
      </div>
      <div class="col-md-8 mt-5">
        <div class="section-title mb-4">
          <h4>Contact pomegranate real estates</h4>
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
Listing â€“ grid view -->

<!--=================================
review -->
<section class="space-pb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="nav nav-tabs mb-4" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="listing-tab" data-toggle="pill" href="#listing" role="tab" aria-controls="listing" aria-selected="false">Listing</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
            <div class="row">
              <div class="col-md-6">
                <p>It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we donâ€™t do it intentionally or with malice. In the majority of cases, the cause is a well-meaning!</p>
                <p>Benjamin Franklin, inventor, statesman, writer, publisher and economist relates in his autobiography that early in his life he decided to focus on arriving at moral perfection. He made a list of 13 virtues, assigning a page to each. Under each virtue he wrote a summary that gave it fuller meaning. Then he practiced each one for a certain length of time. To make these virtues a habit, Franklin can up with a method to grade himself on his daily actions.</p>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled list-style">
                  <li> <i class="far fa-check-circle font-md text-primary mr-2 mb-3"></i> Franklinâ€™s extraordinary success in life.</li>
                  <li> <i class="far fa-check-circle font-md text-primary mr-2 mb-3"></i> Politics can be attributed to his perseverance.</li>
                  <li> <i class="far fa-check-circle font-md text-primary mr-2 mb-3"></i> You will begin to realise why this exercise is.</li>
                  <li> <i class="far fa-check-circle font-md text-primary mr-2 mb-3"></i> From twelve to one he read or overlooked his accounts and dined.</li>
                  <li> <i class="far fa-check-circle font-md text-primary mr-2 mb-3"></i> From two to five he worked at his trade.</li>
                  <li> <i class="far fa-check-circle font-md text-primary mr-2 mb-3"></i> Just have a think about something that you know.</li>
                </ul>
              </div>
              <div class="col-12">
                <p class="mb-0">Sint deserunt esse quibusdam quae ex error molestias fuga rem totam beatae accusantium placeat velit dignissimos necessitatibus labore facilis enim, eum aperiam ut laudantium, nisi cupiditate. Aliquam quos cum omnis explicabo voluptatem minus neque eaque rem animi ad, vitae porro, accusamus totam enim voluptate illum debitis pariatur autem perspiciatis dolore commodi natus. Natus nihil illum totam repellat id repudiandae, incidunt sed, ab autem dignissimos repellendus doloremque quaerat non suscipit animi fugit inventore facilis quos tempora in. Nesciunt nam deleniti similique quod quisquam deserunt.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="listing" role="tabpanel" aria-labelledby="listing-tab">
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
       </div>
     </div>
         
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
review -->
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
@extends('frontend.layout.layout')
@section('content')

<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="section-title mb-3 mb-lg-4">
          <h2><span class="text-primary">156</span> Results</h2>
        </div>
      </div>
      <div class="col-md-6">
          <div class="section-title mb-3 mb-lg-4">
          <h2><span class="text-primary">Agent</span> List</h2>
            </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 mb-5 mb-md-0">
        <div class="sidebar">
          <div class="widget">
            <div class="widget-title">
              <h6>Featured property</h6>
            </div>
            <div class="property-item mb-0">
              <div class="property-image bg-overlay-gradient-04">
                <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/grid/06.jpg') }}" alt="">
                <div class="property-lable">
                  <span class="badge badge-md badge-primary">Studio</span>
                  <span class="badge badge-md badge-info">New </span>
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
                </div>
                <div class="property-btn">
                  <a class="property-link" href="{{ route("property-details",'1')}}">See Details</a>
                </div>
              </div>
          </div>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h6>Recently listed properties</h6>
            </div>
            <div class="recent-list-item">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/01.jpg') }}" alt="">
              <div class="recent-list-item-info">
                <a class="address mb-2" href="{{ route("property-details",'1')}}">Awesome family home</a>
                <span class="text-primary">$1,456,233 </span>
              </div>
            </div>
            <div class="recent-list-item">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/02.jpg') }}" alt="">
              <div class="recent-list-item-info">
                <a class="address mb-2" href="{{ route("property-details",'1')}}">Contemporary apartment</a>
                <span class="text-primary">$2,496,454 </span>
              </div>
            </div>
            <div class="recent-list-item">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/03.jpg') }}" alt="">
              <div class="recent-list-item-info">
                <a class="address mb-2" href="{{ route("property-details",'1')}}">Family home for sale</a>
                <span class="text-primary">$4,662,457 </span>
              </div>
            </div>
            <div class="recent-list-item">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/04.jpg') }}" alt="">
              <div class="recent-list-item-info">
                <a class="address mb-2" href="{{ route("property-details",'1')}}">184 lexington avenue</a>
                <span class="text-primary">$2,456,452 </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-8">
        <div class="property-filter d-sm-flex">
<!--            <h6> Agent List</h6>-->
        </div>
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            <div class="agent text-center mt-4">
              <div class="agent-detail">
                <div class="agent-avatar avatar avatar-xllll">
                  <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/01.jpg') }}" alt="">
                </div>
                <div class="agent-info">
                  <h6 class="mb-0"> <a href="{{ route("agent-details",'1')}}">Alice Williams </a></h6>
                  <span class="font-sm">Investment</span>
                  <p class="mt-3 mb-0">And it's not just parents that are the cause â€“ teachers, friends, clergy members or anyone else that.</p>
                </div>
              </div>
              <div class="agent-button">
                <a class="btn btn-light btn-block" href="{{ route("agent-details",'1')}}">View Profile</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="agent text-center mt-4">
              <div class="agent-detail">
                <div class="agent-avatar avatar avatar-xllll">
                  <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/02.jpg') }}" alt="">
                </div>
                <div class="agent-info">
                  <h6 class="mb-0"> <a href="{{ route("agent-details",'1')}}">Paul flavius </a></h6>
                  <span class="font-sm">Farm and land brokerage</span>
                  <p class="mt-3 mb-0">The price is something not necessarily defined as financial. It could be time, something else.</p>
                </div>
              </div>
              <div class="agent-button">
                <a class="btn btn-light btn-block" href="{{ route("agent-details",'1')}}">View Profile</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="agent text-center mt-4">
              <div class="agent-detail">
                <div class="agent-avatar avatar avatar-xllll">
                  <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/03.jpg') }}" alt="">
                </div>
                <div class="agent-info">
                  <h6 class="mb-0"> <a href="{{ route("agent-details",'1')}}">Mellissa Doe</a></h6>
                  <span class="font-sm">Founder & CEO</span>
                  <p class="mt-3 mb-0">One of the main areas that I work on with my clients is shedding these non-supportive beliefs.</p>
                </div>
              </div>
              <div class="agent-button">
                <a class="btn btn-light btn-block" href="{{ route("agent-details",'1')}}">View Profile</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="agent text-center mt-4">
              <div class="agent-detail">
                <div class="agent-avatar avatar avatar-xllll">
                  <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/04.jpg') }}" alt="">
                </div>
                <div class="agent-info">
                  <h6 class="mb-0"> <a href="{{ route("agent-details",'1')}}">Joana williams</a></h6>
                  <span class="font-sm">Company Agent</span>
                  <p class="mt-3 mb-0">It is truly amazing the damage that we, as parents, can inflict on our children. For the most.</p>
                </div>
              </div>
              <div class="agent-button">
                <a class="btn btn-light btn-block" href="{{ route("agent-details",'1')}}">View Profile</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="pagination mt-5">
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
</section>

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
@extends('frontend.layout.layout')
@section('content')
<!--=================================
about -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="section-title mb-3 mb-lg-4">
          <h2><span class="text-primary">156</span> Results</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <div class="section-title mb-3 mb-lg-4">
          <h2><span class="text-primary">Company</span> List</h2>
            </div>
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
         
        </div>
        <div class="row">

          @foreach($companyList as $key => $value)
          <div class="col-lg-6 col-sm-6">
            <div class="agent text-center mt-4">
              <div class="agent-detail">
                <div class="agent-avatar avatar avatar-xllll">
                  <img class="img-fluid rounded-circle" src="{{ asset('public/upload/userimage/'.$value->userimage) }}" alt="">
                </div>
                <div class="agent-info">
                  <h6> <a href="{{ route("company-details",$value->id)}}">{{ $value->username }}</a></h6>
                  <span><i class="fas fa-map-marker-alt fa-xs pr-2"></i>{{ $value->location }}</span>
                  <p class="mt-3 mb-0">{{ $value->about }}</p>
                </div>
              </div>
              <div class="agent-button">
                <a class="btn btn-light btn-block" href="{{ route("company-details",$value->id)}}">View Profile</a>
              </div>
            </div>
          </div>
          @endforeach
         
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="pagination mt-5">
              {{ $companyList->links() }}
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
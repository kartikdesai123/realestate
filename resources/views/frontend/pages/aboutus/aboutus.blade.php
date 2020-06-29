@extends('frontend.layout.layout')
@section('content')
<!--=================================
about -->
<section class="space-ptb bg-holder" style="background-image: url(images/pattern-bg.html);">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-9">
          <div class="text-center">
            <h1 class="text-primary mb-4">We are changing the Real estate industry with progression and passion.</h1>
            <p class="px-sm-5 mb-4 lead font-weight-normal">We attempt to be the leading self-governing estate agency in the locations we cover, offering an entirely personal and dedicated service. </p>
<!--            <div class="popup-video">
              <a class="popup-icon popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0"> <i class="flaticon-play-button"></i> </a>
            </div>-->
          </div>
        </div>
      </div>
      
    </div>
  </section>
  <!--=================================
  about -->
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
  counter -->
  <section class="space-pt">
    <div class="container">
      <div class="border p-4">
        <div class="row">
          <div class="col-sm-3">
            <div class="counter counter-02 mb-4 mb-sm-0">
              <div class="counter-icon">
                <span class="pt-1 icon fab flaticon-placeholder"></span>
              </div>
              <div class="counter-content">
                <span class="timer mb-1" data-to="4561" data-speed="10000">4561</span>
                <label class="mb-0">Property locations</label>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="counter counter-02 mb-4 mb-sm-0">
              <div class="counter-icon">
                <span class="pt-1 icon fab flaticon-for-rent-1"></span>
              </div>
              <div class="counter-content">
                <span class="timer mb-1" data-to="1261" data-speed="10000">1261</span>
                <label class="mb-0">Property rent </label>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="counter counter-02 mb-4 mb-sm-0">
              <div class="counter-icon">
                <span class="pt-1 icon fab flaticon-house-5"></span>
              </div>
              <div class="counter-content">
                <span class="timer mb-1" data-to="2265" data-speed="10000">2265</span>
                <label class="mb-0">Property sell </label>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="counter counter-02 mb-4 mb-sm-0">
              <div class="counter-icon">
                <span class="pt-1 icon fab flaticon-agent"></span>
              </div>
              <div class="counter-content">
                <span class="timer mb-1" data-to="3265" data-speed="10000">3265</span>
                <label class="mb-0">Property agent</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  counter -->
  
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
      <div class="row no-gutters">
        <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
          <div class="agent text-center">
            <div class="agent-detail">
              <div class="agent-avatar avatar avatar-xllll">
                <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/01.jpg') }}" alt="">
              </div>
              <div class="agent-info">
                <h6 class="mb-0"> <a href="{{ route("agent-details",'1')}}">Alice Williams </a></h6>
                <span class="text-primary font-sm">Founder & CEO </span>
                <p class="mt-3 mb-0">The first thing to remember about success is that it is a process – nothing more, nothing less.</p>
              </div>
            </div>
            <div class="agent-button">
              <a class="btn btn-light btn-block" href="{{ route("agent-details",'1')}}">View Profile</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
          <div class="agent text-center">
            <div class="agent-detail">
              <div class="agent-avatar avatar avatar-xllll">
                <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/02.jpg') }}" alt="">
              </div>
              <div class="agent-info">
                <h6 class="mb-0"> <a href="{{ route("agent-details",'1')}}">Felica queen </a></h6>
                <span class="text-primary font-sm">Construction</span>
                <p class="mt-3 mb-0">There are basically six key areas to higher achievement. Some people will tell you there are four.</p>
              </div>
            </div>
            <div class="agent-button">
              <a class="btn btn-light btn-block" href="{{ route("agent-details",'1')}}">View Profile</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
          <div class="agent text-center">
            <div class="agent-detail">
              <div class="agent-avatar avatar avatar-xllll">
                <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/03.jpg') }}" alt="">
              </div>
              <div class="agent-info">
                <h6 class="mb-0"> <a href="{{ route("agent-details",'1')}}">Paul flavius </a></h6>
                <span class="text-primary font-sm">Investment</span>
                <p class="mt-3 mb-0">While others may tell you there are eight. One thing for certain though, is that irrespective of the.</p>
              </div>
            </div>
            <div class="agent-button">
              <a class="btn btn-light btn-block" href="{{ route("agent-details",'1')}}">View Profile</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="agent text-center">
            <div class="agent-detail">
              <div class="agent-avatar avatar avatar-xllll">
                <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/agent/04.jpg') }}" alt="">
              </div>
              <div class="agent-info">
                <h6 class="mb-0"> <a href="{{ route("agent-details",'1')}}">Sara lisbon  </a></h6>
                <span class="text-primary font-sm">Land development</span>
                <p class="mt-3 mb-0">If success is a process with a number of defined steps, then it is just like any other process.</p>
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
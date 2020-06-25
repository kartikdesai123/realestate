@extends('frontend.layout.layout')
@section('content')
<!--=================================
Service -->
<section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title mb-3">
            <h2>Services we offer</h2>
            <span class="lead">We truly care about our users and our product. We are dedicated to providing you with the best experience possible.</span>
          </div>
          <p>Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet of our lives. Telephones and e-mail.</p>
          <div class="row">
            <div class="col-sm-6">
              <ul class="pl-3 mb-2">
                <li class="mb-1">Browse all homes</li>
                <li class="mb-1">Albuquerque real estate</li>
                <li class="mb-1">Atlanta real estate</li>
                <li class="mb-1">Austin real estate</li>
                <li class="mb-1">Baltimore real estate</li>
                <li>Current mortgage rates</li>
              </ul>
            </div>
            <div class="col-sm-6">
              <ul class="pl-3 mb-2">
                <li class="mb-1">Rental Buildings</li>
                <li class="mb-1">Atlanta apartments for rent</li>
                <li class="mb-1">Austin apartments for rent</li>
                <li class="mb-1">Baltimore apartments for rent</li>
                <li class="mb-1">Boston apartments for rent</li>
                <li>Alaska mortgage rates</li>
              </ul>
            </div>
          </div>
          <div class="p-4 bg-dark mt-4">
            <div class="row">
              <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="counter counter-02">
                  <div class="counter-content">
                    <span class="timer mb-1 text-white" data-to="2457" data-speed="10000">2457</span>
                    <label class="mb-0 text-white">Property locations</label>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="counter counter-02">
                  <div class="counter-content">
                    <span class="timer mb-1 text-white" data-to="1284" data-speed="10000">1284</span>
                    <label class="mb-0 text-white">Property rent</label>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="counter counter-02">
                  <div class="counter-content">
                    <span class="timer mb-1 text-white" data-to="2354" data-speed="10000">2354</span>
                    <label class="mb-0 text-white">Property sell</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <img class="img-fluid w-100" src="{{ asset('public/frontend/assets/images/property/medium-img-01.jpg') }}" alt="">
        </div>
      </div>
      <div class="row mt-0 mt-lg-5">
        <div class="col-lg-4 col-sm-6 mt-5 text-center">
          <i class="fas fa-sliders-h font-xlll text-primary mb-3"></i>
          <h5 class="mb-4">Real Estate Services</h5>
          <p>Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet of our lives.</p>
        </div>
        <div class="col-lg-4 col-sm-6 mt-5 text-center">
          <i class="fas fa-file-invoice-dollar font-xlll text-primary mb-3"></i>
          <h5 class="mb-4">Increase Value</h5>
          <p>So, how can we stay on course with all the distractions in our lives? Willpower is a good start, but it’s very difficult to stay on track.</p>
        </div>
        <div class="col-lg-4 col-sm-6 mt-5 text-center">
          <i class="fas fa-user-friends font-xlll text-primary mb-3"></i>
          <h5 class="mb-4">Services For Individuals</h5>
          <p>The best way is to develop and follow a plan. Start with your goals in mind and then work backwards to develop the plan.</p>
        </div>
        <div class="col-lg-4 col-sm-6 mt-5 text-center">
          <i class="far fa-building font-xlll text-primary mb-3"></i>
          <h5 class="mb-4">Business Services</h5>
          <p>Along with your plans, you should consider developing an action orientation that will keep you motivated to move forward at all times.</p>
        </div>
        <div class="col-lg-4 col-sm-6 mt-5 text-center">
          <i class="fas fa-comments-dollar font-xlll text-primary mb-3"></i>
          <h5 class="mb-4">Tax Services</h5>
          <p>I coach my clients to practice the 3 D’s – Defer, Delegate or Delete. Can the particular activity be done later? Defer it! Can it be</p>
        </div>
        <div class="col-lg-4 col-sm-6 mt-5 text-center">
          <i class="fas fa-cart-arrow-down font-xlll text-primary mb-3"></i>
          <h5 class="mb-4">QuickBooks Services</h5>
          <p>Commitment is something that comes from understanding that everything has its price and then having the.</p>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Service -->
  
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
@extends('frontend.layout.layout')
@section('content')

<!--=================================
pricing-table -->
<section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2>Choose the plan that works for you</h2>
            <span>Flexible pricing options to suit your real estate business</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="pricing">
            <h5 class="pricing-title">Free</h5>
            <span class="pricing-price d-block mb-2"><strong>$00</strong>/mo</span>
            <p>For individuals just getting started</p>
            <a class="btn btn-primary btn-block" href="#">Sign up</a>
            <ul class="list-unstyled pricing-list">
              <li>One Category Listing <span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span> </li>
              <li>1 month Free<span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span></li>
              <li>Basic Email Support</li>
              <li>No Payment Guarantee</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-4 mt-sm-0">
          <div class="pricing">
            <h5 class="pricing-title">Starter</h5>
            <span class="pricing-price d-block mb-2"><strong>$12</strong>/mo</span>
            <p>For growing agents creating what’s next</p>
            <a class="btn btn-primary btn-block" href="#">Sign up</a>
            <ul class="list-unstyled pricing-list">
              <li>50 Category Listing <span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span> </li>
              <li>1 month Free<span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span></li>
              <li>Standard Email Support</li>
              <li>100% Payment Guarantee<span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span></li>
              <li>Premium Certification</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
          <div class="pricing bg-dark text-white">
            <h5 class="pricing-title text-white">Growth</h5>
            <span class="pricing-price d-block mb-2"> <strong>$34 </strong>/mo</span>
            <p>For the fast-growing agency and agents</p>
            <a class="btn btn-primary btn-block" href="#">Sign up</a>
            <ul class="list-unstyled pricing-list">
              <li>100 Category Listing <span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span> </li>
              <li>1 month Free</li>
              <li>Premium Email Support</li>
              <li>100% Payment Guarantee <span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span> </li>
              <li>Premium Certification</li>
              <li>Free Search Engine <span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span> </li>
              <li>500+ Properties</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
          <div class="pricing">
            <h5 class="pricing-title">Scale</h5>
            <span class="pricing-price d-block mb-2"><strong>$45</strong>/mo</span>
            <p>For leading enterprise real estate agency</p>
            <a class="btn btn-primary btn-block" href="#">Sign up</a>
            <ul class="list-unstyled pricing-list">
              <li>Unlimited Category Listing <span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span> </li>
              <li>1 month Free <span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span> </li>
              <li>Premium Email Support  </li>
              <li>100% Payment Guarantee </li>
              <li>Premium Certification <span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span> </li>
              <li>Free Search Engine</li>
              <li>Unlimited Properties  </li>
              <li>Unlimited Agent Profiles <span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span> </li>
              <li>Unlimited Agency Profiles <span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span> </li>
              <li>20 Featured properties <span data-toggle="tooltip" data-placement="top" title="I'm pricing note content"> <i class="fas fa-question-circle"></i></span> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  pricing-table -->
  
  <!--=================================
  clients -->
  <section class="space-ptb bg-light our-clients">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <div class="section-title">
            <h2>Powering over 1500 reward programs for brands around the world.</h2>
          </div>
          <div class="owl-carousel owl-nav-center" data-animateOut="fadeOut" data-nav-dots="false" data-items="6" data-md-items="5" data-sm-items="4" data-xs-items="3" data-xx-items="2" data-space="50">
            <div class="item">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/client/amazon.svg') }}" alt="">
            </div>
             <div class="item">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/client/flipkart.svg') }}" alt="">
            </div>
            <div class="item">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/client/google.svg') }}" alt="">
            </div>
            <div class="item">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/client/paypal.svg') }}" alt="">
            </div>
            <div class="item">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/client/slack.svg') }}" alt="">
            </div>
            <div class="item">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/client/spotify.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  clients -->
  
  <!--=================================
  Frequently -->
  <section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center mb-5">
            <h2>Frequently asked questions</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="mb-4">
            <h5 class="mb-3">How does it work?</h5>
            <p>We also know those epic stories, those modern-day legends surrounding the early failures of such supremely successful folks as Michael Jordan and Bill Gates.</p>
          </div>
          <div class="mb-4">
            <h5 class="mb-3">What if I’m not available at the requested time?</h5>
            <p>We know this in our gut, but what can we do about it? How can we motivate ourselves? One of the most difficult aspects of achieving success is staying motivated over the long haul.</p>
          </div>
          <div class="clearfix">
            <h5 class="mb-3">What if the home isn’t available?</h5>
            <p>Motivation is not an accident or something that someone else can give you — you are the only one with the power to motivate you. Motivation cannot be an external force, it must come from within as the natural product of your desire to achieve something and your belief that you are capable to succeed at your goal.</p>
          </div>
        </div>
        <div class="col-sm-6 mt-3 mt-sm-0">
          <div class="mb-4">
            <h5 class="mb-3">How do I ensure my safety on a tour?</h5>
            <p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although each is successful separately, the right combination of both is the most powerful motivational force known to humankind.</p>
          </div>
          <div class="mb-4">
            <h5 class="mb-3">How to submit a Home Tour Highlight?</h5>
            <p>For those of you who are serious about having more, doing more, giving more and being more, success is achievable with some understanding of what to do, some discipline around planning and execution of those plans and belief that you can achieve your desires.
            </p>
          </div>
          <div class="clearfix">
            <h5 class="mb-3">How many seller leads can I expect?</h5>
            <p>Without clarity, you send a very garbled message out to the Universe. We know that the Law of Attraction says that we will attract what we focus on, so if we don’t have clarity, we will attract confusion.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Frequently -->
  
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
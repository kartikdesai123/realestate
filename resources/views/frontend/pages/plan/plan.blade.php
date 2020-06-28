@extends('frontend.layout.layout')
@section('content')
<!--=================================
Service -->
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
          <p>For growing agents creating whatâ€™s next</p>
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
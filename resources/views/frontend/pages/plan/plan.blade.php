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
      @foreach($planlist as $key => $value)
        <div class="col-lg-3 col-sm-6" style="margin-top: 15px">
          <div class="pricing">
            <h5 class="pricing-title">{{ $value->planname }}</h5>
            <p>{{ $value->plandescription }}</p>
            <a class="btn btn-primary btn-block" href="{{ route("plan-details",$value->id)}}">See More Details</a>
            
          </div>
        </div>
      @endforeach
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
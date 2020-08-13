@extends('frontend.layout.layout')
@section('content')

<!--=================================
Feature box -->
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
      @php
      $i=0;
      $count = count($planlist);
      @endphp
      @foreach($planlist as $key => $value)
      @php
        if(($count -1) == $i){
            $class = 'col-lg-4 col-md-4 col-sm-6 mb-4 mb-md-0';
        }else if(($count -2) == $i){
            $class = 'offset-lg-2 col-lg-4 offset-md-2 col-md-4 col-sm-6 mb-4 mb-md-0';
        }else{
            $class = 'col-lg-4 col-md-4 col-sm-6 mb-4 mb-md-0';
        }
      @endphp
        <div class="{{ $class }}">
          <div class="feature-info feature-info-02">
            <div class="feature-info-detail">
              <div class="feature-info-icon">
                @if($value->plan_icon)
                  <img class="img-fluid w-25" src="{{ asset('public/upload/plan/icon/'.$value->plan_icon) }}" alt="{{ $value->planname }}">
                @else
                  <img class="img-fluid w-25" src="{{ asset('public/upload/plan/icon/plan.png') }}" alt="{{ $value->planname }}">                  
                @endif
              </div>
              <div class="feature-info-content">
                <h6 class="mb-3 feature-info-title">{{ $value->planname }}</h6>
                <p>{{ $value->plandescription }}</p>
              </div>
              <div class="feature-info-button">
                <a class="btn btn-light btn-block" href="{{ route("plan-details",$value->id)}}">See More Details</a>
              </div>
            </div>
            <div class="feature-info-bg bg-holder bg-overlay-black-70" style="background-image: url({{ asset('public/upload/plan/background_image/'.$value->plan_bg_image) }})"></div>
          </div>
        </div>
      @php
      $i++;
      @endphp
      @endforeach
    </div>
   
  </div>
</section>
<!--=================================
Feature box -->


  
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
@extends('frontend.layout.layout')
@section('content')

<!--=================================
Terms and conditions -->
<section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>Terms and conditions</h2>
          </div>
          {!! $termsandcondi[0]->terms_conditions !!}
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Terms and conditions -->
  
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
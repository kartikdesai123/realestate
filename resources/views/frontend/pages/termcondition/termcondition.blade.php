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
  
  
@endsection
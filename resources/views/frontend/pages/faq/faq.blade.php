@extends('frontend.layout.layout')
@section('content')
<!--=================================
Frequently -->
<section class="space-ptb mt-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="section-title">
            <h2>Frequently asked questions</h2>
          </div>
          <div class="accordion-style-2" id="accordion">
              @if(count($faq))
              @php
              $i = 1;
              @endphp
              @foreach($faq as $value)
            <div class="card">
              <div class="card-header" id="heading{{$i}}">
                <h5 class="accordion-title mb-0">
                <button class="btn btn-link d-flex align-items-center ml-auto" data-toggle="collapse" 
                        data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
                    {{ $value['question'] }}
                    <i class="fas fa-chevron-down fa-xs"></i>
                </button>
                </h5>
              </div>
                @php
                     if($i == 1){
                         $class = 'show';
                     }else{
                         $class = '';
                     }
                   @endphp  
                
              <div id="collapse{{$i}}" class="collapse accordion-content {{ $class }}" aria-labelledby="heading{{$i}}" data-parent="#accordion">
                <div class="card-body">
                  <p>{{ $value['answer'] }}</p>
                </div>
              </div>
            </div>
              @php
              $i++;
              @endphp
              @endforeach
            @endif
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
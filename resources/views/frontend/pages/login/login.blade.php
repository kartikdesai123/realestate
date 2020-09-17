@extends('frontend.layout.layout')
@section('content')
<!--=================================
Service -->
<section class="space-ptb signin mt-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-sm-10">
        <div class="section-title">
          <h2 class="text-center">{{ trans('signin.signin') }}</h2>
        </div>
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('fail'))
            <div class="alert alert-danger">
                {{ session()->get('fail') }}
            </div>
        @endif
        <form class="form-row mt-4 mb-5 align-items-center" id="login-form" method="POST" >@csrf
                <div class="form-group col-sm-12">
                  <label>{{ trans('signin.email') }}</label>
                  <input type="email" class="form-control" name="email" placeholder="{{ trans('signin.email_placeholder') }}">
                </div>
                <div class="form-group col-sm-12">
                  <label>{{ trans('signin.password') }}</label>
                  <input type="password" class="form-control" name="password" placeholder="{{ trans('signin.password_placeholder') }}">
                </div>
                <div class="form-group col-sm-12" style="text-align: right">
                  <a href="{{ route('forgot-password') }}" class="text-primary">{{ trans('signin.forgot_password') }}</a>
                </div>
                <div class="col-sm-6"> 
                  <button type="submit" class="btn btn-primary btn-block btnsubmit">{{ trans('signin.signin_button') }}</button>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                    <li class="mr-1"><a class="text-primary" href="{{ route('user-register') }}">{{ trans('signin.signin_placeholder') }}</a></li>
                  </ul>
                </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
  <!--=================================
  Service -->
  
 
@endsection
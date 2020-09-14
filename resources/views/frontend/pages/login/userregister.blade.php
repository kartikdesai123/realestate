@extends('frontend.layout.layout')
@section('content')
<!--=================================
Service -->
<section class="space-ptb signin mt-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-sm-10">
        <div class="section-title">
          <h2 class="text-center">{{ trans('signin.signup') }}</h2>
        </div>
        <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active"   href="{{ route("user-register")}}"  aria-selected="true">{{ trans('signin.user') }}</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link"   href="{{ route("agent-register")}}"  >{{ trans('signin.agent') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"   href="{{ route("agency-register")}}" >{{ trans('signin.agency') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"   href="{{ route("company-register")}}" >{{ trans('signin.company') }}</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="regular-user" role="tabpanel" aria-labelledby="regular-user-tab">
                <form class="form-row mt-4 mb-5 align-items-center" method="post" action="{{ route('user-register') }}" id="user-register">@csrf

                <div class="form-group col-sm-12">
                    <label>{{ trans('signin.user_username') }}:</label>
                    <input type="text" class="form-control" name="username" placeholder="{{ trans('signin.user_username_placeholder') }}">
                </div>

                <div class="form-group col-sm-12">
                    <label>{{ trans('signin.user_email') }}</label>
                    <input type="email" class="form-control" name="email" placeholder="{{ trans('signin.user_email_placeholder') }}">
                </div>

                <div class="form-group col-sm-12">
                    <label>{{ trans('signin.user_password') }}</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="{{ trans('signin.user_password_placeholder') }}">
                </div>

                <div class="form-group col-sm-12">
                    <label>{{ trans('signin.user_confirm') }}</label>
                    <input type="password" class="form-control" name="cpassword" placeholder="{{ trans('signin.user_confirm_placeholder') }}">
                </div>

                <div class="form-group col-sm-12">
                    <label>{{ trans('signin.user_phone') }}</label>
                    <input type="text" class="form-control" name="phoneno" placeholder="{{ trans('signin.user_phone_placeholder') }}">
                </div>

                 
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary btn-block  btnsubmit">{{ trans('signin.user_register') }}</button>
                </div>
                <div class="col-sm-6">
                    <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                    <li class="mr-1"><a href="{{ route('signin') }}">{{ trans('signin.user_register_placeholder') }}</a></li>
                    </ul>
                </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
@endsection
@extends('backend.layout.loginlayout')
@section('content')
<!-- BEGIN LOGO -->
 <div class="logo">
    <a href="index.html">
        <img src="{{ asset('public/backend/assets/pages/img/logo-big.png') }}" alt="" /> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" id="login-form" method="post">
        <h3 class="form-title font-green">Sign In</h3>
        @csrf
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success uppercase">Login</button>
           
        </div>
    </form>
    
</div>
<div class="copyright"> 2020 © Real Estate </div>


@endsection
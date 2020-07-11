<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="{{ $description }}" name="description" />
    <meta content="{{ $keywords }}" name="keywords" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700">
    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/bootstrap/bootstrap.min.css') }}" />


    @if (!empty($css))
        @foreach ($css as $value)
            @if(!empty($value))
                <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/'.$value) }}">
            @endif
        @endforeach
    @endif
        <script>
            var baseurl = "{{ asset('/') }}";
        </script>

    
    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/style.css') }}" />
 </head>
 <body>
     <section class="space-ptb bg-holder coming-soon h-100vh" style="background-image: url(images/building.png);">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-lg-7 col-md-9 text-center align-self-center">
                <h1>Hey , {{ $userDetails[0]->username }}</h1><br>
            </div>

            <form class="form-row mt-4 mb-5 align-items-center" id="reset-password-form" method="POST" >@csrf
            <input type="hidden" class="form-control" id="token" name="token" value="{{ $token}}">
                <div class="form-group col-sm-12">
                  <label>New Password:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Please enter your new password">
                </div>
                <div class="form-group col-sm-12">
                  <label>Confirm new password:</label>
                  <input type="password" class="form-control" name="cpassword" placeholder="Please enter your confirm new password">
                </div>
                
                <div class="col-sm-6"> 
                  <button type="submit" class="btn btn-primary btn-block btnsubmit">Reset Password</button>
                </div>
                
            </form>


          </div>
        </div>
      </div>
    </section>
   

<!-- JS Global Compulsory (Do not remove)-->
<script src="{{ asset('public/frontend/assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/popper/popper.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/bootstrap/bootstrap.min.js') }}"></script>

@if (!empty($pluginjs)) 
    @foreach ($pluginjs as $value) 
        <script src="{{ asset('public/frontend/assets/js/'.$value) }}" type="text/javascript"></script>
    @endforeach
    @endif

    @if (!empty($js)) 
    @foreach ($js as $value) 
    <script src="{{ asset('public/frontend/assets/js/customjs/'.$value) }}" type="text/javascript"></script>
    @endforeach
    @endif
    <script>
        jQuery(document).ready(function () {
        @if (!empty($funinit))
                @foreach ($funinit as $value)
        {{  $value }}
        @endforeach
                @endif
        });
    </script>
    
<script src="{{ asset('public/frontend/assets/js/custom.js') }}"></script>

</body>
</html>
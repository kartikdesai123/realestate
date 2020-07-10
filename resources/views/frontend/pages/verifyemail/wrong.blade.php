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
          <h1>We are so sorry</h1><br>
          <h3 class="mb-4">Something goes to wrong please conatct customer care</h3>
          
          <div class="mt-5">
            <h6 class=" mb-4"><a href="{{ route('home') }}">Go to real estate</a></h6>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- JS Global Compulsory (Do not remove)-->
<script src="{{ asset('public/frontend/assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/popper/popper.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/bootstrap/bootstrap.min.js') }}"></script>


</body>
</html>
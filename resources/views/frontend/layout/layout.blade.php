@php

$currentRoute = Route::current()->getName();
@endphp
<!DOCTYPE html>
<html lang="en">
    @include('frontend.include.header')
   <body>
    @include('frontend.include.body_header')
    @if($currentRoute != "home")
        @include('frontend.include.breadcrumb')
    @endif
    
     @yield('content')
      
     @include('frontend.include.body_footer')

     @include('frontend.include.model')
     @include('frontend.include.footer')
      
   </body>       
</html>
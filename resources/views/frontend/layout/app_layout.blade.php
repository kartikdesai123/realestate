<!DOCTYPE html>

<html lang="en">

    @include('frontend.include.header')
    <body>
        @include('frontend.include.body_header')    
        @include('frontend.include.breadcrumbs')
        @yield('content')
        @include('frontend.include.body_footer')
        @include('frontend.include.footer')
    </body>

</html>
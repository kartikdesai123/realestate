<!DOCTYPE html>

<html lang="en">
    
    @include('backend.include.header')
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            @include('backend.include.body_header')           
            <div class="clearfix"> </div>
                <div class="page-container">
                    @include('backend.include.sidebar')
               
                    <div class="page-content-wrapper">
                   
                        <div class="page-content">
                            @include('backend.include.breadcrumbs')
                            @yield('content')
                            <div class="clearfix"></div>
                        </div>                   
                    </div>
            </div>
           @include('backend.include.body_footer')
        </div>     
        <div class="quick-nav-overlay"></div>       
        @include('backend.include.footer')
    </body>

</html>
<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>{{ $title }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="{{ $description }}" name="description" />
        <meta content="{{ $keywords }}" name="keywords" />


        <meta content="Real Estate" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />

        <link href="{{ asset('public/backend/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/backend/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('public/backend/assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/backend/assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('public/backend/assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components') }}" type="text/css" />
        <link href="{{ asset('public/backend/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->

        <link href="{{ asset('public/backend/assets/pages/css/login.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/backend/assets/pages/css/style.css') }}" rel="stylesheet" type="text/css" />

        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
    <script type="text/javascript">
        var baseurl = "{{ asset('/') }}";
    </script>
        @if (!empty($plugincss)) 
            @foreach ($plugincss as $value) 
                <link href="{{ asset('public/backend/assets/customcss/plugincss/'.$value) }}" rel="stylesheet" type="text/css" />
            @endforeach
        @endif
        @if (!empty($css)) 
            @foreach ($css as $value) 
                <link href="{{ asset('public/backend/assets/customcss/'.$value) }}" rel="stylesheet" type="text/css" />
            @endforeach
        @endif

    <body class=" login">
       @yield('content')
     
        <script src="{{ asset('public/backend/assets/global/plugins/jquery-3.1.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('public/backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('public/backend/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->

        @if (!empty($pluginjs)) 
            @foreach ($pluginjs as $value) 
                <script src="{{ asset('public/backend/assets/customjs/plugins/'.$value) }}" type="text/javascript"></script>
            @endforeach
        @endif
        @if (!empty($js)) 
            @foreach ($js as $value) 
                <script src="{{ asset('public/backend/assets/customjs/'.$value) }}" type="text/javascript"></script>
            @endforeach
        @endif


        <script>
        jQuery(document).ready(function() {
            @if (!empty($funinit))
                @foreach ($funinit as $value)
                    {{ $value }}
                @endforeach
            @endif
        });
        </script>
    </body>

</html>
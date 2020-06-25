<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="{{ $description }}" name="description" />
    <meta content="{{ $keywords }}" name="keywords" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('public/backend/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('public/backend/assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('public/backend/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('public/backend/assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ asset('public/backend/assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/assets/pages/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> 

    @if (!empty($plugincss))
        @foreach ($plugincss as $value)
            @if(!empty($value))
                <link rel="stylesheet" href="{{ asset('public/backend/assets/'.$value) }}">
            @endif
        @endforeach
    @endif
    
    @if (!empty($css))
        @foreach ($css as $value)
            @if(!empty($value))
                <link rel="stylesheet" href="{{ asset('public/backend/assets/customcss/'.$value) }}">
            @endif
        @endforeach
    @endif

    <script>
        var baseurl = "{{ asset('/') }}";
    </script>
</head>
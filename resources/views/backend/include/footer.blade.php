
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('public/backend/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('public/backend/assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('public/backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('public/backend/assets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{ asset('public/backend/assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/backend/assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        @if (!empty($pluginjs)) 
            @foreach ($pluginjs as $value) 
                <script src="{{ asset('public/backend/assets/'.$value) }}" type="text/javascript"></script>
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
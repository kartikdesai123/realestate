<!-- JS Global Compulsory (Do not remove)-->
<script src="{{ asset('public/frontend/assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/popper/popper.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/bootstrap/bootstrap.min.js') }}"></script>


<!-- Template Scripts (Do not remove)-->


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

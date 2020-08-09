<!-- JS Global Compulsory (Do not remove)-->
<script src="{{ asset('public/frontend/assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/popper/popper.min.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/bootstrap/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBW43KgTNs_Kusuvbian6KYGi_QzXOLS4w"></script>

<!-- Template Scripts (Do not remove)-->


@if (!empty($pluginjs)) 
    @foreach ($pluginjs as $value) 
        <script src="{{ asset('public/frontend/assets/js/'.$value) }}" type="text/javascript"></script>
    @endforeach
    @endif

    @if (!empty($js)) 
    @foreach ($js as $value) 
    <script src="{{ asset('public/frontend/assets/customjs/'.$value) }}" type="text/javascript"></script>
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
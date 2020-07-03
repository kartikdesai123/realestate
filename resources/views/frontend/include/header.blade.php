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
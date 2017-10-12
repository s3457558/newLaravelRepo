<!DOCTYPE html>

<html>
<head>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHhDF6eVxfPzvPTH0gOy_WUk7l-IoqwZE&libraries=places">
	 </script>
    <link rel="stylesheet" href="{{asset('css/location.css')}}">
    <link rel="stylesheet" href="{{asset('css/modalStyle.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script crossorigin ="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
            src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="shortcut icon" type="image/jpeg" href="{{{ asset('images/small_car.jpg') }}}" size="16x16">
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    {{--<meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />--}}

</head>

<body background="images/road5.jpg">
@include('shared.navbar')
    <div class="main-container" >
        @yield('content')


        <div id="footer">
            <footer>
                &copy; <script> document.write(new Date().getFullYear()); </script> Car-Sharing, ALL RIGHTS RESERVED
            </footer>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>

<html>
<head>
    <title> @yield('title') </title>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHhDF6eVxfPzvPTH0gOy_WUk7l-IoqwZE&libraries=places">
	 </script>
    <link rel="stylesheet" href="{{asset('css/location.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script crossorigin ="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
            src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="shortcut icon" type="image/jpeg" href="{{{ asset('images/small_car.jpg') }}}" size="16x16">
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
</head>

<body background="images/road5.jpg">
@include('shared.navbar')
    <div class="main-container" >
        @yield('content')


        <div id="footer">
            <footer>
                &copy; <script> document.write(new Date().getFullYear()); </script> Car-Sharing, ALL RIGHTS RESERVED
                <!-- <p>Student Name: Leung Chun Ki Jenkin   |   Student Number: s3444706</p>
                        <p>Student Name: Peng Gao        |   Student Number: s3457558</p> -->
            </footer>
        </div>
    </div>
</body>

</html>
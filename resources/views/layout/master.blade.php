<!DOCTYPE html>
<html>
<head>
    <title> @yield('title') </title>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD99TBIE44gmTxJSL61vN-gI-YNrvsV4xg">
	 </script>
    <link rel="stylesheet" href="{{asset('css/location.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script crossorigin ="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" src="//code.jquery.com/jquery-3.1.0.min.js"></script>

	 <script src="{{asset('js/script.js')}}"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="shortcut icon" type="image/jpeg" href="{{{ asset('images/small_car.jpg') }}}" size="16x16">

   

	 

</head>
<body>
@include('shared.navbar')
<div class="container">
    @yield('content')
</div>
</body>
</html>
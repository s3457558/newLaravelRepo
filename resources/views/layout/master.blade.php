<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="shortcut icon" type="image/jpeg" href="{{{ asset('images/small_car.jpg') }}}" size="16x16">
</head>
<body>
@include('shared.navbar')
<div class="container">
    @yield('content')
</div>
<br>
<footer>
    <div id="footer">
        &copy; <script> document.write(new Date().getFullYear()); </script> Car-Sharing, ALL RIGHTS RESERVED |
       <!-- <p>Student Name: Leung Chun Ki Jenkin   |   Student Number: s3444706</p>
        <p>Student Name: Peng Gao        |   Student Number: s3457558</p> -->
    </div>
</footer>
</body>

</html>
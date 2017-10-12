<style>
    .footer{
        margin-left: 60px;
        margin-top: 100px;
    }


</style>


<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
{{--@include('admin.navbar')--}}
<div class="container">
    @yield('content')
</div>

<div class = "footer">
    <footer>
        &copy; <script> document.write(new Date().getFullYear()); </script> Car-Sharing, ALL RIGHTS RESERVED
        <!-- <p>Student Name: Leung Chun Ki Jenkin   |   Student Number: s3444706</p>
                <p>Student Name: Peng Gao        |   Student Number: s3457558</p> -->
    </footer>
</div>
</body>
</html>




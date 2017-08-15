<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="~/css/style.css"/>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <style>
        .login-form-control {
            width: 500px;
            display:block;
            height:34px;
            padding:6px 12px;
            font-size:14px;
            line-height:1.42857143;color:#555;
            background-color:#fff;
            background-image:none;
            border:1px solid #ccc;
            border-radius:4px;
            -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }
        .title {
            margin-right: -15px;
            margin-left: -15px;
        }

        .register-form-control {
            width: 500px;
            display:block;
            height:34px;
            padding:6px 12px;
            font-size:14px;
            line-height:1.42857143;color:#555;
            background-color:#fff;
            background-image:none;
            border:1px solid #ccc;
            border-radius:4px;
            -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

    </style>


</head>
<body>
@include('shared.navbar')
<div class="container">
    @yield('content')
</div>
</body>
</html>
<style>
    .navbar-nav{
        font-family: "Microsoft YaHei UI";
        font-weight:bold;
    }
    .navbar-brand{
        font-family: "Microsoft YaHei UI";
        font-weight:bold;
        font-size: 30px;
    }
</style>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{--<a class="navbar-brand">Car_sharing_home</a>--}}
            {{--<a href="{{action('AdminHomeController@create')}}">--}}
                {{--<img src="images/admin1.jpg" alt="Car-Sharing Logo" width="250" height="40">--}}
            {{--</a>--}}


        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Car_sharing_home</a></li>
                <li><a href="admin.home">Admin_home</a></li>
                <li><a href="car.create">Admin_add</a></li>
                <li><a href="admin">Admin_booking</a></li>
                <li><a href="adminUser">Admin_user</a></li>
                <li><a href="adminCar">Admin_car</a></li>
                {{--<li><a href="/">Car-sharing Home</a></li>--}}
                {{--<li><a href="/">Car-sharing Home</a></li>--}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
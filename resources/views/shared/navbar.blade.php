<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{action('PagesController@home')}}">
                <img src="images/carsharing logo.png" alt="Car-Sharing Logo" width="250" height="40">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="price">Price</a></li>
                <li><a href="booking.create">Booking</a></li>
                <li><a href="contact">Contact Us</a></li>
                <li><a href="location">Location</a></li>
            @if(!\Illuminate\Support\Facades\Auth::guest())
                     <p>Welcome, <br> {{\Illuminate\Support\Facades\Auth::user()->name}} </p>
                    <li style="float:right;"> <a href="logout">Log Out</a></li>
            @endif

            @if( Auth::check() && Auth::user()->isAdmin )
                    <li style="float:right;"> <a href="admin">Admin</a></li>
            @endif
                <li style="float:right;"> <a class="register" href="register">SignUp</a></li>
                <li style="float:right;"> <a href="login">LogIn</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
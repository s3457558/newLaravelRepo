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
                <img src="images/CAR-SHARING.png" alt="Car-Sharing Logo" style="width: 200px;">
            </a>

    </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/">HOME<span class="sr-only"></span></a></li>
                <li><a href="about">ABOUT US</a></li>
                @if(!\Illuminate\Support\Facades\Auth::guest())
                    <li > <a href="booking.create">BOOKING</a></li>
                @endif
                <li><a href="price">PRICE</a></li>
                <li><a href="contact">CONTACT US</a></li>
                <li><a href="location">LOCATION</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                @if(!\Illuminate\Support\Facades\Auth::guest())
                    <li > <a id="loginname"> Welcome, {{\Illuminate\Support\Facades\Auth::user()->name}} </a>  </li>
                @endif
                @if(!\Illuminate\Support\Facades\Auth::guest())
                        <li > <a href="logout">LOG OUT</a></li>
                @endif

            @if(!\Illuminate\Support\Facades\Auth::check())
                    <li> <a class="register" href="register">JOIN US</a></li>
                    <li> <a href="login">LOG IN</a></li>
            @endif
            @if( Auth::check() && Auth::user()->isAdmin )
                    <li style="float:right;"> <a href="admin.home">ADMIN</a></li>
            @endif



            </ul>

        </div><!-- /.navbar-collapse -->
    </div>
</nav>

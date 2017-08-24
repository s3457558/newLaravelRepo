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
                <li><a href="car.create">Admin</a></li>

            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" required>
                        <input class="searchbutton" type="button" value="Search">
                    </div>
                    <!--<button type="submit" class="btn btn-default">Submit</button>-->
                </form>
                <li><a href="register">SignUp</a></li>
                <li><a href="login">LogIn</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
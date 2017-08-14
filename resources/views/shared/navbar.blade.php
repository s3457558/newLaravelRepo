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
            <a class="navbar-brand" href="#">Cars-Sharing</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                {{--<li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>--}}
                <li><a href="http://localhost/testlaravel/project/public/">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="#">About</a></li>
                <li><a href="http://localhost/testlaravel/project/public/booking/create">Booking</a></li>
                <li><a href="http://localhost/testlaravel/project/public/contact">Contact</a></li>
                <li><a href="http://localhost/testlaravel/project/public/car/create">Adding Car</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Members
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>



                {{--<li><a href="#">Link</a></li>--}}
                {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
                {{--aria-expanded="false">Dropdown <span class="caret"></span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="#">Action</a></li>--}}
                {{--<li><a href="#">Another action</a></li>--}}
                {{--<li><a href="#">Something else here</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li><a href="#">Separated link</a></li>--}}

                {{--</ul>--}}
                {{--</li>--}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
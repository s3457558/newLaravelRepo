@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')
    <div class="container-home">
        <div class="content">
<<<<<<< HEAD
            <div class="column col-xs-12 text-center">
                <h1 class="white-text"> Car-Sharing </h1>
                <h2 class="white-text2">
                    Easy to find our car in Melbourne
                    <br>
                    Enjoy our share car service
                </h2>
                <a href="register" class="button white-text3">
                    <span>JOIN US NOW</span>
                    </a>
            <div class="title-home">
                <h2>Welcome to Car-Sharing Website</h2>
            </div>

            </div>
        </div>
    </div>


<<<<<<< HEAD
@endsection
        function plusDivs(n) {
            showDivs(slideIndex += n);
        }
        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("carSlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>
@endsection

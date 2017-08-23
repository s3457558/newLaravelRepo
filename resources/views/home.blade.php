@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')
    <div class="container">
        <div class="content">
<<<<<<< HEAD
            <div class="title-home">
                <h2>Welcome to Car-Sharing Website</h2>
            </div>

            <div class="content display-container">
                <img class="carSlides" src="images/car1.jpg" style="width:100%">
                <img class="carSlides" src="images/car2.jpg" style="width:100%">
                <img class="carSlides" src="images/car3.jpg" style="width:100%">
                <img class="carSlides" src="images/car4.jpg" style="width:100%">
                <img class="carSlides" src="images/car5.jpg" style="width:100%">
                <button class="button black button-left"  style="margin:auto;" onclick="plusDivs(-1)">&#10094;</button>
                <button class="button black button-right" style="margin:auto;" onclick="plusDivs(1)">&#10095;</button>
            </div>
=======
            <div class="title">Welcome to join us HEY THIS Hgs</div>
            {{--<div class="quote">Our Home page!</div>--}}
>>>>>>> fc9b0a2d7d945785635942d961a6f96b22d0578a
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

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

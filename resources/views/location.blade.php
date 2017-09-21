<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$databaseName = "testdb";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `car_locations`";

$result1 = mysqli_query($connect, $query);
?>


@extends('layout.master')

@section('title','location')

@section('content')

    <div class="container">
        <div class="content">
            <div class="title">
                <h2>Find Location</h2>
            </div>
            <h4>Manual Search:</h4>
            <h4>Enter postcode to find cars nearby:</h4>
            <input id="pac-input" class="controls" type="text" placeholder="Search Box"/>
            {{--<h4>Option 2:</h4>--}}
            {{--<h4>Enter your start location:</h4>--}}
            {{--<input type="text" id="start-input" class="controls" placeholder="Start location"/>--}}
            {{--<h4>Enter your end location:</h4>--}}
            {{--<input type="text" id="end-input" class="controls" placeholder="Destination location"/>--}}

            <h4>Current Location Search:</h4>
            <h4>Find Your Car</h4>
            <h4>Current Location:</h4>
            <input type="text" id="start" class="controls">
            <h4>Available Car Locations:</h4> <select id="destination" class="controls">
                <?php while($row1 = mysqli_fetch_array($result1)):;?>
                <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                <?php endwhile;?>
            </select>
            {{--<input type="hidden" type="text" id="end"/>--}}
            <input type="text" id="end" class="controls"/>

            <div id="selection" class="controls">
                <input type="radio" name="type" id="changemode-walking" checked="checked"/>
                <label for="changemode-walking">Walking</label>

                <input type="radio" name="type" id="changemode-transit"/>
                <label for="changemode-transit">Transit</label>

                <input type="radio" name="type" id="changemode-driving"/>
                <label for="changemode-driving">Driving</label>
            </div>
            <div id="dvDistance"></div>


            <div id="map"></div>

            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2 class="location"></h2>
                    </div>
                    <div class="modal-body">
                        <p class="car">
                        </p>


                        <p>
                            @if(!\Illuminate\Support\Facades\Auth::guest())
                                <a href="booking.create" class="button white-text3">
                                    <span>Book</span></a>

                            @endif
                            @if(!\Illuminate\Support\Facades\Auth::check())
                                <a href="login" class="button white-text3">
                                    <span>Book</span></a>
                            @endif
                        </p>
                    </div>

                    <div class="modal-footer">
                        <h3></h3>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script type="text/javascript">
        var map;
        $(document).ready(function() {
            geoLocationInit();
            function geoLocationInit() {
                if(navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(success,fail,optn);
                    var optn ={
                        enableHighAccuracy: true,
                        timeout: Infinity,
                        maximumAge:0
                    }
                    /*navigator.geolocation.watchPosition(success,fail,optn);*/
                }else{
                    alert("Browser not supported");
                }

            }

            function success(position){
                var geocoder = new google.maps.Geocoder();
                var latval=position.coords.latitude;
                var lngval=position.coords.longitude;
                console.log([latval,lngval]);
                myLatLng = new google.maps. LatLng(latval,lngval);
                geocoder.geocode( { 'latLng': myLatLng }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        document.getElementById('start').value = results[0].formatted_address;  /*take current location name*/
                    }
                });
                createMap(myLatLng);
                searchCars(latval,lngval);
                console.log(latval);
                console.log(lngval);
                new AutocompleteDirectionsHandler(map);
            }

            function fail() {
                alert("it fails");
            }

            function createMap(myLatLng) {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    zoom: 12
                });
                var marker = new google.maps.Marker({
                    position:myLatLng,
                    map: map,
                });

                /*marker.addListener('click',function(){
                    alert('Your Current Location: '+myLatLng);

                });*/

                // Create the search box and link it to the UI element.
                var input = document.getElementById('pac-input');
                var searchBox = new google.maps.places.SearchBox(input);
                // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                // Bias the SearchBox results towards current map's viewport.
                map.addListener('bounds_changed', function() {
                    searchBox.setBounds(map.getBounds());
                });

                var markers = [];
                // Listen for the event fired when the user selects a prediction and retrieve
                // more details for that place.
                searchBox.addListener('places_changed', function () {
                    var places = searchBox.getPlaces();

                    if (places.length == 0) {
                        return;
                    }

                    // Clear out the old markers.
                    markers.forEach(function (marker) {
                        marker.setMap(null);
                    });
                    markers = [];

                    // For each place, get the icon, name and location.
                    var bounds = new google.maps.LatLngBounds();
                    places.forEach(function (place) {
                        if (!place.geometry) {
                            console.log("Returned place contains no geometry");
                            return;
                        }
                        var icon = {
                            url: place.icon,
                            size: new google.maps.Size(71, 71),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(17, 34),
                            scaledSize: new google.maps.Size(25, 25)
                        };

                        // Create a marker for each place.
                        markers.push(new google.maps.Marker({
                            map: map,
                            icon: icon,
                            title: place.name,
                            position: place.geometry.location
                        }));

                        if (place.geometry.viewport) {
                            // Only geocodes have viewport.
                            bounds.union(place.geometry.viewport);
                        } else {
                            bounds.extend(place.geometry.location);
                        }
                    });
                    map.fitBounds(bounds);
                });
            }

            function createMarker(latlng, icn, carLocationName) {   /////new create
                var marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    icon: icn,
                    title: name

                });
                marker.addListener('click', function () {

                    displaySomething(carLocationName);

                });

            }

            function searchCars(lat, lng) {
                $.post('/api/searchCars', {lat: lat, lng: lng}, function (match) {
                    $.each(match, function (i, val) {
                        var clatval = val.lat;
                        var clngval = val.lng;
                        var cname = val.name;
                        var Clatlng = new google.maps.LatLng(clatval, clngval);
                        var cicn = 'https://developer.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                        createMarker(Clatlng, cicn, cname);


                    });
                });
            }


            function AutocompleteDirectionsHandler(map) {
                this.map = map;
                this.startPlaceId = null;
                this.endPlaceId = null;
                this.travelMode = 'WALKING';
                var startInput = document.getElementById('start');
                var endInput = document.getElementById('end');  //can change destination or end
                var modeSelector = document.getElementById('selection');
                this.directionsService = new google.maps.DirectionsService;
                this.directionsDisplay = new google.maps.DirectionsRenderer;
                this.directionsDisplay.setMap(map);

                var startAutocomplete = new google.maps.places.Autocomplete(
                    startInput, {placeIdOnly: true});
                var endAutocomplete = new google.maps.places.Autocomplete(
                    endInput, {placeIdOnly: true});

                this.setupClickListener('changemode-walking', 'WALKING');
                this.setupClickListener('changemode-transit', 'TRANSIT');
                this.setupClickListener('changemode-driving', 'DRIVING');
                this.setupPlaceChangedListener(startAutocomplete, 'ORIG');
                this.setupPlaceChangedListener(endAutocomplete, 'DEST');

                //this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
                //this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
                this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);

                /*take the database location_name*/
                $('#destination').change(function(){
                    var end = $('#destination').val();
                    $("#end").val(end);
                });

            }

            AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
                var radioButton = document.getElementById(id);
                var me = this;
                radioButton.addEventListener('click', function() {
                    me.travelMode = mode;
                    me.route();
                });

            };

            AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
                var me = this;
                autocomplete.bindTo('bounds', this.map);
                autocomplete.addListener('place_changed', function() {
                    var place = autocomplete.getPlace();
                    if (!place.place_id) {
                        window.alert("Please select an option from the dropdown list.");
                        return;
                    }
                    if (mode === 'ORIG') {
                        me.startPlaceId = place.place_id;
                    } else {
                        me.endPlaceId = place.place_id;
                    }
                    me.route();
                });

            };

            AutocompleteDirectionsHandler.prototype.route = function() {
                if (!this.startPlaceId || !this.endPlaceId) {
                    return;
                }
                var me = this;

                this.directionsService.route({
                    origin: {'placeId': this.startPlaceId},
                    destination: {'placeId': this.endPlaceId},
                    travelMode: this.travelMode
                }, function(response, status) {
                    if (status === 'OK') {
                        me.directionsDisplay.setDirections(response);
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });

                this.service = new google.maps.DistanceMatrixService;
                this.service.getDistanceMatrix({
                    origins: [{'placeId': this.startPlaceId}],
                    destinations: [{'placeId':this.endPlaceId}],
                    travelMode: this.travelMode,
                    unitSystem: google.maps.UnitSystem.METRIC,
                    avoidHighways: false,
                    avoidTolls: false
                }, function (response, status) {
                    if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                        var distance = response.rows[0].elements[0].distance.text;
                        var duration = response.rows[0].elements[0].duration.text;
                        var dvDistance = document.getElementById("dvDistance");
                        dvDistance.innerHTML = "";
                        dvDistance.innerHTML += "<h4>"+"Distance: " + distance + "<br />"+"</h4>";
                        dvDistance.innerHTML += "<h4>"+"Duration:" + duration + "</h4>";

                    } else {
                        alert("Unable to find the distance via road.");
                    }
                });
            };


            function displaySomething(carLocationName) { //////////new create
                var modal = document.getElementById('myModal');


                var carLocationData = '{!! json_encode($carLocation) !!}';
                var carData = '{!! json_encode($car) !!}';


                var span = document.getElementsByClassName("close")[0];
                var modalTitle = document.getElementsByClassName("location")[0];
                var carItem = document.getElementsByClassName("car")[0];
                var carLocationJSONData = JSON.parse(carLocationData);
                var carJSONData = JSON.parse(carData);


                $.each(carLocationJSONData, function (i, carLocationValue) {
                    if (carLocationValue.name.localeCompare(carLocationName)) {
                        modalTitle.innerHTML = '<p>' + carLocationValue.name + '</p>';
                        $.each(carJSONData, function (j, carValue) {
                            if (carValue.car_location_id == carLocationValue.id && carValue.isBooked == false) {
                                carItem.innerHTML += '<li>' + carValue.name + '</li>';

                            }
                        });
                    }
                });

                modal.style.display = "block";

                // When the user clicks on <span> (x), close the modal

                span.onclick = function () {
                    modal.style.display = "none";
                    $(carItem).empty();

                }


                // When the user clicks anywhere outside of the modal, close it

                window.onclick = function (event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                        $(carItem).empty();
                    }
                }
            }


        });
    </script>

@endsection
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

        var latval=position.coords.latitude;
        var lngval=position.coords.longitude;
        console.log([latval,lngval]);
        myLatLng = new google.maps. LatLng(latval,lngval);
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

        marker.addListener('click',function(){
            alert('Your Current Location: '+myLatLng);
            
        });



        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // Clear out the old markers.
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
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

    function createMarker(latlng,icn,name){                 //new marker location
        var marker= new google.maps.Marker({
            position:latlng,
            map: map,
            icon:icn,
            title:name

        });
        marker.addListener('click',function(){
            alert('Location: '+name);
        });
    }

    function searchCars(lat,lng){                           //tap the new location with the flag
        $.post('http://127.0.0.1:8000/api/searchCars',{lat:lat,lng:lng},function(match){
            $.each(match,function(i,val){
                var clatval=val.lat;
                var clngval=val.lng;
                var cname=val.name;
                var Clatlng = new google.maps.LatLng(clatval,clngval);
                var cicn='https://developer.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                createMarker(Clatlng,cicn,cname);

           displaySomething();

        });

        });
    }


    /*function displayLocation(latitude,longitude){
        var request = new XMLHttpRequest();

        var method = 'GET';
        var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='+latitude+','+longitude+'&sensor=true';
        var async = true;

        request.open(method, url, async);
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                var data = JSON.parse(request.responseText);

                var addressComponents = data.results[0].address_components;
                var addressComponents2 = data.results[0].formatted_address;
                for(i=0;i<addressComponents.length;i++){
                    var types = addressComponents[i].types
                    //alert(types);
                    if(types=="locality,political"){
                        alert(addressComponents2); // this should be your city, depending on where you are
                    }
                }
                //alert(address.city.short_name);
            }
        };
        request.send();
    };

    var successCallback = function(position){
        var x = position.coords.latitude;
        var y = position.coords.longitude;
        displayLocation(x,y);
    };
    navigator.geolocation.getCurrentPosition(successCallback);*/


    function AutocompleteDirectionsHandler(map) {
        this.map = map;
        this.startPlaceId = null;
        this.endPlaceId = null;
        this.travelMode = 'WALKING';
        var startInput = document.getElementById('start-input');
        var endInput = document.getElementById('end-input');
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


    function displaySomething(){
        var modal = document.getElementById('myModal');

        var span = document.getElementsByClassName("close")[0];

        modal.style.display = "block";


    // When the user clicks on <span> (x), close the modal

        span.onclick = function() {
            modal.style.display = "none";
        }


    // When the user clicks anywhere outside of the modal, close it

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    }


});


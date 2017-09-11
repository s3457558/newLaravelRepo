var map;
$(document).ready(function() {
    geoLocationInit();
    function geoLocationInit() {
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(success);
          var optn ={
            enalbeHighAccuracy: true,
            timeout: Infinity,
            maximumAge:0
          }
            navigator.geolocation.watchPosition(success,fail,optn);
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
            map: map

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

    function createMarker(latlng,icn,name){
              var marker= new google.maps.Marker({
                  position:latlng,
                  map: map,
                  icon:icn,
                  title:name

              });
        marker.addListener('click',function(){

           displaySomething();

        });

        }

    function searchCars(lat,lng){
            $.post('http://localhost:5000/api/searchCars',{lat:lat,lng:lng},function(match){
               $.each(match,function(i,val){
                   var clatval=val.lat;
                   var clngval=val.lng;
                   var cname=val.name;
                   var Clatlng = new google.maps.LatLng(clatval,clngval);
                   var cicn='https://developer.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                   createMarker(Clatlng,cicn,cname);


               })
            })
        }

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
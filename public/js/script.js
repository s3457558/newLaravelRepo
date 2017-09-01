$(document).ready(function(){



        var broadway = {
            info: '<strong>Chipotle on Broadway</strong><br>\
					5224 N Broadway St<br> Chicago, IL 60640<br>\
					<a href="https://goo.gl/maps/jKNEDz4SyyH2">Get Directions</a>',
            lat: -37.804489,
            long: 144.961411
        };

        var belmont = {
            info: '<strong>Chipotle on Belmont</strong><br>\
					1025 W Belmont Ave<br> Chicago, IL 60657<br>\
					<a href="https://goo.gl/maps/PHfsWTvgKa92">Get Directions</a>',
            lat: -37.806715,
            long: 144.959643
        };

        var sheridan = {
            info: '<strong>Chipotle on Sheridan</strong><br>\r\
					6600 N Sheridan Rd<br> Chicago, IL 60626<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
            lat: -37.806732,
            long: 144.966016
        };

        var locations = [
            [broadway.info, broadway.lat, broadway.long, 0],
            [belmont.info, belmont.lat, belmont.long, 1],
            [sheridan.info, sheridan.lat, sheridan.long, 2],
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: {lat: -37.8098478, lng: 144.9616898},
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow({});

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

    markers = new google.maps.Marker({
        position:{
            lat:-37.8098478,
            lng:144.9616898
        },
        map:map,
        draggable: true
    });


    var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
    google.maps.event.addListener(searchBox,'places_changed',function(){
        var places = searchBox.getPlaces();
        var bounds = new google.maps.LatLngBounds();
        var i, place;
        for(i=0; place =places[i];i++){
            bounds.extend(place.geometry.location);
            markers.setPosition(place.geometry.location);

        }
        map.fitBounds(bounds);
        map.setZoom(17);
    });


});
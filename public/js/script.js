$(document).ready(function(){



        var LaTrobe = {
            info: '<strong>Car-Share on La Trobe St</strong><br>\
					200-202 La Trobe<br> Melbourne, VIC 3000<br>\
                                <a href="https://goo.gl/maps/o5RB74QxT352">Get Directions</a>',
            lat: -37.809681,
            long: 144.963297
        };

        var Elizabeth = {
            info: '<strong>Car-Share on Elizabeth St</strong><br>\
					28 Elizabeth St<br> Melbourne, VIC 3004<br>\
                                <a href="https://goo.gl/maps/9dEhhM6a8xF2">Get Directions</a>',
            lat: -37.817354,
            long: 144.964716
        };

        var LittleCollins = {
            info: '<strong>Car-Share on Little Collins St</strong><br>\r\
					112-124 Little Collins St<br> Melbourne, VIC 3000<br>\
					<a href="https://goo.gl/maps/SFEkPrAYJjo">Get Directions</a>',
            lat: -37.813327,
            long:  144.969800
        };

        var locations = [
            [LaTrobe.info, LaTrobe.lat, LaTrobe.long, 0],
            [Elizabeth.info, Elizabeth.lat, Elizabeth.long, 1],
            [LittleCollins.info, LittleCollins.lat, LittleCollins.long, 2],
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

    var findMeButton = $('.find-me');
    findMeButton.on('click', function(e) {
        e.preventDefault();
    navigator.geolocation.getCurrentPosition(function (p) {
        var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
        var mapOptions = {
            center: LatLng,
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        markers = new google.maps.Marker({
            position: LatLng,
            map: map,
            draggable: true
        });

    });
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
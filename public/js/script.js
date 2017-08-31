$(document).ready(function(){

	var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -37.8098478, lng: 144.9616898},
          scrollwhell: false,
          zoom: 8
        });
	marker = new google.maps.Marker({
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
			marker.setPosition(place.geometry.location);

		}
		map.fitBounds(bounds);
		map.setZoom(17);
	});


});
var map;
$(document).ready(function() {
    geoLocationInit();
    function geoLocationInit() {
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(success,fail);
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
    }

    function createMarker(latlng,icn,name){
              var marker= new google.maps.Marker({
                  position:latlng,
                  map: map,
                  icon:icn,
                  title:name

              });
        marker.addListener('click',function(){
           alert('This is '+name);
        });
        }

    function searchCars(lat,lng){
            $.post('http://localhost:8000/api/searchCars',{lat:lat,lng:lng},function(match){
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



});
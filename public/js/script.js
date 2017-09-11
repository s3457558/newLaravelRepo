var map;
$(document).ready(function() {
    geoLocationInit();
    function geoLocationInit() {
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(success);
          var optn ={
            enableHighAccuracy: true,
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
            map: map,
            animation: google.maps.Animation.DROP

        });
        marker.addListener('click',function(){
            alert('Your Current Location: '+myLatLng);
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

               })
            })
        }

   
});
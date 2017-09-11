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
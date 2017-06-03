var map;
var myLatLng;
$(document).ready(function () {
    geoLocationInit();
    function geoLocationInit() {
        //current position of the device
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(success,fail);

        }else {
            alert("Browser not supported");
        }

    }

    function success(position) {
        console.log(position)
        var latval=position.coords.latitude;
        var lngval=position.coords.longitude;

         myLatLng = new google.maps.LatLng(latval,lngval);
        createMap(myLatLng);
       nearbySearch(myLatLng,"kids");
       // searchKids(latval,lngval);
    }

    function fail() {
        alert("It fails");

    }

    //var myLatLng = new google.maps.LatLng(48.943740, 5.7771445);

    function createMap(myLatLang) {
         map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                scrollwheel: false,
                zoom: 14
            })
        ;

         var marker= new google.maps.Marker({
             position:myLatLang,
             map: map

         });
    }

//marker
    function createMarker(latlng,icn,name) {
        var marker = new google.maps.Marker({
            position:latlng,
            map: map,
            icon:icn,
            title: name
        });
    }

    function nearbySearch(myLatLng,type) {
    var request = {
        location: myLatLng,
        radius: '1300',
        types: [type]
    };

    service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);


    function callback(results, status) {


        //console.log(results);
        if (status == google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
                var place = results[i];
                console.log(place);
                latlng= place.geometry.location;
                icn="img/drg.png";
                name= place.name;

                createMarker(latlng,icn,name);
            }
        }


    }

    /*function searchKids(lat, lng) {
        $.post('http://location/searchKids', {lat:lat, lng:lng}, function (match) {
        console.log(match);
        });
    }*/
}

});



$(document).ready(function () {

    var myLatLng = new google.maps.LatLng(48.943740, 5.7771445);

    var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            scrollwheel: false,
            zoom: 10
        })
    ;
//marker
    function createMarker(latlng,icn,name) {
        var marker = new google.maps.Marker({
            position:latlng,
            map: map,
            icon:icn,
            title: name
        });
    }


    var request = {
        location: myLatLng,
        radius: '1500',
        types: ['kids']
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
});


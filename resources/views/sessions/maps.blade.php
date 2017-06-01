@extends('layouts.maps')

@section('content')

    <div class="container">

        <div class="column-left">
            <div class="chat-sidebar-left ">

                <br /> <br />
                <h2> Notifications</h2>
                <h4><img width="30" height="30" src="drg.png" /> Dragos  </h4>
                <p> Dragos is close to a dangerous place </p>
                <p> Dragos met Andreea</p>

                <h4><img width="30" height="30" src="and.png" /> Andreea  </h4>
                <p> Andreea met Dragos</p>
                <p> Andreea is close to a dog</p>

                <h4><img width="30" height="30" src="Iri.png" /> Irinel  </h4>
                <p> Irinel is going far from you</p>
                <p> Irinel is close to a danger place</p>



                <h4><img width="30" height="30" src="Simo.png" /> Simona </h4>
                <p> Simona is going far from you</p>

            </div>
        </div>


        <div class="column-center col-lg-offset-1">
            <div id="googleMap" style=" width:110%;height:540px;"></div>

            <script>
                function myMap() {


                    var mapCanvas = document.getElementById("googleMap");
                    var myCenter = new google.maps.LatLng(48.943740, 5.7771445);
                    var mapOptions = { center: myCenter, zoom: 10 };
                    var map = new google.maps.Map(mapCanvas, mapOptions);
                    var marker = new google.maps.Marker({
                        position: myCenter,
                        icon: "drg.png",
                        animation: google.maps.Animation.BOUNCE
                    });
                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow({
                        content: "Dragos"
                    });

                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.open(map, marker);
                    });


                    var myCenter1 = new google.maps.LatLng(48.843740, 5.7771445);
                    var marker1 = new google.maps.Marker({
                        position: myCenter1,
                        icon: "and.png",
                        animation: google.maps.Animation.BOUNCE
                    });
                    marker1.setMap(map);

                    var infowindow1 = new google.maps.InfoWindow({
                        content: "Andreea"
                    });

                    google.maps.event.addListener(marker1, 'click', function () {
                        infowindow1.open(map, marker1);
                    });

                    var myCenter2 = new google.maps.LatLng(48.803740, 5.6771445);
                    var marker2 = new google.maps.Marker({
                        position: myCenter2,
                        icon: "Simo.png",
                        animation: google.maps.Animation.BOUNCE
                    });
                    marker2.setMap(map);

                    var infowindow2 = new google.maps.InfoWindow({
                        content: "Simona"
                    });

                    google.maps.event.addListener(marker2, 'click', function () {
                        infowindow2.open(map, marker2);
                    });


                    var myCenter3 = new google.maps.LatLng(49.023740, 5.5771445);
                    var marker3 = new google.maps.Marker({
                        position: myCenter3,
                        icon: "dani.png",
                        animation: google.maps.Animation.BOUNCE
                    });
                    marker3.setMap(map);

                    var infowindow3 = new google.maps.InfoWindow({
                        content: "Dani"
                    });

                    google.maps.event.addListener(marker3, 'click', function () {
                        infowindow3.open(map, marker3);
                    });

                    var myCenter4 = new google.maps.LatLng(48.893740, 5.971445);
                    var marker4 = new google.maps.Marker({
                        position: myCenter4,
                        icon: "Iri.png",
                        animation: google.maps.Animation.BOUNCE
                    });
                    marker4.setMap(map);

                    var infowindow4 = new google.maps.InfoWindow({
                        content: "Iri"
                    });

                    google.maps.event.addListener(marker4, 'click', function () {
                        infowindow4.open(map, marker4);
                    });



                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                    google.maps.event.addDomListener(window, "resize", function () {
                        var center = map.getCenter();
                        google.maps.event.trigger(map, "resize");
                        map.setCenter(center);
                    });

                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRNhZC1QXdUNlgd5WSlrLWV5XIEK39zvw&callback=myMap"></script>

        </div>



        <div class="column-right chat-sidebar">
            <div class="sidebar-name">
                <!-- Pass username and display name to register popup -->
                <br /> <br /> <br />
                <a href="javascript:register_popup('dragos', 'Dragos');">
                    <img width="30" height="30" src="drg.png" />
                    <span>Dragos</span>
                </a>
            </div>
            <div class="sidebar-name">
                <a href="javascript:register_popup('andreea', 'Andreea');">
                    <img width="30" height="30" src="and.png" />
                    <span>Andreea</span>
                </a>
            </div>
            <div class="sidebar-name">
                <a href="javascript:register_popup('daniel', 'Daniel');">
                    <img width="30" height="30" src="dani.png" />
                    <span>Daniel</span>
                </a>
            </div>
            <div class="sidebar-name">
                <a href="javascript:register_popup('simona', 'Simona');">
                    <img width="30" height="30" src="Simo.png" />
                    <span>Simona</span>
                </a>
            </div>
            <div class="sidebar-name">
                <a href="javascript:register_popup('irinel', 'Irinel');">
                    <img width="30" height="30" src="Iri.png" />
                    <span>Irinel</span>
                </a>
            </div>




        </div>
    </div>

    <br />

    <script>
        //this function can remove a array element.
        Array.remove = function (array, from, to) {
            var rest = array.slice((to || from) + 1 || array.length);
            array.length = from < 0 ? array.length + from : from;
            return array.push.apply(array, rest);
        };

        //this variable represents the total number of popups can be displayed according to the viewport width
        var total_popups = 0;

        //arrays of popups ids
        var popups = [];

        //this is used to close a popup
        function close_popup(id) {
            for (var iii = 0; iii < popups.length; iii++) {
                if (id == popups[iii]) {
                    Array.remove(popups, iii);

                    document.getElementById(id).style.display = "none";

                    calculate_popups();

                    return;
                }
            }
        }

        //displays the popups. Displays based on the maximum number of popups that can be displayed on the current viewport width
        function display_popups() {
            var right = 220;

            var iii = 0;
            for (iii; iii < total_popups; iii++) {
                if (popups[iii] != undefined) {
                    var element = document.getElementById(popups[iii]);
                    element.style.right = right + "px";
                    right = right + 320;
                    element.style.display = "block";
                }
            }

            for (var jjj = iii; jjj < popups.length; jjj++) {
                var element = document.getElementById(popups[jjj]);
                element.style.display = "none";
            }
        }

        //creates markup for a new popup. Adds the id to popups array.
        function register_popup(id, name) {

            for (var iii = 0; iii < popups.length; iii++) {
                //already registered. Bring it to front.
                if (id == popups[iii]) {
                    Array.remove(popups, iii);

                    popups.unshift(id);

                    calculate_popups();


                    return;
                }
            }

            var element = '<div class="popup-box chat-popup" id="' + id + '">';
            element = element + '<div class="popup-head">';
            element = element + '<div class="popup-head-left">' + name + '</div>';
            element = element + '<div class="popup-head-right"><a href="javascript:close_popup(\'' + id + '\');">&#10005;</a></div>';
            element = element + '<div style="clear: both"></div></div><div class="popup-messages"></div></div>';

            document.getElementsByTagName("body")[0].innerHTML = document.getElementsByTagName("body")[0].innerHTML + element;

            popups.unshift(id);

            calculate_popups();

        }

        //calculate the total number of popups suitable and then populate the toatal_popups variable.
        function calculate_popups() {
            var width = window.innerWidth;
            if (width < 540) {
                total_popups = 0;
            }
            else {
                width = width - 200;
                //320 is width of a single popup box
                total_popups = parseInt(width / 320);
            }

            display_popups();

        }

        //recalculate when window is loaded and also when window is resized.
        window.addEventListener("resize", calculate_popups);
        window.addEventListener("load", calculate_popups);

    </script>

    </div>

@endsection
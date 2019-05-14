<html lang="en">
<head>
    <title>Map</title>
</head>

<body>

<?php
include "header.php";
?>

<div class="row indigo darken-4 white-text no-margin-bottom">
    <div class="col s12 left-align">
<p>Get location</p>

<button onclick="getLocation()">Button</button>

<p id="locationgetter"></p>




<script>
    var x = document.getElementById("locationgetter");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
                      "<br>Longitude: " + position.coords.longitude;
    }

    function showError(error) {
        switch(error.code) {
            case error.PERMISSION_DENIED:
                x.innerHTML = "User denied the request for Geolocation."
                break;
            case error.POSITION_UNAVAILABLE:
                x.innerHTML = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                x.innerHTML = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                x.innerHTML = "An unknown error occurred."
                break;
        }
    }



</script>

<meta charset="UTF-8">

<style>
    #map {
        height: 40em;
        width: 100%;
        margin-left: 0;
        margin-right: 0;
    }

    html, body {
        height: 40em;
        width: 100%;
        margin: 0;
        padding: 0;
        alignment: center;
    }
</style>

</div>

<div id="map"></div>
<script>
    var map;
    var fh = [
        {"fh":"Location","coords":[48.158116, 16.382152]}
    ];

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: new google.maps.LatLng(50, 15),
            mapTypeId: 'roadmap'
        });

        mashFh(fh);
    }

    function mashFh(results) {
        for (var i = 0; i < results.length; i++) {
            var coords = results[i].coords;
            var latLng = new google.maps.LatLng(coords[0], coords[1]);
            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                label:results[i].fh
            });
        }
    }



</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTM5RKrtCLpZAj5HU3K3cTvFNB240NsBg&callback=initMap">
</script>

</div>

</body>
</html>

<?php
include "footer.php";
?>
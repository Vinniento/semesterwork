<html lang="en">
<head>
    <title>Map</title>
</head>

<body>

<?php
include "header.php";
?>

<meta charset="UTF-8">

<style>
    #map {
        height: 40em;
        width: 70%;
        margin-left: 15%;
        margin-right: 15%;
    }

    html, body {
        height: 40em;
        width: 100%;
        margin: 0;
        padding: 0;
        alignment: center;
    }
</style>

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
            mapTypeId: 'hybrid'
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
</body>
</html>

<?php
include "footer.php";
?>
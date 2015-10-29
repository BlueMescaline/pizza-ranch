<?php require('include/header.php');
?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>
    function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
            center: new google.maps.LatLng(46.094517,19.662129),
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>
<h1>Térkép</h1><br/>
Címünk: 24000 - Szabadka, Marka Oreškovića 16<br/>
<b>Megközelítés:</b><br/>
<div id="map_canvas"></div>

</div>
<?php include('include/footer.php');?>
</body>
</html>
<?php


require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();


//locate the ip
$geoplugin->locate();
echo "<div style='font-family:sans-serif;font-size:27px'";
echo "<b><b>Country : </b></b>".$geoplugin->countryName."<br>";
echo '<b>City : </b>'.$geoplugin->city."<br>";
$latitude = $geoplugin->latitude;
echo '<b>Latitude : </b>'.$latitude."<br>";
$longitude = $geoplugin->longitude;
echo '<b>Longitude : </b>'.$longitude."<br>";
echo "</div>";


?>


<html>
    <head>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <title>Crisis Route Tracker</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <style>          
          #map { 
            height: 85%;    
            width: 95%;            
          }          
        </style>        
    </head>    
    <body>        
        <div style="padding:10px">
            <center><div id="map"></div></center>
        </div>
        
        <script type="text/javascript">
        var map;
        
        function initMap() {                            
            var latitude = <?php echo $latitude ?>; // YOUR LATITUDE VALUE
            var longitude = <?php echo $longitude ?>; // YOUR LONGITUDE VALUE
            
            var myLatLng = {lat: latitude, lng: longitude};
            
            map = new google.maps.Map(document.getElementById('map'), {
              center: myLatLng,
              zoom: 14                    
            });
                    
            var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              //title: 'Hello World'
              
              // setting latitude & longitude as title of the marker
              // title is shown when you hover over the marker
              title: latitude + ', ' + longitude 
            });            
        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQP4fgidoVqfll52kYuljTbNsAnqlowlg&callback=initMap"
        async defer></script>
    </body>    
</html>
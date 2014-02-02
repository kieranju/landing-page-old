<?php 
	$navHome = '<li><h3><a href="index.php">HOME</a></h3></li';
	$navListing = '><li><h3><a href="listings.php">LISTING</a></h3></li';
	$navBuyers = '><li><h3><a href="buyers.php">BUYERS</a></h3></li';
	$navSellers = '><li><h3><a href="sellers.php">SELLERS</a></h3></li';
	$navContact = '><li id="current"><h3><a href="contact.php">CONTACT</a></h3></li>';
	
	$pageTitle = 'Reineer &ndash; Contact';
	
	require('./templates/header.php');
?>

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(49.37694, -122.64472),
                    styles: [{'featureType':'water','stylers':[{'visibility':'on'},{'color':'#acbcc9'}]},{'featureType':'landscape','stylers':[{'color':'#f2e5d4'}]},{'featureType':'road.highway','elementType':'geometry','stylers':[{'color':'#c5c6c6'}]},{'featureType':'road.arterial','elementType':'geometry','stylers':[{'color':'#e4d7c6'}]},{'featureType':'road.local','elementType':'geometry','stylers':[{'color':'#fbfaf7'}]},{'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#c5dac6'}]},{'featureType':'administrative','stylers':[{'visibility':'on'},{'lightness':33}]},{'featureType':'road'},{'featureType':'poi.park','elementType':'labels','stylers':[{'visibility':'on'},{'lightness':20}]},{},{'featureType':'road','stylers':[{'lightness':20}]}]
                };
                var mapElement = document.getElementById('map');
                var map = new google.maps.Map(mapElement, mapOptions);
            }
        </script>

        <main>
            <section class="mainTop"></section>
            <section class="mainMid">
                <section class="midContent">
                    <img id="contact" src="images/contact_card.png">
                    <div id="map"></div>
                    <div class="clear"></div>
                </section>
            </section>
        </main>
		<?php require('./templates/footer.php'); ?>
    </body>
</html>
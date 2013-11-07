<!-- Begin Document Head -->
<?php include('includes/doc-head.php'); ?>
<!-- End Document Head -->
<!-- Begin Header -->
<?php include('includes/header.php'); ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
 <script type="text/javascript">      
   // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 11,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(41.87397, -87.62601), // New York

          // How you would like to style the map. 
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{
              featureType: 'water',
              elementType: 'all',
              stylers: [{
                  hue: '#e9ebed'
              }, {
                  saturation: -78
              }, {
                  lightness: 67
              }, {
                  visibility: 'simplified'
              }]
          }, {
              featureType: 'landscape',
              elementType: 'all',
              stylers: [{
                  hue: '#ffffff'
              }, {
                  saturation: -100
              }, {
                  lightness: 100
              }, {
                  visibility: 'simplified'
              }]
          }, {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{
                  hue: '#bbc0c4'
              }, {
                  saturation: -93
              }, {
                  lightness: 31
              }, {
                  visibility: 'simplified'
              }]
          }, {
              featureType: 'poi',
              elementType: 'all',
              stylers: [{
                  hue: '#ffffff'
              }, {
                  saturation: -100
              }, {
                  lightness: 100
              }, {
                  visibility: 'off'
              }]
          }, {
              featureType: 'road.local',
              elementType: 'geometry',
              stylers: [{
                  hue: '#e9ebed'
              }, {
                  saturation: -90
              }, {
                  lightness: -8
              }, {
                  visibility: 'simplified'
              }]
          }, {
              featureType: 'transit',
              elementType: 'all',
              stylers: [{
                  hue: '#e9ebed'
              }, {
                  saturation: 10
              }, {
                  lightness: 69
              }, {
                  visibility: 'on'
              }]
          }, {
              featureType: 'administrative.locality',
              elementType: 'all',
              stylers: [{
                  hue: '#2c2e33'
              }, {
                  saturation: 7
              }, {
                  lightness: 19
              }, {
                  visibility: 'on'
              }]
          }, {
              featureType: 'road',
              elementType: 'labels',
              stylers: [{
                  hue: '#bbc0c4'
              }, {
                  saturation: -93
              }, {
                  lightness: 31
              }, {
                  visibility: 'on'
              }]
          }, {
              featureType: 'road.arterial',
              elementType: 'labels',
              stylers: [{
                  hue: '#bbc0c4'
              }, {
                  saturation: -93
              }, {
                  lightness: -2
              }, {
                  visibility: 'simplified'
              }]
          }]
      };

      // Get the HTML DOM element that will contain your map 
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map');

      // Create the Google Map using out element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);
  }
</script>
<!-- End Header -->
<!-- Begin Main Content -->
<div class="container pad-40">
	<div class="row">
		<div class="col-lg-5">
			<h1>
				Contact Us
			</h1>
			<p class="mrg-40">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque. Sed pharetra nibh eget orci convallis at posuere leo convallis. Sed blandit augue vitae augue scelerisque bibendum. Vivamus sit amet libero turpis, non venenatis urna. In blandit, odio convallis suscipit venenatis, ante ipsum cursus augue.
			</p>
			<h5>
				Bulldog Connect
			</h5>
			<p class="address">
				<em class="glyphicon glyphicon-home h6"></em> 123 Main St, Chicago, IL 60606
			</p>
			<p class="contact">
				<em class="glyphicon glyphicon-earphone h6"></em> 888.888.8888<br>
				<em class="glyphicon glyphicon-envelope h6"></em> <a href="mailto:info@bulldogconnect.com">info@bulldogconnect.com</a>
			</p>
		</div>
		<div class="col-lg-7">
			<div id="map">
				
			</div>
		</div>
	</div>
</div>
<!-- End Main Content -->
<!-- Begin About Profiles -->
<?php include('includes/profiles.php'); ?>
<!-- End About Profiles -->
<!-- Begin Footer -->
<?php include('includes/footer.php'); ?>
<!-- End Footer -->
<!-- Begin Footer Bottom -->
<?php include('includes/footer-bottom.php'); ?>
<!-- End Footer Bottom -->
<!-- Container -->
<!-- Begin Footer Scripts -->
<?php include('includes/footer-scripts.php'); ?>
<!-- End Footer Scripts -->

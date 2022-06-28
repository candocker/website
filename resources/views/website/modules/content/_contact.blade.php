  <body class="page">
    <div class="uix-wrapper">
        <!-- Header Area
        ============================================= -->      
                <!-- Footer
        ============================================= -->    
    </div>
    <!-- .uix-wrapper end -->
	<!-- Google Map API
	============================================= -->
	<script>
	  function initMap() {
		var mapDiv = document.getElementById('map');
		var map = new google.maps.Map(mapDiv, {
			center: {lat: 44.540, lng: -78.546},
			zoom: 8
		});
	  }
	</script>
	<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA0kxSY0g5flUWptO4ggXpjhVB-ycdqsDk&ver=2.0&callback=initMap'></script>
	<!-- Google Map API  end -->

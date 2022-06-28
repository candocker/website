  <body class="page">
    <!-- Loader
    ============================================= -->      
    <div class="uix-loader">
        <!--[if lt IE 10]>
            <span>Loading...</span>
        <![endif]-->
        <svg class="uix-loader__spinner is-hide-IE" viewBox="0 0 52 52">
			<path d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z"></path>
        </svg>
    </div>
    <div class="uix-loader-progress" data-txt="{progress}%"><span>0%</span></div>
    <div class="uix-loader-progress__line"></div>
    <!-- .uix-loader end -->
    <!-- Mobile Menu Toggle Trigger
    ============================================= -->    
	<div class="uix-menu-mobile__toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>
    <div class="uix-menu-mobile__mask"></div>
	<!-- .uix-menu-mobile__toggle end -->
    <div class="uix-wrapper">
        <!-- Header Area
        ============================================= -->      
        <div class="uix-header__placeholder js-uix-header__placeholder-autoheight"></div>
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

@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
		<main id="uix-maincontent">
			<!-- Content 
			====================================================== -->
			<section class="uix-spacing--s uix-spacing--no-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h3>Text Effect</h3>
							<p>Add attributes <code>data-text-eff="letters-eff-{EFF}-{INDEX}"</code> and <code>data-text-eff-speed="800"</code> to any HTML tag. 
									<br>
									The value of <code>{EFF}</code> are: <em>fadeInRight</em>, <em>zoomInDown</em>, <em>flyInOut</em>, <em>fading</em>, <em>floatingUp</em>, <em>scaleIn</em>.
									<br>
									The value of <code>{INDEX}</code> can be any different character.</p>
							<hr>
						</div>
					</div>
					<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>	
		   <!-- Content 
			====================================================== -->
			<section class="uix-spacing--s">
				<div class="container">
						<div class="row">
							<div class="col-12">
								<h4 data-text-eff="letters-eff-fadeInRight-001" data-text-eff-speed="5500">FadeInRight effect is used on the same page at the same time (Speed: 5500ms)</h4>
								<h4 data-text-eff="letters-eff-fadeInRight-002" data-text-eff-speed="1500">FadeInRight effect is used on the same page at the same time (Speed: 1500ms)</h4>
								<h4 data-text-eff="letters-eff-fadeInRight-003" data-text-eff-speed="100">FadeInRight effect is used on the same page at the same time (Speed: 100ms)</h4>
								<hr>					
                                <br><br><br><br>
								<h4 data-text-eff="letters-eff-zoomInDown-001" data-text-eff-speed="1500">ZoomInDown Text Effect Here</h4>
								<hr>
								<h4 data-text-eff="letters-eff-flyInOut-001" data-text-eff-speed="1500">FlyInOut Text Effect Here</h4>
								<hr>	
								<h4 data-text-eff="letters-eff-fading-001" data-text-eff-speed="1500">Fading Text Effect Here</h4>
								<hr>					
                                <br><br><br><br>
								<h4 data-text-eff="letters-eff-floatingUp-001" data-text-eff-speed="1500">FloatingUp Text Effect Here</h4>
								<hr>					
								<h4 data-text-eff="letters-eff-scaleIn-001" data-text-eff-speed="5000">ScaleIn Text Effect Here</h4>
								<hr>					
							</div>
						</div>
						<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
		</main>
@endsection
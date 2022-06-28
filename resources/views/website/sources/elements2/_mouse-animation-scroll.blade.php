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
							<h3>Mouse Animation Scroll</h3>
							<p>A delicate scrolling mouse animation will offer direction to the user after the initial land on a website. </p>
							<hr>
						</div>
					</div>
					<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
		   <!-- Content 
			====================================================== -->
			<div style="background: #000; padding: 5rem; margin: 3rem 0; position: relative;">
				<div class="uix-mouse-icon uix-mouse-icon--simulation"></div>
			</div>
			<div style="background: #000; padding: 5rem; margin: 3rem 0; position: relative;">
				<div class="uix-mouse-icon uix-mouse-icon--arrow"></div>
			</div> 
			<div style="background: #000; padding: 5rem; margin: 3rem 0; position: relative;">
				<div class="uix-mouse-icon uix-mouse-icon--arrow-simple"></div>
			</div>      
		</main>
@endsection
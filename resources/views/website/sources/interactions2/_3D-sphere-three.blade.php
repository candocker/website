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
							<h3>3D Sphere Rotation</h3>
							<p>Added texture to the rotating sphere.</p>
							<hr>
						</div>
					</div>
					<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
			<!-- Content 
			====================================================== -->
			<canvas style="margin-top: -5rem;" id="3D-sphere-three-canvas"></canvas>
		</main>
@endsection
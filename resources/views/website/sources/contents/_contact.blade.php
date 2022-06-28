@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
		<main id="uix-maincontent">
			<!-- Content   
			====================================================== -->
			<section>
				<section class="uix-spacing--s uix-spacing--no-top">
					<style>
					#map {
						width: 100%;
						height: 400px;
					}
					</style>
					<div id="map"></div>
				</section>
				<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 uix-trans">
								<h4>GET IN TOUCH</h4>
								<p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, </p>
								<hr>
								<p> 438 Marine Parade
								<br /> Elwood, Victoria
								<br /> P.O Box 3184 </p>
								<hr>
								<p> <strong>E:</strong> hello@foundry.net
								<br /> <strong>P:</strong> +614 3948 2726
								<br /> </p>
							</div>
							<!-- .col-lg-6.col-md-6 end -->
							<div class="col-lg-6 col-md-6 uix-trans">
									 <form method="post" action="#">
										<div class="uix-controls is-fullwidth">
										  <input type="text" class="js-uix-float-label" name="author">
										  <label>Author</label>
										</div>
										<div class="uix-controls is-fullwidth">
										  <input type="email" class="js-uix-float-label" name="email">
										  <label>Email</label>
										</div>
										<div class="uix-controls uix-controls__textarea is-fullwidth">
										  <textarea name="comments" rows="5" class="js-uix-float-label"></textarea>
										  <label>Comments</label>
										</div>
										<div class="uix-controls">
										  <button type="submit" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary">Submit</button>
										</div>  
									</form>
							</div>
							<!-- .col-lg-6.col-md-6 end -->             
						</div>
						<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
		</main>
@endsection
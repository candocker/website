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
							<h3>Sticky Elements</h3>
							<p>
							   Use the <code>.js-uix-sticky-el</code> to add a HTML tag you want. Set <code>data-stop-trigger</code> and <code>data-stop-trigger-diff</code> properties to turn off sticky.
								</p>
							<hr>
						</div>
					</div>
					<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
		   <!-- Content 
			====================================================== -->
			<section class="uix-spacing--s" style="height: 3000px;">
				<div class="container">
					<div class="row">
						<div class="col-12">
								<div class="js-uix-sticky-el" data-stop-trigger=".uix-footer__container" data-stop-trigger-diff="%h/3">
									<h4>Sticky Title Here</h4>
									<div style="height: 500px; background: #f2f2f2; margin-bottom: 50px;"></div>
								</div>
						</div>
					</div>
					<!-- .row  end -->
				</div>
				<!-- .container end -->
			</section>
		</main>
@endsection
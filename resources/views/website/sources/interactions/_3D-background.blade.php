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
							<h3>Only One</h3>
							<p>Transform individual elements by spying to the entire window.</p>
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
				<div class="container uix-t-c">
						<div class="row">
							<div class="col-12">
								<div class="uix-3d-bg">
									<div data-3d-animate='{"offset":[10,1],"reset":true}'>
										<img src="../assets/images/demo/test-img-big-2.jpg" alt="" width="320" />
									</div>
								</div>	
							</div>
						</div>
						<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
			<!-- Content 
			====================================================== -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h3>Multiple Images</h3>
							<p>This transitional effect can be seen when you move your mouse over a certain element that makes it change position or animate.</p>
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
				<div class="container uix-t-c">
						<div class="row">
							<div class="col-12">
								<div class="uix-3d-bg">
									<div data-3d-animate='{"offset":[20,2],"reset":false}'>
										<img src="../assets/images/demo/test-img-big-1.jpg" alt="" width="200" />
										<img src="../assets/images/demo/test-img-big-2.jpg" alt="" width="300" />
										<img src="../assets/images/demo/test-img-big-3.jpg" alt="" width="170" />
									</div>
								</div>
							</div>
						</div>
						<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
		</main>
@endsection
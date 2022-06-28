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
							<h3>3D Carousel</h3>
							<p>A simple 3D Carousel that makes it easy to modify JavaScript and CSS for customization.</p>
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
								<div class="uix-3d-carousel" 
									data-timing="3500" 
									data-draggable="true"
									data-prev-btn=".my-carousel-3d-prev" 
									data-next-btn=".my-carousel-3d-next">
									<ul>
										<li class="uix-3d-carousel__item uix-3d-carousel__item--main-pos">
											<img src="../assets/images/demo/test-img-big-1.jpg" alt="">
										</li>
										<li class="uix-3d-carousel__item uix-3d-carousel__item--main-pos">
											<img src="../assets/images/demo/test-img-big-2.jpg" alt="">
										</li>
										<li class="uix-3d-carousel__item uix-3d-carousel__item--main-pos">
											<img src="../assets/images/demo/test-img-big-3.jpg" alt="">
										</li>
										<li class="uix-3d-carousel__item uix-3d-carousel__item--main-pos">
											<img src="../assets/images/demo/test-img-big-4.jpg" alt="">
										</li>
									</ul>
								</div>
								<p>
									<br>
									<a href="javascript:" class="my-carousel-3d-prev">Previous</a> | 
									<a href="javascript:" class="my-carousel-3d-next">Next</a>
								</p>
							</div>
						</div>
						<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
		</main>
@endsection
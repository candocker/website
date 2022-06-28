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
							<h3>Maintain Aspect Ratio List</h3>
							<p>Create flexible elements that keep their aspect ratio (1:1, 4:3, 16:9, etc.) when resized. You can refer to the <strong>Uix Grid</strong> to customize the number of columns.</p>
							<hr>
						</div>
					</div>
					<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
		   <!-- Content 
			====================================================== -->
			<section class="uix-spacing--s uix-spacing--no-bottom">
				<div class="container">
					   <div class="uix-list-aspect-ratio">
							<div class="uix-core-grid">
								<div class="uix-core-grid__row">
									<div class="uix-core-grid__col-4">
										<div class="uix-list-aspect-ratio__content">
											<a class="uix-list-aspect-ratio__item" href="#">
												<i class="fa fa-balance-scale" aria-hidden="true"></i>
											</a>
										</div>
									</div>
									<div class="uix-core-grid__col-4">
										<div class="uix-list-aspect-ratio__content">
											<a class="uix-list-aspect-ratio__item" href="#">
												<i class="fa fa-podcast" aria-hidden="true"></i>
											</a>
										</div>
									</div>
									<div class="uix-core-grid__col-4">
										<div class="uix-list-aspect-ratio__content">
											<a class="uix-list-aspect-ratio__item" href="#">
												<i class="fa fa-binoculars" aria-hidden="true"></i>
											</a>
										</div>
									</div>										
								</div>
								<!-- .uix-core-grid__row  end -->
							</div>
							<!-- /.uix-core-grid --> 
					   </div>
					   <!-- /.uix-list-aspect-ratio -->       
				</div>
				<!-- .container end -->
			</section>   
		</main>
@endsection
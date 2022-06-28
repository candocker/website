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
							<h3>Radial Progress Bar</h3>
							<p>Scroll the page down to preview</p>
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
									<div class="uix-progressbar--circle uix-progressbar--progress-0" data-progressbar-percent="30" data-progressbar-unit="%"> 
										<span class="uix-progressbar__track">
											<span>0<em class="uix-progressbar__unit">%</em></span>
										</span>
										<div class="uix-progressbar__pie">
											<div class="uix-progressbar__pie--left-side uix-progressbar__pie--half-circle"></div>
											<div class="uix-progressbar__pie--right-side uix-progressbar__pie--half-circle"></div>
										</div>
										<div class="uix-progressbar__title">Title 1</div>
									</div>
									<div class="uix-progressbar--circle uix-progressbar--progress-0" data-progressbar-percent="45" data-progressbar-unit="%">
										<span class="uix-progressbar__track">
											<span>0<em class="uix-progressbar__unit">%</em></span>
										</span>
										<div class="uix-progressbar__pie">
											<div class="uix-progressbar__pie--left-side uix-progressbar__pie--half-circle"></div>
											<div class="uix-progressbar__pie--right-side uix-progressbar__pie--half-circle"></div>
										</div>
										<div class="uix-progressbar__title">Title 2</div>
									</div>
									<div class="uix-progressbar--circle uix-progressbar--progress-0" data-progressbar-percent="66" data-progressbar-unit="%">
										<span class="uix-progressbar__track">
											<span>0<em class="uix-progressbar__unit">%</em></span>
										</span>
										<div class="uix-progressbar__pie">
											<div class="uix-progressbar__pie--left-side uix-progressbar__pie--half-circle"></div>
											<div class="uix-progressbar__pie--right-side uix-progressbar__pie--half-circle"></div>
										</div>
										<div class="uix-progressbar__title">Title 3</div>
									</div>
									<div class="uix-progressbar--circle uix-progressbar--progress-0 is-transparent" data-progressbar-percent="100" data-progressbar-unit="%">
										<span class="uix-progressbar__track">
											<span>0<em class="uix-progressbar__unit">%</em></span>
										</span>
										<div class="uix-progressbar__pie">
											<div class="uix-progressbar__pie--left-side uix-progressbar__pie--half-circle"></div>
											<div class="uix-progressbar__pie--right-side uix-progressbar__pie--half-circle"></div>
										</div>
										<div class="uix-progressbar__title">Title 4</div>
									</div>
									<div class="uix-progressbar--circle uix-progressbar--progress-0 is-transparent" data-progressbar-percent="55" data-progressbar-unit="%">
										<span class="uix-progressbar__track">
											<span>0<em class="uix-progressbar__unit">%</em></span>
										</span>
										<div class="uix-progressbar__pie">
											<div class="uix-progressbar__pie--left-side uix-progressbar__pie--half-circle"></div>
											<div class="uix-progressbar__pie--right-side uix-progressbar__pie--half-circle"></div>
										</div>
										<div class="uix-progressbar__title">Title 5</div>
									</div>
									<div class="uix-progressbar--circle uix-progressbar--progress-0 is-transparent" data-progressbar-percent="18" data-progressbar-unit="%">
										<span class="uix-progressbar__track">
											<span>0<em class="uix-progressbar__unit">%</em></span>
										</span>
										<div class="uix-progressbar__pie">
											<div class="uix-progressbar__pie--left-side uix-progressbar__pie--half-circle"></div>
											<div class="uix-progressbar__pie--right-side uix-progressbar__pie--half-circle"></div>
										</div>
										<div class="uix-progressbar__title">Title 6</div>
									</div>
							</div>
							<!-- .col-12 end -->
						</div>
						<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
			<!-- Content 
			====================================================== -->
			<section class="uix-spacing--s uix-spacing--no-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h3>Horizontal Rectangle Progress Bar</h3>
							<p>Scroll the page down to preview</p>
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
							<div class="col-12 uix-trans">
								<div class="uix-progressbar--rectangle uix-progressbar--progress-0" data-progressbar-percent="30" data-progressbar-unit="%">
									<div class="uix-progressbar__title">Title 1</div>
									<div class="uix-progressbar__bar">
										<div class="uix-progressbar__track"></div>
										<span>0<em class="uix-progressbar__unit">%</em></span>
									</div>
								</div>
								<div class="uix-progressbar--rectangle uix-progressbar--progress-0" data-progressbar-percent="57" data-progressbar-unit="%">
									<div class="uix-progressbar__title">Title 2</div>
									<div class="uix-progressbar__bar">
										<div class="uix-progressbar__track"></div>
										<span>0<em class="uix-progressbar__unit">%</em></span>
									</div>
								</div>
								<div class="uix-progressbar--rectangle uix-progressbar--progress-0" data-progressbar-percent="100" data-progressbar-unit="%">
									<div class="uix-progressbar__title">Title 3</div>
									<div class="uix-progressbar__bar">
										<div class="uix-progressbar__track"></div>
										<span>0<em class="uix-progressbar__unit">%</em></span>
									</div>
								</div>
							</div>
							<!-- .col-12 end -->
						</div>
						<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
		</main>
@endsection
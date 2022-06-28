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
							<h3>Periodical Scroll</h3>
							<p>Continuous vertical text scroll without break.</p>
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
								<div class="uix-periodical-scroll" data-speed="600" data-timing="4000">
									<ul>
										<li><span>February 8, 2018</span><a href="#" target="_blank">An underlying front-end system that makes it easy to extend and modify core files.</a></li>
										<li><span>February 3, 2018</span><a href="#" target="_blank">This spec is a living document that will be updated.</a></li>
										<li><span>July 22, 2017</span><a href="#" target="_blank">We continue to develop the tenets and specifics of Uix Kit.</a></li>
                                        <li><span>April 5, 2020</span><a href="#" target="_blank">Hello World! (Last)</a></li>
									</ul>
								</div>
								<!-- .uix-periodical-scroll end -->     
							</div>
						</div>
						<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
		</main>
@endsection
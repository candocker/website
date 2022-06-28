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
							<h3>Infinite Scrolling Element</h3>
							<p>Build an infinite looping scrolling elements.</p>
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
								<div style="position: relative; z-index: 1; border: 1px solid rgb(221, 221, 221); border-radius: 8px; background: rgb(249, 249, 249); width: 800px; max-width: 100%;">
									<div class="uix-infinite-scrolling" data-speed="3000" data-gap="20">
										<ul>
											<li>This is list item 1</li>
											<li>This is list item 2</li>
											<li>This is list item 3</li>
											<li>This is list item 4 (last)</li>
										</ul>
									</div>
									<!-- .uix-periodical-scroll end -->     
								</div>
							</div>
						</div>
						<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
		</main>
@endsection
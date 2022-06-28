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
							<h3>Dropdown Menu</h3>
							<p>Click the hyperlink to display the drop-down menu</p>
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
								<details class="uix-details-reset uix-dropdown-menu">
									<summary><i class="fa fa-cog" aria-hidden="true"></i> <span>Click Me</span></summary>
									<input type="hidden" value="boy">
									<ul>
										<li><a data-value="boy" data-display-text="Boy(ok)" href="#1">Boy</a></li>
										<li><a data-value="girl" data-display-text="Girl(ok)" href="#2">Girl</a></li>
										<li><a data-value="" data-display-text="" href="#3">Don't Change Text</a></li>
									</ul>
								</details><!-- /.uix-dropdown-menu -->
							</div>
						</div>
						<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
		</main>
@endsection
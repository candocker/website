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
							<h3>Equal Width Columns</h3>
							<p>Using only CSS, we can make a tabbed navigation whose tabs always occupy an equal share of the available width. No JS to interrogate the DOM, no server-side logic to count through items, no inline styles.</p>
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
						<div class="uix-equal-width-divs uix-t-c">
							<ul>
								<li><h3>223</h3><span>Web Design</span></li>
								<li><h3>13</h3><span>UI</span></li>
								<li><h3>5</h3><span>SEO</span></li>  
								<li><h3>567</h3><span>Interaction</span></li>  
							</ul>
						</div>
						<!-- .uix-equal-width-divs  end -->
						<div class="uix-equal-width-divs uix-equal-width-divs--no-break uix-t-c">
							<ul>
								<li><h3>223</h3><span>No Break</span></li>
								<li><h3>13</h3><span>No Break</span></li>
								<li><h3>5</h3><span>No Break</span></li>  
								<li><h3>567</h3><span>No Break</span></li>  
							</ul>
						</div>
						<!-- .uix-equal-width-divs  end -->
				</div>
				<!-- .container end -->
			</section>
		</main>
@endsection
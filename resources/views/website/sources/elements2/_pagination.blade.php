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
							<h3>Pagination</h3>
							<p>To add some sort of pagination to each page. </p>
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
									<div class="uix-pagination__container uix-t-c uix-trans">
										<ul>
											<li class="previous"><a class="prev page-numbers" href="#"><i class="fa fa-angle-left"></i></a></li>
											<li><a class='page-numbers' href='#'>1</a></li>
											<li class="is-active"><span class='page-numbers current'>2</span></li>
											<li><a class='page-numbers' href='#'>3</a></li>
											<li class="next"><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div> 
									<!-- .uix-pagination__container  end -->    
									<hr>
									<div class="uix-pagination__container uix-t-c uix-trans">
										<ul>
											<li class="previous"><a class="prev page-numbers" href="#"><i class="fa fa-angle-left"></i></a></li>
											<li><a class='page-numbers' href='#'>1</a></li>
											<li class="is-active"><span class='page-numbers current'>2</span></li>
											<li><span>...</span></li>
											<li><a class='page-numbers' href='#'>133</a></li>
											<li><a class='page-numbers' href='#'>134</a></li>
											<li class="next"><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div> 
									<!-- .uix-pagination__container  end -->    
									<hr>
									<div class="uix-pagination__container uix-trans uix-clearfix">
										<ul>
											<li class="previous uix-f-l"><a class="prev page-numbers" href="#"><i class="fa fa-angle-left"></i></a></li>
											<li class="next uix-f-r"><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div> 
									<!-- .uix-pagination__container  end -->        
							</div>
						</div>
						<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
		</main>
@endsection
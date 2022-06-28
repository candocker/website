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
							<h3>Progress Line</h3>
							<p>Move the mouse over the element to see the effect</p>
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
					<div class="uix-progress-line">
						<div class="uix-progress-line__circle"> 
							<span class="uix-progress-line__circle__label"><i class="fa fa-flag" aria-hidden="true"></i></span> 
							<span class="uix-progress-line__circle__num">01</span> 
							<span class="uix-progress-line__circle__title">Title</span> 
						</div> 
						<span class="uix-progress-line__bar"></span>
						<div class="uix-progress-line__circle"> 
							<span class="uix-progress-line__circle__label"><i class="fa fa-ban" aria-hidden="true"></i></span> 
							<span class="uix-progress-line__circle__num">02</span> 
							<span class="uix-progress-line__circle__title">Title Title Title</span> 
						</div> 
						<span class="uix-progress-line__bar"></span>
						<div class="uix-progress-line__circle"> 
							<span class="uix-progress-line__circle__label"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span> 
							<span class="uix-progress-line__circle__num">03</span> 
							<span class="uix-progress-line__circle__title">Title</span> 
						</div> 
						<span class="uix-progress-line__bar"></span>
						<div class="uix-progress-line__circle"> 
							<span class="uix-progress-line__circle__label"><i class="fa fa-microphone" aria-hidden="true"></i></span> 
							<span class="uix-progress-line__circle__num">04</span> 
							<span class="uix-progress-line__circle__title">Title</span> 
						</div> 
						<span class="uix-progress-line__bar"></span>
						<div class="uix-progress-line__circle"> 
							<span class="uix-progress-line__circle__label"><i class="fa fa-pencil" aria-hidden="true"></i></span> 
							<span class="uix-progress-line__circle__num">05</span> 
							<span class="uix-progress-line__circle__title">Title</span> 
						</div> 
						<span class="uix-progress-line__bar"></span>
						<div class="uix-progress-line__circle"> 
							<span class="uix-progress-line__circle__label"><i class="fa fa-eye" aria-hidden="true"></i></span> 
							<span class="uix-progress-line__circle__num">06</span> 
							<span class="uix-progress-line__circle__title">Title</span> 
						</div> 
						<span class="uix-progress-line__bar"></span>
					</div>
				</div>
				<!-- .container end -->
			</section>
		</main>    
@endsection
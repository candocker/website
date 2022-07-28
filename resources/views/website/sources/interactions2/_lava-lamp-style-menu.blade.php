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
							<h3>Lava-Lamp Style Menu</h3>
							<p>It makes use of an element to create an animated,interactive magic line under the menu items just like the Lava Lamp navigation.</p>
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
					<div class="uix-lavalamp-menu__container">
						<ul class="uix-lavalamp-menu">
							<li><a href="#">menu</a></li>
							<li><a href="#">long menu</a></li>
							<li><a href="#">even longer menu</a></li>
							<li><a href="#">short menu</a></li>
						</ul>
					</div>   
					<!-- /.uix-lavalamp-menu__container -->           
				</div> 
				<!-- .container end -->
			</section>
		</main>
@endsection

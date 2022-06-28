@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
		<main id="uix-maincontent">
			<!-- Parallax & Overlay 
			============================================= --> 
			<section>
				<div class="uix-parallax uix-height--100 uix-typo--color-white" data-fully-visible="false" data-offset-top="0" data-overlay-bg="false" data-skew="0" data-speed="0.3">
					<img class="uix-parallax__img" src="../assets/images/demo/spiral-galaxy-1920x1080.jpg" alt="">
					<div class="uix-v-align--absolute uix-t-c uix-hidden-scrollbar-x">
						<div class="container uix-t-c">
							<div class="row">
								<div class="col-md-4 offset-md-4">
									<h1>Page Title</h1>
									<h3 class="uix-typo--h4 uix-typo--style-normal">Page Title Description</h3>
								</div>
							</div>
							<!-- .row end -->  
						</div>
					</div>
				</div>
			</section>
		   <!-- Content   
			====================================================== -->
			<section class="uix-spacing--s">
				<div class="container">
					<div class="uix-container__bg uix-container__bg--white uix-container__bg--shadow uix-container__bg--totop-large uix-container__bg--rounded-medium">
						<div class="row uix-spacing--s">
							<div class="col-md-10 offset-md-1">
								<h3>Material Container</h3>
								<p>You can add the following classes after the <code>.container</code> to set different styles:</p>
								<p>
									<code>uix-container__bg uix-container__bg--totop-large</code><br>
									<code>uix-container__bg uix-container__bg--totop-medium</code><br>
									<code>uix-container__bg uix-container__bg--totop-small</code><br>
								</p>
								<p>If you want add fillet effect, continue to superimpose the following several styles:</p>
								<p>
									<code>uix-container__bg--rounded-large</code><br>
									<code>uix-container__bg--rounded-medium</code><br>
									<code>uix-container__bg--rounded-small</code><br>
								</p>	
								<p>If you want add shadow, continue to superimpose the following several styles:</p>
								<p>
									<code>uix-container__bg--shadow</code><br>
								</p>	                  
								<p>If you want add background, continue to superimpose the following several styles:</p>
								<p>
									<code>uix-container__bg--white</code><br>
								</p>	              
								<p>If the left and right gaps are zero, continue to superimpose the following several styles:</p>
								<p>
									<code>uix-container__bg--no-gutters</code><br>
								</p>	                   
							</div>
						</div>
						<!-- .row end -->			
					</div>
					<!-- .uix-container__bg end -->              
				</div>
				<!-- .container end -->  
			</section>
		</main>
@endsection
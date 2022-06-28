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
							<h3>Button</h3>
							<p>
									If you need to use multiple colors, you can add CSS styles yourself, such as: <code>.uix-btn__bg--blue</code>, <code>.uix-btn__bg--purple</code> ...
								</p>
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
							<div class="col-12" id="my-ajax-demo-target-button">
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--hyperlink">Tiny</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--hyperlink">Small</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--m uix-btn__bg--hyperlink">Medium</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--l uix-btn__bg--hyperlink">Large</a>
								<br>  
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--hyperlink2">Tiny</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--hyperlink2">Small</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--m uix-btn__bg--hyperlink2">Medium</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--l uix-btn__bg--hyperlink2">Large</a>
								<br>      
								<a href="#" tabindex="0"  class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary"><i class="fa fa-bullhorn" aria-hidden="true"></i>Tiny</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary"><i class="fa fa-bullhorn" aria-hidden="true"></i>Small</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--m uix-btn__bg--primary"><i class="fa fa-cogs" aria-hidden="true"></i>Medium</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--l uix-btn__bg--primary"><i class="fa fa-flask" aria-hidden="true"></i>Large</a>
								<br>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary">Tiny<i class="fa fa-bullhorn" aria-hidden="true"></i></a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary">Small<i class="fa fa-bullhorn" aria-hidden="true"></i></a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--m uix-btn__bg--primary">Medium<i class="fa fa-cogs" aria-hidden="true"></i></a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--l uix-btn__bg--primary">Large<i class="fa fa-flask" aria-hidden="true"></i></a>
								<br>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary uix-btn__icon uix-btn__icon--right"><span><i class="fa fa-bullhorn" aria-hidden="true"></i></span>Icon Right</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary uix-btn__icon uix-btn__icon--left"><span><i class="fa fa-cogs" aria-hidden="true"></i></span>Icon Left</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-pill is-transparent uix-btn__icon uix-btn__icon--right"><span><i class="fa fa-bullhorn" aria-hidden="true"></i></span>Icon Left</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-pill is-transparent uix-btn__icon uix-btn__icon--left"><span><i class="fa fa-cogs" aria-hidden="true"></i></span>Icon Right</a>
								<br>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary is-disabled">Tiny</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-disabled">Small</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--m uix-btn__bg--primary is-disabled">Medium</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--l uix-btn__bg--primary is-disabled">Large</a>
								<br>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary is-waiting">Tiny</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-waiting">Small</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--m uix-btn__bg--primary is-waiting">Medium</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--l uix-btn__bg--primary is-waiting">Large</a>
								<br>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary is-pill">Tiny</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-pill">Small</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--m uix-btn__bg--primary is-pill">Medium</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--l uix-btn__bg--primary is-pill">Large</a>
								<br>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary is-rounded">Tiny</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-rounded">Small</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--m uix-btn__bg--primary is-rounded">Medium</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--l uix-btn__bg--primary is-rounded">Large</a>
								<br>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary is-pill is-transparent">Tiny Radius</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-pill is-transparent">Small Radius</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--m uix-btn__bg--primary is-pill is-transparent">Medium Radius</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--l uix-btn__bg--primary is-pill is-transparent">Large Radius</a>
								<hr>
								<div class="uix-btn__group uix-btn__margin--b">
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-pill is-transparent">Group</a>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-pill is-transparent">Group</a>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-pill is-transparent">Group</a>
								</div>
								 <br>
								<div class="uix-btn__group uix-btn__margin--b">
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary">Group</a>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary">Group</a>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary">Group</a>
								</div>
								<hr>
								<div class="uix-btn__group is-fullwidth uix-btn__margin--b">
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-pill is-transparent">Group</a>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-pill is-transparent">Group</a>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-pill is-transparent">Group</a>
								</div>
								 <br>
								<div class="uix-btn__group is-fullwidth uix-btn__margin--b">
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary">Group</a>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary">Group</a>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary">Group</a>
								</div>
								<hr>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary is-fullwidth">Tiny Full Width</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-fullwidth">Small Full Width</a>
								<br>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--m uix-btn__bg--primary is-fullwidth">Medium Full Width</a>
								<br>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--l uix-btn__bg--primary is-fullwidth">Large Full Width</a>
								<br>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary is-fullwidth is-pill">Tiny Full Width Radius</a>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-fullwidth is-pill">Small Full Width Radius</a>
								<br>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--m uix-btn__bg--primary is-fullwidth is-pill">Medium Full Width Radius</a>
								<br>
								<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--l uix-btn__bg--primary is-fullwidth is-pill">Large Full Width Radius ( More Text )</a>
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
					<div class="row">
						<div class="col-12">
							<h3>Secondary Button</h3>
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
                                <a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-fill-white">Secondary Button</a>
                                <a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-rounded is-fill-white">Secondary Button</a>
                                <a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-pill is-fill-white">Secondary Button</a>
                                <br> 
								<div class="uix-t-c" style="background: #333; padding: 1.5rem 0 0; margin-top: 1rem;">
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-fill-white">White Button</a>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary">White Button</a>
									<br>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-pill is-fill-white">White Button</a>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-pill">White Button</a>
									<br>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-fill-white uix-btn__icon uix-btn__icon--right"><span><i class="fa fa-bullhorn" aria-hidden="true"></i></span>Icon Right</a>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-fill-white uix-btn__icon uix-btn__icon--left"><span><i class="fa fa-cogs" aria-hidden="true"></i></span>Icon Left</a>
									<br>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary uix-btn__icon uix-btn__icon--right"><span><i class="fa fa-bullhorn" aria-hidden="true"></i></span>Icon Right</a>
									<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary uix-btn__icon uix-btn__icon--left"><span><i class="fa fa-cogs" aria-hidden="true"></i></span>Icon Left</a>
									<br>
								</div>
							</div>     
						</div>
						<!-- .row end -->  
				</div>
				<!-- .container end -->
			</section>
		</main>
@endsection
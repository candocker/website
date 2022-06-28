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
							<h3>Vertical Centering</h3>
							<p>Divided into several different centered types.</p>
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
						<div class="col-md-6 offset-md-3">
							<div class="uix-relative">
								<img src="../assets/images/demo/test-img-big-3.jpg" alt="" width="100%">
								<div class="uix-v-align--absolute uix-t-c">
									<h3>Floating element without outer height</h3>
								</div>
							</div>
						</div>
					</div>
					<!-- .row end -->	
                    <p>&nbsp;</p>  
                    <div class="row">  
						<div class="col-md-6 offset-md-3">
							<div class="uix-relative--inline uix-relative--inline-clip" style="height: 400px;">
								<img src="../assets/images/demo/vertical-img.jpg" alt="" width="100%"  class="uix-parallax--el" data-transition="all 0.4s cubic-bezier(0, 0, 0.34, 0.96) 0s" data-speed="-0.2" style="margin-top: -100px;">
								<div class="uix-v-align--absolute uix-t-c">
									<h3>Parallax floating element</h3>
								</div>
							</div>
						</div>
					</div>
					<!-- .row end -->	
                    <p>&nbsp;</p>
                    <div class="row">  
						<div class="col-md-6 offset-md-3">
							<div class="uix-relative--inline uix-relative--inline-clip" style="height: 400px;">
								<img src="../assets/images/demo/vertical-img.jpg" alt="" width="100%"  class="uix-parallax--el" data-transition="all 0.4s cubic-bezier(0, 0, 0.34, 0.96) 0s" data-speed="-0.2" style="margin-top: -100px;">
								<div class="uix-v-align--table uix-t-c uix-overlay uix-overlay--black uix-overlay--cover">
									<div>
										<h3 class="uix-typo--color-white">Parallax floating element (Overlay)</h3>
									</div>
								</div>
								<!-- .uix-v-align--table  end -->
							</div>
						</div>
					</div>
					<!-- .row end -->	
                    <p>&nbsp;</p>
					<div class="row">
						<div class="col-md-6 offset-md-3">
							<div class="uix-relative" style="background: #F0F0F0; height: 400px;">
								<img src="../assets/images/demo/test-img-big-1.jpg" alt="" class="img-fluid w-100 h-100">
								<div class="uix-v-align--absolute uix-t-c">
									<h3>Floating element</h3>
									<p class="uix-striking-msg uix-striking-msg--default is-pill uix-striking-msg--inline">
									   <i class="fa fa-info-circle" aria-hidden="true"></i><span>The outer container needs to have a height</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- .row end -->	
                    <p>&nbsp;</p>  
                    <div class="row">     
						<div class="col-md-6 offset-md-3">
							<div class="uix-relative" style="background: #F0F0F0; height: 400px;">
								<div class="uix-v-align--relative uix-t-c">
									<h3>Non-floating element</h3>
									<p>Restore default alignment when using a mobile device</p>
									<p class="uix-striking-msg uix-striking-msg--default is-pill uix-striking-msg--inline">
									   <i class="fa fa-info-circle" aria-hidden="true"></i><span>The outer container needs to have a height</span>
									</p>
								</div>
								<!-- .uix-v-align--relative  end -->
							</div>
						</div>
					</div>
					<!-- .row end -->	
                    <p>&nbsp;</p>
					<div class="row">
						<div class="col-md-6 offset-md-3">
							<div class="uix-relative" style="background: #F0F0F0; height: 400px;">
								<div class="uix-v-align--table uix-t-c">
									<div>
										<h3>Normal Inner Element</h3>
										<p class="uix-striking-msg uix-striking-msg--default is-pill uix-striking-msg--inline">
										   <i class="fa fa-info-circle" aria-hidden="true"></i><span>The outer container needs to have a height</span>
										</p>
									</div>
								</div>
								<!-- .uix-v-align--table  end -->
							</div>
						</div>
					</div>
					<!-- .row end -->	
                    <p>&nbsp;</p>  
					<div class="row">
						<div class="col-md-6 offset-md-3">
							<div class="uix-relative" style="background: #F0F0F0; height: 400px;">
								<img src="../assets/images/demo/test-img-big-1.jpg" alt="" class="img-fluid w-100 h-100">
								<div class="uix-v-align--absolute uix-v-align--absolute--b uix-t-c">
									<h3>Floating element (Bottom)</h3>
									<p class="uix-striking-msg uix-striking-msg--default is-pill uix-striking-msg--inline">
									   <i class="fa fa-info-circle" aria-hidden="true"></i><span>The outer container needs to have a height</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- .row end -->	
                    <p>&nbsp;</p>  
                    <div class="row">  
						<div class="col-md-6 offset-md-3">
							<div class="uix-relative" style="background: #F0F0F0; height: 400px;">
								<img src="../assets/images/demo/test-img-big-1.jpg" alt="" class="img-fluid w-100 h-100">
								<div class="uix-v-align--absolute uix-v-align--absolute--t uix-t-c">
									<h3>Floating element (Top)</h3>
									<p class="uix-striking-msg uix-striking-msg--default is-pill uix-striking-msg--inline">
									   <i class="fa fa-info-circle" aria-hidden="true"></i><span>The outer container needs to have a height</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- .row end -->	
                    <p>&nbsp;</p>
					<div class="row">
						<div class="col-md-6 offset-md-3">
							<div class="uix-relative" style="background: #F0F0F0; height: 400px;">
								<div class="uix-v-align--table uix-v-align--table--b uix-t-c">
									<div>
										<h3>Normal Inner Element (Bottom)</h3>
										<p class="uix-striking-msg uix-striking-msg--default is-pill uix-striking-msg--inline">
										   <i class="fa fa-info-circle" aria-hidden="true"></i><span>The outer container needs to have a height</span>
										</p>
									</div>
								</div>
								<!-- .uix-v-align--table  end -->
							</div>
						</div>
					</div>
					<!-- .row end -->	
                    <p>&nbsp;</p>  
                    <div class="row"> 
						<div class="col-md-6 offset-md-3">
							<div class="uix-relative" style="background: #F0F0F0; height: 400px;">
								<div class="uix-v-align--table uix-v-align--table--t uix-t-c">
									<div>
										<h3>Normal Inner Element (Top)</h3>
										<p class="uix-striking-msg uix-striking-msg--default is-pill uix-striking-msg--inline">
										   <i class="fa fa-info-circle" aria-hidden="true"></i><span>The outer container needs to have a height</span>
										</p>
									</div>
								</div>
								<!-- .uix-v-align--table  end -->
							</div>
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
							<h3>Using Bootstrap</h3>
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
						<div class="col-md-6 offset-md-3 uix-t-c">
							<div class="d-flex" style="height: 300px; background: #F0F0F0;">
								<div class="justify-content-center align-self-center">
								  I'm vertically centered
								</div>
							</div>
						</div>
					</div>
					<!-- .row end -->	
				</div>
				<!-- .container end -->
			</section>   	
		</main>
@endsection
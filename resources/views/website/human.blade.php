@extends('layouts.website')

 
@section('content')
  
          
              
    <!-- Loader
    ============================================= -->      
    <div class="uix-loader">
        <!--[if lt IE 10]>
            <span>Loading...</span>
        <![endif]-->
        <svg class="uix-loader__spinner is-hide-IE" viewBox="0 0 52 52">
			<path d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z"></path>
        </svg>
    </div>
    <div class="uix-loader-progress" data-txt="{progress}%"><span>0%</span></div>
    <div class="uix-loader-progress__line"></div>
    <!-- .uix-loader end -->
    

    
    <!-- Mobile Menu Toggle Trigger
    ============================================= -->    
	<div class="uix-menu-mobile__toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>
    <div class="uix-menu-mobile__mask"></div>
	<!-- .uix-menu-mobile__toggle end -->

			
    

  
  
    <div class="uix-wrapper">
    
        <!-- Header Area
        ============================================= -->      
        <header class="uix-header__container uix-header__container--overlay">
            
             <div class="uix-header">
                 <div class="container">
                 
                                                <div class="uix-brand">
                            <a href="index.html"><img src="{{$commonAssetUrl}}/website/assets/images/logo.png" alt="Uix Kit"></a>                       
                        </div>
                        <!-- .uix-brand end -->
                        
                        
                        
                        <!-- Navigation Start-->
                        
                        <nav class="uix-menu__container">
                               
                               <div class="uix-menu__inner">
                               
									<span class="uix-brand--mobile"><img src="{{$commonAssetUrl}}/website/assets/images/logo-colorful.png" alt="Uix Kit"></span>
									<ul class="uix-menu"> 
										<li class="multi-column current-menu-item is-active"><a href="index.html">Components</a>
											<ul class="sub-menu">

												
												<li>
													<span class="multi-column-title">Web Elements (Basic)</span>
													<ul class="sub-menu">
														<li><a href="helper-classes.html">Helper Classes</a></li>
														<li><a href="uix-grid.html">Uix Grid</a></li>
														<li><a href="bootstrap-grid.html">Bootstrap Grid</a></li>
														<li><a href="blended-grid-layout.html">Blended Grid</a></li>
                                                        <li><a href="gallery-grid-layout.html">Gallery Grid</a></li>
														<li><a href="spacing.html">Spacing</a></li>
														<li><a href="material-container.html">Material Container</a></li>
														<li><a href="striking.html">Striking</a></li>
														<li><a href="button.html">Buttons</a></li>
														<li><a href="overlay.html">Overlay</a></li>
														<li><a href="video.html">Video</a></li>
														<li><a href="video-background.html">Video BG</a></li>
														<li><a href="heading.html">Heading</a></li>
														<li><a href="dividing-line.html">Dividing Line</a></li>
														<li><a href="images.html">Images</a></li>
														<li><a href="responsive-images.html">Responsive Images</a></li>
                                                        <li><a href="background-interaction.html">Background</a></li>
														<li><a href="parallax.html">Parallax</a></li>
														<li><a href="parallax2.html">Parallax 2</a></li>
														<li><a href="vertical-centering.html">Vertical Centering</a></li>
														<li><a href="equal-width-columns.html">Equal-width Columns</a></li>
														<li><a href="equal-height-columns.html">Equal-height Columns</a></li>
														<li><a href="align-wide-and-full-element.html">Align Wide/Full Element</a><span class="uix-bubble">new</span></li>
														
														
													</ul>
													
													<!-- .sub-menu  end -->
												</li>
												
													
												

												<li>
													<span class="multi-column-title">Web Elements (Part 1)</span>
													<ul class="sub-menu">
														<li><a href="navs.html">Navs</a></li>
														<li><a href="breadcrumbs.html">Breadcrumbs</a></li>
														<li><a href="lightbox.html">Lightbox</a></li>
														<li><a href="modal-dialog.html">Modal Dialog</a></li>
														<li><a href="modal-dialog-auto.html">Modal Dialog Auto-open</a></li>
														<li><a href="social-meida-icons.html">Social Media Icons</a></li>
														<li><a href="form.html">Form Elements</a></li>
														<li><a href="form2.html">Form Elements 2</a></li>
                                                        <li><a href="form-layout.html">Form Layout</a></li>
														<li><a href="form-progress.html">Form Progress</a></li>
														<li><a href="counter.html">Counter</a></li>
														<li><a href="progress-bar.html">Progress Bar</a></li>
														<li><a href="progress-line.html">Progress Line</a></li>
														<li><a href="vertical-text.html">Vertical Text</a></li>
														<li><a href="circle-text.html">Circle Text</a></li>
														<li><a href="coach-mark.html">Coach Mark</a></li>
														<li><a href="separator-of-rule-with-text.html">Separator of Rule With Text</a></li>
														<li><a href="wave-background.html">Wave Background</a></li>
												        <li><a href="shape-animation.html">Shape Animation</a></li>
													    <li><a href="image-animation.html">Image Animation</a></li>
													    <li><a href="svg-map.html">SVG Map</a></li>
													    <li><a href="floating-side-element.html">Floating Side Element</a></li>
													    <li><a href="infinite-scrolling-element.html">Infinite Scrolling Element</a><span class="uix-bubble">new</span></li>
                                                        
														
													</ul>
													<!-- .sub-menu  end -->
												</li>
												
												
												<li>
													<span class="multi-column-title">Web Elements (Part 2)</span>
													<ul class="sub-menu">
														<li><a href="tooltip.html">Tooltip</a></li>
														<li><a href="ribbon.html">Ribbon</a></li>	
														<li><a href="footer-templates.html">Footer Templates</a></li>
														<li><a href="login-templates.html">Login Templates</a><span class="uix-bubble">new</span></li>
														<li><a href="pagination.html">Pagination</a></li>
														<li><a href="badges.html">Badges</a></li>
														<li><a href="mouse-animation-scroll.html">Mouse Animation Scroll</a></li>
														<li><a href="periodical-scroll.html">Periodical Scroll</a></li>	
														<li><a href="image-shapes.html">Image Shapes</a></li>
														<li><a href="rotating-elements.html">Rotating Elements</a></li>
														<li><a href="dotted-line.html">Dotted Line</a></li>
														<li><a href="flexslider.html">Flexslider<small style="font-size: 10px;background: #51B801; color:#fff; border-radius: 5px;padding: 2px 3px;display: inline-block;margin-left: 3px;">Third-party plugin</small></a></li>
														<li><a href="swiper.html">Swiper<small style="font-size: 10px;background: #51B801; color:#fff; border-radius: 5px;padding: 2px 3px;display: inline-block;margin-left: 3px;">Third-party plugin</small></a></li>
														<li><a href="advanced-slider.html">Advanced Slider (Basic)</a></li>
														<li><a href="advanced-slider-brightness.html">Advanced Slider Brightness</a></li>
														<li><a href="advanced-slider-liquid.html">Advanced Slider Liquid</a></li>
														<li><a href="advanced-slider-liquid2.html">Advanced Slider Liquid 2</a></li>
														<li><a href="advanced-slider-liquid3.html">Advanced Slider Liquid 3</a></li>
														<li><a href="advanced-slider-parallax.html">Advanced Slider Parallax</a></li>
														<li><a href="hybrid-content-slider.html">Hybrid Content Slider</a><span class="uix-bubble">new</span></li>
														<li><a href="svg-mask-slider.html">SVG Mask Slider</a><span class="uix-bubble">new</span></li>
														<li><a href="3D-explosive-particle-slider.html">3D Explosive Particle Slider</a></li>
														<li><a href="3D-shatter-slider.html">3D Shatter Slider</a></li>
                                                        <li><a href="3D-liquid-scrollspy-slider.html">3D Liquid Scrollspy Slider</a><span class="uix-bubble">new</span></li>
															
														
														
													</ul>
													<!-- .sub-menu  end -->
												</li>
												

			
												<li>
													<span class="multi-column-title">Contents (Part 1)</span>
													<ul class="sub-menu">
														
														<li><a href="content-placeholder-animated.html">Content Placeholder Animated</a></li>
														<li><a href="list-posts.html">Posts List</a></li>
														<li><a href="fullwidth-column-to-edge.html">Full Width Column to Edge</a><span class="uix-bubble">new</span></li>
														<li><a href="list-side-by-side.html">Side by Side List</a></li>
														<li><a href="list-side-by-side-img.html">Side by Side List With Photo</a></li>
														<li><a href="list-bulleted.html">Bulleted List</a></li>
														<li><a href="list-brands.html">Brands List</a></li>
														<li><a href="list-maintain-aspect-ratio.html">Maintain Aspect Ratio List</a></li>
														<li><a href="single-post.html">Single Post</a></li>
														<li><a href="sidebar.html">Sidebar</a></li>
														<li><a href="contact.html">Contact Form With Map</a></li>
														<li><a href="features.html">Features</a></li>
														<li><a href="pricing.html">Pricing</a></li>
														<li><a href="testimonials.html">Testimonials</a></li>
														<li><a href="tabs.html">Tabs</a></li>
														<li><a href="accordion.html">Accordion</a></li>
														<li><a href="accordion-img.html">Accordion Background Images</a></li>
														<li><a href="gallery.html">Gallery Normal</a></li>
														<li><a href="gallery-filter.html">Gallery Filterable</a></li>
														<li><a href="gallery-masonry.html">Gallery Masonry</a></li>
														<li><a href="gallery-masonry-ajax.html">Gallery Masonry With Ajax</a><span class="uix-bubble">new</span></li>
														
														
														
													</ul>
													<!-- .sub-menu  end -->
												</li>
												
												<li>
													<span class="multi-column-title">Contents (Part 2)</span>
													<ul class="sub-menu">
														<li><a href="card.html">Cards</a></li>
														<li><a href="table-series.html">Table</a></li>
														<li><a href="table-sorter.html">Table Sorter</a></li>	
														<li><a href="timeline.html">Timeline</a></li>
														<li><a href="multi-items-carousel.html">Multiple Items Carousel</a></li>
														<li><a href="team-fullwidth.html">Team Fullwidth</a></li>
														<li><a href="team-grid.html">Team Grid</a></li>
														<li><a href="team-focus.html">Team Focus</a></li>
														<li><a href="circle-layout.html">Circle Layout</a></li>
														<li><a href="3D-carousel.html">3D Carousel</a></li>
														<li><a href="3D-gallery.html">3D Gallery (threejs)</a></li>
														<li><a href="cascading-dropdown-list.html">Cascading DropDown List</a><span class="uix-bubble">new</span></li>
														
														
													</ul>
													<!-- .sub-menu  end -->
												</li>	
		
												
												<li>
													<span class="multi-column-title">Interaction (Part 1)</span>
													<ul class="sub-menu">
														<li><a href="sticky-elements.html">Sticky Elements</a></li>
														<li><a href="scroll-reveal.html">Scroll Reveal</a></li>
														<li><a href="scrollspy-animate.html">Scrollspy Animate</a><span class="uix-bubble">new</span></li>
														<li><a href="skew-on-scroll.html">Skew on Scroll</a><span class="uix-bubble">new</span></li>
														<li><a href="text-effect.html">Text Effect</a><span class="uix-bubble">new</span></li>
                                                        <li><a href="smooth-scrolling-page.html">Smooth Scrolling Page</a></li>
														<li><a href="list-posts-with-ajax.html">Ajax Load Posts</a></li>
														<li><a href="list-posts-with-ajax2.html">Ajax Load Posts 2</a></li>
														<li><a href="list-posts-with-ajax-infinitescroll.html">Infinite Scroll Posts</a></li>
														<li><a href="show-more-less.html">Show More Less</a></li>
														<li><a href="mousewheel-interaction.html">Mousewheel Interaction</a></li>
														<li><a href="hover-delay-interaction.html">Hover Delay Interaction</a></li>
														<li><a href="one-page.html">Full Page/One Page</a></li>
														<li><a href="one-page2.html">Full Page/One Page 2</a></li>
														<li><a href="ajax-page-loader.html">Ajax Page Loader</a></li>
														<li><a href="ajax-push-content.html">Ajax Push Content</a></li>
														<li><a href="3D-background.html">3D Background</a></li>
														<li><a href="3D-background-three.html">3D Background 1 (threejs)</a></li>
														<li><a href="3D-background-three2.html">3D Background 2 (threejs)</a></li>
														<li><a href="3D-background-three3.html">3D Background 3 (threejs)</a></li>
														<li><a href="3D-simulate-html-layout.html">Simulate HTML Layout (threejs)</a></li>

															
														
													</ul>
													<!-- .sub-menu  end -->
												</li>

												
												
												<li>
													<span class="multi-column-title">Interaction (Part 2)</span>
													<ul class="sub-menu">
														<li><a href="3D-pages.html">3D Pages</a></li>
														<li><a href="3D-particle-effect.html">3D Particle Effect</a></li>
														<li><a href="3D-sphere-three.html">3D Sphere Rotation</a></li>
														<li><a href="3D-obj-anim-interaction.html">3D Object Anim Interaction</a></li>
														<li><a href="3D-image-transition.html">3D Image Transition (threejs)</a></li>
														<li><a href="3D-mouse-interaction.html">3D Mouse Interaction (threejs)</a></li>
														<li><a href="3D-mouse-interaction2.html">3D Mouse Interaction2 (threejs)</a></li>
														<li><a href="3D-model.html">3D Model</a></li>			
														<li><a href="3D-filmic-effects.html">3D Filmic Effects</a><span class="uix-bubble">new</span></li>			
                                                        
														
													</ul>
													<!-- .sub-menu  end -->
												</li>					
												
											
											</ul>

										</li>
										<li><a href="#">Menu</a>
											<ul class="sub-menu">
												<li><a href="mega-menu.html">Mega Menu</a></li>
												<li><a href="mega-menu-rtl.html">Mega Menu(RTL)</a></li>
												<li><a href="dropdown-menu.html">Dropdown Menu</a></li>
												<li><a href="dropdown-menu2.html">Dropdown Menu 2(Multi-level)</a></li>
												<li><a href="vertical-menu.html" target="_blank">Vertical Menu</a></li>
												<li><a href="lava-lamp-style-menu.html">Lava-Lamp Style Menu</a><span class="uix-bubble">new</span></li>
												
												

											</ul>
											<!-- .sub-menu  end -->
										</li>

										<li><a href="typography.html">Typography</a>
											<ul class="sub-menu">
												<li><a href="typography.html">LTR</a></li>
												<li><a href="typography-rtl.html">RTL</a></li>
												<li><a href="typography-cn.html">中文</a></li>

											</ul>
										</li>
										
										
										<li><a href="sample-page-1.html">Sample Pages</a>
											<ul class="sub-menu">
												<li><a href="sample-page-1.html">Sample Page 1</a></li>
												<li><a href="sample-page-2.html">Sample Page 2</a></li>

												
											</ul>
										</li>
										
										

									</ul>
									<div class="uix-menu__right-box">
										<a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin uix-social-btn--white" title="Follow us on Twitter" href="https://twitter.com/uiux_lab" target="_blank">
											<i class="fa fa-twitter"></i>
										</a>
										<a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin uix-social-btn--white" title="Follow us on Facebook" href="https://www.facebook.com/uiuxlabhome" target="_blank">
											<i class="fa fa-facebook"></i>
										</a>
										<a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin uix-social-btn--white" title="Fork on Github" href="https://github.com/xizon/uix-kit" target="_blank">
											<i class="fa fa-github"></i>
										</a>          
									</div>
                               
							   </div><!-- /.uix-menu__inner -->
        
                        </nav>
                        <!-- .uix-menu__container end -->
                        
                 
                   
                        
                        
                        
                  </div>
                  <!-- .container end -->
                  
                  <div class="uix-clearfix"></div>
             </div>
        
        </header>
 
		
		<main id="uix-maincontent">
			
			
			<!-- Slideshow
			====================================================== -->
		   <div role="banner" class="uix-advanced-slider-sp__wrapper">

			   <div class="uix-advanced-slider__outline uix-advanced-slider-sp uix-advanced-slider-sp--eff-parallax" 
				  data-draggable="false"
				  data-draggable-cursor="move"	   
				  data-auto="true"
				  data-loop="true"
				  data-speed="800"
				  data-timing="5000" 
				  data-count-total="false"
				  data-count-now="false"
				  data-filter-texture="false"
				  data-controls-pagination=".my-a-slider-pagination-2" 
				  data-controls-arrows="false">
				   <div class="uix-advanced-slider-sp__inner">

					   <div class="uix-advanced-slider-sp__item">
						   <img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-1.jpg" alt="Title 1" />
							<div class="uix-advanced-slider-sp__txt">
								<div class="uix-core-grid__col-7 uix-typo--color-white">
									<h2 data-text-eff="letters-eff-flyInOut1" data-text-eff-speed="800">Beautiful Free &amp; Premium Responsive WordPress Themes</h2>
									<p data-text-eff="letters-eff-flyInOut1-2" data-text-eff-speed="500">Uix Responsive Web UI Frameworks</p>
									<a href="#" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-pill is-fill-white">Link To</a>
								</div>

							</div>   
					   </div>

					   <div class="uix-advanced-slider-sp__item">
						   <img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-2.jpg" alt="Title 1" />
							<div class="uix-advanced-slider-sp__txt">
								<div class="uix-core-grid__col-7 uix-typo--color-white">
									<h2 data-text-eff="letters-eff-flyInOut2" data-text-eff-speed="800">Hello World</h2>
									<p data-text-eff="letters-eff-flyInOut2-2" data-text-eff-speed="500">UIUX Lab carefully crafts original design assets and publishes articles about UI/UX trends!</p>
									<a href="#" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-pill is-fill-white">Link To</a>
								</div>

							</div>
					   </div>

					   <div class="uix-advanced-slider-sp__item">
						   <img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-3.jpg" alt="Title 1" />
							<div class="uix-advanced-slider-sp__txt">
								<div class="uix-core-grid__col-7 uix-typo--color-white">
									<h2 data-text-eff="letters-eff-flyInOut3" data-text-eff-speed="800">Title 3</h2>
									<p data-text-eff="letters-eff-flyInOut3-2" data-text-eff-speed="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>

							</div>			   
					   </div>



				   </div>
				  <!-- /.uix-advanced-slider-sp__inner -->

				</div>
			   <!-- /.uix-advanced-slider__outline -->	   
		   </div>
		   <!-- /.uix-advanced-slider-sp__wrapper -->

			<div class="uix-advanced-slider-sp__pagination my-a-slider-pagination-2"></div>

			<!-- Content
			====================================================== -->
			<section class="uix-spacing--s">

				<div class="container">


					<div class="row">
						<div class="col-12 col-lg-4 col-sm-12">
							<div class="uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}' >
								<h3 class="uix-t-l uix-t-c--md">My Story</h3>
								<p class="uix-t-l uix-t-c--md">
									UIUX Lab carefully crafts original design assets and publishes articles about UI/UX trends!
									<br>
									An underlying front-end system that makes it easy to extend and modify core files. This spec is a living document that will be updated as we continue to develop the tenets and specifics of Uix Kit. Support JS and CSS component( SCSS ) development with Gulp & Webpack together.
								</p> 

								<p class="uix-t-l uix-t-c--md">
									<a href="#" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary uix-btn__icon uix-btn__icon--left"><span><i class="fa fa-cogs" aria-hidden="true"></i></span>Free Download</a>
								</p>

							</div>
						</div>
						<!-- //////// -->
						<div class="col-12 col-lg-4 col-sm-6">
							<div class="uix-el--transparent uix-border--rounded uix-border--rounded-img" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0.2,"infinite":false}' > 
								<img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-3.jpg" alt="">
							</div>
						</div>
						<!-- ///////// -->
						<div class="col-12 col-lg-4 col-sm-6">
							<div class="uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0.4,"infinite":false}' >


								<p>

									<h3>Personal Information</h3>
									<dl class="uix-list-abreast uix-list-abreast--icon">

										<dt><i class="fa fa-location-arrow" aria-hidden="true"></i></dt>
										<dd>
											<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
											<p>Eet lacinia odio sem nec elit.</p>
										</dd>


									</dl>

									<dl class="uix-list-abreast uix-list-abreast--icon">

										<dt><i class="fa fa-envelope" aria-hidden="true"></i></dt>
										<dd>
											<p>your@gmail.com </p>
										</dd>

									</dl>

									<dl class="uix-list-abreast uix-list-abreast--icon">

										<dt><i class="fa fa-phone" aria-hidden="true"></i></dt>
										<dd>
											<p>(1234) 12345678</p>
										</dd>

									</dl>					


									<dl class="uix-list-abreast uix-list-abreast--icon">

										<dt><i class="fa fa-fax" aria-hidden="true"></i></dt>
										<dd>
											<p>(1234) 12345678</p>
										</dd>

									</dl>	


								</p>

								<hr>

								<p>
									<a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin" title="Follow us on Twitter" href="https://twitter.com/uiux_lab" target="_blank">
										<i class="fa fa-twitter"></i>
									</a>
									<a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin" title="Follow us on Facebook" href="https://www.facebook.com/uiuxlabhome" target="_blank">
										<i class="fa fa-facebook"></i>
									</a>
									<a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin" title="Fork on Github" href="https://github.com/xizon/uix-kit" target="_blank">
										<i class="fa fa-github"></i>
									</a> 

								</p>							
							</div>

						</div>
						<!-- /////// -->

					</div>
					<!-- .row end -->
				</div>
				<!-- .container end -->

			</section> 



		   <!-- Section Title
			====================================================== -->
			<section>
				<div class="container uix-t-c">
						<div class="row uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}'>
							<div class="col-12">
								<h2>Skills</h2>
								<p>Ability to use skills for commercial projects</p>

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
						<div class="row uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}'>
							<div class="col-12">


								<div class="row">
									<div class="col-lg-3 col-6">
										<div class="uix-progressbar--circle uix-progressbar--progress-0 is-transparent" data-progressbar-percent="100" data-progressbar-unit="%">
											<span class="uix-progressbar__track">
												<span>0<em class="uix-progressbar__unit">%</em></span>
											</span>
											<div class="uix-progressbar__pie">
												<div class="uix-progressbar__pie--left-side uix-progressbar__pie--half-circle"></div>
												<div class="uix-progressbar__pie--right-side uix-progressbar__pie--half-circle"></div>
											</div>
											<div class="uix-progressbar__title">Front-end Kit</div>
										</div>


									</div>
									<div class="col-lg-3 col-6">

										<div class="uix-progressbar--circle uix-progressbar--progress-0 is-transparent" data-progressbar-percent="55" data-progressbar-unit="%">
											<span class="uix-progressbar__track">
												<span>0<em class="uix-progressbar__unit">%</em></span>
											</span>
											<div class="uix-progressbar__pie">
												<div class="uix-progressbar__pie--left-side uix-progressbar__pie--half-circle"></div>
												<div class="uix-progressbar__pie--right-side uix-progressbar__pie--half-circle"></div>
											</div>
											<div class="uix-progressbar__title"></div>
										</div>

										<p>Web Design Faster</p>


									</div>
									<div class="col-lg-3 col-6">

										<div class="uix-progressbar--circle uix-progressbar--progress-0 is-transparent" data-progressbar-percent="18" data-progressbar-unit="%">
											<span class="uix-progressbar__track">
												<span>0<em class="uix-progressbar__unit">%</em></span>
											</span>
											<div class="uix-progressbar__pie">
												<div class="uix-progressbar__pie--left-side uix-progressbar__pie--half-circle"></div>
												<div class="uix-progressbar__pie--right-side uix-progressbar__pie--half-circle"></div>
											</div>
											<div class="uix-progressbar__title"></div>
										</div>


										<p>100% Responsive Design</p>
									</div>
									<div class="col-lg-3 col-6">

										<div class="uix-progressbar--circle uix-progressbar--progress-0 is-transparent" data-progressbar-percent="99" data-progressbar-unit="%">
											<span class="uix-progressbar__track">
												<span>0<em class="uix-progressbar__unit">%</em></span>
											</span>
											<div class="uix-progressbar__pie">
												<div class="uix-progressbar__pie--left-side uix-progressbar__pie--half-circle"></div>
												<div class="uix-progressbar__pie--right-side uix-progressbar__pie--half-circle"></div>
											</div>
											<div class="uix-progressbar__title"></div>
										</div>

										<p>Freedom Styles</p>

									</div>
								</div>
								<!-- /.row -->


							</div>
						</div>
						<!-- .row end -->


				</div>
				<!-- .container end -->

			</section>




		   <!-- Section Title
			====================================================== -->
			<section>
				<div class="container uix-t-c">
						<div class="row uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}'>
							<div class="col-12">
								<h2>Services</h2>
								<p>What can I do for you?</p>

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
						<div class="row uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}'>
							<div class="col-12">

								<div class="uix-feature uix-t-c">


									<div class="uix-core-grid">

										<div class="uix-core-grid__row uix-core-grid__row--loop">

											<div class="uix-core-grid__col-4">
												<div>
													<p class="uix-feature__icon is-bordered uix-border--circle"><i class="fa fa-binoculars"></i></p>
													<h3 class="uix-feature__title">Creative WordPress Theme</h3>
													<div class="uix-feature__desc ">
														<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
													</div>

												</div>

											</div>
											<!--  Item end -->

											<div class="uix-core-grid__col-4">
												<div>
													<p class="uix-feature__icon is-bordered uix-border--circle"><i class="fa fa-anchor"></i></p>
													<h3 class="uix-feature__title">Interactive Creative</h3>
													<div class="uix-feature__desc ">
														<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
													</div>

												</div>

											</div>
											<!--  Item end -->



											<div class="uix-core-grid__col-4">
												<div>

													<p class="uix-feature__icon is-bordered uix-border--circle"><i class="fa fa-adjust"></i></p>
													<h3 class="uix-feature__title">Premium Templates</h3>
													<div class="uix-feature__desc ">
														<p>DThe first approach uses Bootstraps own offset classes so it requires no change in markup and no extra CSS. The key is to set an offset equal to half of the remaining size of the row. So for example, a column of size 2 would be centered by adding an offset of 5.</p>
													</div>
												</div>

											</div>
											<!--  Item end -->



											<div class="uix-core-grid__col-4">
												<div>
													<p class="uix-feature__icon is-bordered uix-border--circle"><i class="fa fa-cubes"></i></p>
													<h3 class="uix-feature__title">Multiple layouts</h3>
													<div class="uix-feature__desc ">
														<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
													</div>

												</div>

											</div>
											<!--  Item end -->

											<div class="uix-core-grid__col-4">
												<div>
													<p class="uix-feature__icon is-bordered uix-border--circle"><i class="fa fa-coffee"></i></p>
													<h3 class="uix-feature__title">Search Engine Optimization</h3>
													<div class="uix-feature__desc ">
														<p>Aenean congue molestie sapien, nec convallis lectus interdum ut. Vestibulum facilisis, sem eu lobortis pulvinar, dui dui ornare erat, nec porta nunc quam a metus. Fusce eget consequat purus. Sed magna odio, rhoncus eget diam fermentum, mattis porttitor dolor.</p>
													</div>

												</div>

											</div>
											<!--  Item end -->



											<div class="uix-core-grid__col-4">
												<div>
													<p class="uix-feature__icon is-bordered uix-border--circle"><i class="fa fa-cloud-download"></i></p>
													<h3 class="uix-feature__title">Freebies</h3>
													<div class="uix-feature__desc ">
														<p>Nam et vestibulum odio. Aliquam auctor ac velit sit amet pretium. Maecenas pulvinar egestas rutrum. Nam et elit faucibus nunc euismod fringilla eu iaculis mi.
															<br>Vitiosum est enim in dividendo partem in genere numerare. Paulum, cum regem Persem captum adduceret, eodem flumine invectio</p>
													</div>

												</div>

											</div>
											<!--  Item end -->	

										</div>
										<!-- .uix-core-grid__row  end -->



									</div>
									<!-- /.uix-core-grid -->



								</div>
								<!-- /.uix-feature -->





							</div>
						</div>
						<!-- .row end -->


				</div>
				<!-- .container end -->

			</section>



			<!-- Content
			====================================================== -->	
			<section class="uix-spacing--s uix-spacing--no-top uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}'>
				<div class="uix-parallax uix-height--50 uix-typo--color-white" data-fully-visible="false" data-offset-top="0" data-overlay-bg="rgba(0,0,0,.6)" data-skew="0" data-speed="0.3">
					<img class="uix-parallax__img" src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x309.jpg" alt="">
					<div class="uix-v-align--absolute uix-t-c">
						<div class="row">
							<div class="col-12">
								<h2>
									Parallax Background
									<p class="uix-typo--h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur.
	Summum a vobis bouix-price__num voluptas dicitur.</p>
								</h2>
							</div>
						</div>
						<!-- .row end -->
					</div>

				</div>
			</section>





		   <!-- Section Title
			====================================================== -->
			<section>
				<div class="container uix-t-c">
						<div class="row uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}'>
							<div class="col-12">
								<h2>Pricing</h2>
								<p>Reasonable prices and great value services</p>

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
						<div class="row uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}'>
							<div class="col-12">


								<div class="uix-price">
									<div class="row">

											<div class="col-lg-4 col-md-4 uix-price__outline--hover" data-bcolor="#DD514C" data-tcolor="#CE3A3E">
												<div class="js-uix-init-height">
													<div class="uix-price__outline">
														<div class="uix-price__level">free</div>
														<div class="uix-price__num"><span class="uix-price__currency">$</span><span class="uix-price__num--im">49</span><span class="uix-price__period">per month</span></div>
														<div class="uix-price__excerpt">
															<p>Some description text here.</p>
														</div> 

														<div class="uix-t-c">
															<a href="#" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-pill">TRY FOR FREE</a>  
														</div>


														<div class="uix-price__hr"></div>
														<div class="uix-price__detail">
															<ul>
																<li>Feature Description</li>
																<li>Another Feature Description</li>
																<li>Invalid Feature Description</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 uix-price__outline--hover" data-bcolor="#DD514C" data-tcolor="#CE3A3E">
												<div class="js-uix-init-height">
													<div class="uix-price__outline is-active">
														<div class="uix-price__level">premium</div>
														<div class="uix-price__num"><span class="uix-price__currency">$</span><span class="uix-price__num--im">69</span><span class="uix-price__period">per month</span></div>
														<div class="uix-price__excerpt">
															<p>Some description text here.</p>
														</div> 

														<div class="uix-t-c">
															<a href="#" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-pill">BUY</a>   
														</div>



														<div class="uix-price__hr"></div>
														<div class="uix-price__detail">
															<ul>
																<li>Feature Description</li>
																<li>Another Feature Description</li>
																<li>Another Feature Description</li>
																<li>Invalid Feature Description</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 uix-price__outline--hover" data-bcolor="#DD514C" data-tcolor="#CE3A3E">
												<div class="js-uix-init-height">
													<div class="uix-price__outline">
														<div class="uix-price__level">professional</div>
														<div class="uix-price__num"><span class="uix-price__currency">$</span><span class="uix-price__num--im">109</span><span class="uix-price__period">per month</span></div>
														<div class="uix-price__excerpt">
															<p>Some description text here.</p>
														</div>


														<div class="uix-t-c">
															<a href="#" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-pill">BUY</a>
														</div>   


														<div class="uix-price__hr"></div>

														<div class="uix-price__detail">
															<ul>
																<li>Feature Description</li>
																<li>Another Feature Description</li>
																<li>Another Feature Description</li>
																<li>Invalid Feature Description</li>
																<li>Another Feature Description</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

									</div>
									 <!-- .row end -->  					
								</div>
								<!-- /.uix-price -->    

							</div>
						</div>
						<!-- .row end -->


				</div>
				<!-- .container end -->

			</section>   
			
			
		</main>
		
   
		   

        		    		    	    	    
        		    	    	    	    
    
       <!-- Footer Demo
        ====================================================== -->
        <footer class="uix-special-footer__container">
            <div class="uix-special-footer">
                <div class="container">

					<div class="row">
						  <div class="col-lg-3 col-md-3 uix-t-c--md">
							   <img class="logo" src="{{$commonAssetUrl}}/website/assets/images/logo.png" alt="">
						  </div>
						  <div class="col-lg-6 col-md-6">


								<div class="uix-special-footer__menus uix-special-footer__menus--mobile-nowrap">
									<div class="uix-special-footer__menus__list">
										<h3>About</h3>
										<ul>
											<li><a href="#">About us</a></li>
											<li><a href="#">Careers</a></li>
											<li><a href="#">Press</a></li>
											<li><a href="#">Policies</a></li>
											<li><a href="#">Help</a></li>
											<li><a href="#">Diversity & Belonging</a></li>
										</ul>
									</div>

									<div class="uix-special-footer__menus__list">
										<h3>Discover</h3>
										<ul>
											<li><a href="#">Trust & Safety</a></li>
											<li><a href="#">Travel Credit</a></li>
											<li><a href="#">Gift Cards</a></li>
											<li><a href="#">Airbnb Citizen</a></li>
											<li><a href="#">Business Travel</a></li>
											<li><a href="#">Guidebooks</a></li>
											<li><a href="#">Airbnbmag</a></li>
										</ul>
									</div>

									<div class="uix-special-footer__menus__list">
										<h3>Works</h3>
										<ul>
											<li><a href="#">Why Host</a></li>
											<li><a href="#">Hospitality</a></li>
											<li><a href="#">Responsible Hosting</a></li>
											<li><a href="#">Community Center</a></li>
										</ul>
									</div>
								</div><!-- /.uix-special-footer__menus -->     			  

						  </div>
						  <div class="col-lg-3 col-md-3 uix-t-r">

								<div class="uix-tooltip">
									<span data-microtip-position="top" data-microtip-size="medium" role="tooltip">
										<a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin is-fill-white" href="javascript:">
											<i class="fa fa-qrcode"></i>
										</a>
									</span>
									<div class="uix-t-c"><img src="{{$commonAssetUrl}}/website/assets/images/demo/qr-code.png" alt="" width="150" height="150" /></div>
								</div>	


								<a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin is-fill-white" title="Follow us on Twitter" href="https://twitter.com/uiux_lab" target="_blank">
									<i class="fa fa-twitter"></i>
								</a>
								<a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin is-fill-white" title="Follow us on Facebook" href="https://www.facebook.com/uiuxlabhome" target="_blank">
									<i class="fa fa-facebook"></i>
								</a>
								<a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin is-fill-white" title="Fork on Github" href="https://github.com/xizon/uix-kit" target="_blank">
									<i class="fa fa-github"></i>
								</a>   

						  </div>
					</div>


				</div><!-- .container  end -->
            
			</div>
				
        </footer> 
        
        
        
    </div>
    <!-- .uix-wrapper end -->
@endsection

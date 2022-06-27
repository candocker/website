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
							<h3>Common Helper Classes</h3>
							<p>Helper classes can help remove repetition by creating a set of abstract classes that can be used over and over on HTML elements. </p>
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
				<div class="container uix-list uix-list--normal uix-table uix-table--bordered">
						<div class="row">
							<div class="col-12">

									<div class="table-responsive-md">
										<div class="uix-table uix-table--bordered">

											<table>
												<thead>
													<tr>
														<th>Typography</th>
														<th>Color</th>
														<th>Display property</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td>

															<code>.uix-typo--h1</code><br> 
															<code>.uix-typo--h2</code><br> 
															<code>.uix-typo--h3</code><br> 
															<code>.uix-typo--h4</code><br> 
															<code>.uix-typo--h5</code><br> 
															<code>.uix-typo--h6</code><br> 
															<code>.uix-typo--style-normal</code><br>
															<code>.uix-typo--style-uppercase</code><br>
															<code>.uix-typo--style-bold</code><br>
															<code>.uix-typo--style-italic</code><br>
															<code>.uix-typo--style-noitalic</code><br>
															<code>.uix-typo--style-underline</code><br>
															<code>.uix-typo--style-tiny</code><br>
															<code>.uix-typo--dropcap</code><br>
															<code>.uix-typo--vertical</code><br>
															<code>.uix-typo--vertical-characters-line</code>

														</td>
														<td>

															<code>.uix-typo--color-primary</code><br>
															<code>.uix-typo--color-highlight</code><br>
															<code>.uix-typo--color-sub</code><br>
															<code>.uix-typo--color-white</code>


														</td>
														<td>
															<code>.uix-display-none</code><br> 
															<code>.uix-display-inline</code><br> 
															<code>.uix-display-inline-block</code><br> 
															<code>.uix-display-block</code><br> 
															<code>.uix-display-flex</code><br> 
															<code>.uix-display-inline-flex</code><br>
															<strong>The breakpoint is the same as bootstrap 4.</strong><br>
															<small>sm(576px)</small> &rArr; <code>.uix-display-none--sm</code>, <code>.uix-display-inline--sm</code>, <code>.uix-display-inline-block--sm</code>, <code>.uix-display-block--sm</code>, <code>.uix-display-flex--sm</code>, <code>.uix-display-inline-flex</code><br> 
															<small>md(768px)</small> &rArr; <code>.uix-display-none--md</code>, <code>.uix-display-inline--md</code>, <code>.uix-display-inline-block--md</code>, <code>.uix-display-block--md</code>, <code>.uix-display-flex--md</code>, <code>.uix-display-inline-flex</code><br> 
															<small>lg(992px)</small> &rArr; <code>.uix-display-none--lg</code>, <code>.uix-display-inline--lg</code>, <code>.uix-display-inline-block--lg</code>, <code>.uix-display-block--lg</code>, <code>.uix-display-flex--lg</code>, <code>.uix-display-inline-flex</code><br> 
															<small>xl(1200px)</small> &rArr; <code>.uix-display-none--xl</code>, <code>.uix-display-inline--xl</code>, <code>.uix-display-inline-block--xl</code>, <code>.uix-display-block--xl</code>, <code>.uix-display-flex--xl</code>, <code>.uix-display-inline-flex</code><br> 
														</td>	

													</tr>
												</tbody>
											</table>  
										</div>	


									</div><!-- .table-responsive-md -->



									<div class="table-responsive-md">
										<div class="uix-table uix-table--bordered">

											<table>
												<thead>
													<tr>
														<th>Spacing</th>
														<th>Content Block</th>
														<th>Clear Element</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td>

															<code>.uix-spacing--s</code><br> 
															<code>.uix-spacing--m</code><br> 
															<code>.uix-spacing--l</code><br> 
															<code>.uix-spacing--no-top</code><br> 
															<code>.uix-spacing--no-bottom</code><br> 
															<code>.uix-spacing--googlemap</code><br> 
															<code>.uix-spacing--no</code>

														</td>
														<td>

															<code>.uix-relative</code><br> 
															<code>.uix-relative--inline</code><br> 
															<code>.uix-relative--inline-clip</code>

														</td>
														<td>
															<code>.uix-clearfix</code>

														</td>


													</tr>
												</tbody>
											</table>  
										</div>	
									</div><!-- .table-responsive-md -->


									<div class="table-responsive-md">
										<div class="uix-table uix-table--bordered">

											<table>
												<thead>
													<tr>
														<th>Shadow</th>
														<th>Smooth Transition</th>
														<th>Element Floating</th>
													</tr>
												</thead>

												<tbody>
													<tr>

														<td>

															<code>.uix-outer-shadow--regular</code><br> 
															<code>.uix-outer-shadow--thick</code><br> 
															<code>.uix-outer-shadow--light</code><br> 
															<code>.uix-outer-shadow--highlight</code><br> 
															<code>.uix-none-shadow</code>

														</td>

														<td>
															<code>.uix-trans</code>

														</td>	


														<td>

															<code>.uix-f-l</code><br> 
															<code>.uix-f-r</code>	
														</td>		


													</tr>
												</tbody>
											</table>  
										</div>	


									</div><!-- .table-responsive-md -->

									<div class="table-responsive-md">
										<div class="uix-table uix-table--bordered">

											<table>
												<thead>
													<tr>
														<th>Element Alignment</th>
														<th>Truncate String with Ellipsis</th>
														<th>Vertically or Horizontally Aligned Blocks</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td>

															<code>.uix-t-r</code><br> 
															<code>.uix-t-l</code><br> 
															<code>.uix-t-c</code><br>
															<strong>The breakpoint is the same as bootstrap 4.</strong><br>
															<small>sm(576px)</small> &rArr; <code>.uix-t-r--sm</code>, <code>.uix-t-l--sm</code>, <code>.uix-t-c--sm</code><br> 
															<small>md(768px)</small> &rArr; <code>.uix-t-r--md</code>, <code>.uix-t-l--md</code>, <code>.uix-t-c--md</code><br> 
															<small>lg(992px)</small> &rArr; <code>.uix-t-r--lg</code>, <code>.uix-t-l--lg</code>, <code>.uix-t-c--lg</code><br> 
															<small>xl(1200px)</small> &rArr; <code>.uix-t-r--xl</code>, <code>.uix-t-l--xl</code>, <code>.uix-t-c--xl</code><br> 

														</td>
														<td>
															<code>.uix-t-ellipsis</code>

														</td>
														<td>
															<code>.uix-v-align--absolute</code><br>
															<code>.uix-v-align--absolute.uix-v-align--absolute--b</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Align content of a div to the bottom</div>
															</div>		
															<br>
															<code>.uix-v-align--absolute.uix-v-align--absolute--t</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Align content of a div to the top</div>
															</div>		
															<br>
															<code>.uix-v-align--relative</code><br> 
															<code>.uix-v-align--table</code><br>
															<code>.uix-v-align--table.uix-v-align--table--b</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Align content of a div to the bottom</div>
															</div>		
															<br>
															<code>.uix-v-align--table.uix-v-align--table--t</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Align content of a div to the top</div>
															</div>		
															<br>




														</td>

													</tr>
												</tbody>
											</table>  
										</div>	

									</div><!-- .table-responsive-md -->


									<div class="table-responsive-md">
										<div class="uix-table uix-table--bordered">

											<table>
												<thead>
													<tr>
														<th>Specifies Whether To Clip Content</th>
														<th>Specifies a Default Height <span class="uix-typo--style-normal uix-typo--color-sub">(unit: vh)</span>.</th>
														<th>Hidden Element on Mobile/Desktop</th>
													</tr>
												</thead>

												<tbody>
													<tr>

														<td>

															<code>.uix-hidden-scrollbar-x</code><br> 
															<code>.uix-hidden-scrollbar</code>

														</td>

														<td>
															<code>.uix-height--10</code><br> 
															<code>.uix-height--20</code><br> 
															<code>.uix-height--30</code><br> 
															<code>.uix-height--40</code><br> 
															<code>.uix-height--50</code><br> 
															<code>.uix-height--60</code><br> 
															<code>.uix-height--70</code><br> 
															<code>.uix-height--80</code><br> 
															<code>.uix-height--90</code><br> 
															<code>.uix-height--100</code><br>


															<p class="uix-striking-msg uix-striking-msg--info is-rounded">
															Keep the same height as the PC on mobile devices, it can be used with <code>.is-mobile-still</code>
															</p>   													
														</td>	


														<td>
															<code>.uix-hide-mobile</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Only display element on desktop devices.</div>
															</div>
															<br> 

															
															<code>.uix-hide-pc</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Only display element on mobile devices.</div>
															</div>
															<br> 




														</td>		


													</tr>
												</tbody>
											</table>  
										</div>	


									</div><!-- .table-responsive-md -->


									<div class="table-responsive-md">

										<div class="uix-table uix-table--bordered">

											<table>
												<thead>
													<tr>
														<th>Tip Bubble</th>
														<th>Image Hover Overlay Effects</th>
														<th>Position</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td>

															<code>.uix-bubble</code>

														</td>
														<td>

															<code>.uix-filter-hover--color</code> 

														</td>
														<td>
															<code>.uix-dir--top</code><br> 
															<code>.uix-dir--bottom</code><br> 
															<code>.uix-dir--left</code><br> 
															<code>.uix-dir--right</code><br> 
															<code>.uix-dir--top-left</code><br> 
															<code>.uix-dir--top-right</code><br> 
															<code>.uix-dir--bottom-left</code><br> 
															<code>.uix-dir--bottom-right</code>


														</td>



													</tr>
												</tbody>
											</table>  
										</div>	

									</div><!-- .table-responsive-md -->									

									
									<div class="table-responsive-md">
										<div class="uix-table uix-table--bordered">

											<table>
												<thead>
													<tr>
														<th>Element Hidden Style</th>
														<th>Border Radius</th>
														<th>Align Wide and Full Classes For Elements</th>
													</tr>
												</thead>

												<tbody>
													<tr>

														<td>

															<code>.uix-el--transparent</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Set the transparency of the element to 0.</div>
															</div>
															<br> 
															
															<code>.uix-el--scale</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Set the scale of the element to 0.</div>
															</div>
															<br> 
															
															
															<code>.uix-el--skew</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Tilt the element a certain degree to the upper right.</div>
															</div>

														</td>

														<td>
															<code>.uix-border--rounded</code><br> 
															<code>.uix-border--circle</code><br> 
															<code>.uix-border--circle.uix-border--circle-img</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Make a circle image with <code>&lt;img&gt;</code></div>
															</div>												
															<br> 


															<code>.uix-border--circle.uix-border--circle-only-img</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Make a circle image with <code>&lt;img&gt;</code> only.</div>
															</div>	
															<br> 

															
															<code>.uix-border--rounded.uix-border--rounded-img</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Make a rounded image with <code>&lt;img&gt;</code></div>
															</div>												
															<br> 


															<code>.uix-border--rounded.uix-border--rounded-only-img</code>
															<div class="uix-tooltip">
																<span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle uix-typo--color-sub" aria-hidden="true"></i></span>
																<div class="uix-t-l">Make a rounded image with <code>&lt;img&gt;</code> only.</div>
															</div>	
															

														</td>	
														<td>

															<code>.uix-alignfull</code>

														</td>	


													</tr>
												</tbody>
											</table>  
										</div>	

									</div><!-- .table-responsive-md -->






							</div>
						</div>
						<!-- .row end -->


				</div>
				<!-- .container end -->

			</section>   


			
		</main>
@endsection

@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<!-- Title 
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>SVG Mask Slider</h3>
                <p>Use <strong>Adobe Illustrator</strong> to make SVG file and copy its code. <strong>File &gt; Export &gt; Export for Screens</strong>.<br>
                If you want to modify the transition-duration property, please directly modify the <code>.uix-svgMask-slider__item</code> in the CSS file. It is not on the <code>data-</code> attribute of the HTML tag.</p>
                <br>
                    step 1: <svg viewBox="0 0 1920 1080" width="100px" style="outline: 1px solid #f00;"><polygon fill="#000" points="1 0.5 1 540.5 1 1080.5 0 1080.5 4 1080.5 4 540.5 4 0.5 0 0.5 1 0.5"/></svg>
                    &nbsp;&nbsp;
                    step 2: <svg viewBox="0 0 1920 1080" width="100px" style="outline: 1px solid #f00;"><polygon fill="#000" points="0.5 0.5 0.5 540.5 0.5 1080.5 1519.5 1080.5 1531.5 1080.5 1066.5 525.5 601.5 1.5 589.5 1.5 0.5 0.5"/></svg>
                    &nbsp;&nbsp;
                    step 3: <svg viewBox="0 0 1920 1080" width="100px" style="outline: 1px solid #f00;"><polygon fill="#000" points="0.5 0.5 0.5 540.5 0.5 1080.5 960.5 1080.5 1920.5 1080.5 1920.5 540.5 1920.5 0.5 960.5 0.5 0.5 0.5"/></svg>
                &nbsp;&nbsp;
                path svg example: 
                <svg viewBox="0 0 400 300" width="100" style="outline: 1px solid #f00;"><path fill="#000" class="cls-1" d="M381.5,86.5s-22,47-27,52-25-81-25-81l63-58Z"/></svg>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Content 
====================================================== -->
           <div role="banner" class="uix-svgMask-slider__wrapper">
   <div class="uix-svgMask-slider__outline uix-svgMask-slider" 
      data-draggable="false"
      data-draggable-cursor="move"       
      data-auto="false"
      data-loop="true"
      data-speed="1000"
      data-timing="10000" 
      data-controls-pagination=".my-a-slider-pagination-1" 
      data-controls-arrows=".my-a-slider-arrows-1">
       <div class="uix-svgMask-slider__inner">
           <div class="uix-svgMask-slider__item">
               <img src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-1.jpg" alt="null">
                <svg viewBox="0 0 1920 1080">
                    <defs>
                        <clipPath id="img-default">
                            <polygon fill="#000" id="changing-path-1" points="0.5 0.5 0.5 540.5 0.5 1080.5 960.5 1080.5 1920.5 1080.5 1920.5 540.5 1920.5 0.5 960.5 0.5 0.5 0.5"/>
                        </clipPath>                            
                    </defs>                        
                    <image clip-path="url(#img-default)" href="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-1.jpg"></image>
                </svg>
                <div class="uix-svgMask-slider__txt">
                    <div class="uix-svgMask-slider__txt__mask"></div>
                    <div class="uix-svgMask-slider__txt__content uix-core-grid__col-7 uix-typo--color-white">
                        <h3>Beautiful Free &amp; Premium Responsive WordPress Themes</h3>
                        <p>Uix Responsive Web UI Frameworks</p>
                        <a href="#" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-pill is-fill-white">Link To</a>
                    </div>
                </div>
           </div>
           <div class="uix-svgMask-slider__item">
               <img src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-2.jpg" alt="null">
                <svg viewBox="0 0 1920 1080">
                    <defs>
                        <clipPath id="img-default">
                            <polygon fill="#000" id="changing-path-2" points="0.5 0.5 0.5 540.5 0.5 1080.5 960.5 1080.5 1920.5 1080.5 1920.5 540.5 1920.5 0.5 960.5 0.5 0.5 0.5"/>
                        </clipPath>                            
                    </defs>                        
                    <image clip-path="url(#img-default)" href="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-2.jpg"></image>
                </svg>
                <div class="uix-svgMask-slider__txt">
                    <div class="uix-svgMask-slider__txt__mask"></div>
                    <div class="uix-svgMask-slider__txt__content uix-core-grid__col-7 uix-typo--color-white">
                        <h3>Hello World</h3>
                        <p>UIUX Lab carefully crafts original design assets and publishes articles about UI/UX trends!</p>
                        <a href="#" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-pill is-fill-white">Link To</a>
                    </div>
                </div>   
           </div>
           <div class="uix-svgMask-slider__item">
               <img src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-3.jpg" alt="null">
                <svg viewBox="0 0 1920 1080">
                    <defs>
                        <clipPath id="img-default">
                            <polygon fill="#000" id="changing-path-3" points="0.5 0.5 0.5 540.5 0.5 1080.5 960.5 1080.5 1920.5 1080.5 1920.5 540.5 1920.5 0.5 960.5 0.5 0.5 0.5"/>
                        </clipPath>                            
                    </defs>                        
                    <image clip-path="url(#img-default)" href="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-3.jpg"></image>
                </svg>
                <div class="uix-svgMask-slider__txt">
                    <div class="uix-svgMask-slider__txt__mask"></div>
                    <div class="uix-svgMask-slider__txt__content uix-core-grid__col-7 uix-typo--color-white">
                        <h3>Title 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
           </div> 
       </div>
      <!-- /.uix-svgMask-slider__inner -->
    </div>
   <!-- /.uix-svgMask-slider__outline -->
           </div>
           <!-- /.uix-svgMask-slider__wrapper -->
           <div class="uix-svgMask-slider__pagination my-a-slider-pagination-1"></div>
           <div class="uix-svgMask-slider__arrows my-a-slider-arrows-1">
    <a href="#" class="uix-svgMask-slider__arrows--prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
    <a href="#" class="uix-svgMask-slider__arrows--next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
           </div>
        </main>
@endsection

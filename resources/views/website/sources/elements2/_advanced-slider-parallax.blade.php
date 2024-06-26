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
                <h3>Advanced Slider</h3>
                <p>Parallax Effect</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Content 
====================================================== -->
           <div role="banner" class="uix-advanced-slider-sp__wrapper">
   <div class="uix-advanced-slider__outline uix-advanced-slider-sp uix-advanced-slider-sp--eff-parallax" 
      data-draggable="true"
      data-draggable-cursor="move"       
      data-auto="true"
      data-loop="false"
      data-speed="800"
      data-timing="5000" 
      data-count-total="false"
      data-count-now="false"
      data-filter-texture="false"
      data-controls-pagination=".my-a-slider-pagination-2" 
      data-controls-arrows=".my-a-slider-arrows-2">
       <div class="uix-advanced-slider-sp__inner">
           <div class="uix-advanced-slider-sp__item">
               <img src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-1.jpg" alt="Title 1" />
                <div class="uix-advanced-slider-sp__txt">
                    <div class="uix-core-grid__col-7 uix-typo--color-white">
                        <h3 data-text-eff="letters-eff-flyInOut1" data-text-eff-speed="800">Beautiful Free &amp; Premium Responsive WordPress Themes</h3>
                        <p data-text-eff="letters-eff-flyInOut1-2" data-text-eff-speed="500">Uix Responsive Web UI Frameworks</p>
                        <a href="#1" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-pill is-fill-white">Link To</a>
                    </div>
                </div>   
           </div>
           <div class="uix-advanced-slider-sp__item">
               <img src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-2.jpg" alt="Title 2" />
                <div class="uix-advanced-slider-sp__txt">
                    <div class="uix-core-grid__col-7 uix-typo--color-white">
                        <h3 data-text-eff="letters-eff-flyInOut2" data-text-eff-speed="800">Hello World</h3>
                        <p data-text-eff="letters-eff-flyInOut2-2" data-text-eff-speed="500">UIUX Lab carefully crafts original design assets and publishes articles about UI/UX trends!</p>
                        <a href="#2" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--secondary is-pill is-fill-white">Link To</a>
                    </div>
                </div>
           </div>
           <div class="uix-advanced-slider-sp__item">
               <img src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-3.jpg" alt="Title 3" />
                <div class="uix-advanced-slider-sp__txt">
                    <div class="uix-core-grid__col-7 uix-typo--color-white">
                        <h3 data-text-eff="letters-eff-flyInOut3" data-text-eff-speed="800">Title 3</h3>
                        <p data-text-eff="letters-eff-flyInOut3-2" data-text-eff-speed="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>               
           </div>
           <div class="uix-advanced-slider-sp__item">
                  <div class="uix-video__slider" data-embed-video-width="auto" data-embed-video-height="auto" data-embed-video-controls="false" data-embed-video-autoplay="true" data-embed-video-loop="false">
                      <video id="video-demo-1" class="video-js vjs-default-skin" controls poster="{{$commonAssetUrl}}/website/assets/videos/1440x1050/demo.jpg">
                          <source src="{{$commonAssetUrl}}/website/assets/videos/1440x1050/demo.mp4" type="video/mp4">
                      </video>
                  </div>
           </div>  
       </div>
      <!-- /.uix-advanced-slider-sp__inner -->
    </div>
   <!-- /.uix-advanced-slider__outline -->       
           </div>
           <!-- /.uuix-advanced-slider-sp__wrapper -->
           <div class="uix-advanced-slider-sp__pagination my-a-slider-pagination-2"></div>
           <div class="uix-advanced-slider-sp__arrows my-a-slider-arrows-2">
    <a href="#" class="uix-advanced-slider-sp__arrows--prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
    <a href="#" class="uix-advanced-slider-sp__arrows--next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
           </div>    
        </main>
@endsection

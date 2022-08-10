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
                            <h3>3D Shatter Slider</h3>
                            <p>If you want to modify tRotate camera/page with mouse.</p>
                            <hr>
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
            <!-- Loader 
            ====================================================== -->
            <div id="uix-3d-slider--shatter__loader" style="height: 5px; background: #A45CFB; position: absolute; z-index: 1; bottom: 0; left: 0; width: 0%;"></div>
           <!-- Content 
            ====================================================== -->
           <div role="banner" class="uix-3d-slider--shatter__wrapper">
               <div class="uix-3d-slider__outline uix-3d-slider--shatter" 
                  data-draggable="false"
                  data-draggable-cursor="move"       
                  data-auto="true"
                  data-loop="true"
                  data-speed="800" 
                  data-timing="10000" 
                  data-count-total="false"
                  data-count-now="false"
                  data-filter-texture="false"
                  data-controls-pagination=".my-a-slider-pagination-2" 
                  data-controls-arrows=".my-a-slider-arrows-2">
                   <div class="uix-3d-slider--shatter__inner">
                       <div class="uix-3d-slider--shatter__item">
                           <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-1.jpg" alt="Title 1" />
                       </div>
                       <div class="uix-3d-slider--shatter__item">
                           <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-2.jpg" alt="Title 2" />
                       </div>
                       <div class="uix-3d-slider--shatter__item">
                          <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-3.jpg" alt="Title 3" />
                       </div> 
                       <div class="uix-3d-slider--shatter__item">
                            <video id="video-demo-1" controls poster="{{$commonAssetUrl}}/website/assets/videos/1440x1050/demo.jpg">
                                  <source src="{{$commonAssetUrl}}/website/assets/videos/1440x1050/demo.mp4" type="video/mp4">
                             </video>
                       </div>  
                   </div>
                  <!-- /.uix-3d-slider--shatter__inner -->
                </div>
               <!-- /.uix-advanced-slider__outline -->  
           </div>
           <!-- /.uix-3d-slider--shatter__wrapper -->   
           <div class="uix-3d-slider--shatter__pagination my-a-slider-pagination-2"></div>
           <div class="uix-3d-slider--shatter__arrows my-a-slider-arrows-2">
                <a href="#" class="uix-3d-slider--shatter__arrows--prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                <a href="#" class="uix-3d-slider--shatter__arrows--next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
           </div>    
        </main>
@endsection

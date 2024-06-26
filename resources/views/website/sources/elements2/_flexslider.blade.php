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
                <h3>Full Width & Custom CSS3 Transition Animation</h3>
                <p>Note: Touch-friendly Drag and Drop</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Slideshow
====================================================== -->
<div role="slider" class="uix-flexslider uix-flexslider--primary" 
     data-draggable="true" 
     data-my-nav-thumbs="false"
     data-my-prev-next-thumbs="false"
     data-my-nav-timeline="false"
     data-my-controls="false"
     data-my-multiple-items="false"
     data-my-multiple-items-move="1"
     data-my-count-total="false"
     data-my-count-now="false"
     data-my-parallax="false"
     data-my-sync="false"
     data-wheel="false"
     data-speed="600" 
     data-timing="10000" 
     data-loop="false" 
     data-paging="true" 
     data-arrows="true" 
     data-animation="slide" 
     data-auto="true" 
     data-prev="<i class='fa fa-chevron-left uix-flexslider--primary-prev'></i>" 
     data-next="<i class='fa fa-chevron-right uix-flexslider--primary-next'></i>">
    <div class="uix-flexslider__inner">
        <div class="uix-flexslider__item">
            <img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-big-1.jpg" alt="Title 1" />
            <div class="uix-flexslider__desc">
                <div class="container uix-t-c">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="uix-flexslider__el-level uix-flexslider__el-level-1">Beautiful Free &amp; Premium Responsive WordPress Themes</h2>
                                <p class="uix-typo--h5 uix-typo--style-normal uix-flexslider__el-level uix-flexslider__el-level-2">Uix Responsive Web UI Frameworks</p>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
            </div>
            <!-- .uix-flexslider__desc  end -->   
        </div>
        <div class="uix-flexslider__item">
            <img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-big-2.jpg" alt="Title 2" />
            <div class="uix-flexslider__desc">
                <div class="container uix-t-c">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="uix-flexslider__el-level uix-flexslider__el-level-1">Hello World</h2>
                                <p class="uix-typo--h5 uix-typo--style-normal uix-flexslider__el-level uix-flexslider__el-level-2">UIUX Lab carefully crafts original design assets and publishes articles about UI/UX trends!</p>
                                <a class="uix-btn uix-btn__border--medium uix-btn__size--s uix-flexslider__el-level uix-flexslider__el-level-3" href="#">View Demo</a>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
            </div>
            <!-- .uix-flexslider__desc  end -->
        </div>
        <div class="uix-flexslider__item">
            <img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-big-3.jpg" alt="Title 3" />
            <div class="uix-flexslider__desc">
                <div class="container uix-t-c">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="uix-flexslider__el-level uix-flexslider__el-level-1">Title 3</h2>
                                <p class="uix-typo--h5 uix-typo--style-normal uix-flexslider__el-level uix-flexslider__el-level-2">UIUX Lab carefully crafts original design assets and publishes articles about UI/UX trends!</p>
                                <a class="uix-btn uix-btn__border--medium uix-btn__size--s uix-flexslider__el-level uix-flexslider__el-level-3" href="#">View Demo</a>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
            </div>
            <!-- .uix-flexslider__desc  end --> 
        </div>
    </div>
    <!-- .uix-flexslider__inner end -->
</div>
<!-- .uix-flexslider end -->
<!-- Title
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Parallax Effect</h3>
                <p>Set the <code>data-my-parallax</code> property to make parallax effect.</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Slideshow
====================================================== -->
<div role="slider" class="uix-flexslider uix-flexslider--parallax" 
     data-draggable="true" 
     data-my-nav-thumbs="false"
     data-my-prev-next-thumbs="false"
     data-my-nav-timeline="false"
     data-my-controls="false"
     data-my-multiple-items="false"
     data-my-multiple-items-move="1"
     data-my-count-total="false"
     data-my-count-now="false"
     data-my-parallax="true"
     data-wheel="false"
     data-speed="1500" 
     data-timing="10000" 
     data-loop="false" 
     data-paging="true" 
     data-arrows="false" 
     data-animation="slide" 
     data-auto="true" 
     data-prev="<i class='fa fa-chevron-left'></i>" 
     data-next="<i class='fa fa-chevron-right'></i>"> 
    <div class="uix-flexslider__inner">
        <div class="uix-flexslider__item">
            <img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-1.jpg" alt="Title 1" />
            <img class="uix-flexslider__el-level uix-flexslider__el-level-1" src="{{$commonAssetUrl}}/website/assets/images/demo/300x250.png" alt="">
            <img class="uix-flexslider__el-level uix-flexslider__el-level-2" src="{{$commonAssetUrl}}/website/assets/images/demo/500x300.png" alt="">
        </div>
        <div class="uix-flexslider__item">
            <img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-2.jpg" alt="Title 2" />
            <img class="uix-flexslider__el-level uix-flexslider__el-level-1" src="{{$commonAssetUrl}}/website/assets/images/demo/300x250.png" alt="">
            <img class="uix-flexslider__el-level uix-flexslider__el-level-2" src="{{$commonAssetUrl}}/website/assets/images/demo/500x300.png" alt="">
        </div>
        <div class="uix-flexslider__item">
            <img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-3.jpg" alt="Title 3" />
            <img class="uix-flexslider__el-level uix-flexslider__el-level-1" src="{{$commonAssetUrl}}/website/assets/images/demo/300x250.png" alt="">
            <img class="uix-flexslider__el-level uix-flexslider__el-level-2" src="{{$commonAssetUrl}}/website/assets/images/demo/500x300.png" alt="">
        </div>
    </div>
    <!-- .uix-flexslider__inner end -->
</div>
<!-- .uix-flexslider end -->  
<!-- Title
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Default Options</h3>
                <p>Special Options Using <code>data-*</code> Attributes</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Slideshow
====================================================== -->
<section>
     <div class="container">
            <div class="row">
                <div class="col-12">
                    <div role="slider" class="uix-flexslider"
                         data-draggable="false" 
                         data-my-nav-thumbs="false"
                         data-my-prev-next-thumbs="false"
                         data-my-nav-timeline="false"
                         data-my-controls="false"
                         data-my-multiple-items="false"
                         data-my-multiple-items-move="1"
                         data-my-count-total="false"
                         data-my-count-now="false"
                         data-my-parallax="false"
                         data-my-sync="false"
                         data-wheel="false"
                         data-speed="600" 
                         data-timing="10000" 
                         data-loop="true" 
                         data-paging="true" 
                         data-arrows="true" 
                         data-animation="slide" 
                         data-auto="true" 
                         data-prev="<i class='fa fa-chevron-left'></i>" 
                         data-next="<i class='fa fa-chevron-right'></i>"> 
                        <div class="uix-flexslider__inner">
                            <div class="uix-flexslider__item">
                                <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-1.jpg" alt="Title 1" /></a>  
                            </div>
                            <div class="uix-flexslider__item">
                                <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-2.jpg" alt="Title 2" /></a>
                            </div>
                            <div class="uix-flexslider__item">
                                <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-3.jpg" alt="Title 3" /></a>
                            </div>
                        </div>
                        <!-- .uix-flexslider__inner end -->
                    </div>
                    <!-- .uix-flexslider end -->   
                </div>
            </div>
      </div>    
          </section>
<!-- Title
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>With Timeline</h3>
                <p>Set the <code>data-my-nav-timeline</code> property to display timeline effect.</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Slideshow
====================================================== -->
<section>
     <div class="container">
            <div class="row">
                <div class="col-12">
                            <div role="slider" class="uix-flexslider"
                                 data-draggable="false" 
                                 data-my-nav-thumbs="false"
                                 data-my-prev-next-thumbs="false"
                                 data-my-nav-timeline=".my-timeline-nav-1"
                                 data-my-controls="false"
                                 data-my-multiple-items="false"
                                 data-my-multiple-items-move="1"
                                 data-my-count-total="false"
                                 data-my-count-now="false"
                                 data-my-parallax="false"
                                 data-my-sync="false"
                                 data-wheel="false"
                                 data-speed="600" 
                                 data-timing="10000" 
                                 data-loop="true" 
                                 data-paging="true" 
                                 data-arrows="true" 
                                 data-animation="slide" 
                                 data-auto="true" 
                                 data-prev="<i class='fa fa-chevron-left'></i>" 
                                 data-next="<i class='fa fa-chevron-right'></i>"> 
                                <div class="uix-flexslider__inner">
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-1.jpg" alt="Title 1" /></a>  
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-2.jpg" alt="Title 2" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/slide-3.jpg" alt="Title 3" /></a>
                                    </div>
                                </div>
                                <!-- .uix-flexslider__inner end -->
                            </div>
                            <!-- .uix-flexslider end -->   
                            <div class="uix-flexslider__timeline-nav my-timeline-nav-1"><span></span></div>
                </div>
            </div>
      </div>    
          </section>
<!-- Title
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Next/Prev Image Thumbnail In Navigation</h3>
                <p>Set the <code>data-my-prev-next-thumbs</code> property to display Next/Prev image thumbnail in navigation.</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Slideshow
====================================================== -->
<section>
     <div class="container">
            <div class="row">
                <div class="col-12">
                            <div role="slider" class="uix-flexslider"
                                 data-draggable="false" 
                                 data-my-nav-thumbs="false"
                                 data-my-prev-next-thumbs=".my-thumbnav-4"
                                 data-my-nav-timeline="false"
                                 data-my-controls=".my-nav-4"
                                 data-my-multiple-items="false"
                                 data-my-multiple-items-move="1"
                                 data-my-count-total="false"
                                 data-my-count-now="false"
                                 data-my-parallax="false"
                                 data-my-sync="false"
                                 data-wheel="false"
                                 data-speed="600" 
                                 data-timing="10000" 
                                 data-loop="true" 
                                 data-paging="false" 
                                 data-arrows="false" 
                                 data-animation="slide" 
                                 data-auto="true" 
                                 data-prev="<i class='fa fa-chevron-left'></i>" 
                                 data-next="<i class='fa fa-chevron-right'></i>"> 
                                <div class="uix-flexslider__inner">
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="Title 3" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-4.jpg" alt="Title 4" /></a>
                                    </div>  
                                </div>
                                <!-- .uix-flexslider__inner end -->
                            </div>
                            <!-- .uix-flexslider end -->   
                            <div class="uix-flexslider__mycontrols--thumb my-thumbnav-4">
                                <a href="#" class="uix-flexslider__mycontrols--thumb__prev"><span></span></a>
                                <a href="#" class="uix-flexslider__mycontrols--thumb__next"><span></span></a>
                            </div>           
                </div>
            </div>
      </div>    
          </section>
<!-- Title
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Video Slider</h3>
                <p>Set the <code>data-embed-video-wrapper</code> property to listen for video play events.</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Slideshow With Video
====================================================== -->
<section>
     <div class="container">
            <div class="row">
                <div class="col-12">
                            <div class="uix-flexslider" 
                                 data-draggable="false" 
                                 data-my-nav-thumbs="false"
                                 data-my-prev-next-thumbs="false"
                                 data-my-nav-timeline="false"
                                 data-my-controls="false"
                                 data-my-multiple-items="false"
                                 data-my-multiple-items-move="1"
                                 data-my-count-total="false"
                                 data-my-count-now="false"
                                 data-my-parallax="false"
                                 data-my-sync="false"
                                 data-wheel="false"
                                 data-speed="600" 
                                 data-timing="35000" 
                                 data-loop="false" 
                                 data-paging="true" 
                                 data-arrows="true" 
                                 data-animation="slide" 
                                 data-auto="true" 
                                 data-prev="<i class='fa fa-chevron-left'></i>" 
                                 data-next="<i class='fa fa-chevron-right'></i>"
                                 data-embed-video-wrapper="true"> 
                                <div class="uix-flexslider__inner">
                                    <div class="uix-flexslider__item">
                                          <div class="uix-video__slider" data-embed-video-width="auto" data-embed-video-height="auto" data-embed-video-controls="false" data-embed-video-autoplay="true" data-embed-video-loop="false">
                                              <video id="video-demo-1" class="video-js vjs-default-skin" controls poster="{{$commonAssetUrl}}/website/assets/videos/1920x1080/demo.jpg">
                                                  <source src="{{$commonAssetUrl}}/website/assets/videos/1920x1080/demo.mp4" type="video/mp4">
                                                  <source src="{{$commonAssetUrl}}/website/assets/videos/1920x1080/demo.webm" type="video/webm">
                                              </video>
                                          </div>
                                    </div>
                                    <div class="uix-flexslider__item">
                                          <div class="uix-video__slider" data-embed-video-width="auto" data-embed-video-height="auto" data-embed-video-controls="false" data-embed-video-autoplay="false" data-embed-video-loop="true">
                                              <video id="video-demo-2" class="video-js vjs-default-skin" controls poster="{{$commonAssetUrl}}/website/assets/videos/1440x1050/demo.jpg">
                                                  <source src="{{$commonAssetUrl}}/website/assets/videos/1440x1050/demo.mp4" type="video/mp4">
                                                  <source src="{{$commonAssetUrl}}/website/assets/videos/1440x1050/demo.webm" type="video/webm">
                                              </video>
                                          </div>
                                    </div>
                                </div>
                                <!-- .uix-flexslider__inner end -->
                            </div>
                            <!-- .uix-flexslider end -->   
                </div>
            </div>
      </div>    
          </section>
<!-- Title
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Custom Navigation Buttons</h3>
                <p>Set the <code>data-my-controls</code> property to be used in lieu of dynamic controlNav.</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Slideshow
====================================================== -->
<section>
     <div class="container">
            <div class="row">
                <div class="col-12">
                            <div role="slider" class="uix-flexslider"
                                 data-draggable="false" 
                                 data-my-nav-thumbs="false"
                                 data-my-prev-next-thumbs="false"
                                 data-my-nav-timeline="false"
                                 data-my-controls=".my-nav-1"
                                 data-my-multiple-items="false"
                                 data-my-multiple-items-move="1"
                                 data-my-count-total="false"
                                 data-my-count-now="false"
                                 data-my-parallax="false"
                                 data-my-sync="false"
                                 data-wheel="false"
                                 data-speed="600" 
                                 data-timing="10000" 
                                 data-loop="false" 
                                 data-paging="true" 
                                 data-arrows="true" 
                                 data-animation="slide" 
                                 data-auto="true" 
                                 data-prev="<i class='fa fa-chevron-left'></i>" 
                                 data-next="<i class='fa fa-chevron-right'></i>"> 
                                <div class="uix-flexslider__inner">
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="Title 3" /></a>
                                    </div>
                                </div>
                                <!-- .uix-flexslider__inner end -->
                            </div>
                            <!-- .uix-flexslider end -->   
                            <div class="uix-flexslider__mycontrols my-nav-1">
                                <a href="#" class="uix-flexslider__mycontrols__prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                <div class="uix-flexslider__mycontrols__control-paging"></div>
                                <a href="#" class="uix-flexslider__mycontrols__next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div> 
                </div>
            </div>
      </div>   
          </section>    
<!-- Title
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Multiple Items</h3>
                <p>Set the <code>data-my-multiple-items</code> and <code>data-my-multiple-items-move</code> properties to control the number of items displayed.</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Slideshow
====================================================== -->
<section>
     <div class="container">
            <div class="row">
                <div class="col-12">
                            <div role="slider" class="uix-flexslider uix-flexslider--itemgrid"
                                 data-draggable="false" 
                                 data-my-nav-thumbs="false"
                                 data-my-prev-next-thumbs="false"
                                 data-my-nav-timeline="false"
                                 data-my-controls="false"
                                 data-my-multiple-items="3"
                                 data-my-multiple-items-move="1"
                                 data-my-count-total="false"
                                 data-my-count-now="false" 
                                 data-my-parallax="false"
                                 data-my-sync="false"
                                 data-wheel="false"
                                 data-speed="600" 
                                 data-timing="10000" 
                                 data-loop="true" 
                                 data-paging="true" 
                                 data-arrows="true" 
                                 data-animation="slide" 
                                 data-auto="true" 
                                 data-prev="<i class='fa fa-chevron-left'></i>" 
                                 data-next="<i class='fa fa-chevron-right'></i>"> 
                                <div class="uix-flexslider__inner">
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="Title 3" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="Title 3" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                    </div>
                                </div>
                                <!-- .uix-flexslider__inner end -->
                            </div>
                            <!-- .uix-flexslider end -->   
                </div>
            </div>
      </div>    
          </section>        
<!-- Title
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Add Counter</h3>
                <p>Set <code>data-my-count-total</code> and <code>data-my-count-now</code> properties to display counter.</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Slideshow
====================================================== -->
<section>
     <div class="container">
            <div class="row">
                <div class="col-12">
                            <div role="slider" class="uix-flexslider"
                                 data-draggable="false" 
                                 data-my-nav-thumbs="false"
                                 data-my-prev-next-thumbs="false"
                                 data-my-nav-timeline="false"
                                 data-my-controls="false"
                                 data-my-multiple-items="false"
                                 data-my-multiple-items-move="1"
                                 data-my-count-total="p.uix-flexslider__mycontrols__count em.count"
                                 data-my-count-now="p.uix-flexslider__mycontrols__count em.current"
                                 data-my-parallax="false"
                                 data-my-sync="false"
                                 data-wheel="true"
                                 data-speed="600" 
                                 data-timing="10000" 
                                 data-loop="true" 
                                 data-paging="true" 
                                 data-arrows="true" 
                                 data-animation="slide" 
                                 data-auto="true" 
                                 data-prev="<i class='fa fa-chevron-left'></i>" 
                                 data-next="<i class='fa fa-chevron-right'></i>">      
                                <div class="uix-flexslider__inner">
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="Title 3" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="Title 3" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                    </div>
                                </div>
                                <!-- .uix-flexslider__inner end -->
                            </div>
                            <!-- .uix-flexslider end -->   
                            <p class="uix-flexslider__mycontrols__count">
                                <em class="current"></em> of <em class="count"></em>
                            </p>   
                </div>
            </div>
      </div>    
          </section>        
<!-- Title
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Add CounterThumbnail ControlNav Pattern</h3>
                <p>Set the <code>data-my-nav-thumbs</code> property to match a simple pattern.</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Slideshow
====================================================== -->
<section>
     <div class="container">
            <div class="row">
                <div class="col-12">
                            <div role="slider" class="uix-flexslider"
                                 data-draggable="false" 
                                 data-my-nav-thumbs=".my-navthumbs-1"
                                 data-my-prev-next-thumbs="false"
                                 data-my-nav-timeline="false"
                                 data-my-controls=".my-nav-2"
                                 data-my-multiple-items="false"
                                 data-my-multiple-items-move="1"
                                 data-my-count-total="false"
                                 data-my-count-now="false"
                                 data-my-parallax="false"
                                 data-my-sync="false"
                                 data-wheel="false"
                                 data-speed="600" 
                                 data-timing="10000" 
                                 data-loop="false" 
                                 data-paging="true" 
                                 data-arrows="true" 
                                 data-animation="slide" 
                                 data-auto="true" 
                                 data-prev="<i class='fa fa-chevron-left'></i>" 
                                 data-next="<i class='fa fa-chevron-right'></i>"> 
                                <div class="uix-flexslider__inner">
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                    </div>
                                    <div class="uix-flexslider__item">
                                        <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="Title 3" /></a>
                                    </div>
                                </div>
                                <!-- .uix-flexslider__inner end -->
                            </div>
                            <!-- .uix-flexslider end -->   
                            <div class="uix-flexslider__mycontrols my-nav-2">
                                <a href="#" class="uix-flexslider__mycontrols__prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                <div class="uix-flexslider__mycontrols__control-paging"></div>
                                <a href="#" class="uix-flexslider__mycontrols__next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div> 
                            <!-- Thumbnail ControlNav Pattern -->
                            <div class="uix-flexslider__thumbs my-navthumbs-1">
                                <ul>
                                    <li class="is-active"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="" /></li>
                                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="" /></li>
                                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="" /></li>
                                </ul>
                            </div>
                </div>
            </div>
      </div>   
          </section>    
<!-- Title
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Sync Multiple Sliders</h3>
                <p>Set the <code>data-my-sync</code> property to sync multiple sliders.</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Slideshow
====================================================== -->
<section>
     <div class="container">
            <div class="row">
                <div class="col-12">
                     <div class="row">
                            <div class="col-lg-6 col-md-6">
                               <!-- Slider 1 -->
                                <div role="slider" class="uix-flexslider"
                                     data-draggable="false" 
                                     data-my-nav-thumbs="false"
                                     data-my-prev-next-thumbs="false"
                                     data-my-nav-timeline="false"
                                     data-my-controls=".my-nav-3"
                                     data-my-multiple-items="false"
                                     data-my-multiple-items-move="1"
                                     data-my-count-total="false"
                                     data-my-count-now="false"
                                     data-my-parallax="false"
                                     data-my-sync="#my-sync-slider"
                                     data-wheel="false"
                                     data-speed="600" 
                                     data-timing="10000" 
                                     data-loop="true" 
                                     data-paging="true" 
                                     data-arrows="true" 
                                     data-animation="slide" 
                                     data-auto="true" 
                                     data-prev="<i class='fa fa-chevron-left'></i>" 
                                     data-next="<i class='fa fa-chevron-right'></i>"> 
                                    <div class="uix-flexslider__inner">
                                        <div class="uix-flexslider__item">
                                            <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                        </div>
                                        <div class="uix-flexslider__item">
                                            <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                        </div>
                                        <div class="uix-flexslider__item">
                                            <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="Title 3" /></a>
                                        </div>
                                    </div>
                                    <!-- .uix-flexslider__inner end -->
                                </div>
                                <!-- .uix-flexslider end -->   
                                <div class="uix-flexslider__mycontrols uix-flexslider__mycontrols--style-1 my-nav-3">
                                    <a href="#" class="uix-flexslider__mycontrols__prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                    <div class="uix-flexslider__mycontrols__control-paging"></div>
                                    <a href="#" class="uix-flexslider__mycontrols__next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                   <!-- Slider 2 (Sync -->
                                   <div class="uix-flexslider" id="my-sync-slider"
                                         data-draggable="false" 
                                         data-my-nav-thumbs="false"
                                         data-my-prev-next-thumbs="false"
                                         data-my-nav-timeline="false"
                                         data-my-controls="false"
                                         data-my-multiple-items="false"
                                         data-my-multiple-items-move="1"
                                         data-my-count-total="false"
                                         data-my-count-now="false"
                                         data-my-parallax="false"
                                         data-my-sync="false"
                                         data-wheel="false"
                                         data-speed="600" 
                                         data-timing="10000" 
                                         data-loop="true" 
                                         data-paging="false" 
                                         data-arrows="false" 
                                         data-animation="slide" 
                                         data-auto="true" 
                                         data-prev="<i class='fa fa-chevron-left'></i>" 
                                         data-next="<i class='fa fa-chevron-right'></i>"> 
                                        <div class="uix-flexslider__inner">
                                            <div class="uix-flexslider__item">
                                                <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" /></a>  
                                            </div>
                                            <div class="uix-flexslider__item">
                                                <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" /></a>
                                            </div>
                                            <div class="uix-flexslider__item">
                                                <a href="#" rel="theme-slider-prettyPhoto[cat-1]"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="Title 3" /></a>
                                            </div>
                                        </div>
                                        <!-- .uix-flexslider__inner end -->
                                    </div>
                                    <!-- .uix-flexslider end -->   
                            </div>                       
                     </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.row -->
      </div>   
          </section>    
<!-- Title
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Full Screen Slider</h3>
                <p>You need add an attribute <code>data-slider-bg</code> to <code>.uix-flexslider__item</code>. Simultaneously, use the <code>.is-fullscreen</code> class on your <code>.uix-flexslider--primary</code> div </p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Slideshow
====================================================== -->
<div role="slider" class="uix-flexslider uix-flexslider--primary is-fullscreen" 
     data-draggable="true" 
     data-my-nav-thumbs="false"
     data-my-prev-next-thumbs="false"
     data-my-nav-timeline="false"
     data-my-controls="false"
     data-my-multiple-items="false"
     data-my-multiple-items-move="1"
     data-my-count-total="false"
     data-my-count-now="false"
     data-my-parallax="false"
     data-my-sync="false"
     data-wheel="false"
     data-speed="600" 
     data-timing="10000" 
     data-loop="false" 
     data-paging="true" 
     data-arrows="true" 
     data-animation="slide" 
     data-auto="true" 
     data-prev="<i class='fa fa-chevron-left uix-flexslider--primary-prev'></i>" 
     data-next="<i class='fa fa-chevron-right uix-flexslider--primary-next'></i>">
    <div class="uix-flexslider__inner">
        <div class="uix-flexslider__item" data-slider-bg="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg">
            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 1" />
            <div class="uix-flexslider__desc">
                <div class="container uix-t-c">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="uix-flexslider__el-level uix-flexslider__el-level-1">Beautiful Free &amp; Premium Responsive WordPress Themes</h2>
                                <p class="uix-typo--h5 uix-typo--style-normal uix-flexslider__el-level uix-flexslider__el-level-2">Uix Responsive Web UI Frameworks</p>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
            </div>
            <!-- .uix-flexslider__desc  end -->   
        </div>
        <div class="uix-flexslider__item" data-slider-bg="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg">
            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" />
            <div class="uix-flexslider__desc">
                <div class="container uix-t-c">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="uix-flexslider__el-level uix-flexslider__el-level-1">Hello World</h2>
                                <p class="uix-typo--h5 uix-typo--style-normal uix-flexslider__el-level uix-flexslider__el-level-2">UIUX Lab carefully crafts original design assets and publishes articles about UI/UX trends!</p>
                                <a class="uix-btn uix-btn__border--medium uix-btn__size--s uix-flexslider__el-level uix-flexslider__el-level-3" href="#">View Demo</a>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
            </div>
            <!-- .uix-flexslider__desc  end -->
        </div>
        <div class="uix-flexslider__item" data-slider-bg="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg">
            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="Title 3" />
            <div class="uix-flexslider__desc">
                <div class="container uix-t-c">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="uix-flexslider__el-level uix-flexslider__el-level-1">Title 3</h2>
                                <p class="uix-typo--h5 uix-typo--style-normal uix-flexslider__el-level uix-flexslider__el-level-2">UIUX Lab carefully crafts original design assets and publishes articles about UI/UX trends!</p>
                                <a class="uix-btn uix-btn__border--medium uix-btn__size--s uix-flexslider__el-level uix-flexslider__el-level-3" href="#">View Demo</a>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
            </div>
            <!-- .uix-flexslider__desc  end --> 
        </div>
    </div>
    <!-- .uix-flexslider__inner end -->
</div>
<!-- .uix-flexslider end -->
        </main>
@endsection

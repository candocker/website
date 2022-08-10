@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<section>
     <div class="container">
            <div class="row">
                <div class="col-12">
                            <div class="uix-swiper">
                                <!-- Title
                                ====================================================== -->
                                <section class="uix-spacing--s">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Synchronize multiple objects</h3>
                                                <p>For different responsive breakpoints (screen sizes) and custom buttons.</p>
                                                <hr>
                                            </div>
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- .container end -->
                                </section>
                               <!-- Slideshow
                                ====================================================== -->
                                <div role="slider" class="swiper-container" id="app-slider1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">Slide One 1</div>
                                        <div class="swiper-slide">Slide One 2</div>
                                        <div class="swiper-slide">Slide One 3</div>
                                        <div class="swiper-slide">Slide One 4</div>
                                        <div class="swiper-slide">Slide One 5</div>
                                        <div class="swiper-slide">Slide One 6</div>
                                        <div class="swiper-slide">Slide One 7</div>
                                        <div class="swiper-slide">Slide One 8</div>
                                        <div class="swiper-slide">Slide One 9</div>
                                        <div class="swiper-slide">Slide One 10</div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-prev">
                                        <svg viewBox="0 0 448 512"><path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"/></svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg viewBox="0 0 448 512"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/></svg>
                                    </div>
                                </div>    
                                <!-- /.swiper-container -->
                                <div role="slider" class="swiper-container" id="app-slider2" style="margin-top: 30px;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">Slide Two 1</div>
                                        <div class="swiper-slide">Slide Two 2</div>
                                        <div class="swiper-slide">Slide Two 3</div>
                                        <div class="swiper-slide">Slide Two 4</div>
                                        <div class="swiper-slide">Slide Two 5</div>
                                        <div class="swiper-slide">Slide Two 6</div>
                                        <div class="swiper-slide">Slide Two 7</div>
                                        <div class="swiper-slide">Slide Two 8</div>
                                        <div class="swiper-slide">Slide Two 9</div>
                                        <div class="swiper-slide">Slide Two 10</div>
                                    </div>
                                </div>    
                                <!-- /.swiper-container -->
                                <!-- Title
                                ====================================================== -->
                                <section class="uix-spacing--s">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Parallax Effect</h3>
                                                <p>Custom slides transform effect and custom buttons..</p>
                                                <hr>
                                            </div>
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- .container end -->
                                </section>
                               <!-- Slideshow
                                ====================================================== -->
                                <div role="slider" class="swiper-container" id="app-slider3" style="margin-top: 30px;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><span>Slide Three 1</span><div class="slide-inner" style="background-image:url(assets/images/demo/slide-1.jpg)"></div></div>
                                        <div class="swiper-slide"><span>Slide Three 2</span><div class="slide-inner" style="background-image:url(assets/images/demo/slide-2.jpg)"></div></div>
                                        <div class="swiper-slide"><span>Slide Three 3</span><div class="slide-inner" style="background-image:url(assets/images/demo/slide-3.jpg)"></div></div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-prev">
                                        <svg viewBox="0 0 448 512"><path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"/></svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg viewBox="0 0 448 512"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/></svg>
                                    </div>
                                </div>    
                                <!-- /.swiper-container -->                
                                <!-- Title
                                ====================================================== -->
                                <section class="uix-spacing--s">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Scale Effect without left/right swipe</h3>
                                                <p>Custom slides transform effect and custom buttons..</p>
                                                <hr>
                                            </div>
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- .container end -->
                                </section>
                               <!-- Slideshow
                                ====================================================== -->
                                <div role="slider" class="swiper-container" id="app-slider4" style="margin-top: 30px;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><span>Slide Three 1</span><div class="slide-inner" style="background-image:url(assets/images/demo/slide-1.jpg)"></div></div>
                                        <div class="swiper-slide"><span>Slide Three 2</span><div class="slide-inner" style="background-image:url(assets/images/demo/slide-2.jpg)"></div></div>
                                        <div class="swiper-slide"><span>Slide Three 3</span><div class="slide-inner" style="background-image:url(assets/images/demo/slide-3.jpg)"></div></div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-prev">
                                        <svg viewBox="0 0 448 512"><path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"/></svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg viewBox="0 0 448 512"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/></svg>
                                    </div>
                                </div>    
                                <!-- /.swiper-container -->            
                                <!-- Title
                                ====================================================== -->
                                <section class="uix-spacing--s">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Centered Slides</h3>
                                                <p>Allow this option if you want to have your active slide in the center, instead of snapped to the left side of Swiper view.</p>
                                                <hr>
                                            </div>
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- .container end -->
                                </section>
                               <!-- Slideshow
                                ====================================================== -->
                                <div role="slider" class="swiper-container" id="app-slider5">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">Slide One 1</div>
                                        <div class="swiper-slide">Slide One 2</div>
                                        <div class="swiper-slide">Slide One 3</div>
                                        <div class="swiper-slide">Slide One 4</div>
                                        <div class="swiper-slide">Slide One 5</div>
                                        <div class="swiper-slide">Slide One 6</div>
                                        <div class="swiper-slide">Slide One 7</div>
                                        <div class="swiper-slide">Slide One 8</div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-prev">
                                        <svg viewBox="0 0 448 512"><path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"/></svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg viewBox="0 0 448 512"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/></svg>
                                    </div>
                                </div>    
                                <!-- /.swiper-container -->
                                <!-- Title
                                ====================================================== -->
                                <section class="uix-spacing--s">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Display half on both sides</h3>
                                                <p>Set up CSS to achieve only half of the entries on both sides.</p>
                                                <hr>
                                            </div>
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- .container end -->
                                </section>
                               <!-- Slideshow
                                ====================================================== -->
                                <div role="slider" class="swiper-container" id="app-slider6">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">Slide One 1</div>
                                        <div class="swiper-slide">Slide One 2</div>
                                        <div class="swiper-slide">Slide One 3</div>
                                        <div class="swiper-slide">Slide One 4</div>
                                        <div class="swiper-slide">Slide One 5</div>
                                        <div class="swiper-slide">Slide One 6</div>
                                        <div class="swiper-slide">Slide One 7</div>
                                        <div class="swiper-slide">Slide One 8</div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-prev">
                                        <svg viewBox="0 0 448 512"><path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"/></svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg viewBox="0 0 448 512"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/></svg>
                                    </div>
                                </div>    
                                <!-- /.swiper-container -->
                                <!-- Title
                                ====================================================== -->
                                <section class="uix-spacing--s">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Custom Progress Bar</h3>
                                                <p>Demonstrate how to add a slide progress bar to Swiper.</p>
                                                <hr>
                                            </div>
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- .container end -->
                                </section>
                               <!-- Slideshow
                                ====================================================== -->
                                <div role="slider" class="swiper-container" id="app-slider7">
                                    <div id="app-slider7__progress"></div>
                                    <div id="app-slider7__progress2"></div>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">Slide One 1</div>
                                        <div class="swiper-slide">Slide One 2</div>
                                        <div class="swiper-slide">Slide One 3</div>
                                        <div class="swiper-slide">Slide One 4</div>
                                        <div class="swiper-slide">Slide One 5</div>
                                        <div class="swiper-slide">Slide One 6</div>
                                        <div class="swiper-slide">Slide One 7</div>
                                        <div class="swiper-slide">Slide One 8</div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-prev">
                                        <svg viewBox="0 0 448 512"><path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"/></svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg viewBox="0 0 448 512"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/></svg>
                                    </div>
                                </div>    
                                <!-- /.swiper-container -->
                                <!-- Title
                                ====================================================== -->
                                <section class="uix-spacing--s">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Gallery with center thumbs automatically</h3>
                                                <p>Using the Swiper API that enables you to add custom thumbnails and link them to your Swiper instance automatically.</p>
                                                <hr>
                                            </div>
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- .container end -->
                                </section>
                               <!-- Slideshow
                                ====================================================== -->
                                <div style="max-width: 600px;">
                                    <div role="slider" class="swiper-container" id="app-slider8">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/320x345.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x279.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x320.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x320.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x400.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/450x338.jpg" alt="null"></div>
                                        </div>
                                        <!-- Add Pagination -->
                                        <div class="swiper-pagination"></div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-prev">
                                            <svg viewBox="0 0 448 512"><path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"/></svg>
                                        </div>
                                        <div class="swiper-button-next">
                                            <svg viewBox="0 0 448 512"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/></svg>
                                        </div>
                                    </div>    
                                    <!-- /.swiper-container -->
                                    <!-- //// thumbs  /// -->
                                    <div role="slider" class="swiper-container" id="app-slider8-thumbs">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/320x345.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x279.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x320.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x320.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x400.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/450x338.jpg" alt="null"></div>
                                        </div>
                                    </div>    
                                    <!-- /#app-slider8-thumbs -->
                                </div>
                                <!-- Title
                                ====================================================== -->
                                <section class="uix-spacing--s">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Gallery with manual triggers</h3>
                                                <p>Customize the thumbnail/trigger and link it to your Swiper instance manually.</p>
                                                <hr>
                                            </div>
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- .container end -->
                                </section>
                               <!-- Slideshow
                                ====================================================== -->
                                <div style="max-width: 600px;">
                                    <div role="slider" class="swiper-container" id="app-slider9">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/320x345.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x279.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x320.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x320.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x400.jpg" alt="null"></div>
                                            <div class="swiper-slide"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/450x338.jpg" alt="null"></div>
                                        </div>
                                        <!-- Add Pagination -->
                                        <div class="swiper-pagination"></div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-prev">
                                            <svg viewBox="0 0 448 512"><path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"/></svg>
                                        </div>
                                        <div class="swiper-button-next">
                                            <svg viewBox="0 0 448 512"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/></svg>
                                        </div>
                                    </div>    
                                    <!-- /.swiper-container -->
                                    <!-- //// triggers  /// -->
                                    <div id="app-slider9-triggers">
                                        <div><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/320x345.jpg" alt="null"></div>
                                        <div><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x279.jpg" alt="null"></div>
                                        <div><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x320.jpg" alt="null"></div>
                                        <div><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x320.jpg" alt="null"></div>
                                        <div><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x400.jpg" alt="null"></div>
                                        <div><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/450x338.jpg" alt="null"></div>
                                    </div>    
                                    <!-- /#app-slider9-triggers -->
                                </div>
                            </div>
                            <!-- /.uix-swiper -->
                </div>
            </div>
      </div>    
          </section>
        </main>
@endsection

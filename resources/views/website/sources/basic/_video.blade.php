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
                            <h3>Video Embed</h3>
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
                            <div class="col-12">
                                  <div class="uix-relative" data-embed-video-wrapper="true">
                                      <div class="uix-video" data-embed-video-width="auto" data-embed-video-height="auto" data-embed-video-controls="true" data-embed-video-autoplay="false" data-embed-video-loop="false">
                                          <video id="video-demo-1" class="video-js vjs-default-skin" controls poster="{{$commonAssetUrl}}/website/assets/videos/480x270/demo.jpg">
                                              <source src="{{$commonAssetUrl}}/website/assets/videos/480x270/demo.mp4" type="video/mp4">
                                              <source src="{{$commonAssetUrl}}/website/assets/videos/480x270/demo.webm" type="video/webm">
                                          </video>
                                      </div> 
                                  </div>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>   
           <!-- Content   
            ====================================================== -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3>Video PopUp</h3>
                            <p>Set <code>data-video-win</code>, <code>data-video-poster</code>, <code>data-video-mp4</code>, <code>data-video-webm</code>, <code>data-video-ogv</code> and <code>data-modal-id</code> properties to create video interactions. </p>
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
                            <div class="col-12">
                                <a href="javascript:void(0)" data-video-win="true" data-video-poster="https://www.videvo.net/videvo_files/images/preview_hd0933.jpg" data-video-mp4="https://www.videvo.net//videvo_files/converted/2013_08/videos/hd0933.mov68938.mp4" data-video-webm="" data-video-ogv="" data-modal-id="web-modal-1" data-modal-close-onlybtn="false"><i class="fa fa-play-circle" aria-hidden="true"></i> Click Here to Open Third-party Video</a>
                                <br>
                                <a href="javascript:void(0)" data-video-win="true" data-video-poster="{{$commonAssetUrl}}/website/assets/videos/480x270/demo.jpg" data-video-mp4="{{$commonAssetUrl}}/website/assets/videos/480x270/demo.mp4" data-video-webm="" data-video-ogv="" data-modal-id="web-modal-44" data-modal-close-onlybtn="false"><i class="fa fa-play-circle" aria-hidden="true"></i> Click Here to Open Local video</a>
                                <br>
                                <a href="javascript:void(0)" data-video-win="true" data-video-poster="{{$commonAssetUrl}}/website/assets/videos/1920x1080/demo.jpg" data-video-mp4="" data-video-webm="" data-video-ogv="" data-modal-id="web-modal-2" data-modal-close-onlybtn="false"><span data-video-iframe="true"><iframe width="560" height="315" src="https://www.youtube.com/embed/ckYJBMfPtBs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></span><i class="fa fa-play-circle" aria-hidden="true"></i> Click Here to Open Youtube Video</a>
                                <br> 
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>   
        </main>
@endsection

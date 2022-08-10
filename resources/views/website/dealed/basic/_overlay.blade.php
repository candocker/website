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
                            <h3>Overlay</h3>
                            <p>Create an image overlay effect.</p>
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
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="uix-relative--inline uix-relative--inline-clip">
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="" />
                                            <div class="uix-overlay uix-overlay--white">
                                                <p>Bottom Text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .row end -->    
                                <p>&nbsp;</p>
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="uix-relative--inline uix-relative--inline-clip">
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="" />
                                            <div class="uix-overlay uix-overlay--black">
                                                <p>Bottom Text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>&nbsp;</p>
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="uix-relative--inline uix-relative--inline-clip">
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="" />
                                            <div class="uix-overlay uix-overlay--white uix-dir--top">
                                                <p>Top Text</p>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                                <!-- .row end -->    
                                <p>&nbsp;</p>
                                <div class="row">    
                                    <div class="col-md-6 offset-md-3">
                                        <div class="uix-relative--inline uix-relative--inline-clip">
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-4.jpg" alt="" />
                                            <div class="uix-overlay uix-overlay--black uix-dir--top">
                                                <p>Top Text</p>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                                <p>&nbsp;</p>
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="uix-relative--inline uix-relative--inline-clip">
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="" />
                                            <div class="uix-overlay uix-overlay--black uix-overlay--cover">
                                                <div class="uix-v-align--table">
                                                    <div>
                                                        <p>Fully filled (Vertically Center)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                                <!-- .row end -->    
                                <p>&nbsp;</p>
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="uix-relative--inline uix-relative--inline-clip">
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="" />
                                            <div class="uix-overlay uix-overlay--black uix-overlay--cover">
                                                <p>Fully filled</p>
                                            </div>
                                        </div>           
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

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
                            <h3>Basic</h3>
                            <p>Provides some different styles of image performance.</p>
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
                            <p>
                                <img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x400.jpg" width="150" alt="" class="uix-border--circle">
                                &nbsp;&nbsp;
                                <img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x400.jpg" width="150" alt="" class="uix-border--rounded">
                            </p>
                            <div style="padding: 25px; background: #EAEAEA;display: inline-block;margin: 0 15px 15px 0;overflow: hidden;" class="uix-border--circle"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x400.jpg" width="150" alt=""></div>
                            <div style="padding: 25px; background: #EAEAEA;display: inline-block;margin: 0 15px 15px 0;overflow: hidden;" class="uix-border--circle uix-border--circle-img"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x400.jpg" width="150" alt=""></div>            
                            <div style="padding: 25px; background: #EAEAEA;display: inline-block;margin: 0 15px 15px 0;overflow: hidden;" class="uix-border--circle uix-border--circle-only-img"><img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x400.jpg" width="150" alt=""></div>
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
                            <h3>Full Width</h3>
                            <p>Implemented using <strong>bootstrap</strong>.</p>
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
                            <img src="{{$commonAssetUrl}}/website/assets/images/placeholder/400x279.jpg" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>    
        </main>
@endsection

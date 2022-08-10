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
                            <h3>Responsive Images</h3>
                            <p>Resize the browser to see different versions of the picture loading at different viewport sizes.<br>
    The browser looks for the first source element where the media query matches the user's current viewport width,
    and fetches the image specified in the <code>srcset</code> attribute.</p>
                                <p class="uix-striking-msg uix-striking-msg--info">Note: Please use your phone to preview</p>
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
                    <img
                       alt=""
                       srcset="{{$commonAssetUrl}}/website/assets/images/placeholder/800x600.jpg 768w,
                       assets/images/placeholder/1440x900.jpg 1440w"
                       size="(max-width: 768px) 100vw, 50vw"
                       src="{{$commonAssetUrl}}/website/assets/images/placeholder/1440x900.jpg" />
                </div>
                <!-- .container end -->
            </section>   
        </main>
@endsection

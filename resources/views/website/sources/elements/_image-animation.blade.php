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
                <h3>Image Animation</h3>
                <p>Scroll down your mouse to see the transition animation of the image</p>
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
                <span class="uix-image-anim uix-image-anim--x" data-uix-anim='{"viewport":"50%","from":"","to":".is-active","delay":0.1,"infinite":false}'>
                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" style="max-width: 500px;" alt="">
                </span>
                 <br>
                <span class="uix-image-anim uix-image-anim--y" data-uix-anim='{"viewport":"50%","from":"","to":".is-active","delay":0.1,"infinite":false}'>
                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" style="max-width: 500px;" alt="">
                </span>  
                <br>
                <span class="uix-image-anim uix-image-anim--z" data-uix-anim='{"viewport":"50%","from":"","to":".is-active","delay":0.1,"infinite":false}'>
                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" style="max-width: 500px;" alt="">
                </span>    
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<!-- Parallax & Overlay 
============================================= --> 
<section id="scrollspy-animate-demo">
    <div class="uix-parallax uix-height--100 uix-typo--color-white" data-fully-visible="false" data-offset-top="0" data-overlay-bg="false" data-skew="0" data-speed="0.3">
        <img class="uix-parallax__img" src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg" alt="">
        <div class="uix-v-align--absolute uix-t-c">
            <div class="container uix-t-c">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="uix-spacing--s uix-spacing--no-bottom"></div>
                        <img src="{{$commonAssetUrl}}/website/assets/images/logo-hero.png" alt="Uix Kit">
                        <br>
                        <br>
                        <canvas data-txt="Animated Scroll Down" data-filter-texture="{{$commonAssetUrl}}/website/assets/images/dmaps/2048x2048/clouds.jpg" id="scrollspy-animate-demo--txt"></canvas>
                        <h3 class="uix-typo--h5 uix-typo--style-normal uix-spacing--no-bottom">Here is the progress of the scroll: <strong><em>0</em>/1</strong></h3>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->  
        </div>
    </div>
</section>
<div style="height: 1500px;"></div>
        </main>
@endsection

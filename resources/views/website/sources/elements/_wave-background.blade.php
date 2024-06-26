@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<!-- Parallax & Overlay 
============================================= -->
<section>
    <div class="uix-parallax uix-height--100 uix-typo--color-white" data-fully-visible="false" data-offset-top="0" data-overlay-bg="false" data-skew="0" data-speed="0.3">
        <img class="uix-parallax__img" src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg" alt="">
        <div class="uix-v-align--absolute uix-t-c uix-hidden-scrollbar-x">
            <div class="container uix-t-c">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2>Wave Background</h2>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->  
        </div>    
    </div>
</section>
<!--  Wave Background Begin  -->
<div class="uix-wave-bg__container">
    <div class="uix-wave-bg__svgmask">
        <svg viewBox="0 0 1440 120" aria-hidden="true">
            <path d="M1440,21.2101911 L1440,120 L0,120 L0,21.2101911 C120,35.0700637 240,42 360,42 C480,42 600,35.0700637 720,21.2101911 C808.32779,12.416393 874.573633,6.87702029 918.737528,4.59207306 C972.491685,1.8109458 1026.24584,0.420382166 1080,0.420382166 C1200,0.420382166 1320,7.35031847 1440,21.2101911 Z"></path>
        </svg>
    </div>
</div>
<!--  Wave Background End  -->
<hr>
<div class="uix-wave-bg__pureSvg">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="uix-wave-bg__path" class="st0" d="M-160,35.6 c 30,0,58-6.6,88-6.6 s58,6.6,88,6.6s58-6.6,88-6.6s58,6.6,88,6.6V59h-352V35.6z"></path>
        </defs>
        <g class="uix-wave-bg__parallax">
            <use style="fill:#DE510E;fill-opacity: 1;" xlink:href="#uix-wave-bg__path" x="48" y="0"></use>
            <use style="fill:#CE3A3E;fill-opacity: 1;" xlink:href="#uix-wave-bg__path" x="48" y="0"></use>
        </g>
    </svg>
</div>
        </main>
@endsection

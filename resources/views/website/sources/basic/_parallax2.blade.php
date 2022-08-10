@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<!-- Parallax & Overlay 
============================================= --> 
<section>
    <div class="uix-parallax uix-height--100" data-fully-visible="false" data-offset-top="0" data-overlay-bg="false" data-skew="0" data-speed="0.4">
        <img class="uix-parallax__img" src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg" alt="">
        <div class="uix-v-align--absolute uix-t-c">
            <h2>Fulscreen + Vertically Centered Text</h2>
        </div>
    </div>
</section>
<section class="uix-parallax--el" data-transition="all 0.4s cubic-bezier(0, 0, 0.34, 0.96) 0s" data-speed="-0.7" style="background: #d2ff52; background: linear-gradient(to bottom, #d2ff52 0%,#91e842 100%);">
    <div class="uix-height--30 is-mobile-still">
        <div class="uix-v-align--absolute uix-t-c">
            <h2>Element Parallax</h2>
            <p>Background without parallax</p>
        </div>
    </div>
</section>
        </main>
@endsection

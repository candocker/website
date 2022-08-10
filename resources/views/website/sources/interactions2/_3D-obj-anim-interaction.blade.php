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
                <h3>3D Object Anim Interaction</h3>
                <p>Click the button below to control camera position and object deformation.</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Content 
====================================================== -->
<div class="text-center">
    <a class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-pill is-transparent" id="3D-object-button1" href="#">Camera</a>
    <a class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-pill is-transparent" id="3D-object-button2" href="#">Morph</a>
    <a class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-pill is-transparent" id="3D-object-button3" href="#">Scale</a>
</div>
<canvas id="3D-object-buttonevent-canvas"></canvas>
        </main>
@endsection

@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<!-- Content 
====================================================== -->
<!--
User: http://shaderfrog.com/app/view/3183
-->
<canvas id="3D-background-three-canvas" data-shader-url="{{$commonAssetUrl}}/website/assets/json/shaders/shader-demo.json"></canvas>
        </main>
@endsection

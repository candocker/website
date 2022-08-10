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
                            <h3>3D Model</h3>
                            <p>Create model-based animation and material effects.</p>
                            <hr>
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
            <!-- Content 
            ====================================================== -->
            <canvas style="margin-top: -5rem;" id="3D-model-canvas" data-texture-src="{{$commonAssetUrl}}/website/assets/models/gltf/project.jpg" data-model-src="{{$commonAssetUrl}}/website/assets/models/gltf/project.glb"></canvas>
        </main>
@endsection

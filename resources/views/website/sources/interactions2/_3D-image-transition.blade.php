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
                            <h3>3D Image Transition</h3>
                            <p>Mouse through the picture to produce a special transition effect. You can change the effect by changing the displacement image.</p>
                            <hr>
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
           <!-- Content 
            ====================================================== -->
            <div class="container uix-t-c" style="margin-top: -5rem;">
                <canvas id="3D-imagetransition-three-canvas" data-filter-texture="{{$commonAssetUrl}}/website/assets/images/dmaps/displacement/1.jpg"></canvas>
            </div>
            <!-- .container end -->
        </main>
@endsection

@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<div id="html3D-view" style="display:none;">
    <div class="html3D-view-content" data-position-x="0" data-position-y="0" data-position-z="100" data-rotation-x="0.7" data-rotation-y="3.14159265358979" data-rotation-z="0">
           <!-- Content   
            ====================================================== -->
            <section class="uix-spacing--s uix-spacing--no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3>3D Pages</h3>
                            <p>Control Your Page Using Your Computer's Mouse</p>
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
                                <h4>Page is here</h4>
                                <p><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" width="350" alt="" /></p>
                                <p>Hi. I'm a full-stack designer on the way of pursuing the dream. Focus on user interface, user experience, awesome websites, front-end and WordPress development. I want to build things I can be proud of. I approach some awesome design challenges with an eye on the latest trends and strive to align my work the industry current best practices, while leveraging the acquired experience on the field. I have been working so hard to build up self. My personal website: https://uiux.cc </p> 
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>       
    </div>
    <!-- .html3D-view-content end -->
</div>   
<!-- /#html3D-view -->
<div id="3D-renderer"></div>
        </main>
@endsection

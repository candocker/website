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
                <h3>Brands List</h3>
                <p>You can modify the scss file to flexibly change the requirements.</p>
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
            <div class="col-lg-6 col-md-6">
                <ul class="uix-list-brands uix-list-brands--medium uix-outer-shadow--regular">
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-1.jpg" alt=""><span>Title Here</span></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-2.jpg" alt=""><span>The Long Title Here</span></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-3.jpg" alt=""><span>Title Here</span></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-4.jpg" alt=""><span>Title Here</span></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-5.jpg" alt=""><span>The Long Title Here</span></li>
                </ul>  
            </div>
            <div class="col-lg-6 col-md-6">
                <ul class="uix-list-brands uix-list-brands--tiny uix-outer-shadow--regular">
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-1.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-2.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-3.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-4.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-5.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-1.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-2.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-3.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-4.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-5.jpg" alt=""></li>    
                </ul>  
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
            <div class="col-lg-6 col-md-6">
                <ul class="uix-list-brands uix-list-brands--small uix-outer-shadow--regular">
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-1.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-2.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-3.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-4.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-5.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-1.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-2.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-3.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-4.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-5.jpg" alt=""></li>    
                </ul>  
            </div>
            <div class="col-lg-6 col-md-6">
                <ul class="uix-list-brands uix-list-brands--large uix-outer-shadow--regular">
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-1.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-2.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-3.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-4.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-5.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-1.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-2.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-3.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-4.jpg" alt=""></li>
                    <li><img src="{{$commonAssetUrl}}/website/assets/images/demo/brands/logo-5.jpg" alt=""></li>    
                </ul>  
            </div>
        </div>
        <!-- .row end -->    
    </div>
    <!-- .container end -->
</section>   
        </main>
@endsection

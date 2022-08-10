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
                <h3>Align Wide and Full Element</h3>
                <p>You could add <code>.uix-alignfull</code> to HTML tag or image tag in order to overflow safe width of container.</p>
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
           <div class="uix-alignfull" style="border: 3px dotted #000; padding: 50px 0;margin-bottom: 50px;">
                <img src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-1.jpg" alt="big image" width="1024" height="682">            
            </div> 
            <div style="border: 3px dotted #000; padding: 50px 0;margin-bottom: 50px;">
                <img class="uix-alignfull" src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-2.jpg" alt="big image" width="1024" height="682">    
            </div> 
    </div>
    <!-- .container end -->
</section>   
        </main>
@endsection

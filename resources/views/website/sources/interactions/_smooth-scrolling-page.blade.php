@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<div id="uix-scrollspy-area">
    <!-- Scrolling Progress 
    ====================================================== -->           
    <div style="position: fixed; width: 30px; z-index: 10; top: 15px; left: 15px; text-align: center; border: 1px solid #333; border-radius: 25px; overflow: hidden;">
        <div id="app-scrolling-progress1" style="background: #ce3a3e; width: 30px; height: 30px; margin: 0 auto;"></div>
        <div id="app-scrolling-progress2" style="background: #0332C0; width: 30px; height: 30px; margin: 0 auto;"></div>
        <div id="app-scrolling-progress3" style="background: #089D01; width: 30px; height: 30px; margin: 0 auto;"></div>
    </div>
    <!-- Content 
    ====================================================== -->
    <section class="uix-spacing--s uix-spacing--no-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Smooth Scrolling Page</h3>
                    <p>Add a smooth scrolling effect to a website.</p>
                    <hr>
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
   <!-- Content 
    ====================================================== -->
    <section class="uix-spacing--s" id="app-scene-1" style="background: #fffff4;">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>                            
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>                            
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <div class="uix-scrollspy-animate--parallax__wrapper" data-scrollspy-speed="0.1">
                            <div class="uix-scrollspy-animate--parallax">
                               <img src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-3.jpg" alt="null">            
                            </div>                        
                        </div>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>                      
                        <p>
                           <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" width="300" alt="null" class="uix-scrollspy-animate--transparency" data-scrollspy-speed="0.1"> 
                           <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" width="300" alt="null" class="uix-scrollspy-animate--transparency" data-scrollspy-speed="0.4">    
                           <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" width="300" alt="null" class="uix-scrollspy-animate--transparency" data-scrollspy-speed="0.8">      
                        </p>                           
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <h3>scroll spy set element animation from HTML <code>data-uix-anim</code> attribute</h3>       
                        <p style="transition: .1s ease-in-out;" class="uix-el--transparent" data-uix-anim='{"viewport":"60%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.5,"delay":0,"infinite":true}'><img src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-1.jpg" alt=""></p>
                        <p style="transition: .1s ease-in-out;" class="uix-el--transparent" data-uix-anim='{"viewport":"90%","from":{"opacity":0},"to":{"opacity":1},"ease":"Power2.easeOut","duration":0.5,"delay":0.3,"infinite":false}'>
                            <h2 class="uix-typo--style-bold" data-text-eff="letters-eff-flyInOut-b1" data-text-eff-speed="500">We're Visual Design Studio</h2>                        
                        </p>                                    
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <div class="uix-scrollspy-animate--parallax__wrapper" data-scrollspy-speed="0.2">
                            <div class="uix-scrollspy-animate--parallax">
                               <img src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-2.jpg" alt="null">            
                            </div>                        
                        </div> 
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>
                           <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" width="300" alt="null" class="uix-scrollspy-animate--transparency" data-scrollspy-speed="0.1" data-scrollspy-reverse="true"> 
                           <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" width="300" alt="null" class="uix-scrollspy-animate--transparency" data-scrollspy-speed="0.4" data-scrollspy-reverse="true">    
                           <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" width="300" alt="null" class="uix-scrollspy-animate--transparency" data-scrollspy-speed="0.8" data-scrollspy-reverse="true">       
                        </p>   
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>                   
                        <p>Scene 1 progress demo.</p>
                        <p>Scene 1 progress demo.</p>
                    </div>
                </div>
                <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>    
   <!-- Content 
    ====================================================== -->
    <section class="uix-spacing--s" id="app-scene-2" style="background: #fff3f3;">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>                            
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>
                        <p>Scene 2 progress demo.</p>                            
                    </div>
                </div>
                <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>  
   <!-- Content 
    ====================================================== -->
    <section class="uix-spacing--s" id="app-scene-3" style="background: #f4fff3;">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Scene 3 progress demo.</p>
                        <p>Scene 3 progress demo.</p>
                        <p>Scene 3 progress demo.</p>
                        <p>Scene 3 progress demo.</p>                                
                        <p>Scene 3 progress demo.</p>
                        <p>Scene 3 progress demo.</p>
                        <p>Scene 3 progress demo.</p>
                        <p>Scene 3 progress demo.</p>                            
                    </div>
                </div>
                <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>    
            <!-- Footer
        ============================================= -->    
@endsection

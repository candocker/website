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
                            <h3>Team Focus</h3>
                            <p>Click on the avatar to produce a focus effect.</p>
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
                            <div class="col-12 uix-trans">
                                <div class="uix-team-focus__mask"></div>
                                <div class="uix-team-focus" 
                                    data-hover-width="20" 
                                    data-target-width="80" 
                                    data-close-btn="false"
                                    data-target-info="#uix-team-focus__info-1">
                                    <div class="uix-border--circle uix-border--circle-only-img" 
                                         data-name="Name 1" 
                                         data-po="Position"
                                         data-intro="Introduction text<br>Introduction text<br>Introduction text<br>Introduction text<br>Introduction text">
                                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-1.jpg" alt="">
                                     </div>    
                                    <div class="uix-border--circle uix-border--circle-only-img" 
                                         data-name="Name 2" 
                                         data-po="Position"
                                         data-intro="Introduction text<br>Introduction text">
                                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-2.jpg" alt="">
                                     </div>    
                                    <div class="uix-border--circle uix-border--circle-only-img"
                                         data-name="Name 3" 
                                         data-po="Position"
                                         data-intro="Introduction text<br>Introduction text<br>Introduction text">
                                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-3.jpg" alt="">
                                     </div>    
                                    <div class="uix-border--circle uix-border--circle-only-img"
                                         data-name="Name 4" 
                                         data-po="Position"
                                         data-intro="Introduction text<br>Introduction text<br>Introduction text">
                                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-4.jpg" alt="">
                                     </div>    
                                    <div class="uix-border--circle uix-border--circle-only-img"
                                         data-name="Name 5" 
                                         data-po="Position"
                                         data-intro="Introduction text">
                                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-1.jpg" alt="">
                                     </div>    
                                    <div class="uix-border--circle uix-border--circle-only-img"
                                         data-name="Name 6" 
                                         data-po="Position"
                                         data-intro="Introduction text<br>Introduction text">
                                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-3.jpg" alt="">
                                     </div>                    
                                </div>
                                <!-- .uix-team-focus end -->         
                                <div class="uix-team-focus__info uix-t-l" id="uix-team-focus__info-1">
                                    <h4>
                                        <strong>...</strong>
                                        <em>...</em>
                                    </h4>    
                                    <p class="uix-team-focus__info__text">...</p>                                                                            
                                </div>    
                                <!-- /.uix-team-focus__info -->
                            </div>
                            <!-- .col-12 end -->
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
        </main>
@endsection

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
                            <h3>Crazy Badges</h3>
                            <p>Badge style with designated expressiveness.</p>
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
                            <div class="uix-badge uix-badge--crazy uix-badge--rounded" data-badge-size="auto">
                                <div class="uix-badge__inner">
                                    <h1><i class="fa fa-podcast" aria-hidden="true"></i></h1>
                                    <h3>April 2, 2018</h3>
                                    <p>Do you like this badge with Uix Kit?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="uix-badge uix-badge--crazy" data-badge-size="400px">
                                <div class="uix-badge__inner">
                                    <h2>Hello World!</h2>
                                    <h3>April 2, 2018</h3>
                                    <p>Do you like this badge with Uix Kit?</p>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <!-- .row end -->    
                </div>
                <!-- .container end -->
            </section>   
            <!-- Content 
            ====================================================== -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3>Status Badges</h3>
                            <p>Small status descriptors for UI elements.</p>
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
                                <a href="#" class="uix-badge uix-badge--status" data-badge="1">Text Here</a>
                                <a href="#" class="uix-badge uix-badge--status" data-badge="22">Text Here</a>
                                <a href="#" class="uix-badge uix-badge--status uix-badge--status-dot" data-badge="22">Text Here</a>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>   
        </main>
@endsection

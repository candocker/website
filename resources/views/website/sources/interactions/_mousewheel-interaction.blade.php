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
                            <h3>Mousewheel Interaction</h3>
                            <p>Scroll your mouse wheel to see the effect</p>
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
                                <div class="uix-striking-msg uix-striking-msg--info" id="demo-mousewheel-interaction-status">Status Here...</div>    
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
        </main>
@endsection

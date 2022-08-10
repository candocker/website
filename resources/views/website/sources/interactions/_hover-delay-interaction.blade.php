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
                <h3>Hover Delay Interaction</h3>
                <p>Delayed appearance of elements when the mouse is over</p>
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
                    <div class="uix-hover-delay-el" style="background: #EFEFEF; padding: 15px; margin: 15px;">
                        <div>Touch Me</div>
                    </div>
                    <div class="uix-hover-delay-el" style="background: #EFEFEF; padding: 15px; margin: 15px;">
                        <div>Touch Me</div>
                    </div>
                    <div class="uix-hover-delay-el" style="background: #EFEFEF; padding: 15px; margin: 15px;">
                        <div>Touch Me</div>
                    </div>        
                    <div class="uix-hover-delay-el" style="background: #EFEFEF; padding: 15px; margin: 15px;">
                        <div>Touch Me</div>
                    </div>      
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

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
                <h3>Dotted Line</h3>
                <p class="uix-striking-msg uix-striking-msg--default">Browsers below IE11 are not supported</p>
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
    <div class="container uix-t-c">
            <div class="row">
                <div class="col-12">
                    <div class="uix-dotted-line uix-dotted-line--s"></div> 
                    <div class="uix-dotted-line uix-dotted-line--m"></div>
                    <div class="uix-dotted-line uix-dotted-line--l"></div>   
                    <div class="uix-dotted-line uix-dotted-line--l is-circle"></div>                                    
                    <br>
                    <div class="uix-dotted-line uix-dotted-line--s is-horizontal"></div><br> 
                    <div class="uix-dotted-line uix-dotted-line--m is-horizontal"></div><br>
                    <div class="uix-dotted-line uix-dotted-line--l is-horizontal"></div><br>
                    <div class="uix-dotted-line uix-dotted-line--l is-horizontal is-circle"></div>      
                </div>
                <!-- .col-12 end -->
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

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
                <h3>Circle Text</h3>
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
                    <div class="uix-circle-text">
                          <circle-text r="90">
                              <svg height="180" width="180" viewBox="-90,-90,180,180">
                                  <defs><path id="my-circletxt" d="M-90,0 A90,90,0 1 1 90,0 A90,90,0 1 1 -90,0Z"></path>
                                      <circle r="90"></circle>
                                  </defs>
                                  <text><textPath xlink:href="#my-circletxt">Circle Text Here. Circle Text Here. Circle Text Here.</textPath></text>
                             </svg>
                          </circle-text>
                    </div>
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>   
        </main>    
@endsection

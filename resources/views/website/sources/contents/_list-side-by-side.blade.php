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
                <h3>Side by Side List</h3>
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
            <div class="col-lg-4 col-md-4">
                <dl class="uix-list-abreast">
                    <dt>Title 1: </dt>
                    <dd>This is a description.</dd>
                    <dt>Title 2: </dt>
                    <dd>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</dd>        
                </dl>
            </div>
            <div class="col-lg-4 col-md-4">
                <dl class="uix-list-abreast">
                    <dt>Title 1: </dt>
                    <dd>This is a description.</dd>
                    <dt>Title 2: </dt>
                    <dd>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</dd>        
                </dl>
            </div>
            <div class="col-lg-4 col-md-4">
                <dl class="uix-list-abreast">
                    <dt>Title 1: </dt>
                    <dd>This is a description.</dd>
                    <dt>Title 2: </dt>
                    <dd>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</dd>        
                </dl>
            </div>
        </div>
        <!-- .row end -->    
    </div>
    <!-- .container end -->
</section>   
           <!-- Content 
====================================================== -->
<section class="uix-spacing--s uix-spacing--no-top">
    <div class="container uix-t-c">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <dl class="uix-list-abreast uix-list-abreast--icon">
                    <dt><i class="fa fa-location-arrow" aria-hidden="true"></i></dt>
                    <dd>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                        <p>Eet lacinia odio sem nec elit.</p>
                    </dd>
                </dl>
                <dl class="uix-list-abreast uix-list-abreast--icon">
                    <dt><i class="fa fa-envelope" aria-hidden="true"></i></dt>
                    <dd>
                        <p>your@gmail.com </p>
                    </dd>
                </dl>
                <dl class="uix-list-abreast uix-list-abreast--icon">
                    <dt><i class="fa fa-phone" aria-hidden="true"></i></dt>
                    <dd>
                        <p>(1234) 12345678</p>
                    </dd>
                </dl>                    
                <dl class="uix-list-abreast uix-list-abreast--icon">
                    <dt><i class="fa fa-fax" aria-hidden="true"></i></dt>
                    <dd>
                        <p>(1234) 12345678</p>
                    </dd>
                </dl>    
            </div>
            <div class="col-lg-4 col-md-4">
            </div>
            <div class="col-lg-4 col-md-4">
            </div>
        </div>
        <!-- .row end -->    
    </div>
    <!-- .container end -->
</section>   
        </main>
@endsection

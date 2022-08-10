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
                <h3>Multi-level Drop-down Navigation</h3>
                <p>Click the hyperlink to display the drop-down menu</p>
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
                        <ul class="uix-vertical-menu">
                            <li><a href="#">Level 1</a></li>
                            <li><a href="#">Level 1</a></li>
                            <li><a href="#">Level 1</a>
                                <ul>
                                    <li><a href="#">Level 2</a></li>
                                    <li><a href="#">Level 2</a></li>
                                    <li><a href="#">Level 2</a>
                                        <ul>
                                            <li><a href="#">Level 3</a></li>
                                            <li><a href="#">Level 3</a></li>
                                            <li><a href="#">Level 3</a></li>
                                        </ul>  
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Level 1</a>
                                <ul>
                                    <li><a href="#">Level 2</a></li>
                                    <li><a href="#">Level 2</a></li>
                                </ul>
                            </li>    
                            <li><a href="#">Level 1</a></li>                
                        </ul>
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

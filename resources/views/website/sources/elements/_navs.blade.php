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
                <h3>Base</h3>
                <p>You could add <code>.uix-nav--line</code> or <code>.uix-nav--separation</code> to the <code>.uix-nav</code> to change style of nav.</p>
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
                <div class="uix-nav">
                    <ul>
                        <li class="is-active"><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Dropdown Link</a>
                            <ul>
                                <li><a href="#">Sub Link</a></li>
                                <li><a href="#">Sub Link</a></li>
                                <li><a href="#">Sub Link</a></li>
                                <li><a href="#">Sub Link</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>
                <!-- /.uix-nav -->    
                <hr>
                <div class="uix-nav uix-nav--line">
                    <ul>
                        <li class="is-active"><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>
                <!-- /.uix-nav -->    
                <hr>
                <div class="uix-nav uix-nav--separation">
                    <ul>
                        <!--<li class="current-cat"><a href="#">All</a></li>-->
                        <li class="is-active"><a href="#">All</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">UI</a></li>
                        <li><a href="#">SEO</a></li>  
                    </ul>
                </div>
                <!-- /.uix-nav -->
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
                <h3>Alignment</h3>
                <p>Add <code>.uix-t-c</code> or <code>.uix-t-r</code> to the <code>.uix-nav</code> to change them to center or right aligned.</p>
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
                <div class="uix-nav uix-t-c">
                    <ul>
                        <li class="is-active"><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>
                <!-- /.uix-nav -->    
                <div class="uix-nav uix-t-r">
                    <ul>
                        <li class="is-active"><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>
                <!-- /.uix-nav -->    
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
                <h3>Responsive Dropdown</h3>
                <p>Please reduce the screen to see the effect.</p>
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
                <div class="uix-nav uix-nav--dropdown-mobile">
                    <label for="uix-nav--dropdown-mobile__tog" class="uix-nav--dropdown-mobile__togglelabel">more <i class="fa fa-chevron-down" aria-hidden="true"></i></label>
                    <input id="uix-nav--dropdown-mobile__tog" type="checkbox" checked>
                    <ul>
                        <!--<li class="current-cat"><a href="#">All</a></li>-->
                        <li class="is-active"><a href="#">All</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">UI</a></li>
                        <li><a href="#">SEO</a></li>  
                        <li><a href="#">Painting</a></li>  
                        <li><a href="#">Interaction</a></li>
                        <li><a href="#">Blog Post</a></li>
                        <li><a href="#">Gift</a></li>
                    </ul>
                </div>
                <!-- /.uix-nav -->        
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>   
        </main>
@endsection

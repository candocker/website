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
                <h3>Icons Ordered List</h3>
                <p>Use any icon as a bullet point to create lists. Just inset the icon's class name in the <code>data-list-bullet</code> attribute. A full list of available icons can be found <a href="https://fontawesome.com/" rel="nofollow" target="_blank">here</a>.</p>
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
                <ul class="uix-list-bullet" data-list-bullet="fa fa-check-square-o">
                    <li>Here's bullet point number one</li>
                    <li>Now for the second point</li>
                    <li>You guessed it, here comes the third</li>
                    <li>A fourth bullet point just to be safe</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6">
                <ul class="uix-list-bullet" data-list-bullet="fa fa-angle-right">
                    <li>Here's bullet point number one</li>
                    <li>Now for the second point</li>
                    <li>You guessed it, here comes the third</li>
                    <li>A fourth bullet point just to be safe</li>
                </ul>
            </div>
        </div>
        <!-- .row end -->    
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <ul class="uix-list-bullet" data-list-bullet="fa fa-long-arrow-right">
                    <li>Here's bullet point number one</li>
                    <li>Now for the second point</li>
                    <li>You guessed it, here comes the third</li>
                    <li>A fourth bullet point just to be safe</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6">
                <ul class="uix-list-bullet" data-list-bullet="fa fa-angle-double-right">
                    <li>Here's bullet point number one</li>
                    <li>Now for the second point</li>
                    <li>You guessed it, here comes the third</li>
                    <li>A fourth bullet point just to be safe</li>
                </ul>
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
                <h3>Custom Bullets Ordered List</h3>
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
                <ul class="uix-list uix-list--circle">
                    <li>Line Item #1</li>
                    <li>Line Item #2</li>
                    <li>Line Item #3</li>
                    <li>Line Item #4</li>
                    <li>Line Item #5</li>
                </ul>        
            </div>
            <div class="col-lg-6 col-md-6">
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
                <h3>Numbers Ordered List</h3>
                <p>If you need to hide the number 0, just add <code>.uix-list--numbered-1-digit</code> to <code>.uix-list--numbered-large</code> or <code>.uix-list--numbered</code>.</p>
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
                <ol class="uix-list uix-list--numbered">
                    <li>Line Item #1</li>
                    <li>Line Item #2</li>
                    <li>Line Item #3</li>
                    <li>Line Item #4</li>
                    <li>Line Item #5</li>
                </ol>        
            </div>
            <div class="col-lg-6 col-md-6">
                <ol class="uix-list uix-list--numbered uix-list--numbered-1-digit">
                    <li>Line Item #1</li>
                    <li>Line Item #2</li>
                    <li>Line Item #3</li>
                    <li>Line Item #4</li>
                    <li>Line Item #5</li>
                </ol>                
            </div>
        </div>
        <!-- .row end -->               
        <div class="row">
            <div class="col-12">
                <div class="uix-list uix-list--numbered-large uix-list--numbered-1-digit">
                    <ol>
                        <li>
                            <h4>This is the First Heading</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </li>
                        <li>
                            <h4>This is the Second heading</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque tortor non erat sodales, in tristique dui convallis.</p>
                        </li>
                        <li>
                            <h4>This is the Third Heading</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque tortor non erat sodales, in tristique dui convallis. Mauris sed mi nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- .row end -->                         
        <div class="row">
            <div class="col-12">
                <div class="uix-list uix-list--numbered-large uix-list--numbered-bg">
                    <ol>
                        <li><p>Consectetur adipiscing elit.</p></li>
                        <li><p>This is the Second heading</p></li>
                        <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></li>
                    </ol>
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
                <h3>Step Timeline By Numbers</h3>
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
                    <ul class="uix-list uix-list--numbered-step">
                        <li><strong>Step 1</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </li>
                        <li><strong>Step 2</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque tortor non erat sodales, in tristique dui convallis. Mauris sed mi nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </li>
                        <li><strong>Step 3</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </li>
                        <li><strong>Step 4</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </li>
                        <li><strong>Step 5</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </li>
                    </ul>
            </div>
        </div>
        <!-- .row end -->            
    </div>
    <!-- .container end -->
</section>   
        </main>
@endsection

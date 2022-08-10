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
                <h3>Basic Tooltip</h3>
                <p>Please move your mouse pointer over an element.</p>
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
                <div class="uix-tooltip">
                    <span data-microtip-position="top" data-microtip-size="auto" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Top (auto width)</span>
                    <div class="uix-t-l">Hi, there. I am here.</div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="uix-tooltip">
                    <span data-microtip-position="top" data-microtip-size="auto" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Top (auto width)</span>
                    <div class="uix-t-l">Hi.</div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="uix-tooltip">
                    <span data-microtip-position="top" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Top</span>
                    <div class="uix-t-l">An underlying front-end system that makes it easy to extend and modify core files.</div>
                </div>
                <hr>
                <div class="uix-tooltip">
                    <span data-microtip-position="top-right" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Top Right</span>
                    <div class="uix-t-l">An underlying front-end system that makes it easy to extend and modify core files.</div>
                </div>    
                <hr>
                <div class="uix-tooltip">
                    <span data-microtip-position="top-left" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Top Left</span>
                    <div class="uix-t-l">An underlying front-end system that makes it easy to extend and modify core files.</div>
                </div>    
                <hr>
                <div class="uix-tooltip">
                    <span data-microtip-position="bottom" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Bottom</span>
                    <div class="uix-t-l">An underlying front-end system that makes it easy to extend and modify core files.</div>
                </div>    
                <hr>
                <div class="uix-tooltip">
                    <span data-microtip-position="bottom-right" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Bottom Right</span>
                    <div class="uix-t-l">An underlying front-end system that makes it easy to extend and modify core files.</div>
                </div>    
                <hr>
                <div class="uix-tooltip">
                    <span data-microtip-position="bottom-left" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Bottom Left</span>
                    <div class="uix-t-l">An underlying front-end system that makes it easy to extend and modify core files.</div>
                </div>    
                <hr>
                <div class="uix-tooltip">
                    <span data-microtip-position="left" data-microtip-size="small" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Left (Size: small)</span>
                    <div class="uix-t-c">Centered text</div>
                </div>    
                <hr>
                <div class="uix-tooltip">
                    <span data-microtip-position="right" data-microtip-size="small" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Right (Size: small)</span>
                    <div class="uix-t-c">Centered text</div>
                </div>        
                <hr>
                <div class="uix-tooltip">
                    <span data-microtip-position="left" data-microtip-size="medium" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Left (Size: medium)</span>
                    <div class="uix-t-c">Centered text</div>
                </div>    
                <hr>
                <div class="uix-tooltip">
                    <span data-microtip-position="right" data-microtip-size="medium" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Right (Size: medium)</span>
                    <div class="uix-t-c">Centered text</div>
                </div>    
                <hr>
                <div class="uix-tooltip">
                    <span data-microtip-position="left" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Left (Size: large)</span>
                    <div class="uix-t-c">Centered text</div>
                </div>    
                <hr>
                <div class="uix-tooltip">
                    <span data-microtip-position="right" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Right (Size: large)</span>
                    <div class="uix-t-c">Centered text</div>
                </div>        
                <hr>
                <div class="uix-tooltip">
                    <span data-microtip-position="right" data-microtip-size="large" role="tooltip"><i class="fa fa-question-circle" aria-hidden="true"></i> Image (Size: large)</span>
                    <div class="uix-t-c"><img src="{{$commonAssetUrl}}/website/assets/images/demo/qr-code.png" alt="" /><br>Centered image</div>
                </div>        
                <hr>    
            </div>
        </div>
        <!-- .row end -->    
    </div>
    <!-- .container end -->
</section>   
        </main>
@endsection

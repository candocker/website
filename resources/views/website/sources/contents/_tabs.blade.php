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
                <h3>Tab Normal</h3>
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
                    <div class="uix-tabs uix-tabs--normal">
                        <div class="uix-tabs__nav">
                            <ul role="tablist">
                                <li role="presentation" class="is-active"><a href="javascript:void(0);">Tab 1</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 2</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 3</a></li>
                            </ul>
                        </div><!-- /.uix-tabs__nav -->
                        <div role="tabpanel" class="uix-tabs__content is-active">
                            <p>Hi, this is the first tab.</p>
                        </div>
                        <div role="tabpanel" class="uix-tabs__content">
                            <p>This is the 2nd tab.</p>
                            <p>This is the 2nd tab.</p>
                            <p>This is the 2nd tab.</p>
                        </div>
                        <div role="tabpanel" class="uix-tabs__content">
                            <p>And this is the 3rd tab.</p>
                        </div>    
                    </div>
                    <!-- .uix-tabs end -->     
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
                    <div class="uix-tabs uix-tabs--center">
                        <div class="uix-tabs__nav">
                            <ul role="tablist">
                                <li role="presentation" class="is-active"><a href="javascript:void(0);">Tab 1</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 2</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 3</a></li>
                            </ul>
                        </div><!-- /.uix-tabs__nav -->
                        <div role="tabpanel" class="uix-tabs__content is-active">
                            <p>Hi, this is the first tab.</p>
                        </div>
                        <div role="tabpanel" class="uix-tabs__content">
                            <p>This is the 2nd tab.</p>
                            <p>This is the 2nd tab.</p>
                            <p>This is the 2nd tab.</p>
                        </div>
                        <div role="tabpanel" class="uix-tabs__content">
                            <p>And this is the 3rd tab.</p>
                        </div>    
                    </div>
                    <!-- .uix-tabs end -->     
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<section class="uix-spacing--s">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="uix-tabs" data-fullwidth="1">
                        <div class="uix-tabs__nav">
                            <ul role="tablist">
                                <li role="presentation" class="is-active"><a href="javascript:void(0);">Tab 1</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 2</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 3</a></li>
                            </ul>
                        </div><!-- /.uix-tabs__nav -->
                        <div role="tabpanel" class="uix-tabs__content is-active">
                            <p>Hi, this is the first tab.</p>
                        </div>
                        <div role="tabpanel" class="uix-tabs__content">
                            <p>This is the 2nd tab.</p>
                            <p>This is the 2nd tab.</p>
                            <p>This is the 2nd tab.</p>
                        </div>
                        <div role="tabpanel" class="uix-tabs__content">
                            <p>And this is the 3rd tab.</p>
                        </div>    
                    </div>
                    <!-- .uix-tabs end -->  
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
                <h3>Tab Rotation Effect 1</h3>
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
                    <div class="uix-tabs uix-tabs--rotation" data-rotation="true" data-rotation-display="5" data-rotation-radius="130" data-rotation-wrapper-angle="0">
                        <div class="uix-tabs__nav">
                            <ul role="tablist">
                                <li role="presentation" class="is-active"><a href="javascript:void(0);">Tab 1</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 2</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 3</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 4</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 5</a></li>
                            </ul>
                        </div><!-- /.uix-tabs__nav -->
                        <br><br><br><br>
                        <div role="tabpanel" class="uix-tabs__content uix-outer-shadow--regular is-active">
                            <p>Hi, this is the first tab.</p>
                        </div>
                        <div role="tabpanel" class="uix-tabs__content uix-outer-shadow--regular">
                            <p>This is the 2nd tab.</p>
                            <p>This is the 2nd tab.</p>
                            <p>This is the 2nd tab.</p>
                        </div>
                        <div role="tabpanel" class="uix-tabs__content uix-outer-shadow--regular">
                            <p>And this is the 3rd tab.</p>
                        </div>    
                        <div role="tabpanel" class="uix-tabs__content uix-outer-shadow--regular">
                            <p>And this is the 4th tab.</p>
                        </div>  
                        <div role="tabpanel" class="uix-tabs__content uix-outer-shadow--regular">
                            <p>And this is the 5th tab.</p>
                        </div>  
                    </div>
                    <!-- .uix-tabs end -->  
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
                <h3>Tab Rotation Effect 2</h3>
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
                    <div class="uix-tabs uix-tabs--rotation" data-rotation="true" data-rotation-display="4" data-rotation-radius="130" data-rotation-wrapper-angle="-45">
                        <div class="uix-tabs__nav">
                            <ul role="tablist">
                                <li role="presentation" class="is-active"><a href="javascript:void(0);">Tab 1</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 2</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 3</a></li>
                                <li role="presentation"><a href="javascript:void(0);">Tab 4</a></li>
                            </ul>
                        </div><!-- /.uix-tabs__nav -->
                        <br><br><br><br>
                        <div role="tabpanel" class="uix-tabs__content uix-outer-shadow--regular is-active">
                            <p>Hi, this is the first tab.</p>
                        </div>
                        <div role="tabpanel" class="uix-tabs__content uix-outer-shadow--regular">
                            <p>This is the 2nd tab.</p>
                            <p>This is the 2nd tab.</p>
                            <p>This is the 2nd tab.</p>
                        </div>
                        <div role="tabpanel" class="uix-tabs__content uix-outer-shadow--regular">
                            <p>And this is the 3rd tab.</p>
                        </div>    
                        <div role="tabpanel" class="uix-tabs__content uix-outer-shadow--regular">
                            <p>And this is the 4th tab.</p>
                        </div>   
                    </div>
                    <!-- .uix-tabs end -->  
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

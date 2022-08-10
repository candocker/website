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
                            <h3>Form Progress</h3>
                            <p>Progress steps are great for user experience where the user needs to enter data across multiple steps.
                                <br>
                                <strong>Note: </strong>If you want to initialize the indicator to a location when the page is first run, you need to call the following function:</p>
<pre class="uix-precode uix-t-l"><label>JS</label><code>$( 'body' ).waitForImages().done(function() {
    $( document ).UixFormProgressToNext({ 
        'selector'         : $( '.uix-form-progress__target .uix-form-progress__target__step' ),
        'formTarget'       : $( '.uix-form-progress__target' ),
        'indicator'        : '.uix-form-progress .uix-form-progress__indicator',
        'index'            : 0
    });
});</code>
</pre>                    
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
                                    <div class="uix-form-progress">
                                        <div class="uix-form-progress__indicator"><span>Step 1</span></div>
                                        <div class="uix-form-progress__indicator"><span>Step 2</span></div>
                                        <div class="uix-form-progress__indicator"><span>Step 3</span></div>
                                        <div class="uix-form-progress__indicator"><span>Step 4</span></div>
                                        <div class="uix-form-progress__line"><span></span></div>
                                    </div>
                                    <!-- /.uix-form-progress -->
                                    <div class="uix-form-progress__target" data-anime-speed="0.2s">
                                        <form method="post" action="#">
                                            <!-- Step -->
                                            <div class="uix-form-progress__target__step">
                                                <div class="uix-form-progress__content">
                                                    <!-- ////////////  content begin  ////////////-->
                                                    <h4>Step 1</h4>
                                                    <div class="uix-controls is-fullwidth">
                                                      <input type="text" class="js-uix-float-label" name="label-1">
                                                      <label>Label 1</label>
                                                    </div>
                                                    <div class="uix-controls is-fullwidth">
                                                      <input type="text" class="js-uix-float-label" name="label-2">
                                                      <label>Label 2</label>
                                                    </div>
                                                    <div class="uix-controls">
                                                      <a href="javascript:void(0);" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary go-step">Next</a>
                                                    </div>  
                                                    <!-- ////////////  content end  ////////////-->
                                                </div>
                                                <!-- /.uix-form-progress__content -->
                                            </div>
                                            <!-- Step -->
                                            <div class="uix-form-progress__target__step">
                                                <div class="uix-form-progress__content">
                                                    <!-- ////////////  content begin  ////////////-->
                                                    <h4>Step 2</h4>
                                                    <div class="uix-controls is-fullwidth">
                                                      <input type="text" class="js-uix-float-label" name="label-1">
                                                      <label>Label 1</label>
                                                    </div>
                                                    <div class="uix-controls">
                                                      <a href="javascript:void(0);" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary go-step">Next</a>
                                                    </div>     
                                                    <!-- ////////////  content end  ////////////-->
                                                </div>
                                                <!-- /.uix-form-progress__content -->
                                            </div>
                                            <!-- Step -->
                                            <div class="uix-form-progress__target__step">
                                                <div class="uix-form-progress__content">
                                                    <!-- ////////////  content begin  ////////////-->
                                                    <h4>Step 3</h4>
                                                    <div class="uix-controls is-fullwidth">
                                                      <input type="text" class="js-uix-float-label" name="label-1">
                                                      <label>Label 1</label>
                                                    </div>
                                                    <div class="uix-controls is-fullwidth">
                                                      <input type="text" class="js-uix-float-label" name="label-2">
                                                      <label>Label 2</label>
                                                    </div>
                                                    <p>This is demo.</p>
                                                    <p>This is demo.</p>
                                                    <div class="uix-controls">
                                                      <a href="javascript:void(0);" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary go-step">Next</a>
                                                    </div>  
                                                    <!-- ////////////  content end  ////////////-->
                                                </div>
                                                <!-- /.uix-form-progress__content -->
                                            </div>
                                            <!-- Step -->
                                            <div class="uix-form-progress__target__step">
                                                <div class="uix-form-progress__content">
                                                    <!-- ////////////  content begin  ////////////-->
                                                    <h4>Step 4</h4>
                                                    <div class="uix-controls is-fullwidth">
                                                      <input type="text" class="js-uix-float-label" name="label-1">
                                                      <label>Label 1</label>
                                                    </div>
                                                    <div class="uix-controls is-fullwidth">
                                                      <input type="text" class="js-uix-float-label" name="label-2">
                                                      <label>Label 2</label>
                                                    </div>
                                                    <div class="uix-controls">
                                                      <button type="submit" class="uix-btn uix-btn__border--thin uix-btn__margin--r uix-btn__size--s uix-btn__bg--primary">Submit</button>
                                                      <a href="javascript:void(0);" class="go-reset">Reset</a>
                                                    </div>  
                                                    <!-- ////////////  content end  ////////////-->
                                                </div>
                                                <!-- /.uix-form-progress__content -->
                                            </div>
                                        </form>    
                                    </div>
                                    <!-- /.uix-form-progress__target -->
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
        </main>
@endsection

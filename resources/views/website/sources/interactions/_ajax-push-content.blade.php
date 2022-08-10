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
                            <h3>Ajax Push Content</h3>
                            <p>Click the hyperlink to push the specified content to element.</p>
                            <hr>
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
           <!-- Content 
            ====================================================== -->
            <section class="uix-spacing--s uix-spacing--no-bottom">
                <div class="container uix-t-c">
                        <div class="row">
                            <div class="col-12">
                                <a href="button.html" data-ajax-push-content='{
                                                                              "container":"#my-ajax-demo-push-container",
                                                                              "target":"#my-ajax-demo-target-button",
                                                                              "loading":"<div class=\"my-loader\"><span><i class=\"fa fa-spinner fa-spin\"></i> loading <em id=\"app-loading\" data-txt=\"{progress}%\"></em>...</span></div>",
                                                                              "method":"POST"
                                                                              }'><i class="fa fa-cog" aria-hidden="true"></i> Add <strong>"button.html"</strong> Elements To Div 1</a>
                                <div id="my-ajax-demo-push-container" style="padding: 15px; margin: 15px; background: rgba(237,235,235,1.00);"></div>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
           <!-- Content 
            ====================================================== -->
            <section class="uix-spacing--s uix-spacing--no-bottom">
                <div class="container uix-t-c">
                        <div class="row">
                            <div class="col-12">
                                <a href="pricing.html" data-ajax-push-content='{
                                                                              "container":"#my-ajax-demo-push-container2",
                                                                              "target":"#my-ajax-demo-target-pricing",
                                                                              "loading":"<div class=\"my-loader\"><span><i class=\"fa fa-spinner fa-spin\"></i> loading <em id=\"app-loading\" data-txt=\"{progress}%\"></em>...</span></div>",
                                                                              "method":"POST"
                                                                              }'><i class="fa fa-cog" aria-hidden="true"></i> Add <strong>"pricing.html"</strong> Elements To Div 2</a>
                                <div id="my-ajax-demo-push-container2" style="padding: 15px; margin: 15px; background: rgba(237,235,235,1.00);"></div>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>        
        </main>
@endsection

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
                <h3>Pricing</h3>
                <p>Pricing tables play an important role for every company that offers products or services. This is a basic style for you.</p>
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
                <div class="col-12 uix-trans"  id="my-ajax-demo-target-pricing">
                    <div class="uix-price">
                        <div class="row">
                                <div class="col-lg-4 col-md-4 uix-price__outline--hover" data-bcolor="#DD514C" data-tcolor="#CE3A3E">
                                    <div class="js-uix-init-height">
                                        <div class="uix-price__outline">
                                            <div class="uix-price__level">free</div>
                                            <div class="uix-price__num"><span class="uix-price__currency">$</span><span class="uix-price__num--im">49</span><span class="uix-price__period">per month</span></div>
                                            <div class="uix-price__excerpt">
                                                <p>Some description text here.</p>
                                            </div> 
                                            <div class="uix-t-c">
                                                <a href="#" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-pill">TRY FOR FREE</a>  
                                            </div>
                                            <div class="uix-price__hr"></div>
                                            <div class="uix-price__detail">
                                                <ul>
                                                    <li>Feature Description</li>
                                                    <li>Another Feature Description</li>
                                                    <li>Invalid Feature Description</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 uix-price__outline--hover" data-bcolor="#DD514C" data-tcolor="#CE3A3E">
                                    <div class="js-uix-init-height">
                                        <div class="uix-price__outline is-active">
                                            <div class="uix-price__level">premium</div>
                                            <div class="uix-price__num"><span class="uix-price__currency">$</span><span class="uix-price__num--im">69</span><span class="uix-price__period">per month</span></div>
                                            <div class="uix-price__excerpt">
                                                <p>Some description text here.</p>
                                            </div> 
                                            <div class="uix-t-c">
                                                <a href="#" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-pill">BUY</a>   
                                            </div>
                                            <div class="uix-price__hr"></div>
                                            <div class="uix-price__detail">
                                                <ul>
                                                    <li>Feature Description</li>
                                                    <li>Another Feature Description</li>
                                                    <li>Another Feature Description</li>
                                                    <li>Invalid Feature Description</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 uix-price__outline--hover" data-bcolor="#DD514C" data-tcolor="#CE3A3E">
                                    <div class="js-uix-init-height">
                                        <div class="uix-price__outline">
                                            <div class="uix-price__level">professional</div>
                                            <div class="uix-price__num"><span class="uix-price__currency">$</span><span class="uix-price__num--im">109</span><span class="uix-price__period">per month</span></div>
                                            <div class="uix-price__excerpt">
                                                <p>Some description text here.</p>
                                            </div>
                                            <div class="uix-t-c">
                                                <a href="#" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-pill">BUY</a>
                                            </div>   
                                            <div class="uix-price__hr"></div>
                                            <div class="uix-price__detail">
                                                <ul>
                                                    <li>Feature Description</li>
                                                    <li>Another Feature Description</li>
                                                    <li>Another Feature Description</li>
                                                    <li>Invalid Feature Description</li>
                                                    <li>Another Feature Description</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                         <!-- .row end -->  
                    </div>
                    <!-- /.uix-price -->   
                </div>
                <!-- .col-12 end -->
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

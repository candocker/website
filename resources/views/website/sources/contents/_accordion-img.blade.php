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
                            <h3>Accordion Background Images</h3>
                            <p>Show hidden divs on mouse event.</p>
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
                                <div class="uix-accordion-img uix-typo--color-white" data-actived-item="0" data-event="mouseover" data-out-reset="true"  data-offset="50%" data-direction="horizontal" data-close-btn="false">
                                    <ul>
                                        <li style="background-image: url(assets/images/demo/test-img-big-1.jpg);">
                                            <div class="uix-accordion-img__content">
                                                <a href="javascript:">
                                                    <h3>Lorem Ipsum</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </a>
                                            </div>
                                        </li>
                                        <li style="background-image: url(assets/images/demo/test-img-big-2.jpg);">
                                            <div class="uix-accordion-img__content">
                                                <a href="javascript:">
                                                    <h3>Lorem Ipsum</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </a>
                                            </div>
                                        </li>
                                        <li style="background-image: url(assets/images/demo/test-img-big-4.jpg);">
                                            <div class="uix-accordion-img__content">
                                                <a href="javascript:">
                                                    <h3>Lorem Ipsum</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </a>
                                            </div>
                                        </li>
                                    </ul> 
                                </div>
                                <!-- .uix-accordion-img end -->     
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
                            <h3>Accordion Background Images 2</h3>
                            <p>Click the item to show it. Hidden divs when you click the close button.</p>
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
                                <div class="uix-accordion-img uix-typo--color-white" data-actived-item="false" data-event="click" data-out-reset="false" data-offset="60%" data-close-btn=".uix-accordion-img__close">
                                    <ul>
                                        <li style="background-image: url(assets/images/demo/test-img-big-1.jpg);">
                                            <div class="uix-accordion-img__content">
                                                <h3>Lorem Ipsum</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                <a class="uix-accordion-img__close" href="javascript:">Close</a>
                                            </div>
                                        </li>
                                        <li style="background-image: url(assets/images/demo/test-img-big-2.jpg);">
                                            <div class="uix-accordion-img__content">
                                                <h3>Lorem Ipsum</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                <a class="uix-accordion-img__close" href="javascript:">Close</a>
                                            </div>
                                        </li>
                                        <li style="background-image: url(assets/images/demo/test-img-big-4.jpg);">
                                            <div class="uix-accordion-img__content">
                                                <h3>Lorem Ipsum</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                <a class="uix-accordion-img__close" href="javascript:">Close</a>
                                            </div>
                                        </li>
                                        <li style="background-image: url(assets/images/demo/test-img-big-5.jpg);">
                                            <div class="uix-accordion-img__content">
                                                <h3>Lorem Ipsum</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                <a class="uix-accordion-img__close" href="javascript:">Close</a>
                                            </div>
                                        </li>
                                    </ul> 
                                </div>
                                <!-- .uix-accordion-img end -->     
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>     
        </main>
@endsection

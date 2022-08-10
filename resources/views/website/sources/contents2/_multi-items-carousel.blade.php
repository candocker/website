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
                            <h3>Horizontal Carousel</h3>
                            <p>Infinite scrolling and Drag-Drop</p>
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
                                <div role="slider" class="uix-multi-carousel" 
                                    data-dir="horizontal" 
                                    data-loop="true" 
                                    data-show="7" 
                                    data-speed="250" 
                                    data-draggable="true" 
                                    data-draggable-cursor="move" 
                                    data-next="#uix-multi-carousel__controls-1 .uix-multi-carousel__controls--next" 
                                    data-prev="#uix-multi-carousel__controls-1 .uix-multi-carousel__controls--prev">
                                    <div class="uix-multi-carousel__items">
                                        <div class="uix-multi-carousel__item"><span>1</span></div>
                                        <div class="uix-multi-carousel__item"><span>2</span></div>
                                        <div class="uix-multi-carousel__item"><span>3</span></div>
                                        <div class="uix-multi-carousel__item"><span>4</span></div>
                                        <div class="uix-multi-carousel__item"><span>5</span></div>
                                        <div class="uix-multi-carousel__item"><span>6</span></div>
                                        <div class="uix-multi-carousel__item"><span>7</span></div>
                                        <div class="uix-multi-carousel__item"><span>8</span></div>
                                        <div class="uix-multi-carousel__item"><span>9</span></div>
                                        <div class="uix-multi-carousel__item"><span>10</span></div>
                                        <div class="uix-multi-carousel__item"><span>11</span></div>
                                        <div class="uix-multi-carousel__item"><span>12</span></div>
                                    </div>
                                </div>
                                <!-- /.uix-multi-carousel -->
                                <div class="uix-multi-carousel__controls" id="uix-multi-carousel__controls-1">
                                    <a href="javascript:void(0);" class="uix-multi-carousel__controls--prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                    <a href="javascript:void(0);" class="uix-multi-carousel__controls--next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                                <!-- /.uix-multi-carousel__controls -->
                            </div>
                            <!-- .col-12 end -->
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
            <!-- Content 
            ====================================================== -->
            <section class="uix-spacing--s uix-spacing--no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3>Vertical Carousel</h3>
                            <p>Infinite scrolling and Drag-Drop</p>
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
                                <div class="uix-multi-carousel is-vertical" 
                                    data-dir="vertical" 
                                    data-loop="true" 
                                    data-show="5" 
                                    data-speed="250" 
                                    data-draggable="true" 
                                    data-draggable-cursor="move" 
                                    data-next="#uix-multi-carousel__controls-1_2 .uix-multi-carousel__controls--next" 
                                    data-prev="#uix-multi-carousel__controls-1_2 .uix-multi-carousel__controls--prev">
                                    <div class="uix-multi-carousel__items">
                                        <div class="uix-multi-carousel__item"><span>1</span></div>
                                        <div class="uix-multi-carousel__item"><span>2</span></div>
                                        <div class="uix-multi-carousel__item"><span>3</span></div>
                                        <div class="uix-multi-carousel__item"><span>4</span></div>
                                        <div class="uix-multi-carousel__item"><span>5</span></div>
                                        <div class="uix-multi-carousel__item"><span>6</span></div>
                                        <div class="uix-multi-carousel__item"><span>7</span></div>
                                        <div class="uix-multi-carousel__item"><span>8</span></div>
                                        <div class="uix-multi-carousel__item"><span>9</span></div>
                                        <div class="uix-multi-carousel__item"><span>10</span></div>
                                        <div class="uix-multi-carousel__item"><span>11</span></div>
                                        <div class="uix-multi-carousel__item"><span>12</span></div>
                                    </div>
                                </div>
                                <!-- /.uix-multi-carousel -->
                                <div class="uix-multi-carousel__controls is-vertical" id="uix-multi-carousel__controls-1_2">
                                    <a href="javascript:void(0);" class="uix-multi-carousel__controls--prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                    <a href="javascript:void(0);" class="uix-multi-carousel__controls--next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                                <!-- /.uix-multi-carousel__controls -->
                            </div>
                            <!-- .col-12 end -->
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
            <!-- Content 
            ====================================================== -->
            <section class="uix-spacing--s uix-spacing--no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3>Horizontal Carousel</h3>
                            <p>Not an infinite loop</p>
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
                                <div role="slider" class="uix-multi-carousel" 
                                    data-dir="horizontal" 
                                    data-loop="false" 
                                    data-show="7" 
                                    data-speed="250" 
                                    data-draggable="true" 
                                    data-draggable-cursor="move" 
                                    data-next="#uix-multi-carousel__controls-2 .uix-multi-carousel__controls--next" 
                                    data-prev="#uix-multi-carousel__controls-2 .uix-multi-carousel__controls--prev">
                                    <div class="uix-multi-carousel__items">
                                        <div class="uix-multi-carousel__item"><span>1</span></div>
                                        <div class="uix-multi-carousel__item"><span>2</span></div>
                                        <div class="uix-multi-carousel__item"><span>3</span></div>
                                        <div class="uix-multi-carousel__item"><span>4</span></div>
                                        <div class="uix-multi-carousel__item"><span>5</span></div>
                                        <div class="uix-multi-carousel__item"><span>6</span></div>
                                        <div class="uix-multi-carousel__item"><span>7</span></div>
                                        <div class="uix-multi-carousel__item"><span>8</span></div>
                                        <div class="uix-multi-carousel__item"><span>9</span></div>
                                        <div class="uix-multi-carousel__item"><span>10</span></div>
                                        <div class="uix-multi-carousel__item"><span>11</span></div>
                                        <div class="uix-multi-carousel__item"><span>12</span></div>
                                    </div>
                                </div>
                                <!-- /.uix-multi-carousel -->
                                <div class="uix-multi-carousel__controls" id="uix-multi-carousel__controls-2">
                                    <a href="javascript:void(0);" class="uix-multi-carousel__controls--prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                    <a href="javascript:void(0);" class="uix-multi-carousel__controls--next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                                <!-- /.uix-multi-carousel__controls -->
                            </div>
                            <!-- .col-12 end -->
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
            <!-- Content 
            ====================================================== -->
            <section class="uix-spacing--s uix-spacing--no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3>Vertical Carousel</h3>
                            <p>Not an infinite loop + Disable Drag-Drop</p>
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
                                <div class="uix-multi-carousel is-vertical" 
                                    data-dir="vertical" 
                                    data-loop="false" 
                                    data-show="5" 
                                    data-speed="250" 
                                    data-draggable="false" 
                                    data-draggable-cursor="move" 
                                    data-next="#uix-multi-carousel__controls-2_2 .uix-multi-carousel__controls--next" 
                                    data-prev="#uix-multi-carousel__controls-2_2 .uix-multi-carousel__controls--prev">
                                    <div class="uix-multi-carousel__items">
                                        <div class="uix-multi-carousel__item"><span>1</span></div>
                                        <div class="uix-multi-carousel__item"><span>2</span></div>
                                        <div class="uix-multi-carousel__item"><span>3</span></div>
                                        <div class="uix-multi-carousel__item"><span>4</span></div>
                                        <div class="uix-multi-carousel__item"><span>5</span></div>
                                        <div class="uix-multi-carousel__item"><span>6</span></div>
                                        <div class="uix-multi-carousel__item"><span>7</span></div>
                                        <div class="uix-multi-carousel__item"><span>8</span></div>
                                        <div class="uix-multi-carousel__item"><span>9</span></div>
                                        <div class="uix-multi-carousel__item"><span>10</span></div>
                                        <div class="uix-multi-carousel__item"><span>11</span></div>
                                        <div class="uix-multi-carousel__item"><span>12</span></div>
                                    </div>
                                </div>
                                <!-- /.uix-multi-carousel -->
                                <div class="uix-multi-carousel__controls is-vertical" id="uix-multi-carousel__controls-2_2">
                                    <a href="javascript:void(0);" class="uix-multi-carousel__controls--prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                    <a href="javascript:void(0);" class="uix-multi-carousel__controls--next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                                <!-- /.uix-multi-carousel__controls -->
                            </div>
                            <!-- .col-12 end -->
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
        </main>
@endsection

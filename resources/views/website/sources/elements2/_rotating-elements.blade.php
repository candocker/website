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
                            <h3>Rotating Elements</h3>
                            <p>Click the button to change the direction of rotation of the element.</p>
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
                                <figure id="pointer-container">
                                    <svg style="transition: all 0.3s ease;" width="100" height="100" id="pointer" viewBox="0 0 156 192">
                                        <polygon fill="#CE3A3E" points="55.8,47.3 78,8.9 100.2,47.3 "/>
                                        <circle fill="#000" cx="78" cy="114" r="72"/>
                                    </svg>
                                </figure>       
                                <p>
                                    <a class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-pill is-transparent" href="javascript:" data-pointer-to-deg='{"target":"#pointer","deg":90,"mouseSpy":false}'>Rotate 90&deg;</a>
    &nbsp;
                                    <a class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary is-pill is-transparent" href="javascript:" data-pointer-to-deg='{"target":"#pointer","deg":-45,"mouseSpy":false}'>Rotate -45&deg;</a>
                                </p>  
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>   
        </main>
@endsection

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
                            <h3>Vertical Text</h3>
                            <p>Display element text in a vertical fashion. </p>
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
                                <div style="height: 250px;  background: #f2f2f2; margin-bottom: 30px;">
                                    <div class="uix-typo--vertical uix-typo--style-uppercase">Vertical Text</div>  
                                </div>
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
                                <div style="height: 250px;  background: #f2f2f2; margin-bottom: 30px;">
                                    <div class="uix-typo--vertical uix-typo--vertical-characters-line uix-typo--style-uppercase">Vertical Text</div>  
                                </div>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
        </main>
@endsection

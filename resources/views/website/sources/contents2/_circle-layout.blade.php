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
                <h3>Pure CSS Circle Layout</h3>
                <p>Please modify the SCSS file <code>./src/components/circle-layout/scss/_style.scss</code> to change the size and display number.</p>
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
                <div class="col-12 uix-t-c">
                    <div class="uix-circle-layout">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                        </ul>
                        <div>
                            <div>
                                <p>
                                    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
                                </p>
                            </div>
                        </div>
                    </div>   
                    <!-- /.uix-circle-layout -->   
                     <br><br><br><br>
                    <div class="uix-circle-layout">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                        </ul>
                        <div>
                            <div>
                                <p>
                                    Content Here
                                </p>
                            </div>
                        </div>
                    </div>   
                    <!-- /.uix-circle-layout --> 
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
                <h3>JavaScript Circle Layout</h3>
                <p>Properties <code>data-circle-layout-display</code>, <code>data-circle-layout-radius</code>, <code>data-circle-layout-radius-c</code> and <code>data-circle-layout-rotation</code> are used to set the display number, size and rotation angle. Support dynamically adding elements.</p>
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
                <div class="col-12 uix-t-c">
                    <div class="uix-circle-layout js-uix-circle-layout" data-circle-layout-display="7" data-circle-layout-radius="180" data-circle-layout-radius-c="130" data-circle-layout-rotation="-45">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                        </ul>
                        <div>
                            <div>
                                <p>
                                    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
                                </p>
                            </div>
                        </div>
                    </div>   
                    <!-- /.uix-circle-layout -->   
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

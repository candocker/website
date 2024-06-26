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
                <h3>Centering Container</h3>
                <p>Automatically centers the container box by adjusting the left and right margin values equally on each side. </p>
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
            <div class="col-md-4 offset-md-4">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">Tiny Container</h4>
                    <span>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                </div>
            </div>     
        </div>
        <!-- .row end -->  
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">S Container</h4>
                    <span>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                </div>
            </div>     
        </div>
        <!-- .row end -->  
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">M Container</h4>
                    <span>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</span>
                </div>
            </div>     
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">L Container</h4>
                    <span>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</span>
                </div>
            </div>           
        </div>
        <!-- .row end -->     
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">L+ Container (width: 91.666667%)</h4>
                    <span>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</span>
                </div>
            </div>           
        </div>
        <!-- .row end -->     
        <div class="row">
            <div class="col-12">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">Max-width(Default), Max-width(XL), Max-width(XXL) Container</h4>
                    <span>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</span>
                </div>
            </div>          
        </div>
        <!-- .row end -->       
    </div>
    <!-- .container end -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">100% Width</h4>
                    <span>Using <code>.container-fluid</code> for width: 100% across all viewport and device sizes.</span>
                </div>
            </div>  
        </div>
    </div>
    <!-- .container-fluid end -->
</section>   
<!-- Content 
====================================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Column</h3>
                <p>
                It can be used for fluid layout for multiple projects and <strong>Bootstrap</strong> grid system. Its biggest feature is its support for <strong>loop</strong> lists.
                </p>
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
            <div class="col">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fifth</h4>
                    <span>Still keep 5 columns when small screen.</span>
                </div>
            </div>
            <div class="col">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fifth</h4>
                    <span>Still keep 5 columns when small screen.</span>
                </div>
            </div>
            <div class="col">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fifth</h4>
                    <span>Still keep 5 columns when small screen.</span>
                </div>
            </div>
            <div class="col">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fifth</h4>
                    <span>Still keep 5 columns when small screen.</span>
                </div>
            </div>
            <div class="col">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fifth</h4>
                    <span>Still keep 5 columns when small screen.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (1)</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (2)</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (3)</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (4)</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fifth</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">Four Fifth</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (1)</h4>
                    <span>Keep 2 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (2)</h4>
                    <span>Keep 2 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (3)</h4>
                    <span>Keep 2 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (4)</h4>
                    <span>Keep 2 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->    
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Third</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Third</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Third</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-6">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Half</h4>
                    <span><strong>Always</strong> keep 2 columns<br>Just use the class prefix <code>.col-</code></span>
                </div>
            </div>
            <div class="col-6">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Half</h4>
                    <span><strong>Always</strong> keep 2 columns<br>Just use the class prefix <code>.col-</code></span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Half</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Half</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Half</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Half</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Third</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
            <div class="col-lg-9">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">Two Third</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-9">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">Two Third</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Third</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
            <div class="col-lg-8">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">Three Fourth</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">Three Fourth</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->  
        <div class="row">
            <div class="col-12 col-lg-4 col-sm-12">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Third (1)</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 992px</code>.</span>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-sm-6">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Third (1)</h4>
                    <span>Keep 2 columns when small screen <code>&lt; 992px</code>.
                    <br>Keep 1 columns when small screen <code>&lt; 576px</code>.</span>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-sm-6">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Third (1)</h4>
                    <span>Keep 2 columns when small screen <code>&lt; 992px</code>.
                    <br>Keep 1 columns when small screen <code>&lt; 576px</code>.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- .container end -->
</section>   
<!-- Content 
====================================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Column (No line breaks)</h3>
                <p><em>Please simulate mobile viewing after zooming out your viewport.</em></p>
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
            <div class="col-lg-3 col-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (1)</h4>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </div>
            </div>
            <div class="col-lg-3 col-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (2)</h4>
                    <span>Aliquam congue dignissim tellus, vel eleifend urna rutrum nec.</span>
                </div>
            </div>
            <div class="col-lg-3 col-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (3)</h4>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </div>
            </div>
            <div class="col-lg-3 col-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (4)</h4>
                    <span>Morbi et mauris vitae quam venenatis imperdiet.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4 col-4">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Third</h4>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </div>
            </div>
            <div class="col-lg-4 col-4">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Third</h4>
                    <span>Aliquam congue dignissim tellus, vel eleifend urna rutrum nec.</span>
                </div>
            </div>
            <div class="col-lg-4 col-4">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Third</h4>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- .container end -->
</section>   
<!-- Content 
====================================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Column (No gutters)</h3>
                <p>The class <code>.no-gutters</code> used here will be applied <code>.row</code></p>
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
        <div class="row no-gutters">
            <div class="col-lg-2 col-md-2">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fifth</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">Four Fifth</h4>
                    <span>Keep 1 columns when small screen <code>&lt; 768px</code>.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
    <!-- .container end -->
</section>   
<!-- Content 
====================================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Center Column</h3>
                <p>The class <code>.align-items-center</code> or <code>.justify-content-center</code> used here will be applied <code>.row</code></p>
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
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (1)</h4>
                    <span>Aliquam congue dignissim tellus, vel eleifend urna rutrum nec. Morbi et mauris vitae quam venenatis imperdiet. Proin et rutrum magna. Nulla sed venenatis leo. Suspendisse potenti. Proin faucibus cursus luctus.</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (2)</h4>
                    <span>Aliquam congue dignissim tellus, vel eleifend urna rutrum nec. Morbi et mauris vitae quam venenatis imperdiet. Proin et rutrum magna. Nulla sed venenatis leo. Suspendisse potenti. Proin faucibus cursus luctus.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3 col-md-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (1)</h4>
                    <span>Aliquam congue dignissim tellus, vel eleifend urna rutrum nec. Morbi et mauris vitae quam venenatis imperdiet. Proin et rutrum magna. Nulla sed venenatis leo. Suspendisse potenti. Proin faucibus cursus luctus.</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Fourth (2)</h4>
                    <span><strong>Vertical Centering</strong></span>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4">
                <div style="background: #f8f9fa; box-shadow: inset 0px 0px 0px 1px #999;">
                    <h4 class="uix-spacing--no">One Third</h4>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a mi ac diam varius commodo sit amet a eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- .container end -->
</section>   
        </main>
@endsection

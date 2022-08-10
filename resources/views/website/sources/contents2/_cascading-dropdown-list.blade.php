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
                <h3>Cascading DropDown List</h3>
                <p>Create a dynamic dropdown form that loads its data from a JSON file. Support infinite recursion.</p>
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
                        <h4>Empty value</h4>
                        <!-- control begin -->
                        <div 
                            class="uix-cascading-dropdown-list" 
                            data-cascading-dd-json="{{$commonAssetUrl}}/website/assets/json/dropdown-list.json" 
                            data-cascading-dd-method="GET"
                            data-cascading-dd-loading-tmpl="<div>loading...</div>"
                        >
                            <input class="uix-cascading-dropdown-list__res" name="myname1" type="hidden" value=""/>
                            <a role="button" href="#" class="uix-cascading-dropdown-list__trigger" style="border: 1px solid #dadcdf;padding: 0.25rem 1rem;border-radius: 25px;font-size: .875rem;">Select</a>
                        </div>
                        <!-- control end -->
                </div>
                <!-- .col-12 end -->
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
                        <h4>The default value is specified</h4>
                        <!-- control begin -->
                        <div 
                            class="uix-cascading-dropdown-list" 
                            data-cascading-dd-json="{{$commonAssetUrl}}/website/assets/json/dropdown-list.json" 
                            data-cascading-dd-method="GET"
                            data-cascading-dd-loading-tmpl="<div>loading...</div>"
                        >
                            <input class="uix-cascading-dropdown-list__res" name="myname2" type="hidden" value="1_2"/>
                            <a role="button" href="#" class="uix-cascading-dropdown-list__trigger" style="border: 1px solid #dadcdf;padding: 0.25rem 1rem;border-radius: 25px;font-size: .875rem;">Select</a>
                        </div>
                        <!-- control end -->
                </div>
                <!-- .col-12 end -->
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
                        <h4>Show city list of China as per state select in dropdown select box</h4>
                        <!-- control begin -->
                        <div 
                            class="uix-cascading-dropdown-list" 
                            data-cascading-dd-json="{{$commonAssetUrl}}/website/assets/json/province-city-china-level.json" 
                            data-cascading-dd-method="GET"
                            data-cascading-dd-loading-tmpl="<div>loading...</div>"
                        >
                            <input class="uix-cascading-dropdown-list__res" name="myname3" type="hidden" value=""/>
                            <a role="button" href="#" class="uix-cascading-dropdown-list__trigger" style="border: 1px solid #dadcdf;padding: 0.25rem 1rem;border-radius: 25px;font-size: .875rem;">Select Province</a>
                        </div>
                        <!-- control end --> 
                        <br><br><br><br><br><br>
                </div>
                <!-- .col-12 end -->
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

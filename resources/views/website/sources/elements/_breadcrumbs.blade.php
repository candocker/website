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
                <h3>Breadcrumbs</h3>
                <p>A breadcrumb navigation provide links back to each previous page the user navigated through.</p>
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
            <div class="uix-breadcrumbs uix-t-c">
                <ul>
                    <li class="is-active"><a href="#">Web Design</a></li>
                    <li><a href="#">UI</a></li>
                    <li><a href="#">SEO</a></li>  
                    <li><a href="#">Interaction</a></li>  
                </ul>
            </div>
            <!-- .uix-breadcrumbs  end -->
            <br>
            <div class="uix-breadcrumbs is-fullwidth uix-t-c">
                <ul>
                    <li class="is-active"><a href="#">Web Design</a></li>
                    <li><a href="#">UI</a></li>
                    <li><a href="#">SEO</a></li>  
                    <li><a href="#">Interaction</a></li>  
                </ul>
            </div>
            <!-- .uix-breadcrumbs  end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<!-- Section Navigation
============================================= --> 
<ol class="uix-menu-sidefixed"> 
    <li><a href="ajax-content-page-1.html" data-ajax-page="true" data-index="0"><span>01</span><strong>Page 1</strong></a></li>
    <li><a href="ajax-content-page-2.html" data-ajax-page="true" data-index="1"><span>02</span><strong>Page 2</strong></a></li>
    <li><a href="ajax-content-page-3.html" data-ajax-page="true" data-index="2"><span>03</span><strong>Page 3</strong></a></li>
    <li><a href="ajax-content-page-4.html" data-ajax-page="true" data-index="3"><span>04</span><strong>Page 4</strong></a></li>
</ol>
<!-- Page Container
============================================= --> 
<div class="uix-ajax-load__fullpage-container">
    <div class="uix-ajax-load__loader"><span></span><em id="app-loading" data-txt="{progress}%"></em></div>
    <section class="uix-height--100 is-mobile-still" style="background: #b5bdc8; background: linear-gradient(to bottom, #b5bdc8 0%,#28343b 100%);">
        <!-- ajax container -->
        <div class="ajax-container" data-ajax-method="POST" data-ajax-page-id="false"></div> 
    </section> 
</div>
<!-- /.uix-ajax-load__fullpage-container -->
        </main>
@endsection

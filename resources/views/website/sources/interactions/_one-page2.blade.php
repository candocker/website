@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<!-- Section Navigation
============================================= --> 
<ol class="uix-menu-sidefixed" data-highlight-section-menu="true"> 
    <li><a href="#highlight-section-1"><span>01</span><strong>Section 1</strong></a></li>
    <li><a href="#highlight-section-2"><span>02</span><strong>Section 2</strong></a></li>
    <li><a href="#highlight-section-3"><span>03</span><strong>Section 3</strong></a></li>
    <li><a href="#highlight-section-4"><span>04</span><strong>Section 4</strong></a></li>
    <li><a href="#highlight-section-5"><span>05</span><strong>Section 5</strong></a></li>
</ol>
<!-- Page Container
============================================= --> 
<div class="uix-normal-load__onepage-container2">
    <section class="uix-spacing--s uix-height--100 is-mobile-still"  data-highlight-section="true" id="highlight-section-1" style="background: #cb60b3; background: linear-gradient(to bottom, #cb60b3 0%,#ad1283 100%);">
        <div class="uix-v-align--relative uix-t-c">
            <h3>Use wheel to scroll down</h3>
        </div>
    </section> 
    <section class="uix-spacing--s uix-height--100 is-mobile-still" data-highlight-section="true" id="highlight-section-2" style="background: #d2ff52; background: linear-gradient(to bottom, #d2ff52 0%,#91e842 100%);">
        <div class="uix-v-align--relative uix-t-c">
            <h3>Section 2</h3>
        </div>
    </section>
    <section class="uix-spacing--s uix-height--100 is-mobile-still" data-highlight-section="true" id="highlight-section-3" style="background: #ffb76b; background: linear-gradient(to bottom, #ffb76b 0%,#ff7f04 100%);">
        <div class="uix-v-align--relative uix-t-c">
            <h3>Section 3</h3>
        </div>
    </section>
    <section class="uix-spacing--s uix-height--100 is-mobile-still" data-highlight-section="true" id="highlight-section-4" style="background: #f0b7a1; background: linear-gradient(to bottom, #f0b7a1 0%,#8c3310 100%);">
        <div class="uix-v-align--relative uix-t-c">
            <h3>Section 4</h3>
        </div>
    </section> 
    <section class="uix-spacing--s uix-height--100 is-mobile-still" data-highlight-section="true" id="highlight-section-5" style="background: #b5bdc8; background: linear-gradient(to bottom, #b5bdc8 0%,#28343b 100%);">
        <div class="uix-v-align--relative uix-t-c">
            <h3>Use wheel to scroll up</h3>
        </div>
    </section>     
</div>
<!-- /.uix-normal-load__onepage-container2 -->
        </main>
@endsection

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
                <h3>Modal Dialog Automatically Open</h3>
                <p>Trigger with a simple JavaScript</p>
<pre class="uix-precode uix-t-l"><label>HTML</label><code>&lt;template id="modal-open-1"&gt;
    &lt;div class=&quot;uix-modal-box&quot; role=&quot;dialog&quot; tabindex=&quot;-1&quot; aria-hidden=&quot;true&quot;&gt;
    &#x9;&lt;button type=&quot;button&quot; class=&quot;uix-modal-box__close&quot; data-modal-close-trigger=&quot;true&quot;&gt;&lt;/button&gt;
    &#x9;&lt;div class=&quot;uix-modal-box__content&quot; role=&quot;document&quot;&gt;
&lt;div class=&quot;uix-modal-box__head&quot;&gt;
    &lt;!-- code here --&gt;
&lt;/div&gt;
&lt;div class=&quot;uix-modal-box__body&quot;&gt;
    &lt;div role=&quot;note&quot;&gt;
        &lt;!-- ////////  content  begin //////// --&gt;
        &lt;h2&gt;Holy Crap!!!&lt;/h2&gt;
        &lt;p&gt;p.s. Sorry for calling you a dingus earlier.&lt;/p&gt;&lt;p&gt;p.s. Sorry for calling you a dingus earlier.&lt;/p&gt;&lt;p&gt;p.s. Sorry for calling you a dingus earlier.&lt;/p&gt;
        &lt;!-- ////////  content  end //////// --&gt;
    &lt;/div&gt;
    &#x9;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/template&gt;</code>
</pre>    
<pre class="uix-precode uix-t-l"><label>JS</label><code>$( document ).ready( function() {
    $(document).UixFireModalDialog({
        id: 'modal-open-1',
        height: false,
        width: false,
        speed: 500,
        lightbox  : true,
        autoClose : false //If the value is 2000, it will automatically close after 2 seconds.
    });
} );</code>
</pre>                    
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- Modals
============================================= --> 
<template id="modal-open-1">
    <div class="uix-modal-box" role="dialog" tabindex="-1" aria-hidden="true">
        <button type="button" class="uix-modal-box__close" data-modal-close-trigger="true"></button>
        <div class="uix-modal-box__content" role="document">
            <div class="uix-modal-box__head">
                <!-- code here -->
            </div>
            <div class="uix-modal-box__body">
                <div role="note">
                    <!-- ////////  content  begin //////// -->
                    <h2>Holy Crap!!!</h2>
                    <p>p.s. Sorry for calling you a dingus earlier.</p><p>p.s. Sorry for calling you a dingus earlier.</p><p>p.s. Sorry for calling you a dingus earlier.</p><p>p.s. Sorry for calling you a dingus earlier.</p><p>p.s. Sorry for calling you a dingus earlier.</p><p>p.s. Sorry for calling you a dingus earlier.</p><p>p.s. Sorry for calling you a dingus earlier.</p><p>p.s. Sorry for calling you a dingus earlier.</p><p>p.s. Sorry for calling you a dingus earlier.</p>
                    <!-- ////////  content  end //////// -->
                </div>
            </div>
        </div>
    </div>  
</template>
        </main>  
@endsection

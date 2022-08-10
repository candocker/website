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
                            <h3>Parallax Background</h3>
                            <p>Use the <code>data-bg</code> attribute to set the background and parallax effect. E.g.</p>
<pre class="uix-precode"><label>HTML</label><code>&lt;div style=&quot;width:300px;height:300px;&quot; data-bg='{"src":"{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-3.jpg","position":"top left","size":"cover","repeat":"no-repeat","fill":false,"offsetTop":0,"parallax":0.2, "transition":"0s linear"}'&gt;&lt;/div&gt;</code>
</pre>          
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
           <!-- Content 
            ====================================================== -->
            <section class="uix-spacing--s uix-spacing--no-top">
                <div class="uix-relative" data-bg='{"src":"{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg","position":"top left","size":"cover","repeat":"no-repeat","fill":false,"offsetTop":0,"parallax":0.3}' style="height: 450px;">
                    <div class="uix-v-align--absolute uix-t-c">
                        <div class="row">
                            <div class="col-12">
                                <h2>height: 450px</h2>
                            </div>
                        </div>
                        <!-- .row end -->
                    </div>
                </div>    
            </section>   
            <!-- Content 
            ====================================================== -->
            <section class="uix-spacing--s uix-spacing--no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3>
                                Background Text
                            </h3>
                            <p>Use the following sample code to achieve the following effects:</p>
<pre class="uix-precode"><label>HTML</label><code>&lt;h1 class=&quot;uix-relative&quot; data-bg='{"src":"{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-1.jpg","position":"top left","size":"cover","repeat":"no-repeat","fill":true,"offsetTop":0,"parallax":-0.3}'&gt;
    Background-Clip Text 
&lt;/h1&gt;&#x9;</code>
</pre>    
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
           <!-- Content 
            ====================================================== -->
            <section class="uix-spacing--s uix-t-c">
                <h1 class="uix-relative" data-bg='{"src":"{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-1.jpg","position":"top left","size":"cover","repeat":"no-repeat","fill":true,"offsetTop":0,"parallax":-0.3}' style="height: 150px;">
                   Background-Clip Text 
                </h1>    
            </section>   
            <!-- Content 
            ====================================================== -->
            <section class="uix-spacing--s uix-spacing--no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3>
                                Movement Animation
                            </h3>
                            <p>Continuous position movement in different directions. E.g.</p>
<pre class="uix-precode"><label>HTML</label><code>&lt;div class=&quot;uix-relative&quot; data-bg='{"src":"{{$commonAssetUrl}}/website/assets/images/demo/templates.jpg","size":"auto","repeat":"repeat","move":{"dir":"right","speed":"350","easing":"linear","loop":true}}' style=&quot;height: 450px;&quot;&gt;
    &lt;div class=&quot;uix-overlay uix-overlay--black uix-overlay--cover&quot;&gt;
        &lt;div class=&quot;uix-v-align--table&quot;&gt;
            &lt;div&gt;
                &lt;h2 class=&quot;uix-typo--color-white uix-t-c&quot;&gt;Text Here&lt;/h2&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&#x9;</code>
</pre>    
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
           <!-- Content 
            ====================================================== -->
            <section class="uix-spacing--s">
                <div class="uix-relative" data-bg='{"src":"{{$commonAssetUrl}}/website/assets/images/demo/templates.jpg","size":"auto","repeat":"repeat","move":{"dir":"left","speed":"350","easing":"linear","loop":true}}' style="height: 450px;">
                    <div class="uix-overlay uix-overlay--black uix-overlay--cover">
                        <div class="uix-v-align--table">
                            <div>
                                <h2 class="uix-typo--color-white uix-t-c">height: 450px (Move infinitely to the left)</h2>
                            </div>
                        </div>
                    </div>
                </div>    
            </section>   
            <section class="uix-spacing--s">
                <div class="uix-relative" data-bg='{"src":"{{$commonAssetUrl}}/website/assets/images/demo/templates.jpg","size":"auto","repeat":"repeat","move":{"dir":"right","speed":"350","easing":"linear","loop":true}}' style="height: 450px;">
                    <div class="uix-overlay uix-overlay--black uix-overlay--cover">
                        <div class="uix-v-align--table">
                            <div>
                                <h2 class="uix-typo--color-white uix-t-c">height: 450px (Move infinitely to the right)</h2>
                            </div>
                        </div>
                    </div>
                </div>    
            </section>   
            <section class="uix-spacing--s">
                <div class="uix-relative" data-bg='{"src":"{{$commonAssetUrl}}/website/assets/images/demo/templates.jpg","size":"auto","repeat":"repeat","move":{"dir":"top","speed":"350","easing":"linear","loop":true}}' style="height: 450px;">
                    <div class="uix-v-align--absolute uix-t-c">
                        <div class="row">
                            <div class="col-12">
                                <h2 style="box-shadow: 0 5px 15px 0 rgba(0,0,0,.07), 0 15px 35px 0 rgba(50,50,93,.1); background: #fff; padding: 3rem; display: inline-block;">height: 450px (Move infinitely to the top)</h2>
                            </div>
                        </div>
                        <!-- .row end -->
                    </div>
                </div>    
            </section>   
            <section class="uix-spacing--s">
                <div class="uix-relative" data-bg='{"src":"{{$commonAssetUrl}}/website/assets/images/demo/templates.jpg","size":"auto","repeat":"repeat","move":{"dir":"bottom","speed":"350","easing":"linear","loop":true}}' style="height: 450px;">
                    <div class="uix-v-align--absolute uix-t-c">
                        <div class="row">
                            <div class="col-12">
                                <h2 style="box-shadow: 0 5px 15px 0 rgba(0,0,0,.07), 0 15px 35px 0 rgba(50,50,93,.1); background: #fff; padding: 3rem; display: inline-block;">height: 450px (Move infinitely to the bottom)</h2>
                            </div>
                        </div>
                        <!-- .row end -->
                    </div>
                </div>    
            </section>   
        </main>
@endsection

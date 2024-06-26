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
                <h3>Custom Image Shapes</h3>
                <p>Use <strong>Adobe Illustrator</strong> to make SVG file and copy its code. <strong>File &gt; Export &gt; Export for Screens</strong>.<br>
                        <strong>Note: </strong>SVG code must be a single path, the <code>data-svg-const-width</code> and <code>data-svg-const-height</code> attributes is the original size of the SVG graphics, <code>data-img-width</code> attribute is wanted the size of the displayed image which it cannot be smaller than the width of the SVG.
                    </p>
<pre class="uix-precode uix-t-l"><label>SVG</label><code>&lt;svg fill-rule=&quot;evenodd&quot; clip-rule=&quot;evenodd&quot; width=&quot;300px&quot; height=&quot;300px&quot;<br>
viewBox=&quot;0 0 300 300&quot;&gt;<br>
&lt;path fill=&quot;#191616&quot; d=&quot;<span style="color: red">M105.1,18.4l154.2,184.3C259.3,202.7,49.7,208.7,105.1,18.4z</span>&quot;/&gt;<br>
&lt;/svg&gt;</code>
</pre>    
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
                <div class="col-12 uix-trans">
                    <span class="uix-shape-img" 
                            data-svg-const-width="200" 
                            data-svg-const-height="200" 
                            data-img-width="400"
                            data-path="M100,0L0,200c0,0,0,0,0,0h200c0,0,0,0,0,0L100,0C100,0,100,0,100,0z">
                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/horizontal-img.jpg" alt="">
                    </span>
                    <span class="uix-shape-img" 
                            data-svg-const-width="200" 
                            data-svg-const-height="200" 
                            data-img-width="400"
                            data-path="M62.1,0h80.7c0,0,0,0,0,0L200,200c0,0,0,0,0,0H0c0,0,0,0,0,0L62.1,0C62.1,0,62.1,0,62.1,0z">
                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/horizontal-img.jpg" alt="">
                    </span>
                    <span class="uix-shape-img" 
                            data-svg-const-width="200" 
                            data-svg-const-height="200" 
                            data-img-width="400"
                            data-path="M107,10l82.9,82.9c3.9,3.9,3.9,10.2,0,14.1l-82.9,43c-3.9,3.9-10.2,3.9-14.1,0l-83-43c-3.9-3.9-3.9-10.2,0-14.1L92.9,10C96.8,6.1,103.1,6.1,107,10z">
                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/horizontal-img.jpg" alt="">
                    </span>    
                   <hr>
                    <span class="uix-shape-img" 
                            data-svg-const-width="300" 
                            data-svg-const-height="300" 
                            data-img-width="300"
                            data-path="M0,0l300,38.4c0,0,0,0,0,0v257.1c0,0,0,0,0,0L65.5,257.1c0,0,0,0,0,0V115.5c0,0,0,0,0,0L0,0C0,0,0,0,0,0z">
                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-1.jpg" alt="">
                    </span>
                    <br>
                    <span class="uix-shape-img" 
                            data-svg-const-width="300" 
                            data-svg-const-height="300" 
                            data-img-width="100"
                            data-path="M0,0l300,38.4c0,0,0,0,0,0v257.1c0,0,0,0,0,0L65.5,257.1c0,0,0,0,0,0V115.5c0,0,0,0,0,0L0,0C0,0,0,0,0,0z">
                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-1.jpg" alt="">
                    </span>
                    <br>     
                    <span class="uix-shape-img" 
                            data-svg-const-width="500" 
                            data-svg-const-height="200" 
                            data-img-width="600"
                            data-path="M0,0C0,0,0,0,0,0c0.2,1.1,35,220.5,76.6,187.2c41.7-33.3,22.6,29.8,84.5-9.5s66.7,46.4,100-1.2s39.3,58.3,85.7,0s53.6,57.1,91.7,0c38-57,61.3-175.8,61.5-176.5c0,0,0,0,0,0H0z">
                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-1.jpg" alt="">
                    </span>
                    <br>
                    <span class="uix-shape-img" 
                            data-svg-const-width="200" 
                            data-svg-const-height="50" 
                            data-img-width="1000"
                            data-path="M2.8,0h163.3c0,0,0,0,0,0c0.1,0,70.6,24,0,50c0,0,0,0,0,0C165.7,49.3,0.8,25.1,0,25c0,0,0,0,0,0L2.8,0C2.8,0,2.8,0,2.8,0z">
                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x600.jpg" alt="">
                    </span>
                    <br>          
                    <span class="uix-shape-img" 
                            data-svg-const-width="150" 
                            data-svg-const-height="225" 
                            data-img-width="600"
                            data-path="M144.4,0C144.4,0,144.4,0,144.4,0L0,0c0,0,0,0,0,0l16.2,211.5c0,0,0,0,0,0l16-91.4c0,0,0,0,0,0l4.1,91.4c0,0,0,0,0,0c0.4-1.8,19.3-96.8,19.3-92.1v89.8c0,0,0,0,0,0l18.1-85.7c0,0,0,0,0,0l5.3,87.9c0,0,0,0,0,0l15.2-87.3c0,0,0,0,0,0l7,87.3c0,0,0,0,0,0">
                         <img src="{{$commonAssetUrl}}/website/assets/images/demo/vertical-img.jpg" alt="">
                    </span>
                    <br>     
                </div>
                <!-- .col-12 end -->
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

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
                            <h3>Lightbox</h3>
                            <p>Lightbox is a script used to overlay images on the current page. It's a snap to setup and works on all modern browsers.</p>
                            <p>Use the following HTML code to display image(s).</p>
<pre class="uix-precode uix-t-l"><label>HTML</label><code>&lt;a class=&quot;uix-lightbox__trigger&quot; href=&quot;#&quot; data-lb-src=&quot;your.jpg&quot;&gt;Click Me To Show Image&lt;/a&gt;
&lt;a class=&quot;uix-lightbox__trigger&quot; href=&quot;#&quot; data-lb-src=&quot;[{'thumb':small-1.jpg', 'large':large-1.jpg'}, {'thumb':small-2.jpg', 'large':large-2.jpg'}, {'thumb':small-3.jpg', 'large':large-3.jpg'}]&quot;&gt;Click Me To Show Multiple Image&lt;/a&gt;
&lt;a class=&quot;uix-lightbox__trigger&quot; href=&quot;#&quot; data-lb-src=&quot;your.jpg&quot; data-lb-fixed=&quot;false&quot;&gt;Click Me To Show Image (Not Fixed)&lt;/a&gt;</code>
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
                <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <a class="uix-lightbox__trigger" href="#" data-lb-src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i> Click Me To Show Image</a>
                                <br>
                                <a class="uix-lightbox__trigger" href="#" data-lb-src="[{'thumb':'assets/images/demo/slide-1.jpg', 'large':'assets/images/demo/slide-1.jpg'}, {'thumb':'assets/images/demo/spiral-galaxy-1920x1080.jpg', 'large':'assets/images/demo/spiral-galaxy-1920x1080.jpg'}, {'thumb':'assets/images/demo/slide-3.jpg', 'large':'assets/images/demo/slide-3.jpg'}, {'thumb':'assets/images/demo/slide-1.jpg', 'large':'assets/images/demo/slide-1.jpg'}]"><i class="fa fa-search-plus" aria-hidden="true"></i> Click Me To Show Multiple Image</a>
                                <br>
                                <a class="uix-lightbox__trigger" href="#" data-lb-src="{{$commonAssetUrl}}/website/assets/images/placeholder/800x2000.jpg" data-lb-fixed="false"><i class="fa fa-search-plus" aria-hidden="true"></i> Click Me To Show Image (Not Fixed)</a>
                                <br>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
            <!-- Content 
            ====================================================== -->
            <section class="uix-spacing--s uix-spacing--no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3>Lightbox(Display HTML Code)</h3>
                            <p>Use the following HTML code to display html code.</p>
<pre class="uix-precode uix-t-l"><label>HTML</label><code>&lt;a class=&quot;uix-lightbox__trigger&quot; href=&quot;#&quot; data-lb-html=&quot;#my-lightbox-html-1&quot;&gt;Click Me To Show HTML Code&lt;/a&gt;
&lt;a class=&quot;uix-lightbox__trigger&quot; href=&quot;#&quot; data-lb-html=&quot;#my-lightbox-html-2&quot; data-lb-fixed=&quot;false&quot;&gt;Click Me To Show HTML Code (Not Fixed)&lt;/a&gt;</code>
</pre>        
<pre class="uix-precode uix-t-l"><label>HTML</label><code>&lt;template id="my-lightbox-html-1"&gt;
    &lt;div class="uix-lightbox__content-container" role="dialog" tabindex="-1" aria-hidden="true"&gt;
       &lt;div class="uix-lightbox__content" role="document"&gt;
            &lt;div role="note"&gt;
                &lt;!-- ///////   content begin /////// --&gt;
                ...
                &lt;!-- ///////   content end /////// --&gt;
            &lt;/div&gt;&lt;!-- /[role="note"] --&gt;
       &lt;/div&gt;&lt;!-- /.uix-lightbox__content --&gt;
    &lt;/div&gt;
    &lt;!-- /.uix-lightbox__content-container --&gt;
&lt;/template&gt;</code>
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
                <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <a class="uix-lightbox__trigger" href="#" data-lb-html="#my-lightbox-html-1"><i class="fa fa-search-plus" aria-hidden="true"></i> Click Me To Show HTML Code</a>
                                <template id="my-lightbox-html-1">
                                   <div class="uix-lightbox__content-container" role="dialog" tabindex="-1" aria-hidden="true">
                                       <div class="uix-lightbox__content" role="document">
                                           <div role="note">
                                                <!-- ///////   content begin /////// -->
                                                <p>
                                                    <h5>Title 1</h5>
                                                 </p>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. <a href="#">This is link</a></p>
                                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper. Super/Duper/Long/NonBreaking/Path/Name/To/A/File/That/Is/Way/Deep/Down/In/Some/Mysterious/Remote/Desolate/Part/Of/The/Operating/System/To/A/File/That/Just/So/Happens/To/Be/Strangely/Named/Supercalifragilisticexpialidocious.txt</p>
                                                <!-- ///////   content end /////// -->
                                            </div><!-- /[role="note"] -->
                                       </div><!-- /.uix-lightbox__content -->
                                   </div>
                                </template>
                               <br>
                               <!-- ************************ -->
                                <!-- ************************ -->
                                <!-- ************************ -->
                                <!-- ************************ -->
                                <a class="uix-lightbox__trigger" href="#" data-lb-html="#my-lightbox-html-2" data-lb-fixed="false"><i class="fa fa-search-plus" aria-hidden="true"></i> Click Me To Show HTML Code (Not Fixed)</a>
                                <template id="my-lightbox-html-2">
                                   <div class="uix-lightbox__content-container" role="dialog" tabindex="-1" aria-hidden="true">
                                       <div class="uix-lightbox__content" role="document">
                                           <div role="note">
                                                <!-- ///////   content begin /////// -->
                                                <p>
                                                    <h5>Title 2</h5>
                                                 </p>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. <a href="#">This is link</a></p>
                                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper. Super/Duper/Long/NonBreaking/Path/Name/To/A/File/That/Is/Way/Deep/Down/In/Some/Mysterious/Remote/Desolate/Part/Of/The/Operating/System/To/A/File/That/Just/So/Happens/To/Be/Strangely/Named/Supercalifragilisticexpialidocious.txt</p>
                                                <!-- ///////   content end /////// -->
                                            </div><!-- /[role="note"] -->
                                       </div><!-- /.uix-lightbox__content -->
                                   </div>
                                </template>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
            <!-- Content 
            ====================================================== -->
            <section class="uix-spacing--s uix-spacing--no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3>Lightbox(With AJAX)</h3>
                            <p>Use the following HTML code with AJAX.</p>
<pre class="uix-precode uix-t-l"><label>HTML</label><code>&lt;a class=&quot;uix-lightbox__trigger&quot; href=&quot;ajax-page.html&quot; data-lb-html=&quot;#my-lightbox-html-4&quot; data-lb-fixed=&quot;false&quot; data-lb-ajax='{&quot;target&quot;:&quot;#my-ajax-demo-target-button&quot;, &quot;method&quot;:&quot;POST&quot;}'&gt;Click Me To Add &lt;strong&gt;&quot;ajax-page.html&quot;&lt;/strong&gt; Elements&lt;/a&gt;</code>
</pre>        
<pre class="uix-precode uix-t-l"><label>HTML</label><code>&lt;template id="my-lightbox-html-4"&gt;
    &lt;div class="uix-lightbox__content-container" role="dialog" tabindex="-1" aria-hidden="true"&gt;
       &lt;div class="uix-lightbox__content" role="document"&gt;
           &lt;div role="note"&gt;&lt;/div&gt;&lt;!-- /[role="note"] --&gt;
       &lt;/div&gt;&lt;!-- /.uix-lightbox__content --&gt;
    &lt;/div&gt;
    &lt;!-- /.uix-lightbox__content-container --&gt;
&lt;/template&gt;</code>
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
                <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <a class="uix-lightbox__trigger" href="button.html" data-lb-html="#my-lightbox-html-4" data-lb-fixed="false" data-lb-ajax='{"target":"#my-ajax-demo-target-button", "method":"POST"}'><i class="fa fa-search-plus" aria-hidden="true"></i> Click Me To Add <strong>"button.html"</strong> Elements</a>
                                <template id="my-lightbox-html-4">
                                   <div class="uix-lightbox__content-container" role="dialog" tabindex="-1" aria-hidden="true">
                                       <div class="uix-lightbox__content" role="document">
                                           <div role="note"></div><!-- /[role="note"] -->
                                       </div><!-- /.uix-lightbox__content -->
                                   </div>
                                </template>
                            </div>
                        </div>
                        <!-- .row end -->
                </div>
                <!-- .container end -->
            </section>
        </main>
@endsection

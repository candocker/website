<section class="uix-spacing--s uix-spacing--no-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Modal Dialog</h3>
                <p>A modal dialog is a pop-window that forces the user to interact with it before they can go back to using the parent application.</p>
                <p>Use the following HTML code to fire it.</p>
<pre class="uix-precode uix-t-l"><label>HTML</label><code>&lt;a href=&quot;javascript:void(0)&quot; data-modal-id=&quot;modal-open-3&quot; data-modal-close-onlybtn=&quot;false&quot; data-modal-height=&quot;200px&quot; data-modal-width=&quot;300px&quot; data-modal-lightbox=&quot;true&quot; data-modal-close-time=&quot;false&quot;&gt;Normal&lt;/a&gt;</code>
</pre>        
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
        &#x9;&#x9;&#x9;&#x9;&#x9;&lt;h2&gt;Holy Crap!!!&lt;/h2&gt;
        &#x9;&#x9;&#x9;&#x9;&#x9;&lt;p&gt;p.s. Sorry for calling you a dingus earlier.&lt;/p&gt;&lt;p&gt;p.s. Sorry for calling you a dingus earlier.&lt;/p&gt;&lt;p&gt;p.s. Sorry for calling you a dingus earlier.&lt;/p&gt;
        &lt;!-- ////////  content  end //////// --&gt;
    &lt;/div&gt;      
    &#x9;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/template&gt;</code>
</pre>    
                <hr>
            </div>
        </div>
    </div>
</section>
<section class="uix-spacing--s">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <a class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary" href="javascript:void(0)" data-modal-id="modal-open-1" data-modal-close-onlybtn="false">Click Here to Open Modal</a>
                    <br>
                    <a class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary" href="javascript:void(0)" data-modal-id="modal-open-2" data-modal-close-onlybtn="false">Click Here to Open Modal (Fullscreen)</a>
                    <br>
                    <a class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary" href="javascript:void(0)" data-modal-id="modal-open-3" data-modal-close-onlybtn="false" data-modal-height="200px" data-modal-width="300px">Click Here to Open Modal (Custom)</a>
                    <br>
                </div>
            </div>
    </div>
</section>
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
<template id="modal-open-2">
    <div class="uix-modal-box is-fullscreen" role="dialog" tabindex="-1" aria-hidden="true">
        <button type="button" class="uix-modal-box__close" data-modal-close-trigger="true"></button>
        <div class="uix-modal-box__content" role="document">
            <div class="uix-modal-box__head">
                <!-- code here -->
            </div>
            <div class="uix-modal-box__body">
                <div role="note">
                    <!-- ////////  content  begin //////// -->
                    <h2>Holy Crap!!!</h2>
                    <p>p.s. Sorry for calling you a dingus earlier.</p>
                    <!-- ////////  content  end //////// -->   
                </div>
            </div>
        </div>
    </div>    
</template>
<template id="modal-open-3">
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
                    <p>p.s. Sorry for calling you a dingus earlier.</p>
                    <!-- ////////  content  end //////// -->
                </div>          
            </div>   
        </div>
    </div>
</template>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Modal Dialog (Video)</h3>
                <p>Use the following HTML code to fire video.</p>
<pre class="uix-precode uix-t-l"><label>HTML</label><code>&lt;a href="javascript:void(0);" data-video-win="true" data-video-poster="../assets/videos/1920x1080/demo.jpg" data-video-mp4="../assets/videos/1920x1080/demo.mp4" data-video-webm="" data-video-ogv="" data-modal-id="web-modal-1" data-modal-close-onlybtn="false"&gt;Click Here to Open Video&lt;/a&gt;
&lt;a href=&quot;javascript:void(0)&quot; data-video-win=&quot;true&quot; data-video-poster=&quot;assets/videos/1920x1080/demo.jpg&quot; data-video-mp4=&quot;&quot; data-video-webm=&quot;&quot; data-video-ogv=&quot;&quot; data-modal-id=&quot;web-modal-2&quot; data-modal-close-onlybtn=&quot;false&quot; data-modal-lightbox=&quot;true&quot; data-modal-close-time=&quot;false&quot;&gt;&lt;span data-video-iframe=&quot;true&quot;&gt;&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/******&quot; frameborder=&quot;0&quot; allow=&quot;autoplay; encrypted-media&quot; allowfullscreen&gt;&lt;/iframe&gt;&lt;/span&gt;Video&lt;/a&gt;</code>
</pre>        
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<section class="uix-spacing--s">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <a class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary" href="javascript:void(0)" data-video-win="true" data-video-poster="../assets/videos/1920x1080/demo.jpg" data-video-mp4="../assets/videos/1920x1080/demo.mp4" data-video-webm="" data-video-ogv="" data-modal-id="web-modal-1" data-modal-close-onlybtn="false">Click Here to Open Video</a>
                    <br>
                    <a class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--s uix-btn__bg--primary" href="javascript:void(0)" data-video-win="true" data-video-poster="../assets/videos/1920x1080/demo.jpg" data-video-mp4="" data-video-webm="" data-video-ogv="" data-modal-id="web-modal-2" data-modal-close-onlybtn="false"><span data-video-iframe="true"><iframe width="560" height="315" src="https://www.youtube.com/embed/ckYJBMfPtBs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></span>Click Here to Open Youtube Video</a>
                    <br> 
                </div>
            </div>
    </div>
</section>

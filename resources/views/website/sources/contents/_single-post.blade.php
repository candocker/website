@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<!-- Content   
====================================================== -->
<section class="uix-spacing--s uix-spacing--no-top">
    <div class="uix-parallax uix-typo--color-white uix-height--50" data-fully-visible="false" data-offset-top="0" data-overlay-bg="rgba(0,0,0,.6)" data-skew="0" data-speed="0.3">
        <img class="uix-parallax__img" src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="">
        <div class="uix-v-align--absolute uix-t-c">
            <div class="row">
                <div class="col-12">
                        <h1 class="uix-typo--h2">Example: Single Post Title Here</h1>
                        <ul class="uix-entry__meta uix-entry__meta--centered">
                            <li><time datetime="2018-09-17">September 17, 2018</time></li>
                            <li>by <a href="#">admin</a></li>
                            <li><a href="#">General</a>, <a href="#">Media</a></li>
                            <li><a href="#">43 Comments</a></li>
                        </ul><!-- .uix-entry__meta end -->
                </div>
            </div>
            <!-- .row end -->
        </div>
    </div>
</section>
           <!-- Content   
====================================================== -->
<section class="uix-spacing--s uix-spacing--no-top">
    <div class="uix-parallax uix-typo--color-white uix-height--50" data-fully-visible="false" data-offset-top="0" data-overlay-bg="rgba(0,0,0,.6)" data-skew="0" data-speed="0.3">
        <img class="uix-parallax__img" src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="">
        <div class="uix-v-align--absolute uix-t-c">
            <div class="row">
                <div class="col-12">
                        <h1 class="uix-typo--h2">Example: Single Post Title Here</h1>
                        <ul class="uix-entry__meta uix-entry__meta--centered uix-entry__meta--wrap uix-typo--style-noitalic uix-t-l">
                            <li><strong>Release</strong><span><time datetime="2018-09-17">September 17, 2018</time></span></li>
                            <li><strong>Current Version</strong><span>1.1.3</span></li>
                            <li><strong>Software Version</strong><span>WordPress 4.6+</span></li>
                            <li><strong>Compatible Browsers</strong><span>IE9, IE10, IE11, Firefox, Safari, Opera, Chrome, Edge</span></li>
                        </ul><!-- .uix-entry__meta end --> 
                </div>
            </div>
            <!-- .row end -->
        </div>
    </div>
</section>
           <!-- Content 
====================================================== -->
<article class="uix-spacing--s uix-spacing--no-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <!-- Entry Content
                    ========================= -->
                    <div class="uix-entry__content uix-list uix-list--normal uix-table uix-table--bordered">
                        <div class="entry-image alignleft">
                            <a href="#"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" width="200" alt="Blog Single"></a>
                        </div><!-- .entry-image end -->
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. <a href="#">This is link</a></p>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper. Super/Duper/Long/NonBreaking/Path/Name/To/A/File/That/Is/Way/Deep/Down/In/Some/Mysterious/Remote/Desolate/Part/Of/The/Operating/System/To/A/File/That/Just/So/Happens/To/Be/Strangely/Named/Supercalifragilisticexpialidocious.txt</p>
                        <P>
                            <figure>
                                <img src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-2.jpg" alt="image">    
                                <figcaption><i>fig. 1</i> A pink flamingo.</figcaption>
                            </figure>  
                        </P>
                        <blockquote><p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p></blockquote>
                        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
                        <p><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="big image" width="1024" height="682"></p>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                        <figure class="alignfull">
                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/cool-slider-1.jpg" alt="big image" width="1024" height="682">        
                        </figure>
                        <p></p>
                        <p>
                            <ul>
                                <li>Duis mollis, est non commodo luctus, nisi erat porttitor ligula</li>
                                <li>Cras mattis consectetur purus sit amet fermentum.</li>
                                <li>Praesent commodo cursus magna.</li>
                            </ul>
                        </p>
                        <h1>Header one</h1>
                        <h2>Header two</h2>
                        <h3>Header three</h3>
                        <h4>Header four</h4>
                        <h5>Header five</h5>
                        <h6>Header six</h6>
                        <p>Single line blockquote:</p>
                        <blockquote>
                            <p>Stay hungry. Stay foolish.</p>
                        </blockquote>
                        <p>Multi line blockquote with a cite reference:</p>
                        <blockquote>
                            <p>People think focus means saying yes to the thing you&#8217;ve got to focus on. But that&#8217;s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I&#8217;m actually as proud of the things we haven&#8217;t done as the things I have done. Innovation is saying no to 1,000 things. <cite>Steve Jobs &#8211; Apple Worldwide Developers&#8217; Conference, 1997</cite></p>
                        </blockquote>
                        <h2>Tables</h2>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Employee</th>
                                    <th class="views">Salary</th>
                                    <th></th>
                                </tr>
                                <tr class="odd">
                                    <td><a href="#">John Saddington</a></td>
                                    <td>$1</td>
                                    <td>Because that&#8217;s all Steve Job&#8217; needed for a salary.</td>
                                </tr>
                                <tr class="even">
                                    <td><a href="#">Tom McFarlin</a></td>
                                    <td>$100K</td>
                                    <td>For all the blogging he does.</td>
                                </tr>
                                <tr class="odd">
                                    <td><a href="#">Jared Erickson</a></td>
                                    <td>$100M</td>
                                    <td>Pictures are worth a thousand words, right? So Tom x 1,000.</td>
                                </tr>
                                <tr class="even">
                                    <td><a href="#">Chris Ames</a></td>
                                    <td>$100B</td>
                                    <td>With hair like that?! Enough said&#8230;</td>
                                </tr>
                            </tbody>
                        </table>                                
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
                    </div>
                    <!-- Entry Content  end -->
                    <!-- Paginate WordPress Posts
                    ========================= -->
                    <div class="uix-page-links">Pages: 
                        <span>1</span> 
                        <a href="#"><span>2</span></a> 
                        <a href="#"><span>3</span></a> 
                        <a href="#"><span>4</span></a>
                    </div>
                    <!-- Paginate WordPress Posts end -->                        
                    <!-- Tags
                    ========================= -->
                    <div class="uix-tags-box">
                        <strong>Tags:</strong>
                        <a href="#" target="_blank">business</a>
                        <a href="#" target="_blank">design</a>
                        <a href="#" target="_blank">SEO</a>
                        <a href="#" target="_blank">life</a>
                        <a href="#" target="_blank">UI Design</a>
                    </div>
                    <!-- Tags end -->    
                    <!-- Post edit link
                    ========================= -->
                    <span class="uix-edit-link"><a class="uix-post-edit" href="#">Edit</a></span>
                    <!-- Post edit link end -->              
                    <!-- Share
                    ========================= -->
                    <div class="uix-entry__box__share uix-t-c">
                        <hr>
                        <a class="uix-btn uix-btn__border--medium uix-btn__size--s is-pill uix-social-bg uix-social-bg--google" href="//plus.google.com/share?url=https://uiux.cc" target="_blank">
                            <i class="fa fa-google-plus"></i> Share on Google+
                        </a>   
                        <a class="uix-btn uix-btn__border--medium uix-btn__size--s is-pill uix-social-bg uix-social-bg--twitter" href="//twitter.com/intent/tweet?url=https://uiux.cc&text=Shortcodes" target="_blank">
                            <i class="fa fa-twitter"></i> Share on Twitter
                        </a>   
                        <a class="uix-btn uix-btn__border--medium uix-btn__size--s is-pill uix-social-bg uix-social-bg--facebook" href="//www.facebook.com/sharer/sharer.php?u=https://uiux.cc" target="_blank">
                            <i class="fa fa-facebook"></i> Share on Facebook
                        </a>
                    </div>
                    <!-- Share  end -->
                    <!-- Post Navigation
                    ========================= -->
                    <div class="uix-entry__box uix-entry__box--top uix-entry__box--mark">
                       <hr>
                       <div class="row">
                           <div class="col-6 uix-t-l">
                               <a  class=""  href="#">&larr; Previous Post</a>
                           </div>
                           <div class="col-6 uix-t-r">
                               <a  class="" href="#">Next Post &rarr;</a>
                           </div>                          
                       </div>
                       <hr>
                    </div>    
                    <!-- Post Navigation end -->        
                    <!-- Comments
                    ========================= -->
                    <div class="uix-entry__box comments">
                           <h4 class="uix-typo--style-uppercase uix-entry__box__title">3 comments</h4>
                            <!-- comment start -->
                            <div class="comment uix-clearfix" id="comment-1">
                                <div class="comment-meta">
                                    <div class="comment-avatar">
                                        <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg" alt="avatar">
                                    </div>
                                    <div class="comment-text">
                                        <h5><a href="#">Abigail Roswell</a></h5>
                                        <span>
                                            <em>March 17th, 2016</em>
                                        </span>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-body uix-clearfix">
                                        <p> It’s very cool you give such a good and fast support - there are not many people/companies that do. Thanks for this!</p>
                                        <a rel="nofollow" data-respond="1" class="comment-reply-link respond" href="?replytocom=1#respond"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                                <!-- comment start -->
                                <div class="comment uix-clearfix" id="comment-2">
                                    <div class="comment-meta">
                                        <div class="comment-avatar">
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg" alt="avatar">
                                        </div>
                                        <div class="comment-text">
                                            <h5><a href="#">Abigail Roswell</a></h5>
                                            <span>
                                                <em>March 17th, 2016</em>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-body uix-clearfix">
                                            <p> It’s very cool you give such a good and fast support - there are not many people/companies that do. Thanks for this!</p>
                                            <a rel="nofollow" data-respond="1" class="comment-reply-link respond" href="?replytocom=1#respond"><i class="fa fa-reply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- comment end -->  
                            </div>
                            <!-- comment end -->  
                            <!-- comment start -->
                            <div class="comment uix-clearfix" id="comment-3">
                                <div class="comment-meta">
                                    <div class="comment-avatar">
                                        <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg" alt="avatar">
                                    </div>
                                    <div class="comment-text">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>
                                            <em>March 17th, 2016</em>
                                        </span>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-body uix-clearfix">
                                        <p>Need an custom theme for your netAdventist site? </p>
                                        <a rel="nofollow" data-respond="1" class="comment-reply-link respond" href="?replytocom=21#respond"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- comment end -->
                            <!-- comment start -->
                            <div class="comment uix-clearfix" id="comment-4">
                                <div class="comment-meta">
                                    <div class="comment-avatar">
                                        <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg" alt="avatar">
                                    </div>
                                    <div class="comment-text">
                                        <h5><a href="#">Abigail Roswell</a></h5>
                                        <span>
                                            <em>March 17th, 2016</em>
                                        </span>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-body uix-clearfix">
                                        <p>Let netAserve show you the advantages of being on the netAdventist platform and what your organization can achieve with the exciting tools it provides!, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <a href="#">incididunt ut</a> labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoSuper/Duper/Long/NonBreaking/Path/Name/To/A/File/That/Is/Way/Deep/Down/In/Some/Mysterious/Remote/Desolate/Part/Of/The/Operating/System/To/A/File/That/Just/So/Happens/To/Be/Strangely/Named/Supercalifragilisticexpialidocious.txt </p>
                                        <a rel="nofollow" data-respond="1" class="comment-reply-link respond" href="?replytocom=3#respond"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- comment end -->
                    </div>
                    <!-- Comments  end -->
                    <!-- Comments Form
                    ========================= -->
                    <div class="uix-entry__box" data-validate="3">
                        <h4 class="uix-typo--style-uppercase uix-entry__box__title comment-reply-title">Leave a Reply<small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h4>
                        <form method="post" action="#">
                             <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="uix-controls is-fullwidth">
                                      <input type="text" class="js-uix-float-label" name="author" id="author">
                                      <label>Harf</label>
                                    </div>                           
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="uix-controls is-fullwidth">
                                      <input type="email" class="js-uix-float-label" name="email" id="email">
                                      <label>Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="uix-controls is-fullwidth">
                              <input type="tel" id="cell" class="js-uix-float-label" name="cell">
                              <label>Celly</label>
                            </div>
                            <div class="uix-controls is-fullwidth">
                              <span class="uix-controls__arrow"><i class="fa fa-sort"></i></span>
                              <select class="js-uix-float-label">
                                <option value="blank"></option>
                                <option value="Apple">Apple</option>
                                <option value="Banana">Banana</option>
                                <option value="Kiwi">Kiwi</option>
                                <option value="Orange">Orange</option>
                                <option value="Watermelon">Watermelon</option>
                              </select>
                              <label>Favotire Fruit</label>
                            </div>
                            <div class="uix-controls uix-controls__textarea is-fullwidth">
                              <textarea name="comments" class="js-uix-float-label" id="comments" rows="8"></textarea>
                              <label>Comments</label>
                            </div>
                            <div class="uix-controls">
                              <button type="submit" id="submit" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary">Submit</button>
                            </div>  
                        </form>
                    </div>
                    <!-- Comments Form  end -->
            </div>
        </div>
        <!-- .row  end -->
    </div>
    <!-- .container end -->
</article>
        </main>
@endsection

@php
@endphp
@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
<style>
h1 {
  font-size:20px;
}
h2 {
  font-size:18px;
}
h3 {
  font-size:16px;
}
</style>
<hr />
           <!-- Content 
====================================================== -->
<article class="uix-spacing--s uix-spacing--no-top">
    <div class="container">
        <div class="row">
            <div class="col-12 showcontent">

                    <!-- Entry Content
                    ========================= -->
                    <div class="uix-entry__content uix-list uix-list--normal uix-table uix-table--bordered">
{!!$datas['data']['content']!!}
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
@endsection

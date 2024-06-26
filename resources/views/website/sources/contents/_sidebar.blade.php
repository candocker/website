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
                <h3>Sidebar</h3>
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
            <div class="col-lg-9 col-md-9">
                <div style="height: 3000px; background: #f2f2f2;"></div>
            </div>
            <!--  .col-lg-9.col-md-9  end -->
            <div class="col-lg-3 col-md-3">
                    <!-- Sidebar
                    ========================= -->
                    <div class="uix-sidebar__container" role="complementary">
                        <div class="widget">
                            <form method="get" class="uix-search-box" action="#">
                                <label> 
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="uix-search-box__field" placeholder="Search &hellip;" value="" name="s" /> 
                                 </label> 
                                 <i class="fa fa-search uix-search-box__submit"></i> 
                             </form>
                        </div>
                        <div class="widget widget_categories">
                            <h3 class="widget-title uix-typo--h5 uix-typo--style-uppercase">Categories</h3>
                            <div>
                                <ul>
                                    <li class="cat-item cat-item-8"><a href="#">Art Direction</a><span class="cat-item-count">12</span></li>
                                    <li class="cat-item cat-item-4"><a href="#">Discovery</a><span class="cat-item-count">4</span></li>
                                    <li class="cat-item cat-item-3"><a href="#">Featured</a><span class="cat-item-count">4</span></li>
                                    <li class="cat-item cat-item-5"><a href="#">Lifestyle</a><span class="cat-item-count">4</span>
                                        <ul class='children'>
                                            <li class="cat-item cat-item-7"><a href="#">Events</a><span class="cat-item-count">4</span></li>
                                            <li class="cat-item cat-item-6"><a href="#">Travel</a><span class="cat-item-count">4</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title uix-typo--h5 uix-typo--style-uppercase">Tags</h3>
                            <div class="tagcloud uix-tags-box">
                                <a href="#" class="tag-link">Web Design</a>
                                <a href="#" class="tag-link">Detail</a>
                                <a href="#" class="tag-link">SEO</a>
                                <a href="#" class="tag-link">premium theme</a>
                                <a href="#" class="tag-link">simple</a>
                                <a href="#" class="tag-link">Soundcloud</a>
                                <a href="#" class="tag-link">wordpress theme</a>
                                <a href="#" class="tag-link">Web Design</a>
                                <a href="#" class="tag-link">Detail</a>
                                <a href="#" class="tag-link">SEO</a>
                                <a href="#" class="tag-link">premium theme</a>
                                <a href="#" class="tag-link">simple</a>
                                <a href="#" class="tag-link">Soundcloud</a>
                                <a href="#" class="tag-link">wordpress theme</a>  
                            </div>
                        </div>
                        <div class="widget">
                            <div id="calendar_wrap" class="calendar_wrap">
                                <table>
                                    <caption>August 2016</caption>
                                    <thead>
                                        <tr>
                                            <th scope="col" title="Monday">M</th>
                                            <th scope="col" title="Tuesday">T</th>
                                            <th scope="col" title="Wednesday">W</th>
                                            <th scope="col" title="Thursday">T</th>
                                            <th scope="col" title="Friday">F</th>
                                            <th scope="col" title="Saturday">S</th>
                                            <th scope="col" title="Sunday">S</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" id="prev"><a href="#">&laquo; Apr</a></td>
                                            <td class="pad">&nbsp;</td>
                                            <td colspan="3" id="next" class="pad">&nbsp;</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td>26</td>
                                            <td>27</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td id="today">29</td>
                                            <td>30</td>
                                            <td>31</td>
                                            <td class="pad" colspan="4">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title uix-typo--h5 uix-typo--style-uppercase">About</h3>
                            <div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Qualem igitur hominem natura inchoavit? Non enim, si omnia non sequebatur, idcirco non erat ortus illinc. Quid turpius quam sapientis vitam ex insipientium sermone pendere.</div>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title uix-typo--h5 uix-typo--style-uppercase">Recent Posts</h3>
                            <ul class="uix-sidebar__posts">
                                <li><a href="#">Making Your Site Retina-Ready</a></li>
                                <li><a href="#">Hi, The Test Post is Loremipsum</a></li>
                                <li><a href="#">One Simple Post</a></li>
                                <li><a href="#">Super/Duper/Long/NonBreaking/Path/Name/To/A/File/That/Is/Way/Deep/Down/In/Some/Mysterious/Remote/Desolate/Part/Of/The/Operating/System/To/A/File/That/Just/So/Happens/To/Be/Strangely/Named/Supercalifragilisticexpialidocious.txt</a></li>
                                <li><a href="#">Post Formats: Embed Soundcloud</a></li>
                            </ul>
                        </div>
                        <div id="uix-sidebar__posts" class="widget js-uix-sticky-el" data-stop-trigger=".uix-footer__container" data-stop-trigger-diff="0">
                            <h3 class="widget-title uix-typo--h5 uix-typo--style-uppercase">Sticky Posts</h3>
                            <ul class="uix-sidebar__posts-img">
                                <li>
                                    <div class="uix-sidebar__posts-img__thumb"><a href="#"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="" ></a></div>
                                    <div class="uix-sidebar__posts-img__desc">
                                        <div class="uix-sidebar__posts-img__title">
                                            <a href="#">Making Your Site Retina-Ready</a>
                                        </div>
                                        <div class="uix-sidebar__posts-img__date">August 29, 2016</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uix-sidebar__posts-img__thumb"><a href="#"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="" ></a></div>
                                    <div class="uix-sidebar__posts-img__desc">
                                        <div class="uix-sidebar__posts-img__title">
                                            <a href="#">Hi, The Test Post is Loremipsum</a>
                                        </div>
                                        <div class="uix-sidebar__posts-img__date">August 29, 2016</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uix-sidebar__posts-img__thumb"><a href="#"><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="" ></a></div>
                                    <div class="uix-sidebar__posts-img__desc">
                                        <div class="uix-sidebar__posts-img__title">
                                            <a href="#">Post Formats: Embed Soundcloud </a>
                                        </div>
                                        <div class="uix-sidebar__posts-img__date">August 29, 2016</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.js-uix-sticky-el -->
                        <div class="widget">
                            <h3 class="widget-title uix-typo--h5 uix-typo--style-uppercase">Advertising</h3>
                            <div class="textwidget">
                                <div style="width:100%; border-radius: 3px; max-width: 365px; margin:1em auto 3em;border:1px solid lighten($base-color,60);background-color:#ec5e79;background-image:linear-gradient(90deg,#ec5e79 0,#C04645 20%,#DE510E);transition:all 150ms ease-in-out; text-align: center;box-shadow: 0 1px 1px rgba(0,0,0,.08);">
                                    <header style="display: block; padding: 20px;">
                                        <h3 style="color: #fff">Uix Kit</h3>
                                        <h5 style="color: #fff; font-weight: 400;">A free web kits for fast web design and development, compatible with Bootstrap v4.</h5> </header>
                                    <article style="display: block; background: #fff; padding: 20px 20px 1px;">
                                        <p> <a style="text-decoration: none;" href="https://github.com/xizon/uix-kit" target="_blank" rel="noopener noreferrer">Download Now</a> </p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- Sidebar end -->
            </div>
            <!--  .col-lg-3.col-md-3  end --> 
        </div>
        <!-- .row  end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

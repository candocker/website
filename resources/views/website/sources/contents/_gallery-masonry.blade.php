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
                <h3>Uix Grid Masonry( With Filterable )</h3>
                <p>Support data filtering transition animation at the same time</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Content 
====================================================== -->
<section>
    <div class="container uix-t-c">
            <div class="row">
                <div class="col-12">
                    <div class="uix-nav uix-nav--separation" id="js-uix-navfilter-1">
                        <ul>
                            <li class="current-cat"><a data-group="all" href="#">All</a></li>
                            <li><a data-group="web-design" href="#">Web Design</a></li>
                            <li><a data-group="ui" href="#">UI</a></li>
                            <li><a data-group="seo" href="#">SEO</a></li>  
                        </ul>
                    </div>
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>     
           <!-- Content 
====================================================== -->
<div class="uix-spacing--s">
    <div class="container uix-t-c">
        <div class="uix-gallery" data-show-type="masonry|filter" data-filter-id="#js-uix-navfilter-1">
            <div class="uix-gallery__tiles">
                <!-- Item  -->
                <article class="uix-core-grid__col-4 uix-gallery__item" data-groups='["web-design","seo"]'>
                    <div>
                        <a href="#" class="uix-gallery__image" >
                            <div class="uix-gallery__image-cover">
                                <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" height="300" alt="" />
                            </div>
                        </a>
                        <h3>
                            <a href="#">Project Title Here</a>
                            <span class="uix-gallery__title">Beautiful WordPress Theme</span>
                            <span class="uix-gallery__cat"><a href="#">Free</a></span>
                        </h3>
                    </div>
                </article>
                <!--  .uix-gallery__item  end -->  
                <!-- Item  -->
                <article class="uix-core-grid__col-4 uix-gallery__item" data-groups='["web-design"]'>
                    <div>
                        <a href="#" class="uix-gallery__image" >
                            <div class="uix-gallery__image-cover">
                                <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" height="120" alt="" />
                            </div>
                        </a>
                        <h3>
                            <a href="#">Project Title Here</a>
                            <span class="uix-gallery__title">Beautiful WordPress Theme</span>
                            <span class="uix-gallery__cat"><a href="#">Free</a></span>
                        </h3>
                    </div>
                </article>
                <!--  .uix-gallery__item  end -->             
                <!-- Item  -->
                <article class="uix-core-grid__col-4 uix-gallery__item" data-groups='["web-design"]'>
                    <div>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                    </div>
                </article>
                <!--  .uix-gallery__item  end -->  
                 <!-- Item  -->
                <article class="uix-core-grid__col-4 uix-gallery__item" data-groups='["seo"]'>
                    <div>
                        <a href="#" class="uix-gallery__image" >
                            <div class="uix-gallery__image-cover">
                                <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-4.jpg" height="220" alt="" />
                            </div>
                        </a>
                        <h3>
                            <a href="#">Project Title Here</a>
                            <span class="uix-gallery__title">Commerce Theme</span>
                            <span class="uix-gallery__cat"><a href="#">Free</a></span>
                        </h3>
                    </div>            
                </article>
                <!--  .uix-gallery__item  end -->  
                <!-- Item  -->
                <article class="uix-core-grid__col-4 uix-gallery__item" data-groups='["ui"]'>
                    <div>
                        <a href="#" class="uix-gallery__image" >
                            <div class="uix-gallery__image-cover">
                                <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-5.jpg" alt="" />
                            </div>
                        </a>
                        <h3>
                            <a href="#">Project Title Here</a>
                            <span class="uix-gallery__title">Simple WordPress Theme</span>
                            <span class="uix-gallery__cat"><a href="#">Free</a></span>
                        </h3>
                    </div>
                </article>
                <!--  .uix-gallery__item  end -->            
            </div>
            <!-- .uix-gallery__tiles end -->
        </div>
        <!-- .uix-gallery end -->
        <div class="uix-pagination__container uix-t-c uix-trans">
            <ul>
                <li class="previous"><a class="prev page-numbers" href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a class='page-numbers' href='#'>1</a></li>
                <li class="is-active"><span class='page-numbers current'>2</span></li>
                <li><a class='page-numbers' href='#'>3</a></li>
                <li class="next"><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div> 
        <!-- .uix-pagination__container  end -->    
    </div>
    <!-- .container end -->
</div>
        </main>
@endsection

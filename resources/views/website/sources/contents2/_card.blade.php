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
                <h3>Thumbnail Card</h3>
                <p>The following is a Thumbnail style card using flex.</p>
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
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="uix-card--thumb">
                                <div class="uix-card--thumb__header">
                                    <div class="uix-card--thumb__preview" style="flex-basis: 50px;">
                                        <!-- image begin -->
                                        <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg" alt="" class="uix-border--circle">
                                        <!-- image end -->
                                    </div>
                                    <div class="uix-card--thumb__content">
                                        <div class="uix-card--thumb__content__child">
                                            <div class="uix-card--thumb__content__child--left">
                                                <div>
                                                    <!-- content begin -->
                                                    <strong>Long title Long title Long title Long title Long title Long title Long title Long title   </strong>
                                                    <!-- content end -->
                                                </div>
                                            </div>
                                            <div class="uix-card--thumb__content__child--right" style="min-width: 50px; text-align: right;">
                                                <!-- content begin -->
                                                <button aria-haspopup="true">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>   
                                                <!-- content end -->
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="uix-card--thumb__body">
                                    <!-- content begin -->
                                    <small class="uix-typo--color-sub">
                                        Harum, ad porro molestiae corporis natus aut non fugit. Recusandae, reprehenderit, voluptate voluptas reiciendis voluptatum tempora vero vel libero facere fuga maiores ratione eaque ad illum porro dignissimos sit eos.
                                    </small>
                                    <!-- content end -->
                                </div>
                            </div>      
                        </div>     
                        <div class="col-lg-4 col-md-4">
                            <div class="uix-card--thumb">
                                <div class="uix-card--thumb__header">
                                    <div class="uix-card--thumb__preview" style="flex-basis: 50px;">
                                        <!-- image begin -->
                                        <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg" alt="" class="uix-border--circle">
                                        <!-- image end -->
                                    </div>
                                    <div class="uix-card--thumb__content">
                                        <div class="uix-card--thumb__content__child">
                                            <div class="uix-card--thumb__content__child--left">
                                                <div>
                                                    <!-- content begin -->
                                                    <h5 class="uix-t-ellipsis uix-spacing--no">Title</h5>
                                                    <small class="uix-typo--color-sub">@https://uiux.cc</small>
                                                    <!-- content end -->
                                                </div>
                                            </div>
                                            <div class="uix-card--thumb__content__child--right" style="min-width: 50px; text-align: right;">
                                                <!-- content begin -->
                                                <button aria-haspopup="true">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>   
                                                <!-- content end -->
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="uix-card--thumb__body">
                                    <!-- content begin -->
                                    <small class="uix-typo--color-sub">
                                        Harum, ad porro molestiae corporis natus aut non fugit. Recusandae, reprehenderit, voluptate voluptas reiciendis voluptatum tempora vero vel libero facere fuga maiores ratione eaque ad illum porro dignissimos sit eos.
                                    </small>
                                    <!-- content end -->
                                </div>
                            </div>       
                        </div>    
                        <div class="col-lg-4 col-md-4">
                            <div class="uix-card--thumb">
                                <div class="uix-card--thumb__header">
                                    <div class="uix-card--thumb__preview" style="flex-basis: 50px;">
                                        <!-- image begin -->
                                        <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg" alt="" class="uix-border--circle">
                                        <!-- image end -->
                                    </div>
                                    <div class="uix-card--thumb__content">
                                        <div class="uix-card--thumb__content__child">
                                            <div class="uix-card--thumb__content__child--left">
                                                <div>
                                                    <!-- content begin -->
                                                    <h5 class="uix-t-ellipsis uix-spacing--no">Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title  </h5>
                                                    <small class="uix-typo--color-sub">@https://uiux.cc</small>
                                                    <!-- content end -->
                                                </div>
                                            </div>
                                            <div class="uix-card--thumb__content__child--right" style="min-width: 50px; text-align: right;">
                                                <!-- content begin -->
                                                <button aria-haspopup="true">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>   
                                                <!-- content end -->
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="uix-card--thumb__body">
                                    <!-- content begin -->
                                    <small class="uix-typo--color-sub">
                                        Harum, ad porro molestiae corporis natus aut non fugit. Recusandae, reprehenderit, voluptate voluptas reiciendis voluptatum tempora vero vel libero facere fuga maiores ratione eaque ad illum porro dignissimos sit eos.
                                    </small>
                                    <!-- content end -->
                                </div>
                            </div>       
                        </div>    
                    </div>
                    <!-- .row end -->    
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
                <h3>Gallery Card</h3>
                <p>The following is a gallery style card using flex.</p>
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
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="uix-card--gallery" role="figure">
                                <div class="uix-card--gallery__preview">
                                    <!-- image begin -->
                                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg" alt="">
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <h5 class="uix-relative--inline" style="margin: 10px; padding-bottom: 0;">Name&nbsp;&nbsp;</h5>
                                            <small class="uix-typo--color-sub">0/15/18</small>
                                            <div class="uix-card--gallery__action" style="margin: 10px;">
                                                <button aria-haspopup="true">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>
                                            </div> 
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>      
                        </div>     
                        <div class="col-lg-4 col-md-4">
                            <div class="uix-card--gallery" role="figure">
                                <div class="uix-card--gallery__preview">
                                    <!-- image begin -->
                                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg" alt="">
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <h5 class="uix-relative--inline" style="margin: 10px; padding-bottom: 0;">Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title</h5>
                                            <small class="uix-typo--color-sub">0/15/18</small>
                                            <div class="uix-card--gallery__action" style="margin: 10px;">
                                                <button aria-haspopup="true">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>
                                            </div> 
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>       
                        </div>  
                        <div class="col-lg-3 col-md-3">
                            <div class="uix-card--gallery" role="figure">
                                <div class="uix-card--gallery__preview">
                                    <!-- image begin -->
                                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg" alt="">
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <h5 class="uix-t-ellipsis" style="margin: 10px; padding-bottom: 0;">Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title</h5>
                                            <small class="uix-typo--color-sub">0/15/18</small>
                                            <div class="uix-card--gallery__action" style="margin: 10px;">
                                                <button aria-haspopup="true">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>
                                            </div> 
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>              
                        </div>     
                    </div>
                    <!-- .row end -->    
                    <hr>
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                           <div class="uix-card--gallery uix-card--gallery--horizontal is-mobile-still" role="figure">
                                <div class="uix-card--gallery__preview" style="padding: 25px; background: #EAEAEA;">
                                    <!-- image begin -->
                                    <svg width="30" height="30" viewBox="0 0 512 512">
                                        <g>
                                            <rect width="109.2" x="82.3" y="96.9" height="20.8" />
                                            <rect width="109.2" x="82.3" y="158.2" height="20.8" />
                                            <rect width="256.9" x="82.3" y="218.6" height="20.8" />
                                            <rect width="256.9" x="82.3" y="278.9" height="20.8" />
                                            <path d="m487.9,249.7c-16.3-16.3-42.7-16.3-59,0l-22.1,22.1v-112.5c0-3.1-1-5.2-3.1-7.3l-137.3-137.3c-2.1-2.1-4.2-3.1-7.3-3.1h-237.2c-6.2,0-10.4,4.2-10.4,10.4v468.1c0,6.2 4.2,10.4 10.4,10.4h374.5c6.2,0 10.4-4.2 10.4-11.4v-99.3l81.1-81.1c16.3-16.3 16.3-42.7 0-59zm-218.4-202.8l101.9,101.9h-101.9v-101.9zm116.5,432.8h-353.7v-447.3h216.4v126.9c0,6.2 4.2,10.4 10.4,10.4h126.9v122.9l-99.2,99.2-8.8,67.8 67.8-8.8 40.3-40.3v69.2zm87.2-186.1l-136.8,136.8-35,5.7 5.7-35 136.8-136.8c8.1-8.1 21.2-8.1 29.3,0 8.1,8.1 8.1,21.2 0,29.3z" />
                                        </g>
                                    </svg>
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <span style="margin: 0 10px 10px; display: block;">
                                                <h5 class="uix-t-ellipsis" style="margin: 10px; margin-left: 0; margin-bottom: 0; padding-bottom: 0;">Long title Long title Long title Long title Long title Long title Long title</h5>
                                                <small class="uix-typo--color-sub">0/15/18</small>
                                            </span>
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>       
                        </div>   
                         <div class="col-lg-3 col-md-3">
                            <div class="uix-card--gallery uix-card--gallery--horizontal is-mobile-still" role="figure">
                                <div class="uix-card--gallery__preview" style="padding: 25px; background: #EAEAEA;">
                                    <!-- image begin -->
                                    <svg width="30" height="30" viewBox="0 0 512 512">
                                        <g>
                                            <rect width="109.2" x="82.3" y="96.9" height="20.8" />
                                            <rect width="109.2" x="82.3" y="158.2" height="20.8" />
                                            <rect width="256.9" x="82.3" y="218.6" height="20.8" />
                                            <rect width="256.9" x="82.3" y="278.9" height="20.8" />
                                            <path d="m487.9,249.7c-16.3-16.3-42.7-16.3-59,0l-22.1,22.1v-112.5c0-3.1-1-5.2-3.1-7.3l-137.3-137.3c-2.1-2.1-4.2-3.1-7.3-3.1h-237.2c-6.2,0-10.4,4.2-10.4,10.4v468.1c0,6.2 4.2,10.4 10.4,10.4h374.5c6.2,0 10.4-4.2 10.4-11.4v-99.3l81.1-81.1c16.3-16.3 16.3-42.7 0-59zm-218.4-202.8l101.9,101.9h-101.9v-101.9zm116.5,432.8h-353.7v-447.3h216.4v126.9c0,6.2 4.2,10.4 10.4,10.4h126.9v122.9l-99.2,99.2-8.8,67.8 67.8-8.8 40.3-40.3v69.2zm87.2-186.1l-136.8,136.8-35,5.7 5.7-35 136.8-136.8c8.1-8.1 21.2-8.1 29.3,0 8.1,8.1 8.1,21.2 0,29.3z" />
                                        </g>
                                    </svg>
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <span style="margin: 0 10px 10px; display: block;">
                                                <h5 style="margin: 10px 0; margin-bottom: 0; padding-bottom: 0;">Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title</h5>
                                                <small class="uix-typo--color-sub">0/15/18</small>
                                            </span>
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>                                      
                        <div class="col-lg-3 col-md-3">
                            <div class="uix-card--gallery uix-card--gallery--horizontal is-mobile-still" role="figure">
                                <div class="uix-card--gallery__preview" style="padding: 25px; background: #EAEAEA;">
                                    <!-- image begin -->
                                    <svg width="30" height="30" viewBox="0 0 512 512">
                                        <g>
                                            <rect width="109.2" x="82.3" y="96.9" height="20.8" />
                                            <rect width="109.2" x="82.3" y="158.2" height="20.8" />
                                            <rect width="256.9" x="82.3" y="218.6" height="20.8" />
                                            <rect width="256.9" x="82.3" y="278.9" height="20.8" />
                                            <path d="m487.9,249.7c-16.3-16.3-42.7-16.3-59,0l-22.1,22.1v-112.5c0-3.1-1-5.2-3.1-7.3l-137.3-137.3c-2.1-2.1-4.2-3.1-7.3-3.1h-237.2c-6.2,0-10.4,4.2-10.4,10.4v468.1c0,6.2 4.2,10.4 10.4,10.4h374.5c6.2,0 10.4-4.2 10.4-11.4v-99.3l81.1-81.1c16.3-16.3 16.3-42.7 0-59zm-218.4-202.8l101.9,101.9h-101.9v-101.9zm116.5,432.8h-353.7v-447.3h216.4v126.9c0,6.2 4.2,10.4 10.4,10.4h126.9v122.9l-99.2,99.2-8.8,67.8 67.8-8.8 40.3-40.3v69.2zm87.2-186.1l-136.8,136.8-35,5.7 5.7-35 136.8-136.8c8.1-8.1 21.2-8.1 29.3,0 8.1,8.1 8.1,21.2 0,29.3z" />
                                        </g>
                                    </svg>
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <span style="margin: 0 10px 10px; display: block;">
                                                <h5 class="uix-t-ellipsis" style="margin: 10px; margin-left: 0; margin-bottom: 0; padding-bottom: 0;">Long title Long title Long title Long title Long title Long title Long title</h5>
                                                <small class="uix-typo--color-sub">0/15/18</small>
                                                <div class="uix-card--gallery__action" style="margin: 10px;">
                                                    <button aria-haspopup="true">
                                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                    </button>
                                                </div> 
                                            </span>
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>       
                        </div>   
                         <div class="col-lg-3 col-md-3">
                            <div class="uix-card--gallery uix-card--gallery--horizontal is-mobile-still" role="figure">
                                <div class="uix-card--gallery__preview" style="padding: 25px; background: #EAEAEA;">
                                    <!-- image begin -->
                                    <svg width="30" height="30" viewBox="0 0 512 512">
                                        <g>
                                            <rect width="109.2" x="82.3" y="96.9" height="20.8" />
                                            <rect width="109.2" x="82.3" y="158.2" height="20.8" />
                                            <rect width="256.9" x="82.3" y="218.6" height="20.8" />
                                            <rect width="256.9" x="82.3" y="278.9" height="20.8" />
                                            <path d="m487.9,249.7c-16.3-16.3-42.7-16.3-59,0l-22.1,22.1v-112.5c0-3.1-1-5.2-3.1-7.3l-137.3-137.3c-2.1-2.1-4.2-3.1-7.3-3.1h-237.2c-6.2,0-10.4,4.2-10.4,10.4v468.1c0,6.2 4.2,10.4 10.4,10.4h374.5c6.2,0 10.4-4.2 10.4-11.4v-99.3l81.1-81.1c16.3-16.3 16.3-42.7 0-59zm-218.4-202.8l101.9,101.9h-101.9v-101.9zm116.5,432.8h-353.7v-447.3h216.4v126.9c0,6.2 4.2,10.4 10.4,10.4h126.9v122.9l-99.2,99.2-8.8,67.8 67.8-8.8 40.3-40.3v69.2zm87.2-186.1l-136.8,136.8-35,5.7 5.7-35 136.8-136.8c8.1-8.1 21.2-8.1 29.3,0 8.1,8.1 8.1,21.2 0,29.3z" />
                                        </g>
                                    </svg>
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <span style="margin: 0 10px 10px; display: block;">
                                                <h5 style="margin: 10px 0; margin-bottom: 0; padding-bottom: 0;">Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title</h5>
                                                <small class="uix-typo--color-sub">0/15/18</small>
                                                <div class="uix-card--gallery__action" style="margin: 10px;">
                                                    <button aria-haspopup="true">
                                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                    </button>
                                                </div> 
                                            </span>
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>                                           
                    </div>
                    <!-- .row end -->    
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="uix-card--gallery uix-card--gallery--horizontal is-mobile-still" role="figure">
                                <div class="uix-card--gallery__preview" style="padding: 25px; background: #EAEAEA;">
                                    <!-- image begin -->
                                    <svg width="30" height="30" viewBox="0 0 512 512">
                                        <g>
                                            <rect width="109.2" x="82.3" y="96.9" height="20.8" />
                                            <rect width="109.2" x="82.3" y="158.2" height="20.8" />
                                            <rect width="256.9" x="82.3" y="218.6" height="20.8" />
                                            <rect width="256.9" x="82.3" y="278.9" height="20.8" />
                                            <path d="m487.9,249.7c-16.3-16.3-42.7-16.3-59,0l-22.1,22.1v-112.5c0-3.1-1-5.2-3.1-7.3l-137.3-137.3c-2.1-2.1-4.2-3.1-7.3-3.1h-237.2c-6.2,0-10.4,4.2-10.4,10.4v468.1c0,6.2 4.2,10.4 10.4,10.4h374.5c6.2,0 10.4-4.2 10.4-11.4v-99.3l81.1-81.1c16.3-16.3 16.3-42.7 0-59zm-218.4-202.8l101.9,101.9h-101.9v-101.9zm116.5,432.8h-353.7v-447.3h216.4v126.9c0,6.2 4.2,10.4 10.4,10.4h126.9v122.9l-99.2,99.2-8.8,67.8 67.8-8.8 40.3-40.3v69.2zm87.2-186.1l-136.8,136.8-35,5.7 5.7-35 136.8-136.8c8.1-8.1 21.2-8.1 29.3,0 8.1,8.1 8.1,21.2 0,29.3z" />
                                        </g>
                                    </svg>
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__content">
                                        <div class="uix-card--gallery__content__child">
                                            <div class="uix-card--gallery__content__child--left">
                                                <div>
                                                    <!-- content begin -->
                                                    <span style="margin: 0 10px 10px; display: block;">
                                                        <h5 class="uix-t-ellipsis" style="margin: 10px; margin-left: 0; margin-bottom: 0; padding-bottom: 0;">Long title Long title Long title Long title Long title Long title Long title</h5>
                                                        <small class="uix-typo--color-sub">0/15/18</small>
                                                    </span>
                                                    <!-- content end -->
                                                </div>
                                            </div>
                                            <div class="uix-card--gallery__content__child--right" style="min-width: 50px;">
                                                <!-- content begin -->
                                                <div class="uix-card--gallery__action" style="margin: 10px;">
                                                    <button aria-haspopup="true">
                                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                    </button>
                                                </div>    
                                                <!-- content end -->
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>       
                        </div>   
                         <div class="col-lg-6 col-md-6">
                            <div class="uix-card--gallery uix-card--gallery--horizontal is-mobile-still" role="figure">
                                <div class="uix-card--gallery__preview" style="padding: 25px; background: #EAEAEA;">
                                    <!-- image begin -->
                                    <svg width="30" height="30" viewBox="0 0 512 512">
                                        <g>
                                            <rect width="109.2" x="82.3" y="96.9" height="20.8" />
                                            <rect width="109.2" x="82.3" y="158.2" height="20.8" />
                                            <rect width="256.9" x="82.3" y="218.6" height="20.8" />
                                            <rect width="256.9" x="82.3" y="278.9" height="20.8" />
                                            <path d="m487.9,249.7c-16.3-16.3-42.7-16.3-59,0l-22.1,22.1v-112.5c0-3.1-1-5.2-3.1-7.3l-137.3-137.3c-2.1-2.1-4.2-3.1-7.3-3.1h-237.2c-6.2,0-10.4,4.2-10.4,10.4v468.1c0,6.2 4.2,10.4 10.4,10.4h374.5c6.2,0 10.4-4.2 10.4-11.4v-99.3l81.1-81.1c16.3-16.3 16.3-42.7 0-59zm-218.4-202.8l101.9,101.9h-101.9v-101.9zm116.5,432.8h-353.7v-447.3h216.4v126.9c0,6.2 4.2,10.4 10.4,10.4h126.9v122.9l-99.2,99.2-8.8,67.8 67.8-8.8 40.3-40.3v69.2zm87.2-186.1l-136.8,136.8-35,5.7 5.7-35 136.8-136.8c8.1-8.1 21.2-8.1 29.3,0 8.1,8.1 8.1,21.2 0,29.3z" />
                                        </g>
                                    </svg>
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__content">
                                        <div class="uix-card--gallery__content__child">
                                            <div class="uix-card--gallery__content__child--left">
                                                <div>
                                                    <!-- content begin -->
                                                    <span style="margin: 0 10px 10px; display: block;">
                                                        <h5 style="margin: 10px 0; margin-bottom: 0; padding-bottom: 0;">Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title Long title</h5>
                                                        <small class="uix-typo--color-sub">0/15/18</small>
                                                    </span>
                                                    <!-- content end -->
                                                </div>
                                            </div>
                                            <div class="uix-card--gallery__content__child--right" style="min-width: 50px;">
                                                <!-- content begin -->
                                                <div class="uix-card--gallery__action" style="margin: 10px;">
                                                    <button aria-haspopup="true">
                                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                    </button>
                                                </div>  
                                                <!-- content end -->
                                            </div>   
                                        </div>
                                    </div>
                                </div>    
                            </div>        
                        </div>                                           
                    </div>
                    <!-- .row end -->    
                    <hr>
                    <div class="row">
                         <div class="col-12">
                            <div class="uix-card--gallery uix-card--gallery--horizontal" role="figure">
                                <div class="uix-card--gallery__preview uix-core-grid__col-8 uix-core-grid__mobile-stack" data-bg='{"src":"{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg","position":"center center","size":"cover","repeat":"no-repeat","fill":false,"offsetTop":0,"parallax":0}'>
                                    <!-- image begin -->
                                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg" alt="">
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <span style="margin: 30px; display: block;">
                                                <small class="uix-typo--color-sub">Categories</small>
                                                <h3>Full-stack Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, voluptatum, perferendis ad impedit iste assumenda et laborum doloribus optio molestiae perspiciatis modi quaerat corrupti velit cupiditate eligendi tempora temporibus vel.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, voluptatum, perferendis ad impedit iste assumenda et laborum doloribus optio molestiae perspiciatis modi quaerat corrupti velit cupiditate eligendi tempora temporibus vel. consectetur adipisicing elit. Saepe, voluptatum, perferendis ad impedit iste assumenda et laborum doloribus optio molestiae perspiciatis modi quaerat corrupti velit cupiditate eligendi tempora temporibus vel</p>
                                            </span>
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>                                      
                    </div>
                    <!-- .row end -->    
                    <hr>
                    <div class="row">
                         <div class="col-12">
                            <div class="uix-card--gallery uix-card--gallery--horizontal" role="figure">
                                <div class="uix-card--gallery__preview uix-core-grid__col-4 uix-core-grid__mobile-stack" data-bg='{"src":"{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x600.jpg","position":"center center","size":"cover","repeat":"no-repeat","fill":false,"offsetTop":0,"parallax":0}'>
                                    <!-- image begin -->
                                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x600.jpg">
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <span style="margin: 30px; display: block;">
                                                <small class="uix-typo--color-sub">Categories</small>
                                                <h3>Full-stack Designer</h3>
                                                <p>Focus on user interface, user experience, awesome websites, front-end and WordPress development.</p>
                                            </span>
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>                                      
                    </div>
                    <!-- .row end -->    
                    <hr>
                    <div class="row">
                         <div class="col-lg-6 col-md-6">
                            <div class="uix-card--gallery" role="figure">
                                <div class="uix-card--gallery__preview uix-core-grid__col-12 uix-core-grid__mobile-stack">
                                    <!-- image begin -->
                                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x600.jpg" alt="">
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <span style="margin: 30px; display: block;">
                                                <small class="uix-typo--color-sub">Categories</small>
                                                <h3>Full-stack Designer</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, voluptatum, perferendis ad impedit iste assumenda et laborum doloribus optio molestiae perspiciatis modi quaerat corrupti velit cupiditate eligendi tempora temporibus vel.</p>
                                            </span>
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>                        
                         <div class="col-lg-6 col-md-6">
                            <div class="uix-card--gallery uix-card--gallery--overlay" role="figure">
                                <div class="uix-card--gallery__preview uix-core-grid__col-12 uix-core-grid__mobile-stack">
                                    <!-- image begin -->
                                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg" alt="">
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <span class="uix-typo--color-white" style="margin: 30px; display: block;">
                                                <small class="uix-typo--color-sub">Categories</small>
                                                <h4 class="uix-spacing--no">Full-stack Designer</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </span>
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>               
                    </div>
                    <!-- .row end -->    
                    <hr>
                    <div class="row">
                         <div class="col-12">
                            <div class="uix-card--gallery" role="figure">
                                <div class="uix-card--gallery__preview uix-core-grid__col-12 uix-core-grid__mobile-stack">
                                    <!-- image begin -->
                                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x309.jpg" alt="">
                                    <!-- image end -->
                                    <!-- icons begin -->
                                    <div class="uix-card--gallery__status">
                                        <div class="uix-card--gallery__status__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.33 469.33" fill="currentColor">
                                                <path d="M320 213.33c35.3 0 63.79-28.69 63.79-64 0-35.3-28.48-64-63.79-64-35.3 0-64 28.7-64 64 0 35.31 28.7 64 64 64zM149.33 213.33c35.31 0 63.79-28.69 63.79-64 0-35.3-28.48-64-63.79-64-35.3 0-64 28.7-64 64 0 35.31 28.7 64 64 64zM149.33 256C99.52 256 0 280.96 0 330.67V384h298.67v-53.33c0-49.71-99.52-74.67-149.34-74.67zM320 256c-6.19 0-13.12.43-20.59 1.17 24.75 17.82 41.92 41.82 41.92 73.5V384h128v-53.33c0-49.71-99.52-74.67-149.33-74.67z"></path>
                                            </svg>3,3434</div>
                                        <div class="uix-card--gallery__status__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 469.33 469.33">
                                                <path d="M234.67 170.67c-35.31 0-64 28.69-64 64s28.69 64 64 64 64-28.7 64-64-28.7-64-64-64z"></path>
                                                <path d="M234.67 74.67C128 74.67 36.9 141 0 234.67c36.9 93.65 128 160 234.67 160 106.77 0 197.76-66.35 234.66-160-36.9-93.66-127.89-160-234.66-160zm0 266.66c-58.88 0-106.67-47.78-106.67-106.66S175.79 128 234.67 128s106.66 47.79 106.66 106.67-47.78 106.66-106.66 106.66z"></path>
                                            </svg>124</div>
                                        <div class="uix-card--gallery__status__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 475.43 475.43">
                                                <path d="M306.9 164.57l78.9-86.2a7.83 7.83 0 001.56-8.36 8.36 8.36 0 00-7.3-4.7h-253.4s-3.13 0-3.13.52v-9.4a26.12 26.12 0 0021.94-27.7A28.73 28.73 0 00117.26 0a29.78 29.78 0 00-29.78 28.73 30.82 30.82 0 0020.37 27.7v411.16a7.84 7.84 0 0015.68 0V263.84h256.52c3.2.2 6.17-1.7 7.31-4.7a8.36 8.36 0 00-1.56-8.36l-78.9-86.2z"></path>
                                            </svg>June 1</div>
                                        <div class="uix-card--gallery__status__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 411.14 411.14">
                                                <path d="M350.2 54.53H61.45C27.64 54.53 0 82.18 0 115.97v179.2c0 33.8 27.65 61.44 61.44 61.44H349.7c33.79 0 61.44-27.65 61.44-61.44v-179.2c.5-33.8-27.14-61.44-60.93-61.44zM287.75 210.7a11.96 11.96 0 01-3.58 3.59l-119.3 70.65a9.93 9.93 0 01-13.82-3.58 8.65 8.65 0 01-1.54-5.12V134.92c0-5.64 4.61-10.24 10.24-10.24 1.54 0 3.59.5 5.12 1.53l119.3 70.66c4.6 3.07 6.66 9.21 3.58 13.82z"></path>
                                            </svg>13</div>
                                    </div>      
                                    <!-- icons end -->                                              
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <span style="margin: 30px; display: block;">
                                                <h4 class="uix-spacing--no">Full-stack Designer</h4>
                                            </span>
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>               
                    </div>
                    <!-- .row end -->    
                    <hr>
                    <div class="row">
                         <div class="col-12">
                            <div class="uix-card--gallery" role="figure">
                                <div class="uix-card--gallery__preview uix-core-grid__col-12 uix-core-grid__mobile-stack">
                                    <!-- image begin -->
                                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x309.jpg" alt="">
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <!-- menu group begin -->
                                            <div class="uix-card--gallery__menu">
                                                <div class="uix-card--gallery__menu__avatar">
                                                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg" alt="" class="uix-border--circle">
                                                    <span>UIUX Lab</span>
                                                </div>
                                                <div class="uix-card--gallery__menu__items">
                                                    <a>Link 1</a>
                                                    <a class="is-active">Link 2</a>
                                                    <a>Link 3</a>
                                                    <a>Link 4</a>
                                                </div>
                                                <div class="uix-card--gallery__menu__action">
                                                    <button>2,321</button>
                                                    <button>Follow</button>
                                                </div>
                                            </div>
                                            <!-- menu group end -->
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>               
                    </div>
                    <!-- .row end -->    
                    <hr>
                    <div class="row">
                         <div class="col-12">
                            <div class="uix-card--gallery uix-card--gallery--overlay" role="figure">
                                <div class="uix-card--gallery__preview uix-core-grid__col-12 uix-core-grid__mobile-stack">
                                    <!-- image begin -->
                                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg" alt="">
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body uix-core-grid__col-5 uix-core-grid__mobile-stack">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <span class="uix-typo--color-white" style="margin: 30px; display: block;">
                                                <small class="uix-typo--color-sub">Categories</small>
                                                <h4 class="uix-spacing--no">Full-stack Designer</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </span>
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>               
                    </div>
                    <!-- .row end -->    
                    <hr>
                    <div class="row">
                         <div class="col-12">
                            <div class="uix-card--gallery uix-card--gallery--overlay" role="figure">
                                <div class="uix-card--gallery__preview uix-core-grid__col-12 uix-core-grid__mobile-stack">
                                    <!-- image begin -->
                                    <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x1080.jpg" alt="">
                                    <!-- image end -->
                                </div>
                                <div class="uix-card--gallery__body uix-card--gallery__body--verticalCenter uix-core-grid__col-5 uix-core-grid__mobile-stack">
                                    <div class="uix-card--gallery__header">
                                        <div class="uix-card--gallery__header__child">
                                            <!-- content begin -->
                                            <span class="uix-typo--color-white" style="margin: 30px; display: block;">
                                                <h4 class="uix-spacing--no">Full-stack Designer</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <a href="#" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--secondary is-pill is-fill-white">Check Out</a>
                                            </span>
                                            <!-- content end -->
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>               
                    </div>
                    <!-- .row end -->                           
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
                <h3>Author Card</h3>
                <p>Author Card is a very popular used web page element that can display a lot of key information.</p>
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
                    <div class="uix-card--author">
                        <div class="uix-card--author__header">
                            <div class="uix-card--author__text uix-f-l">
                                <h3>Full-stack Designer</h3> <a href="https://uiux.cc" target="_blank">@https://uiux.cc</a> 
                            </div>
                            <div class="uix-card--author__preview uix-border--circle uix-border--circle-only-img uix-f-r"> <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg" alt="" class="uix-border--circle"> </div>
                        </div>
                        <div class="uix-card--author__content"> Hi. I'm a full-stack designer on the way of pursuing the dream. Focus on user interface, user experience, awesome websites, front-end and WordPress development. I want to build things I can be proud of. I approach some awesome design challenges with an eye on the latest trends and strive to align my work the industry current best practices, while leveraging the acquired experience on the field. I have been working so hard to build up self. My personal website: https://uiux.cc </div> 
                        <a class="uix-card--author__jump" href="#" rel="author"><i class="fa fa-external-link" aria-hidden="true"></i></a> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="uix-card--author uix-card--author--noborder uix-t-c">
                                <div class="uix-card--author__header">
                                    <div class="uix-card--author__preview uix-border--circle uix-border--circle-only-img"> 
                                        <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg" alt="" class="uix-border--circle"> 
                                    </div>
                                </div>
                                <div class="uix-card--author__content uix-card--author__content--rounded"> 
                                    <h4 class="uix-t-c">Full-stack Designer</h4>
                                    <div class="uix-equal-width-divs uix-equal-width-divs--no-break">
                                        <ul>
                                            <li><h3>223</h3><span>Web Design</span></li>
                                            <li><h3>13</h3><span>UI</span></li>
                                            <li><h3>5</h3><span>SEO</span></li>
                                        </ul>
                                    </div>
                                    <!-- .uix-equal-width-divs  end -->
                                    <p>
                                        Hi. I'm a full-stack designer on the way of pursuing the dream. Focus on user interface, user experience, awesome websites, front-end and WordPress development.
                                    </p>
                                </div>
                            </div>
                        </div>     
                        <div class="col-lg-6 col-md-6">
                            <div class="uix-card--author uix-card--author--noborder uix-card--author--stats">
                                <div class="uix-card--author__header">
                                    <div class="uix-card--author__preview uix-card--author__preview--rounded uix-card--author__preview--jumpOut"> 
                                        <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg" alt=""> 
                                    </div>
                                </div>
                                <div class="uix-card--author__content uix-card--author__content--rounded  uix-t-r"> 
                                    <div class="uix-card--author__tagline">Revenue</div>
                                    <h4 class="uix-typo--style-normal">$34,245</h4>
                                    <hr>
                                    <i class="fa fa-calendar" aria-hidden="true"></i> Last 24 Hours
                                </div>
                            </div>
                        </div>     
                    </div>
                    <!-- .row end -->    
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>   
        </main>
@endsection

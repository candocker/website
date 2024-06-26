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
                <h3>List Posts</h3>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>    
           <!-- Content 
====================================================== -->
<div class="uix-spacing--s">
    <div class="container">
            <div class="row">
                <div class="col-12 uix-trans uix-filter-hover--color">
                    <div class="uix-list-topic">
                            <!-- List Item -->
                            <article class="uix-list-topic__item uix-list-topic__item--style-2">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 uix-list-topic__item__img uix-trans">
                                        <a href="#"> 
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="" />
                                        </a>
                                    </div><!-- /.col-lg-4.col-md-4  -->
                                    <div class="col-lg-8 col-md-8">
                                        <div class="uix-list-topic__item__info uix-trans">
                                            <div class="uix-core-grid__col-5 uix-core-grid__mobile-half">
                                                <h3>
                                                     <a href="#">
                                                         Project Title Here
                                                     </a>
                                                </h3>
                                            </div>
                                            <div class="uix-core-grid__col-7 uix-core-grid__mobile-half">
                                                <div class="uix-core-grid__col-5 uix-core-grid__mobile-stack">
                                                    <p><strong>Author:</strong> David</p>
                                                    <p><strong>Date:</strong> December 10, 2017</p>
                                                </div>
                                                <div class="uix-core-grid__col-7 uix-core-grid__mobile-stack">
                                                    <p><strong>Comments:</strong> 20</p>
                                                    <p><strong>Categories:</strong> Art, Design</p>
                                                </div>    
                                            </div>    
                                        </div><!-- /.uix-list-topic__item__info -->
                                        <div class="uix-clearfix"></div>
                                        <div class="uix-list-topic__item__addition uix-list uix-list--normal uix-table uix-table--bordered">
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                             <div class="uix-tags-box">
                                                 <a href="#">Tag</a>
                                                 <a href="#">Video</a>
                                                 <a href="#">Web Design</a>
                                             </div>
                                        </div>
                                    </div><!-- /.col-lg-8.col-md-8  -->
                                </div>
                                <!-- .row  end -->
                            </article>
                            <!-- List Item  end --> 
                            <!-- List Item -->
                            <article class="uix-list-topic__item uix-list-topic__item--style-2">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 uix-list-topic__item__img uix-trans">
                                        <a href="#"> 
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="" />
                                        </a>
                                    </div><!-- /.col-lg-4.col-md-4  -->
                                    <div class="col-lg-8 col-md-8">
                                        <div class="uix-list-topic__item__info uix-trans">
                                            <div class="uix-core-grid__col-5 uix-core-grid__mobile-half">
                                                <h3>
                                                     <a href="#">
                                                         Project Title Here - The Long Title Here. The Long Title Here.  The Long Title Here. The Long Title Here. The Long Title Here.
                                                     </a>
                                                </h3>
                                            </div>
                                            <div class="uix-core-grid__col-7 uix-core-grid__mobile-half">
                                                <div class="uix-core-grid__col-5 uix-core-grid__mobile-stack">
                                                    <p><strong>Author:</strong> David</p>
                                                    <p><strong>Date:</strong> December 10, 2017</p>
                                                </div>
                                                <div class="uix-core-grid__col-7 uix-core-grid__mobile-stack">
                                                    <p><strong>Comments:</strong> 20</p>
                                                    <p><strong>Categories:</strong> Art, Design</p>
                                                </div>    
                                            </div>    
                                        </div><!-- /.uix-list-topic__item__info -->
                                        <div class="uix-clearfix"></div>
                                        <div class="uix-list-topic__item__addition uix-list uix-list--normal uix-table uix-table--bordered">
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                             <div class="uix-tags-box">
                                                 <a href="#">Tag</a>
                                                 <a href="#">Video</a>
                                                 <a href="#">Web Design</a>
                                             </div>
                                        </div>
                                    </div><!-- /.col-lg-8.col-md-8  -->
                                </div>
                                <!-- .row  end -->
                            </article>
                            <!-- List Item  end --> 
                            <!-- List Item -->
                            <article class="uix-list-topic__item uix-list-topic__item--style-2">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 uix-list-topic__item__img uix-trans">
                                        <a href="#"> 
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="" />
                                        </a>
                                    </div><!-- /.col-lg-4.col-md-4  -->
                                    <div class="col-lg-8 col-md-8">
                                        <div class="uix-list-topic__item__info uix-trans">
                                            <div class="uix-core-grid__col-5 uix-core-grid__mobile-half">
                                                <h3>
                                                     <a href="#">
                                                         Project Title Here
                                                     </a>
                                                </h3>
                                            </div>
                                            <div class="uix-core-grid__col-7 uix-core-grid__mobile-half">
                                                <div class="uix-core-grid__col-5 uix-core-grid__mobile-stack">
                                                    <p><strong>Author:</strong> David</p>
                                                    <p><strong>Date:</strong> December 10, 2017</p>
                                                </div>
                                                <div class="uix-core-grid__col-7 uix-core-grid__mobile-stack">
                                                    <p><strong>Comments:</strong> 20</p>
                                                    <p><strong>Categories:</strong> Art, Design</p>
                                                </div>    
                                            </div>    
                                        </div><!-- /.uix-list-topic__item__info -->
                                        <div class="uix-clearfix"></div>
                                        <div class="uix-list-topic__item__addition uix-list uix-list--normal uix-table uix-table--bordered">
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac.</p>
                                             <p>People think focus means saying yes to the thing you&#8217;ve got to focus on. But that&#8217;s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I&#8217;m actually as proud of the things we haven&#8217;t done as the things I have done. Innovation is saying no to 1,000 things. <cite>Steve Jobs &#8211; Apple Worldwide Developers&#8217; Conference, 1997</cite></p>
                                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac.</p>
                                             <div class="uix-tags-box">
                                                 <a href="#">Tag</a>
                                                 <a href="#">Video</a>
                                                 <a href="#">Web Design</a>
                                             </div>
                                        </div>
                                    </div><!-- /.col-lg-8.col-md-8  -->
                                </div>
                                <!-- .row  end -->
                            </article>
                            <!-- List Item  end --> 
                    </div><!-- /.uix-list-topic -->
                </div>
                <!-- .col-12 end -->
            </div>
            <!-- .row end -->
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
<!-- Content 
====================================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>List Posts (Simple)</h3>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>    
           <!-- Content 
====================================================== -->
<div class="uix-spacing--s">
    <div class="container">
            <div class="row">
                <div class="col-12 uix-trans uix-filter-hover--color">
                    <div class="uix-list-topic">
                            <!-- List Item -->
                            <article class="uix-list-topic__item style-1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 uix-list-topic__item__img uix-trans">
                                        <a href="#"> 
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="" />
                                        </a>
                                    </div><!-- /.col-lg-4.col-md-4  -->
                                    <div class="col-lg-8 col-md-8 uix-list-topic__item__info">
                                        <div class="uix-core-grid__col-9 uix-core-grid__mobile-stack">
                                            <h3>
                                                <a href="#">
                                                    Project Title Here
                                                </a>
                                            </h3>
                                            <p>
                                                <strong>Author:</strong> Chuckie Chang, 
                                                <strong>Comment:</strong> 0
                                            </p>
                                        </div>
                                        <div class="uix-core-grid__col-3 uix-core-grid__mobile-stack">
                                            <p class="uix-f-r">
                                                <a class="uix-list-topic__item__more" href="#">More</a>
                                                <div class="uix-list-topic__item__more-bg"></div>
                                            </p>
                                        </div>    
                                    </div><!-- /.col-lg-8.col-md-8  -->
                                </div>
                                <!-- .row  end -->
                            </article>
                            <!-- List Item  end --> 
                            <!-- List Item -->
                            <article class="uix-list-topic__item style-1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 uix-list-topic__item__img uix-trans">
                                        <a href="#"> 
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="" />
                                        </a>
                                    </div><!-- /.col-lg-4.col-md-4  -->
                                    <div class="col-lg-8 col-md-8 uix-list-topic__item__info">
                                        <div class="uix-core-grid__col-9 uix-core-grid__mobile-stack">
                                            <h3>
                                                <a href="#">
                                                    Project Title Here - The Long Title Here. The Long Title Here.  The Long Title Here. The Long Title Here. The Long Title Here.
                                                </a>
                                            </h3>
                                            <p>
                                                <strong>Author:</strong> Chuckie Chang, 
                                                <strong>Comment:</strong> 0
                                            </p>
                                        </div>
                                        <div class="uix-core-grid__col-3 uix-core-grid__mobile-stack">
                                            <p class="uix-f-r">
                                                <a class="uix-list-topic__item__more" href="#">More</a>
                                                <div class="uix-list-topic__item__more-bg"></div>
                                            </p>
                                        </div>    
                                    </div><!-- /.col-lg-8.col-md-8  -->
                                </div>
                                <!-- .row  end -->
                            </article>
                            <!-- List Item  end --> 
                            <!-- List Item -->
                            <article class="uix-list-topic__item style-1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 uix-list-topic__item__img uix-trans">
                                        <a href="#"> 
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="" />
                                        </a>
                                    </div><!-- /.col-lg-4.col-md-4  -->
                                    <div class="col-lg-8 col-md-8 uix-list-topic__item__info">
                                        <div class="uix-core-grid__col-9 uix-core-grid__mobile-stack">
                                            <h3>
                                                <a href="#">
                                                    Project Title Here
                                                </a>
                                            </h3>
                                            <p>
                                                <strong>Author:</strong> Chuckie Chang, 
                                                <strong>Comment:</strong> 0
                                            </p>
                                        </div>
                                        <div class="uix-core-grid__col-3 uix-core-grid__mobile-stack">
                                            <p class="uix-f-r">
                                                <a class="uix-list-topic__item__more" href="#">More</a>
                                                <div class="uix-list-topic__item__more-bg"></div>
                                            </p>
                                        </div>    
                                    </div><!-- /.col-lg-8.col-md-8  -->
                                </div>
                                <!-- .row  end -->
                            </article>
                            <!-- List Item  end --> 
                    </div><!-- /.uix-list-topic -->
                </div>
                <!-- .col-12 end -->
            </div>
            <!-- .row end -->
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
<!-- Content 
====================================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>List Posts With Bootstrap (Split & Center vertically)</h3>
                <p>Overlay the class <code>.js-uix-common-height</code> on the <code>.row</code>, then add a div <code>&lt;div class=&quot;uix-v-align--relative&quot;&gt; ... &lt;/div&gt;</code></p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>    
           <!-- Content 
====================================================== -->
<div class="uix-spacing--s">
    <div class="container">
            <div class="row">
                <div class="col-12 uix-trans uix-filter-hover--color">
                   <div class="uix-list-split">
                       <!-- List Item --> 
                       <article class="uix-list-split__item">
                            <div class="row js-uix-common-height">
                                <div class="col-sm-6">
                                     <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="" />
                                </div>
                                <div class="col-sm-6 uix-list-split__item__info">
                                    <div class="uix-v-align--relative">
                                            <h3>
                                                 <a href="#">
                                                     Project Title Here
                                                 </a>
                                            </h3>
                                             <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                    </div>
                                </div>           
                            </div>
                            <!-- .row end -->
                        </article>
                        <!-- List Item  end --> 
                       <!-- List Item --> 
                       <article class="uix-list-split__item is-reversed">
                            <div class="row js-uix-common-height">
                                <div class="col-sm-6">
                                     <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="" />
                                </div>
                                <div class="col-sm-6 uix-list-split__item__info">
                                    <div class="uix-v-align--relative">
                                            <h3>
                                                 <a href="#">
                                                     Project Title Here - The Long Title Here. The Long Title Here.  The Long Title Here. The Long Title Here. The Long Title Here.
                                                 </a>
                                            </h3>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac.</p>
                                    </div>
                                </div>           
                            </div>
                            <!-- .row end -->
                        </article>
                        <!-- List Item  end --> 
                       <!-- List Item --> 
                       <article class="uix-list-split__item">
                            <div class="row js-uix-common-height">
                                <div class="col-sm-6">
                                     <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="" />
                                </div>
                                <div class="col-sm-6 uix-list-split__item__info">
                                    <div class="uix-v-align--relative">
                                            <h3>
                                                 <a href="#">
                                                     Project Title Here
                                                 </a>
                                            </h3>
                                             <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                    </div>
                                </div>           
                            </div>
                            <!-- .row end -->
                        </article>
                        <!-- List Item  end --> 
                       <!-- List Item --> 
                       <article class="uix-list-split__item is-reversed">
                            <div class="row js-uix-common-height">
                                <div class="col-sm-6">
                                     <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-4.jpg" alt="" />
                                </div>
                                <div class="col-sm-6 uix-list-split__item__info">
                                    <div class="uix-v-align--relative">
                                            <h3>
                                                 <a href="#">
                                                     Project Title Here
                                                 </a>
                                            </h3>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac.</p>
                                             <p>People think focus means saying yes to the thing you&#8217;ve got to focus on. But that&#8217;s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I&#8217;m actually as proud of the things we haven&#8217;t done as the things I have done. Innovation is saying no to 1,000 things. <cite>Steve Jobs &#8211; Apple Worldwide Developers&#8217; Conference, 1997</cite></p>
                                    </div>
                                </div>           
                            </div>
                            <!-- .row end -->
                        </article>
                        <!-- List Item  end -->     
                   </div><!-- /.uix-list-split -->        
                </div>
                <!-- .col-12 end -->
            </div>
            <!-- .row end -->
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
<!-- Content 
====================================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>List Posts With Uix Grid (Split & Center vertically)</h3>
                <p>Overlay the class <code>.js-uix-common-height</code> on the <code>.uix-core-grid__row</code>, then add a div <code>&lt;div class=&quot;uix-v-align--relative&quot;&gt; ... &lt;/div&gt;</code></p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
           <!-- Content 
====================================================== -->
<div class="uix-spacing--s">
    <div class="container">
            <div class="row">
                <div class="col-12 uix-trans uix-filter-hover--color">
                       <div class="uix-list-split">
                           <!-- List Item --> 
                           <article class="uix-list-split__item">
                                <div class="uix-core-grid js-uix-common-height">
                                    <div class="uix-core-grid__row js-uix-common-height">
                                        <div class="uix-core-grid__col-6">
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="" />
                                        </div>
                                        <div class="uix-core-grid__col-6 uix-list-split__item__info">
                                            <div class="uix-v-align--relative">
                                                    <h3>
                                                         <a href="#">
                                                             Project Title Here
                                                         </a>
                                                    </h3>
                                                     <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                            </div>    
                                        </div>
                                    </div>
                                    <!-- .uix-core-grid__row  end -->
                                </div>
                                <!-- /.uix-core-grid -->
                            </article>
                            <!-- List Item  end --> 
                           <!-- List Item --> 
                           <article class="uix-list-split__item is-reversed">
                                <div class="uix-core-grid">
                                    <div class="uix-core-grid__row js-uix-common-height">
                                        <div class="uix-core-grid__col-6">
                                            <img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="" />
                                        </div>
                                        <div class="uix-core-grid__col-6 uix-list-split__item__info">
                                            <div class="uix-v-align--relative">
                                                    <h3>
                                                         <a href="#">
                                                             Project Title Here
                                                         </a>
                                                    </h3>
                                                     <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                            </div>    
                                        </div>
                                    </div>
                                    <!-- .uix-core-grid  end -->
                                </div>
                                <!-- /.uix-core-grid -->
                            </article>
                            <!-- List Item  end --> 
                       </div><!-- /.uix-list-split -->        
                </div>
                <!-- .col-12 end -->
            </div>
            <!-- .row end -->
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

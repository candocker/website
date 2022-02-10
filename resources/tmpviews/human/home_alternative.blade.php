@extends('layouts.human')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('bodyClass')class="boxed"@endsection
@section('content')
<section id="slider_wrapper" class="container">
     <div id="main_flexslider" class="flexslider">
          <ul class="slides">
               <li class="item" style="background-image: url({{$commonAssetUrl}}/human/images/s1.jpg)">
                    <div class="container">
                         <div class="carousel-caption">
                              <h1>a <strong>flexible</strong> theme<br />
                                   you can <strong>trust</strong> & <strong>build upon</strong>!</h1>
                              <p class="lead">{re}<strong>start</strong> is based on <strong>good typography</strong> and <strong>large photography</strong>, serving as a foundation for your creative projects. Feel free to browse its templates and discover its features.</p>
                         </div>
                    </div>
               </li>
               <li class="item" style="background-image: url({{$commonAssetUrl}}/human/images/s2.jpg)">
                    <div class="container">
                         <div class="carousel-caption">
                              <h1>makes <strong>real use</strong><br />
                                   of the power of <strong>{LESS}</strong> syntax!</h1>
                              <p class="lead inverse">{re}start was built with heavy use of {less} technology, making the life of the web developer easier!</p>
                         </div>
                    </div>
               </li>
               <li class="item" style="background-image: url({{$commonAssetUrl}}/human/images/s3.jpg)">
                    <div class="container">
                         <div class="carousel-caption">
                              <h1 class="inverse"><strong>subtle</strong> animations<br />
                                   & a fresh collapsing <strong>header effect</strong></h1>
                              <p class="lead">if you are looking for <a href="services.html"><strong>a bold approach</strong></a> you will love the header effect,<br />
                                   but even if you like <a href="page_alternative.html"><strong>a more conservative feel</strong></a>, you can always try the boxed alternative!</p>
                         </div>
                    </div>
               </li>
          </ul>
     </div>
</section>
<div id="main">
     <div class="container">
          <section id="features_teasers_wrapper">
               <div class="row">
                    <div class="span4 feature_teaser"> <img alt="responsive" src="{{$commonAssetUrl}}/human/images/responsive.png" />
                         <h3>Clean, Responsive Design</h3>
                         <p>A multipurpose but mainly<strong> business oriented</strong> design, built to serve as a foundation for your web projects. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>
                    </div>
                    <div class="span4 feature_teaser"> <img alt="responsive" src="{{$commonAssetUrl}}/human/images/git.png" />
                         <h3>Based on Twitter Bootstrap</h3>
                         <p>The front-end development framework with a <strong>steep learning curve</strong>. It changes the way you develop sites. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>
                    </div>
                    <div class="span4 feature_teaser"> <img alt="responsive" src="{{$commonAssetUrl}}/human/images/less.png" />
                         <h3>Makes real use of {LESS}</h3>
                         <p>{re}<strong>start</strong> comes with a style.less file that tries to use all the power of <strong>{less} and bootstrap combined</strong>. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>
                    </div>
               </div>
          </section>
          <section id="portfolio_teasers_wrapper">
               <h2 class="section_header">Recent Work or Projects from Portfolio</h2>
               <div class="portfolio_strict row">
                    <div class="portfolio_item span3">
                         <div class="portfolio_photo" style="background-image:url({{$commonAssetUrl}}/human/images/portfolio/a1.jpg)"> <a href="portfolio_item.html"> <i class="icon-2x icon-external-link"></i>
                              <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum...</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              <p>artists</p>
                         </div>
                    </div>
                    <div class="portfolio_item span3">
                         <div class="portfolio_photo" style="background-image:url({{$commonAssetUrl}}/human/images/portfolio/t5.jpg)"> <a href="portfolio_item.html"> <i class="icon-2x icon-external-link"></i>
                              <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum...</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              <p>travel</p>
                         </div>
                    </div>
                    <div class="portfolio_item span3">
                         <div class="portfolio_photo" style="background-image:url({{$commonAssetUrl}}/human/images/portfolio/p3.jpg)"> <a href="portfolio_item.html"> <i class="icon-2x icon-external-link"></i>
                              <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum...</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              <p>people</p>
                         </div>
                    </div>
                    <div class="portfolio_item span3">
                         <div class="portfolio_photo" style="background-image:url({{$commonAssetUrl}}/human/images/portfolio/t4.jpg)"> <a href="portfolio_item.html"> <i class="icon-2x icon-external-link"></i>
                              <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum...</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              <p>poetic</p>
                         </div>
                    </div>
               </div>
          </section>
     </div>
    @include('human.modules._footer')
</div>
@endsection

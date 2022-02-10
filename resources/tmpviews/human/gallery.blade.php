@extends('layouts.human')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('content')
<div id="main">
     <div class="container">
          <div class="hgroup">
               <h1>Masonry portfolio <small>or</small> photo gallery</h1>
               <h2>This is a mixture of portfolio items and photo gallery! We are using the Isotope Jquery plugin to filter results and Prettyphoto to open the lighbox. 
                    This is the<strong> Masonry Version</strong>, you should also check out the <a href="portfolio.html"><strong>strict version</strong></a>. All photos &copy; by <a href="http://www.cssmoban.com/" target="_blank">Dimitra Giannouka</a>.</h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                    <li class="active">Portfolio</li>
               </ul>
          </div>
          <ul id="portfolio_filters">
               <li><a href="#" data-filter="*">show all</a></li>
               <li><a href="#" data-filter=".cat_just_photos">just photos</a></li>
               <li><a href="#" data-filter=".cat_projects">whole projects</a></li>
          </ul>
          <div id="portfolio_container" class="portfolio_masonry row">
               <div class="portfolio_item cat_just_photos span4"> <a rel='prettyPhoto' href="images/portfolio/t2.jpg"> <img src="{{$commonAssetUrl}}/human/images/portfolio/t2.jpg" alt="The title of the photo" />
                    <div class="overlay">
                         <div class="desc"> <i class="icon-2x icon-resize-full"></i> </div>
                    </div>
                    </a> </div>
               <div class="portfolio_item cat_projects span4"> <a href="portfolio_item.html"> <img src="{{$commonAssetUrl}}/human/images/portfolio/a6.jpg" alt="Title of the project" />
                    <div class="overlay">
                         <div class="desc"> <i class="icon-2x icon-external-link"></i>
                              <h3>Title of the project</h3>
                              <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum...</p>
                         </div>
                    </div>
                    </a> </div>
               <div class="portfolio_item cat_just_photos span4"> <a rel='prettyPhoto' href="images/portfolio/b3.jpg"> <img src="{{$commonAssetUrl}}/human/images/portfolio/b3.jpg" alt="The title of the photo" />
                    <div class="overlay">
                         <div class="desc"> <i class="icon-2x icon-resize-full"></i> </div>
                    </div>
                    </a> </div>
               <div class="portfolio_item cat_projects span4"> <a href="portfolio_item.html"> <img src="{{$commonAssetUrl}}/human/images/portfolio/a4.jpg" alt="Title of the project" />
                    <div class="overlay">
                         <div class="desc"> <i class="icon-2x icon-external-link"></i>
                              <h3>Title of the project</h3>
                              <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum...</p>
                         </div>
                    </div>
                    </a> </div>
               <div class="portfolio_item cat_just_photos span4"> <a rel='prettyPhoto' href="images/portfolio/p4.jpg"> <img src="{{$commonAssetUrl}}/human/images/portfolio/p4.jpg" alt="The title of the photo" />
                    <div class="overlay">
                         <div class="desc"> <i class="icon-2x icon-resize-full"></i> </div>
                    </div>
                    </a> </div>
               <div class="portfolio_item cat_projects span4"> <a href="portfolio_item.html"> <img src="{{$commonAssetUrl}}/human/images/portfolio/t4.jpg" alt="Title of the project" />
                    <div class="overlay">
                         <div class="desc"> <i class="icon-2x icon-external-link"></i>
                              <h3>Title of the project</h3>
                              <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum...</p>
                         </div>
                    </div>
                    </a> </div>
               <div class="portfolio_item cat_just_photos span4"> <a rel='prettyPhoto' href="images/portfolio/t3.jpg"> <img src="{{$commonAssetUrl}}/human/images/portfolio/t3.jpg" alt="The title of the photo" />
                    <div class="overlay">
                         <div class="desc"> <i class="icon-2x icon-resize-full"></i> </div>
                    </div>
                    </a> </div>
               <div class="portfolio_item cat_projects span4"> <a href="portfolio_item.html"> <img src="{{$commonAssetUrl}}/human/images/portfolio/a3.jpg" alt="Title of the project" />
                    <div class="overlay">
                         <div class="desc"> <i class="icon-2x icon-external-link"></i>
                              <h3>Title of the project</h3>
                              <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum...</p>
                         </div>
                    </div>
                    </a> </div>
          </div>
     </div>
    @include('human.modules._footer')
</div>
@endsection

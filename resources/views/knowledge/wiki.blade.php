@extends('layouts.wiki')
@section('content')
  <div class="row">
    <div class="tm-section" id="tm-section-5">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h3 class="blue-text">Full-width large table</h3>

        <table class="table table-striped tm-full-width-large-table">
          <thead>
            <tr>
              <th>Title</th>
              <th>Description</th>
              <th>Category</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Row 1</td>
              <td>In consectetur et dolor eget mollis</td>
              <td>First</td>
              <td>$1,000</td>
            </tr>
            <tr>
              <td>Row 2</td>
              <td>Donec porta augue vitae egestas eleifend</td>
              <td>First</td>
              <td>$1,500</td>
            </tr>
            <tr>
              <td>Row 3</td>
              <td>Aliquam in nibh elementum</td>
              <td>Second</td>
              <td>$2,000</td>
            </tr>
            <tr>
              <td>Row 4</td>
              <td>Donec porta augue vitae egestas</td>
              <td>Second</td>
              <td>$2,500</td>
            </tr>
            <tr>
              <td>Row 5</td>
              <td>Nunc lacinia vehicula upsum</td>
              <td>Second</td>
              <td>$3,000</td>
            </tr>
            <tr>
              <td>Row 6</td>
              <td>Porttitor rhoncus vel vitae libero</td>
              <td>Third</td>
              <td>$3,500</td>
            </tr>
            <tr>
              <td>Row 7</td>
              <td>Nulla neque ligula, bibendum vitae</td>
              <td>Third</td>
              <td>$4,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div> <!-- tm-section -->
  </div>
  <div class="row">

    <div class="tm-navbar-container">

    <!-- navbar   -->
    <nav class="navbar navbar-full navbar-fixed-top">

      <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
        &#9776;
      </button>

      <div class="collapse navbar-toggleable-sm" id="tmNavbar">

        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#top">介绍</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tm-section-2">笔记</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tm-section-3">爱好</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tm-section-4">联系</a>
          </li>
          <li class="nav-item">
            <a class="nav-link external" href="columns.html">其他</a>
          </li>
        </ul>

      </div>

    </nav>

    </div>

   </div>

   <div class="row">
    <div class="tm-intro">

      <section id="tm-section-1">
        <div class="tm-container text-xs-center tm-section-1-inner">
          <img src="{{$commonAssetUrl}}/resumes/img/bg.jpg" alt="Logo" class="tm-logo" width="200">
          <h1 class="tm-site-name">皮蛋</h1>
          <p class="tm-intro-text">95年菜鸟程序员</p>
          <a href="#tm-section-2" class="tm-intro-link">继续</a>
        </div>
       </section>

    </div>
  </div>

  <div class="row gray-bg">

    <div id="tm-section-2" class="tm-section">
      <div class="tm-container tm-container-wide">
        <div class="tm-news-item">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-item-img-container">
            <img src="{{$commonAssetUrl}}/resumes/img/tm-600x300-01.jpg" alt="Image" class="img-fluid tm-news-item-img">
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container">
            <h2 class="tm-news-title dark-gray-text">Nulla molestie euismod</h2>
            <p class="tm-news-text">Lumino theme is a Bootstrap 4.0 mobile compatible layout for your website. Check "columns" page for one, two, three columns and tables.</p>
            <a href="#" class="btn tm-light-blue-bordered-btn tm-news-link">Preview</a>
          </div>
        </div>

        <div class="tm-news-item">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 flex-order-2 tm-news-item-img-container">
            <img src="{{$commonAssetUrl}}/resumes/img/tm-600x300-02.jpg" alt="Image" class="img-fluid tm-news-item-img">
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container flex-order-1">
            <h2 class="tm-news-title dark-gray-text">Nulla molestie euismod</h2>
            <p class="tm-news-text">You may download, modify and use this template as you wish. Lumino HTML5 template is a fully responsive mobile ready for any kind of website.</p>
            <a href="#" class="btn tm-light-blue-bordered-btn tm-news-link">Detail</a>
          </div>
        </div>

        <div class="tm-news-item">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-item-img-container">
            <img src="{{$commonAssetUrl}}/resumes/img/tm-600x300-03.jpg" alt="Image" class="img-fluid tm-news-item-img">
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container">
            <h2 class="tm-news-title dark-gray-text">Nulla molestie euismod</h2>
            <p class="tm-news-text">Credit goes to Unsplash for images used in this website template. Nulla sit amet tristique lacus. Etiam blandit ex vitae mauris gravida.</p>
            <a href="#" class="btn tm-light-blue-bordered-btn tm-news-link">Read</a>
          </div>
        </div>
      </div>
     </div>

   </div> <!-- row -->

  <div class="row">

    <section id="tm-section-3" class="tm-section">
      <div class="tm-container text-xs-center">

        <h2 class="blue-text tm-title">爱好拍照</h2>
        <p class="margin-b-5">听歌，看看球，吹吹牛逼</p>

        <div class="tm-img-grid">
          <div class="tm-gallery-img-container">
            <a href="img/tm-450x300-01.jpg" class="tm-gallery-img-link">
              <img src="{{$commonAssetUrl}}/resumes/img/tm-450x300-01.jpg" alt="Image" class="img-fluid tm-gallery-img"> <!-- 300x200 -->
            </a>
          </div>
          <div class="tm-gallery-img-container">
            <a href="img/tm-450x300-07.jpg" class="tm-gallery-img-link">
              <img src="{{$commonAssetUrl}}/resumes/img/tm-450x300-07.jpg" alt="Image" class="img-fluid tm-gallery-img">
            </a>
          </div>
          <div class="tm-gallery-img-container">
            <a href="img/tm-450x300-02.jpg" class="tm-gallery-img-link">
              <img src="{{$commonAssetUrl}}/resumes/img/tm-450x300-02.jpg" alt="Image" class="img-fluid tm-gallery-img">
            </a>
          </div>
          <div class="tm-gallery-img-container">
            <a href="img/tm-450x300-09.jpg" class="tm-gallery-img-link">
              <img src="{{$commonAssetUrl}}/resumes/img/tm-450x300-09.jpg" alt="Image" class="img-fluid tm-gallery-img">
            </a>
          </div>
          <div class="tm-gallery-img-container">
            <a href="img/tm-450x300-03.jpg" class="tm-gallery-img-link">
              <img src="{{$commonAssetUrl}}/resumes/img/tm-450x300-03.jpg" alt="Image" class="img-fluid tm-gallery-img">
            </a>
          </div>
          <div class="tm-gallery-img-container">
            <a href="img/tm-450x300-08.jpg" class="tm-gallery-img-link">
              <img src="{{$commonAssetUrl}}/resumes/img/tm-450x300-08.jpg" alt="Image" class="img-fluid tm-gallery-img">
            </a>
          </div>
          <div class="tm-gallery-img-container">
            <a href="img/tm-450x300-10.jpg" class="tm-gallery-img-link">
              <img src="{{$commonAssetUrl}}/resumes/img/tm-450x300-10.jpg" alt="Image" class="img-fluid tm-gallery-img">
            </a>
          </div>
          <div class="tm-gallery-img-container">
            <a href="img/tm-450x300-04.jpg" class="tm-gallery-img-link">
              <img src="{{$commonAssetUrl}}/resumes/img/tm-450x300-04.jpg" alt="Image" class="img-fluid tm-gallery-img">
            </a>
          </div>
          <div class="tm-gallery-img-container">
            <a href="img/tm-450x300-05.jpg" class="tm-gallery-img-link">
              <img src="{{$commonAssetUrl}}/resumes/img/tm-450x300-05.jpg" alt="Image" class="img-fluid tm-gallery-img">
            </a>
          </div>
          <div class="tm-gallery-img-container">
            <a href="img/tm-450x300-11.jpg" class="tm-gallery-img-link">
              <img src="{{$commonAssetUrl}}/resumes/img/tm-450x300-11.jpg" alt="Image" class="img-fluid tm-gallery-img">
            </a>
          </div>
          <div class="tm-gallery-img-container">
            <a href="img/tm-450x300-06.jpg" class="tm-gallery-img-link">
              <img src="{{$commonAssetUrl}}/resumes/img/tm-450x300-06.jpg" alt="Image" class="img-fluid tm-gallery-img">
            </a>
          </div>
          <div class="tm-gallery-img-container">
            <a href="img/tm-450x300-12.jpg" class="tm-gallery-img-link">
              <img src="{{$commonAssetUrl}}/resumes/img/tm-450x300-12.jpg" alt="Image" class="img-fluid tm-gallery-img">
            </a>
          </div>
        </div>
      </div>
    </section>

  </div> <!-- row -->

  <div class="row gray-bg">

    <section id="tm-section-4" class="tm-section">
      <div class="tm-container">

        <h2 class="blue-text tm-title text-xs-center">关于我</h2>

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
          <form action="index.html" method="post" class="tm-contact-form">
            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-form-group-left">
              <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-form-group-right">
              <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
            </div>
            <div class="form-group">
              <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
            </div>
            <div class="form-group">
              <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Message" required></textarea>
            </div>

            <button type="submit" class="btn tm-light-blue-bordered-btn pull-xs-right">提交</button>
          </form>
        </div> <!-- col -->

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 margin-top-xs-50">
          <h3 class="light-blue-text tm-subtitle">联系我</h3>
          <p>北京市海淀区中坤广场</p>
          <p>
            Tel: <a href="tel:0100200340">15613160729</a><br>
            Email: <a href="mailto:info@company.com">hsliukangle@163.com</a>
          </p>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="tm-footer">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <p class="text-xs-center tm-footer-text">Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
      </div>
    </footer>

  </div> <!-- row -->


<!-- load JS files -->

<script src="{{$commonAssetUrl}}/resumes/js/jquery-1.11.3.min.js"></script>
<script src="{{$commonAssetUrl}}/resumes/js/tether.min.js"></script>
<script src="{{$commonAssetUrl}}/resumes/js/bootstrap.min.js"></script>
<script src="{{$commonAssetUrl}}/resumes/js/jquery.singlePageNav.min.js"></script>
<script src="{{$commonAssetUrl}}/resumes/js/jquery.magnific-popup.min.js"></script>

<!-- Templatemo scripts -->
<script>

  $(document).ready(function(){

    var mobileTopOffset = 54;
    var desktopTopOffset = 80;
    var topOffset = desktopTopOffset;

    if($(window).width() <= 767) {
      topOffset = mobileTopOffset;
    }

    /* Single page nav
    -----------------------------------------*/
    $('#tmNavbar').singlePageNav({
       'currentClass' : "active",
      offset : topOffset,
      'filter': ':not(.external)'
    });

    /* Handle nav offset upon window resize
    -----------------------------------------*/
    $(window).resize(function(){
      if($(window).width() <= 767) {
        topOffset = mobileTopOffset;
      }
      else {
        topOffset = desktopTopOffset;
      }

      $('#tmNavbar').singlePageNav({
        'currentClass' : "active",
        offset : topOffset,
        'filter': ':not(.external)'
      });
    });


    /* Collapse menu after click
    -----------------------------------------*/
    $('#tmNavbar a').click(function(){
      $('#tmNavbar').collapse('hide');
    });

    /* Turn navbar background to solid color starting at section 2
    ---------------------------------------------------------------*/
    var target = $("#tm-section-2").offset().top - topOffset;

    if($(window).scrollTop() >= target) {
      $(".tm-navbar-container").addClass("bg-inverse");
    }
    else {
      $(".tm-navbar-container").removeClass("bg-inverse");
    }

    $(window).scroll(function(){

      if($(this).scrollTop() >= target) {
        $(".tm-navbar-container").addClass("bg-inverse");
      }
      else {
        $(".tm-navbar-container").removeClass("bg-inverse");
      }
    });


    /* Smooth Scrolling
    --------------------------------------------------------------*/
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

        if (target.length) {

          $('html, body').animate({
            scrollTop: target.offset().top - topOffset
          }, 1000);
          return false;
        }
      }
    });


    /* Magnific pop up
    ------------------------- */
    $('.tm-img-grid').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery: {enabled:true}
    });
  });

</script>

@endsection

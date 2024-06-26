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
                <h3>Testimonials Carousel</h3>
                <p>A nicely done testimonial carousel helps to build trust in your potential, but hesitant customers while it displays your testimonies in an appealing format.</p>
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
                    <div class="uix-testimonials">
                       <div class="uix-flexslider"
                             data-draggable="true" 
                             data-my-nav-thumbs="false"
                             data-my-prev-next-thumbs="false"
                             data-my-nav-timeline="false"
                             data-my-controls=".uix-testimonials__controls"
                             data-my-multiple-items="false"
                             data-my-multiple-items-move="1"
                             data-my-count-total=".uix-testimonials__count .uix-testimonials__count__total"
                             data-my-count-now=".uix-testimonials__count .uix-testimonials__count__cur"
                             data-my-parallax="false"
                             data-my-sync="false"
                             data-wheel="true"
                             data-speed="600" 
                             data-timing="10000" 
                             data-loop="true" 
                             data-paging="true" 
                             data-arrows="false" 
                             data-animation="slide" 
                             data-auto="true" 
                             data-prev="<i class='fa fa-chevron-left'></i>" 
                             data-next="<i class='fa fa-chevron-right'></i>">      
                            <div class="uix-flexslider__inner">
                                <div class="uix-flexslider__item">
                                    <div class="uix-testimonials__content">
                                        <p>Enter some details for the customer giving this testimonial., E.g., Thank you from the bottom of our hearts.</p>
                                        <div class="uix-testimonials__signature"> 
                                            <span class="uix-testimonials__signature--avatar uix-border--circle uix-border--circle-only-img"><img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg"></span>
                                            <strong class="uix-testimonials__signature__shorttext">Name</strong> - Position 
                                        </div>    
                                    </div>
                                </div>
                                <div class="uix-flexslider__item">
                                    <div class="uix-testimonials__content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duarum enim vitarum nobis erunt instituta capienda. Tamen aberramus a proposito, et, ne longius, prorsus, inquam, Piso, si ista mala sunt, placet. Quae fere omnia appellantur uno ingenii nomine, easque virtutes qui habent, ingeniosi vocantur. Ut proverbia non nulla veriora sint quam vestra dogmata. Ergo ita: non posse honeste vivi, nisi honeste vivatur? Duo Reges: constructio interrete. Obsecro, inquit, Torquate, haec dicit Epicurus? Sunt enim prima elementa naturae, quibus auctis vírtutis quasi germen efficitur.</p>
                                        <div class="uix-testimonials__signature"> 
                                            <span class="uix-testimonials__signature--avatar uix-border--circle uix-border--circle-only-img"><img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar.jpg"></span> 
                                            <strong class="uix-testimonials__signature__shorttext">Name</strong> - Position 
                                        </div>    
                                    </div>
                                </div>
                                <div class="uix-flexslider__item">
                                    <div class="uix-testimonials__content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duarum enim vitarum nobis erunt instituta capienda. Tamen aberramus a proposito, et, ne longius, prorsus, inquam, Piso, si ista mala sunt, placet. Quae fere omnia appellantur uno ingenii nomine, easque virtutes qui habent, ingeniosi vocantur. Ut proverbia non nulla veriora sint quam vestra dogmata. Ergo ita: non posse honeste vivi, nisi honeste vivatur? Duo Reges: constructio interrete. Obsecro, inquit, Torquate, haec dicit Epicurus? Sunt enim prima elementa naturae, quibus auctis vírtutis quasi germen efficitur.</p>
                                        <div class="uix-testimonials__signature"> 
                                            <span class="uix-testimonials__signature--no-avatar"></span> 
                                            <strong class="uix-testimonials__signature__shorttext">Name</strong> - Position 
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <!-- .uix-flexslider__inner end -->
                        </div>
                        <!-- .uix-flexslider end -->   
                    </div>
                    <!-- /.uix-testimonials -->
                     <div class="uix-flexslider__mycontrols__count uix-testimonials__count">
                         <span class="uix-testimonials__count__cur uix-typo--color-highlight"></span>/<span class="uix-testimonials__count__total"></span>
                     </div>
                    <div class="uix-flexslider__mycontrols uix-testimonials__controls">
                        <div class="uix-flexslider__mycontrols__control-paging"></div>
                    </div> 
                </div>
                <!-- .col-12 end -->
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

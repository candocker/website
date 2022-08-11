<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 col-sm-6">
                <div class="uix-el--transparent uix-border--rounded uix-border--rounded-img" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0.2,"infinite":false}' > 
                    <img src="{{$datas['info']['photoUrl']}}?x-oss-process=image/resize,m_pad,h_475,w_475" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-sm-12">
                <div class="uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}' >
                    <h3 class="uix-t-l uix-t-c--md">{!!$datas['info']['name']!!}</h3>
                    <p class="uix-t-l uix-t-c--md">
                        {{$datas['info']['description']}}
                    </p> 
                    <!--<p class="uix-t-l uix-t-c--md">
                        <a href="#" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary uix-btn__icon uix-btn__icon--left"><span><i class="fa fa-cogs" aria-hidden="true"></i></span>Free Download</a>
                    </p>-->
                </div>
            </div>
            <div class="col-12 col-lg-4 col-sm-6">
                <div class="uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0.4,"infinite":false}' >
                    <p>
                        <h3>Personal Information</h3>
                        <dl class="uix-list-abreast uix-list-abreast--icon">
                            <dt><i class="fa fa-location-arrow" aria-hidden="true"></i></dt>
                            <dd>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                <p>Eet lacinia odio sem nec elit.</p>
                            </dd>
                        </dl>
                        <dl class="uix-list-abreast uix-list-abreast--icon">
                            <dt><i class="fa fa-envelope" aria-hidden="true"></i></dt>
                            <dd>
                                <p>your@gmail.com </p>
                            </dd>
                        </dl>
                        <dl class="uix-list-abreast uix-list-abreast--icon">
                            <dt><i class="fa fa-phone" aria-hidden="true"></i></dt>
                            <dd>
                                <p>(1234) 12345678</p>
                            </dd>
                        </dl>                    
                        <dl class="uix-list-abreast uix-list-abreast--icon">
                            <dt><i class="fa fa-fax" aria-hidden="true"></i></dt>
                            <dd>
                                <p>(1234) 12345678</p>
                            </dd>
                        </dl>    
                    </p>
                    <hr>
                    <p>
                        <a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin" title="Follow us on Twitter" href="https://twitter.com/uiux_lab" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin" title="Follow us on Facebook" href="https://www.facebook.com/uiuxlabhome" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="uix-social-btn uix-social-btn--small uix-social-btn--circle uix-social-btn--thin" title="Fork on Github" href="https://github.com/xizon/uix-kit" target="_blank">
                            <i class="fa fa-github"></i>
                        </a> 
                    </p>                            
                </div>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section> 

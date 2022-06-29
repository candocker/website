<nav class="uix-menu__container">
<!--<nav class="uix-menu__container uix-trans">-->
    <div class="uix-menu__inner">
        <span class="uix-brand--mobile"><img src="{{$commonAssetUrl}}/website/assets/images/logo-colorful.png" alt="Uix Kit"></span>
        <ul class="uix-menu"> 
            <li class="multi-column current-menu-item is-active"><a href="#">aaaaa</a>
                <ul class="sub-menu">
                    <li>
                        <span class="multi-column-title">Web Elements (Basic)</span>
                        <ul class="sub-menu">
                            <li><a href="basic_equal-height-columns">Equal-height Columns</a></li>
                            <li><a href="3D-filmic-effects">3D Filmic Effects</a><span class="uix-bubble">new</span></li>
                            <li><a href="basic_align-wide-and-full-element">Align </a><span class="uix-bubble">new</span></li>
                        </ul>
                    </li>
                    <li>
                        <span class="multi-column-title">Web Elements (Part 2)</span>
                        <ul class="sub-menu">
                            <li><a href="flexslider">Flexslider<small style="font-size: 10px;background: #51B801; color:#fff; border-radius: 5px;padding: 2px 3px;display: inline-block;margin-left: 3px;">Third-party plugin</small></a></li>
                            <li><a href="swiper">Swiper<small style="font-size: 10px;background: #51B801; color:#fff; border-radius: 5px;padding: 2px 3px;display: inline-block;margin-left: 3px;">Third-party plugin</small></a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="multi-column-title">Column 1</span>
                        <ul class="sub-menu">
                            <li><a href="#">Sub Menu Title</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="multi-column-title">Column 2</span>
                        <ul class="sub-menu">
                            <li><a href="#">Sub Menu Title</a></li>
                        </ul>
                        <!-- .sub-menu  end -->
                    </li>
                    <li>
                        <span class="multi-column-title">Column 3</span>
                        <ul class="sub-menu">
                        </ul>
                        <!-- .sub-menu  end -->
                    </li>
                </ul>
            </li>

            <li class="multi-column"><a href="#">Mega Menu Two</a>
                <ul class="sub-menu">
                    <li><a>iooo</a><span class="uix-bubble">new</span></li>
                    <li>
                        <ul class="sub-menu">
                            <li><a href="#">Sub Menu Title</a></li>
                        </ul>
                        <!-- .sub-menu  end -->
                    </li>
                    <li>
                        <span class="multi-column-title">Column 2</span>
                        <ul class="sub-menu">
                            <li><a href="#">Sub Menu Title</a></li>
                        </ul>
                        <!-- .sub-menu  end -->
                    </li>
                </ul>
            </li>                            

            <li><a href="#">Dropdown</a>
                <ul class="sub-menu">
                    <li><a href="#">Dropdown 1</a>
                        <ul class="sub-menu">
                            <li><a href="#">Title 3</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Title 3</a></li>
                                </ul>
                                <!-- .sub-menu  end -->
                            </li>
                        </ul>
                        <!-- .sub-menu  end -->
                    </li>
                    <li><a href="#">Dropdown 3</a></li>
                </ul>
                <!-- .sub-menu  end -->
            </li>
            <li><a href="#">Placeholder</a></li>
        </ul>
        @include('layouts.website._nav-share', ['data' => []])
    </div>
</nav>

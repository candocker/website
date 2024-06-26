@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<!-- Title 
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Horizontal Style</h3>
                <p>Note: Touch-friendly Drag and Drop</p>
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
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div role="slider" class="uix-hybrid-content-slider" 
                        data-dir="horizontal" 
                        data-speed="550" 
                        data-draggable="true" 
                        data-draggable-cursor="move" 
                        data-pagination="#uix-hybrid-content-slider__pagination-1" 
                        data-next="#uix-hybrid-content-slider__controls-1 .uix-hybrid-content-slider__controls--next" 
                        data-prev="#uix-hybrid-content-slider__controls-1 .uix-hybrid-content-slider__controls--prev">
                        <div class="uix-hybrid-content-slider__items">
                               <div class="uix-hybrid-content-slider__item">
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                   <p><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-1.jpg" alt="Title 2" width="200" /></p>
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. ctetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                               </div>
                               <div class="uix-hybrid-content-slider__item">
                                   <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x600.jpg" alt="Title 2" />
                               </div>
                               <div class="uix-hybrid-content-slider__item">
                                   <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x309.jpg" alt="Title 3" />
                               </div> 
                               <div class="uix-hybrid-content-slider__item">
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus</p>
                               </div> 
                        </div>
                    </div>
                    <!-- /.uix-hybrid-content-slider -->
                    <div class="uix-hybrid-content-slider__pagination" id="uix-hybrid-content-slider__pagination-1"></div>
                    <!-- /.uix-hybrid-content-slider__pagination -->
                    <div class="uix-hybrid-content-slider__controls" id="uix-hybrid-content-slider__controls-1">
                        <a href="javascript:void(0);" class="uix-hybrid-content-slider__controls--prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <a href="javascript:void(0);" class="uix-hybrid-content-slider__controls--next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- /.uix-hybrid-content-slider__controls -->                       
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- Title 
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Vertical Style</h3>
                <p>Note: Touch-friendly Drag and Drop</p>
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
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div role="slider" class="uix-hybrid-content-slider" 
                        data-dir="vertical" 
                        data-speed="550" 
                        data-draggable="true" 
                        data-draggable-cursor="move" 
                        data-pagination="#uix-hybrid-content-slider__pagination-3" 
                        data-next="#uix-hybrid-content-slider__controls-3 .uix-hybrid-content-slider__controls--next" 
                        data-prev="#uix-hybrid-content-slider__controls-3 .uix-hybrid-content-slider__controls--prev">
                        <div class="uix-hybrid-content-slider__items">
                               <div class="uix-hybrid-content-slider__item">
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                   <p><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-2.jpg" alt="Title 2" width="200" /></p>
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. ctetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                               </div>
                               <div class="uix-hybrid-content-slider__item">
                                   <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x600.jpg" alt="Title 2" />
                               </div>
                               <div class="uix-hybrid-content-slider__item">
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                               </div> 
                               <div class="uix-hybrid-content-slider__item">
                                   <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x309.jpg" alt="Title 3" />
                               </div> 
                        </div>
                    </div>
                    <!-- /.uix-hybrid-content-slider -->
                    <div class="uix-hybrid-content-slider__pagination" id="uix-hybrid-content-slider__pagination-3"></div>
                    <!-- /.uix-hybrid-content-slider__pagination -->
                    <div class="uix-hybrid-content-slider__controls" id="uix-hybrid-content-slider__controls-3">
                        <a href="javascript:void(0);" class="uix-hybrid-content-slider__controls--prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <a href="javascript:void(0);" class="uix-hybrid-content-slider__controls--next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- /.uix-hybrid-content-slider__controls -->                       
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- Title 
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>With Custom Pagination Buttons</h3>
                <p>Using custom HTML code which is inside the div <code>.uix-hybrid-content-slider__pagination</code></p>
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
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div role="slider" class="uix-hybrid-content-slider" 
                        data-dir="horizontal" 
                        data-speed="1000" 
                        data-draggable="true" 
                        data-draggable-cursor="move" 
                        data-pagination="#uix-hybrid-content-slider__pagination-4" 
                        data-next="#uix-hybrid-content-slider__controls-4 .uix-hybrid-content-slider__controls--next" 
                        data-prev="#uix-hybrid-content-slider__controls-4 .uix-hybrid-content-slider__controls--prev">
                        <div class="uix-hybrid-content-slider__items">
                               <div class="uix-hybrid-content-slider__item">
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                   <p><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-3.jpg" alt="Title 2" width="200" /></p>
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. ctetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                               </div>
                               <div class="uix-hybrid-content-slider__item">
                                   <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x600.jpg" alt="Title 2" />
                               </div>
                               <div class="uix-hybrid-content-slider__item">
                                   <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x309.jpg" alt="Title 3" />
                               </div> 
                               <div class="uix-hybrid-content-slider__item">
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus</p>
                               </div> 
                        </div>
                    </div>
                    <!-- /.uix-hybrid-content-slider -->
                    <div class="uix-hybrid-content-slider__pagination" id="uix-hybrid-content-slider__pagination-4">
                        <ul class="uix-hybrid-content-slider__pagination--custom">
                            <li><a href="javascript:void(0);" data-target-index="0">Go 1</a></li>
                            <li><a href="javascript:void(0);" data-target-index="1">Go 2</a></li>
                            <li><a href="javascript:void(0);" data-target-index="2">Go 3</a></li>
                            <li><a href="javascript:void(0);" data-target-index="3">Go 4</a></li>
                        </ul>
                    </div>
                    <!-- /.uix-hybrid-content-slider__pagination -->
                    <div class="uix-hybrid-content-slider__controls" id="uix-hybrid-content-slider__controls-4" style="display: none;">
                        <a href="javascript:void(0);" class="uix-hybrid-content-slider__controls--prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <a href="javascript:void(0);" class="uix-hybrid-content-slider__controls--next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- /.uix-hybrid-content-slider__controls -->    
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>        
<!-- Title 
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Autoplay</h3>
                <p>Using data attributes <code>data-auto</code>, <code>data-timing</code> and <code>data-loop</code> to autoplay and loop.</p>
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
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div role="slider" class="uix-hybrid-content-slider" 
                        data-dir="horizontal" 
                        data-auto="true" 
                        data-timing="5000" 
                        data-loop="true" 
                        data-speed="550" 
                        data-draggable="true" 
                        data-draggable-cursor="move" 
                        data-pagination="#uix-hybrid-content-slider__pagination-5" 
                        data-next="#uix-hybrid-content-slider__controls-5 .uix-hybrid-content-slider__controls--next" 
                        data-prev="#uix-hybrid-content-slider__controls-5 .uix-hybrid-content-slider__controls--prev">
                        <div class="uix-hybrid-content-slider__items">
                               <div class="uix-hybrid-content-slider__item">
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                   <p><img src="{{$commonAssetUrl}}/website/assets/images/demo/test-img-big-4.jpg" alt="Title 2" width="200" /></p>
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. ctetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                               </div>
                               <div class="uix-hybrid-content-slider__item">
                                   <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x600.jpg" alt="Title 2" />
                               </div>
                               <div class="uix-hybrid-content-slider__item">
                                   <img src="{{$commonAssetUrl}}/website/assets/images/demo/spiral-galaxy-1920x309.jpg" alt="Title 3" />
                               </div> 
                               <div class="uix-hybrid-content-slider__item">
                                   <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus</p>
                               </div> 
                        </div>
                    </div>
                    <!-- /.uix-hybrid-content-slider -->
                    <div class="uix-hybrid-content-slider__pagination" id="uix-hybrid-content-slider__pagination-5"></div>
                    <!-- /.uix-hybrid-content-slider__pagination -->
                    <div class="uix-hybrid-content-slider__controls" id="uix-hybrid-content-slider__controls-5">
                        <a href="javascript:void(0);" class="uix-hybrid-content-slider__controls--prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <a href="javascript:void(0);" class="uix-hybrid-content-slider__controls--next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- /.uix-hybrid-content-slider__controls -->                       
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection

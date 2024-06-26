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
                <h3>Uix Grid</h3>
                <p>
                It can be used for fluid layout for multiple projects and <strong>Bootstrap</strong> grid system. Its biggest feature is its support for <strong>loop</strong> lists.
                </p>
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
        <div style="background-color: #000;">
             <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--auto-width">
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->  
            </div>
            <!-- /.uix-core-grid -->    
             <div class="uix-core-grid">
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-2">
                        <div style="background: purple; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: purple; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: purple; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: purple; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: purple; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: purple; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->  
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols)</div>
                    </div>            
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols)</div>
                    </div>    
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols)</div>
                    </div>    
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--loop">
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>            
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>    
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>    
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>    
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>                                    
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--loop">
                    <div class="uix-core-grid__col-2">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>            
                    <div class="uix-core-grid__col-2">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>                                        
                    <div class="uix-core-grid__col-2">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>            
                    <div class="uix-core-grid__col-2">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>        
                    <div class="uix-core-grid__col-2">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>        
                </div>
                <!-- .uix-core-grid__row  end -->       
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-3">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>                
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--loop">
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>                    
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>    
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>                    
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>        
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>        
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid"> 
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols)</div>
                    </div>                    
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--loop">
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols & loop)</div>
                    </div>                    
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols & loop)</div>
                    </div>        
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-4">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--loop">
                    <div class="uix-core-grid__col-4">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>    
                    <div class="uix-core-grid__col-4">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>        
                    <div class="uix-core-grid__col-4">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>                        
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--loop">
                    <div class="uix-core-grid__col-6">
                        <div style="background: purple; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-6">
                        <div style="background: purple; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-6">
                        <div style="background: purple; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2 (loop)</div>
                    </div>                        
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-6">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2</div>
                    </div>
                    <div class="uix-core-grid__col-6">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-8">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/3</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">    
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-9">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">3/4</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-10">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">4/5</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-7">
                        <div style="background: aqua; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">3/5</div>
                    </div>
                    <div class="uix-core-grid__col-5">
                        <div style="background: aqua; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/5</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                    <div class="uix-core-grid__col-6">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2</div> 
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end --> 
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-4">
                        <div style="background: aqua; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3</div>
                    </div>
                    <div class="uix-core-grid__col-6">
                        <div style="background: aqua; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2</div> 
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: aqua; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end --> 
            </div>
            <!-- /.uix-core-grid -->     
            <div class="uix-core-grid">
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-2">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col-5">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/5</div> 
                    </div>
                    <div class="uix-core-grid__col-5">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/5</div> 
                    </div>
                </div>
                <!-- .uix-core-grid__row  end --> 
            </div>
            <!-- /.uix-core-grid -->     
            <div class="uix-core-grid">
                <div class="uix-core-grid__row">
                    <div class="uix-core-grid__col-8">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/3</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div> 
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->     
        </div>
    </div>
    <!-- .container end -->
</section>   
<!-- Content 
====================================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>No Gutter Column For Uix Grid</h3>
                <p>
                You’ll just want to copy that into your stylesheet and then use the <code>.uix-core-grid__row--no-gutters</code> class on your <code>.uix-core-grid__row</code> div 
                </p>
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
        <div style="background-color: #000;">
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--auto-width uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->  
            </div>
            <!-- /.uix-core-grid -->    
             <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-2">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->  
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols)</div>
                    </div>            
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols)</div>
                    </div>    
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols)</div>
                    </div>    
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters uix-core-grid__row--loop">
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>            
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>    
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>    
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>    
                    <div class="uix-core-grid__col-2 uix-core-grid__col-6--md">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (min 2 cols & loop)</div>
                    </div>                                    
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters uix-core-grid__row--loop">
                    <div class="uix-core-grid__col-2">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>            
                    <div class="uix-core-grid__col-2">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>                                        
                    <div class="uix-core-grid__col-2">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>            
                    <div class="uix-core-grid__col-2">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>        
                    <div class="uix-core-grid__col-2">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6 (loop)</div>
                    </div>        
                </div>
                <!-- .uix-core-grid__row  end -->       
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-3">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>                
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters uix-core-grid__row--loop">
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>                    
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>    
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>                    
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>        
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (loop)</div>
                    </div>        
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid"> 
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: orange; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols)</div>
                    </div>                    
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters uix-core-grid__row--loop">
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols & loop)</div>
                    </div>                    
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols & loop)</div>
                    </div>
                    <div class="uix-core-grid__col-3 uix-core-grid__col-6--md">
                        <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4 (min 2 cols & loop)</div>
                    </div>        
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-4">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters uix-core-grid__row--loop">
                    <div class="uix-core-grid__col-4">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>    
                    <div class="uix-core-grid__col-4">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>        
                    <div class="uix-core-grid__col-4">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3 (loop)</div>
                    </div>                        
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters uix-core-grid__row--loop">
                    <div class="uix-core-grid__col-6">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-6">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2 (loop)</div>
                    </div>
                    <div class="uix-core-grid__col-6">
                        <div style="background: lime; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2 (loop)</div>
                    </div>                        
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-6">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2</div>
                    </div>
                    <div class="uix-core-grid__col-6">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-8">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/3</div>
                    </div>
                    <div class="uix-core-grid__col-4">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">    
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-9">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">3/4</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: maroon; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-10">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">4/5</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: red; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-7">
                        <div style="background: purple; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">3/5</div>
                    </div>
                    <div class="uix-core-grid__col-5">
                        <div style="background: purple; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/5</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                    <div class="uix-core-grid__col-6">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2</div> 
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end --> 
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-4">
                        <div style="background: aqua; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/3</div>
                    </div>
                    <div class="uix-core-grid__col-6">
                        <div style="background: aqua; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/2</div> 
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: aqua; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end --> 
            </div>
            <!-- /.uix-core-grid -->     
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-2">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col-5">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/5</div> 
                    </div>
                    <div class="uix-core-grid__col-5">
                        <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/5</div> 
                    </div>
                </div>
                <!-- .uix-core-grid__row  end --> 
            </div>
            <!-- /.uix-core-grid -->      
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-gutters">
                    <div class="uix-core-grid__col-8">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/3</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div> 
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->     
        </div>
    </div>
    <!-- .container end -->
</section>   
<!-- Content 
====================================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Uix Grid (No line breaks)</h3>
                <p>
               You’ll just want to copy that into your stylesheet and then use the <code>.uix-core-grid__row--no-break</code> class on your <code>.uix-core-grid__row</code> div 
                    <br>
                    <em>Please simulate mobile viewing after zooming out your viewport.</em>
                </p>
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
        <div style="background-color: #000;">
             <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--auto-width uix-core-grid__row--no-break">
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                    <div class="uix-core-grid__col">
                        <div style="background: fuchsia; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/5</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->  
            </div>
            <!-- /.uix-core-grid -->        
             <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-break">
                    <div class="uix-core-grid__col-2">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                    <div class="uix-core-grid__col-2">
                        <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/6</div>
                    </div>
                </div>
                <!-- .uix-core-grid__row  end -->  
            </div>
            <!-- /.uix-core-grid -->
            <div class="uix-core-grid">
                <div class="uix-core-grid__row uix-core-grid__row--no-break">
                    <div class="uix-core-grid__col-3">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>
                    <div class="uix-core-grid__col-3">
                        <div style="background: yellow; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
                    </div>                
                </div>
                <!-- .uix-core-grid__row  end -->
            </div>
            <!-- /.uix-core-grid -->
        </div>
    </div>
    <!-- .container end -->
</section>   
<!-- Content 
====================================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Inline Block</h3>
                <p>
               Use the <code>.uix-core-grid__col-</code>style class name directly, without the need to add a <code>.uix-core-grid</code> wrapper.
                </p>
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
        <div style="background-color: #000;">
            <div class="uix-core-grid__col-2">
                <div style="background: blue; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">1/4</div>
            </div>
            <div class="uix-clearfix"></div>
            <div class="text-center">
                <div class="uix-core-grid__col-5 uix-core-grid__inline">
                    <div style="background: teal; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/5, Center alignment.</div>
                </div> 
            </div>
            <div class="uix-clearfix"></div>
            <div class="uix-core-grid__col-5 uix-core-grid__mobile-stack">
                <div style="background: olive; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/5, The width becomes 100% on mobile.</div>
            </div> 
            <div class="uix-clearfix"></div>
            <div class="uix-core-grid__col-5 uix-core-grid__mobile-half">
                <div style="background: green; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,.5);">2/5, The width becomes 50% on mobile.</div>
            </div>         
            <div class="uix-clearfix"></div>
        </div>
    </div>
    <!-- .container end -->
</section>   
        </main>
@endsection

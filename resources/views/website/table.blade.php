@extends('layouts.website')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('bodyClass')class="page"@endsection
@section('content')
<section class="uix-spacing--s uix-spacing--no-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>{{$datas['title']}}</h3>
                <p>{{$datas['description']}}</p>
                <hr>
            </div>
        </div>
    </div>
</section>

@if (isset($datas['subMenu']))
<section class="uix-spacing--s">
    <div class="container uix-t-c">
        <div class="uix-lavalamp-menu__container">
            <ul class="uix-lavalamp-menu">
                <li><a href="#">menu</a></li>
                <li><a href="#">long menu</a></li>
                <li><a href="#">even longer menu</a></li>
                <li><a href="#">short menu</a></li>
            </ul>
        </div>   
        <!-- /.uix-lavalamp-menu__container -->           
    </div> 
    <!-- .container end -->
</section>
@endif
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('website.modules.table._table-responsive', ['data' => $datas['graphicDatas']])
                @include('website.modules.table._table', ['data' => $datas['graphicDatas']])
            </div>
        </div>
    </div>
</section>   
@include('website.modules.table._table-responsive', ['data' => $datas['graphicDatas']])
@include('website.modules.table._table-responsive2', ['data' => $datas['graphicDatas']])
@include('website.modules.table._table-other', ['data' => $datas['graphicDatas']])
            
            <!-- Floating Side Element
            ============================================= -->      
            <!--<div class="uix-floating-side-el">

                <a id="app-quick-appointment" href="javascript:"><span><i class="fa fa-envelope-open" aria-hidden="true"></i></span>Order</a>

                <a id="app-quick-service" href="javascript:"><span><i class="fa fa-headphones" aria-hidden="true"></i></span>Service Online</a>


                <a id="app-quick-appointment" href="javascript:"><span><i class="fa fa-calculator" aria-hidden="true"></i></span>Estimate</a>

                <a href="faq.html"><span><i class="fa fa-question-circle-o" aria-hidden="true"></i></span>FAQ</a>

            </div>


            <div style="height: 2500px;"></div>-->
            <!-- .uix-floating-side-el end -->
@endsection

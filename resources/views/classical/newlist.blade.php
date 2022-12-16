@extends('layouts.website-mini')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('classical.modules._jcnew', ['view' => 'home'])@endsection
@section('bodyClass')class="page"@endsection
@section('content')
<section class="uix-spacing--s uix-spacing--no-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>{{$datas['name']}}</h3>
                <hr>
            </div>
        </div>
    </div>
</section>
<section class="uix-spacing--s">
<div class="{{$mobileClass}}">
<div class="base_index">
    {{--@include('classical.modules._header', ['data' => ''])--}}
    @include('classical.modules._header-top', ['data' => ''])
    <!--<div style="text-align:center">
        <a href="" target="_blank">
            <img src="{{$commonAssetUrl}}/classical/img/bc82d-3894.jpg" alt="周易">
        </a>
    </div>-->
    
    @include('classical.newlists._' . $datas['pageCode'], ['datas' => $datas])
</div>
</div>
</section>   
@endsection

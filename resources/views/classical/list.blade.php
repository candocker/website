@extends('layouts.main-classical')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('classical.modules._jscss', ['view' => 'home'])@endsection
@section('content')
<div class="{{$mobileClass}}">
<div class="base_index">

    {{--@include('classical.modules._header', ['data' => ''])--}}
    @include('classical.modules._header-top', ['data' => ''])
    <h1>{{$datas['title']}}</h1>
    <!--<div style="text-align:center">
        <a href="" target="_blank">
            <img src="{{$commonAssetUrl}}/classical/img/bc82d-3894.jpg" alt="周易">
        </a>
    </div>-->
    
    @include('classical.lists._' . $datas['pageCode'], ['datas' => $datas])
</div>
</div>
<hr />
@include('classical.modules._footer', ['data' => ''])

@endsection

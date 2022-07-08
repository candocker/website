@extends('layouts.main-classical')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('classical.modules._jscss-show', ['view' => 'home'])@endsection
@section('content')
<script>genNavigator("LEFT");</script>
<div class="main {{$mobileClass}}">
    {{--@include('classical.modules._header', ['data' => ''])--}}
    @include('classical.modules._header-top', ['data' => ''])
    <hr />
    <span class="foot_key">分类:</span>
    <a href="../index.html">儒家经典</a>
    <span class="foot_key">书名:</span>
    <a href="../LunYuIndex.html">论语</a>
    <span class="foot_key">作者:</span>孔门弟子
</div>
@endsection

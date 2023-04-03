@extends('layouts.guide')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.brand._jscss', ['view' => $datas['view']])@endsection
@section('bodyClass')class="pc blockstyle2 "@endsection

@section('content')
<div id="wrap">
    @yield('yieldsection')
    <div id="container">
        @include('brand.modules._brief', ['data' => $datas['info']])
        @include('brand.modules._desc', ['data' => $datas['info']])
        {{--@include('brand.modules._league', ['data' => $datas['info']])--}}
    </div>
</div>
@endsection

@include('modules.guide._footer')

@section('dynamicMeta')
@section('jscss')
@section('bodyClass')


@php
$info = $datas['info'] ;
$cultureCategory = $info->cultureCategory;
$currentCategory = $datas['currentCategory'];
@endphp

@section('subnav')
<div class="mainMenu">
</div>
@endsection

{!!$datas['info']['content']!!}

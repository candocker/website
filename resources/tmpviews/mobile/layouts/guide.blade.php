@extends('layouts.main')
@section('main')
<div id="wrap">
    <div class="headerfix hasnav"></div>
    @include('modules.guide._header')
    <div id="container">
    @yield('content')
    </div>
</div>
<!--<div class="ads">
    <script type="text/javascript" src="{{$commonAssetUrl}}/sguide/m/js/v.js"></script></script>
</div>-->
@include('modules.guide._footer')
@endsection
@section('dynamicMeta')
@section('jscss')
@section('bodyClass')

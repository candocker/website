@extends('layouts.human')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('bodyClass')class="collapsing_header"@endsection
@section('content')

@endsection
    @include('human.modules._footer')

@include('modules.guide._common-css')

@switch($view)
@case('home')
<link href="{{$commonAssetUrl}}/sguide/m/css/ed99b-7817.css" type="text/css" rel="stylesheet" />
@break
@case('vote')
<link href="{{$commonAssetUrl}}/sguide/m/css/1457b-7442.css?v=1" type="text/css" rel="stylesheet" />
<script src="{{$commonAssetUrl}}/sguide/m/js/jquery.min.js" type="text/javascript"></script>
@break
@case('')
@break
@case('')
@break
@case('')
@break
@endswitch
<script src="{{$commonAssetUrl}}/sguide/m/js/jquery.min.js" type="text/javascript"></script>
@include('modules.guide._common-js')



<!DOCTYPE html>
<html>
<head>
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=750,maximum-scale=2,user-scalable=no" name="viewport" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="applicable-device" content="mobile">
    @yield('dynamicMeta')
    @yield('jscss')
</head>
<body @yield('bodyClass')>
    @yield('main')
</body>
</html>

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



@extends('layouts.guide')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.guide._jscss', ['view' => $datas['view']])@endsection
@section('bodyClass')class="mobile blockstyle2"@endsection
@section('content')



<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
@yield('dynamicMeta')
@include('modules.human._jscss')
</head>
<body @yield('bodyClass')>
@include('human.modules._header')
@yield('content')

@include('modules.human._footer-js')
</body>
</html>

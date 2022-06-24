<?php $module = 'petcms'; ?>
@extends('layouts.layout')
@section('main')
<div class="szwrap">
<x-section params="<?php echo json_encode(['module' => $module, 'section' => 'top']); ?>" />
<x-section params="<?php echo json_encode(['module' => $module, 'section' => 'nav']); ?>" />
@yield('content')
<x-section params="<?php echo json_encode(['module' => $module, 'section' => 'footer']); ?>" />
<x-section params="<?php echo json_encode(['module' => $module, 'section' => 'footer-js']); ?>" />
</div>
@endsection
@section('dynamicMeta')
@section('jscss')
<x-section params="<?php echo json_encode(['module' => $module, 'section' => 'jscss']); ?>" />
@endsection
@section('bodyClass')


<link rel="shortcut icon" href="{{$commonAssetUrl}}/petcms/img/ab561-6001.ico" />
@switch($route)
@case('home')
<link rel="stylesheet" type="text/css" href="//a.boqiicdn.com/Js1/min/?f=/Css/baikenew/common.css,/Css/baikenew/style.css,/Css/baikenew/subList.css" />
@break
@case('infodetail')
<link rel="stylesheet" type="text/css" href="//a.boqiicdn.com/Js1/min/?f=/Css/baikenew/common.css,/Css/baikenew/style.css,/Css/baikenew/subList.css" />
@break
@case('infolist')
<link rel="stylesheet" type="text/css" href="//a.boqiicdn.com/Js1/min/?f=/Css/baikenew/common.css,/Css/baikenew/style.css,/Css/baikenew/subList.css" />
@break
@case('petdetail')
<link rel="stylesheet" type="text/css" href="//a.boqiicdn.com/Js1/min/?f=/Css/baikenew/common.css,/Css/baikenew/style.css,/Css/baikenew/subList.css" />
@break
@case('store')
<link href="{{$commonAssetUrl}}/sguide/css/0df83-3637.css" type="text/css" rel="stylesheet" />
@break
@default
<link rel="stylesheet" type="text/css" href="//a.boqiicdn.com/Js1/min/?f=/Css/baikenew/common.css,/Css/baikenew/style.css,/Css/baikenew/subList.css" />
@break
{{--@case('detail')
@break--}}
@endswitch
<!--[if lt IE 9]>
    <script src="{{$commonAssetUrl}}/petcms/js/respond.min.js"></script>
    <link href="//a.boqiicdn.com/cross-domain/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
    <link href="{{$commonAssetUrl}}/petcms/img/1325b-8180.gif" id="respond-redirect" rel="respond-redirect" />
    <script src="{{$commonAssetUrl}}/petcms/js/respond.proxy.js"></script>
<![endif]-->
<script type="text/javascript" src="{{$commonAssetUrl}}/petcms/js/jquery.js"></script>
<script type="text/javascript" src="{{$commonAssetUrl}}/petcms/js/boqii.js"></script>


{{--@switch($route)--}}
@switch($view)
@case('home')
<link href="{{$commonAssetUrl}}/sguide/m/css/ed99b-7817.css" type="text/css" rel="stylesheet" />
@break
@case('vote')
<link href="{{$commonAssetUrl}}/sguide/m/css/1457b-7442.css?v=1" type="text/css" rel="stylesheet" />
<script src="{{$commonAssetUrl}}/sguide/m/js/jquery.min.js" type="text/javascript"></script>
@break
@default
<link rel="stylesheet" type="text/css" href="//a.boqiicdn.com/Js1/min/?f=/Css/baikenew/common.css,/Css/baikenew/style.css,/Css/baikenew/subList.css" />
@endswitch

@include('modules.guide._common-js')


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

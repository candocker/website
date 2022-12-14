@php
$rand = time();
@endphp
@extends('layouts.study')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('study.modules._jscss', ['view' => 'home'])@endsection
@section('content')
<link rel="stylesheet" href="{{$commonAssetUrl}}/study/css/{{$datas['elem']}}.css?v={{$rand}}" type="text/css">

{{--@include('study.modules._background')
@include('study.modules._attrselect')
@include('study.modules._media')
@include('study.modules._image')
@include('study.modules._nav')--}}
@include('study.modules._' . $datas['elem'])
@endsection

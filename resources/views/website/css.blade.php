@php
$rand = time();
@endphp
@extends('layouts.base')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('website.modules.css._jscss', ['view' => 'home'])@endsection
@section('content')
<link rel="stylesheet" href="{{$commonAssetUrl}}/study/css/{{$datas['elem']}}.css?v={{$rand}}" type="text/css">

@include('website.modules.css._' . $datas['elem'])

<hr />
@foreach ($datas['elems'] as $elem)
<a href="/testcss?elem={{$elem}}" target="blank">{{$elem}}</a>
@endforeach
<hr />
<hr />
@endsection

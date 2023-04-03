@php
$rand = time();
@endphp
@extends('layouts.study')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('study.modules._jscss', ['view' => 'home'])@endsection
@section('content')
<link rel="stylesheet" href="{{$commonAssetUrl}}/study/css/{{$datas['elem']}}.css?v={{$rand}}" type="text/css">

@include('study.modules._' . $datas['elem'])

<hr />
@foreach ($datas['elems'] as $elem)
<a href="/?elem={{$elem}}" target="blank">{{$elem}}</a>
@endforeach
<hr />
<hr />
@endsection

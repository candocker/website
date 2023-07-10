@php
$datas['tdkData'] = [
    'title' => '图片里的鲁迅',
    'description' => '',
    'keywords' => '',
];
@endphp
@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('content')

@endsection

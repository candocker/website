@php
$datas['tdkData'] = [
    'title' => '用作品说话-著作等身',
    'description' => '',
    'keywords' => '',
];
@endphp
@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('content')

@endsection

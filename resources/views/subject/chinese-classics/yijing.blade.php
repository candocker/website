@php
$datas['tdkData'] = [
    'title' => '群经之首-易经',
    'description' => '易经是群经之首',
    'keywords' => '',
];
@endphp
@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('content')

@endsection


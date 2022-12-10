@extends('layouts.study')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('study.modules._jscss', ['view' => 'home'])@endsection
@section('content')
{{--@include('study.modules._background')--}}
@include('study.modules._text')
@endsection

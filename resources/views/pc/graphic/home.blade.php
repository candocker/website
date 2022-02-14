@extends('layouts.main')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('graphic.modules._jscss', ['view' => 'home'])@endsection
@section('content')

{{--@include('graphic.modules._home-top', ['data' => ''])--}}
<div class="body">
    {{--@include('graphic.modules._home-brief', ['data' => ''])--}}
    @include('graphic.modules._home-ext1', ['data' => ''])
    @include('graphic.modules._home-section1', ['data' => ''])
    {{--@include('graphic.modules._home-section2', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section3', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section4', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section5', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section6', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section7', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section8', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section9', ['data' => ''])--}}
</div>
@include('graphic.modules._home-footer', ['data' => ''])
@endsection

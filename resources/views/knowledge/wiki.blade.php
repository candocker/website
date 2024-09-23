@extends('layouts.wiki')
@section('content')

{{--@include('knowledge._wiki-table', ['datas' => $datas])--}}
@include('knowledge._wiki-base', ['datas' => $datas])
@include('knowledge._wiki-info', ['datas' => $datas])
@include('knowledge._wiki-picture', ['datas' => $datas])
@include('knowledge._wiki-about', ['datas' => $datas])
@include('knowledge._wiki-footer', ['datas' => $datas])

@endsection

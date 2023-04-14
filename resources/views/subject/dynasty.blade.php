@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
{{--@include('website.modules.elems._card', [])--}}
@include('website.modules.elems._info', [])
@include('website.modules.elems._picture', [])
@endsection

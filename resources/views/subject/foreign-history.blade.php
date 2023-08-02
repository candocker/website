@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('content')
{{--@include('subject.modules.elems._card', [])--}}
@include('subject.modules.elems._info', [])
@include('subject.modules.elems._picture', [])
@endsection

@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
@include('website.dealed.' . $datas['path'] . '.' . $datas['file'], [])
@endsection

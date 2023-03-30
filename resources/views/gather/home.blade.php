@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')

@include('gather.modules._comparison', ['infos' => $datas['comparison']])
@endsection

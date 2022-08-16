@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
@include('website.modules.elems._card', ['info' => $datas['info'], 'relateFields' => ['pictureField' => 'coverUrl', 'descriptionField' => 'description']])
@include('website.modules.elems._info', [])
@include('website.modules.elems._picture', [])
@endsection

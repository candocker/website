@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
@include('subject.modules.elems._card', ['info' => $datas['info'], 'relateFields' => ['pictureField' => 'photoUrl', 'descriptionField' => 'description']])
@include('subject.modules.elems._info', [])
@include('subject.modules.elems._picture', [])
@include('subject.modules.elems._timeline', [])
@endsection

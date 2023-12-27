@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('content')

@if (isset($datas['datas']))
@foreach ((array) $datas['datas'] as $data)
@include('subject.modules.elems._' . $data['template'], ['data' => $data['data']])
@endforeach
@endif
@endsection

@php
$rowCount = $mobileClass ? 2 : 4;
@endphp
@extends('layouts.website')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('bodyClass')class="page"@endsection
@section('content')
<section class="uix-spacing--s uix-spacing--no-bottom">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3>demo</h3>
        <p>shili</p>
        <hr>
      </div>
    </div>
  </div>
</section>

<section class="uix-spacing--s" >
  <div class="container">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
</section>  
@endsection

@php
@endphp
@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
<section class="uix-spacing--s uix-spacing--no-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>{{$datas['title']}}</h3>
                <p>{{$datas['description']}}</p>
                <hr>
            </div>
        </div>
    </div>
</section>
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
</section>   
@endsection

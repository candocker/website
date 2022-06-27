@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
    <main id="uix-maincontent">
        @include('website.human._slide', ['data' => []])
        @include('website.human._content', ['data' => []])
        @include('website.human._content2', ['data' => []])
    </main>
@endsection

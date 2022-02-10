@extends('layouts.human')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('bodyClass')class="collapsing_header"@endsection
@section('content')
<div class="full_page_photo" style="background-image: url({{$commonAssetUrl}}/human/images/404.jpg);">
    <div class="container">
        <section class="call_to_action">
            <h3 class="animated bounceInDown">OMG! <strong>error 404</strong></h3>
            <h4 class="animated bounceInUp">we are really sorry but the page you requested cannot be found.</h4>
        </section>
    </div>
</div>
<div id="main">
    <div class="container">
        <div class="hgroup">
            <h1>Page not found</h1>
            <ul class="breadcrumb pull-right">
                <li class="active">Something went wrong!</li>
            </ul>
        </div>
        <section class="call_to_action"> <i class="icon-ambulance icon-4x"></i>
            <h3>error 404 is nothing to really worry about...</h3>
            <h4>you may have mis-typed the URL, please check your spelling and try again.</h4>
        </section>
    </div>
    @include('human.modules._footer')
</div>
@endsection

@extends('layouts.website-mini')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('content')

<section>
    <div class="container .uix-spacing--s" style="padding-top:10px">
        <div class="row">
            <div class="col-12">
                <h4 class="uix-heading--pinline">{{$datas['name']}}</h4>
                <p class="uix-heading--pinline">{{$datas['brief']}}</p>
                <hr>
            </div>
        </div>
    </div>
</section>
@include('classical.newlists._' . $datas['pageCode'], ['datas' => $datas])

@endsection

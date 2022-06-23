@extends('layouts.main')
@section('main')
@include('modules.guide._header-top')
@yield('content')
@include('modules.guide._footer-brand')
@include('modules.guide._footer')
@include('modules.guide._footer-js')
@endsection
@section('dynamicMeta')
@section('jscss')
@section('bodyClass')

                        {!!$datas['info']['content']!!}
                        {!!$datas['info']['content']!!}
                        {!!$datas['info']['content']!!}

@extends('layouts.guide')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.brand._jscss', ['view' => $datas['view']])@endsection
@section('bodyClass')class="pc blockstyle2 "@endsection
@section('content')
<div id="wrap">
    <div id="container">
        <div class="leftlay">
            <div class="artcontent">
                @include('brand.modules._brief', ['data' => $datas['info']])
                @include('brand.modules._desc', ['data' => $datas['info']])
                {{--@include('brand.modules._league', ['data' => $datas['info']])--}}
                @include('brand.modules._vote', ['data' => $datas['info']])
                @include('brand.modules._relate-brand', ['data' => $datas['info']])
                @include('brand.modules._shop', ['data' => $datas['info']])
                @include('brand.modules._product', ['data' => $datas['info']])
                {{--@include('brand.modules._comment')--}}
                @include('brand.modules._statement')
            </div>
        </div>
        @include('brand.modules._right')
    </div>
</div>
@endsection

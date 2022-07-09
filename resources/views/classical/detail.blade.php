@extends('layouts.main-classical')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('classical.modules._jscss', ['view' => 'detail'])@endsection
@section('content')

<script>genNavigator("LEFT");</script>
<div class="main {{$mobileClass}}">
    {{--@include('classical.modules._header', ['data' => ''])--}}
    @include('classical.modules._header-top', ['data' => ''])

    @include('classical.details._' . $datas['pageCode'], ['datas' => $datas])
    @include('classical.modules._footer-detail', ['data' => ''])
</div>
<script>
function showElems(type) 
{
    if (type == 'simple') {
        var obj = $('.yiwen');
        obj.hide();
        return ;
    }
    var obj = $('.' + type);
    obj.toggle();
    return ;
}
showElems('simple');
</script>
@endsection

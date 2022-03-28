@extends('layouts.main')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('graphic.modules._jscss', ['view' => 'home'])@endsection
@section('content')
{{--@include('graphic.modules._top', ['data' => ''])--}}
<div class="body">
    {{--@include('graphic.modules._home-brief', ['data' => ''])--}}
    @foreach ($datas['graphics'] as $pData)
        @include('graphic.modules._home-' . $pData['view'], ['data' => $pData])
    @endforeach
    {{--@include('graphic.modules._home-section1', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section1', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section1', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section1', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section1', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section1', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section1', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section1', ['data' => ''])--}}
    {{--@include('graphic.modules._home-section1', ['data' => ''])--}}
</div>
<script src="{{$commonAssetUrl}}/graphic/m/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(".guideOpen").click(function() {
    if ($(this).html() == "展开↓") {
        $("#guideDisplay").css("height", "auto");
        $(".guideBorder").css("height", "auto");
        $(this).html("关闭&#8593;");
    } else {
        $("#guideDisplay").height(225);
        $(".guideBorder").height(280);
        $(this).html("展开&darr;");
    }
});
</script>
@include('graphic.modules._home-footer', ['data' => $datas['footerLinks']])
@endsection

@extends('layouts.website-mini')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('classical.modules._jcnew', ['view' => 'detail'])@endsection
@section('content')

<section class="uix-spacing--s uix-spacing--no-bottom">
<div class="main {{$mobileClass}}">
    @include('classical.newdetails._' . $datas['pageCode'], ['datas' => $datas])
</div>
</section>
<div class="uix-floating-side-el">
    <a href="javascript:$('.showelem').toggle();"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span></a>
    <span class="showelem" style="display:none">
        @if (isset($datas['bookData']['noteType']) && $datas['bookData']['noteType'] == 'inner')<a href="javascript:disp('commentinner');$('.showelem').toggle();"><span>行内注释</span></a>@endif
        <a href="javascript:disp('comment');$('.showelem').toggle();"><span>注释</span></a>
        <a href="javascript:disp('yiwen');$('.showelem').toggle();"><span>译文</span></a>
        <a href="javascript:disp('jiedu');$('.showelem').toggle();"><span>解读</span></a>
        <a href="javascript:zh_tran('s');$('.showelem').toggle();" class="zh_click" id="zh_click_s"><span>简体</span></a>
        <a href="javascript:zh_tran('t');$('.showelem').toggle();" class="zh_click" id="zh_click_t"><span>繁體</span></a>
    </span>
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

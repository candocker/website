@extends('layouts.main-classical')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('classical.modules._jscss', ['view' => 'home'])@endsection
@section('content')
<div class="base_index">
    {{--@include('classical.modules._header', ['data' => ''])--}}
    @include('classical.modules._header-top', ['data' => ''])
    <h1>周易</h1>
    <!--<div style="text-align:center">
        <a href="" target="_blank">
            <img src="{{$commonAssetUrl}}/classical/img/bc82d-3894.jpg" alt="周易">
        </a>
    </div>-->
    
    <table width="95%" border="1" align="center" cellspacing="0" class="indextable">
        <caption></caption>
        <colgroup><col width="25%"><col width="25%"><col width="25%"><col></colgroup>
        <tbody><tr>
        <td class="index_left_td"><a href="ZhouYi/ZhouYi01.html">01卦 乾为天</a></td>
        <td class="index_left_td"><a href="ZhouYi/ZhouYi02.html">02卦 坤为地</a></td>
        <td class="index_left_td"><a href="ZhouYi/ZhouYi03.html">03卦 水雷屯</a>(<span class="piny">zhūn</span>)</td>
        <td class="index_left_td"><a href="ZhouYi/ZhouYi04.html">04卦 山水蒙</a></td>
        </tr></tbody>
    </table>
    <table width="95%" border="1" align="center" cellspacing="0" class="indextable">
        <colgroup><col width="20%"><col width="20%"><col width="20%"><col><col></colgroup>
        <tbody><tr>
        <td class="index_left_td"><a href="ZhouYi/ZhouYi65.html">系辞上传</a></td>
        <td class="index_left_td"><a href="ZhouYi/ZhouYi66.html">系辞下传</a></td>
        <td class="index_left_td"><a href="ZhouYi/ZhouYi67.html">说卦传</a></td>
        <td class="index_left_td"><a href="ZhouYi/ZhouYi68.html">序卦传</a></td>
        <td class="index_left_td"><a href="ZhouYi/ZhouYi69.html">杂卦传</a></td>
        </tr></tbody>
    </table>
</div>
<hr />
@include('classical.modules._footer', ['data' => ''])

@endsection

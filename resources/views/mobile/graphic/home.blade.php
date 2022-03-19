@extends('layouts.main')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('graphic.modules._jscss', ['view' => 'home'])@endsection
@section('content')
{{--@include('graphic.modules._top', ['data' => ''])--}}
<div class="body">
    <div class="lineBox">
        <img src="{{$commonAssetUrl}}/graphic/m/img/7b872-5050.jpg" alt="美国历任总统名单_历任美国总统名单一览表及就职情况_美国总统（POTUS）" style="width: 100%;" /></div>
    <div class="title">
        <h1>美国历任总统名单_历任美国总统名单一览表及就职情况_美国总统（POTUS）</h1></div>
    <div class="lineBox">
        <p>
            <strong>
                <a href="http://m.114.xixik.com/us-president/" style="color: rgb(0, 0, 0);" title="美国历任总统名单">美国总统</a></strong>是美利坚合众国的国家元首和政府首脑，同时也是美国行政部门的最高领袖与三军统帅，一般被称为Mr. President（总统先生）。
            <a href="http://www.xixik.com/content/55f02887dfbe55eb" style="color: rgb(0, 0, 0);" title="美国总统任期">总统选举每4年举行一次</a>。本专题罗列
            <a href="http://m.114.xixik.com/us-president/" style="color: rgb(0, 0, 0);" title="美国历任总统">
                <strong>美国历任总统名单</strong></a>，
            <a href="http://m.114.xixik.com/usa-president/" style="color: rgb(0, 0, 0);" title="美国历届总统">美国历届总统名单</a>一览表及就职情况，现任总统是第四十六任美国总统
            <strong>
                <a href="http://m.114.xixik.com/us-president/biden/" style="color:#000;" title="美国总统拜登">乔&middot;拜登</a></strong>（Joe Biden）。The President of the United States of America，简称&ldquo;
            <strong>
                <a href="http://m.114.xixik.com/potus/" style="color: rgb(0, 0, 0);" title="美国总统">POTUS</a></strong>&rdquo;。</p>
    </div>
    <div class="lineBox">
        <div class="gg1"></div>
        <div class="guide">
            <div class="guideBorder" id="guideBorder">
                <div class="guideTitle">导读（目录）</div>
                <ul id="guideDisplay">
                    <li>
                        <a target="_self" title="美国历届总统名单" href="#anchor1">美国历届总统名单</a></li>
                    <li>
                        <a target="_self" title="美国历任总统简历" href="#anchor2">美国历任总统简历</a></li>
                    <li>
                        <a target="_self" title="美国历任总统顺序表" href="#anchor3">美国历任总统顺序表</a></li>
                    <li>
                        <a target="_self" title="美国总统乔·拜登" href="#anchor4">美国总统乔·拜登</a></li>
                    <li>
                        <a target="_self" title="在任时来华访问的美国总统" href="#anchor5">在任时来华访问的美国总统</a></li>
                    <li>
                        <a target="_self" title="美国各州的“选举人”票数分布（总计538票）" href="#anchor6">美国各州的“选举人”票数分布（总计538票）</a></li>
                    <li>
                        <a target="_self" title="标普500指数预测美国大选" href="#anchor7">标普500指数预测美国大选</a></li>
                    <li>
                        <a target="_self" title="美国总统继任顺序" href="#anchor8">美国总统继任顺序</a></li>
                    <li>
                        <a target="_self" title="美国总统上任时年龄" href="#anchor9">美国总统上任时年龄</a></li>
                </ul>
                <div class="guideOpen">展开&darr;</div></div>
        </div>
        <div class="gg2"></div>
    </div>
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
<script type="text/javascript">var value = '122';
    url = "/ajax/diy/" + value + "/";
    $.get(url);

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
    });</script>
@include('graphic.modules._home-footer', ['data' => $datas['footerLinks']])
@endsection

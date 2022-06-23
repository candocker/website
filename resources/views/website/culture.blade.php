<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="site_home">

<head>
@include('culture.modules._header-meta')
@include('culture.modules._header-jscss')

<body>
{{--@include('culture.modules._common-top')--}}
{{-- @include('culture.modules._common-header') --}}
@include('culture.modules._common-nav')

@yield('subnav')
<div class="content">
@yield('main')
    <div class="clear"></div>
    <div class="bottomMenu">
        <a href='../news/web_6.html' style='' class='font1_2'>联系我们</a>&nbsp;-&nbsp;
        <a href='../news/web_5.html' style='' class='font1_2'>免责声明</a>&nbsp;-&nbsp;
        <a href='../sitemap.html' style='' class='font1_2' target='_blank'>网站地图</a>
    </div>
</div>

<div id="footer">网站名称：
    <a href="http://www.yac8.com/" target="_blank">
        <span style="color:#e53333;">书法欣赏</span></a>&#160;网站域名：
    <a href="http://www.yac8.com/" target="_blank">
        <span style="color:#003399;">www.yac8.com</span></a>江苏-太仓
    <a href="http://beian.miit.gov.cn/" target="_blank">苏ICP备09026750号-2 公安备案号32058502010026</a>
</div>
<div class="clear"></div>

</body>
</html>

@extends('layouts.culture')
@php
$info = $datas['info'] ;
$cultureCategory = $info->cultureCategory;
@endphp
@inject('culturePresenter', 'ModuleInfocms\Presenters\CulturePresenter')
@section('subnav')
<div class="mainMenu">
    <div class="subnav">
        <div class="hotsearch">
            <span class='font2_2'>当前位置：</span>
            <a href='/'>首页</a>&nbsp;&gt;&nbsp;
            <a href='/listinfo'>书法大全</a>&nbsp;&gt;&nbsp;
            @if ($cultureCategory['parent_code'])
            <a href='{{$cultureCategory->parentElem->getUrl()}}'>{{$cultureCategory->parentElem['name']}}ooo</a>&nbsp;&gt;&nbsp;
            @endif
            <a href='{{$cultureCategory->getUrl()}}'>{{$cultureCategory['name']}}</a>
        </div>
    </div>
    <div class="clear"></div>
</div>
@endsection
@section('main')


@extends('layouts.culture')
@php
$currentCategory = $datas['currentCategory'];
@endphp
@section('subnav')
<div class="mainMenu">
    <div class="subnav">
        <div class="hotsearch">
            <span class='font2_2'>当前位置：</span>
            <a href='/'>首页</a>&nbsp;&gt;&nbsp;
            <a href='/listinfo'>书法大全</a>&nbsp;&gt;&nbsp;
            @if ($currentCategory['parent_code'])
            <a href='{{$currentCategory->parentElem->getUrl()}}'>{{$currentCategory->parentElem['name']}}ooo</a>&nbsp;&gt;&nbsp;
            @endif
            <a href='{{$currentCategory->getUrl()}}'>{{$currentCategory['name']}}</a>
        </div>
    </div>
    <div class="clear"></div>
</div>
@endsection
@section('main')

@extends('layouts.culture')
@inject('culturePresenter', 'ModuleInfocms\Presenters\CulturePresenter')
@php
$categoryTrees = $culturePresenter->getCategoryTrees();
@endphp


@include('modules.guide._common-css')

@switch($view)
@case('home')
<link href="{{$commonAssetUrl}}/sguide/css/46fb4-5182.css" type="text/css" rel="stylesheet" />
@break
@case('detail')
<link href="{{$commonAssetUrl}}/sguide/css/92999-4570.css" type="text/css" rel="stylesheet" />
@break
@case('product')
<link href="{{$commonAssetUrl}}/sguide/css/30800-2632.css" type="text/css" rel="stylesheet" />
@break
@case('shop')
<link href="{{$commonAssetUrl}}/sguide/css/7ba7a-2311.css" type="text/css" rel="stylesheet" />
@break
@case('store')
<link href="{{$commonAssetUrl}}/sguide/css/4cb42-2569.css" type="text/css" rel="stylesheet" />
@break
@case('human-detail')
<link href="{{$commonAssetUrl}}/sguide/css/8bfd9-7295.css" type="text/css" rel="stylesheet" />
@break
@endswitch
@include('modules.guide._common-js')

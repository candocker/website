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
<input type="hidden" id="contentImgMaxWidth" name="contentImgMaxWidth" value="665" />
<div id="mainBody">
    <div class="areaL">
        <div class="webBox">
            <div class="a">
                <h1>{{$info['name']}}</h1>
                <div class="addi2">时间：2020-3-26 7:14:57&nbsp;&nbsp; 作者：书法欣赏&nbsp;&nbsp; 来源：www.yac8.com&nbsp;&nbsp; 阅读：
                    <span id="infoReadNum">58</span>&nbsp;&nbsp; 评论：
                    <span id="infoReplyNum">0</span>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <div class="b">
                <div class="note"><b>内容摘要：</b>{{$info['description']}}</div>
                <div id="newsContent">
                    {!!$info->formatContent()!!}
                    {{--@include('culture.module._show-content-page')--}}
                </div>
            @include('culture.modules._show-content-share')
            </div>
            <div class="c">
                上一篇：{!!$culturePresenter->preInfoStr($info, ['where' => ['category_code' => $info['category_code']]])!!}
                <br />下一篇：{!!$culturePresenter->nextInfoStr($info, ['where' => ['category_code' => $info['category_code']]])!!}
            </div>
        </div>
        <div class="clear"></div>
    </div>
    @include('culture.modules._right', ['currentCategory' => $cultureCategory])
    <div class="clear"></div>
</div>
<div class="height10"></div>

<script language="javascript" type="text/javascript" src="{{$commonAssetUrl}}/culture/js/replyandmessage.js"></script>
<script language="javascript" type="text/javascript" src="{{$commonAssetUrl}}/culture/js/newsshow.js"></script>

@endsection

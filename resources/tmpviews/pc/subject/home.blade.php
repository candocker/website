@extends('layouts.guide')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.subject._jscss', ['view' => $datas['view']])@endsection
@section('bodyClass')class="pc blockstyle2"@endsection
@section('content')
<div id="wrap">
    @include('subject.modules._home-top')
    <div id="container">
        <div class="leftlay">
            @include('subject.modules._home-lefttop')
            <div class="artcontent">
                @include('subject.modules._home-brand')
                @include('subject.modules._home-brandinfo')
                @include('subject.modules._home-rank')
                @include('subject.modules._home-relate')
                @include('subject.modules._home-tag')
                @include('subject.modules._home-info')
                <div class="blockinfo articlecol3 " id="pos_bdarticlelist">
                    <div class="itembox bg4">
                        <ul>
                            <li class="item dhidden font14">
                                <a target="_blank" class="title c666" href="https://www.maigoo.com/best/15516.html">2021文具用品十大品牌排行榜 十大文具用品品牌排行榜 文具用品10大品牌榜</a></li>
                            <li class="item dhidden font14">
                                <a target="_blank" class="title c666" href="https://www.maigoo.com/news/459429.html">品牌榜：2020-2021年文具用品十大品牌排行榜 投票结果公布【新】</a></li>
                            <li class="item dhidden font14">
                                <a target="_blank" class="title c666" href="https://www.maigoo.com/best/10777.html">2021文具用品十大品牌排行 文具用品品牌排行榜【最新公布名单】</a></li>
                            <li class="item dhidden font14">
                                <a target="_blank" class="title c666" href="https://www.maigoo.com/best/861.html">文具什么牌子的好 哪个牌子的文具好用【好牌子推荐】</a></li>
                            <li class="item dhidden font14">
                                <a target="_blank" class="title c666" href="https://www.maigoo.com/goomai/180445.html">文具什么牌子好 办公文具哪个牌子好【文具用品品牌】</a></li>
                            <li class="item dhidden font14">
                                <a target="_blank" class="title c666" href="https://www.maigoo.com/news/481188.html">文具用品品牌大全 文具用品有哪些品牌 文具用品知名品牌名录【品牌库】</a></li>
                        </ul>
                    </div>
                </div>
                <div class="miaodian" id="pos_miaodian">
                    <ul>
                        <li title="排行榜">
                            <a href="#posbangdan" class="c666" pos="bangdan">排行榜</a></li>
                        <li title="晨光文具M&G">
                            <a href="#posbrandinfo_0" class="c666" pos="brandinfo_0">晨光文具M&G</a></li>
                        <li title="得力DELI">
                            <a href="#posbrandinfo_1" class="c666" pos="brandinfo_1">得力DELI</a></li>
                        <li title="真彩TrueColor">
                            <a href="#posbrandinfo_2" class="c666" pos="brandinfo_2">真彩TrueColor</a></li>
                        <li title="齐心办公COMIX">
                            <a href="#posbrandinfo_3" class="c666" pos="brandinfo_3">齐心办公COMIX</a></li>
                        <li title="爱好AIHAO">
                            <a href="#posbrandinfo_4" class="c666" pos="brandinfo_4">爱好AIHAO</a></li>
                        <li title="白雪文具Snowhite">
                            <a href="#posbrandinfo_5" class="c666" pos="brandinfo_5">白雪文具Snowhite</a></li>
                        <li title="贝发BEIFA">
                            <a href="#posbrandinfo_6" class="c666" pos="brandinfo_6">贝发BEIFA</a></li>
                        <li title="广博GuangBo">
                            <a href="#posbrandinfo_7" class="c666" pos="brandinfo_7">广博GuangBo</a></li>
                        <li title="三木SUNWOOD">
                            <a href="#posbrandinfo_8" class="c666" pos="brandinfo_8">三木SUNWOOD</a></li>
                        <li title="金万年KNOW">
                            <a href="#posbrandinfo_9" class="c666" pos="brandinfo_9">金万年KNOW</a></li>
                        <li title="榜单相关">
                            <a href="#posxgbangdan" class="c666" pos="xgbangdan">榜单相关</a></li>
                        <li title="相关推荐">
                            <a href="#posdjarticlelist" class="c666" pos="djarticlelist">相关推荐</a></li>
                        <li class="icon">
                            <a href="javascript:;" onclick="$('html,body').animate({'scrollTop':0},{duration:500});" class="color1">
                                <i class="iconfont icon-shouqi"></i>顶部</a>
                        </li>
                    </ul>
                </div>
                <div class="pagecss" data-css="/public/css/maigoo/v2019/color.css,/public/css/maigoo/v2019/weui.min.css,/public/css/maigoo/v2019/brand10.css,/public/css/maigoo/v2019/brand10/list3.css,/public/css/maigoo/v2019/block/brand10/bangdan.css,/public/css/maigoo/v2019/block/brand10/brand10vote.css,/public/css/maigoo/v2019/block/brand10/brand10publicbang.css,/public/css/maigoo/v2019/block/brand/boxinfo.css,/public/css/maigoo/v2019/block/publicblock/navlist.css,/public/css/maigoo/v2019/block/brand10/bangtitle.css,/public/css/maigoo/v2019/block/brand10/brand10xgbangdan.css,/public/css/maigoo/v2019/block/category/col4.css,/public/css/maigoo/v2019/block/publicblock/articlelist.css,/public/css/maigoo/v2019/block/publicblock/articlecol3.css,/public/css/maigoo/v2019/block/publicblock/miaodian.css,/public/css/maigoo/v2019/block/brand10/brand10zhishidesc.css"></div>
                <div class="pagejs" data-js="/public/js/maigoo/v2019/public.js,/public/js/maigoo/v2019/event.js,/public/js/maigoo/v2019/weUI.js,/public/js/maigoo/v2019/block/brand10/bangdan.js,/public/js/maigoo/v2019/block/publicblock/articlelist.js,/public/js/maigoo/v2019/block/publicblock/miaodian.js"></div>
            </div>
        </div>
        @include('brand.modules._right')
    </div>
</div>
<script language="javascript">var pac = 'brand10',
    pdo = 'list',
    pid = '797',
    siteid = 0,
    CNPP = 'https://cnpp.cn/',
    catid = '797',
    brandid = '',
    userid = '0',
    issm = '';
    var authorpiclist = null;</script>
<script type="text/javascript" src="{{$commonAssetUrl}}/sguide/js/brand10_list_f4fdccc8271a8e7c6f1a6c4044b8bd83.js"></script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?de3f6fd28ec4ac19170f18e2a8777593";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
@endsection

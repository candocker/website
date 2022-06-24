@inject('culturePresenter', 'ModuleInfocms\Presenters\CulturePresenter')
@php
$categoryTrees = $culturePresenter->getCategoryTrees();
@endphp
<div class="mainMenu">
    <div>
        <ul class='topnavNum7 topnav'>
            <li class='b'>
                <div class='itemMenu'><a href='./' style=''>网站首页</a></div>
            </li>
            @foreach ($categoryTrees as $pKey => $pData)
            <li class='b'>
                <div class='itemMenu'><a href='{{$pData->getUrl()}}' style='' >{{$pData['name']}}</a></div>
                <ul class='subnav'>
                    @foreach ($pData['subInfos'] as $subKey => $subData)
                    <li><a href='{{$subData->getUrl()}}' style='' >{{$subData['name']}}</a></li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
        <div class='clear'></div>
    </div>
</div>


@inject('brandPresenter', 'ModuleInfocms\Presenters\BrandPresenter')
<div class="blockinfo navlist2 col4" id="pos_websitetype">
    <div class="blocktitle font26 ccc style1 ">
        <span class="color1">
            <em class="dhidden">网店（56个）</em>
            <i class="l bg1"><i class="bg2"></i></i>
            <i class="r bg2"><i class="bg3"></i></i>
            <em class="l bg3"></em>
            <em class="r bg3"></em>
        </span>
    </div>
    <!--<div class="itembox">
        <div class="item ">
            <a target="_blank" href="https://www.maigoo.com/webshop/search/?brandid=2411&websiteid=4899&dynamic=1">
                <div class="img"><img src="{{$commonAssetUrl}}/sguide/m/img/e23a2-3721.png" /></div>
            </a>
        </div>
        <div class="clear"></div>
    </div>-->
</div>
<div class="blockinfo webshopcol " id="pos_webshoplist">
    <div class="itembox">
        <ul>
            @foreach ($brandPresenter->getWebsiteDatas($data, 8) as $website)
            <li class="item">
                <div class="imgbox">
                    <a target="_blank" href="{{$website->url}}">
                        <img src="{{$website->pointAttachmentUrl('logo')}}" />
                    </a>
                </div>
                <div class="cont">
                    <ul>
                        <li class="webtitle font18">
                            <a target="_blank" isconvert=1 rel="nofollow" href="{{$website->website_url}}" class="title c333 dhidden">{{$website->name}}</a>
                        </li>
                        <li class="shoplevel font14 line15em">
                            <img src="{{$commonAssetUrl}}/sguide/img/5a10f-2488.gif" />
                            <em class="c999">顶级卖家</em>
                            <span class="typename">旗舰店</span></li>
                        <li class="c999 font14 line15em">推荐指数 &nbsp;38515</li>
                        <li class="buybtn">
                            <a target="_blank" isconvert=1 rel="nofollow" href="{{$website->website_url}}" class="font12">进店逛一逛></a>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </li>
            @endforeach
        </ul>
        <div class="clear"></div>
    </div>
    <div class="blockmorebox font16 ">
        <a class="c333 morebtn" target="_blank" href="https://www.maigoo.com/brand/webshop_2411.html">
            <i class="iconfont icon-gengduo"></i>
            <span>更多</span></a>
        <div class="clear"></div>
    </div>
</div>
<div class="bline bline1"></div>

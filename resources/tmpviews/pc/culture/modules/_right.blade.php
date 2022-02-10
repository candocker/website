@php
$colors = ['#0000ff;', '#ff0000;', '#FF0000;', '#008000;', ''];
@endphp
@inject('culturePresenter', 'ModuleInfocms\Presenters\CulturePresenter')
<div class="areaR">
    <div class="hotRank">
        <div class="title"><h2>{{$currentCategory['name']}}</h2></div>
        <div class="content">
            <dl>
                <dd class="liBox1" style="min-height:auto;height:auto;">
                    <ul>
                        @foreach ($culturePresenter->getPointDatas('cultureCategory', 8, ['parent_code' => $currentCategory['parent_code']]) as $pData)
                        <li><a href='{{$pData->getUrl()}}'>{{$pData['name']}}</a></li>
                        @endforeach
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
    <div class="clear"></div>
    <div class="height5"></div>
    <div class="clear"></div>

    <div class="hotRank">
        <div class="title"><h2>热点排行</h2></div>
        <div class="content">
            <ul>
                <li>
                    <div class='img'>
                        <a href='../news/72.html' class='font1_2' target='_blank'>
                            <img src='{{$commonAssetUrl}}/culture/img/247fc-6065.jpg' onerror="if (this.value!='1'){this.value='1';this.src='{{$commonAssetUrl}}/culture/m/img/97a63-8488.gif';}" alt="苏适行书书法作品欣赏" width='70' height='90' /></a>
                    </div>
                    <div class='info'>
                        <div class='ft'>
                            <a href='../news/72.html' style='font-weight:bold;' class='font1_2' target='_blank' title="苏适行书书法作品欣赏">苏适行书书法作品欣赏</a></div>
                        <p>苏适1935年生，祖籍山东省青州市，后移居北京。早年从师魏长青、杜襄、专攻魏碑和李北海、王义之诸家。...&nbsp;
                            <a href='../news/72.html' class='font2_2' target='_blank'>阅读全文>></a></p>
                    </div>
                    <div class='clear'></div>
                </li>
                <li class='line'></li>
                @foreach ($culturePresenter->getPointDatas('cultureArticle', 14, ['category_code' => $currentCategory['code']]) as $pData)
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='../news/list_33.html' class='font2_1'>[毛笔书法]</a>
                    <a href='{{$pData->getUrl()}}' class='font1_2' style='color:{{$colors[rand(0, 4)]}}' title="{{$pData['name']}}">{{$pData['name']}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="height5"></div>
    {{--@include('culture.modules._show-right-picture')--}}
    <div class="clear"></div>
    <div class="height5"></div>
    <div class="clear"></div>

    <div class="clear"></div>
    <div class="height5"></div>
    <div class="clear"></div>
    <div class="hotRank">
        <div class="title"><h2>推荐精选</h2></div>
        <div class="content">
            <ul>
                @foreach ($culturePresenter->getPointDatas('cultureArticle', 14, ['category_code' => $currentCategory['code']]) as $pData)
                <li style='width:100%;height:20px;overflow:hidden;'>
                    <a href='../news/list_33.html' class='font2_1'>[毛笔书法]</a>
                    <a href='{{$pData->getUrl()}}' class='font1_2' style='color:{{$colors[rand(0, 4)]}}' title="{{$pData['name']}}">{{$pData['name']}}</a>
                </li>
                <div class='clear'></div>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="clear"></div>
</div>

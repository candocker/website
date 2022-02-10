@extends('layouts.petcms')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
{{--@section('jscss')@include('modules.petcms._jscss', ['view' => $datas['view']])@endsection--}}
@section('content')
<!--主题内容开始-->
<div id="content">
    <div class="content_auto">
        <!--面包屑开始-->
        <div class="crumbs mt20">
            <a href="http://www.boqii.com/baike/">首页</a>>
            <a href="http://www.boqii.com/baike/medical/">宠物医疗</a>>
            <a href="http://www.boqii.com/baike/dogmd/">狗狗医疗</a>>
            <a href="http://www.boqii.com/baike/dogdis/">狗狗常见病</a>>犬体外寄生虫会诱发出哪些疾病</div>
        <!--面包屑结束-->
        <!--文章详情开始-->
        <div class="article mt20">
            <div class="leftside left">
                <div class="article_top">
                    <div class="article_top_img">
                        <img src="{{$commonAssetUrl}}/petcms/img/c1116-8493.jpg" />
                    </div>
                    <div class="like" id="like" val="22357"></div>
                </div>
                <div class="leftside_body">
                    <!--文章开始-->
                    <div class="article_title">
                        <h1>{{$datas['info']['name']}}</h1>
                        <!--<span>2015-07-02 11:01:48</span>
                        <span>by<a href="" target="_blank">王慧文</a></span>-->
                    </div>
                    <div class="abstract">
                        <div class="abstract_top"></div>
                        <div class="abstract_center">{{$datas['info']['description']}}</div>
                        <div class="abstract_bot right"></div>
                    </div>
                    <div class="article_body" onselect="document.selection.empty();" oncontextmenu="return false" oncontextmenu="return false" onselectstart="return false" ondrag="return false">
                        {!!$datas['info']['content']!!}
                        {!!$datas['info']['content']!!}
                        {!!$datas['info']['content']!!}
                        <!--<div class="article_copyright">波奇网诚征优秀稿件：<a href="" target="_blank">投稿指南</a></div>-->
                    </div>
                    <div class="tag">
                        <p class="tag_hover">相关标签：
                            <a href=""></a>
                            <a href='http://www.boqii.com/tag/7902/' target='_blank' val='7902'>狗狗寄生虫</a>
                            <a href='http://www.boqii.com/tag/3909/' target='_blank' val='3909'>狗狗饲养</a>
                            <a href='http://www.boqii.com/tag/332/' target='_blank' val='332'>狗狗</a>
                            <a href='http://www.boqii.com/tag/224/' target='_blank' val='224'>驱虫</a></p>
                        <p>部分文章和图片来源于网络，版权归原作者所有，如有侵权，请联系删除：
                            <a href="mailto:qiang.zhang@boqii.com">qiang.zhang@boqii.com</a></p>
                    </div>
                    <div class="article_share">
                        <div class="share right">
                            <div class="bdsharebuttonbox" style="margin:0;">
                                <a href="#" class="bds_more" data-cmd="more"></a>
                            </div>
                        </div>
                        <script>window._bd_share_config = {
                                "common": {
                                    "bdSnsKey": {},
                                    "bdText": "",
                                    "bdMini": "2",
                                    "bdMiniList": false,
                                    "bdPic": "",
                                    "bdStyle": "0",
                                    "bdSize": "24"
                                },
                                "share": {}
                            };
                            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
                        <div class="article_s_x">
                            <em></em>1</div>
                        <div class="article_s_n">
                            <em></em>43149</div>
                    </div>
                    <div class="art_page">
                        <p class="left">上一篇：
                            <a href="http://www.boqii.com/article/22351.html">狗狗总是发出咔咔声是什么情况</a></p>
                        <p class="last right">下一篇：
                            <a href="http://www.boqii.com/article/22399.html">【医疗攻略】狗狗疫苗过敏怎么办</a></p>
                    </div>
                    <!--文章结束-->
                    @include('petcms.modules._relate-list')
                    @include('petcms.modules._comment')
                </div>
            </div>
            <div class="article_right right">
                <!--喜欢文章开始-->
                <!--<div class="entry_r_t like_tit"><span>1</span>人喜欢这篇文章</div>
                <div class="like_cont">
                    <a href="http://i.boqii.com/u/14452463" target="_blank">
                        <img alt="大黄" src="{{$commonAssetUrl}}/petcms/img/9a901-8873.jpg" title="大黄" />
                    </a>
                </div>-->
                <!--喜欢文章结束-->
                <!-- 广告位开始 -->
                <!--<div class="slogan-mAd">
                    <a href="http://shop.boqii.com/zhuanti/684.html?utm_source=baidu-seopc" target="_blank">
                        <img src="{{$commonAssetUrl}}/petcms/img/8cc74-7161.jpg" alt="" /></a>
                </div>-->
                <!-- 广告位结束 -->
                <!--专家问答开始-->
                <!--<div class="expert_r_t">
                    <div class="yy_zj">
                        <a href="http://www.boqii.com/expert/" target="_blank">已有27位专家</a></div>专家问答</div>
                <ul class="dog_c_r mt20">
                    <li>
                        <em></em>
                        <a href="http://www.boqii.com/post/19838.html" target="_blank">我的巴西红耳龟在蜕皮不吃东西</a></li>
                    <li>
                        <em></em>
                        <a href="http://www.boqii.com/post/19727.html" target="_blank">我的猫是什么病？</a></li>
                    <li>
                        <em></em>
                        <a href="http://www.boqii.com/post/19691.html" target="_blank">红鲫鱼身上有好多黑斑且有烂掉，怎么办？</a></li>
                    <li>
                        <em></em>
                        <a href="http://www.boqii.com/post/19328.html" target="_blank">狗狗的疫苗问题</a></li>
                    <li>
                        <em></em>
                        <a href="http://www.boqii.com/post/19260.html" target="_blank">给猫咪换了新猫砂后不在上面拉粑粑</a></li>
                    <li>
                        <em></em>
                        <a href="http://www.boqii.com/post/19208.html" target="_blank">关于驱虫问题</a></li>
                    <li>
                        <em></em>
                        <a href="http://www.boqii.com/post/19190.html" target="_blank">点蚊香对狗狗有影响吗？</a></li>
                    <li>
                        <em></em>
                        <a href="http://www.boqii.com/post/18874.html" target="_blank">两个多月的小猫生病</a></li>
                    <li>
                        <em></em>
                        <a href="http://www.boqii.com/post/18841.html" target="_blank">母猫产后怎么补充营养？</a></li>
                    <li class="last">
                        <em></em>
                        <a href="http://www.boqii.com/post/18787.html" target="_blank">舌下囊肿</a></li>
                </ul>
                <div class="art_ask">
                    <a href="http://www.boqii.com/baike/discuss-0/" target="_blank">问答专区</a>
                    <a href="http://www.boqii.com/baike/Thread/post" class="my_ask" target="_blank">我要提问</a></div>-->
                <!--专家问答结束-->
                <!-- 广告位开始 -->
                <!--<div class="slogan-sAd">
                    <a href="http://shop.boqii.com/zhuanti/1249.html" target="_blank">
                        <img src="{{$commonAssetUrl}}/petcms/img/c06c1-5801.jpg" alt="" /></a>
                </div>
                <div class="slogan-sAd">
                    <a href="http://vet.boqii.com/zhuanti/newuser.html?utm_source=baidu-seopc" target="_blank">
                        <img src="{{$commonAssetUrl}}/petcms/img/653f8-2654.jpg" alt="" /></a>
                </div>-->
                <!-- 广告位结束 -->
                <!--推荐文章开始-->
                <div class="entry_r_t">推荐文章</div>
                <!--推荐文章结束-->
                <div class="floatWchat">
                    <p>微信公众平台搜索“波奇网”
                        <br />或扫描下方二维码</p>
                    <img src="{{$commonAssetUrl}}/petcms/img/39069-1230.jpg" /></div>
            </div>
        </div>
        <!--文章详情结束-->
        <div class="message">用关爱与呵护谱写的养宠百科，全面的养宠知识满足所需，专业的宠物医生在线解答，为爱宠健康生活保驾护航。波奇——全面关爱宠物生活！</div></div>
</div>
@include('petcms.modules._cmsshow-botton')
@endsection

@extends('layouts.guide')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.guide._jscss', ['view' => $datas['view']])@endsection
@section('bodyClass')class="pc "@endsection
@section('content')
<div id="wrap">
    <div id="container">
        <div class="leftlay">
            <div class="artcontent">
                <div class="blockinfo brand10col1 " id="pos_brand10bang1">
                    <div class="itembox">
                        <ul>
                            <li class="item">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/zhishibang/" style="background:url('{{$commonAssetUrl}}/sguide/img/4ee78-9555.jpg');">
                                    <div class="left">
                                        <div class="title font36">知识榜</div>
                                        <div class="mintitle font20">知识课堂
                                            <i class="iconfont iconzhishibang c999 icon-gengduo2"></i></div>
                                        <div class="img">
                                            <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/dee69-6200.png" /></div>
                                    </div>
                                    <div class="right zhishibang">
                                        <div class="item2 dhidden">
                                            <i>1.</i>
                                            <span class="ttl font16">【综艺节目知识体系】综艺节目十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>2.</i>
                                            <span class="ttl font16">【鱼虾蟹知识体系】鱼虾蟹十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>3.</i>
                                            <span class="ttl font16">【肉类知识体系】肉类十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>4.</i>
                                            <span class="ttl font16">【面食知识体系】面点十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>5.</i>
                                            <span class="ttl font16">【口味知识体系】味道十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>6.</i>
                                            <span class="ttl font16">【聚餐宴请知识体系】聚餐宴请十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>7.</i>
                                            <span class="ttl font16">【家常菜知识体系】家常菜十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>8.</i>
                                            <span class="ttl font16">【火锅知识体系】火锅十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>9.</i>
                                            <span class="ttl font16">【菜系中餐知识体系】菜系中餐十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>10.</i>
                                            <span class="ttl font16">【贝螺类知识体系】贝螺类十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>11.</i>
                                            <span class="ttl font16">【冬装知识体系】冬装十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>12.</i>
                                            <span class="ttl font16">【整体衣柜知识体系】定制衣柜十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>13.</i>
                                            <span class="ttl font16">【全屋定制知识体系】全屋定制十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>14.</i>
                                            <span class="ttl font16">【暖气片知识体系】暖气片十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>15.</i>
                                            <span class="ttl font16">【集成灶知识体系】集成环保灶十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>16.</i>
                                            <span class="ttl font16">【集成墙面知识体系】集成墙板十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>17.</i>
                                            <span class="ttl font16">【集成吊顶知识体系】集成吊顶十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>18.</i>
                                            <span class="ttl font16">【即热式热水器知识体系】即热式热水器十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>19.</i>
                                            <span class="ttl font16">【国家森林公园知识体系】森林公园景观十大主题</span></div>
                                        <div class="item2 dhidden">
                                            <i>20.</i>
                                            <span class="ttl font16">【厨柜知识体系】橱柜十大主题</span></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </a>
                            </li>
                            <li class="item">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/pinpaibang/" style="background:url('{{$commonAssetUrl}}/sguide/img/23460-8459.jpg');">
                                    <div class="left">
                                        <div class="title font36">品牌榜</div>
                                        <div class="mintitle font20">十大品牌
                                            <i class="iconfont iconpinpaibang c999 icon-gengduo2"></i></div>
                                        <div class="img">
                                            <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/bd361-3854.png" /></div>
                                    </div>
                                    <div class="right pinpaibang">
                                        <div class="item2 dhidden">
                                            <img width="130" height="130" src="{{$commonAssetUrl}}/sguide/img/b1303-2815.jpg" />
                                            <span class="ttl font16">安全门</span></div>
                                        <div class="item2 dhidden">
                                            <img width="130" height="130" src="{{$commonAssetUrl}}/sguide/img/acf59-4022.jpg" />
                                            <span class="ttl font16">油漆涂料</span></div>
                                        <div class="item2 dhidden">
                                            <img width="130" height="130" src="{{$commonAssetUrl}}/sguide/m/img/bb7a2-9465.jpg" />
                                            <span class="ttl font16">水管管道</span></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </a>
                            </li>
                            <li class="item">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/wanggoubang/" style="background:url('{{$commonAssetUrl}}/sguide/img/a33ad-3651.jpg');">
                                    <div class="left">
                                        <div class="title font36">网购榜</div>
                                        <div class="mintitle font20">网店排行
                                            <i class="iconfont iconwanggoubang c999 icon-gengduo2"></i></div>
                                        <div class="img">
                                            <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/96cb6-1662.png" /></div>
                                    </div>
                                    <div class="right wanggoubang">
                                        <div class="item2">
                                            <div class="swipe">
                                                <div class="navcont swipecont" perview="1" autorun="5000">
                                                    <ul class="swipeul">
                                                        <li class=" active">
                                                            <div class="item3">
                                                                <img width="625" height="164" src="https://m.maigoo.com/ajaxstream/brand/?action=brandlogos&ids=985,33,15,3348,6709,1506,1555,3100,121,146,1347,3177,1483,34,12&xnum=5&imagetype=png" /></div>
                                                        </li>
                                                        <li class="">
                                                            <div class="item3">
                                                                <img width="625" height="164" src="https://m.maigoo.com/ajaxstream/brand/?action=brandlogos&ids=2911,5774,2029,4412,12487,36234,42,4211,16768,37824,37051,3756,17317,4063,17091&xnum=5&imagetype=png" /></div>
                                                        </li>
                                                        <li class="">
                                                            <div class="item3">
                                                                <img width="625" height="164" src="https://m.maigoo.com/ajaxstream/brand/?action=brandlogos&ids=4496,6040,929,8,2972,3022,1081,3879,4,442,40,2,6,8807,3681&xnum=5&imagetype=png" /></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </a>
                            </li>
                            <li class="item">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/zhaoshangbang/" style="background:url('{{$commonAssetUrl}}/sguide/img/eb88e-9502.jpg');">
                                    <div class="left">
                                        <div class="title font36">招商榜</div>
                                        <div class="mintitle font20">招商加盟
                                            <i class="iconfont iconzhaoshangbang c999 icon-gengduo2"></i></div>
                                        <div class="img">
                                            <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/d5697-6064.png" /></div>
                                    </div>
                                    <div class="right zhaoshangbang">
                                        <div class="item2 dhidden">
                                            <i>2</i>
                                            <img width="138" height="60" src="{{$commonAssetUrl}}/sguide/img/423f5-7312.jpg" />
                                            <span class="ttl font16">龙胜</span></div>
                                        <div class="item2 dhidden">
                                            <i>1</i>
                                            <img width="138" height="60" src="{{$commonAssetUrl}}/sguide/img/47fbb-4074.jpg" />
                                            <span class="ttl font16">名族</span></div>
                                        <div class="item2 dhidden">
                                            <i>3</i>
                                            <img width="138" height="60" src="{{$commonAssetUrl}}/sguide/img/3734c-4591.jpg" />
                                            <span class="ttl font16">大力</span></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </a>
                            </li>
                            <li class="item">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/quwenbang/" style="background:url('{{$commonAssetUrl}}/sguide/img/3aeea-3172.jpg');">
                                    <div class="left">
                                        <div class="title font36">趣闻榜</div>
                                        <div class="mintitle font20">生活排行
                                            <i class="iconfont iconquwenbang c999 icon-gengduo2"></i></div>
                                        <div class="img">
                                            <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/5db06-6142.png" /></div>
                                    </div>
                                    <div class="right quwenbang">
                                        <div class="item2 dhidden">
                                            <i>1.</i>
                                            <span class="ttl font16">十大网络电话软件 免费网络电话呼叫软件推荐 网络电话哪个软件好用</span></div>
                                        <div class="item2 dhidden">
                                            <i>2.</i>
                                            <span class="ttl font16">三国十大谋士排名 三国十大最强谋士排行榜 三国智囊排名</span></div>
                                        <div class="item2 dhidden">
                                            <i>3.</i>
                                            <span class="ttl font16">世界上最厉害的蜂 十大毒性最强的蜂 第一名已经杀死1000多人</span></div>
                                        <div class="item2 dhidden">
                                            <i>4.</i>
                                            <span class="ttl font16">2020十大BGM 2020年最火的十首BGM 2020最火背景音乐</span></div>
                                        <div class="item2 dhidden">
                                            <i>5.</i>
                                            <span class="ttl font16">淮扬菜十大名菜 淮扬菜国宴代表菜 淮扬名菜有哪些</span></div>
                                        <div class="item2 dhidden">
                                            <i>6.</i>
                                            <span class="ttl font16">十大壁纸软件排名 电脑壁纸软件哪个好用 动态壁纸软件有哪些</span></div>
                                        <div class="item2 dhidden">
                                            <i>7.</i>
                                            <span class="ttl font16">辽国皇帝顺序 辽国皇帝列表 辽国历代皇帝简介 辽国有多少位皇帝</span></div>
                                        <div class="item2 dhidden">
                                            <i>8.</i>
                                            <span class="ttl font16">2020年度十大最佳电影 2020最佳电影排行榜 好看的电影推荐</span></div>
                                        <div class="item2 dhidden">
                                            <i>9.</i>
                                            <span class="ttl font16">中国面积最大的十所大学排行 国内占地面积最大的高校有哪些</span></div>
                                        <div class="item2 dhidden">
                                            <i>10.</i>
                                            <span class="ttl font16">浙江十大名菜 浙菜最有名的菜有哪些 浙菜十大代表菜你吃过几道</span></div>
                                        <div class="item2 dhidden">
                                            <i>11.</i>
                                            <span class="ttl font16">吴孟达电影十大经典 吴孟达电影作品盘点 达叔最好看的电影</span></div>
                                        <div class="item2 dhidden">
                                            <i>12.</i>
                                            <span class="ttl font16">十大最适合送给男性朋友的礼物 送男生礼物排行榜 送男性朋友什么礼物好</span></div>
                                        <div class="item2 dhidden">
                                            <i>13.</i>
                                            <span class="ttl font16">十大漫画软件排行 免费漫画软件哪个好 好用的看漫画软件推荐</span></div>
                                        <div class="item2 dhidden">
                                            <i>14.</i>
                                            <span class="ttl font16">自然界智商最高的10大动物 世界十大高智商动物 动物智商排行</span></div>
                                        <div class="item2 dhidden">
                                            <i>15.</i>
                                            <span class="ttl font16">十大经典历史穿越小说 十大必看架空历史小说 好看的穿越古代小说推荐</span></div>
                                        <div class="item2 dhidden">
                                            <i>16.</i>
                                            <span class="ttl font16">十大音乐制作软件 好用的编曲软件推荐 音乐编辑软件哪个最好</span></div>
                                        <div class="item2 dhidden">
                                            <i>17.</i>
                                            <span class="ttl font16">十大最酷复古摩托车 复古摩托车排行榜 最帅的复古摩托车盘点</span></div>
                                        <div class="item2 dhidden">
                                            <i>18.</i>
                                            <span class="ttl font16">世界十大著名恐怖片 恐怖片排行榜前十名 最著名的十部恐怖电影</span></div>
                                        <div class="item2 dhidden">
                                            <i>19.</i>
                                            <span class="ttl font16">梁山108将排名 史上最全的梁山好汉108将排名榜</span></div>
                                        <div class="item2 dhidden">
                                            <i>20.</i>
                                            <span class="ttl font16">中国摩托车十大名牌 国产摩托车品牌排行 国产摩托车哪个牌子好</span></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="blockinfo brand10col4 col4" id="pos_brand10bang2">
                    <div class="itembox">
                        <ul>
                            <li class="item s1">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/renwubang/">
                                    <div class="title font24 b">人物榜</div>
                                    <div class="mintitle font14">名人榜单</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/0a72d-3513.png" /></div>
                                </a>
                            </li>
                            <li class="item s2">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/zhuangxiubang/">
                                    <div class="title font24 b">装修榜</div>
                                    <div class="mintitle font14">装修知识</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/bd063-8263.png" /></div>
                                </a>
                            </li>
                            <li class="item s3">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/wangdianbang/">
                                    <div class="title font24 b">网点榜</div>
                                    <div class="mintitle font14">服务网点</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/7eb2e-8765.png" /></div>
                                </a>
                            </li>
                            <li class="item s4">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/chanpinbang/">
                                    <div class="title font24 b">产品榜</div>
                                    <div class="mintitle font14">热门产品</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/6edea-2380.png" /></div>
                                </a>
                            </li>
                            <li class="item s5">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/yulebang/">
                                    <div class="title font24 b">娱乐榜</div>
                                    <div class="mintitle font14">娱乐八卦</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/c3a25-9291.png" /></div>
                                </a>
                            </li>
                            <li class="item s6">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/qichebang/">
                                    <div class="title font24 b">汽车榜</div>
                                    <div class="mintitle font14">价格排行</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/e669b-4786.png" /></div>
                                </a>
                            </li>
                            <li class="item s7">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/lvyoubang/">
                                    <div class="title font24 b">旅游榜</div>
                                    <div class="mintitle font14">热门景点</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/54fd1-9591.png" /></div>
                                </a>
                            </li>
                            <li class="item s8">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/meishibang/">
                                    <div class="title font24 b">美食榜</div>
                                    <div class="mintitle font14">热门排行</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/57f8f-4859.png" /></div>
                                </a>
                            </li>
                            <li class="item s9">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/fuwubang/">
                                    <div class="title font24 b">服务榜</div>
                                    <div class="mintitle font14">生活服务</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/5bb24-1933.png" /></div>
                                </a>
                            </li>
                            <li class="item s10">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/zhongguobang/">
                                    <div class="title font24 b">中国榜</div>
                                    <div class="mintitle font14">传统文化</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/c5f96-9046.png" /></div>
                                </a>
                            </li>
                            <li class="item s11">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/shijiebang/">
                                    <div class="title font24 b">世界榜</div>
                                    <div class="mintitle font14">全球景观</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/f4cf9-6621.png" /></div>
                                </a>
                            </li>
                            <li class="item s12">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/chengshibang/">
                                    <div class="title font24 b">城市榜</div>
                                    <div class="mintitle font14">热点城市</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/5bd0f-2797.png" /></div>
                                </a>
                            </li>
                            <li class="item s13">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/jujiaobang/">
                                    <div class="title font24 b">聚焦榜</div>
                                    <div class="mintitle font14">热点事件</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/16c99-9663.png" /></div>
                                </a>
                            </li>
                            <li class="item s14">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/tixibang/">
                                    <div class="title font24 b">体系榜</div>
                                    <div class="mintitle font14">串联知识</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/7077e-2177.png" /></div>
                                </a>
                            </li>
                            <li class="item s15">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/qiyebang/">
                                    <div class="title font24 b">企业榜</div>
                                    <div class="mintitle font14">品牌企业</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/c01a8-3376.png" /></div>
                                </a>
                            </li>
                            <li class="item s16">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/hangyebang/">
                                    <div class="title font24 b">行业榜</div>
                                    <div class="mintitle font14">行业分类</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/b2cc9-3185.png" /></div>
                                </a>
                            </li>
                            <li class="item s17">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/dianzanbang/">
                                    <div class="title font24 b">点赞榜</div>
                                    <div class="mintitle font14">点赞最多</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/40173-4013.png" /></div>
                                </a>
                            </li>
                            <li class="item s18">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/fenxiangbang/">
                                    <div class="title font24 b">分享榜</div>
                                    <div class="mintitle font14">分享最多</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/ce6c7-5917.png" /></div>
                                </a>
                            </li>
                            <li class="item s19">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/biaoshengbang/">
                                    <div class="title font24 b">飙升榜</div>
                                    <div class="mintitle font14">上升最快</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/b8e2d-2058.png" /></div>
                                </a>
                            </li>
                            <li class="item s20">
                                <a target="_blank" class="fff " href="https://www.maigoo.com/brand10/toupiaobang/">
                                    <div class="title font24 b">投票榜</div>
                                    <div class="mintitle font14">投票最多</div>
                                    <div class="img">
                                        <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/img/da809-1653.png" /></div>
                                </a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="pagecss" data-css="/public/css/maigoo/v2019/color.css,/public/css/maigoo/v2019/weui.min.css,/public/css/maigoo/v2019/brand10.css,/public/css/maigoo/v2019/block/brand10/brand10col1.css,/public/css/maigoo/v2019/block/brand10/brand10col4.css"></div>
                <div class="pagejs" data-js="/public/js/maigoo/v2019/public.js,/public/js/maigoo/v2019/event.js,/public/js/maigoo/v2019/weUI.js,/public/js/maigoo/v2019/block/brand10/brand10col1.js"></div>
            </div>
        </div>
        @include('brand.modules._right')
    </div>
</div>
<script language="javascript">var pac = 'brand10',
    pdo = 'index',
    pid = '',
    siteid = 0,
    CNPP = 'https://cnpp.cn/',
    catid = '',
    brandid = '',
    userid = '0',
    issm = '';
    var authorpiclist = null;</script>
<script type="text/javascript" src="{{$commonAssetUrl}}/sguide/js/brand10_index_25e399b82145bb206d7ad28c7eaf7113.js"></script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?de3f6fd28ec4ac19170f18e2a8777593";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>

@endsection

@extends('layouts.guide')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.guide._jscss', ['view' => $datas['view']])@endsection
@section('bodyClass')class="mobile "@endsection
@section('content')
        <div class="blockinfo brand10col1 " id="pos_brand10bang1">
            <div class="itembox">
                <ul>
                    <li class="item">
                        <a class="fff " href="https://m.maigoo.com/brand10/zhishibang/" style="background:url('{{$commonAssetUrl}}/sguide/m/img/4f426-5956.jpg');">
                            <div class="left">
                                <div class="title font18">知识榜</div>
                                <div class="mintitle font10">知识课堂
                                    <i class="iconfont icon-gengduo4"></i></div>
                                <div class="img">
                                    <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/62734-4703.png" /></div>
                            </div>
                            <div class="right zhishibang">
                                <div class="item2 dhidden">
                                    <i>1.</i>
                                    <span class="ttl font12">【综艺节目知识体系】综艺节目十大主题</span></div>
                                <div class="item2 dhidden">
                                    <i>2.</i>
                                    <span class="ttl font12">【鱼虾蟹知识体系】鱼虾蟹十大主题</span></div>
                                <div class="item2 dhidden">
                                    <i>3.</i>
                                    <span class="ttl font12">【肉类知识体系】肉类十大主题</span></div>
                                <div class="item2 dhidden">
                                    <i>4.</i>
                                    <span class="ttl font12">【面食知识体系】面点十大主题</span></div>
                                <div class="item2 dhidden">
                                    <i>5.</i>
                                    <span class="ttl font12">【口味知识体系】味道十大主题</span></div>
                                <div class="item2 dhidden">
                                    <i>6.</i>
                                    <span class="ttl font12">【聚餐宴请知识体系】聚餐宴请十大主题</span></div>
                                <div class="item2 dhidden">
                                    <i>7.</i>
                                    <span class="ttl font12">【家常菜知识体系】家常菜十大主题</span></div>
                                <div class="item2 dhidden">
                                    <i>8.</i>
                                    <span class="ttl font12">【火锅知识体系】火锅十大主题</span></div>
                                <div class="item2 dhidden">
                                    <i>9.</i>
                                    <span class="ttl font12">【菜系中餐知识体系】菜系中餐十大主题</span></div>
                                <div class="item2 dhidden">
                                    <i>10.</i>
                                    <span class="ttl font12">【贝螺类知识体系】贝螺类十大主题</span></div>
                                <div class="item2 dhidden">
                                    <i>11.</i>
                                    <span class="ttl font12">【冬装知识体系】冬装十大主题</span></div>
                                <div class="item2 dhidden">
                                    <i>12.</i>
                                    <span class="ttl font12">【整体衣柜知识体系】定制衣柜十大主题</span></div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </a>
                    </li>
                    <li class="item">
                        <a class="fff " href="https://m.maigoo.com/brand10/pinpaibang/" style="background:url('{{$commonAssetUrl}}/sguide/m/img/78ebd-9493.jpg');">
                            <div class="left">
                                <div class="title font18">品牌榜</div>
                                <div class="mintitle font10">十大品牌
                                    <i class="iconfont icon-gengduo4"></i></div>
                                <div class="img">
                                    <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/d36b1-1056.png" /></div>
                            </div>
                            <div class="right pinpaibang">
                                <div class="item2 dhidden">
                                    <img width="130" height="130" src="{{$commonAssetUrl}}/sguide/m/img/bb7a2-9465.jpg" />
                                    <span class="ttl font12">水管管道</span></div>
                                <div class="item2 dhidden">
                                    <img width="130" height="130" src="{{$commonAssetUrl}}/sguide/m/img/bb6f6-7477.jpg" />
                                    <span class="ttl font12">硅藻泥</span></div>
                                <div class="item2 dhidden">
                                    <img width="130" height="130" src="{{$commonAssetUrl}}/sguide/m/img/f1b2f-4723.jpg" />
                                    <span class="ttl font12">地板</span></div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </a>
                    </li>
                    <li class="item">
                        <a class="fff " href="https://m.maigoo.com/brand10/wanggoubang/" style="background:url('{{$commonAssetUrl}}/sguide/m/img/c8882-6393.jpg');">
                            <div class="left">
                                <div class="title font18">网购榜</div>
                                <div class="mintitle font10">网店排行
                                    <i class="iconfont icon-gengduo4"></i></div>
                                <div class="img">
                                    <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/2956e-4658.png" /></div>
                            </div>
                            <div class="right wanggoubang">
                                <div class="item2">
                                    <div class="swipe">
                                        <div class="navcont swipecont" perview="1" autorun="5000">
                                            <ul class="swipeul">
                                                <li class=" active">
                                                    <div class="item3">
                                                        <img width="500" height="164" src="https://m.maigoo.com/ajaxstream/brand/?action=brandlogos&ids=985,33,15,3348,6709,1506,1555,3100,121,146,1347,3177&xnum=4&imagetype=png" /></div>
                                                </li>
                                                <li class="">
                                                    <div class="item3">
                                                        <img width="500" height="164" src="https://m.maigoo.com/ajaxstream/brand/?action=brandlogos&ids=1483,34,12,2911,5774,2029,4412,12487,36234,42,4211,16768&xnum=4&imagetype=png" /></div>
                                                </li>
                                                <li class="">
                                                    <div class="item3">
                                                        <img width="500" height="164" src="https://m.maigoo.com/ajaxstream/brand/?action=brandlogos&ids=37824,37051,3756,17317,4063,17091,4496,6040,929,8,2972,3022&xnum=4&imagetype=png" /></div>
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
                        <a class="fff " href="https://m.maigoo.com/brand10/zhaoshangbang/" style="background:url('{{$commonAssetUrl}}/sguide/m/img/266bc-1056.jpg');">
                            <div class="left">
                                <div class="title font18">招商榜</div>
                                <div class="mintitle font10">招商加盟
                                    <i class="iconfont icon-gengduo4"></i></div>
                                <div class="img">
                                    <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/1c9ee-7635.png" /></div>
                            </div>
                            <div class="right zhaoshangbang">
                                <div class="item2 dhidden">
                                    <i>2</i>
                                    <img width="138" height="60" src="{{$commonAssetUrl}}/sguide/m/img/b4708-6864.jpg" />
                                    <span class="ttl font12">中广欧特斯</span></div>
                                <div class="item2 dhidden">
                                    <i>1</i>
                                    <img width="138" height="60" src="{{$commonAssetUrl}}/sguide/m/img/94c8f-5342.jpg" />
                                    <span class="ttl font12">肯帝亚</span></div>
                                <div class="item2 dhidden">
                                    <i>3</i>
                                    <img width="138" height="60" src="{{$commonAssetUrl}}/sguide/m/img/4968d-5015.jpg" />
                                    <span class="ttl font12">万嘉</span></div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </a>
                    </li>
                    <li class="item">
                        <a class="fff " href="https://m.maigoo.com/brand10/quwenbang/" style="background:url('{{$commonAssetUrl}}/sguide/m/img/104d9-1856.jpg');">
                            <div class="left">
                                <div class="title font18">趣闻榜</div>
                                <div class="mintitle font10">生活排行
                                    <i class="iconfont icon-gengduo4"></i></div>
                                <div class="img">
                                    <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/91f8f-7393.png" /></div>
                            </div>
                            <div class="right quwenbang">
                                <div class="item2 dhidden">
                                    <i>1.</i>
                                    <span class="ttl font12">十大网络电话软件 免费网络电话呼叫软件推荐 网络电话哪个软件好用</span></div>
                                <div class="item2 dhidden">
                                    <i>2.</i>
                                    <span class="ttl font12">三国十大谋士排名 三国十大最强谋士排行榜 三国智囊排名</span></div>
                                <div class="item2 dhidden">
                                    <i>3.</i>
                                    <span class="ttl font12">世界上最厉害的蜂 十大毒性最强的蜂 第一名已经杀死1000多人</span></div>
                                <div class="item2 dhidden">
                                    <i>4.</i>
                                    <span class="ttl font12">2020十大BGM 2020年最火的十首BGM 2020最火背景音乐</span></div>
                                <div class="item2 dhidden">
                                    <i>5.</i>
                                    <span class="ttl font12">淮扬菜十大名菜 淮扬菜国宴代表菜 淮扬名菜有哪些</span></div>
                                <div class="item2 dhidden">
                                    <i>6.</i>
                                    <span class="ttl font12">十大壁纸软件排名 电脑壁纸软件哪个好用 动态壁纸软件有哪些</span></div>
                                <div class="item2 dhidden">
                                    <i>7.</i>
                                    <span class="ttl font12">辽国皇帝顺序 辽国皇帝列表 辽国历代皇帝简介 辽国有多少位皇帝</span></div>
                                <div class="item2 dhidden">
                                    <i>8.</i>
                                    <span class="ttl font12">2020年度十大最佳电影 2020最佳电影排行榜 好看的电影推荐</span></div>
                                <div class="item2 dhidden">
                                    <i>9.</i>
                                    <span class="ttl font12">中国面积最大的十所大学排行 国内占地面积最大的高校有哪些</span></div>
                                <div class="item2 dhidden">
                                    <i>10.</i>
                                    <span class="ttl font12">浙江十大名菜 浙菜最有名的菜有哪些 浙菜十大代表菜你吃过几道</span></div>
                                <div class="item2 dhidden">
                                    <i>11.</i>
                                    <span class="ttl font12">吴孟达电影十大经典 吴孟达电影作品盘点 达叔最好看的电影</span></div>
                                <div class="item2 dhidden">
                                    <i>12.</i>
                                    <span class="ttl font12">十大最适合送给男性朋友的礼物 送男生礼物排行榜 送男性朋友什么礼物好</span></div>
                                <div class="item2 dhidden">
                                    <i>13.</i>
                                    <span class="ttl font12">十大漫画软件排行 免费漫画软件哪个好 好用的看漫画软件推荐</span></div>
                                <div class="item2 dhidden">
                                    <i>14.</i>
                                    <span class="ttl font12">自然界智商最高的10大动物 世界十大高智商动物 动物智商排行</span></div>
                                <div class="item2 dhidden">
                                    <i>15.</i>
                                    <span class="ttl font12">十大经典历史穿越小说 十大必看架空历史小说 好看的穿越古代小说推荐</span></div>
                                <div class="item2 dhidden">
                                    <i>16.</i>
                                    <span class="ttl font12">十大音乐制作软件 好用的编曲软件推荐 音乐编辑软件哪个最好</span></div>
                                <div class="item2 dhidden">
                                    <i>17.</i>
                                    <span class="ttl font12">十大最酷复古摩托车 复古摩托车排行榜 最帅的复古摩托车盘点</span></div>
                                <div class="item2 dhidden">
                                    <i>18.</i>
                                    <span class="ttl font12">世界十大著名恐怖片 恐怖片排行榜前十名 最著名的十部恐怖电影</span></div>
                                <div class="item2 dhidden">
                                    <i>19.</i>
                                    <span class="ttl font12">梁山108将排名 史上最全的梁山好汉108将排名榜</span></div>
                                <div class="item2 dhidden">
                                    <i>20.</i>
                                    <span class="ttl font12">中国摩托车十大名牌 国产摩托车品牌排行 国产摩托车哪个牌子好</span></div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="blockinfo brand10col4 " id="pos_brand10bang2">
            <div class="itembox">
                <ul>
                    <li class='item'>
                        <a class="fff s1" href="https://m.maigoo.com/brand10/renwubang/">
                            <div class="title font18">人物榜</div>
                            <div class="mintitle font10">名人榜单</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/651bd-3786.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s2" href="https://m.maigoo.com/brand10/zhuangxiubang/">
                            <div class="title font18">装修榜</div>
                            <div class="mintitle font10">装修知识</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/f68a8-5249.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s3" href="https://m.maigoo.com/brand10/wangdianbang/">
                            <div class="title font18">网点榜</div>
                            <div class="mintitle font10">服务网点</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/5f3c4-5008.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s4" href="https://m.maigoo.com/brand10/chanpinbang/">
                            <div class="title font18">产品榜</div>
                            <div class="mintitle font10">热门产品</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/60ca1-1689.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s5" href="https://m.maigoo.com/brand10/yulebang/">
                            <div class="title font18">娱乐榜</div>
                            <div class="mintitle font10">娱乐八卦</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/0a950-7868.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s6" href="https://m.maigoo.com/brand10/qichebang/">
                            <div class="title font18">汽车榜</div>
                            <div class="mintitle font10">价格排行</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/b3322-9689.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s7" href="https://m.maigoo.com/brand10/lvyoubang/">
                            <div class="title font18">旅游榜</div>
                            <div class="mintitle font10">热门景点</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/92140-9904.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s8" href="https://m.maigoo.com/brand10/meishibang/">
                            <div class="title font18">美食榜</div>
                            <div class="mintitle font10">热门排行</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/d34dd-1405.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s9" href="https://m.maigoo.com/brand10/fuwubang/">
                            <div class="title font18">服务榜</div>
                            <div class="mintitle font10">生活服务</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/0b75f-3205.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s10" href="https://m.maigoo.com/brand10/zhongguobang/">
                            <div class="title font18">中国榜</div>
                            <div class="mintitle font10">传统文化</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/0957f-4213.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s11" href="https://m.maigoo.com/brand10/shijiebang/">
                            <div class="title font18">世界榜</div>
                            <div class="mintitle font10">全球景观</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/d5603-3554.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s12" href="https://m.maigoo.com/brand10/chengshibang/">
                            <div class="title font18">城市榜</div>
                            <div class="mintitle font10">热点城市</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/cad72-5348.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s13" href="https://m.maigoo.com/brand10/jujiaobang/">
                            <div class="title font18">聚焦榜</div>
                            <div class="mintitle font10">热点事件</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/d7dda-2549.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s14" href="https://m.maigoo.com/brand10/tixibang/">
                            <div class="title font18">体系榜</div>
                            <div class="mintitle font10">串联知识</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/28a45-5877.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s15" href="https://m.maigoo.com/brand10/qiyebang/">
                            <div class="title font18">企业榜</div>
                            <div class="mintitle font10">品牌企业</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/7e6dc-8447.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s16" href="https://m.maigoo.com/brand10/hangyebang/">
                            <div class="title font18">行业榜</div>
                            <div class="mintitle font10">行业分类</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/b9848-3053.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s17" href="https://m.maigoo.com/brand10/dianzanbang/">
                            <div class="title font18">点赞榜</div>
                            <div class="mintitle font10">点赞最多</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/a09af-2121.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s18" href="https://m.maigoo.com/brand10/fenxiangbang/">
                            <div class="title font18">分享榜</div>
                            <div class="mintitle font10">分享最多</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/42bda-4594.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s19" href="https://m.maigoo.com/brand10/biaoshengbang/">
                            <div class="title font18">飙升榜</div>
                            <div class="mintitle font10">上升最快</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/f2ca8-1375.png" /></div>
                        </a>
                    </li>
                    <li class='item'>
                        <a class="fff s20" href="https://m.maigoo.com/brand10/toupiaobang/">
                            <div class="title font18">投票榜</div>
                            <div class="mintitle font10">投票最多</div>
                            <div class="img">
                                <img width="100" height="100" src="{{$commonAssetUrl}}/sguide/m/img/e1c71-6798.png" /></div>
                        </a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="pagecss" data-css="/public/css/mobile/v2019/color.css,/public/css/mobile/v2019/weui.min.css,/public/css/mobile/v2019/block/brand10/brand10col1.css,/public/css/mobile/v2019/block/brand10/brand10col4.css"></div>
        <div class="pagejs" data-js="/public/js/mobile/v2019/public.js,/public/js/mobile/v2019/event.js,/public/js/mobile/v2019/weUI.js,/public/js/mobile/v2019/block/brand10/brand10col1.js"></div>
@endsection

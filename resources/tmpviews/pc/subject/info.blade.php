@extends('layouts.guide')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.subject._jscss', ['view' => $datas['view']])@endsection
@section('bodyClass')class="pc "@endsection
@section('content')
<div id="wrap">
    <div id="container">
        <div class="leftlay">
            <div class="artcontent">
                <div class="tab blockinfo style1 col2" id="pos_searchlist">
                    <div class="blocktitle font26 ccc style1 ">
                        <span class="color1">
                            <em class="dhidden">文具用品热点聚焦</em>
                            <i class="l bg1">
                                <i class="bg2"></i>
                            </i>
                            <i class="r bg2">
                                <i class="bg3"></i>
                            </i>
                            <em class="l bg3"></em>
                            <em class="r bg3"></em>
                        </span>
                    </div>
                    <div class="tabmenubox hasttl">
                        <div class="tabmenu font20 ">
                            <div class="item color1 active" action="sort_">
                                <span>小编精选</span></div>
                            <div class="item color1 " action="sort_Attention">
                                <span>关注TOP</span></div>
                        </div>
                    </div>
                    <div class="tabcont">
                        <div class="licont " action="sort_">
                            <div class="blockinfo articlelist " id="pos_sort_">
                                <ul class="itembox ">
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/459429.html">品牌榜：2020-2021年文具用品十大品牌排行榜 投票结果公布【新】</a>
                                                <div class="description c999 line18em font14">2020-2021年最新的文具用品品牌榜发布了，文具用品十大品牌排行榜，本次发布的品牌榜单由CNPP大数据平台提供数据支持，综合分析研究了文...</div>
                                                <div class='other font13'>
                                                    <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/153969.html">文具/学习</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>4.4万</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>90</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/459429.html">
                                                <img src="{{$commonAssetUrl}}/sguide/m/img/09588-5671.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/578663.html">2021年粉笔十大品牌排行榜 无尘粉笔-彩色粉笔哪个牌子好用</a>
                                                <div class="description c999 line18em font14">本榜单由CN10排排榜技术研究部门和CNPP品牌数据研究部门通过资料收集整理，并基于大数据统计及人为根据市场和参数条件变化研究出2021年十...</div>
                                                <div class='other font13'>
                                                    <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/217068.html">粉笔</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                                    <span class="alevel font20 orange">★★★</span>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>1640</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>94</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/578663.html">
                                                <img src="{{$commonAssetUrl}}/sguide/m/img/d7f10-4562.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/522279.html">2021年10大文具用品品牌网店排行榜 晨光、得力、真彩文具用品上榜</a>
                                                <div class="description c999 line18em font14">2021年十大文具用品品牌网店排行榜出炉了，上榜的品牌有晨光、得力、真彩、齐心、白雪等，本榜单由CNPP大数据平台提供店铺数据支持，依据了网...</div>
                                                <div class='other font13'>
                                                    <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/4765.html">网店排行榜</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>2118</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>60</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/522279.html">
                                                <img src="{{$commonAssetUrl}}/sguide/m/img/b046d-8108.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/564757.html">2021年10大文具盒品牌网店排行榜 得力、晨光、巴布豆文具盒上榜</a>
                                                <div class="description c999 line18em font14">2021年十大文具盒网店排行榜出炉了，上榜的品牌有得力、晨光、巴布豆、迪士尼、芭比等，本榜单由CNPP大数据平台提供店铺数据支持，依据了网店...</div>
                                                <div class='other font13'>
                                                    <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/162627.html">文具盒</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/4765.html">网店排行榜</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>1506</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>61</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/564757.html">
                                                <img src="{{$commonAssetUrl}}/sguide/m/img/81d59-9036.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/564838.html">2021年10大宝珠笔品牌网店排行榜 派克、凌美、百利金宝珠笔上榜</a>
                                                <div class="description c999 line18em font14">2021年十大宝珠笔网店排行榜出炉了，上榜的品牌有派克、凌美、百利金、犀飞利、威迪文等，本榜单由CNPP大数据平台提供店铺数据支持，依据了网...</div>
                                                <div class='other font13'>
                                                    <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/209052.html">宝珠笔</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/4765.html">网店排行榜</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>1420</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>59</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/564838.html">
                                                <img src="{{$commonAssetUrl}}/sguide/m/img/2436e-5423.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/564788.html">2021年10大笔筒品牌网店排行榜 得力、晨光、广博笔筒上榜</a>
                                                <div class="description c999 line18em font14">2021年十大笔筒网店排行榜出炉了，上榜的品牌有得力、晨光、广博、三木、齐心等，本榜单由CNPP大数据平台提供店铺数据支持，依据了网店的产品...</div>
                                                <div class='other font13'>
                                                    <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/195571.html">笔筒</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/4765.html">网店排行榜</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>1178</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>95</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/564788.html">
                                                <img src="{{$commonAssetUrl}}/sguide/m/img/acb7b-3976.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/553523.html">2021年10大圆珠笔品牌网店排行榜 晨光、三菱、得力圆珠笔上榜</a>
                                                <div class="description c999 line18em font14">2021年十大圆珠笔网店排行榜出炉了，上榜的品牌有晨光、三菱、得力、百乐、施德楼等，本榜单由CNPP大数据平台提供店铺数据支持，依据了网店的...</div>
                                                <div class='other font13'>
                                                    <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/2956.html">圆珠笔</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/4765.html">网店排行榜</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>1326</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>62</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/553523.html">
                                                <img src="{{$commonAssetUrl}}/sguide/m/img/98030-5285.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/489604.html">【报告】2020年文具用品行业电子商务发展与分析 文具用品品牌网店分布情况</a>
                                                <div class="description c999 line18em font14">随着互联网的普及，网络购物逐渐融入生活，越来越多的人开始接受这一方便快捷的购物方式。网购的流行使得家庭办公族足不出户就可以采购自己心仪的家庭...</div>
                                                <div class='other font13'>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/1343.html">蜡笔</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>5511</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>80</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/489604.html">
                                                <img src="{{$commonAssetUrl}}/sguide/m/img/f7400-7027.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item nopic">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/575800.html">2021年10大墨汁品牌网店排行榜 李廷珪、周虎臣、一得阁墨汁上榜</a>
                                                <div class="description c999 line18em font14">2021年十大墨汁网店排行榜出炉了，上榜的品牌有李廷珪、周虎臣、一得阁、荣宝斋、雄狮等，本榜单由CNPP大数据平台提供店铺数据支持，依据了网...</div>
                                                <div class='other font13'>
                                                    <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/166240.html">墨汁</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/4765.html">网店排行榜</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>1413</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>46</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/525429.html">第十届茅盾文学奖正式公布 2019茅盾文学奖获奖作品集名单</a>
                                                <div class="description c999 line18em font14">茅盾文学奖是我国具有最高荣誉的四大文学奖项之一，由中国作家协会主办，根据茅盾先生遗愿，为鼓励优秀长篇小说创作、推动中国社会主义文学的繁荣而设...</div>
                                                <div class='other font13'>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/160124.html">文学奖</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>1万</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>51</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/525429.html">
                                                <img src="{{$commonAssetUrl}}/sguide/m/img/a494f-9131.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item nopic">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/555221.html">十大宝珠笔品牌排行榜 宝珠笔哪个牌子好</a>
                                                <div class="description c999 line18em font14">宝珠笔或走珠笔是水性的圆珠笔。宝珠笔的书写原理主要是利用球珠在书写时与纸面直接接触产生摩擦力，使宝珠在球座内滚动，带出笔芯内的油墨或墨水,以...</div>
                                                <div class='other font13'>
                                                    <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/209052.html">宝珠笔</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/2956.html">圆珠笔</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>3415</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>58</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/417612.html">汇金财务装订机钻刀免费领取</a>
                                                <div class="description c999 line18em font14">用户购买带有“免磨钻刀永久免费用”活动注册卡的汇金财务装订机，可申请免费领取“免磨钻刀礼包”一份。活动详情如下。</div>
                                                <div class='other font13'>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/644.html">装订机</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/1590.html">印刷机械</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>1441</span>
                                                        <span>
                                                            <i class="iconfont icon-pinglun"></i>1</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>53</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/417612.html">
                                                <img src="{{$commonAssetUrl}}/sguide/img/b3c25-7779.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/568597.html">得力笔芯保质期多久 得力笔芯好用吗</a>
                                                <div class="description c999 line18em font14">我们去文具店买笔，一般都会买一盒笔芯当备用替换，最常见的品牌就是晨光、真彩和得力。得力其实一直都是以“办公文具”为主营业务而不是专业制笔，不...</div>
                                                <div class='other font13'>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/3166.html">得力DELI</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/154010.html">水性笔</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>1442</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/568597.html">
                                                <img src="{{$commonAssetUrl}}/sguide/img/bbdbe-7569.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item nopic">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/460997.html">日本最值得买的10款神奇文具盘点</a>
                                                <div class="description c999 line18em font14">提到日本的发明，总是让人脑洞大开！每次看到他们的设计都会让人眼前一亮，这次日本设计师又会带来怎样的创意文具呢？一起来看看吧!</div>
                                                <div class='other font13'>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/153969.html">文具/学习</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>3.8万</span>
                                                        <span>
                                                            <i class="iconfont icon-pinglun"></i>1</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>124</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/481188.html">文具用品品牌大全 文具用品有哪些品牌 文具用品知名品牌名录【品牌库】</a>
                                                <div class="description c999 line18em font14">文具用品品牌大全【品牌库】，为你提供文具用品行业的绝大部份出名的品牌收录展示，如果你想了解文具用品有哪些品牌，文具用品哪些品牌比较出名，主要...</div>
                                                <div class='other font13'>
                                                    <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/153918.html">品牌等级</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>2384</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>40</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/481188.html">
                                                <img src="{{$commonAssetUrl}}/sguide/img/891b8-8020.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/528102.html">故宫文具品牌发布会在京举行 2019年年底实现全品类覆盖</a>
                                                <div class="description c999 line18em font14">2019故宫文具品牌发布会在京举行，人民日报社编委、海外版总编辑王慧敏、秘书长乔永清、故宫博物院院长王旭东等领导专家及优秀企业代表齐聚故宫建...</div>
                                                <div class='other font13'>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/156685.html">聚焦品牌</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>1301</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>100</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/528102.html">
                                                <img src="{{$commonAssetUrl}}/sguide/img/1c658-1856.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/522934.html">2019年第一批网售产品(学生文具)质量国家监督专项抽查产品及其企业名单</a>
                                                <div class="description c999 line18em font14">为加强网售产品质量安全监管，营造安全放心的网络消费环境，市场监管总局组织开展了2019年第一批网售产品质量国家监督专项抽查。共抽取177批次...</div>
                                                <div class='other font13'>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/153969.html">文具/学习</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>1511</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>97</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/522934.html">
                                                <img src="{{$commonAssetUrl}}/sguide/img/1a389-1494.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item ">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/539098.html">赋能文创产业新格局 故宫文具与东方童画品牌合作签约仪式在京举行</a>
                                                <div class="description c999 line18em font14">故宫文具与东方童画品牌合作签约仪式在人民日报社新媒体大楼举行。双方拟于2020年开始，共谋发展，赋能文创产业新格局。</div>
                                                <div class='other font13'>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/3079.html">美术</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>1229</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>23</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img ">
                                            <a target="_blank" href="https://www.maigoo.com/news/539098.html">
                                                <img src="{{$commonAssetUrl}}/sguide/img/c9666-4207.jpg" /></a>
                                        </div>
                                    </li>
                                    <li class="item nopic">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/316505.html">武义县获“中国文教用品生产基地”和“中国扑克牌生产基地”称号</a>
                                                <div class="description c999 line18em font14">2012年10月21日，“中国文教用品生产基地”和“中国扑克牌生产基地”称号授牌仪式在浙江武义县隆重举行，授牌仪式上，中国文教体育用品协会副...</div>
                                                <div class='other font13'>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/152725.html">热门行业</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/1052.html">扑克</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>2422</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>86</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item nopic">
                                        <div class="tablecell">
                                            <div class="contbox">
                                                <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/news/458568.html">效率达人必备：让你更专注的夏普电子记事本</a>
                                                <div class="description c999 line18em font14">记事本放包包的话，宝宝的肩膀吃不消呢，像我们这种电子时代成长起来的年轻人，最喜欢这种兼具传统又不失新潮的好设备！</div>
                                                <div class='other font13'>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/2966.html">SHARP夏普</a>
                                                    <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                                    <div class="attention ccc">
                                                        <span>
                                                            <i class="iconfont icon-chakan"></i>5447</span>
                                                        <span>
                                                            <i class="iconfont icon-dianzan1"></i>96</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="ads" style=" min-height:20px;margin-bottom:-20px;">
                                    <script type="text/javascript" src="{{$commonAssetUrl}}/sguide/js/nm.js"></script>
                                </div>
                                <div class="blockmorebox font16 ">
                                    <div class="morebtn c333 ajaxload" data-action="searchlist" data-subaction="sort_" data-thirdaction="" data-page="2" data-start="" data-defaultids="" data-sort="" data-tabnum="" data-maxpage="" onclick="getData(this)">
                                        <i class="iconfont icon-gengduo"></i>
                                        <span>加载更多</span></div>
                                    <a class="next dn" href="/news/list_797.html?action=searchlist&subaction=sort_&page=2">下一页</a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="licont dn" action="sort_Attention">
                            <div class="blockinfo articlelist " id="pos_sort_Attention">
                                <ul class="itembox ">
                                    <div class="ajaxload" data-action="searchlist" data-subaction="sort_Attention" data-thirdaction="" data-page="1" data-start="" data-defaultids="" data-sort="Attention_desc" data-postdata="">
                                        <img src="{{$commonAssetUrl}}/sguide/img/5b7e7-3668.gif" /></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bline bline1"></div>
                <div id="mzsmcontent">
                    <span class="mzsm_title center font16 b c333">
                        <i class="iconfont icon-tebieshuoming orange"></i>网站提醒和声明</span>
                    <div class="mzsm font14 c666 line18em">
                        <div class="mzsm_box">
                            <span class="">本站为注册用户提供信息存储空间服务，由于更新时间等问题，可能存在信息错误的情况，本站不保证所提供信息的准确性、完整性、合法性和真实性，如有侵权、错误信息或任何问题，请及时联系我们，我们将在第一时间删除或更正。</span>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.cnpp.cn/relief/');">版权申明>></a>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/submit/jiucuo/');">纠错>></a>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/submit/audit/');">申请删除>></a>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/answer/355.html');">投诉侵权>></a>
                            <span class="">网页上相关信息的知识产权归网站方所有(包括但不限于文字、图片、图表、著作权、商标权、为用户提供的商业信息等)，非经许可不得抄袭或使用。</span>
                            <div class="clear" style="margin-bottom:20px;"></div>
                            <span class="b c333">提交说明：</span>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/submit/news/');">快速提交发布>></a>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/answer/77.html');">查看提交帮助>></a>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/user/login/');">注册登录>></a></div>
                    </div>
                    <div class="moremzsm">
                        <img src="{{$commonAssetUrl}}/sguide/m/img/dec8c-3557.gif" onclick="$('#mzsmcontent').find('.mzsm').css('height','auto');$(this).parent().remove();" /></div>
                </div>
                <div class="pagecss" data-css="/public/css/maigoo/v2019/color.css,/public/css/maigoo/v2019/weui.min.css,/public/css/maigoo/v2019/news/list.css,/public/css/maigoo/v2019/block/publicblock/articlelist.css,/public/css/maigoo/v2019/block/publicblock/mzsm.css"></div>
                <div class="pagejs" data-js="/public/js/maigoo/v2019/public.js,/public/js/maigoo/v2019/event.js,/public/js/maigoo/v2019/weUI.js,/public/js/maigoo/v2019/block/publicblock/articlelist.js"></div>
            </div>
        </div>
        <div class="rightlay">
            <div id="position">
                <div class="posotionnav font12">
                    <a href="https://www.maigoo.com/" class="color1">
                        <i class="iconfont icon-cat_5295"></i>品牌</a>
                    <i class="song">></i>
                    <a href="https://www.maigoo.com/news/" class="color1">热点聚焦</a>
                    <i class="song">></i>
                    <a href="https://www.maigoo.com/news/list_5196.html" class="color1">教育/母婴</a>
                    <i class="song">></i>
                    <a href="https://www.maigoo.com/news/list_5076.html" class="color1">文具/学习</a></div>
            </div>
            <div id="rightmenu">
                <div class="joinbtt">
                    <a class="color1" target="_blank" href="https://www.maigoo.com/news/542423.html" _hover-ignore="1">
                        <i class="iconfont icon-pinpaibang"></i>企业入驻</a>
                    <a class="color1" target="_blank" href="https://www.cnpp.cn/user/?action=news#submit" _hover-ignore="1">
                        <i class="iconfont icon-yulebang"></i>提交文章资讯</a>
                    <div class="clear"></div>
                </div>
                <dl class="xglist">
                    <dt class="c999 dt">页面相关分类</dt>
                    <dd>
                        <ul>
                            <li>
                                <a href="https://www.maigoo.com/maigoo/151wj_index.html" title="文具用品" target="_blank" class="c333">
                                    <img width="80" height="80" src="{{$commonAssetUrl}}/sguide/m/img/28c57-5852.png" width="100" />
                                    <div class="dhidden line18em">文具用品</div></a>
                            </li>
                            <li>
                                <a href="https://www.maigoo.com/news/list_1490.html" title="办公用品" target="_blank" class="c333">
                                    <img width="80" height="80" src="{{$commonAssetUrl}}/sguide/img/5f74c-2873.png" width="100" />
                                    <div class="dhidden line18em">办公用品</div></a>
                            </li>
                            <li>
                                <a href="https://www.maigoo.com/news/list_784.html" title="中性笔" target="_blank" class="c333">
                                    <img width="80" height="80" src="{{$commonAssetUrl}}/sguide/img/e5b64-8059.png" width="100" />
                                    <div class="dhidden line18em">中性笔</div></a>
                            </li>
                            <li>
                                <a href="https://www.maigoo.com/news/list_783.html" title="钢笔" target="_blank" class="c333">
                                    <img width="80" height="80" src="{{$commonAssetUrl}}/sguide/img/34a3e-8555.png" width="100" />
                                    <div class="dhidden line18em">钢笔</div></a>
                            </li>
                            <li>
                                <a href="https://www.maigoo.com/news/list_790.html" title="墨水" target="_blank" class="c333">
                                    <img width="80" height="80" src="{{$commonAssetUrl}}/sguide/img/85416-9073.png" width="100" />
                                    <div class="dhidden line18em">墨水</div></a>
                            </li>
                            <li>
                                <a href="https://www.maigoo.com/news/list_796.html" title="美术用品" target="_blank" class="c333">
                                    <img width="80" height="80" src="{{$commonAssetUrl}}/sguide/img/95d20-8575.png" width="100" />
                                    <div class="dhidden line18em">美术用品</div></a>
                            </li>
                            <li>
                                <a href="https://www.maigoo.com/news/list_778.html" title="学习机" target="_blank" class="c333">
                                    <img width="80" height="80" src="{{$commonAssetUrl}}/sguide/img/49907-7333.png" width="100" />
                                    <div class="dhidden line18em">学习机</div></a>
                            </li>
                            <li>
                                <a href="https://www.maigoo.com/news/list_779.html" title="点读机" target="_blank" class="c333">
                                    <img width="80" height="80" src="{{$commonAssetUrl}}/sguide/img/f4b3e-7415.png" width="100" />
                                    <div class="dhidden line18em">点读机</div></a>
                            </li>
                            <li>
                                <a href="https://www.maigoo.com/news/list_2230.html" title="点读笔" target="_blank" class="c333">
                                    <img width="80" height="80" src="{{$commonAssetUrl}}/sguide/img/52d74-4982.png" width="100" />
                                    <div class="dhidden line18em">点读笔</div></a>
                            </li>
                            <li>
                                <a href="https://www.maigoo.com/news/list_4787.html" title="早教机" target="_blank" class="c333">
                                    <img width="80" height="80" src="{{$commonAssetUrl}}/sguide/img/63ba7-6493.png" width="100" />
                                    <div class="dhidden line18em">早教机</div></a>
                            </li>
                            <li>
                                <a href="https://www.maigoo.com/news/list_777.html" title="复读机" target="_blank" class="c333">
                                    <img width="80" height="80" src="{{$commonAssetUrl}}/sguide/img/d12bf-6629.png" width="100" />
                                    <div class="dhidden line18em">复读机</div></a>
                            </li>
                            <div class="clear"></div>
                        </ul>
                    </dd>
                </dl>
                <dl class="brandlevelright">
                    <dd>
                        <ul>
                            <li>
                                <a target="_blank" href="https://www.maigoo.com/maigoo/2729sd_index.html" class="c333">
                                    <img src="{{$commonAssetUrl}}/sguide/img/51405-4384.png" width="60" height="60" />
                                    <div class="dhidden line18em">大品牌</div></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.maigoo.com/maigoo/2730cmsb_index.html" class="c333">
                                    <img src="{{$commonAssetUrl}}/sguide/img/cc381-2939.png" width="60" height="60" />
                                    <div class="dhidden line18em">驰名保护</div></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.maigoo.com/maigoo/4630gjqy_index.html" class="c333">
                                    <img src="{{$commonAssetUrl}}/sguide/img/02b1d-7431.png" width="60" height="60" />
                                    <div class="dhidden line18em">高新企业</div></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.maigoo.com/maigoo/2733ss_index.html" class="c333">
                                    <img src="{{$commonAssetUrl}}/sguide/img/3e42b-9411.png" width="60" height="60" />
                                    <div class="dhidden line18em">上市公司</div></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.maigoo.com/maigoo/4813qqy_index.html" class="c333">
                                    <img src="{{$commonAssetUrl}}/sguide/img/226d4-2613.png" width="60" height="60" />
                                    <div class="dhidden line18em">500强企业</div></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.maigoo.com/maigoo/4635ssmp_index.html" class="c333">
                                    <img src="{{$commonAssetUrl}}/sguide/img/6b632-2854.png" width="60" height="60" />
                                    <div class="dhidden line18em">名牌产品</div></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.maigoo.com/maigoo/4636zmsb_index.html" class="c333">
                                    <img src="{{$commonAssetUrl}}/sguide/img/4370e-5593.png" width="60" height="60" />
                                    <div class="dhidden line18em">著名商标</div></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.maigoo.com/maigoo/2733zxqy_index.html" class="c333">
                                    <img src="{{$commonAssetUrl}}/sguide/img/e1ae1-6482.png" width="60" height="60" />
                                    <div class="dhidden line18em">中小企业</div></a>
                            </li>
                            <li>
                                <a target="_blank" href="/brand/search/?isopen=py" class="c333">
                                    <img src="{{$commonAssetUrl}}/sguide/img/05c57-8594.png" width="60" height="60" />
                                    <div class="dhidden line18em">首字母</div></a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </dd>
                </dl>
                <dl class="searchhot">
                    <dt class="menu font12">
                        <span class="active">热门搜索</span>
                        <span class="">热门分类</span>
                        <span class="">品牌分类</span>
                        <span class="">知识分类</span></dt>
                    <dd class="contbox">
                        <div class="cont hotsearch">
                            <a href="https://www.maigoo.com/search/?q=干衣机&dynamic=1" target="_blank">
                                <i class="num c999">1</i>
                                <span class="name c333 dhidden">干衣机</span>
                                <span class="colorline">
                                    <i style="width:100%"></i>
                                </span>
                                <span class="counts font12 c999">86,654</span></a>
                            <a href="https://www.maigoo.com/search/?q=除湿机&dynamic=1" target="_blank">
                                <i class="num c999">2</i>
                                <span class="name c333 dhidden">除湿机</span>
                                <span class="colorline">
                                    <i style="width:95%"></i>
                                </span>
                                <span class="counts font12 c999">85,214</span></a>
                            <a href="https://www.maigoo.com/search/?q=春装&dynamic=1" target="_blank">
                                <i class="num c999">3</i>
                                <span class="name c333 dhidden">春装</span>
                                <span class="colorline">
                                    <i style="width:90%"></i>
                                </span>
                                <span class="counts font12 c999">82,358</span></a>
                            <a href="https://www.maigoo.com/search/?q=青团&dynamic=1" target="_blank">
                                <i class="num c999">4</i>
                                <span class="name c333 dhidden">青团</span>
                                <span class="colorline">
                                    <i style="width:85%"></i>
                                </span>
                                <span class="counts font12 c999">81,322</span></a>
                            <a href="https://www.maigoo.com/search/?q=手机&dynamic=1" target="_blank">
                                <i class="num c999">5</i>
                                <span class="name c333 dhidden">手机</span>
                                <span class="colorline">
                                    <i style="width:80%"></i>
                                </span>
                                <span class="counts font12 c999">73,009</span></a>
                            <a href="https://www.maigoo.com/search/?q=护肤品&dynamic=1" target="_blank">
                                <i class="num c999">6</i>
                                <span class="name c333 dhidden">护肤品</span>
                                <span class="colorline">
                                    <i style="width:75%"></i>
                                </span>
                                <span class="counts font12 c999">69,870</span></a>
                            <a href="https://www.maigoo.com/search/?q=地板&dynamic=1" target="_blank">
                                <i class="num c999">7</i>
                                <span class="name c333 dhidden">地板</span>
                                <span class="colorline">
                                    <i style="width:70%"></i>
                                </span>
                                <span class="counts font12 c999">66,990</span></a>
                            <a href="https://www.maigoo.com/search/?q=集成灶&dynamic=1" target="_blank">
                                <i class="num c999">8</i>
                                <span class="name c333 dhidden">集成灶</span>
                                <span class="colorline">
                                    <i style="width:65%"></i>
                                </span>
                                <span class="counts font12 c999">66,601</span></a>
                            <a href="https://www.maigoo.com/search/?q=家具&dynamic=1" target="_blank">
                                <i class="num c999">9</i>
                                <span class="name c333 dhidden">家具</span>
                                <span class="colorline">
                                    <i style="width:60%"></i>
                                </span>
                                <span class="counts font12 c999">65,000</span></a>
                            <a href="https://www.maigoo.com/search/?q=女鞋&dynamic=1" target="_blank">
                                <i class="num c999">10</i>
                                <span class="name c333 dhidden">女鞋</span>
                                <span class="colorline">
                                    <i style="width:55%"></i>
                                </span>
                                <span class="counts font12 c999">60,845</span></a>
                            <div class="clear"></div>
                        </div>
                        <div class="cont bg2 bd1 dn">
                            <a class="item dhidden color1" href="" target="_blank">集成灶</a>
                            <a class="item dhidden color1" href="" target="_blank">集成墙面</a>
                            <a class="item dhidden color1" href="" target="_blank">墙布</a>
                            <a class="item dhidden color1" href="" target="_blank">集成吊顶</a>
                            <a class="item dhidden color1" href="" target="_blank">水管管道</a>
                            <a class="item dhidden color1" href="" target="_blank">地板</a>
                            <a class="item dhidden color1" href="" target="_blank">油漆涂料</a>
                            <a class="item dhidden color1" href="" target="_blank">硅藻泥</a>
                            <a class="item dhidden color1" href="" target="_blank">安全门</a>
                            <a class="item dhidden color1" href="" target="_blank">防火门</a>
                            <a class="item dhidden color1" href="" target="_blank">净水器</a>
                            <a class="item dhidden color1" href="" target="_blank">全屋定制</a>
                            <a class="item dhidden color1" href="" target="_blank">整体衣柜</a>
                            <a class="item dhidden color1" href="" target="_blank">厨柜</a>
                            <a class="item dhidden color1" href="" target="_blank">石膏线</a>
                            <a class="item dhidden color1" href="" target="_blank">指纹锁-智能锁</a>
                            <a class="item dhidden color1" href="" target="_blank">开关插座</a>
                            <a class="item dhidden color1" href="" target="_blank">木门</a>
                            <a class="item dhidden color1" href="" target="_blank">铝合金门窗</a>
                            <a class="item dhidden color1" href="" target="_blank">生态板</a>
                            <a class="item dhidden color1" href="" target="_blank">强化复合地板</a>
                            <a class="item dhidden color1" href="" target="_blank">实木地板</a>
                            <a class="item dhidden color1" href="" target="_blank">整体家装</a>
                            <a class="item dhidden color1" href="" target="_blank">防水材料</a>
                            <a class="item dhidden color1" href="" target="_blank">润滑油</a>
                            <a class="item dhidden color1" href="" target="_blank">学习桌</a>
                            <a class="item dhidden color1" href="" target="_blank">麻将机</a>
                            <a class="item dhidden color1" href="" target="_blank">即热式热水器</a>
                            <div class="clear"></div>
                        </div>
                        <div class="cont bg2 bd1 dn">
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_7"></i>建材/家居</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_1"></i>科技/厨电</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_4"></i>美妆/装扮</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_8"></i>美食/饮食</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_9"></i>汽车/工具</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_5"></i>日用生活品</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_10"></i>健康/保健</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_5196"></i>教育/母婴</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_48"></i>运动/娱乐</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_5176"></i>服务相关</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_4867"></i>品牌/名企</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_4868"></i>网购/精选</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_2446"></i>招商加盟</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_2827"></i>热点聚焦</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_2455"></i>城市/地区</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_5231"></i>排行榜</a>
                            <div class="clear"></div>
                        </div>
                        <div class="cont bg2 bd1 dn">
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_4871"></i>装修/居住</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_2451"></i>知识百科</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_3665"></i>人群/名人</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_5206"></i>旅游/出行</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_2462"></i>百态趣闻</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_3038"></i>季节/节日</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_5214"></i>自然地理</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_5215"></i>历史人文</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_8"></i>美食/饮食</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_10"></i>健康/保健</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_5196"></i>教育/母婴</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_4"></i>美妆/装扮</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_5176"></i>服务相关</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_5589"></i>图库美图</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_2455"></i>城市/地区</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_2827"></i>热点聚焦</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_7"></i>建材/家居</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_1"></i>科技/厨电</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_4868"></i>网购/精选</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_48"></i>运动/娱乐</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_9"></i>汽车/工具</a>
                            <a class="item dhidden color1" href="" target="_blank">
                                <i class="iconfont icon-cat_5"></i>日用生活品</a>
                            <div class="clear"></div>
                        </div>
                    </dd>
                </dl>
                <dl class="hotblocks">
                    <dt class="c999 dt">热门模块</dt>
                    <dd>
                        <div class="swipe">
                            <div class="navcont swipecont" perview="1" autorun="5000">
                                <ul class="swipeul">
                                    <li class=" active">
                                        <div class="slice">
                                            <div class="item s1">
                                                <a target="_blank" class="fff" href="https://www.maigoo.com/brand10/zhishibang/">
                                                    <div class="title font16 b">知识榜</div>
                                                    <div class="mintitle font12">知识百科</div>
                                                    <div class="img">
                                                        <img width="60" height="60" src="{{$commonAssetUrl}}/sguide/img/0de0c-9334.png" /></div>
                                                </a>
                                            </div>
                                            <div class="item s2">
                                                <a target="_blank" class="fff" href="https://www.maigoo.com/brand10/pinpaibang/">
                                                    <div class="title font16 b">品牌榜</div>
                                                    <div class="mintitle font12">十大品牌</div>
                                                    <div class="img">
                                                        <img width="60" height="60" src="{{$commonAssetUrl}}/sguide/img/04ba0-9363.png" /></div>
                                                </a>
                                            </div>
                                            <div class="item s3">
                                                <a target="_blank" class="fff" href="https://www.maigoo.com/brand10/wanggoubang/">
                                                    <div class="title font16 b">网购榜</div>
                                                    <div class="mintitle font12">网店排行</div>
                                                    <div class="img">
                                                        <img width="60" height="60" src="{{$commonAssetUrl}}/sguide/img/360f8-3669.png" /></div>
                                                </a>
                                            </div>
                                            <div class="item s4">
                                                <a target="_blank" class="fff" href="https://www.maigoo.com/brand10/zhaoshangbang/">
                                                    <div class="title font16 b">招商榜</div>
                                                    <div class="mintitle font12">招商加盟</div>
                                                    <div class="img">
                                                        <img width="60" height="60" src="{{$commonAssetUrl}}/sguide/img/fb8f7-3835.png" /></div>
                                                </a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="slice">
                                            <div class="item s5">
                                                <a target="_blank" class="fff" href="https://www.maigoo.com/brand10/quwenbang/">
                                                    <div class="title font16 b">趣闻榜</div>
                                                    <div class="mintitle font12">生活排行</div>
                                                    <div class="img">
                                                        <img width="60" height="60" src="{{$commonAssetUrl}}/sguide/img/d276d-3183.png" /></div>
                                                </a>
                                            </div>
                                            <div class="item s6">
                                                <a target="_blank" class="fff" href="https://www.maigoo.com/brand10/renwubang/">
                                                    <div class="title font16 b">人物榜</div>
                                                    <div class="mintitle font12">名人榜单</div>
                                                    <div class="img">
                                                        <img width="60" height="60" src="{{$commonAssetUrl}}/sguide/img/a019c-9023.png" /></div>
                                                </a>
                                            </div>
                                            <div class="item s7">
                                                <a target="_blank" class="fff" href="https://www.maigoo.com/brand10/zhuangxiubang/">
                                                    <div class="title font16 b">装修榜</div>
                                                    <div class="mintitle font12">装修知识</div>
                                                    <div class="img">
                                                        <img width="60" height="60" src="{{$commonAssetUrl}}/sguide/img/47c7b-8490.png" /></div>
                                                </a>
                                            </div>
                                            <div class="item s8">
                                                <a target="_blank" class="fff" href="https://www.maigoo.com/brand10/wangdianbang/">
                                                    <div class="title font16 b">网点榜</div>
                                                    <div class="mintitle font12">服务网点</div>
                                                    <div class="img">
                                                        <img width="60" height="60" src="{{$commonAssetUrl}}/sguide/img/220aa-7633.png" /></div>
                                                </a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="slice">
                                            <div class="item s9">
                                                <a target="_blank" class="fff" href="https://www.maigoo.com/brand10/chanpinbang/">
                                                    <div class="title font16 b">产品榜</div>
                                                    <div class="mintitle font12">热门产品</div>
                                                    <div class="img">
                                                        <img width="60" height="60" src="{{$commonAssetUrl}}/sguide/img/2d672-9078.png" /></div>
                                                </a>
                                            </div>
                                            <div class="item s10">
                                                <a target="_blank" class="fff" href="https://www.maigoo.com/brand10/yulebang/">
                                                    <div class="title font16 b">娱乐榜</div>
                                                    <div class="mintitle font12">娱乐八卦</div>
                                                    <div class="img">
                                                        <img width="60" height="60" src="{{$commonAssetUrl}}/sguide/img/11a55-5336.png" /></div>
                                                </a>
                                            </div>
                                            <div class="item s11">
                                                <a target="_blank" class="fff" href="https://www.maigoo.com/brand10/qichebang/">
                                                    <div class="title font16 b">汽车榜</div>
                                                    <div class="mintitle font12">价格排行</div>
                                                    <div class="img">
                                                        <img width="60" height="60" src="{{$commonAssetUrl}}/sguide/img/f919c-3508.png" /></div>
                                                </a>
                                            </div>
                                            <div class="item s12">
                                                <a target="_blank" class="fff" href="https://www.maigoo.com/brand10/lvyoubang/">
                                                    <div class="title font16 b">旅游榜</div>
                                                    <div class="mintitle font12">热门景点</div>
                                                    <div class="img">
                                                        <img width="60" height="60" src="{{$commonAssetUrl}}/sguide/img/8b738-4776.png" /></div>
                                                </a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </dd>
                </dl>
                <div class="leftbrandlogo">
                    <ul>
                        <li>
                            <a href="https://www.maigoo.com/maigoocms/special/qinzi/154chenguang.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/8d43c-3290.gif" /></a>
                        </li>
                        <li>
                            <a href="https://www.maigoo.com/maigoocms/special/qinzi/151deli.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/7a719-6493.gif" /></a>
                        </li>
                        <li>
                            <a href="https://www.maigoo.com/maigoocms/special/qinzi/151lemei.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/2eba9-3024.gif" /></a>
                        </li>
                        <li>
                            <a href="https://www.maigoo.com/maigoocms/special/qinzi/151qixin.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/c63ba-5340.gif" /></a>
                        </li>
                        <li>
                            <a href="https://www.maigoo.com/maigoocms/special/qinzi/152AIHAO.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/ea38c-2087.gif" /></a>
                        </li>
                        <li>
                            <a href="https://www.maigoo.com/maigoocms/special/qinzi/151baixue.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/3d415-3041.gif" /></a>
                        </li>
                        <li>
                            <a href="https://www.maigoo.com/maigoocms/special/qinzi/151beifa.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/907fe-3403.gif" /></a>
                        </li>
                        <li>
                            <a href="https://www.maigoo.com/maigoocms/special/bggj/151gb.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/df0e8-2928.gif" /></a>
                        </li>
                        <li>
                            <a href="https://www.maigoo.com/maigoocms/special/bggj/151SUNWOOD.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/b69dd-1729.gif" /></a>
                        </li>
                        <li>
                            <a href="https://www.maigoo.com/maigoocms/special/qinzi/152jwn.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/d6b40-8960.gif" /></a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <a class="downloadapp" href="https://www.cnpp.cn/android/maigooapp/" target="_blank">
                    <img width="260" height="150" src="{{$commonAssetUrl}}/sguide/img/b3ebb-4215.jpg" /></a>
                <dl class="datacounts">
                    <dd>
                        <a href="https://www.maigoo.com/brand10/pinpaibang/#posbrandvottelist" target="_blank" class="c666 line2em dhidden">已有
                            <i>1630957</i>个品牌入驻</a>
                        <a href="https://www.maigoo.com/zhaoshang/search/" target="_blank" class="c666 line2em dhidden">更新
                            <i>515648</i>个招商信息</a>
                        <a href="https://www.maigoo.com/zhaoshang/#posjmform" target="_blank" class="c666 line2em dhidden">已发布
                            <i>1448514</i>个加盟需求</a>
                        <a href="https://www.maigoo.com/brand10/dianzanbang/#pospraisebang2" target="_blank" class="c666 line2em dhidden">已有
                            <i>982522</i>条品牌点赞</a>
                    </dd>
                </dl>
            </div>
        </div>
        <div class="clear"></div>
        @include('brand.modules._right')
    </div>
</div>
<script language="javascript">var pac = 'news',
    pdo = 'list',
    pid = '797',
    siteid = 0,
    CNPP = 'https://cnpp.cn/',
    catid = '',
    brandid = '',
    userid = '0',
    issm = '';
    var authorpiclist = null;</script>
<script type="text/javascript" src="{{$commonAssetUrl}}/sguide/js/news_list_fc66180d0e2385c2b188311632bb993e.js"></script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?de3f6fd28ec4ac19170f18e2a8777593";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
</body>

</html>
@endsection

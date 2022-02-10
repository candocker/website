@extends('layouts.guide')

@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.brand._jscss', ['view' => $datas['view']])@endsection
@section('bodyClass')class="pc blockstyle2 "@endsection

@section('content')
<div id="wrap">
    <div id="container">
        <div class="leftlay">
            <div class="artcontent">
                <div class="searchselect" id="searchlist">
                    <div class="blockinfo hastitle nofix col3" id="pos_searchlist">
                        <div class="flexbox">
                            <div class="blocktitle font26 ccc style1 ">
                                <span class="color1">
                                    <em class="dhidden">晨光文具M&G服务网点</em>
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
                            <div class="tabcont">
                                <dl class="licont" data-keyname="areaid" data-val="">
                                    <dt class="c999">
                                        <em>热门地区</em></dt>
                                    <dd>
                                        <div class="dbox">
                                            <div class="leval" data-areaid="9">上海市</div>
                                            <div class="leval" data-areaid="1">北京市</div>
                                            <div class="leval" data-areaid="19">广东省</div>
                                            <div class="leval" data-areaid="11">浙江省</div>
                                            <div class="leval" data-areaid="10">江苏省</div>
                                            <div class="leval" data-areaid="2">天津市</div>
                                            <div class="leval" data-areaid="3">河北省</div>
                                            <div class="leval" data-areaid="15">山东省</div>
                                            <div class="leval" data-areaid="22">重庆市</div>
                                            <div class="leval" data-areaid="13">福建省</div>
                                            <div class="leval" data-areaid="17">湖北省</div>
                                            <div class="leval" data-areaid="18">湖南省</div>
                                            <div class="leval" data-areaid="7">吉林省</div>
                                            <div class="leval" data-areaid="6">辽宁省</div>
                                            <div class="leval" data-areaid="12">安徽省</div>
                                            <div class="leval" data-areaid="16">河南省</div>
                                            <div class="leval" data-areaid="14">江西省</div>
                                            <div class="leval" data-areaid="23">四川省</div>
                                            <div class="leval" data-areaid="20">广西</div>
                                            <div class="leval" data-areaid="21">海南省</div>
                                            <div class="leval" data-areaid="25">云南省</div>
                                            <div class="leval" data-areaid="27">陕西省</div>
                                            <div class="leval" data-areaid="24">贵州省</div>
                                            <div class="leval" data-areaid="28">甘肃省</div>
                                            <div class="leval" data-areaid="4">山西省</div>
                                            <div class="leval" data-areaid="30">宁夏</div>
                                            <div class="leval" data-areaid="29">青海省</div>
                                            <div class="leval" data-areaid="5">内蒙古</div>
                                            <div class="leval" data-areaid="8">黑龙江</div>
                                            <div class="leval" data-areaid="31">新疆</div>
                                            <div class="leval" data-areaid="26">西藏</div>
                                            <div class="leval" data-areaid="3203">香港</div>
                                            <div class="leval" data-areaid="3202">台湾</div>
                                            <div class="leval" data-areaid="3204">澳门</div>
                                            <div class="leval" data-areaid="3224">海外国际</div></div>
                                    </dd>
                                </dl>
                                <dl class="licont" data-keyname="shoptypeid" data-val="">
                                    <dt class="c999">
                                        <em>网点类型</em></dt>
                                    <dd>
                                        <div class="dbox">
                                            <div class="leval" data-shoptypeid="1">旗舰店或专柜销售（企业官方直销）</div>
                                            <div class="leval" data-shoptypeid="2">大型连锁商场销售</div>
                                            <div class="leval" data-shoptypeid="3">商铺店面销售</div>
                                            <div class="leval" data-shoptypeid="4">分公司-办事处</div>
                                            <div class="leval" data-shoptypeid="5">服务售后信息网点</div>
                                            <div class="leval" data-shoptypeid="6">经销代理销售</div>
                                            <div class="leval" data-shoptypeid="7">外链官方服务网点</div>
                                            <div class="leval" data-shoptypeid="8">B2B网店</div></div>
                                    </dd>
                                </dl>
                                <dl class="haveselect">
                                    <dt class="c999">
                                        <em>已选条件</em></dt>
                                    <dd>
                                        <a data-keyname="areaid" class="orange" data-val="" style="display:none;">
                                            <em>热门地区</em>
                                            <i>X</i>
                                        </a>
                                        <a data-keyname="shoptypeid" class="orange" data-val="" style="display:none;">
                                            <em>网点类型</em>
                                            <i>X</i>
                                        </a>
                                        <a data-keyname="" class="orange" data-val="" style="display:none;">
                                            <em>综合排行</em>
                                            <i>X</i>
                                        </a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="blockinfo shopcol " id="pos_resultlist">
                        <ul class="itembox">
                            <li class="item nopic">
                                <div class="cont font16 c666">
                                    <div class="title dhidden b">
                                        <a target="_blank" class=" color1 font20" href="https://www.maigoo.com/shop/364840.html">晨光文具联系电话 晨光文具服务网点</a></div>
                                    <div class="type dhidden">
                                        <span>类型：</span>
                                        <span>外链官方服务网点</span></div>
                                    <div class="adress dhidden ">
                                        <span>网址：</span>
                                        <a target="_blank" href="http://www.mg-pen.com/index.php?service" class="color1">http://www.mg-pen.com/index.php?service</a></div>
                                    <div class="phone dhidden">
                                        <span>电话：</span>
                                        <span>021-57474488</span></div>
                                    <div class="other dhidden">
                                        <span>等级：</span>
                                        <span class="cfe741c">官网权威信息</span>
                                        <span>（来自官网 ）</span></div>
                                </div>
                                <div class="reditbox">
                                    <div class="u-tj-flag">
                                        <ul class="u-inner-flag">
                                            <li class="sa">推荐指数</li>
                                            <li class="sb">9.1</li>
                                            <li class="sc">
                                                <div class="u-tjzs">
                                                    <div class="u-tjzs-out">
                                                        <div class="u-tjzs-in" style="width:90%;">&nbsp;</div>&nbsp;</div></div>
                                            </li>
                                            <li class="sd">共
                                                <i count="attention">509</i>人关注</li></ul>
                                    </div>
                                </div>
                            </li>
                            <li class="item ">
                                <div class="img">
                                    <a target="_blank" href="https://www.maigoo.com/shop/314173.html">
                                        <img width="240" height="154" src="{{$commonAssetUrl}}/sguide/m/img/7b7e4-6191.jpg" /></div>
                                </a>
                                <div class="cont font16 c666">
                                    <div class="title dhidden b">
                                        <a target="_blank" class=" color1 font20" href="https://www.maigoo.com/shop/314173.html">湖南晨光文具礼品有限公司</a></div>
                                    <div class="type dhidden">
                                        <span>类型：</span>
                                        <span>分公司-办事处</span></div>
                                    <div class="adress dhidden">
                                        <span>地址：</span>
                                        <span>湖南省 长沙市 雨花区 高桥西大门综合楼三楼</span></div>
                                    <div class="phone dhidden">
                                        <span>电话：</span>
                                        <span>0731-84610222</span></div>
                                    <div class="other dhidden">
                                        <span>等级：</span>
                                        <span class="cfe741c">官网权威信息</span>
                                        <span>（来自官网 ）</span></div>
                                </div>
                                <div class="reditbox">
                                    <div class="u-tj-flag">
                                        <ul class="u-inner-flag">
                                            <li class="sa">推荐指数</li>
                                            <li class="sb">9.3</li>
                                            <li class="sc">
                                                <div class="u-tjzs">
                                                    <div class="u-tjzs-out">
                                                        <div class="u-tjzs-in" style="width:92%;">&nbsp;</div>&nbsp;</div></div>
                                            </li>
                                            <li class="sd">共
                                                <i count="attention">2327</i>人关注</li></ul>
                                    </div>
                                </div>
                            </li>
                            <li class="item ">
                                <div class="img">
                                    <a target="_blank" href="https://www.maigoo.com/shop/314174.html">
                                        <img width="240" height="154" src="{{$commonAssetUrl}}/sguide/m/img/d20d7-3723.jpg" /></div>
                                </a>
                                <div class="cont font16 c666">
                                    <div class="title dhidden b">
                                        <a target="_blank" class=" color1 font20" href="https://www.maigoo.com/shop/314174.html">哈尔滨晨光三美文具有限公司</a></div>
                                    <div class="type dhidden">
                                        <span>类型：</span>
                                        <span>分公司-办事处</span></div>
                                    <div class="adress dhidden">
                                        <span>地址：</span>
                                        <span>黑龙江 哈尔滨市 省道外区清真寺街42号2楼晨光文具</span></div>
                                    <div class="phone dhidden">
                                        <span>电话：</span>
                                        <span>0451-88305301</span></div>
                                    <div class="other dhidden">
                                        <span>等级：</span>
                                        <span class="cfe741c">官网权威信息</span>
                                        <span>（来自官网 ）</span></div>
                                </div>
                                <div class="reditbox">
                                    <div class="u-tj-flag">
                                        <ul class="u-inner-flag">
                                            <li class="sa">推荐指数</li>
                                            <li class="sb">9.1</li>
                                            <li class="sc">
                                                <div class="u-tjzs">
                                                    <div class="u-tjzs-out">
                                                        <div class="u-tjzs-in" style="width:90%;">&nbsp;</div>&nbsp;</div></div>
                                            </li>
                                            <li class="sd">共
                                                <i count="attention">2079</i>人关注</li></ul>
                                    </div>
                                </div>
                            </li>
                            <li class="item ">
                                <div class="img">
                                    <a target="_blank" href="https://www.maigoo.com/shop/314170.html">
                                        <img width="240" height="154" src="{{$commonAssetUrl}}/sguide/m/img/02295-9551.jpg" /></div>
                                </a>
                                <div class="cont font16 c666">
                                    <div class="title dhidden b">
                                        <a target="_blank" class=" color1 font20" href="https://www.maigoo.com/shop/314170.html">重庆晨光文具销售有限公司</a></div>
                                    <div class="type dhidden">
                                        <span>类型：</span>
                                        <span>分公司-办事处</span></div>
                                    <div class="adress dhidden">
                                        <span>地址：</span>
                                        <span>重庆市 渝中区 小什字人寿大厦13F-7</span></div>
                                    <div class="phone dhidden">
                                        <span>电话：</span>
                                        <span>023-63105581</span></div>
                                    <div class="other dhidden">
                                        <span>等级：</span>
                                        <span class="cfe741c">官网权威信息</span>
                                        <span>（来自官网 ）</span></div>
                                </div>
                                <div class="reditbox">
                                    <div class="u-tj-flag">
                                        <ul class="u-inner-flag">
                                            <li class="sa">推荐指数</li>
                                            <li class="sb">9.1</li>
                                            <li class="sc">
                                                <div class="u-tjzs">
                                                    <div class="u-tjzs-out">
                                                        <div class="u-tjzs-in" style="width:90%;">&nbsp;</div>&nbsp;</div></div>
                                            </li>
                                            <li class="sd">共
                                                <i count="attention">885</i>人关注</li></ul>
                                    </div>
                                </div>
                            </li>
                            <li class="item ">
                                <div class="img">
                                    <a target="_blank" href="https://www.maigoo.com/shop/314169.html">
                                        <img width="240" height="154" src="{{$commonAssetUrl}}/sguide/m/img/1f2d7-5632.jpg" /></div>
                                </a>
                                <div class="cont font16 c666">
                                    <div class="title dhidden b">
                                        <a target="_blank" class=" color1 font20" href="https://www.maigoo.com/shop/314169.html">义乌市晨兴文具用品有限公司</a></div>
                                    <div class="type dhidden">
                                        <span>类型：</span>
                                        <span>分公司-办事处</span></div>
                                    <div class="adress dhidden">
                                        <span>地址：</span>
                                        <span>浙江省 金华市 义乌市 廿三里街道开元南街长宁路1号-1</span></div>
                                    <div class="phone dhidden">
                                        <span>电话：</span>
                                        <span>0579-85086418</span></div>
                                    <div class="other dhidden">
                                        <span>等级：</span>
                                        <span class="cfe741c">官网权威信息</span>
                                        <span>（来自官网 ）</span></div>
                                </div>
                                <div class="reditbox">
                                    <div class="u-tj-flag">
                                        <ul class="u-inner-flag">
                                            <li class="sa">推荐指数</li>
                                            <li class="sb">9.1</li>
                                            <li class="sc">
                                                <div class="u-tjzs">
                                                    <div class="u-tjzs-out">
                                                        <div class="u-tjzs-in" style="width:90%;">&nbsp;</div>&nbsp;</div></div>
                                            </li>
                                            <li class="sd">共
                                                <i count="attention">617</i>人关注</li></ul>
                                    </div>
                                </div>
                            </li>
                            <li class="item ">
                                <div class="img">
                                    <a target="_blank" href="https://www.maigoo.com/shop/314168.html">
                                        <img width="240" height="154" src="{{$commonAssetUrl}}/sguide/m/img/0e0da-5058.jpg" /></div>
                                </a>
                                <div class="cont font16 c666">
                                    <div class="title dhidden b">
                                        <a target="_blank" class=" color1 font20" href="https://www.maigoo.com/shop/314168.html">南京晨日文化用品销售有限公司</a></div>
                                    <div class="type dhidden">
                                        <span>类型：</span>
                                        <span>分公司-办事处</span></div>
                                    <div class="adress dhidden">
                                        <span>地址：</span>
                                        <span>江苏省 南京市 鼓楼区建宁路16号河图广场H-15号</span></div>
                                    <div class="phone dhidden">
                                        <span>电话：</span>
                                        <span>025-85513395</span></div>
                                    <div class="other dhidden">
                                        <span>等级：</span>
                                        <span class="cfe741c">官网权威信息</span>
                                        <span>（来自官网 ）</span></div>
                                </div>
                                <div class="reditbox">
                                    <div class="u-tj-flag">
                                        <ul class="u-inner-flag">
                                            <li class="sa">推荐指数</li>
                                            <li class="sb">9.1</li>
                                            <li class="sc">
                                                <div class="u-tjzs">
                                                    <div class="u-tjzs-out">
                                                        <div class="u-tjzs-in" style="width:90%;">&nbsp;</div>&nbsp;</div></div>
                                            </li>
                                            <li class="sd">共
                                                <i count="attention">577</i>人关注</li></ul>
                                    </div>
                                </div>
                            </li>
                            <li class="item ">
                                <div class="img">
                                    <a target="_blank" href="https://www.maigoo.com/shop/314167.html">
                                        <img width="240" height="154" src="{{$commonAssetUrl}}/sguide/m/img/57e33-3190.jpg" /></div>
                                </a>
                                <div class="cont font16 c666">
                                    <div class="title dhidden b">
                                        <a target="_blank" class=" color1 font20" href="https://www.maigoo.com/shop/314167.html">上海晨光文具销售有限公司</a></div>
                                    <div class="type dhidden">
                                        <span>类型：</span>
                                        <span>分公司-办事处</span></div>
                                    <div class="adress dhidden">
                                        <span>地址：</span>
                                        <span>上海市 普陀区 中山北路1108号星沪中文具批发市场1号楼晨光大楼</span></div>
                                    <div class="phone dhidden">
                                        <span>电话：</span>
                                        <span>021-51808988</span></div>
                                    <div class="other dhidden">
                                        <span>等级：</span>
                                        <span class="cfe741c">官网权威信息</span>
                                        <span>（来自官网 ）</span></div>
                                </div>
                                <div class="reditbox">
                                    <div class="u-tj-flag">
                                        <ul class="u-inner-flag">
                                            <li class="sa">推荐指数</li>
                                            <li class="sb">9.1</li>
                                            <li class="sc">
                                                <div class="u-tjzs">
                                                    <div class="u-tjzs-out">
                                                        <div class="u-tjzs-in" style="width:90%;">&nbsp;</div>&nbsp;</div></div>
                                            </li>
                                            <li class="sd">共
                                                <i count="attention">905</i>人关注</li></ul>
                                    </div>
                                </div>
                            </li>
                            <li class="item ">
                                <div class="img">
                                    <a target="_blank" href="https://www.maigoo.com/shop/314166.html">
                                        <img width="240" height="154" src="{{$commonAssetUrl}}/sguide/m/img/cfa5e-6540.jpg" /></div>
                                </a>
                                <div class="cont font16 c666">
                                    <div class="title dhidden b">
                                        <a target="_blank" class=" color1 font20" href="https://www.maigoo.com/shop/314166.html">天津逸美晨光文具有限公司</a></div>
                                    <div class="type dhidden">
                                        <span>类型：</span>
                                        <span>分公司-办事处</span></div>
                                    <div class="adress dhidden">
                                        <span>地址：</span>
                                        <span>天津市 红桥区 新三条石大街金领国际13-2-204</span></div>
                                    <div class="phone dhidden">
                                        <span>电话：</span>
                                        <span>022-27286916</span></div>
                                    <div class="other dhidden">
                                        <span>等级：</span>
                                        <span class="cfe741c">官网权威信息</span>
                                        <span>（来自官网 ）</span></div>
                                </div>
                                <div class="reditbox">
                                    <div class="u-tj-flag">
                                        <ul class="u-inner-flag">
                                            <li class="sa">推荐指数</li>
                                            <li class="sb">9.1</li>
                                            <li class="sc">
                                                <div class="u-tjzs">
                                                    <div class="u-tjzs-out">
                                                        <div class="u-tjzs-in" style="width:90%;">&nbsp;</div>&nbsp;</div></div>
                                            </li>
                                            <li class="sd">共
                                                <i count="attention">1156</i>人关注</li></ul>
                                    </div>
                                </div>
                            </li>
                            <li class="item ">
                                <div class="img">
                                    <a target="_blank" href="https://www.maigoo.com/shop/314165.html">
                                        <img width="240" height="154" src="{{$commonAssetUrl}}/sguide/m/img/ef0d5-4846.jpg" /></div>
                                </a>
                                <div class="cont font16 c666">
                                    <div class="title dhidden b">
                                        <a target="_blank" class=" color1 font20" href="https://www.maigoo.com/shop/314165.html">北京中韩晨光文具礼品有限公司</a></div>
                                    <div class="type dhidden">
                                        <span>类型：</span>
                                        <span>分公司-办事处</span></div>
                                    <div class="adress dhidden">
                                        <span>地址：</span>
                                        <span>北京市 东城区 永外东革新里42号永外城文化用品市场西侧停车楼一层XT-27号晨光文具</span></div>
                                    <div class="phone dhidden">
                                        <span>电话：</span>
                                        <span>010-67226368</span></div>
                                    <div class="other dhidden">
                                        <span>等级：</span>
                                        <span class="cfe741c">官网权威信息</span>
                                        <span>（来自官网 ）</span></div>
                                </div>
                                <div class="reditbox">
                                    <div class="u-tj-flag">
                                        <ul class="u-inner-flag">
                                            <li class="sa">推荐指数</li>
                                            <li class="sb">9.1</li>
                                            <li class="sc">
                                                <div class="u-tjzs">
                                                    <div class="u-tjzs-out">
                                                        <div class="u-tjzs-in" style="width:90%;">&nbsp;</div>&nbsp;</div></div>
                                            </li>
                                            <li class="sd">共
                                                <i count="attention">2127</i>人关注</li></ul>
                                    </div>
                                </div>
                            </li>
                            <li class="item nopic">
                                <div class="cont font16 c666">
                                    <div class="title dhidden b">
                                        <a target="_blank" class=" color1 font20" href="https://www.maigoo.com/shop/314191.html">福州三美晨光文具礼品销售有限公司</a></div>
                                    <div class="type dhidden">
                                        <span>类型：</span>
                                        <span>分公司-办事处</span></div>
                                    <div class="adress dhidden">
                                        <span>地址：</span>
                                        <span>福建省 福州市 仓山区上藤路121号璟珲商厦3层06号</span></div>
                                    <div class="phone dhidden">
                                        <span>电话：</span>
                                        <span>0591-83478282</span></div>
                                    <div class="other dhidden">
                                        <span>等级：</span>
                                        <span class="cfe741c">官网权威信息</span>
                                        <span>（来自官网 ）</span></div>
                                </div>
                                <div class="reditbox">
                                    <div class="u-tj-flag">
                                        <ul class="u-inner-flag">
                                            <li class="sa">推荐指数</li>
                                            <li class="sb">8.7</li>
                                            <li class="sc">
                                                <div class="u-tjzs">
                                                    <div class="u-tjzs-out">
                                                        <div class="u-tjzs-in" style="width:86%;">&nbsp;</div>&nbsp;</div></div>
                                            </li>
                                            <li class="sd">共
                                                <i count="attention">89</i>人关注</li></ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="blockmorebox font16 ">
                            <div class="morebtn c333" data-action="searchlist" data-subaction="resultlist" data-thirdaction="" data-page="2" data-start="" data-defaultids="" data-sort="" data-tabnum="" data-maxpage="" onclick="getData(this)">
                                <i class="iconfont icon-gengduo"></i>
                                <span>加载更多</span></div>
                            <a class="next dn" href="/brand/shop_2411.html?action=searchlist&subaction=resultlist&page=2">下一页</a>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="bline bline1"></div>
                <div class="blockinfo webshopcol " id="pos_brandwebshop">
                    <div class="blocktitle font26 ccc style1 ">
                        <span class="color1">
                            <em class="dhidden">晨光品牌网店</em>
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
                    <div class="itembox">
                        <ul>
                            <li class="item">
                                <div class="imgbox">
                                    <a target="_blank" href="https://www.maigoo.com/webshop/66213.html">
                                        <img src="{{$commonAssetUrl}}/sguide/img/2f3e9-9798.jpg" /></a>
                                </div>
                                <div class="cont">
                                    <ul>
                                        <li class="webtitle font18">
                                            <a target="_blank" isconvert=1 rel="nofollow" href="https://s.click.taobao.com/t?e=m%3D2%26s%3DSw3bmfcaPBEcQipKwQzePDAVflQIoZepyK8Cckff7TVRAdhuF14FMV8qrMWjnlXA1aH1Hk3GeOhQGJRg6iVmCquNNJwpiecKuyyTDi1DterblIwp3swM8O%2FBas0tvb4eZz42eVlqqJTBwBLHPsOVpfdFsh68tKJtDoIsMWFLM5EPwnWhYHnzVnyMgFoeq%2BJ3IYULNg46oBA%3D&union_lens=lensId:TAPI@1603075636@0b082173_1337_1753ec0feae_92b8@01" class="title c333 dhidden">晨光旗舰店</a></li>
                                        <li class="shoplevel font14 line15em">
                                            <img src="{{$commonAssetUrl}}/sguide/img/5a10f-2488.gif" />
                                            <em class="c999">顶级卖家</em>
                                            <span class="typename">旗舰店</span></li>
                                        <li class="c999 font14 line15em">推荐指数 &nbsp;38515</li>
                                        <li class="buybtn">
                                            <a target="_blank" isconvert=1 rel="nofollow" href="https://s.click.taobao.com/t?e=m%3D2%26s%3DSw3bmfcaPBEcQipKwQzePDAVflQIoZepyK8Cckff7TVRAdhuF14FMV8qrMWjnlXA1aH1Hk3GeOhQGJRg6iVmCquNNJwpiecKuyyTDi1DterblIwp3swM8O%2FBas0tvb4eZz42eVlqqJTBwBLHPsOVpfdFsh68tKJtDoIsMWFLM5EPwnWhYHnzVnyMgFoeq%2BJ3IYULNg46oBA%3D&union_lens=lensId:TAPI@1603075636@0b082173_1337_1753ec0feae_92b8@01" class="font12">进店逛一逛></a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li class="item">
                                <div class="imgbox">
                                    <a target="_blank" href="https://www.maigoo.com/webshop/272076.html">
                                        <img src="{{$commonAssetUrl}}/sguide/img/cb5b9-5608.jpg" /></a>
                                </div>
                                <div class="cont">
                                    <ul>
                                        <li class="webtitle font18">
                                            <a target="_blank" isconvert=1 rel="nofollow" href="https://union-click.jd.com/jdc?e=&p=AyIGZRprFQMTBlQaWxUHEDcRRANLXSJeEF4aVwkMGQlLBkgdSVJKSQVJHEpYAE8SCQITBlQaWhUCFwVKQh5JXyJdPU48RWN5UTUcPQ95bFclfyxrXlpnWRdrEgcUBVwcXRcyGg9cGlsQByI3VRprQ2wSBlQaWhQCEgJXK1kUAxEDUx1SFQUiB1ETWB0AGgRQElkRACIAVRJrFQAVBVUcUxEFGwA7WmslMhE3ZStYJQIiWBFGBiUAEwZREg%3D%3D" class="title c333 dhidden">晨光自营旗舰店</a></li>
                                        <li class="shoplevel font14 line15em">
                                            <img src="{{$commonAssetUrl}}/sguide/m/img/1bbcc-3594.gif" />
                                            <em class="c999">初级卖家</em>
                                            <span class="typename">自营</span></li>
                                        <li class="c999 font14 line15em">推荐指数 &nbsp;29996</li>
                                        <li class="buybtn">
                                            <a target="_blank" isconvert=1 rel="nofollow" href="https://union-click.jd.com/jdc?e=&p=AyIGZRprFQMTBlQaWxUHEDcRRANLXSJeEF4aVwkMGQlLBkgdSVJKSQVJHEpYAE8SCQITBlQaWhUCFwVKQh5JXyJdPU48RWN5UTUcPQ95bFclfyxrXlpnWRdrEgcUBVwcXRcyGg9cGlsQByI3VRprQ2wSBlQaWhQCEgJXK1kUAxEDUx1SFQUiB1ETWB0AGgRQElkRACIAVRJrFQAVBVUcUxEFGwA7WmslMhE3ZStYJQIiWBFGBiUAEwZREg%3D%3D" class="font12">进店逛一逛></a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li class="item">
                                <div class="imgbox">
                                    <a target="_blank" href="https://www.maigoo.com/webshop/422690.html">
                                        <img src="{{$commonAssetUrl}}/sguide/img/3073d-4938.jpg" /></a>
                                </div>
                                <div class="cont">
                                    <ul>
                                        <li class="webtitle font18">
                                            <a target="_blank" isconvert=1 rel="nofollow" href="https://union-click.jd.com/jdc?e=&p=AyIGZRprHAUSBlAYa1FdSlkKKwJQR1NFXgVFSVJPWkpADgpQTFtLQwRAVlsbXBxbFAcRGAxeB0gydE4%2BGAUXcFpiUAEIRkMXTgNyMA9ZRAtZK1wQBBAOUh1ZJQoaDlQbXhAyIgdUKxp7AhMGVhlSEgciBVQaWBEEFA5VHGsVBhoEXR5TFwERAFcYaxICGzdVGVwXAhUPURxSEmxTN2UrWCUyIgRlG2tKRk9aZRlaFAYb" class="title c333 dhidden">晨光文具品牌旗舰店</a></li>
                                        <li class="shoplevel font14 line15em">
                                            <img src="{{$commonAssetUrl}}/sguide/m/img/1bbcc-3594.gif" />
                                            <em class="c999">顶级卖家</em>
                                            <span class="typename">旗舰店</span></li>
                                        <li class="c999 font14 line15em">推荐指数 &nbsp;7648</li>
                                        <li class="buybtn">
                                            <a target="_blank" isconvert=1 rel="nofollow" href="https://union-click.jd.com/jdc?e=&p=AyIGZRprHAUSBlAYa1FdSlkKKwJQR1NFXgVFSVJPWkpADgpQTFtLQwRAVlsbXBxbFAcRGAxeB0gydE4%2BGAUXcFpiUAEIRkMXTgNyMA9ZRAtZK1wQBBAOUh1ZJQoaDlQbXhAyIgdUKxp7AhMGVhlSEgciBVQaWBEEFA5VHGsVBhoEXR5TFwERAFcYaxICGzdVGVwXAhUPURxSEmxTN2UrWCUyIgRlG2tKRk9aZRlaFAYb" class="font12">进店逛一逛></a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li class="item">
                                <div class="imgbox">
                                    <a target="_blank" href="https://www.maigoo.com/webshop/345711.html">
                                        <img src="{{$commonAssetUrl}}/sguide/img/2f747-8108.jpg" /></a>
                                </div>
                                <div class="cont">
                                    <ul>
                                        <li class="webtitle font18">
                                            <a target="_blank" isconvert=1 rel="nofollow" href="https://tb.jiuxinban.com/c?w=682754&c=4459&i=5662&pf=gzh&e=&t=https://shop.suning.com/30001754/index.html" class="title c333 dhidden">晨光苏宁自营官方旗舰店</a></li>
                                        <li class="shoplevel font14 line15em">
                                            <img src="{{$commonAssetUrl}}/sguide/m/img/85c2f-7810.gif" />
                                            <em class="c999">初级卖家</em>
                                            <span class="typename">自营</span></li>
                                        <li class="c999 font14 line15em">推荐指数 &nbsp;2775</li>
                                        <li class="buybtn">
                                            <a target="_blank" isconvert=1 rel="nofollow" href="https://tb.jiuxinban.com/c?w=682754&c=4459&i=5662&pf=gzh&e=&t=https://shop.suning.com/30001754/index.html" class="font12">进店逛一逛></a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li class="item">
                                <div class="imgbox">
                                    <a target="_blank" href="https://www.maigoo.com/webshop/301309.html">
                                        <img src="{{$commonAssetUrl}}/sguide/img/f7f7e-8202.jpg" /></a>
                                </div>
                                <div class="cont">
                                    <ul>
                                        <li class="webtitle font18">
                                            <a target="_blank" isconvert=1 rel="nofollow" href="https://s.click.taobao.com/t?e=m%3D2%26s%3DXPclE%2BxbacYcQipKwQzePDAVflQIoZepyK8Cckff7TVRAdhuF14FMfQ72%2B6uzF8%2F1aH1Hk3GeOhQGJRg6iVmCquNNJwpiecKuyyTDi1DterblIwp3swM8O%2FBas0tvb4eZz42eVlqqJTBwBLHPsOVpfdFsh68tKJt1gqeg6tY9x1dVnJFbl7J%2BeQBLW1IKSHKcSpj5qSCmbA%3D&union_lens=lensId:TAPI@1603079226@0b588f49_e1c6_1753ef7c440_1462@01" class="title c333 dhidden">MG晨光专卖店</a></li>
                                        <li class="shoplevel font14 line15em">
                                            <img src="{{$commonAssetUrl}}/sguide/img/5a10f-2488.gif" />
                                            <em class="c999">成熟卖家</em>
                                            <span class="typename">专卖店</span></li>
                                        <li class="c999 font14 line15em">推荐指数 &nbsp;6845</li>
                                        <li class="buybtn">
                                            <a target="_blank" isconvert=1 rel="nofollow" href="https://s.click.taobao.com/t?e=m%3D2%26s%3DXPclE%2BxbacYcQipKwQzePDAVflQIoZepyK8Cckff7TVRAdhuF14FMfQ72%2B6uzF8%2F1aH1Hk3GeOhQGJRg6iVmCquNNJwpiecKuyyTDi1DterblIwp3swM8O%2FBas0tvb4eZz42eVlqqJTBwBLHPsOVpfdFsh68tKJt1gqeg6tY9x1dVnJFbl7J%2BeQBLW1IKSHKcSpj5qSCmbA%3D&union_lens=lensId:TAPI@1603079226@0b588f49_e1c6_1753ef7c440_1462@01" class="font12">进店逛一逛></a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li class="item">
                                <div class="imgbox">
                                    <a target="_blank" href="https://www.maigoo.com/webshop/301310.html">
                                        <img src="{{$commonAssetUrl}}/sguide/img/42d12-8701.jpg" /></a>
                                </div>
                                <div class="cont">
                                    <ul>
                                        <li class="webtitle font18">
                                            <a target="_blank" isconvert=1 rel="nofollow" href="https://s.click.taobao.com/t?e=m%3D2%26s%3DnDkHIxYp1SccQipKwQzePDAVflQIoZepyK8Cckff7TVRAdhuF14FMfQ72%2B6uzF8%2F1aH1Hk3GeOhQGJRg6iVmCquNNJwpiecKuyyTDi1DterblIwp3swM8O%2FBas0tvb4eZz42eVlqqJTBwBLHPsOVpfdFsh68tKJt80Chmmnqr%2FSq2ZVuWahF4OQBLW1IKSHKcSpj5qSCmbA%3D&union_lens=lensId:TAPI@1603079226@0b84766b_020a_1753ef7c5d9_d248@01" class="title c333 dhidden">晨光北京专卖店</a></li>
                                        <li class="shoplevel font14 line15em">
                                            <img src="{{$commonAssetUrl}}/sguide/img/5a10f-2488.gif" />
                                            <em class="c999">成熟卖家</em>
                                            <span class="typename">专卖店</span></li>
                                        <li class="c999 font14 line15em">推荐指数 &nbsp;8994</li>
                                        <li class="buybtn">
                                            <a target="_blank" isconvert=1 rel="nofollow" href="https://s.click.taobao.com/t?e=m%3D2%26s%3DnDkHIxYp1SccQipKwQzePDAVflQIoZepyK8Cckff7TVRAdhuF14FMfQ72%2B6uzF8%2F1aH1Hk3GeOhQGJRg6iVmCquNNJwpiecKuyyTDi1DterblIwp3swM8O%2FBas0tvb4eZz42eVlqqJTBwBLHPsOVpfdFsh68tKJt80Chmmnqr%2FSq2ZVuWahF4OQBLW1IKSHKcSpj5qSCmbA%3D&union_lens=lensId:TAPI@1603079226@0b84766b_020a_1753ef7c5d9_d248@01" class="font12">进店逛一逛></a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="blockmorebox font16 ">
                        <div class="morebtn c333" data-action="brandwebshop" data-subaction="" data-thirdaction="" data-page="2" data-start="" data-defaultids="" data-sort="" data-tabnum="" data-maxpage="" onclick="getData(this)">
                            <i class="iconfont icon-gengduo"></i>
                            <span>加载更多</span></div>
                        <a class="next dn" href="/brand/shop_2411.html?action=brandwebshop&page=2">下一页</a>
                        <div class="clear"></div>
                    </div>
                </div>
                <div id="mzsmcontent">
                    <span class="mzsm_title center font16 b c333">
                        <i class="iconfont icon-tebieshuoming orange"></i>网站提醒和声明</span>
                    <div class="mzsm font14 c666 line18em">
                        <div class="mzsm_box">
                            <span class="">本站为注册用户提供信息存储空间服务，非“MAIGOO编辑上传提供”的内容均是注册用户发布上传或搜索引擎技术自动搜录所得，不代表本站观点。本站不生产产品，不提供产品销售服务，不对任何人的任何交易承担任何责任。版权归原作者所有，如有侵权、虚假信息、错误信息或任何问题，请及时联系我们，我们将在第一时间删除或更正。</span>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/submit/audit/');">申请删除>></a>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/submit/jiucuo/');">纠错>></a>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/answer/355.html');">投诉侵权>></a>
                            <div class="clear" style="margin-bottom:20px;"></div>
                            <span class="b c333">提示：</span>
                            <span class="">未收到货物先让您转账/汇款的通常为骗子，收到异常订单短信一般是诈骗，任何冒充本网站销售产品或交易的都是骗子！</span></div>
                    </div>
                    <div class="moremzsm">
                        <img src="{{$commonAssetUrl}}/sguide/m/img/dec8c-3557.gif" onclick="$('#mzsmcontent').find('.mzsm').css('height','auto');$(this).parent().remove();" /></div>
                </div>
                <div class="pagecss" data-css="/public/css/maigoo/v2019/color.css,/public/css/maigoo/v2019/weui.min.css,/public/css/maigoo/v2019/block/publicblock/searchselect.css,/public/css/maigoo/v2019/block/shop/col.css,/public/css/maigoo/v2019/block/webshop/col.css,/public/css/maigoo/v2019/block/publicblock/mzsm.css"></div>
                <div class="pagejs" data-js="/public/js/maigoo/v2019/public.js,/public/js/maigoo/v2019/event.js,/public/js/maigoo/v2019/weUI.js,/public/js/maigoo/v2019/block/publicblock/searchselect.js"></div>
            </div>
        </div>
        @include('brand.modules._right')
    </div>
</div>
<script language="javascript">var pac = 'brand',
    pdo = 'shop',
    pid = '2411',
    siteid = 0,
    CNPP = 'https://cnpp.cn/',
    catid = '797',
    brandid = '2411',
    userid = '0',
    issm = '';
    var authorpiclist = null;</script>
<script type="text/javascript" src="{{$commonAssetUrl}}/sguide/js/brand_shop_ff6029737f33b8628f23eefb68eef2a2.js"></script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?de3f6fd28ec4ac19170f18e2a8777593";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
@endsection

@extends('layouts.guide')

@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.brand._jscss', ['view' => $datas['view']])@endsection
@section('bodyClass')class="pc blockstyle2 "@endsection

@section('content')
<div id="wrap">
    <div id="container">
        <div class="leftlay">
            <div class="artcontent">
                <div class="blockinfo adslist noradio" id="pos_piclist">
                    <ul>
                        <li class=" active">
                            <div class="slice">
                                <img class="" src="{{$commonAssetUrl}}/sguide/m/img/5c2ff-5691.jpg" /></div>
                        </li>
                    </ul>
                </div>
                <div class="blockinfo companytopinfo " id="pos_topinfo">
                    <div class="itembox">
                        <ul class="c666 font16">
                            <li class="title">
                                <span class="font24 b c333">上海晨光文具股份有限公司</span>
                                <a href="https://www.cnpp.cn/answer/51.html" title="绑定管理企业" target="_blank">
                                    <img src="{{$commonAssetUrl}}/sguide/img/92e82-5977.gif" /></a>
                            </li>
                            <li>联系电话：
                                <i class="iconfont icon-lianxidianhua c999"></i>021-57474488</li>
                            <li>地址：
                                <i class="iconfont icon-chengshi1 c999"></i>上海市 奉贤区 青村镇金钱公路3469号</li>
                            <li>官网：
                                <i class="iconfont icon-guanwang c999"></i>
                                <a target="_blank" href="/link.php?url=http://www.mg-pen.com" class="c999">http://www.mg-pen.com</a></li>
                            <li>传真：
                                <i class="iconfont icon-chuanzhen c999"></i>021-57474488</li></ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="bline bline1"></div>
                <div class="blockinfo companytopinfo " id="pos_companyinfo">
                    <div class="blocktitle font26 ccc style1 ">
                        <span class="color1">
                            <em class="dhidden">基本信息</em>
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
                        <ul class="c666 font16">
                            <li class="">统一社会信用代码： 91310000677833266F</li>
                            <li class="">公司类型： 股份有限公司(上市、自然人投资或控股)</li>
                            <li class="faren">公司高管/名人：
                                <a target="_blank" href="https://www.maigoo.com/mingren/8452.html" class="color1">陈董</a>，
                                <a target="_blank" href="https://www.maigoo.com/mingren/8453.html" class="color1">陈总</a></li>
                            <li class="">企业成立日期： 2008-07-18</li>
                            <li class="">执照有效期： 2008-07-18起长期有效</li>
                            <li class="">发证机关： 上海市市场监督管理局</li>
                            <li class="">核准日期： 2020-07-30</li>
                            <li class="">注册资本： 92742.76万元</li>
                            <li class="">经营范围： 许可项目：食品经营；包装装潢印刷品印刷；文件、资料等其他印刷品印刷；出版物经营。（依法须经批准的项目，经相关部门批准后方可开展经营活动，具体经营项目以相关部门批准文件或许可证件为准） 一般项目：文具用品制造及销售，数码产品、安防设备、仪器仪表、劳防用品、家具、装饰品、化妆品、饰品、办公用品、工艺礼品（象牙及其制品除外）、橡塑制品、电子产品、家用电器、玩具、模具、五金交电、通讯器材、计算机软件及辅助设备、日用百货、纺织品、服装鞋帽、家居用品、体育用品及器材、消毒剂（不含危险化学品）、厨具卫具及日用杂品、
                                <a href="javascript:;" class=" c666 b" onclick="$(this).next().show();$(this).remove();">......</a>
                                <span style="display:none">日用化学产品、第一类医疗器械、第二类医疗器械、机械设备、办公设备及耗材、照相器材、音响设备、装饰材料、消防器材、酒店用品、玻璃制品、电力电子元器件、润滑油、水暖管道及配件、陶瓷管道及配件、汽车用品、卫生用品、母婴用品批发、零售，从事货物及技术的进出口业务，电子商务，企业管理咨询。（除依法须经批准的项目外，凭营业执照依法自主开展经营活动）</span></li>
                            <li class="">企业档案更新时间： 2020-09-07 (超过6月未更新)</li>
                            <li class="">提醒： 可能因企业资料变更未及时更新造成与实际登记有差别，请以国家部门核准登记的为准。企业品牌身份信息由CNPP企业身份认证系统提供（认证完全免费不收取任何费用）。买购网对所展示信息真实性的"风险提醒"服务，旨在帮助消费者选择有实力的企业、选购到放心商品。</li></ul>
                    </div>
                </div>
                <div class="bline bline1"></div>
                <div class="blockinfo brandcol1 " id="pos_brandlist">
                    <div class="blocktitle font26 ccc style1 ">
                        <span class="color1">
                            <em class="dhidden">旗下品牌</em>
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
                            <li>
                                <div class="img">
                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/154chenguang.html">
                                        <div class="imgbox">
                                            <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/8d43c-3290.gif" /></div>
                                    </a>
                                </div>
                                <div class="info font16">
                                    <dl class="h3em c666">
                                        <dt>
                                            <em class="font18 dhidden color1 b">晨光文具M&G</em></dt>
                                        <dd>
                                            <div class="dhidden2">021-57474488，国内颇具影响力的大型文具制造商，以提供学习和工作场景解决方案为核心，专业从事学生文具、办公文具、儿童美术等领域的现代化产业企业</div></dd>
                                    </dl>
                                </div>
                            </li>
                            <li>
                                <div class="img">
                                    <a target="_blank" href="https://www.maigoo.com/brand/57560.html">
                                        <div class="imgbox">
                                            <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/4a8e7-1330.gif" /></div>
                                    </a>
                                </div>
                                <div class="info font16">
                                    <dl class="h3em c666">
                                        <dt>
                                            <em class="font18 dhidden color1 b">科力普COLIPU</em></dt>
                                        <dd>
                                            <div class="dhidden2">400-118-8366,021-31216888，晨光文具集团旗下办公用品直销平台，提供高性价比产品及优质的办公采购一站式服务</div></dd>
                                    </dl>
                                </div>
                            </li>
                            <li>
                                <div class="img">
                                    <a target="_blank" href="https://www.maigoo.com/brand/141608.html">
                                        <div class="imgbox">
                                            <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/70468-9960.gif" /></div>
                                    </a>
                                </div>
                                <div class="info font16">
                                    <dl class="h3em c666">
                                        <dt>
                                            <em class="font18 dhidden color1 b">九木杂物社</em></dt>
                                        <dd>
                                            <div class="dhidden2">021-57474488，晨光文具旗下生活百货连锁品牌，精选全球设计资源、集采资源，主要为女性提供配饰、文具、餐具、居家用品、创意礼品等产品</div></dd>
                                    </dl>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="blockmorebox font16 ">
                        <div class="morebtn c333" data-action="brandlist" data-subaction="" data-thirdaction="" data-page="2" data-start="" data-defaultids="" data-sort="" data-tabnum="" data-maxpage="" onclick="getData(this)">
                            <i class="iconfont icon-gengduo"></i>
                            <span>加载更多</span></div>
                        <a class="next dn" href="/company/2411.html?brandid=2411&action=brandlist&page=2">下一页</a>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="bline bline1"></div>
                <div class="blockinfo articlelist " id="pos_mingrenlist">
                    <div class="blocktitle font26 ccc style1 ">
                        <span class="color1">
                            <em class="dhidden">企业高管</em>
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
                    <ul class="itembox hasttl">
                        <li class="item ">
                            <div class="tablecell">
                                <div class="contbox">
                                    <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/mingren/8452.html">陈湖文-上海晨光文具股份有限公司董事长介绍</a>
                                    <div class="description c999 line18em font14">陈湖文先生，工商管理硕士（EMBA），现任上海晨光文具股份有限公司董事长，上海市奉贤区第三届及第四届政协委员。</div>
                                    <div class='other font13'>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                        <div class="attention ccc">
                                            <span>
                                                <i class="iconfont icon-chakan"></i>2.1万</span>
                                            <span>
                                                <i class="iconfont icon-dianzan1"></i>202</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img ">
                                <a target="_blank" href="https://www.maigoo.com/mingren/8452.html">
                                    <img src="{{$commonAssetUrl}}/sguide/m/img/9414e-1768.png" /></a>
                            </div>
                        </li>
                        <li class="item ">
                            <div class="tablecell">
                                <div class="contbox">
                                    <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/mingren/8453.html">陈湖雄-上海晨光文具股份有限公司总裁介绍</a>
                                    <div class="description c999 line18em font14">陈湖雄，男，企业家，1970年出生于广东省汕头市，毕业于长江商学院EMBA。创办上海晨光文具股份有限公司。现任晨光文具股份有限公司总裁、中国...</div>
                                    <div class='other font13'>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/475.html">办公用品</a>
                                        <div class="attention ccc">
                                            <span>
                                                <i class="iconfont icon-chakan"></i>1.4万</span>
                                            <span>
                                                <i class="iconfont icon-dianzan1"></i>168</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img ">
                                <a target="_blank" href="https://www.maigoo.com/mingren/8453.html">
                                    <img src="{{$commonAssetUrl}}/sguide/m/img/5e11b-8398.png" /></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bline bline1"></div>
                <div class="blockinfo companypiclist " id="pos_piclist1">
                    <div class="blocktitle font26 ccc style1 ">
                        <span class="color1">
                            <em class="dhidden">企业图片</em>
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
                    <div class="itembox marqueen">
                        <div class="scrollbox">
                            <ul>
                                <li class="clickimg">
                                    <div class="img">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/17027-4481.jpg" width="250" height="160" /></div>
                                    <div class="desc dhidden center line2em font12" title="">&nbsp;</div></li>
                                <li class="clickimg">
                                    <div class="img">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/22b8d-3743.jpg" width="250" height="160" /></div>
                                    <div class="desc dhidden center line2em font12" title="">&nbsp;</div></li>
                                <li class="clickimg">
                                    <div class="img">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/28e6f-4669.jpg" width="250" height="160" /></div>
                                    <div class="desc dhidden center line2em font12" title="">&nbsp;</div></li>
                                <li class="clickimg">
                                    <div class="img">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/cb899-3698.jpg" width="250" height="160" /></div>
                                    <div class="desc dhidden center line2em font12" title="">&nbsp;</div></li>
                                <li class="clickimg">
                                    <div class="img">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/e9549-1445.jpg" width="250" height="160" /></div>
                                    <div class="desc dhidden center line2em font12" title="">&nbsp;</div></li>
                                <li class="clickimg">
                                    <div class="img">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/03697-9614.jpg" width="250" height="160" /></div>
                                    <div class="desc dhidden center line2em font12" title="">&nbsp;</div></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bline bline1"></div>
                <div class="blockinfo companypiclist " id="pos_piclist2">
                    <div class="blocktitle font26 ccc style1 ">
                        <span class="color1">
                            <em class="dhidden">荣誉资质</em>
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
                    <div class="itembox marqueen">
                        <div class="scrollbox">
                            <ul>
                                <li class="clickimg">
                                    <div class="img">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/83334-8386.jpg" width="250" height="160" /></div>
                                    <div class="desc dhidden center line2em font12" title="">&nbsp;</div></li>
                                <li class="clickimg">
                                    <div class="img">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/9f997-1496.jpg" width="250" height="160" /></div>
                                    <div class="desc dhidden center line2em font12" title="">&nbsp;</div></li>
                                <li class="clickimg">
                                    <div class="img">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/e2742-1842.jpg" width="250" height="160" /></div>
                                    <div class="desc dhidden center line2em font12" title="">&nbsp;</div></li>
                                <li class="clickimg">
                                    <div class="img">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/2f96b-3631.jpg" width="250" height="160" /></div>
                                    <div class="desc dhidden center line2em font12" title="">&nbsp;</div></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bline bline1"></div>
                {{--@include('brand.modules._comment')--}}
                @include('brand.modules._statement-detail')
            </div>
        </div>
        @include('brand.modules._right')
    </div>
</div>
<script language="javascript">var pac = 'company',
    pdo = 'show',
    pid = '2411',
    siteid = 0,
    CNPP = 'https://cnpp.cn/',
    catid = '797',
    brandid = '2411',
    userid = '0',
    issm = '';
    var authorpiclist = null;</script>
<script type="text/javascript" src="{{$commonAssetUrl}}/sguide/js/company_show_819b40195d362ec635b44bd074e4ee2c.js"></script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?de3f6fd28ec4ac19170f18e2a8777593";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
@endsection

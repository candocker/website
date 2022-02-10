@extends('layouts.guide')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.guide._jscss', ['view' => $datas['view']])@endsection
@section('bodyClass')class="pc "@endsection
@section('content')
<div id="wrap">
    <div id="container">
        <div class="leftlay">
            <div class="artcontent">
                <div class="blockinfo articleshow" id="pos_articleinfo">
                    <div class="articlehead">
                        <h1 class="title font24 b c333 line18em">陈湖文-上海晨光文具股份有限公司董事长介绍</h1>
                        <div class="qzoneinfo c999">本文章由注册用户
                            <a target="_blank" href="https://www.maigoo.com/mgzone/1682.html" class="color1">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/9b5d5-4928.jpg" />名人画像</a>&nbsp;上传提供
                            <span class="attention ccc">
                                <span class="btn color1 font14">
                                    <a target="_blank" href="https://www.maigoo.com/submit/mingren/">
                                        <i class="iconfont icon-xinxifabu"></i>发布</a>
                                    <a target="_blank" href="https://www.maigoo.com/submit/jianyi/">
                                        <i class="iconfont icon-fankui"></i>反馈</a>
                                    <a target="_blank" href="https://www.cnpp.cn/relief/">
                                        <i class="iconfont icon-banquan"></i>版权声明</a>
                                </span>
                                <i class="iconfont icon-yanjing"></i>
                                <span count="attention">0</span></span>
                        </div>
                        <div class="brandlist">相关品牌：
                            <a href="https://www.maigoo.com/company/2411.html" target="_blank" class="color1">上海晨光文具股份有限公司</a>
                            <a href="https://www.maigoo.com/maigoocms/special/qinzi/154chenguang.html" target="_blank" class="color1">晨光文具M&G</a>
                            <a href="https://www.maigoo.com/brand/57560.html" target="_blank" class="color1">科力普COLIPU</a></div>
                    </div>
                    <div class="description">摘要：陈湖文先生，工商管理硕士（EMBA），现任上海晨光文具股份有限公司董事长，上海市奉贤区第三届及第四届政协委员。</div>
                    <div class="articlecont">
                        <div class="normalarticle font16">
                            <div class="only-cont">
                                <p align="center">
                                    <span>
                                        <span class="showauthor">
                                            <img src="{{$commonAssetUrl}}/sguide/m/img/55aa5-9020.jpg" alt="" width="600" height="400" title="" align="" />
                                            <em>该图片由注册用户"
                                                <i style="display:inline-block;" class="authorblue qzone" onclick="return openUrl($(this).attr('href'));" href="https://www.maigoo.com/mgzone/1682.html" target="_blank">名人画像</i>"提供，
                                                <i class="authorblue" onclick="return openUrl($(this).attr('href'));" href="https://www.cnpp.cn/relief/">
                                                    <i class="iconfont icon-banquan"></i>版权声明</i>
                                                <i class="authorblue" href="https://www.maigoo.com/submit/jianyi/" onclick="return openUrl($(this).attr('href'));">
                                                    <i class="iconfont icon-fankui"></i>反馈</i>
                                            </em>
                                        </span>
                                        <br /></span>
                                </p>
                                <p align="center" style="text-align:left;">
                                    <span style="position:relative;">
                                        <strong>人物简介</strong></span>
                                </p>
                                <p>陈湖文，1970年7月出生，中国国籍，无境外永久居留权，工商管理硕士（EMBA）。上海晨光文具股份有限公司董事长，上海市奉贤区第三届及第四届政协委员。曾任中韩晨光总经理。</p>
                                <p>
                                    <strong>人物经历</strong></p>
                                <p>1997年起涉足文具制造行业，是晨光控股（集团）有限公司的创始人之一。</p>
                                <p>2007年12月被中华人民共和国人事部等机构授予“全国轻工行业劳动模范”荣誉称号。</p>
                                <p>2012年被上海品牌发展研究中心评为“上海十大品牌领军人物”。</p>
                                <p>
                                    <strong>主要成就</strong></p>
                                <p>2007年被中华人民共和国人事部等机构授予“全国轻工行业劳动模范”荣誉称号 ；</p>
                                <p>2012年被上海品牌发展研究中心评为“上海十大品牌领军人物”。</p>
                            </div>
                        </div>
                    </div>
                    <div class="articlesharebox">
                        <div class="bdsharebuttonbox">
                            <a href="javascript:void(0);" class="bds_weixin" data-cmd="weixin" title="分享到微信" onclick="shareclick(this);">
                                <i class="iconfont icon-pengyouquan"></i>
                            </a>
                            <a href="javascript:void(0);" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间" onclick="shareclick(this);">
                                <i class="iconfont icon-qqkongjian"></i>
                            </a>
                            <a href="javascript:void(0);" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博" onclick="shareclick(this);">
                                <i class="iconfont icon-weibo"></i>
                            </a>
                            <a href="javascript:void(0);" class="bds_qq" data-cmd="qq" title="分享到qq好友" onclick="shareclick(this);">
                                <i class="iconfont icon-qq"></i>
                            </a>
                            <a href="javascript:;" onclick="$('#go_top').find('.collect').click();" title="收藏">
                                <i class="iconfont icon-shoucang2"></i>
                            </a>
                            <a class="bds_shouji" onmouseover="$(this).find('img').attr('src',$(this).find('img').data('src'))">
                                <i class="iconfont icon-shouji"></i>
                                <img data-src="/qrcode.php?url=https://m.maigoo.com/mingren/8452.html" /></a>
                        </div>
                    </div>
                    <div class="interestlist font16">
                        <em class="c333 b">标签：</em>
                        <a target="_blank" href="https://www.maigoo.com/biaoqian/22.html" class="color5">文具用品</a>
                        <span class="alevel font20 orange"></span>
                    </div>
                    <script type="text/javascript">$(document).ready(function() {
                            $('.articleshow .xglinksmore').click(function() {
                                var start = parseInt($(this).attr('start'));
                                var num = parseInt($(this).attr('num'));
                                var count = parseInt($(this).attr('count'));
                                start += num;
                                if (start > count) {
                                    start = count;
                                }
                                $(this).parents('.xglinks').find('ul li:lt(' + start + ')').removeClass('dn');
                                $(this).attr('start', start);
                                if (start == count) {
                                    $(this).after('<i>暂无更多数据</i>');
                                    $(this).remove();
                                }
                            });
                        });</script>
                </div>
                <div class="bline bline1"></div>
                <div class="ads">
                    <script type="text/javascript" src="{{$commonAssetUrl}}/sguide/js/o.js"></script>
                </div>
                <div id="mzsmcontent">
                    <span class="mzsm_title center font16 b c333">
                        <i class="iconfont icon-tebieshuoming orange"></i>网站提醒和声明</span>
                    <div class="mzsm font14 c666 line18em">
                        <div class="mzsm_box">
                            <span class="">本站为注册用户提供信息存储空间服务，非“MAIGOO编辑上传提供”的文章/文字均是注册用户自主发布上传，不代表本站观点，更不表示本站支持购买和交易，本站对网页中内容的合法性、准确性、真实性、适用性、安全性等概不负责。版权归原作者所有，如有侵权、虚假信息、错误信息或任何问题，请及时联系我们，我们将在第一时间删除或更正。</span>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/submit/audit/');">申请删除>></a>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/submit/jiucuo/');">纠错>></a>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/answer/355.html');">投诉侵权>></a>
                            <div class="clear" style="margin-bottom:20px;"></div>
                            <span class="b c333">提交说明：</span>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/submit/mingren/');">快速提交发布>></a>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/answer/81.html');">查看提交帮助>></a>
                            <a class="color1" href="javascript:;" onclick="window.open('https://www.maigoo.com/user/login/');">注册登录>></a></div>
                    </div>
                    <div class="moremzsm">
                        <img src="{{$commonAssetUrl}}/sguide/m/img/dec8c-3557.gif" onclick="$('#mzsmcontent').find('.mzsm').css('height','auto');$(this).parent().remove();" /></div>
                </div>
                <div class="articlepraise bottombd" id="articlepraise">
                    <!--点赞-->
                    <div class="tubiao font16">
                        <div class="dianzhan">
                            <a class="c333" href="/ajaxstream/praise/?action=addpraise&block=mingren&id=8452" class="addpraise" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$('.addpraisenum'))">
                                <i class="iconfont icon-dianzan"></i>赞
                                <i class="addpraisenum getajaxdata" url="https://s.maigoo.com/ajaxstream/praise/?action=getpraise&block=mingren&id=8452&type=add"></i></a>
                        </div>
                        <div class="xiajiang c999">
                            <a href="/ajaxstream/praise/?action=cutpraise&block=mingren&id=8452" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.addnum'))" class="cutpraise">
                                <i class="iconfont icon-dianzan-xiangxia"></i>踩
                                <i class="addnum getajaxdata" url="https://s.maigoo.com/ajaxstream/praise/?action=getpraise&block=mingren&id=8452&type=cut"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blockinfo articlelist " id="pos_djarticlelist">
                    <div class="blocktitle font26 ccc style1 ">
                        <span class="color1">
                            <em class="dhidden">相关推荐</em>
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
                                    <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/goomai/204644.html">【笔的分类】笔的种类有哪些 各种笔分类全面盘点</a>
                                    <div class='other font13'>
                                        <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/154010.html">水性笔</a>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/289.html">中性笔</a>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                        <div class="attention ccc">
                                            <span>
                                                <i class="iconfont icon-chakan"></i>1.3万</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img ">
                                <a target="_blank" href="https://www.maigoo.com/goomai/204644.html">
                                    <img src="{{$commonAssetUrl}}/sguide/m/img/b6d91-8727.jpg" /></a>
                            </div>
                        </li>
                        <li class="item ">
                            <div class="tablecell">
                                <div class="contbox">
                                    <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/goomai/213393.html">【小学生礼品】小学生开学送什么礼物好 适合小学生的礼物推荐</a>
                                    <div class='other font13'>
                                        <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/650.html">礼品</a>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/2115.html">书桌</a>
                                        <div class="attention ccc">
                                            <span>
                                                <i class="iconfont icon-chakan"></i>4141</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img ">
                                <a target="_blank" href="https://www.maigoo.com/goomai/213393.html">
                                    <img src="{{$commonAssetUrl}}/sguide/m/img/a0aba-1427.jpg" /></a>
                            </div>
                        </li>
                        <li class="item ">
                            <div class="tablecell">
                                <div class="contbox">
                                    <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/goomai/203334.html">送学生什么礼物好？适合送学生党的礼物大推荐</a>
                                    <div class='other font13'>
                                        <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/650.html">礼品</a>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/156988.html">青少年饮食</a>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/153271.html">青少年学习教育</a>
                                        <div class="attention ccc">
                                            <span>
                                                <i class="iconfont icon-chakan"></i>1万</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img ">
                                <a target="_blank" href="https://www.maigoo.com/goomai/203334.html">
                                    <img src="{{$commonAssetUrl}}/sguide/m/img/29eb6-6942.jpg" /></a>
                            </div>
                        </li>
                        <li class="item ">
                            <div class="tablecell">
                                <div class="contbox">
                                    <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/goomai/203486.html">【培训辅导】如何选择适合的培训班 给学生更专业的辅导教育</a>
                                    <div class='other font13'>
                                        <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/3341.html">培训</a>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/22.html">文具用品</a>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/332.html">学生青少年</a>
                                        <div class="attention ccc">
                                            <span>
                                                <i class="iconfont icon-chakan"></i>1010</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img ">
                                <a target="_blank" href="https://www.maigoo.com/goomai/203486.html">
                                    <img src="{{$commonAssetUrl}}/sguide/m/img/e1b91-1776.jpg" /></a>
                            </div>
                        </li>
                        <li class="item ">
                            <div class="tablecell">
                                <div class="contbox">
                                    <a target="_blank" class="title font20 c333 b dhidden" href="https://www.maigoo.com/goomai/158027.html">【计算器功能键】计算器功能键介绍 计算器各个功能键的作用</a>
                                    <div class='other font13'>
                                        <span class="isyuan bg2 color1 bq">MAIGOO原创</span>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/564.html">计算器</a>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/475.html">办公用品</a>
                                        <a target="_blank" class="biaoqian color5 bq" href="https://www.maigoo.com/biaoqian/153866.html">公司企业</a>
                                        <div class="attention ccc">
                                            <span>
                                                <i class="iconfont icon-chakan"></i>12万+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img ">
                                <a target="_blank" href="https://www.maigoo.com/goomai/158027.html">
                                    <img src="{{$commonAssetUrl}}/sguide/m/img/c44fb-8325.jpg" /></a>
                            </div>
                        </li>
                    </ul>
                    <div class="blockmorebox font16 ">
                        <div class="morebtn c333" data-action="djarticlelist" data-subaction="" data-thirdaction="" data-page="2" data-start="" data-defaultids="22" data-sort="" data-tabnum="12" data-maxpage="" onclick="getData(this)">
                            <i class="iconfont icon-gengduo"></i>
                            <span>加载更多</span></div>
                        <a class="next dn" href="/mingren/8452.html?action=djarticlelist&tabnum=12&page=2">下一页</a>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="pagecss" data-css="/public/css/maigoo/v2019/color.css,/public/css/maigoo/v2019/weui.min.css,/public/css/maigoo/v2019/block/publicblock/articleshow.css,/public/css/maigoo/v2019/block/publicblock/mzsm.css,/public/css/maigoo/v2019/block/publicblock/articlepraise.css,/public/css/maigoo/v2019/block/publicblock/articlelist.css"></div>
                <div class="pagejs" data-js="/public/js/maigoo/v2019/public.js,/public/js/maigoo/v2019/event.js,/public/js/maigoo/v2019/weUI.js,/public/js/maigoo/v2019/block/publicblock/articlelist.js"></div>
            </div>
        </div>
        @include('brand.modules._right')
    </div>
</div>
<script language="javascript">var pac = 'mingren',
    pdo = 'show',
    pid = '8452',
    siteid = 0,
    CNPP = 'https://cnpp.cn/',
    catid = '797',
    brandid = '',
    userid = '0',
    issm = '';
    var authorpiclist = [];</script>
<script type="text/javascript" src="{{$commonAssetUrl}}/sguide/js/mingren_show_fc66180d0e2385c2b188311632bb993e.js"></script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?de3f6fd28ec4ac19170f18e2a8777593";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
@endsection

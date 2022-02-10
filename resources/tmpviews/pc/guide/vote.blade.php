@extends('layouts.guide')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.guide._jscss', ['view' => $datas['view']])@endsection
@section('bodyClass')class="pc "@endsection
@section('content')
<div id="wrap">
    <div id="container">
        <div class="leftlay">
            <div class="artcontent">
                <div class="blockinfo votelisttitle " id="pos_votelisttitle">
                    <div class="itembox">
                        <div class="titlebox">
                            <div class="title font50 center b">文具用品品牌投票排行榜</div>
                            <div class="subtitle center font30">铸造真实的品牌投票&nbsp;感知品牌的力量</div>
                            <div class="titlestart"></div>
                        </div>
                    </div>
                </div>
                <div class="blockinfo votetotal " id="pos_catvotelisttotal">
                    <div class="itembox">
                        <div class="totalbox">
                            <div class="showbox font18">
                                <div class="showleft">
                                    <span class="white spanborder">参与品牌</span>
                                    <span class="numcolor spanborder">40</span></div>
                                <div class="showleft">
                                    <span class="white spanborder">累计得票</span>
                                    <span class="numcolor spanborder">17.5万</span></div>
                                <div class="showleft">
                                    <span class="white font18">访问次数</span>
                                    <span class="numcolor">140.8万</span></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab blockinfo style1 col3" id="pos_votelist">
                    <div class="tabmenubox">
                        <div class="tabmenu font20 ">
                            <div class="item color1 active" action="brand10top">
                                <span>十大品牌榜</span></div>
                            <div class="item color1 " action="brandtop">
                                <span>当前得票榜</span></div>
                            <div class="item color1 " action="historytop">
                                <span>历史得票榜</span></div>
                        </div>
                    </div>
                    <div class="tabcont">
                        <div class="licont " action="brand10top">
                            <div class="blockinfo votecol1 " id="pos_brand10top">
                                <div class="itembox">
                                    <div class="top3box">
                                        <div class="top3">
                                            <i class="font14 eq2">2</i>
                                            <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/151deli.html">
                                                <img src="{{$commonAssetUrl}}/sguide/m/img/7a719-6493.gif" /></a>
                                            <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/151deli.html">
                                                <span class="ttl font14 dhidden">得力</span></a>
                                            <span class="votenum font14">
                                                <span class="piaonum">6,804</span>
                                                <em>票</em></span>
                                            <span>
                                                <a class="votebtt font14 bg1" href="/ajaxstream/vote/?action=vote&brandid=2418&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">投票</a></span>
                                        </div>
                                        <div class="top3">
                                            <i class="font14">1</i>
                                            <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/154chenguang.html">
                                                <img src="{{$commonAssetUrl}}/sguide/m/img/8d43c-3290.gif" /></a>
                                            <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/154chenguang.html">
                                                <span class="ttl font14 dhidden">晨光</span></a>
                                            <span class="votenum font14">
                                                <span class="piaonum">4,367</span>
                                                <em>票</em></span>
                                            <span>
                                                <a class="votebtt font14 bg1 coverafter" href="/ajaxstream/vote/?action=vote&brandid=2411&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">投票</a></span>
                                        </div>
                                        <div class="top3">
                                            <i class="font14 eq3">3</i>
                                            <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/151lemei.html">
                                                <img src="{{$commonAssetUrl}}/sguide/m/img/2eba9-3024.gif" /></a>
                                            <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/151lemei.html">
                                                <span class="ttl font14 dhidden">真彩</span></a>
                                            <span class="votenum font14">
                                                <span class="piaonum">4,596</span>
                                                <em>票</em></span>
                                            <span>
                                                <a class="votebtt font14 bg1" href="/ajaxstream/vote/?action=vote&brandid=2413&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">投票</a></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="midline"></div>
                                    <div class="votelist">
                                        <ul>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/151qixin.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/c63ba-5340.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/151qixin.html">齐心办公</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">5,739</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2476&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/152AIHAO.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/ea38c-2087.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/152AIHAO.html">爱好</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">3,586</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2415&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/151baixue.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/3d415-3041.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/151baixue.html">白雪文具</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">3,740</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2414&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/151beifa.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/907fe-3403.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/151beifa.html">贝发</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">2,923</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2416&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/bggj/151gb.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/df0e8-2928.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/bggj/151gb.html">广博</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">3,200</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2555&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/bggj/151SUNWOOD.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/b69dd-1729.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/bggj/151SUNWOOD.html">三木</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,955</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2516&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/152jwn.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/d6b40-8960.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/152jwn.html">金万年</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">2,014</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2417&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/152uni.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/825eb-4327.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/152uni.html">三菱</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,262</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2412&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/18144.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/62c44-9921.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/18144.html">百乐</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,911</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=18144&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/266zhonghuapai.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/62666-8886.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/266zhonghuapai.html">中华牌</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,816</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2489&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/152yx.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/735ee-4549.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/152yx.html">英雄</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,322</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2401&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/18005.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/103c7-6357.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/18005.html">斑马</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,360</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=18005&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/152BAOKE.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/dde31-8945.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/152BAOKE.html">宝克</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,531</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2420&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/27520.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/d49fa-8532.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/27520.html">马可</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,193</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=27520&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/10527.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/e39f8-8435.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/10527.html">施德楼</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,394</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=10527&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/bggj/266Maped.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/5dbc7-8510.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/bggj/266Maped.html">马培德</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,454</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2477&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/57959.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/2aceb-7547.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/57959.html">国誉</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,099</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=57959&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/bggj/266EAGLE.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/c5b4c-1680.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/bggj/266EAGLE.html">益而高</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,436</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2475&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/156zg.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/ac0b3-9910.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/156zg.html">智高</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,594</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2568&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/17090.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/cb181-6832.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/17090.html">天卓</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,085</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=17090&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/8665.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/64321-2045.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/8665.html">红星</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,503</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=8665&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/266ml.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/72981-1769.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/266ml.html">马利画材</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,711</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2483&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/152Parker.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/7bce0-8714.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/152Parker.html">派克</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,526</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2400&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/152LAMY.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/1a232-7460.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/152LAMY.html">凌美</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,401</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2406&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/bggj/266KWtriO.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/0890f-5502.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/bggj/266KWtriO.html">可得优</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,870</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2481&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/bggj/151stb.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/0e48c-8074.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/bggj/151stb.html">史泰博</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,089</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2539&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/152Pelikan.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/2ccef-9270.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/152Pelikan.html">百利金</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,157</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2407&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/152wdw.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/5cef8-5298.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/152wdw.html">威迪文</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,503</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2404&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/18056.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/f912b-7639.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/18056.html">康大</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,095</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=18056&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/10565.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/26ade-3813.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/10565.html">联众</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">5</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=10565&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/152xfl.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/90feb-1605.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/152xfl.html">犀飞利</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,053</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2408&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/maigoocms/special/qinzi/152all.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/46592-1208.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/maigoocms/special/qinzi/152all.html">奥罗拉</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,233</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2405&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/37168.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/e5760-1080.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/37168.html">报事贴</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,848</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=37168&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/10518.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/img/adf99-2163.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/10518.html">白金牌</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,048</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=10518&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/37169.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/img/d5576-8517.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/37169.html">N次贴</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,292</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=37169&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/2409.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/m/img/7df91-8043.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/2409.html">写乐</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,894</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=2409&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="showbox">
                                                    <a target="_blank" href="https://www.maigoo.com/brand/65742.html">
                                                        <img src="{{$commonAssetUrl}}/sguide/img/4cdcb-4479.gif" /></a>
                                                    <a target="_blank" class="ttl c333 font14 dhidden" href="https://www.maigoo.com/brand/65742.html">kinbor</a>
                                                    <span class="votenum font14">
                                                        <span class="piaonum">1,708</span>
                                                        <em>票</em></span>
                                                    <span>
                                                        <a class="votebtt font14 color1" href="/ajaxstream/vote/?action=vote&brandid=65742&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">
                                                            <i class="iconfont icon-zuixintoupiao"></i>投票</a>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="licont dn" action="brandtop">
                            <div class="blockinfo votecol1 " id="pos_brandtop">
                                <div class="itembox">
                                    <div class="ajaxload" data-action="votelist" data-subaction="brandtop" data-thirdaction="" data-page="1" data-start="" data-defaultids="" data-sort="" data-postdata="">
                                        <img src="{{$commonAssetUrl}}/sguide/img/5b7e7-3668.gif" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="licont dn" action="historytop">
                            <div class="blockinfo votecol1 " id="pos_historytop">
                                <div class="itembox">
                                    <div class="ajaxload" data-action="votelist" data-subaction="historytop" data-thirdaction="" data-page="1" data-start="" data-defaultids="" data-sort="" data-postdata="">
                                        <img src="{{$commonAssetUrl}}/sguide/img/5b7e7-3668.gif" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blockinfo votenotice " id="pos_votenotice">
                    <div class="itembox">
                        <div class="noticebox">
                            <div class="shuomingicon font20 b">
                                <i class="iconfont icon-tebieshuoming orange"></i>投票说明</div>
                            <div class="shuomingword font14">
                                <span class="orange">文具用品</span>
                                <span class="">品牌投票于</span>
                                <span class="orange">2020年07月07日</span>
                                <span class="">全新起航，往期投票可在历史综合票数中查看。</span>
                                <span class="">投票结果仅供参考，不代表买购网支持认可，投票数据可能会延后几小时显示，若组织恶意刷票会被系统自动清除。</span>
                                <a class="red" href="https://www.maigoo.com/maigoo/151wj_index.html">查看文具用品十大品牌榜单>>,</a>
                                <a class="color1" href="https://www.maigoo.com/answer/175.html">为什么我的品牌不能继续投票了？</a>
                                <a class="color1" href="https://www.maigoo.com/answer/173.html">投票没有我们品牌，怎么加入？</a></div>
                        </div>
                    </div>
                </div>
                <div class="ads">
                    <script type="text/javascript" src="{{$commonAssetUrl}}/sguide/js/nm.js"></script>
                </div>
                <div class="pagecss" data-css="/public/css/maigoo/v2019/color.css,/public/css/maigoo/v2019/weui.min.css,/public/css/maigoo/v2019/vote/list3.css,/public/css/maigoo/v2019/block/vote/listtitle.css,/public/css/maigoo/v2019/block/vote/cattotal.css,/public/css/maigoo/v2019/block/vote/col1.css,/public/css/maigoo/v2019/block/vote/votenotice.css"></div>
                <div class="pagejs" data-js="/public/js/maigoo/v2019/public.js,/public/js/maigoo/v2019/event.js,/public/js/maigoo/v2019/weUI.js"></div>
            </div>
        </div>
        @include('brand.modules._right')
    </div>
</div>
<script type="text/javascript" src="{{$commonAssetUrl}}/sguide/js/vote_list_4c45342d376097e2d61e97dada1b024a.js"></script>
@endsection

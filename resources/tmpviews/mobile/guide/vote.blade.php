@extends('layouts.guide')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.guide._jscss', ['view' => $datas['view']])@endsection
@section('bodyClass')class="mobile blockstyle2"@endsection
@section('content')
        <div class="blockinfo votelisttitle " id="pos_votelisttitle">
            <div class="itembox">
                <div class="titlebox">
                    <div class="title font27 center b">文具用品品牌投票排行榜</div>
                    <div class="subtitle center font13">铸造真实的品牌投票&nbsp;感知品牌的力量</div>
                    <div class="titlestart"></div>
                </div>
            </div>
        </div>
        <div class="blockinfo votetotal " id="pos_catvotelisttotal">
            <div class="itembox">
                <div class="totalbox">
                    <div class="showbox">
                        <div class="showleft">
                            <span class="white spanborder">参与品牌</span>
                            <span class="numcolor spanborder">40</span></div>
                        <div class="showleft">
                            <span class="white spanborder">累计得票</span>
                            <span class="numcolor spanborder">17.5万</span></div>
                        <div class="showleft">
                            <span class="white">访问次数</span>
                            <span class="numcolor">140.9万</span></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab blockinfo style1 col3" id="pos_votelist">
            <div class="tabmenubox">
                <div class="tabmenu font16 ">
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
                    <div class="blockinfo votecol1 ">
                        <div class="itembox">
                            <div class="top3box">
                                <div class="top3">
                                    <i class="font12 eq2">2</i>
                                    <a href="https://m.maigoo.com/maigoocms/special/qinzi/151deli.html">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/7a719-6493.gif" /></a>
                                    <a href="https://m.maigoo.com/maigoocms/special/qinzi/151deli.html">
                                        <span class="ttl font14">得力</span></a>
                                    <span class="votenum font12">
                                        <span class="piaonum">6,874</span>
                                        <em>票</em></span>
                                    <span>
                                        <a class="votebtt font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2418&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">投票</a></span>
                                </div>
                                <div class="top3">
                                    <i class="font12">1</i>
                                    <a href="https://m.maigoo.com/maigoocms/special/qinzi/154chenguang.html">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/8d43c-3290.gif" /></a>
                                    <a href="https://m.maigoo.com/maigoocms/special/qinzi/154chenguang.html">
                                        <span class="ttl font14">晨光</span></a>
                                    <span class="votenum font12">
                                        <span class="piaonum">4,423</span>
                                        <em>票</em></span>
                                    <span>
                                        <a class="votebtt font12 bg1 coverafter" href="/ajaxstream/vote/?action=vote&brandid=2411&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">投票</a></span>
                                </div>
                                <div class="top3">
                                    <i class="font12 eq3">3</i>
                                    <a href="https://m.maigoo.com/maigoocms/special/qinzi/151lemei.html">
                                        <img src="{{$commonAssetUrl}}/sguide/m/img/2eba9-3024.gif" /></a>
                                    <a href="https://m.maigoo.com/maigoocms/special/qinzi/151lemei.html">
                                        <span class="ttl font14">真彩</span></a>
                                    <span class="votenum font12">
                                        <span class="piaonum">4,628</span>
                                        <em>票</em></span>
                                    <span>
                                        <a class="votebtt font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2413&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().parent().find('.votenum .piaonum'));">投票</a></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="midline"></div>
                            <ul class="votelist shade">
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/maigoocms/special/qinzi/151qixin.html">
                                                <i>4</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/c63ba-5340.gif" /></div>
                                                <em class="font14 dhidden">齐心办公</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=2476&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">5,778</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2476&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/maigoocms/special/qinzi/152AIHAO.html">
                                                <i>5</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/ea38c-2087.gif" /></div>
                                                <em class="font14 dhidden">爱好</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=2415&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">3,629</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2415&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/maigoocms/special/qinzi/151baixue.html">
                                                <i>6</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/3d415-3041.gif" /></div>
                                                <em class="font14 dhidden">白雪文具</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=2414&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">3,772</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2414&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/maigoocms/special/qinzi/151beifa.html">
                                                <i>7</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/907fe-3403.gif" /></div>
                                                <em class="font14 dhidden">贝发</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=2416&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">2,954</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2416&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/maigoocms/special/bggj/151gb.html">
                                                <i>8</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/df0e8-2928.gif" /></div>
                                                <em class="font14 dhidden">广博</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=2555&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">3,220</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2555&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/maigoocms/special/bggj/151SUNWOOD.html">
                                                <i>9</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/b69dd-1729.gif" /></div>
                                                <em class="font14 dhidden">三木</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=2516&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">1,961</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2516&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/maigoocms/special/qinzi/152jwn.html">
                                                <i>10</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/d6b40-8960.gif" /></div>
                                                <em class="font14 dhidden">金万年</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=2417&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">2,021</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2417&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/maigoocms/special/qinzi/152uni.html">
                                                <i>11</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/825eb-4327.gif" /></div>
                                                <em class="font14 dhidden">三菱</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=2412&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">1,262</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2412&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/brand/18144.html">
                                                <i>12</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/62c44-9921.gif" /></div>
                                                <em class="font14 dhidden">百乐</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=18144&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">1,911</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=18144&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/maigoocms/special/qinzi/266zhonghuapai.html">
                                                <i>13</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/62666-8886.gif" /></div>
                                                <em class="font14 dhidden">中华牌</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=2489&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">1,817</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2489&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/maigoocms/special/qinzi/152yx.html">
                                                <i>14</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/735ee-4549.gif" /></div>
                                                <em class="font14 dhidden">英雄</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=2401&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">1,322</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2401&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/brand/18005.html">
                                                <i>15</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/103c7-6357.gif" /></div>
                                                <em class="font14 dhidden">斑马</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=18005&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">1,360</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=18005&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/maigoocms/special/qinzi/152BAOKE.html">
                                                <i>16</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/dde31-8945.gif" /></div>
                                                <em class="font14 dhidden">宝克</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=2420&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">1,532</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2420&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/brand/27520.html">
                                                <i>17</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/d49fa-8532.gif" /></div>
                                                <em class="font14 dhidden">马可</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=27520&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">1,193</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=27520&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/brand/10527.html">
                                                <i>18</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/e39f8-8435.gif" /></div>
                                                <em class="font14 dhidden">施德楼</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=10527&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">1,394</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=10527&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/maigoocms/special/bggj/266Maped.html">
                                                <i>19</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/5dbc7-8510.gif" /></div>
                                                <em class="font14 dhidden">马培德</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=2477&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">1,455</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=2477&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="showbox">
                                        <div class="img">
                                            <a href="https://m.maigoo.com/brand/57959.html">
                                                <i>20</i>
                                                <div class="imgbox">
                                                    <img width="207" height="90" src="{{$commonAssetUrl}}/sguide/m/img/2aceb-7547.gif" /></div>
                                                <em class="font14 dhidden">国誉</em>
                                                <div class="clear"></div>
                                            </a>
                                        </div>
                                        <div class="info font13">
                                            <span class="votenum">
                                                <a class="orange" href="/ajaxstream/vote/?action=vote&brandid=57959&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).find('.piaonum'));">
                                                    <span class="piaonum">1,099</span>
                                                    <em>票</em></a>
                                            </span>
                                            <a class="votebtn font12 bg1" href="/ajaxstream/vote/?action=vote&brandid=57959&catid=797" onclick="return !$(this).hasClass('hui')&&$(this).addClass('hui')&&ajaxlinka(this,$(this).parent().find('.votenum .piaonum'));">+</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blockmorebox font16 ">
                            <div class="morebtn c333" data-action="votelist" data-subaction="brand10top" data-thirdaction="" data-page="2" data-start="" data-defaultids="" data-sort="" data-tabnum="" data-maxpage="" onclick="getData(this)">
                                <i class="iconfont icon-gengduo"></i>
                                <span>加载更多</span></div>
                            <a class="next dn" href="/vote/list_797.html?action=votelist&subaction=brand10top&page=2">下一页</a>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="licont dn" action="brandtop">
                    <div class="blockinfo votecol1 ">
                        <div class="itembox">
                            <div class="ajaxload" data-action="votelist" data-subaction="brandtop" data-thirdaction="" data-page="1" data-start="" data-defaultids="" data-sort="" data-postdata="">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/7ee46-8575.gif" /></div>
                        </div>
                    </div>
                </div>
                <div class="licont dn" action="historytop">
                    <div class="blockinfo votecol1 ">
                        <div class="itembox">
                            <div class="ajaxload" data-action="votelist" data-subaction="historytop" data-thirdaction="" data-page="1" data-start="" data-defaultids="" data-sort="" data-postdata="">
                                <img src="{{$commonAssetUrl}}/sguide/m/img/7ee46-8575.gif" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blockinfo votenotice " id="pos_votenotice">
            <div class="itembox">
                <div class="noticebox">
                    <div class="shuomingicon font14">
                        <span class="iconfont icon-tebieshuoming shuomingimg orange"></span>
                        <div class="titleword">投票说明</div></div>
                    <div class="shuomingword font12">
                        <span class="orange">文具用品</span>
                        <span class="">品牌投票于</span>
                        <span class="orange">2020年07月07日</span>
                        <span class="">全新起航，往期投票可在历史综合票数中查看。</span>
                        <span class="">投票结果仅供参考，不代表买购网支持认可，投票数据可能会延后几小时显示，若组织恶意刷票会被系统自动清除。</span>
                        <a class="red" href="https://m.maigoo.com/maigoo/151wj_index.html">查看文具用品十大品牌榜单>>,</a>
                        <a class="color1" href="https://m.maigoo.com/answer/175.html">为什么我的品牌不能继续投票了？</a>
                        <a class="color1" href="https://m.maigoo.com/answer/173.html">投票没有我们品牌，怎么加入？</a></div>
                </div>
            </div>
        </div>
        <div class="pagecss" data-css="/public/css/mobile/v2019/color.css,/public/css/mobile/v2019/weui.min.css,/public/css/mobile/v2019/vote/list3.css,/public/css/mobile/v2019/block/vote/listtitle.css,/public/css/mobile/v2019/block/vote/cattotal.css,/public/css/mobile/v2019/block/vote/col1.css,/public/css/mobile/v2019/block/vote/votenotice.css"></div>
        <div class="pagejs" data-js="/public/js/mobile/v2019/public.js,/public/js/mobile/v2019/event.js,/public/js/mobile/v2019/weUI.js"></div>
@endsection

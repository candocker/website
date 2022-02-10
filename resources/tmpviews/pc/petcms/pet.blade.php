@extends('layouts.petcms')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.petcms._jscss', ['view' => $datas['view']])@endsection
@section('content')
<!--主题内容开始-->
<div id="content">
    <div class="content_auto">
        <!--面包屑开始-->
        <div class="crumbs mt20">
            <a href="http://www.boqii.com/baike/" target="_blank">首页</a>> 宠物大全</div>
        <!--面包屑结束-->
        <!--词条列表开始-->
        <div class="article mt5">
            <!--狗狗开始-->
            <div class="dog_tit art_dog_tit mt10" id="001" name="001">
                <em></em>
                <a target="_blank" href="http://www.boqii.com/pet-all/dog/">
                    <h2>狗狗</h2></a>
                <div class="dog_tit_r">
                    <a target="_blank" href="http://www.boqii.com/pet-all/dog/">更多 »</a></div>
            </div>
            <div class="hot_pet_cont pet_cont hot_pet_cont_xy">
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/332.html">
                            <img alt="金毛" src="{{$commonAssetUrl}}/petcms/m/img/0d9e5-4098.png" />
                            <p>中文名：金毛
                                <br />英文名：Golden Retriever
                                <br />市价：800-3000元
                                <br />浏览次数：366400</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/332.html">金毛</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/678.html">
                            <img alt="罗威纳犬" src="{{$commonAssetUrl}}/petcms/img/56a05-6030.jpg" />
                            <p>中文名：罗威纳犬
                                <br />英文名：Rottweiler
                                <br />市价：3500左右
                                <br />浏览次数：280600</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/678.html">罗威纳犬</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/357.html">
                            <img alt="哈士奇" src="{{$commonAssetUrl}}/petcms/img/1e30a-4109.png" />
                            <p>中文名：哈士奇
                                <br />英文名：Siberian Huskiy
                                <br />市价：2000-4000元
                                <br />浏览次数：268000</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/357.html">哈士奇</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/347.html">
                            <img alt="博美犬" src="{{$commonAssetUrl}}/petcms/m/img/29653-3424.jpg" />
                            <p>中文名：博美犬
                                <br />英文名：Pomeranian
                                <br />市价：1000-3000元
                                <br />浏览次数：243900</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/347.html">博美犬</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/609.html">
                            <img alt="阿拉斯加雪橇犬" src="{{$commonAssetUrl}}/petcms/img/37cf0-3659.jpg" />
                            <p>中文名：阿拉斯加雪橇犬
                                <br />英文名：Alaskan Malamute
                                <br />市价：3000起
                                <br />浏览次数：190000</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/609.html">阿拉斯加雪橇犬</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/368.html">
                            <img alt="比熊犬" src="{{$commonAssetUrl}}/petcms/m/img/fb5c3-3631.jpg" />
                            <p>中文名：比熊犬
                                <br />英文名：Bichon Frise
                                <br />市价：1000-3000元
                                <br />浏览次数：186100</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/368.html">比熊犬</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/677.html">
                            <img alt="拉布拉多猎犬" src="{{$commonAssetUrl}}/petcms/img/9a3f3-8992.jpg" />
                            <p>中文名：拉布拉多猎犬
                                <br />英文名：Labrador
                                <br />市价：1000-3000元
                                <br />浏览次数：184900</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/677.html">拉布拉多猎犬</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/377.html">
                            <img alt="法老王猎犬" src="{{$commonAssetUrl}}/petcms/img/ac9c3-2450.jpg" />
                            <p>中文名：法老王猎犬
                                <br />英文名：Pharaoh Hound
                                <br />市价：
                                <br />浏览次数：159500</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/377.html">法老王猎犬</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/340.html">
                            <img alt="贵宾" src="{{$commonAssetUrl}}/petcms/m/img/d154a-5252.jpg" />
                            <p>中文名：贵宾
                                <br />英文名：Poodle
                                <br />市价：1000-7000元
                                <br />浏览次数：153400</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/340.html">贵宾</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/613.html">
                            <img alt="柴犬" src="{{$commonAssetUrl}}/petcms/img/78af0-5643.jpg" />
                            <p>中文名：柴犬
                                <br />英文名：Shiba inu
                                <br />市价：
                                <br />浏览次数：149700</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/613.html">柴犬</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/350.html">
                            <img alt="边境牧羊犬" src="{{$commonAssetUrl}}/petcms/img/ab960-3855.jpg" />
                            <p>中文名：边境牧羊犬
                                <br />英文名：Border Collie
                                <br />市价：2000-4000元
                                <br />浏览次数：149400</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/350.html">边境牧羊犬</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/425.html">
                            <img alt="泰迪犬" src="{{$commonAssetUrl}}/petcms/img/ea15e-8430.jpg" />
                            <p>中文名：泰迪犬
                                <br />英文名：Poodle|Caniche
                                <br />市价：
                                <br />浏览次数：139600</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/425.html">泰迪犬</a></dd>
                </dl>
            </div>
            <!--狗狗结束-->
            <!--猫咪开始-->
            <div class="dog_tit art_dog_tit cat_tit mt20" id="002" name="002">
                <em></em>
                <a target="_blank" href="http://www.boqii.com/pet-all/cat/">
                    <h2>猫猫</h2></a>
                <div class="dog_tit_r">
                    <a target="_blank" href="http://www.boqii.com/pet-all/cat/">更多 »</a></div>
            </div>
            <div class="hot_pet_cont pet_cont hot_pet_cont_xy">
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/330.html">
                            <img alt="布偶猫" src="{{$commonAssetUrl}}/petcms/img/0c805-1396.jpg" />
                            <p>中文名：布偶猫
                                <br />英文名：Ragdoll
                                <br />市价：宠物级:8000-18000 赛级: 18000-25000
                                <br />浏览次数：341500</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/330.html">布偶猫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/458.html">
                            <img alt="英国短毛猫" src="{{$commonAssetUrl}}/petcms/img/1693e-3269.jpg" />
                            <p>中文名：英国短毛猫
                                <br />英文名：British Shorthair
                                <br />市价：5000--10000
                                <br />浏览次数：275000</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/458.html">英国短毛猫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/461.html">
                            <img alt="中国狸花猫" src="{{$commonAssetUrl}}/petcms/img/d0b6a-5900.jpg" />
                            <p>中文名：中国狸花猫
                                <br />英文名：Dragon Li
                                <br />市价：2000--5000
                                <br />浏览次数：228300</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/461.html">中国狸花猫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1390.html">
                            <img alt="美国短毛猫" src="{{$commonAssetUrl}}/petcms/img/3f037-6111.jpg" />
                            <p>中文名：美国短毛猫
                                <br />英文名：
                                <br />市价：
                                <br />浏览次数：196400</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1390.html">美国短毛猫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/353.html">
                            <img alt="异国短毛猫" src="{{$commonAssetUrl}}/petcms/img/2d23e-1532.jpg" />
                            <p>中文名：异国短毛猫
                                <br />英文名：Exotic Shorthair
                                <br />市价：3500--12000
                                <br />浏览次数：189900</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/353.html">异国短毛猫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/364.html">
                            <img alt="波斯猫" src="{{$commonAssetUrl}}/petcms/img/dcb96-7225.jpg" />
                            <p>中文名：波斯猫
                                <br />英文名：Persian
                                <br />市价：4000--20000
                                <br />浏览次数：172600</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/364.html">波斯猫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/359.html">
                            <img alt="暹罗猫" src="{{$commonAssetUrl}}/petcms/img/96a2b-7471.jpg" />
                            <p>中文名：暹罗猫
                                <br />英文名：Siamese
                                <br />市价：500-1500
                                <br />浏览次数：130200</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/359.html">暹罗猫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/423.html">
                            <img alt="加拿大无毛猫" src="{{$commonAssetUrl}}/petcms/img/e99fa-7737.jpg" />
                            <p>中文名：加拿大无毛猫
                                <br />英文名：Sphynx
                                <br />市价：
                                <br />浏览次数：127200</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/423.html">加拿大无毛猫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/343.html">
                            <img alt="苏格兰折耳猫" src="{{$commonAssetUrl}}/petcms/img/69941-8898.jpg" />
                            <p>中文名：苏格兰折耳猫
                                <br />英文名：Scottish Fold
                                <br />市价：8000--20000
                                <br />浏览次数：110300</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/343.html">苏格兰折耳猫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/389.html">
                            <img alt="斯芬克斯猫" src="{{$commonAssetUrl}}/petcms/img/5fdf1-9334.jpg" />
                            <p>中文名：斯芬克斯猫
                                <br />英文名：Canadian Hairless
                                <br />市价：20000以上
                                <br />浏览次数：99000</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/389.html">斯芬克斯猫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/416.html">
                            <img alt="俄罗斯蓝猫" src="{{$commonAssetUrl}}/petcms/img/b2147-4572.jpg" />
                            <p>中文名：俄罗斯蓝猫
                                <br />英文名：Russian Blue
                                <br />市价：
                                <br />浏览次数：82300</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/416.html">俄罗斯蓝猫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/419.html">
                            <img alt="金吉拉" src="{{$commonAssetUrl}}/petcms/img/9afb4-7387.jpg" />
                            <p>中文名：金吉拉
                                <br />英文名：Chinchilla
                                <br />市价：2500-5000元
                                <br />浏览次数：69700</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/419.html">金吉拉</a></dd>
                </dl>
            </div>
            <!--猫咪结束-->
            <!--小宠开始-->
            <div class="dog_tit art_dog_tit water_tit mt20" id="003" name="003">
                <em></em>
                <a target="_blank" href="http://www.boqii.com/pet-all/smallpet/">
                    <h2>小宠</h2></a>
                <div class="dog_tit_r">
                    <a target="_blank" href="http://www.boqii.com/pet-all/smallpet/">更多 »</a></div>
            </div>
            <div class="hot_pet_cont pet_cont hot_pet_cont_xy">
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/993.html">
                            <img alt="狨猴" src="{{$commonAssetUrl}}/petcms/img/5a28b-5633.jpg" />
                            <p>中文名：狨猴
                                <br />英文名：Marmoset
                                <br />市价：
                                <br />浏览次数：208900</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/993.html">狨猴</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1015.html">
                            <img alt="虎皮鹦鹉" src="{{$commonAssetUrl}}/petcms/img/f1558-4248.jpg" />
                            <p>中文名：虎皮鹦鹉
                                <br />英文名：Budgerigar
                                <br />市价：
                                <br />浏览次数：129300</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1015.html">虎皮鹦鹉</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/358.html">
                            <img alt="垂耳兔" src="{{$commonAssetUrl}}/petcms/img/3ccee-6957.jpg" />
                            <p>中文名：垂耳兔
                                <br />英文名：
                                <br />市价：80~150元
                                <br />浏览次数：128500</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/358.html">垂耳兔</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/365.html">
                            <img alt="安哥拉兔" src="{{$commonAssetUrl}}/petcms/img/5f1b2-6550.jpg" />
                            <p>中文名：安哥拉兔
                                <br />英文名：Angora
                                <br />市价：500元左右
                                <br />浏览次数：127000</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/365.html">安哥拉兔</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/712.html">
                            <img alt="小葵花凤头鹦鹉" src="{{$commonAssetUrl}}/petcms/img/26b39-7592.jpg" />
                            <p>中文名：小葵花凤头鹦鹉
                                <br />英文名：Yellow-crested Cockatoo
                                <br />市价：
                                <br />浏览次数：125700</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/712.html">小葵花凤头鹦鹉</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/360.html">
                            <img alt="布丁仓鼠" src="{{$commonAssetUrl}}/petcms/img/171da-2587.jpg" />
                            <p>中文名：布丁仓鼠
                                <br />英文名：Cricetidae
                                <br />市价：
                                <br />浏览次数：122800</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/360.html">布丁仓鼠</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/607.html">
                            <img alt="指猴" src="{{$commonAssetUrl}}/petcms/img/80f4e-6317.jpg" />
                            <p>中文名：指猴
                                <br />英文名：aye-aye
                                <br />市价：
                                <br />浏览次数：118400</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/607.html">指猴</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1363.html">
                            <img alt="八哥鸟" src="{{$commonAssetUrl}}/petcms/img/f79b6-6076.jpg" />
                            <p>中文名：八哥鸟
                                <br />英文名：Acridotherescristatellus
                                <br />市价：25—100
                                <br />浏览次数：117800</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1363.html">八哥鸟</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/351.html">
                            <img alt="标准灰龙猫" src="{{$commonAssetUrl}}/petcms/img/fda4c-5065.jpg" />
                            <p>中文名：标准灰龙猫
                                <br />英文名：
                                <br />市价：
                                <br />浏览次数：98400</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/351.html">标准灰龙猫</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1090.html">
                            <img alt="奶茶仓鼠" src="{{$commonAssetUrl}}/petcms/img/97f0d-7999.jpg" />
                            <p>中文名：奶茶仓鼠
                                <br />英文名：DwarfWinterWhiteRussianHamster
                                <br />市价：20—100
                                <br />浏览次数：95200</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1090.html">奶茶仓鼠</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/992.html">
                            <img alt="日本袖珍石猴" src="{{$commonAssetUrl}}/petcms/img/3e4bd-4372.jpg" />
                            <p>中文名：日本袖珍石猴
                                <br />英文名：
                                <br />市价：
                                <br />浏览次数：88300</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/992.html">日本袖珍石猴</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/686.html">
                            <img alt="相思鸟" src="{{$commonAssetUrl}}/petcms/img/13276-7392.jpg" />
                            <p>中文名：相思鸟
                                <br />英文名：Leiothrix argentauris
                                <br />市价：
                                <br />浏览次数：88300</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/686.html">相思鸟</a></dd>
                </dl>
            </div>
            <!--小宠结束-->
            <!--水族开始-->
            <div class="dog_tit art_dog_tit fish_tit mt20" id="004" name="004">
                <em></em>
                <a target="_blank" href="http://www.boqii.com/pet-all/aquarium/">
                    <h2>水族</h2></a>
                <div class="dog_tit_r">
                    <a target="_blank" href="http://www.boqii.com/pet-all/aquarium/">更多 »</a></div>
            </div>
            <div class="hot_pet_cont pet_cont hot_pet_cont_xy">
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/874.html">
                            <img alt="金龙鱼" src="{{$commonAssetUrl}}/petcms/img/703c9-8663.jpg" />
                            <p>中文名：金龙鱼
                                <br />英文名：
                                <br />市价：
                                <br />浏览次数：162600</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/874.html">金龙鱼</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1212.html">
                            <img alt="鹦鹉鱼" src="{{$commonAssetUrl}}/petcms/img/a6099-9340.jpg" />
                            <p>中文名：鹦鹉鱼
                                <br />英文名：Blood parrot
                                <br />市价：
                                <br />浏览次数：106500</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1212.html">鹦鹉鱼</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1171.html">
                            <img alt="银龙鱼" src="{{$commonAssetUrl}}/petcms/img/3dea6-7593.jpg" />
                            <p>中文名：银龙鱼
                                <br />英文名：Osteoglossum bicirrhosum
                                <br />市价：
                                <br />浏览次数：103400</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1171.html">银龙鱼</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/703.html">
                            <img alt="过背金龙" src="{{$commonAssetUrl}}/petcms/img/8af31-7283.jpg" />
                            <p>中文名：过背金龙
                                <br />英文名：Malayan Golden Arawana
                                <br />市价：
                                <br />浏览次数：100500</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/703.html">过背金龙</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/568.html">
                            <img alt="成吉思汗鱼" src="{{$commonAssetUrl}}/petcms/img/f1d7c-3334.jpg" />
                            <p>中文名：成吉思汗鱼
                                <br />英文名：pangasius sanitwongsei
                                <br />市价：
                                <br />浏览次数：91300</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/568.html">成吉思汗鱼</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1243.html">
                            <img alt="招财鱼" src="{{$commonAssetUrl}}/petcms/img/d91e1-6156.jpg" />
                            <p>中文名：招财鱼
                                <br />英文名：osphronemus goramy
                                <br />市价：
                                <br />浏览次数：81900</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1243.html">招财鱼</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1207.html">
                            <img alt="虎鱼" src="{{$commonAssetUrl}}/petcms/img/3cb8e-9069.jpg" />
                            <p>中文名：虎鱼
                                <br />英文名：
                                <br />市价：
                                <br />浏览次数：81300</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1207.html">虎鱼</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/331.html">
                            <img alt="孔雀鱼" src="{{$commonAssetUrl}}/petcms/img/7d197-7170.jpg" />
                            <p>中文名：孔雀鱼
                                <br />英文名：guppy
                                <br />市价：
                                <br />浏览次数：70700</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/331.html">孔雀鱼</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1143.html">
                            <img alt="血红龙" src="{{$commonAssetUrl}}/petcms/img/2eff9-3342.jpg" />
                            <p>中文名：血红龙
                                <br />英文名：Scleropages formosus
                                <br />市价：
                                <br />浏览次数：70100</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1143.html">血红龙</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/335.html">
                            <img alt="龙鱼" src="{{$commonAssetUrl}}/petcms/img/5eecc-2377.jpg" />
                            <p>中文名：龙鱼
                                <br />英文名：
                                <br />市价：
                                <br />浏览次数：68800</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/335.html">龙鱼</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/977.html">
                            <img alt="青龙鱼" src="{{$commonAssetUrl}}/petcms/img/992dd-1237.jpg" />
                            <p>中文名：青龙鱼
                                <br />英文名：Green Arowana
                                <br />市价：
                                <br />浏览次数：63300</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/977.html">青龙鱼</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/338.html">
                            <img alt="金鱼" src="{{$commonAssetUrl}}/petcms/img/6b38a-3955.jpg" />
                            <p>中文名：金鱼
                                <br />英文名：Carassius auratus
                                <br />市价：
                                <br />浏览次数：58800</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/338.html">金鱼</a></dd>
                </dl>
            </div>
            <!--水族结束-->
            <!--爬虫开始-->
            <div class="dog_tit art_dog_tit reptile_tit mt20" id="005" name="005">
                <em></em>
                <a target="_blank" href="http://www.boqii.com/pet-all/reptile/">
                    <h2>爬虫</h2></a>
                <div class="dog_tit_r">
                    <a target="_blank" href="http://www.boqii.com/pet-all/reptile/">更多 »</a></div>
            </div>
            <div class="hot_pet_cont pet_cont hot_pet_cont_xy">
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/713.html">
                            <img alt="金钱龟" src="{{$commonAssetUrl}}/petcms/img/30934-7943.jpg" />
                            <p>中文名：金钱龟
                                <br />英文名：Cuora trifasciata
                                <br />市价：
                                <br />浏览次数：321200</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/713.html">金钱龟</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/342.html">
                            <img alt="大鳄龟" src="{{$commonAssetUrl}}/petcms/img/b0857-8425.png" />
                            <p>中文名：大鳄龟
                                <br />英文名：Macroclemystemminckii
                                <br />市价：800~1200元
                                <br />浏览次数：199700</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/342.html">大鳄龟</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/462.html">
                            <img alt="黄头侧颈龟" src="{{$commonAssetUrl}}/petcms/img/0a27f-4536.jpg" />
                            <p>中文名：黄头侧颈龟
                                <br />英文名：Yellow-spotted Amazonriver turtle
                                <br />市价：100元以上
                                <br />浏览次数：185500</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/462.html">黄头侧颈龟</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1102.html">
                            <img alt="中华草龟" src="{{$commonAssetUrl}}/petcms/img/b1f3d-8809.jpg" />
                            <p>中文名：中华草龟
                                <br />英文名：Chinese pond turtle
                                <br />市价：20~50元
                                <br />浏览次数：149900</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1102.html">中华草龟</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/334.html">
                            <img alt="蛋龟" src="{{$commonAssetUrl}}/petcms/img/2a57c-4467.jpg" />
                            <p>中文名：蛋龟
                                <br />英文名：
                                <br />市价：根据不同的品种，价格差异较大
                                <br />浏览次数：135900</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/334.html">蛋龟</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/348.html">
                            <img alt="巴西红耳龟" src="{{$commonAssetUrl}}/petcms/img/a4e63-4710.jpg" />
                            <p>中文名：巴西红耳龟
                                <br />英文名：Trachemys scripta elegans
                                <br />市价：便宜，小的也就几块钱
                                <br />浏览次数：130700</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/348.html">巴西红耳龟</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/466.html">
                            <img alt="黄喉拟水龟" src="{{$commonAssetUrl}}/petcms/img/0f18c-7755.jpg" />
                            <p>中文名：黄喉拟水龟
                                <br />英文名：Asian Yellow Pond Turtle
                                <br />市价：500~1000元
                                <br />浏览次数：128500</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/466.html">黄喉拟水龟</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1269.html">
                            <img alt="赤练蛇" src="{{$commonAssetUrl}}/petcms/img/1203a-7593.jpg" />
                            <p>中文名：赤练蛇
                                <br />英文名：Lycodon rufozonatus
                                <br />市价：
                                <br />浏览次数：117800</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/1269.html">赤练蛇</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/949.html">
                            <img alt="中华石龙子" src="{{$commonAssetUrl}}/petcms/img/58ca8-5355.jpg" />
                            <p>中文名：中华石龙子
                                <br />英文名：Chinese skink
                                <br />市价：
                                <br />浏览次数：99600</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/949.html">中华石龙子</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/329.html">
                            <img alt="枫叶龟" src="{{$commonAssetUrl}}/petcms/img/a6a74-6795.jpg" />
                            <p>中文名：枫叶龟
                                <br />英文名：Black-breatsed Leaf Turtle
                                <br />市价：100~500元
                                <br />浏览次数：90700</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/329.html">枫叶龟</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/714.html">
                            <img alt="加拉帕戈斯象龟" src="{{$commonAssetUrl}}/petcms/img/77fe6-2321.jpg" />
                            <p>中文名：加拉帕戈斯象龟
                                <br />英文名：Galapagos Giant Tortoise
                                <br />市价：
                                <br />浏览次数：90300</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/714.html">加拉帕戈斯象龟</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/459.html">
                            <img alt="火焰龟" src="{{$commonAssetUrl}}/petcms/img/dbd26-3914.jpg" />
                            <p>中文名：火焰龟
                                <br />英文名：Painted Turtle
                                <br />市价：
                                <br />浏览次数：84600</p></a>
                    </dt>
                    <dd>
                        <a target="_blank" href="http://www.boqii.com/entry/detail/459.html">火焰龟</a></dd>
                </dl>
            </div>
            <!--爬虫结束--></div>
        <!--词条列表结束-->
        <div class="message">用关爱与呵护谱写的养宠百科，全面的养宠知识满足所需，专业的宠物医生在线解答，为爱宠健康生活保驾护航。波奇——全面关爱宠物生活！</div></div>
</div>
<!--主题内容结束-->
@endsection

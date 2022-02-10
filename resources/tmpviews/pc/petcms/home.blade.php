@extends('layouts.petcms')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('content')
    <!--主题内容开始-->
    <div id="content">
        <div class="content_top">
            <div class="content_top_auto">
                <!--banner开始-->
                <div id="banner" class="left">
                    <div class="banner_content bd">
                        <div class="banner_list">
                            <a href="http://bbs.boqii.com/content/viewthread-4509373.html" target="_blank" ids="ID_101" var="101">
                                <img src="{{$commonAssetUrl}}/petcms/img/862ae-4684.jpg" alt="【招募测评达人】千元现金券月月拿，万元免费好货等你测" />
                                <dl>
                                    <dt>【招募测评达人】千元现金券月月拿，万元免费好货等你测</dt>
                                    <dd>有没有想过不花钱也能精致养宠，甚至还能轻松 赚 钱？</dd></dl>
                            </a>
                        </div>
                        <div class="banner_list cur">
                            <a href="http://bbs.boqii.com/content/viewthread-4509370.html" target="_blank" ids="ID_101" var="101">
                                <img src="{{$commonAssetUrl}}/petcms/img/d1210-2244.jpg" alt="【每周-社区活动-招新】宠物圈里最容易拿奖的活动，没有之一" />
                                <dl>
                                    <dt>【每周-社区活动-招新】宠物圈里最容易拿奖的活动，没有之一</dt>
                                    <dd></dd>
                                </dl>
                            </a>
                        </div>
                        <div class="banner_list">
                            <a href="http://bbs.boqii.com/content/viewthread-4509374.html" target="_blank" ids="ID_101" var="101">
                                <img src="{{$commonAssetUrl}}/petcms/img/0773a-2763.jpg" alt="【波奇官方读者群招新】杭州打狗、网红Saya、玉林狗肉节……新闻早知道" />
                                <dl>
                                    <dt>【波奇官方读者群招新】杭州打狗、网红Saya、玉林狗肉节……新闻早知道</dt>
                                    <dd>我们是：《狗哥说事》官方全球读者群！我们做：最新鲜、最搞笑的全球新闻、最萌趣、最沙雕的宠物趣事，最犀...</dd></dl>
                            </a>
                        </div>
                    </div>
                    <div class="banner_num">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="banner_prev"></div>
                    <div class="banner_next"></div>
                </div>
                <!--banner结束-->
                <!--右侧分类开始-->
                <div class="classify right">
                    <a href="http://www.boqii.com/pet-all/">
                        <dl>
                            <dt class="pet"></dt>
                            <dd class="name">宠物大全</dd>
                            <dd>在这里，我们用相知与它结缘</dd></dl>
                    </a>
                    <a href="http://www.boqii.com/baike/feeding/">
                        <dl>
                            <dt class="raise"></dt>
                            <dd class="name">宠物饲养</dd>
                            <dd>在这里，我们用安全伴它成长</dd></dl>
                    </a>
                    <a href="http://www.boqii.com/baike/train/">
                        <dl>
                            <dt class="train"></dt>
                            <dd class="name">宠物训练</dd>
                            <dd>在这里，我们用鼓励陪它同行</dd></dl>
                    </a>
                    <a href="http://www.boqii.com/baike/medical/">
                        <dl>
                            <dt class="medical"></dt>
                            <dd class="name">宠物医疗</dd>
                            <dd>在这里，我们用呵护保它健康</dd></dl>
                    </a>
                </div>
                <!--右侧分类结束--></div>
        </div>
        <div class="content_auto">
            <!--热门宠物开始-->
            <div class="hot_pet mt20">
                <div class="hot_pet_tit">
                    <h2>热门宠物</h2>
                    <a href="http://www.boqii.com/pet-all/" target="_blank">更多 »</a></div>
                <div class="hot_pet_cont hot_pet_cont_xy">
                    <dl>
                        <dt>
                            <a href="http://www.boqii.com/entry/detail/332.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/petcms/m/img/0d9e5-4098.png" alt="金毛" /></a>
                        </dt>
                        <dd>
                            <a href="http://www.boqii.com/entry/detail/332.html" target="_blank">金毛</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a href="http://www.boqii.com/entry/detail/357.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/petcms/img/1e30a-4109.png" alt="哈士奇" /></a>
                        </dt>
                        <dd>
                            <a href="http://www.boqii.com/entry/detail/357.html" target="_blank">哈士奇</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a href="http://www.boqii.com/entry/detail/368.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/petcms/m/img/fb5c3-3631.jpg" alt="比熊犬" /></a>
                        </dt>
                        <dd>
                            <a href="http://www.boqii.com/entry/detail/368.html" target="_blank">比熊犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a href="http://www.boqii.com/entry/detail/347.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/petcms/m/img/29653-3424.jpg" alt="博美犬" /></a>
                        </dt>
                        <dd>
                            <a href="http://www.boqii.com/entry/detail/347.html" target="_blank">博美犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a href="http://www.boqii.com/entry/detail/350.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/petcms/img/ab960-3855.jpg" alt="边境牧羊犬" /></a>
                        </dt>
                        <dd>
                            <a href="http://www.boqii.com/entry/detail/350.html" target="_blank">边境牧羊犬</a></dd>
                    </dl>
                    <dl class="dl6">
                        <dt>
                            <a href="http://www.boqii.com/entry/detail/340.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/petcms/m/img/d154a-5252.jpg" alt="贵宾" /></a>
                        </dt>
                        <dd>
                            <a href="http://www.boqii.com/entry/detail/340.html" target="_blank">贵宾</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a href="http://www.boqii.com/entry/detail/337.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/petcms/m/img/908b7-3695.jpg" alt="约克夏" /></a>
                        </dt>
                        <dd>
                            <a href="http://www.boqii.com/entry/detail/337.html" target="_blank">约克夏</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a href="http://www.boqii.com/entry/detail/358.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/petcms/img/3ccee-6957.jpg" alt="垂耳兔" /></a>
                        </dt>
                        <dd>
                            <a href="http://www.boqii.com/entry/detail/358.html" target="_blank">垂耳兔</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a href="http://www.boqii.com/entry/detail/353.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/petcms/img/2d23e-1532.jpg" alt="异国短毛猫" /></a>
                        </dt>
                        <dd>
                            <a href="http://www.boqii.com/entry/detail/353.html" target="_blank">异国短毛猫</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a href="http://www.boqii.com/entry/detail/364.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/petcms/img/dcb96-7225.jpg" alt="波斯猫" /></a>
                        </dt>
                        <dd>
                            <a href="http://www.boqii.com/entry/detail/364.html" target="_blank">波斯猫</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a href="http://www.boqii.com/entry/detail/343.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/petcms/img/69941-8898.jpg" alt="苏格兰折耳猫" /></a>
                        </dt>
                        <dd>
                            <a href="http://www.boqii.com/entry/detail/343.html" target="_blank">苏格兰折耳猫</a></dd>
                    </dl>
                    <dl class="dl6">
                        <dt>
                            <a href="http://www.boqii.com/entry/detail/342.html" target="_blank">
                                <img src="{{$commonAssetUrl}}/petcms/img/b0857-8425.png" alt="大鳄龟" /></a>
                        </dt>
                        <dd>
                            <a href="http://www.boqii.com/entry/detail/342.html" target="_blank">大鳄龟</a></dd>
                    </dl>
                </div>
            </div>
            <!--热门宠物结束-->
            <!--狗狗百科开始-->
            <div class="dog mt30">
                <div class="dog_tit">
                    <em></em>
                    <h2>狗狗百科</h2>
                    <div class="dog_tit_r">
                        <a href="http://www.boqii.com/baike/dogfd/" target="_blank">狗狗饲养</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="http://www.boqii.com/baike/dogtn/" target="_blank">狗狗训练</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="http://www.boqii.com/baike/dogmd/" target="_blank">狗狗医疗</a></div>
                </div>
                <div class="dog_cont">
                    <div class="pet_c_l left mt20">
                        <div class="pet_c_l_h bd">
                            <dl class="dog_c_l left">
                                <dt>
                                    <a href="http://www.boqii.com/article/22357.html" target="_blank">
                                        <img src="{{$commonAssetUrl}}/petcms/img/89705-1124.jpg" alt="犬体外寄生虫会诱发出哪些疾病" />
                                        <span>犬体外寄生虫会诱发出哪些疾病</span></a>
                                </dt>
                                <dd>为狗狗做好驱虫工作不只是为了防止某些寄生虫对我们的健康造成影响，更主要的是因为寄生虫对于狗狗的危害来的更大，而且寄生虫不...[
                                    <a href="http://www.boqii.com/article/22357.html" target="_blank">详细</a>]</dd></dl>
                            <dl class="dog_c_l left">
                                <dt>
                                    <a href="http://www.boqii.com/article/22384.html" target="_blank">
                                        <img src="{{$commonAssetUrl}}/petcms/img/2735b-9810.jpg" alt="维生素过量对狗狗有何危害" />
                                        <span>维生素过量对狗狗有何危害</span></a>
                                </dt>
                                <dd>维生素是维持狗狗生长发育以及正常生理的必要物质，合理地为狗狗补充维生素能够有效地增强狗狗的抵抗力，并在一定程度上防止狗狗...[
                                    <a href="http://www.boqii.com/article/22384.html" target="_blank">详细</a>]</dd></dl>
                            <dl class="dog_c_l left">
                                <dt>
                                    <a href="http://www.boqii.com/article/22372.html" target="_blank">
                                        <img src="{{$commonAssetUrl}}/petcms/img/4e421-6100.jpg" alt="酶与益生菌对于狗狗有何作用" />
                                        <span>酶与益生菌对于狗狗有何作用</span></a>
                                </dt>
                                <dd>其实狗狗身体本身就会存在各式各样的酶，来帮助机体消化以及吸收营养。不过随着某些食物摄入量地减少，某些酶的活性就会变得越来...[
                                    <a href="http://www.boqii.com/article/22372.html" target="_blank">详细</a>]</dd></dl>
                        </div>
                        <div class="dog_prev"></div>
                        <div class="dog_next"></div>
                    </div>
                    <div class="dog_c_c left">
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/348999.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/348999.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/bad98-8831.jpg" alt="怎么样训练小鹿犬打猎呢？" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/348999.html" target="_blank">怎么样训练小鹿犬打猎呢？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/348996.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/348996.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/8432f-8912.jpg" alt="如何训练拉布拉多嗅觉，让其根据味道找东西？" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/348996.html" target="_blank">如何训练拉布拉多嗅觉，让其根据味道找东西？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/348995.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/348995.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/66d55-1961.jpg" alt="农村怎么训练狗扑咬？这样的方式或许更加管用 " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/348995.html" target="_blank">农村怎么训练狗扑咬？这样的方式或许更加管用</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/348994.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/348994.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/cfc4a-1925.jpg" alt="牧羊犬怎么训练睡觉？为什么要让其有足够的睡眠？" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/348994.html" target="_blank">牧羊犬怎么训练睡觉？为什么要让其有足够的睡眠？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/348992.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/348992.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/71c02-6881.jpg" alt="两年的金毛怎么训练？这几个方法很不错 " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/348992.html" target="_blank">两年的金毛怎么训练？这几个方法很不错</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/348991.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/348991.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/371d1-3016.jpg" alt="两年的金毛怎么训练？这几个方法很不错" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/348991.html" target="_blank">两年的金毛怎么训练？这几个方法很不错</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/348990.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/348990.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/8b85b-1621.jpg" alt="两个月小狗训练方法介绍，这样训练狗很乖 " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/348990.html" target="_blank">两个月小狗训练方法介绍，这样训练狗很乖</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/348989.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/348989.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/3d0c4-3730.jpg" alt="怎么对两个月的灵提犬训练？" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/348989.html" target="_blank">怎么对两个月的灵提犬训练？</a></dd>
                        </dl>
                    </div>
                    <ul class="dog_c_r mt20 right dog_c_r_xy">
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/19467.html" target="_blank">一个月大左右的金毛能和幼儿奶粉吗</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/19466.html" target="_blank">一个月大左右的金毛能和幼儿奶粉吗</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/19328.html" target="_blank">狗狗的疫苗问题</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/19208.html" target="_blank">关于驱虫问题</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/19190.html" target="_blank">点蚊香对狗狗有影响吗？</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/18787.html" target="_blank">舌下囊肿</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/18778.html" target="_blank">狗舌下囊肿</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/18746.html" target="_blank">宝宝不吃饭怎么办</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/18685.html" target="_blank">狗狗总睡觉</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/18316.html" target="_blank">求助，两个月巴哥幼犬是不是病了</a></li>
                    </ul>
                </div>
            </div>
            <!--狗狗百科结束-->
            <!--猫咪百科开始-->
            <div class="dog mt30">
                <div class="dog_tit cat_tit">
                    <em></em>
                    <h2>猫咪百科</h2>
                    <div class="dog_tit_r">
                        <a href="http://www.boqii.com/baike/catfd/" target="_blank">猫咪饲养</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="http://www.boqii.com/baike/cattn/" target="_blank">猫咪训练</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="http://www.boqii.com/baike/catmd/" target="_blank">猫咪医疗</a></div>
                </div>
                <div class="dog_cont">
                    <div class="pet_c_l left mt20">
                        <div class="pet_c_l_h bd">
                            <dl class="dog_c_l left">
                                <dt>
                                    <a href="http://www.boqii.com/article/22375.html" target="_blank">
                                        <img src="{{$commonAssetUrl}}/petcms/img/d4f5a-2432.jpg" alt="几种常见的猫咪的保定方法" />
                                        <span>几种常见的猫咪的保定方法</span></a>
                                </dt>
                                <dd>在对于猫咪的饲养过程中，我们时常会遇到猫咪的各种各样的病症，在对这些病症做出诊断之前，我们需要对猫咪做一些一般的检查，比...[
                                    <a href="http://www.boqii.com/article/22375.html" target="_blank">详细</a>]</dd></dl>
                            <dl class="dog_c_l left">
                                <dt>
                                    <a href="http://www.boqii.com/article/22382.html" target="_blank">
                                        <img src="{{$commonAssetUrl}}/petcms/img/9d754-4531.jpg" alt="母猫的产后护理" />
                                        <span>母猫的产后护理</span></a>
                                </dt>
                                <dd>众所周知，猫的分娩是一个十分漫长的过程，它在其中消耗了很大的体力，身体十分虚弱，抗病力明显下降。此时需要而且补充一定的营...[
                                    <a href="http://www.boqii.com/article/22382.html" target="_blank">详细</a>]</dd></dl>
                            <dl class="dog_c_l left">
                                <dt>
                                    <a href="http://www.boqii.com/article/22383.html" target="_blank">
                                        <img src="{{$commonAssetUrl}}/petcms/img/bbd14-4485.jpg" alt=" 猫身体检查的方法" />
                                        <span>猫身体检查的方法</span></a>
                                </dt>
                                <dd>猫出现了病症，对于猫病症的检查方法有许多种，可分为全身检查，被毛和皮肤检查，可视粘膜的检查等等，其中各个部位的检查方法也...[
                                    <a href="http://www.boqii.com/article/22383.html" target="_blank">详细</a>]</dd></dl>
                        </div>
                        <div class="dog_prev"></div>
                        <div class="dog_next"></div>
                    </div>
                    <div class="dog_c_c left">
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/348998.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/348998.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/b6142-9653.jpg" alt="如何训练孟加拉豹猫，谈一谈你的看法呢？ " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/348998.html" target="_blank">如何训练孟加拉豹猫，谈一谈你的看法呢？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/348997.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/348997.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/9cd8b-6743.jpg" alt="如何训练猫晚上不叫？这几点做到就不会叫了 " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/348997.html" target="_blank">如何训练猫晚上不叫？这几点做到就不会叫了</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/37320.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/37320.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/28d59-2958.jpg" alt="猫咪会进入你的被子，几个小技巧让你的猫咪学会回窝睡 " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/37320.html" target="_blank">猫咪会进入你的被子，几个小技巧让你的猫咪学会回窝睡</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/37311.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/37311.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/db1dd-6606.jpg" alt="猫咪会进入你的被子，几个小技巧让你的猫咪学会回窝睡 " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/37311.html" target="_blank">猫咪会进入你的被子，几个小技巧让你的猫咪学会回窝睡</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/37195.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/37195.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/9be65-9396.jpg" alt="怎么训练猫使用猫砂？这种方法非常有效" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/37195.html" target="_blank">怎么训练猫使用猫砂？这种方法非常有效</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/37184.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/37184.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/f66ae-8161.jpg" alt="美短太淘气怎么训练？ " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/37184.html" target="_blank">美短太淘气怎么训练？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/36287.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/36287.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/df956-2024.jpg" alt="金吉拉呼吸很重是生病了吗？" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/36287.html" target="_blank">金吉拉呼吸很重是生病了吗？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/36286.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/36286.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/e597d-2726.jpg" alt="为什么会给猫咪断尾？" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/36286.html" target="_blank">为什么会给猫咪断尾？</a></dd>
                        </dl>
                    </div>
                    <ul class="dog_c_r mt20 right dog_c_r_xy">
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/19727.html" target="_blank">我的猫是什么病？</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/19402.html" target="_blank">猫咪乱尿尿后怎么除尿味？</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/19401.html" target="_blank">猫咪乱尿尿后怎么除尿味？</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/19360.html" target="_blank">那里有卖狸花猫的</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/19260.html" target="_blank">给猫咪换了新猫砂后不在上面拉粑粑</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/18874.html" target="_blank">两个多月的小猫生病</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/18841.html" target="_blank">母猫产后怎么补充营养？</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/18739.html" target="_blank">母猫产后心跳很快，还会喘气</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/18573.html" target="_blank">一个月的小奶猫能不能单独放在家里3天？</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/17945.html" target="_blank">两个月奶猫呕吐，吐酸水</a></li>
                    </ul>
                </div>
            </div>
            <!-- 猫咪百科结束 -->
            <!-- 小宠爬虫水族开始 -->
            <div class="dog mt30">
                <div class="dog_tit water_tit">
                    <em></em>
                    <h2>小宠爬虫水族</h2>
                    <div class="dog_tit_r">
                        <a href="http://www.boqii.com/pet-all/smallpet/hamster/" target="_blank">仓鼠/龙猫</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="http://www.boqii.com/pet-all/smallpet/rabbit/" target="_blank">兔子</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="http://www.boqii.com/pet-all/aquarium/trfish/" target="_blank">热带鱼</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="http://www.boqii.com/pet-all/reptile/tortoise/" target="_blank">陆龟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="http://www.boqii.com/pet-all/reptile/terrapin/" target="_blank">水龟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="http://www.boqii.com/pet-all/" target="_blank">更多 »</a></div>
                </div>
                <div class="dog_cont">
                    <div class="pet_c_l left mt20">
                        <div class="pet_c_l_h bd">
                            <dl class="dog_c_l left">
                                <dt>
                                    <a href="http://www.boqii.com/article/22364.html" target="_blank">
                                        <img src="{{$commonAssetUrl}}/petcms/img/af5b9-4129.jpg" alt="怎样预防兔异食症" />
                                        <span>怎样预防兔异食症</span></a>
                                </dt>
                                <dd>兔异食症的发生除了与平时的习惯有关之外，主要还是因为身体缺乏某些微量元素所造成的。患有异食症的家兔会对原本很多本能进食的...[
                                    <a href="http://www.boqii.com/article/22364.html" target="_blank">详细</a>]</dd></dl>
                            <dl class="dog_c_l left">
                                <dt>
                                    <a href="http://www.boqii.com/article/223692.html" target="_blank">
                                        <img src="http://img.boqiicdn.com/" alt="金鱼常见病鳃-家养金鱼常见病及治疗方法介绍" />
                                        <span>金鱼常见病鳃-家养金鱼常见病及治疗方法介绍</span></a>
                                </dt>
                                <dd>家养金鱼常见病及治疗方法介绍下面介绍一下家养金鱼常见病及治疗方法，大家可以了解一下!一、溃疡病或称寄孔病，与产气单胞菌或...[
                                    <a href="http://www.boqii.com/article/223692.html" target="_blank">详细</a>]</dd></dl>
                            <dl class="dog_c_l left">
                                <dt>
                                    <a href="http://www.boqii.com/article/22381.html" target="_blank">
                                        <img src="{{$commonAssetUrl}}/petcms/img/f882f-9195.jpg" alt="锦鲤的一般特性" />
                                        <span>锦鲤的一般特性</span></a>
                                </dt>
                                <dd>锦鲤是观赏性特别高的鱼类，它因色彩艳丽而具有“水中活宝石”、“会游泳的艺术品”之称，它在日本广泛生产繁殖，近年来在中国广...[
                                    <a href="http://www.boqii.com/article/22381.html" target="_blank">详细</a>]</dd></dl>
                        </div>
                        <div class="dog_prev"></div>
                        <div class="dog_next"></div>
                    </div>
                    <div class="dog_c_c left">
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/348993.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/348993.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/805eb-8347.jpg" alt="龙猫几个月开始训练比较好？如何训练？ " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/348993.html" target="_blank">龙猫几个月开始训练比较好？如何训练？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/348987.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/348987.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/4162b-8785.jpg" alt="腊嘴鸟能训练放飞吗？如何训练腊嘴鸟放飞？" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/348987.html" target="_blank">腊嘴鸟能训练放飞吗？如何训练腊嘴鸟放飞？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/41476.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/41476.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/e656e-3172.jpg" alt="盘点一下又干净又好养的小宠物，有你喜欢的吗？ " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/41476.html" target="_blank">盘点一下又干净又好养的小宠物，有你喜欢的吗？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/41470.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/41470.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/f809f-6226.jpg" alt="什么宠物小巧好养便宜？ " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/41470.html" target="_blank">什么宠物小巧好养便宜？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/41464.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/41464.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/65a11-9386.jpg" alt="刚果灰鹦鹉如何训练？刚果灰鹦鹉如何购买？ " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/41464.html" target="_blank">刚果灰鹦鹉如何训练？刚果灰鹦鹉如何购买？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/37125.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/37125.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/ac0d2-3880.jpg" alt="如何训练画眉鸟托手？看完你就知道了 " /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/37125.html" target="_blank">如何训练画眉鸟托手？看完你就知道了</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/36131.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/36131.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/7737d-2549.jpg" alt="银狐仓鼠不能喂哪些食物？" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/36131.html" target="_blank">银狐仓鼠不能喂哪些食物？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/36130.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/36130.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/84da8-4693.jpg" alt="老婆婆仓鼠的饲养方法有什么不一样？" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/36130.html" target="_blank">老婆婆仓鼠的饲养方法有什么不一样？</a></dd>
                        </dl>
                    </div>
                    <ul class="dog_c_r mt20 right dog_c_r_xy">
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/19838.html" target="_blank">我的巴西红耳龟在蜕皮不吃东西</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/17406.html" target="_blank">问医</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/17351.html" target="_blank">买龟</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/15914.html" target="_blank">母兔 平时非常活泼健康 但从五个月起不定期拔毛叼草做窝呈假孕状态 比较频繁 是否需要采取治疗措施 是否有损健康 家养宠物不外出 家中也无异性动物</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/15505.html" target="_blank">5岁荷兰猪牙齿问题（牙根溶解）</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/15129.html" target="_blank">兔子的尿血中有血迹</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/14897.html" target="_blank">陆龟眼睛看似肿胀，可以帮忙看下吗？</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/14100.html" target="_blank">鱼缸里为什么要种水草？</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/14083.html" target="_blank">红龙鱼为什么那么名贵？</a></li>
                        <li class="last">
                            <em></em>
                            <a href="http://www.boqii.com/post/14082.html" target="_blank">怎样的蟒蛇不要养？</a></li>
                    </ul>
                </div>
            </div>
            <!-- 小宠,水族,爬虫结束 -->
            <!-- 小宠和水族开始 -->
            <div class="dog mt30">
                <div class="dog_tit plant_tit">
                    <em></em>
                    <h2>植物百科</h2>
                    <div class="dog_tit_r">
                        <a href="http://www.boqii.com/baike/cultivated/" target="_blank">植物栽培</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="http://www.boqii.com/baike/disease/" target="_blank">植物疾病</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="http://www.boqii.com/baike/propagators/" target="_blank">植物繁殖</a></div>
                    <!-- <a href="http://www.boqii.com/pet-all/" target="_blank">更多 »</a></div> --></div>
                <div class="dog_cont">
                    <div class="pet_c_l left mt20">
                        <div class="pet_c_l_h bd">
                            <dl class="dog_c_l left">
                                <dt>
                                    <a href="http://www.boqii.com/article/22380.html" target="_blank">
                                        <img src="{{$commonAssetUrl}}/petcms/img/66a07-5391.jpg" alt="雏菊的传说及花语介绍" />
                                        <span>雏菊的传说及花语介绍</span></a>
                                </dt>
                                <dd>雏菊是菊科的一种，由于雏菊被视为丛生的杂草，在春季开花，但是却深得意大利人的喜爱，并且推举为意大利的国花，所以现在非常有...[
                                    <a href="http://www.boqii.com/article/22380.html" target="_blank">详细</a>]</dd></dl>
                            <dl class="dog_c_l left">
                                <dt>
                                    <a href="http://www.boqii.com/article/22379.html" target="_blank">
                                        <img src="{{$commonAssetUrl}}/petcms/img/48afe-5647.jpg" alt="紫色风信子的传说及花语介绍" />
                                        <span>紫色风信子的传说及花语介绍</span></a>
                                </dt>
                                <dd>风信子是百合科早春开花的球根花卉之一，现在也有着“西洋水仙”的称呼，由于风信子的色彩丰富，所以深受人们的喜爱。小编就为你...[
                                    <a href="http://www.boqii.com/article/22379.html" target="_blank">详细</a>]</dd></dl>
                            <dl class="dog_c_l left">
                                <dt>
                                    <a href="http://www.boqii.com/article/22377.html" target="_blank">
                                        <img src="{{$commonAssetUrl}}/petcms/img/09bf1-8997.jpg" alt="圣诞花的传说及花语" />
                                        <span>圣诞花的传说及花语</span></a>
                                </dt>
                                <dd>圣诞花最令人印象深刻的就是其大红色了，给人带来非常喜庆的感觉。由于圣诞花是圣诞前后开花，所以人们亲切的称它为圣诞花。那么...[
                                    <a href="http://www.boqii.com/article/22377.html" target="_blank">详细</a>]</dd></dl>
                        </div>
                        <div class="dog_prev"></div>
                        <div class="dog_next"></div>
                    </div>
                    <div class="dog_c_c left">
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/35494.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/35494.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/bc52f-7628.jpg" alt="水仙花有毒吗？水仙花怎么养？" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/35494.html" target="_blank">水仙花有毒吗？水仙花怎么养？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/35487.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/35487.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/24223-8095.jpg" alt="金钻怎么养？金钻的养殖方法" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/35487.html" target="_blank">金钻怎么养？金钻的养殖方法</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/35481.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/35481.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/28c61-1523.jpg" alt="长寿花有毒吗？长寿花介绍" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/35481.html" target="_blank">长寿花有毒吗？长寿花介绍</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/35476.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/35476.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/c336d-5037.jpg" alt="凤梨花怎么养？凤梨花养殖方法" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/35476.html" target="_blank">凤梨花怎么养？凤梨花养殖方法</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/35461.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/35461.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/f3db9-5022.jpg" alt="六月雪怎么养？六月雪养殖方法" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/35461.html" target="_blank">六月雪怎么养？六月雪养殖方法</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/35457.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/35457.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/ccf6c-3549.jpg" alt="栀子花怎么养？栀子花的养殖方法" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/35457.html" target="_blank">栀子花怎么养？栀子花的养殖方法</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/35450.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/35450.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/43da9-6683.jpg" alt="绿萝有毒吗？绿萝怎么养才能更旺盛？" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/35450.html" target="_blank">绿萝有毒吗？绿萝怎么养才能更旺盛？</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.boqii.com/article/35444.html" target="_blank" class="opa"></a>
                                <a href="http://www.boqii.com/article/35444.html" target="_blank">
                                    <img src="{{$commonAssetUrl}}/petcms/img/e638a-4232.jpg" alt="碰碰香怎样爆盆？碰碰香怎么养好看？" /></a>
                            </dt>
                            <dd>
                                <a href="http://www.boqii.com/article/35444.html" target="_blank">碰碰香怎样爆盆？碰碰香怎么养好看？</a></dd>
                        </dl>
                    </div>
                    <ul class="dog_c_r mt20 right dog_c_r_xy">
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/11487.html" target="_blank">君子兰不开花</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/11193.html" target="_blank">生石花徒长了怎么办？</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/11162.html" target="_blank">一颗生石花能结种子吗</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/11133.html" target="_blank">生石花可以浇水了吗？</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/11130.html" target="_blank">不知何物</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/11109.html" target="_blank">生石花怎么养？</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/10985.html" target="_blank">风信子</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/10512.html" target="_blank">红豆沙</a></li>
                        <li>
                            <em></em>
                            <a href="http://www.boqii.com/post/10316.html" target="_blank">植物</a></li>
                        <li class="last">
                            <em></em>
                            <a href="http://www.boqii.com/post/9749.html" target="_blank">求品种？</a></li>
                    </ul>
                </div>
            </div>
            <!--小宠和水族结束-->
            <!--专题开始-->
            <!--<div class="hot_pet_tit subject_pet_tit mt30"><h2>百科专题</h2><a href="http://www.boqii.com/zhuanti/" target="_blank">更多 »</a></div>-->
            <!--<div class="subject">-->
            <!--<div class="subject_body">-->
            <!---->
            <!--<a href="http://www.boqii.com/zhuanti/1949.html" target="_blank"><img src="{{$commonAssetUrl}}/petcms/img/74f62-6267.jpg" alt="3月养花，当看“世界花后”郁金香" title="3月养花，当看“世界花后”郁金香"  /></a>-->
            <!---->
            <!--<a href="http://www.boqii.com/zhuanti/1953.html" target="_blank"><img src="{{$commonAssetUrl}}/petcms/img/4439e-2344.jpg" alt="春季花草养护全攻略" title="春季花草养护全攻略"  /></a>-->
            <!---->
            <!--<a href="http://www.boqii.com/zhuanti/1948.html" target="_blank"><img src="{{$commonAssetUrl}}/petcms/img/03841-3184.jpg" alt="独忆相思苦,春梦了无痕——宠物情事大公开" title="独忆相思苦,春梦了无痕——宠物情事大公开"  /></a>-->
            <!---->
            <!--<a href="http://www.boqii.com/zhuanti/1945.html" target="_blank"><img src="{{$commonAssetUrl}}/petcms/img/06ce2-1716.jpg" alt="春暖花开，选购多肉正当时" title="春暖花开，选购多肉正当时"  /></a>-->
            <!---->
            <!--<a href="http://www.boqii.com/zhuanti/1954.html" target="_blank"><img src="{{$commonAssetUrl}}/petcms/img/7dc46-9936.jpg" alt="干货分享——养犬新手必看知识合集" title="干货分享——养犬新手必看知识合集"  /></a>-->
            <!---->
            <!--<a href="http://www.boqii.com/zhuanti/1952.html" target="_blank"><img src="{{$commonAssetUrl}}/petcms/img/a78b5-4224.jpg" alt="春季宠物毛球大作战" title="春季宠物毛球大作战" class="last" /></a>-->
            <!---->
            <!--</div>-->
            <!--</div>-->
            <!--专题结束-->
            <div class="message">用关爱与呵护谱写的养宠百科，全面的养宠知识满足所需，专业的宠物医生在线解答，为爱宠健康生活保驾护航。波奇——全面关爱宠物生活！</div></div>
    </div>
    <!--主题内容结束-->
@endsection

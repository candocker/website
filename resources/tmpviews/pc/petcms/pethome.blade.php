@extends('layouts.petcms')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('jscss')@include('modules.petcms._jscss', ['view' => $datas['view']])@endsection
@section('content')
<!--主体内容开始-->
<div id="content">
    <div class="content_top">
        <div class="content_top_auto">
            <!--面包屑开始-->
            <div class="crumbs">
                <a href="http://www.boqii.com/baike/">首页</a>>狗狗百科</div>
            <!--面包屑结束-->
            <!--banner开始-->
            <div id="p_banner" class="mt30 left">
                <div class="p_banner_content bd">
                    <div class="p_banner_list">
                        <a href="http://www.boqii.com/zhuanti/47.html" target="_blank" ids="ID_101" var="101">
                            <img src="{{$commonAssetUrl}}/petcms/img/b3a85-3265.jpg" alt="爱的引导：导盲犬乘地铁，遇见请别害怕我" />
                            <dl>
                                <dt>爱的引导：导盲犬乘地铁，遇见请别害怕我</dt>
                                <dd>5月1日，《北京市轨道交通运营安全条例》将正式实施，该条例明确规定，视力残障者可携带导盲犬进站乘车，这意味着，一直以来导盲...</dd></dl>
                        </a>
                    </div>
                </div>
            </div>
            <!--banner结束-->
            <!--右侧分类开始-->
            <div class="hot right mt30">
                <div class="hot_tit">
                    <h2>宠物专题</h2></div>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/zhuanti/28.html">狗狗聪明度排行榜TOP30全解析</a></dt>
                    <dd>相信养狗的主人一定都会非常关心自家的狗宝贝有没有进入这个排行榜吧，其实这个狗狗聪明度排行榜也是根据狗狗的训练服从性、表现...</dd></dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/zhuanti/27.html">冬季到了，巧主人为狗狗量体裁衣吧</a></dt>
                    <dd>有一种冷，叫主人觉得你很冷。 冬季到了，越来越多的主人为狗狗穿上了冬衣，如果说夏天穿衣服是为了造型好看的话，那么冬天主人...</dd></dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/zhuanti/26.html">我很二，但是我很温柔——哈士奇养成记</a></dt>
                    <dd>哈士奇又叫西伯利亚雪撬犬，是比较常见的中型犬，随着“表情帝”哈士奇在网络上的爆红，越来越多的人希望可以饲养这样一种可爱的...</dd></dl>
                <dl>
                    <dt>
                        <a target="_blank" href="http://www.boqii.com/zhuanti/1.html">贵宾犬养护不得不知道的事</a></dt>
                    <dd>贵宾犬是目前国内最受欢迎的犬种之一，它们以其聪明伶俐、易于造型、掉毛少的特点得到众多家庭的喜爱……</dd></dl>
            </div>
            <!--右侧分类结束--></div>
    </div>
    <div class="content_auto">
        <!--热门宠物开始-->
        <div class="hot_pet mt20">
            <div class="hot_pet_tit">
                <h2>热门宠物</h2>
                <a href="http://www.boqii.com/pet-all/dog/" target="_blank">更多 »</a></div>
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
                        <a href="http://www.boqii.com/entry/detail/678.html" target="_blank">
                            <img src="{{$commonAssetUrl}}/petcms/img/56a05-6030.jpg" alt="罗威纳犬" /></a>
                    </dt>
                    <dd>
                        <a href="http://www.boqii.com/entry/detail/678.html" target="_blank">罗威纳犬</a></dd>
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
                        <a href="http://www.boqii.com/entry/detail/347.html" target="_blank">
                            <img src="{{$commonAssetUrl}}/petcms/m/img/29653-3424.jpg" alt="博美犬" /></a>
                    </dt>
                    <dd>
                        <a href="http://www.boqii.com/entry/detail/347.html" target="_blank">博美犬</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a href="http://www.boqii.com/entry/detail/609.html" target="_blank">
                            <img src="{{$commonAssetUrl}}/petcms/img/37cf0-3659.jpg" alt="阿拉斯加雪橇犬" /></a>
                    </dt>
                    <dd>
                        <a href="http://www.boqii.com/entry/detail/609.html" target="_blank">阿拉斯加雪橇犬</a></dd>
                </dl>
                <dl class="dl6">
                    <dt>
                        <a href="http://www.boqii.com/entry/detail/368.html" target="_blank">
                            <img src="{{$commonAssetUrl}}/petcms/m/img/fb5c3-3631.jpg" alt="比熊犬" /></a>
                    </dt>
                    <dd>
                        <a href="http://www.boqii.com/entry/detail/368.html" target="_blank">比熊犬</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a href="http://www.boqii.com/entry/detail/677.html" target="_blank">
                            <img src="{{$commonAssetUrl}}/petcms/img/9a3f3-8992.jpg" alt="拉布拉多猎犬" /></a>
                    </dt>
                    <dd>
                        <a href="http://www.boqii.com/entry/detail/677.html" target="_blank">拉布拉多猎犬</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a href="http://www.boqii.com/entry/detail/377.html" target="_blank">
                            <img src="{{$commonAssetUrl}}/petcms/img/ac9c3-2450.jpg" alt="法老王猎犬" /></a>
                    </dt>
                    <dd>
                        <a href="http://www.boqii.com/entry/detail/377.html" target="_blank">法老王猎犬</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a href="http://www.boqii.com/entry/detail/340.html" target="_blank">
                            <img src="{{$commonAssetUrl}}/petcms/m/img/d154a-5252.jpg" alt="贵宾" /></a>
                    </dt>
                    <dd>
                        <a href="http://www.boqii.com/entry/detail/340.html" target="_blank">贵宾</a></dd>
                </dl>
                <dl>
                    <dt>
                        <a href="http://www.boqii.com/entry/detail/613.html" target="_blank">
                            <img src="{{$commonAssetUrl}}/petcms/img/78af0-5643.jpg" alt="柴犬" /></a>
                    </dt>
                    <dd>
                        <a href="http://www.boqii.com/entry/detail/613.html" target="_blank">柴犬</a></dd>
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
                        <a href="http://www.boqii.com/entry/detail/425.html" target="_blank">
                            <img src="{{$commonAssetUrl}}/petcms/img/ea15e-8430.jpg" alt="泰迪犬" /></a>
                    </dt>
                    <dd>
                        <a href="http://www.boqii.com/entry/detail/425.html" target="_blank">泰迪犬</a></dd>
                </dl>
            </div>
        </div>
        <!--热门宠物结束-->
        <div class="baike_fl mt30">
            <div class="baike_fl_l left">
                <div style="padding-bottom:30px;">
                    <div class="fl_tit">
                        <h2>狗狗饲养</h2>
                        <a href="http://www.boqii.com/baike/dogfd/">更多 »</a></div>
                    <div class="fl_content">
                        <div class="fl">
                            <div class="fl_body art_body">
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/185398.html">银狐犬为什么很少人养</a></span>
                                    <div class="reply right">2020-10-13</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/185397.html">狗一岁相当于人多少岁？</a></span>
                                    <div class="reply right">2020-10-13</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/185396.html">小狗什么时候断奶？小狗断奶后应该吃什么？</a></span>
                                    <div class="reply right">2020-10-13</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/41491.html">狗为什么喜欢吃屎？狗吃屎应该怎么办？</a></span>
                                    <div class="reply right">2020-07-28</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/41490.html">怎么让狗狗去厕所？</a></span>
                                    <div class="reply right">2020-07-28</div></div>
                            </div>
                            <div class="fl_body art_body">
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/41489.html">什么小宠物好养又干净呢？</a></span>
                                    <div class="reply right">2020-07-28</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/41488.html">狗体内驱虫多久一次？驱虫时应该注意什么？</a></span>
                                    <div class="reply right">2020-07-28</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/41487.html">藏獒的力量有多大？藏獒能打过老虎吗？</a></span>
                                    <div class="reply right">2020-07-28</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/41486.html">狗狗丢了一般会躲哪里？我们去哪里找？</a></span>
                                    <div class="reply right">2020-07-28</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/41485.html">狗狗的鼻子发干是什么原因呢？</a></span>
                                    <div class="reply right">2020-07-28</div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding-bottom:30px;">
                    <div class="fl_tit">
                        <h2>狗狗医疗</h2>
                        <a href="http://www.boqii.com/baike/dogmd/">更多 »</a></div>
                    <div class="fl_content">
                        <div class="fl">
                            <div class="fl_body art_body">
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/348981.html">狗狗得细小能自愈吗之详细解答</a></span>
                                    <div class="reply right">2021-02-19</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/30230.html">狗狗临产前征兆 狗狗临产前征兆有哪些？</a></span>
                                    <div class="reply right">2020-06-30</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/36999.html">狗拉血是怎么回事</a></span>
                                    <div class="reply right">2020-05-04</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/36984.html">狗狗不打疫苗可以吗</a></span>
                                    <div class="reply right">2020-04-30</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/36905.html">狗狗感冒和犬瘟的区别是什么？</a></span>
                                    <div class="reply right">2020-04-22</div></div>
                            </div>
                            <div class="fl_body art_body">
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/36895.html">狗尿血是怎么回事</a></span>
                                    <div class="reply right">2020-04-21</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/36834.html">狗狗得了狂犬病的早期症状是什么？</a></span>
                                    <div class="reply right">2020-04-16</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/36797.html">打狂犬疫苗注意事项有哪些？看完你就知道了</a></span>
                                    <div class="reply right">2020-04-13</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/36782.html">狗狗打疫苗需要多少钱？必须要打吗？</a></span>
                                    <div class="reply right">2020-04-13</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/36699.html">给狗狗打狂犬疫苗有什么样的副作用呢？</a></span>
                                    <div class="reply right">2020-04-01</div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding-bottom:30px;">
                    <div class="fl_tit">
                        <h2>狗狗训练</h2>
                        <a href="http://www.boqii.com/baike/dogtn/">更多 »</a></div>
                    <div class="fl_content">
                        <div class="fl">
                            <div class="fl_body art_body">
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/348999.html">怎么样训练小鹿犬打猎呢？</a></span>
                                    <div class="reply right">2021-02-22</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/348996.html">如何训练拉布拉多嗅觉，让其根据味道找东西？</a></span>
                                    <div class="reply right">2021-02-22</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/348995.html">农村怎么训练狗扑咬？这样的方式或许更加管用</a></span>
                                    <div class="reply right">2021-02-22</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/348994.html">牧羊犬怎么训练睡觉？为什么要让其有足够的睡眠？</a></span>
                                    <div class="reply right">2021-02-22</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/348992.html">两年的金毛怎么训练？这几个方法很不错</a></span>
                                    <div class="reply right">2021-02-22</div></div>
                            </div>
                            <div class="fl_body art_body">
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/348991.html">两年的金毛怎么训练？这几个方法很不错</a></span>
                                    <div class="reply right">2021-02-20</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/348990.html">两个月小狗训练方法介绍，这样训练狗很乖</a></span>
                                    <div class="reply right">2021-02-20</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/348989.html">怎么对两个月的灵提犬训练？</a></span>
                                    <div class="reply right">2021-02-20</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/348988.html">两个小狗可以训练吗？要怎么训练？</a></span>
                                    <div class="reply right">2021-02-20</div></div>
                                <div class="ask_list">
                                    <em></em>
                                    <span>
                                        <a target="_blank" href="http://www.boqii.com/article/348986.html">柯基可以训练它站立起来吗？</a></span>
                                    <div class="reply right">2021-02-19</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--专家问答开始-->
            <div class="baike_fl_r right">
                <div class="baike_fl_body">
                    <div class="expert_r_t">
                        <div class="yy_zj">
                            <a href="http://www.boqii.com/expert/" target="_blank">已有27位专家</a></div>专家问答</div>
                    <ul class="dog_c_r mt20">
                        <li>
                            <em></em>
                            <a target="_blank" href="http://www.boqii.com/post/19328.html">狗狗的疫苗问题</a></li>
                        <li>
                            <em></em>
                            <a target="_blank" href="http://www.boqii.com/post/19208.html">关于驱虫问题</a></li>
                        <li>
                            <em></em>
                            <a target="_blank" href="http://www.boqii.com/post/19190.html">点蚊香对狗狗有影响吗？</a></li>
                        <li>
                            <em></em>
                            <a target="_blank" href="http://www.boqii.com/post/18787.html">舌下囊肿</a></li>
                        <li>
                            <em></em>
                            <a target="_blank" href="http://www.boqii.com/post/18778.html">狗舌下囊肿</a></li>
                        <li>
                            <em></em>
                            <a target="_blank" href="http://www.boqii.com/post/18746.html">宝宝不吃饭怎么办</a></li>
                        <li>
                            <em></em>
                            <a target="_blank" href="http://www.boqii.com/post/18685.html">狗狗总睡觉</a></li>
                        <li>
                            <em></em>
                            <a target="_blank" href="http://www.boqii.com/post/18316.html">求助，两个月巴哥幼犬是不是病了</a></li>
                        <li>
                            <em></em>
                            <a target="_blank" href="http://www.boqii.com/post/18291.html">狗狗得了细小没有钱去医院治病不忍心让它死有没有什么办法</a></li>
                        <li>
                            <em></em>
                            <a target="_blank" href="http://www.boqii.com/post/18256.html">狗狗不吃饭</a></li>
                    </ul>
                </div>
                <div class="art_ask2">
                    <a target="_blank" href="http://www.boqii.com/baike/discuss-0/">问答专区</a>
                    <a href="http://www.boqii.com/baike/Thread/post" class="my_ask">我要提问</a></div>
            </div>
            <!--专家问答结束--></div>
        <div class="message">用关爱与呵护谱写的养宠百科，全面的养宠知识满足所需，专业的宠物医生在线解答，为爱宠健康生活保驾护航。波奇——全面关爱宠物生活！</div></div>
</div>
<!--主体内容结束-->
@endsection

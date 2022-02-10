@extends('layouts.petcms')
@section('dynamicMeta')@include('modules._meta', $datas)@endsection
@section('content')
<!--主题内容开始-->
<div id="content">
    <div class="content_auto">
        <!--面包屑开始-->
        <div class="crumbs mt20">
            <a href="http://www.boqii.com/baike/" target="_blank">首页</a>>
            <a href="http://www.boqii.com/pet-all/">宠物大全</a>>狗狗分类搜索</div>
        <!--面包屑结束-->
        <div class="article mt20">
            <div class="sear_cont">
                <div class="sear_tab left">
                    <a href="http://www.boqii.com/pet-all/dog/" class="dog current">
                        <em></em>
                        <h1>狗狗</h1></a>
                    <a href="http://www.boqii.com/pet-all/cat/" class="cat ">
                        <em></em>
                        <h1>猫咪</h1></a>
                    <a href="http://www.boqii.com/pet-all/smallpet/" class="small ">
                        <em></em>
                        <h1>小宠</h1></a>
                    <a href="http://www.boqii.com/pet-all/aquarium/" class="water ">
                        <em></em>
                        <h1>水族</h1></a>
                    <a href="http://www.boqii.com/pet-all/reptile/" class="reptile ">
                        <em></em>
                        <h1>爬虫</h1></a>
                </div>
                <div class="sear_s right">
                    <form action="http://www.boqii.com/pet-all/dog/1/" method="get">
                        <span>宠物搜索：</span>
                        <input type="hidden" name="data[func]" value="0" />
                        <input type="hidden" name="data[hair]" value="0" />
                        <input type="hidden" name="data[dropp]" value="0" />
                        <input type="hidden" name="data[friend]" value="0" />
                        <input type="hidden" name="data[adapt]" value="0" />
                        <input type="text" class="pet_name" name="data[name]" value='宠物名称' />
                        <input type="submit" class="pet_btn" value="" /></form>
                </div>
            </div>
            <div class="sear_body">
                <dl>
                    <dt>体型：</dt>
                    <dd>
                        <a href="http://www.boqii.com/pet-all/dog/">全部</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/" class="current">小型犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/2/">中型犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/3/">大型犬</a></dd>
                </dl>
                <dl>
                    <dt>功能：</dt>
                    <dd>
                        <a href="http://www.boqii.com/pet-all/dog/1/" class="current" rel="nofollow">全部</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=1&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">伴侣犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=2&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">牧羊犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=3&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">梗类犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=4&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">守卫犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=5&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">枪猎犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=6&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">工作犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=7&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">看家犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=8&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">雪橇犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=9&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">玩赏犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=10&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">搜查犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=11&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">导盲犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=12&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">爆破犬</a></dd>
                </dl>
                <dl>
                    <dt>毛长：</dt>
                    <dd>
                        <a href="http://www.boqii.com/pet-all/dog/1/" class="current" rel="nofollow">全部</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=0&data[hair]=1&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">无毛犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=0&data[hair]=2&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">短毛犬</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=0&data[hair]=3&data[dropp]=0&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">长毛犬</a></dd>
                </dl>
                <dl>
                    <dt>掉毛程度：</dt>
                    <dd>
                        <a href="http://www.boqii.com/pet-all/dog/1/" class="current" rel="nofollow">全部</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=0&data[hair]=0&data[dropp]=3&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">不掉毛</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=0&data[hair]=0&data[dropp]=2&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">掉毛少</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=0&data[hair]=0&data[dropp]=1&data[friend]=0&data[adapt]=0&data[name]=" rel="nofollow">掉毛多</a></dd>
                </dl>
                <dl>
                    <dt>友善程度：</dt>
                    <dd>
                        <a href="http://www.boqii.com/pet-all/dog/1/" class="current" rel="nofollow">全部</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=0&data[hair]=0&data[dropp]=0&data[friend]=3&data[adapt]=0&data[name]=" rel="nofollow">非常友善</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=0&data[hair]=0&data[dropp]=0&data[friend]=2&data[adapt]=0&data[name]=" rel="nofollow">一般友善</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=0&data[hair]=0&data[dropp]=0&data[friend]=1&data[adapt]=0&data[name]=" rel="nofollow">不友善</a></dd>
                </dl>
                <dl class="bornone">
                    <dt>饲养难度：</dt>
                    <dd>
                        <a href="http://www.boqii.com/pet-all/dog/1/" class="current" rel="nofollow">全部</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=0&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=3&data[name]=" rel="nofollow">容易饲养</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=0&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=2&data[name]=" rel="nofollow">普通饲养</a>
                        <a href="http://www.boqii.com/pet-all/dog/1/?&data[func]=0&data[hair]=0&data[dropp]=0&data[friend]=0&data[adapt]=1&data[name]=" rel="nofollow">难饲养</a></dd>
                </dl>
            </div>
            <!--宠物开始-->
            <div class="hot_pet">
                <div class="sear_tit">
                    <div class="sear_tit_l left" style="margin-top:30px;">找到
                        <span>53</span>条狗狗宠物</div>
                    <div id='page' class='page right'>
                        <a href='http://www.boqii.com/pet-all/dog/1/'>上一页</a>
                        <a class='current' href='#'>1</a>
                        <a href='http://www.boqii.com/pet-all/dog/1/?p=2'>2</a>
                        <a href='http://www.boqii.com/pet-all/dog/1/?p=2'>下一页</a></div>
                </div>
                <div class="hot_pet_cont">
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/347.html">
                                <img alt="博美犬" src="{{$commonAssetUrl}}/petcms/m/img/29653-3424.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/347.html">博美犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/368.html">
                                <img alt="比熊犬" src="{{$commonAssetUrl}}/petcms/m/img/fb5c3-3631.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/368.html">比熊犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/340.html">
                                <img alt="贵宾" src="{{$commonAssetUrl}}/petcms/m/img/d154a-5252.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/340.html">贵宾</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/634.html">
                                <img alt="巴哥犬" src="{{$commonAssetUrl}}/petcms/m/img/a9c51-9024.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/634.html">巴哥犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/383.html">
                                <img alt="法国斗牛犬" src="{{$commonAssetUrl}}/petcms/m/img/edad7-1404.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/383.html">法国斗牛犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/552.html">
                                <img alt="迷你牛头梗" src="{{$commonAssetUrl}}/petcms/m/img/b9dcb-1924.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/552.html">迷你牛头梗</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/630.html">
                                <img alt="京巴犬" src="{{$commonAssetUrl}}/petcms/m/img/fa205-3022.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/630.html">京巴犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/455.html">
                                <img alt="吉娃娃" src="{{$commonAssetUrl}}/petcms/m/img/ffccd-1263.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/455.html">吉娃娃</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/460.html">
                                <img alt="杰克罗素梗" src="{{$commonAssetUrl}}/petcms/m/img/71843-1500.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/460.html">杰克罗素梗</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/406.html">
                                <img alt="中国冠毛犬" src="{{$commonAssetUrl}}/petcms/m/img/a301d-2820.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/406.html">中国冠毛犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/467.html">
                                <img alt="西施犬" src="{{$commonAssetUrl}}/petcms/m/img/1ca11-2654.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/467.html">西施犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/681.html">
                                <img alt="迷你雪纳瑞" src="{{$commonAssetUrl}}/petcms/m/img/f2b22-6708.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/681.html">迷你雪纳瑞</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/450.html">
                                <img alt="蝴蝶犬" src="{{$commonAssetUrl}}/petcms/m/img/0f7b3-8646.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/450.html">蝴蝶犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/626.html">
                                <img alt="比格犬" src="{{$commonAssetUrl}}/petcms/m/img/fe40a-3294.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/626.html">比格犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/337.html">
                                <img alt="约克夏" src="{{$commonAssetUrl}}/petcms/m/img/908b7-3695.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/337.html">约克夏</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/443.html">
                                <img alt="迷你杜宾犬" src="{{$commonAssetUrl}}/petcms/img/bfed9-6239.png" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/443.html">迷你杜宾犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/486.html">
                                <img alt="日本尖嘴犬" src="{{$commonAssetUrl}}/petcms/img/8190b-2841.png" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/486.html">日本尖嘴犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/683.html">
                                <img alt="雪纳瑞" src="{{$commonAssetUrl}}/petcms/img/ba107-3091.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/683.html">雪纳瑞</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/548.html">
                                <img alt="查理士王小猎犬" src="{{$commonAssetUrl}}/petcms/img/11a87-9469.png" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/548.html">查理士王小猎犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/502.html">
                                <img alt="拉萨犬" src="{{$commonAssetUrl}}/petcms/img/6285e-3531.png" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/502.html">拉萨犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/679.html">
                                <img alt="美国可卡犬" src="{{$commonAssetUrl}}/petcms/img/3ac4f-8967.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/679.html">美国可卡犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/483.html">
                                <img alt="马尔济斯犬" src="{{$commonAssetUrl}}/petcms/img/2263b-2406.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/483.html">马尔济斯犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/632.html">
                                <img alt="巴吉度猎犬" src="{{$commonAssetUrl}}/petcms/img/8102c-1651.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/632.html">巴吉度猎犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/534.html">
                                <img alt="曼彻斯特梗" src="{{$commonAssetUrl}}/petcms/img/26173-8264.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/534.html">曼彻斯特梗</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/553.html">
                                <img alt="苏格兰梗" src="{{$commonAssetUrl}}/petcms/img/2bc49-8439.png" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/553.html">苏格兰梗</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/578.html">
                                <img alt="西藏猎犬" src="{{$commonAssetUrl}}/petcms/img/13955-3542.png" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/578.html">西藏猎犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/420.html">
                                <img alt="荷兰毛狮犬" src="{{$commonAssetUrl}}/petcms/img/b8d38-6658.png" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/420.html">荷兰毛狮犬</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/532.html">
                                <img alt="罗福梗" src="{{$commonAssetUrl}}/petcms/img/e3445-5252.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/532.html">罗福梗</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/507.html">
                                <img alt="丝毛梗" src="{{$commonAssetUrl}}/petcms/img/5da5c-1142.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/507.html">丝毛梗</a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/408.html">
                                <img alt="哈威那犬" src="{{$commonAssetUrl}}/petcms/img/91376-9095.jpg" /></a>
                        </dt>
                        <dd>
                            <a target="_blank" href="http://www.boqii.com/entry/detail/408.html">哈威那犬</a></dd>
                    </dl>
                </div>
                <div id='page' class='page right'>
                    <a href='http://www.boqii.com/pet-all/dog/1/'>上一页</a>
                    <a class='current' href='#'>1</a>
                    <a href='http://www.boqii.com/pet-all/dog/1/?p=2'>2</a>
                    <a href='http://www.boqii.com/pet-all/dog/1/?p=2'>下一页</a></div>
            </div>
            <!--热门宠物结束--></div>
        <!--文章详情结束-->
        <div class="message">用关爱与呵护谱写的养宠百科，全面的养宠知识满足所需，专业的宠物医生在线解答，为爱宠健康生活保驾护航。波奇——全面关爱宠物生活！</div></div>
</div>
<!--主题内容结束-->
<script type='text/javascript'>object.load('baikenew/common,login,baikenew/all');</script>
@endsection

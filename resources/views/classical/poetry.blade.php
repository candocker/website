@extends('layouts.main-classical')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('classical.modules._jscss', ['view' => 'home'])@endsection
@section('content')
<div class="base_index">
    {{--@include('classical.modules._header', ['data' => ''])--}}
    @include('classical.modules._header-top', ['data' => ''])
    <h1>{{$datas['name']}}</h1>
    
<table width="92%" border="1" align="center" cellspacing="0" class="indextable">
      <caption>国风</caption>
      <tbody><tr>
        <td class="index_center_td" rowspan="3">周南</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing01.html">01 关雎</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing02.html">02 葛覃</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing03.html">03 卷耳</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing04.html">04 樛木</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing05.html">05 螽斯</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing06.html">06 桃夭</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing07.html">07 兔罝</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing08.html">08 芣莒</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing09.html">09 汉广</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing10.html">10 汝坟</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing11.html">11 麟之趾</a></td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
      </tr>
      <tr>
        <td class="index_center_td" rowspan="3">召南</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing12.html">12 鹊巢</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing13.html">13 采蘩</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing14.html">14 草虫</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing15.html">15 采蘋</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing16.html">16 甘棠</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing17.html">17 行露</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing18.html">18 羔羊</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing19.html">19 殷其雷</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing20.html">20 摽有梅</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing21.html">21 小星</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing22.html">22 江有汜</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing23.html">23 野有死麕</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing24.html">24 何彼襛矣</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing25.html">25 驺虞</a></td>
        <td class="index_left_td">　</td>
      </tr>
      <tr>
        <td class="index_center_td" rowspan="4">邶风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing26.html">26 柏舟</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing27.html">27 绿衣</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing28.html">28 燕燕</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing29.html">29 日月</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing30.html">30 终风</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing31.html">31 击鼓</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing32.html">32 凯风</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing33.html">33 雄雉</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing34.html">34 匏有苦叶</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing35.html">35 谷风</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing36.html">36 式微</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing37.html">37 旄丘</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing38.html">38 简兮</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing39.html">39 泉水</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing40.html">40 北门</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing41.html">41 北风</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing42.html">42 静女</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing43.html">43 新台</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing44.html">44 二子乘舟</a></td>
        <td class="index_left_td">　</td>
      </tr>
      <tr>
        <td class="index_center_td" rowspan="2">鄘风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing45.html">45 柏舟</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing46.html">46 墙有茨</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing47.html">47 君子偕老</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing48.html">48 桑中</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing49.html">49 鹑之奔奔</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing50.html">50 定之方中</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing51.html">51 蝃蝀</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing52.html">52 相鼠</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing53.html">53 干旄</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing54.html">54 载驰</a></td>
      </tr>
      <tr>
        <td class="index_center_td" rowspan="2">卫风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing55.html">55 淇奥</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing56.html">56 考槃</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing57.html">57 硕人</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing58.html">58 氓</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing59.html">59 竹竿</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing60.html">60 芄兰</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing61.html">61 河广</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing62.html">62 伯兮</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing63.html">63 有狐</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing64.html">64 木瓜</a></td>
      </tr>
      <tr>
        <td class="index_center_td" rowspan="2">王风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing65.html">65 黍离</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing66.html">66 君子于役</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing67.html">67 君子阳阳</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing68.html">68 扬之水</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing69.html">69 中谷有蓷</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing70.html">70 兔爰</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing71.html">71 葛藟</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing72.html">72 采葛</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing73.html">73 大车</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing74.html">74 丘中有麻</a></td>
      </tr>
      <tr>
        <td class="index_center_td" rowspan="5">郑风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing75.html">75 缁衣</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing76.html">76 将仲子</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing77.html">77 叔于田</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing78.html">78 大叔于田</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing79.html">79 清人</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing80.html">80 羔裘</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing81.html">81 遵大路</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing82.html">82 女曰鸡鸣</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing83.html">83 有女同车</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing84.html">84 山有扶苏</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing85.html">85 萚兮</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing86.html">86 狡童</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing87.html">87 褰裳</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing88.html">88 丰</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing89.html">89 东门之墠</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing90.html">90 风雨</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing91.html">91 子衿</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing92.html">92 扬之水</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing93.html">93 出其东门</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing94.html">94 野有蔓草</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing95.html">95 溱洧</a></td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
      </tr>
      <tr>
        <td class="index_center_td" rowspan="3">齐风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing96.html">96 鸡鸣</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing97.html">97 还</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing98.html">98 著</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing99.html">99 东方之日</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing100.html">100 东方未明</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing101.html">101 南山</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing102.html">102 甫田</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing103.html">103 卢令</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing104.html">104 敝笱</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing105.html">105 载驱</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing106.html">106 猗嗟</a></td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
      </tr>
      <tr>
        <td class="index_center_td" rowspan="2">魏风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing107.html">107 葛屦</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing108.html">108 汾沮洳</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing109.html">109 园有桃</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing110.html">110 陟岵</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing111.html">111 十亩之间</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing112.html">112 伐檀</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing113.html">113 硕鼠</a></td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
      </tr>
      <tr>
        <td class="index_center_td" rowspan="3">唐风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing114.html">114 蟋蟀</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing115.html">115 山有枢</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing116.html">116 扬之水</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing117.html">117 椒聊</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing118.html">118 绸缪</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing119.html">119 杕杜</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing120.html">120 羔裘</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing121.html">121 鸨羽</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing122.html">122 无衣</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing123.html">123 有杕之杜</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing124.html">124 葛生</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing125.html">125 采苓</a></td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
      </tr>
      <tr>
        <td class="index_center_td" rowspan="2">秦风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing126.html">126 车邻</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing127.html">127 驷驖</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing128.html">128 小戎</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing129.html">129 蒹葭</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing130.html">130 终南</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing131.html">131 黄鸟</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing132.html">132 晨风</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing133.html">133 无衣</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing134.html">134 渭阳</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing135.html">135 权舆</a></td>
      </tr>
      <tr>
        <td class="index_center_td" rowspan="2">陈风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing136.html">136 宛丘</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing137.html">137 东门之枌</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing138.html">138 衡门</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing139.html">139 东门之池</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing140.html">140 东门之杨</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing141.html">141 墓门</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing142.html">142 防有鹊巢</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing143.html">143 月出</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing144.html">144 株林</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing145.html">145 泽陂</a></td>
      </tr>
      <tr>
        <td class="index_center_td">桧风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing146.html">146 羔裘</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing147.html">147 素冠</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing148.html">148 隰有苌楚</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing149.html">149 匪风</a></td>
        <td class="index_left_td">　</td>
      </tr>
      <tr>
        <td class="index_center_td">曹风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing150.html">150 蜉蝣</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing151.html">151 候人</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing152.html">152 鳲鸠</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing153.html">153 下泉</a></td>
        <td class="index_left_td">　</td>
      </tr>
      <tr>
        <td class="index_center_td" rowspan="2">豳风</td>
        <td class="index_left_td"><a href="ShiJing/ShiJing154.html">154 七月</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing155.html">155 鸱鸮</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing156.html">156 东山</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing157.html">157 破斧</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing158.html">158 伐柯</a></td>
      </tr>
      <tr>
        <td class="index_left_td"><a href="ShiJing/ShiJing159.html">159 九罭</a></td>
        <td class="index_left_td"><a href="ShiJing/ShiJing160.html">160 狼跋</a></td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
        <td class="index_left_td">　</td>
      </tr>
    </tbody></table>
</div>
<hr />
@include('classical.modules._footer', ['data' => ''])

@endsection

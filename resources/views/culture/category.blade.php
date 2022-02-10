<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>商品分类大全_图书分类目录_孔夫子旧书网</title>
<meta name="keyword" content="商品分类,商品分类大全,图书分类,图书分类目录">
<meta name="description" content="孔夫子旧书网是国内专业的古旧书交易平台；目前已汇集了全国上万家网上书店与书摊，展示多达9000万种图书书籍，包含大量极具收藏价值的古旧珍本（明清、民国古籍善本、小人书、珍本期刊、名人墨迹、民国珍本、绝版书等）。孔网为广大书友提供二手图书买卖与收藏品交易市场；开二手书店、网上买书、网上卖书、珍品拍卖，首选孔夫子旧书网。">
<link href="{{$commonAssetUrl}}/kongfz/m/css/ed5fa-6372.css?v=8" rel="stylesheet"></head>
<link href="{{$commonAssetUrl}}/kongfz/m/css/f8aa8-2448.css" rel="stylesheet">

<body>
@include('culture.modules._header-js2', ['data' => ''])
@include('culture.modules._top', ['data' => ''])
{{--<div id="container"><div class="load-box">数据请求中...</div></div>--}}
@include('culture.t-html._category', ['datas' => $datas])

@include('modules.common._footer', ['data' => ''])
{{--@include('culture.template._category', ['data' => ''])--}}
<script>var baseInfo = {
        site: {
            "s_kfzimg": "https://www.kfzimg.com/",
            "res2": "https://res2.kongfz.com/",
            "gateway": "http://gateway.kongfz.com/",
            "login": "https://login.kongfz.com/",
            "message": "http://message.kongfz.com/",
            "s_message": "https://message.kongfz.com/",
            "mmessage": "http://mmessage.kongfz.com/",
            "s_mmessage": "https://mmessage.kongfz.com/",
            "m": "https://m.kongfz.com/",
            "t": "https://t.kongfz.com/",
            "davUpload": "http://image-upload.kongfz.com/",
            "s_davUpload": "https://image-upload.kongfz.com/",
            "mpm": "http://m.kongfz.cn/",
            "s_mpm": "https://m.kongfz.cn/",
            "wechat": "https://wechat.kongfz.com/",
            "book": "http://book.kongfz.com/",
            "s_book": "https://book.kongfz.com/",
            "xinyu": "http://xinyu.kongfz.com/",
            "s_xinyu": "https://xinyu.kongfz.com/",
            "shop": "http://shop.kongfz.com/",
            "s_shop": "https://shop.kongfz.com/",
            "mbook": "http://mbook.kongfz.com/",
            "s_mbook": "https://mbook.kongfz.com/",
            "www": "http://www.kongfz.com/",
            "s_www": "https://www.kongfz.com/",
            "item": "http://item.kongfz.com/",
            "s_item": "https://item.kongfz.com/",
            "operation": "http://operation.kongfz.com/",
            "s_operation": "https://operation.kongfz.com/"
        }
    }</script>
<script type="text/javascript" src="{{$commonAssetUrl}}/kongfz/m/js/runtime.4aa80e0b54e9029b63f7.js"></script>
<script type="text/javascript" src="{{$commonAssetUrl}}/kongfz/m/js/zepto.4aa80e0b54e9029b63f7.js"></script>
<script type="text/javascript" src="{{$commonAssetUrl}}/kongfz/m/js/category.js?v=3"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
<title>孔夫子旧书网：图书及艺术收藏品交易拍卖平台</title>
<meta content="图书,书籍,古籍,旧书,旧书店,旧书网站,网上书店,古旧书,二手书,古籍善本,艺术品,收藏品,收藏品交易,图书网购,拍卖,拍卖网站" name="keywords">
<meta content="孔夫子旧书网是国内专业的古旧书交易平台；目前已汇集了全国上万家网上书店与书摊，展示多达9000万种图书书籍，包含大量极具收藏价值的古旧珍本（明清、民国古籍善本、小人书、珍本期刊、名人墨迹、民国珍本、绝版书等）。孔网为广大书友提供二手图书买卖与收藏品交易市场；开二手书店、网上买书、网上卖书、珍品拍卖，首选孔夫子旧书网。" name="description">
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no,email=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover">
@include('culture.modules._header-js', ['data' => ''])
<link href="{{$commonAssetUrl}}/kongfz/m/css/f8aa8-2448.css" rel="stylesheet">
<style>html{font-size:100px;}</style>
<input type="hidden" id="_w_tusk">
<script type="text/javascript" src="chrome-extension://dbjbempljhcmhlfpfacalomonjpalpko/scripts/inspector.js"></script>
</head>

<body id='index_box'>
@include('culture.modules._header-js2', ['data' => ''])
<img src="{{$commonAssetUrl}}/kongfz/m/img/d808a-6347.png" alt="孔夫子旧书网" style="width: 0;height: 0;font-size: 0;display: none;" />
<!-- search_bar -->
<div class="search_bar">
    <div class="logo">
        <a href="/">
            <img src="data:image/png;base64,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" alt=""></a>
    </div>
    <a class="new_search_btn" href="https://m.kongfz.com/newsearch/">
        <div class="inner">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAfCAMAAACxiD++AAAAPFBMVEUAAACampqampqampqkpKSampqZmZmZmZmZmZmampqZmZmbm5uampqZmZmampqgoKCZmZmZmZmZmZmZmZnxEDpHAAAAE3RSTlMAQtiKCszp8+K/dmtTPCYVhe+oUAggIwAAALpJREFUKM+FU9kOwyAMg3BTCm39//86jU1NT+IXhGxicinGbBKFQMnM6gE2e+zw2V75EgEyulpbtSEgljO/AE7zVTtgOfIbMKkTJmA7vl/11VOvHKMAzLMCKP//R45/dom/XDKceoRD7qdng6uJ7/UDqRcQvjU1MI/sTiV2uHukHqe+CWp3D7BvAosgCkQL8ZNimmKhpFKLzRLbLQ2MMHK+jYd2BbXh2DcCteHidMVg9brCqeHyNkdKxAeG9gwGFxIALwAAAABJRU5ErkJggg==" alt="">
            <div>商品名称 作者 出版社 ISBN</div></div>
    </a>
</div>
<div class="banner">
    <div class="swiper-container swiper-banner">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="https://m.kongfz.com/shop/3669/">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/5247e-5233.jpg" onerror="this.style.width=0;" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://t.kongfz.com/article/15364584">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/bd0eb-3512.jpg" onerror="this.style.width=0;" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://m.kongfz.com/shop/19661/#/list/column_76651">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/1fe2f-6715.jpg" onerror="this.style.width=0;" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://promotion.kongfz.com/promotion/universe_m">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/312d5-8313.jpg" onerror="this.style.width=0;" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://m.kongfz.com/shop/19661/#/list/column_76564">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/2dc43-8151.jpg" onerror="this.style.width=0;" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://promotion.kongfz.com/promotion/xinshupandian202107_m">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/1d6d5-1616.jpg" onerror="this.style.width=0;" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://mbook.kongfz.com/19661/3906904475">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/90b9e-9487.jpg" onerror="this.style.width=0;" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://promotion.kongfz.com/promotion/jiaoshijie2021_m">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/59bc6-8208.jpg" onerror="this.style.width=0;" alt=""></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="nav">
    <ul class="inner">
        <li>
            <a href="https://mbook.kongfz.com/Cxianzhuang/">
                <div class="img_box">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/8f1ca-3639.png" onerror="this.style.width=0;" alt=""></div>
                <div class="name">线装古籍</div></a>
        </li>
        <li>
            <a href="https://mbook.kongfz.com/Cminguo/">
                <div class="img_box">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/04cd1-3229.png" onerror="this.style.width=0;" alt=""></div>
                <div class="name">民国旧书</div></a>
        </li>
        <li>
            <a href="https://mbook.kongfz.com/Cmoji/">
                <div class="img_box">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/0d399-8161.png" onerror="this.style.width=0;" alt=""></div>
                <div class="name">名人墨迹</div></a>
        </li>
        <li>
            <a href="https://mbook.kongfz.com/Czaxiang/">
                <div class="img_box">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/cad56-9050.png" onerror="this.style.width=0;" alt=""></div>
                <div class="name">古玩杂项</div></a>
        </li>
        <li>
            <a href="https://m.kongfz.com/category/">
                <div class="img_box">
                    <img src="{{$commonAssetUrl}}/kongfz/m/img/b5f5b-5707.png" onerror="this.style.width=0;" alt=""></div>
                <div class="name">全部分类</div></a>
        </li>
        <li style="margin:0;height:0;"></li>
        <li style="margin:0;height:0;"></li>
        <li style="margin:0;height:0;"></li>
    </ul>
</div>
<div id="index_tmpl_interpolation">

</div>

<div class="top" style="display: block;"></div>

@include('modules.common._footer', ['data' => ''])
@include('culture.modules._template-js', ['data' => ''])
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
<script type="text/javascript" src="{{$commonAssetUrl}}/kongfz/m/js/jweixin-1.6.0.js"></script>
<script type="text/javascript" src="{{$commonAssetUrl}}/kongfz/m/js/swaninvoke.js"></script>
<script type="text/javascript" src="{{$commonAssetUrl}}/kongfz/m/js/runtime.4aa80e0b54e9029b63f7.js"></script>
<script type="text/javascript" src="{{$commonAssetUrl}}/kongfz/m/js/zepto.4aa80e0b54e9029b63f7.js"></script>
<script type="text/javascript" src="{{$commonAssetUrl}}/kongfz/m/js/index.js?v=16"></script>
</body>

</html>

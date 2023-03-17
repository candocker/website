@php
$rand = 1;//time();
@endphp
<meta http-equiv="imagetoolbar" content="no">
<link rel="stylesheet" href="{{$commonAssetUrl}}/classical/css/base.css?v={{$rand}}" type="text/css">
@switch($view)
@case('detail')
<link rel="stylesheet" href="{{$commonAssetUrl}}/classical/css/show.css?v={{$rand}}" type="text/css">
<link rel="stylesheet" href="{{$commonAssetUrl}}/classical/css/showext.css?v={{$rand}}" type="text/css">
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="{{$commonAssetUrl}}/classical/js/common_new.js?v=16"></script>
@break
@default
<link rel="stylesheet" href="{{$commonAssetUrl}}/classical/css/list.css?v={{$rand}}" type="text/css">
<script type="text/javascript" src="{{$commonAssetUrl}}/classical/js/index_new.js?v=8"></script>
<style>.piny{font-family:Arial,Verdana,Sans-serif;}</style>
@endswitch

<!--<link rel="stylesheet" href="http://www.quanxue.cn/common/common.css" type="text/css">
<link rel="stylesheet" href="http://www.quanxue.cn/CT_RuJia/css.css" type="text/css">
<link rel="stylesheet" href="http://www.quanxue.cn/CT_RuJia/ZhouYi/zhouyi.css" type="text/css">
<script type="text/javascript" src="http://www.quanxue.cn/common/common_new.js"></script>-->

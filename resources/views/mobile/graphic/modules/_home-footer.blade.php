<ul class="lineBox">
    @foreach ($data as $pData)
    <li style="float: left; margin-right: 20px;">
        <a target="_self" href="/{{$pData['code']}}" title="{{$pData['name']}}">{{$pData['name']}}</a>
    </li>
    @endforeach
</ul>
<div class="lineBox">
    <div id="copyRight">使用本站表示即接受 xixik 的
        <a href="http://www.xixik.com/terms/">用户协议</a>及
        <a href="http://www.xixik.com/privacy/">隐私保护规则</a>。
        <br />Copyright &copy; 2006-
        <script language="javascript" type="text/javascript">var thisYear = new Date();
            document.write(thisYear.getFullYear());</script>
        <a href="http://www.xixik.com/" title="嘻嘻网!开启电子优惠券门户!">Xixik.com</a>&trade; Corporation and its licens ors All Rights Reserved. 嘻嘻网&trade;
        <a href="http://www.xixik.com/copyright/">版权所有</a>本公司保留所有权利。
    </div>
</div>
<script type="text/javascript">var table = document.getElementsByTagName("table");
    for (var i = 0; i < table.length; i++) {
        if (table[i].style.width.indexOf("px") > 0) {
            table[i].style.width = "100%";
        }
    }</script>
<!--<div class="gg2">
    <script async src="{{$commonAssetUrl}}/graphic/m/js/adsbygoogle.js"></script>
    336x280-114-left
    <ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3849899595029685" data-ad-slot="9973132210"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>-->

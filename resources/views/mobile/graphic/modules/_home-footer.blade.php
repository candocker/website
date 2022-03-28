<ul class="lineBox">
    @foreach ($data as $pData)
    <li style="float: left; margin-right: 20px;">
        <a target="_self" href="/{{$pData['code']}}" title="{{$pData['name']}}">{{$pData['name']}}</a>
    </li>
    @endforeach
</ul>
<div class="lineBox">
    <div id="copyRight">
        Copyright &copy; 2019-
        <script language="javascript" type="text/javascript">var thisYear = new Date(); document.write(thisYear.getFullYear());</script>
        <a href="" title="">91zuiai.com</a>&trade; Corporation and its licensors All Rights Reserved. &trade;
        <a href="">版权所有</a>本公司保留所有权利。<br />
        <a href="http://beian.miit.gov.cn/">工业和信息化部备案管理系统网站 <?php echo config('app.icp91zuiai'); ?></a>
    </div>
</div>
<script type="text/javascript">
var table = document.getElementsByTagName("table");
for (var i = 0; i < table.length; i++) {
    if (table[i].style.width.indexOf("px") > 0) {
        table[i].style.width = "100%";
    }
}
</script>
<!--<div class="gg2">
    <script async src="{{$commonAssetUrl}}/graphic/m/js/adsbygoogle.js"></script>
    336x280-114-left
    <ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3849899595029685" data-ad-slot="9973132210"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>-->

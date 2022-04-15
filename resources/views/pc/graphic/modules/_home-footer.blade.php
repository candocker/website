<!--<div class="lindBox" style="clear: both; text-align: center;">手机版请访问
    <a href="" title="美国历任总统名单_历任美国总统名单一览表及就职情况_美国总统（POTUS）">美国历任总统名单</a>
</div>-->
<ul style="width: 960px; margin: auto; overflow: hidden;">
    @foreach ($data as $pData)
    <li style="float: left; margin-right: 20px;">
        <a target="_self" href="/{{$pData['code']}}" title="{{$pData['name']}}">{{$pData['name']}}</a>
    </li>
    @endforeach
</ul>
<!--<div class="lindBox">
    <div class="btnGray">
        <div class="btnText">
            <a target="_self" title="美国历任总统名单_历任美国总统名单一览表及就职情况_美国总统（POTUS）" href="http://news.xixik.com/word/122/">另存为<br />Word格式</a>
        </div>
    </div>
</div>
<div class="lindBox" style="text-align: center;">
    <img src="http://news.xixik.com/qrcode/122/" alt="扫码手机上继续看" /><br /><br />
    <strong>用微信或者支付宝扫码在手机上继续观看<br />可以保存收藏，也扫码后可以分享给好友</strong>
</div>-->
<hr style="height: 1px; border: none; border-top: 1px dashed #999;" />
<!--<div id="footer">
    <a href="" target="_blank">友情链接</a>　|　
</div>-->
<div id="copyRight">
    Copyright &copy; 2019-
    <script language="javascript" type="text/javascript">var thisYear = new Date(); document.write(thisYear.getFullYear());</script>
    <a href="" title="">91zuiai.com</a>&trade; Corporation and its licensors All Rights Reserved. &trade;
    <a href="">版权所有</a>本公司保留所有权利。<br />
    <a href="http://beian.miit.gov.cn/">工业和信息化部备案管理系统网站 {{currentIcp}}</a>
</div>

<script src="{{$commonAssetUrl}}/graphic/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(".guideOpen").click(function() {
    if ($(this).html() == "展开↓") {
        $("#guideDisplay").css("height", "auto");
        $(".guideBorder").css("height", "auto");
        $(this).html("关闭&#8593;");
    } else {
        $("#guideDisplay").height(225);
        $(".guideBorder").height(280);
        $(this).html("展开&darr;");
    }
});
</script>
<script>
$(".guideFllowClose").click(function() {
    setCookie("fllow", true);
    $(".guideFllow").hide();
});

if (getCookie("fllow") != null) {
    $(".guideFllow").hide();
}

function setCookie(name, value) {
    var Days = 30;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function getCookie(name) {
    var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");

    if (arr = document.cookie.match(reg))

    return unescape(arr[2]);
    else return null;
}
hidetip();
</script>

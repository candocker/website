<link href="{{$commonAssetUrl}}/graphic/css/39486-7046.css" rel="stylesheet" type="text/css" />
<style>.btnGray { width: 120px; height: 40px; background: url({{$commonAssetUrl}}/graphic/img/55cbb-4143.png); margin: auto; text-align: center; margin-bottom: 2px; } .btnText { width: 80px; float: right; margin-top: 5px; height: 35px; line-height: 15px; } .btnText a { display: block; font-size: 12px; color: Black; text-decoration: none; } #guideDisplay2 { height: 230px; margin: 0px; overflow-y: scroll; margin-left: 5px; } .guideFllow { float: left; width: 235px; height: 275px; margin-right: 15px; position: fixed; right: 0px; top: 300px; } .guideFllowBorder { width: 235px; border: solid 1px #dedfe1; height: auto; position: absolute; overflow: visible; background: white; } .guideFllowTitle { border-bottom: dashed 1px #ddd; text-indent: 1em; height: 30px; line-height: 30px; font-weight: bold; } .guideFllowBorder ul { margin: 10px; } .guideFllowBorder ul li { width: 97%; overflow: hidden; height: 25px; line-height: 25px; border-bottom: dashed #dedfe1 1px; } .guideFllowBorder ul li a { font-size: 14px; } #guideFllowDisplay { height: 225px; margin: 0px; overflow: hidden; margin-left: 5px; } .guideFllowClose { width: 100%; text-align: right; font-size: 12px; cursor: pointer; } .custom_border { border: 1px solid #ccc; padding-bottom: 10px; overflow: hidden; } .custom_head { width: 100%; height: 30px; line-height: 30px; font-weight: bold; font-size: 14px; border-top: solid 1px white; background: #FFF url({{$commonAssetUrl}}/graphic/m/img/d7215-2568.png) repeat-x left top; } .custom_title { float: left; width: 800px; text-align: left; text-indent: 2em; } .custom_title { height: 40px; line-height: 40px; } .custom_content { width: 100%; margin-top: 10px; overflow:auto; } .custom_content a { font-size: 14px; } .content_text { margin: 10px; } .custom_totop { float: right; width: 80px; margin-right: 10px; } .custom_totop .ico { background:url({{$commonAssetUrl}}/graphic/m/img/ecf98-5679.png); background-position: 15px -84px; width:18px; height:17px; float:left; margin-top:6px; } .custom_totop a { color: #000; float:left; } .custom_title h2 { height: 40px; line-height: 40px; font-size: 16px; border-bottom: 0px; } .content_daodu{ width:84px; height:84px; margin-right:10px; float:left; display:inline; background:url({{$commonAssetUrl}}/graphic/m/img/ecf98-5679.png)}</style></head>
<script>
var userAgentInfo = navigator.userAgent;
var Agents = ["Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod"];
var flag = true;
for (var v = 0; v < Agents.length; v++) {
    if (userAgentInfo.indexOf(Agents[v]) > 0) {
        flag = false;
        break;
    }
}
if (!flag) {
    location.href = "http://m.114.xixik.com/" + "potus/";
}
</script>
<script type="text/javascript">function addBookmark(title, url) {
        try {
            window.external.addFavorite(url, title);
        } catch(e) {
            try {
                window.sidebar.addPanel(title, url, "");
            } catch(e) {
                alert("您的浏览器不支持此操作，请手动收藏。");
            }
        }
    }

    function setHome(obj, url) {
        try {
            obj.style.behavior = 'url(#default#homepage)';
            obj.setHomePage(url); //< a href = "Model1.aspx" > Model1.aspx < /a>
    }
    catch (e) {
        if (window.netscape) {
            try {
                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
            }
            catch (e) {
                alert(" 此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]设置为'true'");
            }
            var prefs = Components.classes['@mozilla.org/preferences - service; 1'].getService(Components.interfaces.nsIPrefBranch);
            prefs.setCharPref('browser.startup.homepage ', url);
        }
    }
}


document.getElementById("icoPhone").onmouseenter = function () {
    showtip(this);
}

document.getElementById("icoPhone").onmouseout = function () {
    hidetip();
}

document.getElementById("icoWechat").onmouseenter = function () {
    showtip(this);
}

document.getElementById("icoWechat").onmouseout = function () {
    hidetip();
}

document.getElementById("icoSina").onmouseenter = function () {
    showtip(this);
}

document.getElementById("icoSina").onmouseout = function () {
    hidetip();
}

function hidetip() {
    document.getElementById("showqrCode").style.display = "none";
}

function showtip(obj) {
    var qc = document.getElementById("showqrCode");
    var left = obj.offsetLeft;
    if (obj.id == "icoPhone") {
        qc.getElementsByTagName("img")[0].src = "http://kfc.images.xixik.net/banner/qrcode/qrcode-m.kfc.xixik.com-suspend.gif";
        qc.getElementsByTagName("span")[0].innerHTML = "扫描手机嘻嘻网";
        qc.getElementsByTagName("span")[1].innerHTML = "即刻享受优惠";
    }
    else if (obj.id == "icoWechat") {
        qc.getElementsByTagName("img")[0].src = "http://kfc.images.xixik.net/banner/qrcode/qrcode-xixikcom-weixin-suspend.gif";
        qc.getElementsByTagName("span")[0].innerHTML = "关注微信公众号";
        qc.getElementsByTagName("span")[1].innerHTML = "要什么券就发你";
    }
    else {
        qc.getElementsByTagName("img")[0].src = "http://kfc.images.xixik.net/banner/qrcode/qrcode-weibo-suspend.gif";
        qc.getElementsByTagName("span")[0].innerHTML = "关注嘻嘻网官方微博";
        qc.getElementsByTagName("span")[1].innerHTML = "随时随地互动交流";
    }
    qc.style.left = left + "px";
    qc.style.top = "30px";
    qc.style.display = "block";//显示
}
</script>

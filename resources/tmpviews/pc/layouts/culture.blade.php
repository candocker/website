<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="site_home">

<head>
@include('culture.modules._header-meta')
@include('culture.modules._header-jscss')

<body>
{{--@include('culture.modules._common-top')--}}
{{-- @include('culture.modules._common-header') --}}
@include('culture.modules._common-nav')

@yield('subnav')
<div class="content">
@yield('main')
    <div class="clear"></div>
    <div class="bottomMenu">
        <a href='../news/web_6.html' style='' class='font1_2'>联系我们</a>&nbsp;-&nbsp;
        <a href='../news/web_5.html' style='' class='font1_2'>免责声明</a>&nbsp;-&nbsp;
        <a href='../sitemap.html' style='' class='font1_2' target='_blank'>网站地图</a>
    </div>
</div>

<div id="footer">网站名称：
    <a href="http://www.yac8.com/" target="_blank">
        <span style="color:#e53333;">书法欣赏</span></a>&#160;网站域名：
    <a href="http://www.yac8.com/" target="_blank">
        <span style="color:#003399;">www.yac8.com</span></a>江苏-太仓
    <a href="http://beian.miit.gov.cn/" target="_blank">苏ICP备09026750号-2 公安备案号32058502010026</a>
</div>
<div class="clear"></div>

</body>
</html>

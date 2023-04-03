<!DOCTYPE html>
<html>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="site_home">
<head>

@include('culture.modules._header-meta')
@include('culture.modules._header-jscss')
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.114.xixik.com/potus/">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<base target="_blank" />
    <meta name="renderer" content="webkit" />
    <meta content="width=750,maximum-scale=2,user-scalable=no" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="applicable-device" content="mobile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


    @yield('dynamicMeta')
    @yield('jscss')
</head>
<body @yield('bodyClass')>
{{-- @include('culture.modules._common-header') --}}

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
    @yield('main')
</body>
</html>

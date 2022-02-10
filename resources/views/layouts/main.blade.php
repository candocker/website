<!DOCTYPE html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width" initial-scale="1.0" />
    @yield('dynamicMeta')
    {{--<link rel="Shortcut Icon" type="image/x-icon" href="{{$commonAssetUrl}}/nav/img/bff05-1694.ico" />--}}
    <link rel="icon" href="http://39.106.102.45/common/static/icon.png" sizes="32x32">
    @yield('header')
</head>
<body @yield('bodyClass')>
    @yield('content')
</body>
</html>
    {{--<meta name="renderer" content="webkit" />
    <meta content="width=750,maximum-scale=2,user-scalable=no" name="viewport" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="applicable-device" content="mobile">--}}

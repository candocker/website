<!DOCTYPE html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width" initial-scale="1.0" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    @yield('dynamicMeta')
    {{--<link rel="Shortcut Icon" type="image/x-icon" href="{{$commonAssetUrl}}/nav/img/bff05-1694.ico" />--}}
    <link rel="icon" href="http://39.106.102.45/common/static/icon.png" sizes="32x32">
    @yield('header')
</head>
<body @yield('bodyClass')>
    @yield('content')
</body>
</html>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
</head>

<body>-->

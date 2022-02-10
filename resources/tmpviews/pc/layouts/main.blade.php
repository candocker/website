<!DOCTYPE html>
<html>
<head>
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @yield('dynamicMeta')
    @yield('jscss')
</head>
<body @yield('bodyClass')>
    @yield('main')
</body>
</html>

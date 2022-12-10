<!DOCTYPE html>
<html lang="en-US" >
<head>
<meta charset="utf-8"> 
@yield('dynamicMeta')
@yield('header')
</head>  
<body @yield('bodyClass')>
    @yield('content')
</body>
</html>

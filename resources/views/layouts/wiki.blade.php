<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>首页</title>
<!-- load stylesheets -->
<link rel="stylesheet" href="http://fonts.useso.com/css?family=Open+Sans:100,300,400">   <!-- Google web font "Open Sans" -->
<link rel="stylesheet" href="{{$commonAssetUrl}}/resumes/font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
<link rel="stylesheet" href="{{$commonAssetUrl}}/resumes/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
<link rel="stylesheet" href="{{$commonAssetUrl}}/resumes/css/magnific-popup.css">                                     <!-- Magnific pop up style -->
<link rel="stylesheet" href="{{$commonAssetUrl}}/resumes/css/templatemo-style.css">                                   <!-- Templatemo style -->

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body id="top" class="home">

<div class="container-fluid">

    @yield('content')
</body>
</html>

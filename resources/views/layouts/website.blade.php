<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
@include('layouts.website._header')
</head>  
<body @yield('bodyClass')>
    @include('layouts.website._loader-mobile')
    <div class="uix-wrapper">
        @include('website.modules._nav', ['data' => []])
        @yield('content')
        @include('website.modules._footer', ['data' => []])
    </div>
    <!-- .uix-wrapper end -->
    @include('layouts.website._footer')
</body>
</html>

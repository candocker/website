@php
$layoutElems = ['ltr', 'rtl'];
$layoutElem = $layoutElems[0];
@endphp
<!DOCTYPE html>
<html lang="en-US" dir="{{$layoutElem}}">
<head>
@include('layouts.website._header', ['layoutElem' => $layoutElem])
</head>  
<body @yield('bodyClass')>
    @include('layouts.website._loader-mobile', ['layoutElem' => $layoutElem])
    <div class="uix-wrapper">
        @include('website.modules._nav', ['data' => []])
        @yield('content')
        @include('website.modules._footer', ['data' => []])
    </div>
    <!-- .uix-wrapper end -->
    @include('layouts.website._footer')
</body>
</html>

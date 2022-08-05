@php
$layoutElems = ['ltr', 'rtl'];
$layoutElem = $layoutElems[0];
$bodyClasses = [
    '3D-simulate-html-layout' => 'class="page uix-hidden-scrollbar"', // ajax-page-loader
    'mousewheel-interaction' => 'class="page mousewheel-interaction"',
    'one-page' => 'class="page uix-hidden-scrollbar onepage"',
    'typography-rtl' => 'class="page rtl"',
];
@endphp
<!DOCTYPE html>
<html lang="en-US" dir="{{$layoutElem}}">
<head>
@yield('dynamicMeta')
@include('layouts.website._header', ['layoutElem' => $layoutElem])
</head>  
<body @yield('bodyClass')>
    @include('layouts.website._loader-mobile', ['layoutElem' => $layoutElem])
    <div class="uix-wrapper">
        @include('layouts.website._top', ['data' => []])
        <main id="uix-maincontent">
        @yield('content')
        </main>
        @include('layouts.website._footer-simple', ['data' => []])
    </div>
    <!-- .uix-wrapper end -->
    @include('layouts.website._bottom')
</body>
</html>

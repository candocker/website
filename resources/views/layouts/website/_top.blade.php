<!--<header class="uix-header__container uix-header__container--overlay">-->
<header class="uix-header__container">
    <div class="uix-header">
        <div class="container">
            <div class="uix-brand">
                <a href="index"><img src="{{$commonAssetUrl}}/website/assets/images/logo.png" alt="Uix Kit"></a>                       
            </div>
            @include('layouts.website._nav', ['data' => []])
        </div>
        <div class="uix-clearfix"></div>
    </div>
</header>
{{--@if ($nav == 'fixed')--}}
<div class="uix-header__placeholder js-uix-header__placeholder-autoheight"></div>
{{--@endif--}}

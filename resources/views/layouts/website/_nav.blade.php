<nav class="uix-menu__container">
<!--<nav class="uix-menu__container uix-trans">-->
    <div class="uix-menu__inner">
        <span class="uix-brand--mobile">
            <a class="navbar-brand" href="/"><span>融会贯通</span></a>
        </span>
        <ul class="uix-menu"> 
            @foreach ($datas['navDatas'] as $navCode => $navData)
            <li class="@if (isset($navData['subNavs'])) multi-column current-menu-item @endif @if ($navCode == $datas['currentNav']) is-active @endif"><a href="/{{$navCode}}">{{$navData['name']}}</a>
                @if (isset($navData['subNavs']))
                <ul class="sub-menu">
                    <li>
                        <ul class="sub-menu">
                    @foreach ($navData['subNavs'] as $subCode => $subData)
                            <li><a href="/{{$navCode}}-{{$subCode}}">{{$subData['name']}}</a></li>
                    @endforeach
                        </ul>
                    </li>
                </ul>
                @endif
            </li>
            @endforeach
        </ul>
        @include('layouts.website._nav-share', ['data' => []])
    </div>
</nav>

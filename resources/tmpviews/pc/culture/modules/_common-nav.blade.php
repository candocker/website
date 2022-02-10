@inject('culturePresenter', 'ModuleInfocms\Presenters\CulturePresenter')
@php
$categoryTrees = $culturePresenter->getCategoryTrees();
@endphp
<div class="mainMenu">
    <div>
        <ul class='topnavNum7 topnav'>
            <li class='b'>
                <div class='itemMenu'><a href='./' style=''>网站首页</a></div>
            </li>
            @foreach ($categoryTrees as $pKey => $pData)
            <li class='b'>
                <div class='itemMenu'><a href='{{$pData->getUrl()}}' style='' >{{$pData['name']}}</a></div>
                <ul class='subnav'>
                    @foreach ($pData['subInfos'] as $subKey => $subData)
                    <li><a href='{{$subData->getUrl()}}' style='' >{{$subData['name']}}</a></li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
        <div class='clear'></div>
    </div>
</div>

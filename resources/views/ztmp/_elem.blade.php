@inject('culturePresenter', 'ModuleInfocms\Presenters\CulturePresenter')
@php
$categoryTrees = $culturePresenter->getCategoryTrees();
@endphp


@inject('brandPresenter', 'ModuleInfocms\Presenters\BrandPresenter')
<div class="blockinfo webshopcol " id="pos_webshoplist">
    @foreach ($brandPresenter->getWebsiteDatas($data, 8) as $website)
    <li class="item">
    </li>
    @endforeach
</div>

@inject('culturePresenter', 'ModuleInfocms\Presenters\CulturePresenter')
<div class="mainMenu">
    @if ($cultureCategory['parent_code'])
    <a href='{{$cultureCategory->parentElem->getUrl()}}'>{{$cultureCategory->parentElem['name']}}ooo</a>&nbsp;&gt;&nbsp;
    @endif
</div>

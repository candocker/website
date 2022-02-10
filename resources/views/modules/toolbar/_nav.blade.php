<div class="header-bar">
    <div class="container">
        <div class="bar-left">
            @foreach ($sorts as $sortDatas)
            <ul class="">
            <li></li>
            @foreach ($sortDatas as $code => $subData)
				<li class="menu-item">
					<a rel="bookmark" href="/toolbar_{{$code}}" @if ($code == $pCode) style="color:red"@endif>{{$subData['name']}}</a>
                </li>
            @endforeach
            </ul>
            @endforeach
        </div>
        <!--<div class="bar-right ">
            <span>特别推荐</span>
            <a href="" title="公众号互推平台">
				<i alt="公众号互推平台" class="iconfont icon-jiangzhang" style="color:red"></i>换量互推
            </a>
            <a href="" title="公众号派单平台">
                <i alt="公众号互推平台" class="iconfont icon-shouru" style="color:#4ec655;"></i>派单平台
            </a>
            <a href="" title="公众号接单平台">
                <i alt="公众号互推平台" class="iconfont icon-" style="color:#36a0cf;"></i>接单平台
            </a>
        </div>-->
    </div>
</div>

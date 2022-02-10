<div id="container">
    <!--数组循环-->
    <div id="menu">
        @foreach ($datas['sorts'] as $code => $pData)
        <div class="menuItem @if ($pData['isCurrent']) active @endif" data-index="0">
            <h2 class="name"><a href="/jd-sort-{{$code}}">{{$pData['name']}}</a></h2>
        </div>
        @endforeach
    </div>
    <div id="content">
        @foreach ($datas['volumes'] as $vCode => $vName)
        <h3 class="title" id="title0">{{$vName}}-{{count($datas['books'][$vCode])}}</h3>
        <div class="itemList">
            @foreach ($datas['books'][$vCode] as $book)
            <a class="item" href="https://mbook.kongfz.com/Cxianzhuang/" data-show="1">
                <div>
                    <img class="lazy" src="//res2.kongfz.com/mobile/images/cate/xianzhuang.png" data-src="//res2.kongfz.com/mobile/images/cate/xianzhuang.png" alt="">
                    <div class="backgroundImg"></div>
                </div>
                <div class="des">
                    <div class="name">{{$book['serial']}}-{{$book['name']}}</div>
                    <div class="num">{{$book['author']}} ({{$book['nationality']}})</div>
                    <div class="num">{{$book['translator']}}</div>
               </div>
            </a>
            @endforeach
        </div>
        @endforeach
    </div>
    <div id="title4"></div>
</div>

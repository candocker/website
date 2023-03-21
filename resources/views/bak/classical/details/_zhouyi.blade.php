@php
$authors = [
    'zhuxi' => ['name' => '朱熹', 'nameFull' => '朱熹解易'],
    'wangbi' => ['name' => '王弼', 'nameFull' => '王弼周易注'],
    'sushi' => ['name' => '苏轼', 'nameFull' => '东坡易传'],
    'vernacular' => ['name' => '译文', 'nameFull' => '译文'],
];
$showElems = [
    'gua' => ['class' => 'tuan', 'name' => '卦辞', 'classPre' => ''], 
    'xiang' => ['class' => 'xiang xiangci daxiang', 'name' => '象曰', 'classPre' => 'xiangci'],
    'tuan' => ['class' => 'tuan', 'name' => '彖曰', 'classPre' => '']
];
$symbols = [0 => '■■■　■■■', 1 => '■■■■■■■'];
@endphp
<h1 style="display:none;">《周易》第{{$datas['serial']}}卦 {{$datas['brief']}}</h1>
<span class="title4">{{$datas['up']}}上<br>{{$datas['down']}}下</span>
<span class="baguatu">
@foreach (array_reverse($datas['symbol']) as $symbol) {{$symbols[$symbol]}}<br>@endforeach
</span>
<center>
    <span class="title3">{{$datas['serial']}} {{$datas['brief']}} 
    @if (isset($datas['description']))——{{$datas['description']}} @endif
    </span><br clear="left">
</center>
<hr />
<div class="b_center">
    @foreach ($authors as $aCode => $author)
    <span class="button width6em" onclick="showElems('{{$aCode}}');">{{$author['nameFull']}}</span>
    @endforeach
    <span class="button width6em" onclick="showElems('simple');">原文</span>
    <!--<span class="button width4em" onclick="showElems('comment');">注释</span>
    <span class="button width4em" onclick="showElems('jiedu');">解读</span>-->
</div>
<div class="guaci">{{$datas['name']}}: {{$datas['gua']}}</div>
<pre class="yaoci">
@foreach ($datas['yao'] as $elem)
{{$elem}}
@endforeach
</pre>
<hr />

@foreach ($showElems as $pointKey => $pointElem)
<p class="{{$pointElem['class']}}" style=""><big>{{$pointElem['name']}}</big><span>{{$datas[$pointKey]}}</span></p>
@foreach ($authors as $aCode => $author)
@if (isset($datas[$aCode]) && isset($datas[$aCode][$pointKey]) && !empty($datas[$aCode][$pointKey]))
@foreach ((array) $datas[$aCode][$pointKey] as $i => $elemStr)
<div class="yiwen {{$aCode}} {{$pointElem['classPre']}}"><p>【{{$author['name']}}】{!!$elemStr!!}</p></div>
@endforeach
@endif
@endforeach
@endforeach

<hr />
@foreach ($datas['yao'] as $key => $elem)
<p class="xiang">
    <big>爻辞</big> <span class="yin">{{$elem}}</span><br>
    @foreach ($authors as $aCode => $author)
    @if (isset($datas[$aCode]['yao']) && isset($datas[$aCode]['yao'][$key]) && !empty($datas[$aCode]['yao'][$key]))
    <div class="yiwen {{$aCode}}"><p>【{{$author['name']}}】{!!$datas[$aCode]['yao'][$key]!!}</p></div>
    @endif
    @endforeach

    <span class="xiangci"><big>象曰</big> <span style="color: #0099FF;">{{$datas['xiaoxiang'][$key]}}</span><br /></span>
    @foreach ($authors as $aCode => $author)
    @if (isset($datas[$aCode]['xiaoxiang']) && isset($datas[$aCode]['xiaoxiang'][$key]) && !empty($datas[$aCode]['xiaoxiang'][$key]))
    <div class="yiwen {{$aCode}}"><p>【{{$author['name']}}】{!!$datas[$aCode]['xiaoxiang'][$key]!!}</p></div>
    @endif
    @endforeach
</p>
@endforeach

@if (isset($datas['vernacular']) && isset($datas['vernacular']['notes']))
    @foreach ($datas['vernacular']['notes'] as $note)
    <div id="comment1" class="comment"><p>【注释】{{$note}}</p></div>
    @endforeach
@endif
@if (isset($datas['vernacular']) && isset($datas['vernacular']['unscramble']))
    @foreach ((array) $datas['vernacular']['unscramble'] as $unscramble)
    <div id="comment1" class="comment"><p>【注释】{{$unscramble}}</p></div>
    @endforeach
@endif
<hr />

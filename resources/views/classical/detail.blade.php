@extends('layouts.main-classical')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('classical.modules._jscss-detail', ['view' => 'home'])@endsection
@section('content')

<script>genNavigator("LEFT");</script>
<div class="main {{$mobileClass}}">
    {{--@include('classical.modules._header', ['data' => ''])--}}
    @include('classical.modules._header-top', ['data' => ''])
    <h1 style="display:none;">《周易》第{{$datas['serial']}}卦 {{$datas['brief']}}</h1>
    <span class="title4">{{$datas['up']}}上<br>{{$datas['down']}}下</span>
    <span class="baguatu">
    @foreach ($datas['symbols'] as $symbol) {{$symbol}}<br>@endforeach
    </span>
    <center>
        <span class="title3">{{$datas['serial']}} {{$datas['brief']}} 
        @if (isset($datas['description']))——{{$datas['description']}} @endif
        </span><br clear="left">
    </center>
    <hr />
    <div class="b_center">
        <span class="button width6em" onclick="showElems('zhuxi');">朱熹解易</span>
        <span class="button width6em" onclick="showElems('wangbi');">王弼周易注</span>
        <span class="button width6em" onclick="showElems('sushi');">东坡易传</span>
        <span class="button width4em" onclick="showElems('yiwentrue');">译文</span>
        <span class="button width4em" onclick="showElems('simple');">原文</span>
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

    <p class="tuan" style=""><big>卦辞</big><span>{{$datas['gua']}}</span></p>
    @if (isset($datas['zhuxi']) && isset($datas['zhuxi']['gua']))<div class="yiwen zhuxi"><p>【朱熹】{{$datas['zhuxi']['gua']}}</p></div>@endif
    @if (isset($datas['wangbi']) && isset($datas['wangbi']['gua']))<div class="yiwen wangbi"><p>【王弼】{{$datas['wangbi']['gua']}}</p></div>@endif
    @if (isset($datas['sushi']) && isset($datas['sushi']['gua']))<div class="yiwen sushi"><p>【东坡】{{$datas['sushi']['gua']}}</p></div>@endif
    @if (isset($datas['vernacular']['gua'])) @foreach ((array) $datas['vernacular']['gua'] as $i => $guaStr) <div class="yiwen yiwentrue"><p>【译文@if ($i) {{$i}} @endif】{{$guaStr}}</p></div>@endforeach @endif
    
    <p class="xiang xiangci daxiang"><big>象曰</big>{{$datas['xiang']}}</p>
    @if (isset($datas['zhuxi']) && isset($datas['zhuxi']['xiang']))<div class="yiwen zhuxi"><p>【朱熹】{{$datas['zhuxi']['xiang']}}</p></div>@endif
    @if (isset($datas['wangbi']) && isset($datas['wangbi']['xiang']))<div class="yiwen wangbi"><p>【王弼】{{$datas['wangbi']['xiang']}}</p></div>@endif
    @if (isset($datas['sushi']) && isset($datas['sushi']['xiang']))<div class="yiwen sushi"><p>【东坡】{{$datas['sushi']['xiang']}}</p></div>@endif
    @if (isset($datas['vernacular']['xiang'])) @foreach ((array) $datas['vernacular']['xiang'] as $i => $xiangStr) <div class="yiwen yiwentrue xiangci"><p>【译文@if ($i) {{$i}} @endif】{{$xiangStr}}</p></div>@endforeach @endif

    <p class="tuan"><big>彖曰</big>{{$datas['tuan']}}</p>
    @if (isset($datas['zhuxi']) && isset($datas['zhuxi']['tuan']))<div class="yiwen zhuxi"><p>【朱熹】{{$datas['zhuxi']['tuan']}}</p></div>@endif
    @if (isset($datas['wangbi']) && isset($datas['wangbi']['tuan']))<div class="yiwen wangbi"><p>【王弼】{{$datas['wangbi']['tuan']}}</p></div>@endif
    @if (isset($datas['sushi']) && isset($datas['sushi']['tuan']))<div class="yiwen sushi"><p>【苏轼】{{$datas['sushi']['tuan']}}</p></div>@endif
    @if (isset($datas['vernacular']))<div class="yiwen yiwentrue"><p>【译文】{{$datas['vernacular']['tuan']}}</p></div>@endif
    
    <hr />
    @foreach ($datas['yao'] as $key => $elem)
    <p class="xiang">
        <big>爻辞</big> <span class="yin">{{$elem}}</span><br>
        @if (isset($datas['vernacular'])) @foreach ((array) $datas['vernacular']['yao'][$key] as $i => $vernacularStr)<div class="yiwen yiwentrue"><p>【译文@if ($i) {{$i}} @endif】{{$vernacularStr}}</p></div>@endforeach @endif
        <span class="xiangci"><big>象曰</big> <span style="color: #0099FF;">{{$datas['xiaoxiang'][$key]}}</span><br /></span>
        @if (isset($datas['vernacular']))<div class="yiwen yiwentrue"><p>【译文】{{$datas['vernacular']['xiaoxiang'][$key]}}</p></div>@endif
        @if (isset($datas['zhuxi']) && isset($datas['zhuxi']['xiaoxiang']) && !empty($datas['zhuxi']['xiaoxiang'][$key]))<div class="yiwen zhuxi"><p>【朱熹】{{$datas['zhuxi']['xiaoxiang'][$key]}}</p></div>@endif
        @if (isset($datas['wangbi']) && isset($datas['wangbi']['xiaoxiang']) && !empty($datas['wangbi']['xiaoxiang'][$key]))<div class="yiwen wangbi"><p>【王弼】{{$datas['wangbi']['xiaoxiang'][$key]}}</p></div>@endif
        @if (isset($datas['sushi']) && isset($datas['sushi']['xiaoxiang']) && !empty($datas['sushi']['xiaoxiang'][$key]))<div class="yiwen sushi"><p>【苏轼】{{$datas['sushi']['xiaoxiang'][$key]}}</p></div>@endif
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
    @include('classical.modules._footer-detail', ['data' => ''])
</div>
<script>
function showElems(type) 
{
    if (type == 'simple') {
        var obj = $('.yiwen');
        obj.hide();
        return ;
    }
    var obj = $('.' + type);
    obj.toggle();
    return ;
}
showElems('simple');
</script>
@endsection

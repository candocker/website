@extends('layouts.main-classical')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('classical.modules._jscss-detail', ['view' => 'home'])@endsection
@section('content')

<script>genNavigator("LEFT");</script>
<div class="main">
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
        <span class="button width4em" onclick="disp('xiangci');">象辞</span>
        <span class="button width10em" onclick="disp('zhuxi');">朱熹解易</span>
        <span class="button width10em" onclick="disp('wangbi');">王弼-周易注</span>
        <span class="button width10em" onclick="disp('sushi');">苏轼-东坡易传</span>
        <span class="button width4em" onclick="disp('yiwentrue');">译文</span>
        <span class="button width4em" onclick="disp('comment');">注释</span>
        <span class="button width4em" onclick="disp('jiedu');">解读</span>
    </div>
    <div class="guaci">{{$datas['name']}}: {{$datas['gua']}}</div>
<pre class="yaoci">
@foreach ($datas['yao'] as $elem)
{{$elem}}
@endforeach
</pre>
<hr />

    <p class="tuan"><big>卦辞</big>{{$datas['gua']}}</p>
    @if (isset($datas['zhuxi']) && isset($datas['zhuxi']['gua']))<div id="yiwen" class="yiwen zhuxi"><p>【苏轼易传】{{$datas['zhuxi']['gua']}}</p></div>@endif
    @if (isset($datas['wangbi']) && isset($datas['wangbi']['gua']))<div id="yiwen" class="yiwen wangbi"><p>【苏轼易传】{{$datas['wangbi']['gua']}}</p></div>@endif
    @if (isset($datas['sushi']) && isset($datas['sushi']['gua']))<div id="yiwen" class="yiwen sushi"><p>【苏轼易传】{{$datas['sushi']['gua']}}</p></div>@endif
    @if (isset($datas['vernacular']['gua'])) @foreach ((array) $datas['vernacular']['gua'] as $i => $guaStr) <div id="yiwen" class="yiwen"><p>【译文{{$i}}】{{$guaStr}}</p></div>@endforeach @endif

    <p class="tuan"><big>彖曰</big>{{$datas['tuan']}}</p>
    @if (isset($datas['zhuxi']) && isset($datas['zhuxi']['tuan']))<div class="yiwen zhuxi"><p>【王弼】{{$datas['zhuxi']['tuan']}}</p></div>@endif
    @if (isset($datas['wangbi']) && isset($datas['wangbi']['tuan']))<div class="yiwen wangbi"><p>【王弼】{{$datas['wangbi']['tuan']}}</p></div>@endif
    @if (isset($datas['sushi']) && isset($datas['sushi']['tuan']))<div class="yiwen sushi"><p>【苏轼易传】{{$datas['sushi']['tuan']}}</p></div>@endif
    @if (isset($datas['vernacular']))<div class="yiwen yiwen1"><p>【译文】{{$datas['vernacular']['tuan']}}</p></div>@endif
    @if (isset($datas['vernacular']) && isset($datas['vernacular']['tuan1']))<div class="yiwen"><p>【译文2】{{$datas['vernacular']['tuan1']}}</p></div>@endif
    
    <p class="xiang xiangci"><big>象曰</big>{{$datas['xiang']}}</p>
    @if (isset($datas['vernacular']))<div class="yiwen xiangci"><p>【译文】{{$datas['vernacular']['xiang']}}</p></div>@endif
    
    @foreach ($datas['yao'] as $key => $elem)
    <p class="xiang">
        <big>爻辞</big> <span class="yin">{{$elem}}</span><br>
        @if (isset($datas['vernacular'])) @foreach ((array) $datas['vernacular']['yao'][$key] as $i => $vernacularStr)<div id="yiwen" class="yiwen"><p>【译文{{$i}}】{{$vernacularStr}}</p></div>@endforeach @endif
        <span class="xiangci"><big>象曰</big> <span style="color: #0099FF;">{{$datas['xiaoxiang'][$key]}}</span><br /></span>
        @if (isset($datas['wangbi']) && isset($datas['wangbi']['xiaoxiang']))<div id="yiwen" class="yiwen wangbi"><p>【王弼】{{$datas['wangbi']['xiaoxiang'][$key]}}</p></div>@endif
        @if (isset($datas['sushi']) && isset($datas['sushi']['xiaoxiang']))<div id="yiwen" class="yiwen sushi"><p>【苏轼】{{$datas['sushi']['xiaoxiang'][$key]}}</p></div>@endif
        @if (isset($datas['vernacular']))<div class="yiwen"><p>【译文】{{$datas['vernacular']['xiaoxiang'][$key]}}</p></div>@endif
    </p>
    @endforeach

    @if (isset($datas['notes']))
        @foreach ($datas['notes'] as $note)
        <div id="comment1" class="comment"><p>【注释】{{$note}}</p></div>
        @endforeach
    @endif
    @if (isset($datas['unscramble']))
        @foreach ($datas['notes'] as $note)
        <div id="comment1" class="comment"><p>【注释】{{$note}}</p></div>
        @endforeach
    @endif
    <hr />
    @include('classical.modules._footer-detail', ['data' => ''])
</div>
@endsection

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
    <center><span class="title3">{{$datas['serial']}} {{$datas['brief']}}</span><br clear="left"></center><hr />
    <div class="guaci">{{$datas['name']}}: {{$datas['gua']}}</div>
    @if (isset($datas['vernacular']))<div class="yiwen"><p>【译文】{{$datas['vernacular']['gua']}}</p></div>@endif
<pre class="yaoci">
@foreach ($datas['yao'] as $elem)
{{$elem}}
@endforeach
</pre>
<hr />

    <p class="tuan"><big>彖曰</big>{{$datas['tuan']}}</p>
    @if (isset($datas['vernacular']))<div class="yiwen"><p>【译文】{{$datas['vernacular']['tuan']}}</p></div>@endif
    
    <p class="xiang"><big>象曰</big>{{$datas['xiang']}}</p>
    @if (isset($datas['vernacular']))<div class="yiwen"><p>【译文】{{$datas['vernacular']['xiang']}}</p></div>@endif
    
    @foreach ($datas['yao'] as $key => $elem)
    <p class="xiang">
        <big>爻辞</big> <span class="yin">{{$elem}}</span><br>
        @if (isset($datas['vernacular']))<div class="yiwen"><p>【译文】{{$datas['vernacular']['yao'][$key]}}</p></div>@endif
        <big>象曰</big> <span style="color: #0099FF;">{{$datas['xiaoxiang'][$key]}}</span><br />
        @if (isset($datas['vernacular']))<div class="yiwen"><p>【译文】{{$datas['vernacular']['xiaoxiang'][$key]}}</p></div>@endif
    </p>
    @endforeach

    @if (isset($datas['notes']))
        @foreach ($datas['notes'] as $note)
        <div id="comment1" class="comment"><p>
【注释】{{$note}}
</p></div>
        @endforeach
    @endif
    <hr />
    @include('classical.modules._footer-detail', ['data' => ''])
</div>
@endsection

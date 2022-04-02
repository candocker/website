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
<pre class="yaoci">
@foreach ($datas['yao'] as $elem)
{{$elem}}
@endforeach
</pre>
<hr />

    <p class="tuan"><big>彖曰</big>{{$datas['tuan']}}</p>
    
    <p class="xiang"><big>象曰</big>{{$datas['xiang']}}</p>
    
    @foreach ($datas['yao'] as $key => $elem)
    <p class="xiang">
        <big>爻辞</big> <span class="yin">{{$elem}}</span><br>
        <big>象曰</big> {{$datas['xiaoxiang'][$key]}}<br />
    </p>
    @endforeach

    <hr />
    <span class="foot_key">分类:</span><a href="../index.html">儒家经典</a><span class="foot_key">书名:</span><a href="../ZhouYiIndex.html">周易</a><span class="foot_key">作者:</span>伏羲,文王,孔子
    <script>genNavigator("DOWN");</script>
</div>
@endsection

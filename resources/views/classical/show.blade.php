@extends('layouts.main-classical')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('classical.modules._jscss-show', ['view' => 'home'])@endsection
@section('content')
<script>genNavigator("LEFT");</script>
<div class="main {{$datas['mobileClass']}}">
    {{--@include('classical.modules._header', ['data' => ''])--}}
    @include('classical.modules._header-top', ['data' => ''])
    <div class="b_center">
        <span class="button width6em">【０１】</span>
        <span class="button width4em" onclick="disp('comment');">注释</span>
        <span class="button width4em" onclick="disp('yiwen');">译文</span>
        <span class="button width4em" onclick="disp('jiedu');">解读</span></div>
    <h1>{{$datas['name']}}</h1>
    <hr />
    @foreach ($datas['chapters'] as $chapter)
    <div class="b_center"><span class="button width6em">{{$chapter['name']}}</span>
    @foreach ((array) $chapter['content'] as $cContent)
    <div class="jingwen">{{$cContent}}</div>
    @endforeach
    <div id="comment1" class="comment" style="display: none;">
        @if (isset($chapter['notes']) && $chapter['notes'])
        @foreach ((array) $chapter['notes'] as $i => $note)
        <p>【注释@if ($i){{$i}}@endif】 {{$note}}</p>
        @endforeach
        @endif
    </div>
    <div id="yiwen1" class="yiwen" style="display: none;">
        @if (isset($chapter['vernacular']) && $chapter['vernacular'])
        @foreach ((array) $chapter['vernacular'] as $i => $vernacular)
        <p>【译文@if ($i){{$i}}@endif】 {{$vernacular}}</p>
        @endforeach
        @endif
    </div>
    <div id="jiedu1" class="jiedu" style="display: none;">
        @if (isset($chapter['unscramble']) && $chapter['unscramble'])
        @foreach ((array) $chapter['unscramble'] as $i => $unscramble)
        <p>【解读】@if ($i){{$i}}@endif】 {{$unscramble}}</p>
        @endforeach
        @endif
    </div>
    @endforeach
    <div id="yiwen1" class="yiwen">
        @if (isset($datas['notes']))
        @foreach ((array) $datas['notes'] as $i => $note)
        <p>【译文@if ($i){{$i}}@endif】 {{$note}}</p>
        @endforeach
        @endif
    </div>
    <div id="jiedu1" class="jiedu">
        @if (isset($datas['unscramble']))
        @foreach ((array) $datas['unscramble'] as $i => $unscramble)
        <p>【解读@if ($i){{$i}}@endif】 {{$unscramble}}</p>
        @endforeach
        @endif
    </div>
    <hr />
    <span class="foot_key">分类:</span>
    <a href="../index.html">儒家经典</a>
    <span class="foot_key">书名:</span>
    <a href="../LunYuIndex.html">论语</a>
    <span class="foot_key">作者:</span>孔门弟子
</div>
@endsection

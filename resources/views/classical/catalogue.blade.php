@extends('layouts.main-classical')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('header')@include('classical.modules._jscss', ['view' => 'home'])@endsection
@section('content')
<div class="base_index {{$mobileClass}}">
    {{--@include('classical.modules._header', ['data' => ''])--}}
    @include('classical.modules._header-top', ['data' => ''])
    <h1>{{$datas['name']}}</h1>
    
    @foreach ($datas['chapters'] as $pData)
    <table width="95%" border="1" align="center" cellspacing="0" class="indextable">
        <caption>{{$pData['name']}}</caption>
        <colgroup><col width="25%"><col width="25%"><col width="25%"><col></colgroup>
        <tbody>
        @php $i = 1; @endphp
        @foreach ($pData['infos'] as $pInfo)
        @if ($i % 4 == 1)<tr>@endif
        <td class="index_left_td">
            <span style="text-align:center;margin-top: 20px;font-size:14pt;">
                <a href="/show-{{$datas['bookCode']}}-{{$pInfo['code']}}">{{$pInfo['name']}}</a>
            </span>
        </td>
        @if ($i % 4 == 4)</tr>@endif
        @php $i += 1; @endphp
        @endforeach
        @if ($i % 4 != 4)</tr>@endif
        </tbody>
    </table>
    @endforeach
</div>
<hr />
@include('classical.modules._footer', ['data' => ''])

@endsection

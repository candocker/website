@php
$rowCount = $mobileClass ? 3 : 4;
@endphp
@foreach ($datas['chapters'] as $pData)
<table width="95%" border="1" align="center" cellspacing="0" class="indextable">
    <caption>{{$datas['brief']}}</caption>
    <colgroup><col width="25%"><col width="25%"><col width="25%"><col></colgroup>
    <tbody>
    @php $i = 1; @endphp
    @foreach ($pData['infos'] as $code => $pInfo)
    @if ($i % $rowCount == 1)<tr>@endif
    <td class="index_left_td">
        <span class="baguatu">
        @foreach ($pInfo['symbols'] as $symbol) {{$symbol}}<br>@endforeach
        </span>
        <span class="baguaname" style="text-align:center;margin-top: 20px;font-size:14pt;">
            <a href="/zhouyi-{{$code}}">{{$pInfo['serial']}}-{{$pInfo['brief']}}</a>
            @if (isset($pInfo['spell']) && $pInfo['spell'])<!--<br />(<span class="piny">{{$pInfo['spell']}}</span>)-->@endif
        </span>
    </td>
    @if ($i % $rowCount == $rowCount)</tr>@endif
    @php $i += 1; @endphp
    @endforeach
    @if ($i % $rowCount != $rowCount)</tr>@endif
    </tbody>
</table>
@endforeach
<table width="95%" border="1" align="center" cellspacing="0" class="indextable">
    <colgroup><col width="18%"><col width="18%"><col width="18%"><col><col></colgroup>
    <tbody><tr>
    @foreach (['wenyan' => '文言', 'xici1' => '系辞上', 'xici2' => '系辞下', 'shuogua' => '说卦', 'xugua' => '序卦', 'zagua' => '杂卦'] as $code => $name)
    <td class="index_left_td"><a href="/show-yizhuan-{{$code}}">{{$name}}传</a></td>
    @endforeach
    </tr></tbody>
</table>

@php
$rowCount = $mobileClass ? $datas['rowCountMobile'] : $datas['rowCount'];
@endphp
@foreach ($datas['chapters'] as $pData)
<table width="95%" border="1" align="center" cellspacing="0" class="indextable">
    <caption>{{$pData['name']}}</caption>
    <colgroup><col width="25%"><col width="25%"><col width="25%"><col></colgroup>
    <tbody>
    @php $i = 1; @endphp
    @foreach ($pData['infos'] as $pInfo)
    @if ($i % $rowCount == 1)<tr>@endif
    <td class="index_left_td">
        <span style="text-align:center;margin-top: 20px;font-size:14pt;">
            <a href="/show-{{$datas['bookCode']}}-{{$pInfo['code']}}">{{$pInfo['name']}}</a>
        </span>
    </td>
    @if ($i % $rowCount == $rowCount)</tr>@endif
    @php $i += 1; @endphp
    @endforeach
    @if ($i % $rowCount != $rowCount)</tr>@endif
    </tbody>
</table>
@endforeach

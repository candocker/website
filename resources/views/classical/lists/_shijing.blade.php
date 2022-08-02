@php
$rowCount = $mobileClass ? $datas['rowCountMobile'] : $datas['rowCount'];
$infos = $datas['infos'];
@endphp
@foreach ($datas['chapters'] as $chapter)
<table width="92%" border="1" align="center" cellspacing="0" class="indextable">
    <caption>{{$chapter['name']}}</caption>
    <tbody>
        @foreach ($chapter['elems'] as $key => $elem)
        @foreach ($elem['infos'] as $pIndex => $pCode)
        @if ($pIndex % $rowCount == 0)<tr>@endif
        @if ($pIndex == 0)
        <td class="index_center_td" rowspan="{{ceil(count($elem['infos']) / $rowCount)}}" width="{{$datas['rowspan']}}%">{{$elem['name']}}<br/>{{$elem['spell']}}</td>
        @endif
        <td class="index_left_td"><a @if (!isset($infos[$pCode]['isLost']))href="/show-{{$datas['bookCode']}}-{{$pCode}}"@endif>{{$pCode}} {{$infos[$pCode]['name']}}</a></td>
        @if ($pIndex % $rowCount == $rowCount - 1)</tr>@endif
        @endforeach
        @if ($pIndex % $rowCount != $rowCount - 1)</tr>@endif
        @endforeach
    </tbody>
</table>
@endforeach

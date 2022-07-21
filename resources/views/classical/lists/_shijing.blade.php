@php
$rowCount = $mobileClass ? $datas['rowCountMobile'] : $datas['rowCount'];
@endphp
@foreach ($datas['chapters'] as $chapter)
<table width="92%" border="1" align="center" cellspacing="0" class="indextable">
    <caption>{{$chapter['name']}}</caption>
    <tbody>
        @foreach ($chapter['elems'] as $key => $elem)
        @foreach ($elem['infos'] as $pIndex => $poem)
        @if ($pIndex % $rowCount == 0)<tr>@endif
        @if ($pIndex == 0)
        <td class="index_center_td" rowspan="{{ceil(count($elem['infos']) / $rowCount)}}" width="{{$datas['rowspan']}}%">{{$elem['name']}}</td>
        @endif
        <td class="index_left_td"><a href="/show-{{$datas['bookCode']}}-{{$poem['code']}}">{{$poem['code']}} {{$poem['name']}}</a></td>
        @if ($pIndex % $rowCount == $rowCount - 1)</tr>@endif
        @endforeach
        @if ($pIndex % $rowCount != $rowCount - 1)</tr>@endif
        @endforeach
    </tbody>
</table>
@endforeach

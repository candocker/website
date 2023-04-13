@php
$rowCount = $mobileClass ? 2 : 4;
@endphp
@extends('layouts.website')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('bodyClass')class="page"@endsection
@section('content')
<section class="uix-spacing--s uix-spacing--no-bottom uix-t-c">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3>{{$datas['infos']['name']}}</h3>
        <p>{{$datas['infos']['brief']}}</p>
        <hr>
      </div>
    </div>
  </div>
</section>

@php $serial = 1; @endphp
@foreach ($datas['infos']['volumes'] as $pData)
<section class="uix-spacing--s" style="padding-top:0px; padding-bottom:25px">
  <div class="container" style="padding-left:5px;padding-right:3px;">
    <div class="row">
      <div class="col-12">
        <div class="uix-table uix-table--bordered">
          <table style="border:2px solid #ADD8E6;">
            <thead>
              <tr>
              <th style="vertical-align: middle;text-align:center; color:#4fc3f7; font-size:14px;" colspan="{{$rowCount}}">
                  {{$serial}} - {{$pData['name']}} ( {{$pData['book_num']}} ) {{$pData['brief']}}
              </th>
              </tr>
            </thead>
            <tbody class="uix-t-l--md">
              @php $i = 1; @endphp
              @foreach ($pData['books'] as $subData)
              @php $jsonStr = json_encode($subData); @endphp
              @if ($i % $rowCount == 1)<tr>@endif
              <td style="text-align:center;padding-left:3px;padding-right:1px;padding-bottom:3px; padding-top:5px;">
                <span style="margin: 0px;font-size:@if ($mobileClass) 10pt @else 14pt @endif;">
                  <a href="javascript:void(0);" onclick="fillElem({{$subData['jsonStr']}});" tabindex="0" data-modal-id="modal-open-detail" data-modal-close-onlybtn="false"  data-modal-height="70%" data-modal-width="90%" >
                    {{$subData['name']}}
                  </a>
                </span>
              </td>
              @if ($i % $rowCount == $rowCount)</tr>@endif
              @php $i += 1; @endphp
              @endforeach
              @if ($i % $rowCount != $rowCount)</tr>@endif
            </tbody>
          </table>  
        </div>      
      </div>
    </div>
  </div>
</section>  
@endforeach
@include('read.modules._pop', ['data' => ''])
@endsection

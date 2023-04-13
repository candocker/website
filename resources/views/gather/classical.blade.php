@php
$rowCount = $mobileClass ? 3 : 5;
@endphp
@extends('layouts.website')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('bodyClass')class="page"@endsection
@section('content')
<section class="uix-spacing--s uix-spacing--no-bottom">
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
@foreach ($datas['infos']['series'] as $pData)
<section class="uix-spacing--s" style="padding-top:0px; padding-bottom:25px">
  <div class="container" style="padding-left:5px;padding-right:3px;">
    <div class="row">
      <div class="col-12">
        <div class="uix-table uix-table--bordered">
          <div class="col-12" style="">
            <h5 class="uix-heading--pinline">{{$serial}} - {{$pData['name']}} ({{$pData['book_num']}})</h5>
            <p class="uix-heading--pinline" style="color: green;font-size:14px;">{{$pData['brief']}}</p>
          </div>
          <table>
            @foreach ($pData['volumes'] as $key => $elem)
            <thead>
              <tr>
              <th style="vertical-align: middle;text-align:center; color:#4fc3f7; font-size:14px;" colspan="{{$rowCount}}">
                  {{$elem['name']}} ( {{$elem['book_num']}} )
              </th>
              </tr>
            </thead>
            <tbody class="uix-t-l--md">
            
              @foreach ($elem['books'] as $pIndex => $subData)

              @if ($pIndex % $rowCount == 0)<tr>@endif
              <td style="text-align:center;padding-left:3px;padding-right:1px;padding-bottom:3px; padding-top:5px;">
                  <span style="margin: 0px;font-size:@if ($mobileClass) 10pt @else 14pt @endif;">
                      <a href="javascript:void(0);" onclick="fillElem({{$subData['jsonStr']}});" tabindex="0" data-modal-id="modal-open-detail" data-modal-close-onlybtn="false"  data-modal-height="70%" data-modal-width="90%" >
                          {{$subData['name']}}
                      </a>
                  </span>
              </td>
              @if ($pIndex % $rowCount == $rowCount - 1)</tr>@endif
              @endforeach
              @if ($pIndex % $rowCount != $rowCount - 1)</tr>@endif
            </tbody>
            @endforeach
          </table>  
        </div>      
      </div>
    </div>
  </div>
</section>  
@endforeach
@include('gather.modules._pop', ['data' => ''])
@endsection

@php
$rowCount = $mobileClass ? 2 : 4;
@endphp
@extends('layouts.website')
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
            <tbody class="uix-t-l--md">

              @foreach ($pData['volumes'] as $key => $elem)
              <tr>
              <td style="vertical-align: middle;text-align:center; width=30%" rowspan="{{max(ceil(count($elem['books']) / $rowCount), 1)}}">
                  {{$elem['name']}} ( {{$elem['book_num']}} )
              </td>
              @foreach ($elem['books'] as $pIndex => $subData)

              @if ($pIndex != 0 && $pIndex % $rowCount == 0)<tr>@endif
              <td style="text-align:center;padding-left:3px;padding-right:1px;padding-bottom:3px; padding-top:5px;">
                  <span style="margin: 0px;font-size:@if ($mobileClass) 9pt @else 14pt @endif;">
                      <a href="">
                          {{$subData['name']}}
                      </a>
                  </span>
              </td>
              @if ($pIndex % $rowCount == $rowCount - 1)</tr>@endif
              @endforeach
              @if ($pIndex % $rowCount != $rowCount - 1)</tr>@endif
              @endforeach
            </tbody>
          </table>  
        </div>      
      </div>
    </div>
  </div>
</section>  
@endforeach
@include('gather.modules._pop', ['data' => ''])
@endsection

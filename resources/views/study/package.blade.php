@php
$rowCount = $mobileClass ? 2 : 4;
@endphp
@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
<hr>
<hr>
<hr>
<section class="uix-spacing--s" style="padding-top:0px; padding-bottom:25px">
  <div class="container" style="padding-left:5px;padding-right:3px;">
    <div class="row">
      <div class="col-12">
        <div class="uix-table uix-table--bordered">
          <table>
            <tbody class="uix-t-l--md">
              @foreach ($datas['infos'] as $name => $pData)
              <tr>
              <td>{{$pData['serial']}}</td>
              <td>{{$pData['version']}}</td>
              <td>@if (isset($pData['new'])) {{$pData['new']['version']}} @endif | @if (isset($pData['new1'])) {{$pData['new1']['version']}} @endif </td>
              <td style="text-align:center;padding-left:3px;padding-right:1px;padding-bottom:3px; padding-top:5px;">
                <span style="margin: 0px;font-size: 10pt ;">
                  <a href="{{$pData['url']}}" target="_blank" tabindex="0" data-modal-height="70%" data-modal-width="90%" >
                    {{$name}}
                  </a>
                </span>
              </td>
              <td>composer require {{$name}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>  
        </div>      
      </div>
    </div>
  </div>
</section>  

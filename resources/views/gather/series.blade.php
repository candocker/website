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

@foreach ($datas['infos']['volumes'] as $pData)
<section class="uix-spacing--s" style="padding-top:0px; padding-bottom:25px">
  <div class="container" style="padding-left:5px;padding-right:3px;">
    <div class="row">
      <div class="col-12">
        <div class="uix-table uix-table--bordered">
          <div class="col-12" style="">
            <h5 class="uix-heading--pinline">{{$pData['name']}}</h5>
            <p class="uix-heading--pinline" style="color: green;font-size:14px;">{{$pData['brief']}}</p>
          </div>
          <table>
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
    <template id="modal-open-detail">
      <div class="uix-modal-box" role="dialog" tabindex="-1" aria-hidden="true" style="overflow: auto">
        <button type="button" class="uix-modal-box__close" data-modal-close-trigger="true"></button>
        <section class="uix-spacing--s uix-spaceing--no-bottom">
          <div class="container" style="overflow: auto">
            <div class="row">
              <div class="col-12 col-lg-4 col-sm-6" style="background-color:whitesmoke;">
                <div class="uix-el--transparent uix-border--rounded uix-border--rounded-img" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0.2,"infinite":false}' > 
                  <img id="elem_img" src="" alt="">
                </div>
              </div>
              <div class="col-12 col-lg-4 col-sm-6" style="background-color:lightgrey;">
                <div class="uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0.4,"infinite":false}' >
                  <p>
                    <h3 id="elem_name"></h3>
                    @foreach (['author' => '作者', 'nationality' => '国籍', 'translator' => '译者'] as $elem => $elemName)
                    <dl class="uix-list-abreast uix-list-abreast--icon">
                      <dt><p>{{$elemName}}</p></dt>
                      <dd>
                        <p id="elem_{{$elem}}"></p>
                      </dd>
                    </dl>
                    @endforeach
                  </p>
                </div>
              </div>
              <div class="col-12 col-lg-4 col-sm-12" style="background-color:aliceblue;">
                <div class="uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}' >
                  <h3 class="uix-t-l uix-t-c--md"></h3>
                  <p class="uix-t-l uix-t-c--md" id="elem_description"></p> 
                </div>
              </div>
            </div>
          </div>
        </section> 
      </div>
    </template>
  </div>
</section>  
<script>
function fillElem(jsonStr)
{
  $('#elem_img').attr('src', jsonStr.coverUrl + '?x-oss-process=image/resize,m_pad,h_475,w_475');
  $('#elem_name').html(jsonStr.nameWiki);
  $('#elem_description').html(jsonStr.description);
  $('#elem_nationality').html(jsonStr.nationality);
  $('#elem_translator').html(jsonStr.translator);
  $('#elem_author').html(jsonStr.author);
  $('#elem_publish_at').html(jsonStr.publish_at);
}
</script>
@endforeach
@endsection

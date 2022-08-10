@extends('layouts.website')
@section('dynamicMeta')@include('modules._meta', $datas['tdkData'])@endsection
@section('bodyClass')class="page"@endsection
@section('content')
<section class="uix-spacing--s uix-spacing--no-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>{{$datas['seriesData']['name']}}-{{$datas['volumeData']['name']}}</h3>
                <p>{{$datas['seriesData']['brief']}}-{{$datas['volumeData']['description']}}</p>
                <hr>
            </div>
        </div>
    </div>
</section>
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('website.modules.table._table-responsive', ['data' => $datas['graphicDatas'], 'headers' => $datas['headers']['book']])
            </div>
        </div>
        {{--@foreach ($datas['graphicDatas'] as $pData)
        <template id="modal-open-{{$pData['id']}}">
            <div class="uix-modal-box" role="dialog" tabindex="-1" aria-hidden="true">
                <button type="button" class="uix-modal-box__close" data-modal-close-trigger="true"></button>
                <div class="uix-modal-box__content" role="document">
                    <div class="uix-modal-box__head">
                    </div>
                    <div class="uix-modal-box__body">
                        <div role="note">
                            <h2>{{$pData['name']}}</h2>
                            @include('website.modules.table._table-responsive', ['data' => $pData['books'], 'headers' => $datas['headers']['book'], 'type' => 'volume'])
                        </div>
                    </div>
                </div>
            </div>  
        </template>
        @endforeach--}}
    </div>
</section>   
@endsection

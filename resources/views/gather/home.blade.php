@php
@endphp
@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
<section class="uix-spacing--s uix-spacing--no-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>{{$datas['title']}}</h3>
                <p>{{$datas['description']}}</p>
                <hr>
            </div>
        </div>
    </div>
</section>
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('website.modules.table._table-responsive', ['data' => $datas['graphicDatas'], 'headers' => $datas['headers']['series'], 'type' => 'series'])
            </div>
        </div>
        @foreach ($datas['graphicDatas'] as $pData)
        <template id="modal-open-{{$pData['code']}}">
            <div class="uix-modal-box" role="dialog" tabindex="-1" aria-hidden="true">
                <button type="button" class="uix-modal-box__close" data-modal-close-trigger="true"></button>
                <div class="uix-modal-box__content" role="document">
                    <div class="uix-modal-box__body">
                        <div role="note">
                            <h4>{{$pData['name']}}</h4>
                            @include('website.modules.table._table-responsive', ['data' => $pData['volumes'], 'headers' => $datas['headers']['volume']])
                        </div>
                    </div>
                </div>
            </div>  
        </template>
        @endforeach
    </div>
</section>   
@endsection

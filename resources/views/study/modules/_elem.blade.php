@php
$rand = time();
@endphp
<link rel="stylesheet" href="{{$commonAssetUrl}}/study/css/text.css?v={{$rand}}" type="text/css">

<div class="elempadding">
    <p>这是一个没有左内边距的文本.</p>
    <p class="padding">此文本的左内距为2厘米.</p>
    <p class="padding2">此文本的左填充为50%.</p>
</div>

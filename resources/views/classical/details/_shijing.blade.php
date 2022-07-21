<div class="b_center">
    @if (isset($datas['bookData']['spell']))<span class="button width6em" onclick="disp('spellclass');">显示拼音</span>@endif
    <span class="button width6em" onclick="disp('comment');">注释</span>
    <span class="button width6em" onclick="disp('yiwen');">译文</span>
    <span class="button width6em" onclick="disp('jiedu');">解读</span></div>
<h1>{{$datas['name']}}@if (isset($datas['nameSpell']))<span class="spellclass" style="display: none;"> ( {{$datas['nameSpell']}} )@endif</span></h1>
<hr />
@php $i = 1; @endphp
@foreach ($datas['chapters'] as $chapter)
@if (count($datas['chapters']) > 1)<div class="b_center"><span class="button width6em">@if (isset($chapter['name'])){{$chapter['name']}}@else 第{{$i}} 节 @endif</span></div>@endif
@foreach ((array) $chapter['content'] as $key => $cContent)
@if (isset($datas['bookData']['spell']) && isset($chapter['spell']))
<div class="jingwen spellclass" style="display: none;">{{$chapter['spell'][$key]}}</div>
@endif
<div class="jingwen">{{$cContent}}</div>
@php $i++; @endphp
@endforeach
<div id="comment1" class="comment" style="display: none;">
    @if (isset($chapter['notes']) && $chapter['notes'])
    @foreach ((array) $chapter['notes'] as $i => $note)
    <p>【注释】 {{$note}}</p>
    @endforeach
    @endif
</div>
<div id="yiwen1" class="yiwen" style="display: none;">
    @if (isset($chapter['vernacular']) && $chapter['vernacular'])
    @foreach ((array) $chapter['vernacular'] as $i => $vernacular)
    <p>【译文】 {{$vernacular}}</p>
    @endforeach
    @endif
</div>
<div id="jiedu1" class="jiedu" style="display: none;">
    @if (isset($chapter['unscramble']) && $chapter['unscramble'])
    @foreach ((array) $chapter['unscramble'] as $i => $unscramble)
    <p>【解读】 {{$unscramble}}</p>
    @endforeach
    @endif
</div>
@endforeach
<div id="yiwen1" class="yiwen">
    @if (isset($datas['notes']))
    @foreach ((array) $datas['notes'] as $i => $note)
    <p>【译文】 {{$note}}</p>
    @endforeach
    @endif
</div>
<div id="jiedu1" class="jiedu">
    @if (isset($datas['unscramble']))
    @foreach ((array) $datas['unscramble'] as $i => $unscramble)
    <p>【解读】 {{$unscramble}}</p>
    @endforeach
    @endif
</div>

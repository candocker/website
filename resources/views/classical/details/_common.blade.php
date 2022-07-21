<div class="b_center">
    @if (isset($datas['bookData']['noteType']) && $datas['bookData']['noteType'] == 'inner')<span class="button width6em" onclick="disp('commentinner');">行内注释</span>@endif
    <span class="button width6em" onclick="disp('comment');">注释</span>
    <span class="button width6em" onclick="disp('yiwen');">译文</span>
    <span class="button width6em" onclick="disp('jiedu');">解读</span></div>
<h1>{{$datas['name']}}</h1>
<hr />
@foreach ($datas['chapters'] as $chapter)
<div class="b_center"><span class="button width6em">{{$chapter['name']}}</span>
@foreach ((array) $chapter['content'] as $cContent)
<div class="jingwen">{!!$cContent!!}</div>
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
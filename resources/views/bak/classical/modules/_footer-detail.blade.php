<span class="foot_key">分类:</span>
<a href="/">经典古籍</a>
<span class="foot_key">书名:</span>
<a href="/book-{{$datas['bookCode']}}">{{$datas['bookData']['name']}}</a>
@if (isset($datas['bookData']['author']))<span class="foot_key">作者:</span>{{$datas['bookData']['author']}} @endif
<span id="foot_right">
    <a @if ($datas['pre']['code'])href="/show-{{$datas['bookCode']}}-{{$datas['pre']['code']}}"@endif><< {{$datas['pre']['name']}}</a>
　  <a href="/book-{{$datas['bookCode']}}">目录</a>　
    <a @if ($datas['next']['code'])href="/show-{{$datas['bookCode']}}-{{$datas['next']['code']}}"@endif>{{$datas['next']['name']}} >></a>
</span>
<div class="foot_comm">
    <div>
        <!--<img src="../../img/shang2.png" data-bd-imgshare-binded="1"></div>
        本站所列电子书为方便之用，请大家尽可能购买实体书。本站
        <a href="">书城<img src="../../img/bookicon.png" data-bd-imgshare-binded="1"></a>-->
        <div style="font-size:17px;color:#ff0000;font-weight:bold;margin-bottom:10px;"></div>
        Copyright &copy; 2019-
        <script language="javascript" type="text/javascript">var thisYear = new Date(); document.write(thisYear.getFullYear());</script>
        <a href="http://beian.miit.gov.cn/">工业和信息化部备案管理系统网站 {{$currentIcp}}</a>
    </div>
</div>

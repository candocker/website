<div class="col-md-1 sidebar">
    <div class="content-sidebar">
        <dl id="goto">
            <dt style="top: 13px;"><span class="show-list"></span></dt>
            @foreach ($subInfos as $subCode => $subInfo)
            <dd >
			    <a href="#{{$subInfo['code']}}" class="auto-scroll" data-offset="-20" data-speed="500">{{$subInfo['name']}}</a>
            </dd>
            @endforeach
        </dl>
    </div>
</div>

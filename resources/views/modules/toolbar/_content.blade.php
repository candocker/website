<div class="col-md-11">
    @foreach ($subInfos as $subInfo)
	<div class="part" id="{{$subInfo['code']}}" data-title="{{$subInfo['name']}}">
        <h2 class="has_link ">
            <strong>
				<a href="/toolbar_{{$subInfo['code']}}.html" title="{{$subInfo['name']}}" rel="category tag">{{$subInfo['name']}}</a>
            </strong>
			<!--<a href="/toolbar_{{$subInfo['code']}}.html" title="{{$subInfo['name']}}" rel="category tag" class="category_more">更多 &gt;</a>-->
        </h2>
        <div class="items ">
            <div class="row">
                @foreach ($subInfo['tools'] as $tool)
                <div class="col-xs-6 col-sm-4 col-md-3 mbp-item">
                    <div class="item">
					    <a href="{{$tool['website']}}" target="_blank" title="{{$tool['name']}}" class="item-app">
						    <img class="app-logo lazy" src="{{$tool['logo']}}" data-original="{{$tool['logo']}}" alt="{{$tool['name']}}" onerror="this.src='http://39.106.102.45/common/asset-third/promotion/img/d6be8-3481.svg'" style="display: block;">
							<h3 class="app-title">{{$tool['name']}}</h3>
                        </a>
                        <a href="http://123.meibp.com/506.html" target="_blank" title="《微信公众平台》">
					    <a href="{{$tool['website']}}" target="_blank" title="{{$tool['description']}}">
						    <p class="app-detail">{{$tool['description']}}</p>
                        </a>
                        <div class="app-nums"><span></span></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
    {{--<?php //echo $this->render('_content-article'); ?>
	<?php //echo $this->render('_content-footer'); ?>--}}
    <div class="content-linkto "></div>
</div>

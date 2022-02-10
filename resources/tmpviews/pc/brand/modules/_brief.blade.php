@inject('brandPresenter', 'ModuleInfocms\Presenters\BrandPresenter')
<div id="brandlogo" class="">
    <div class="midinfo">
        <div class="img">
            <div class="imgbg">
                <div class="aimg">
                    <a rel="nofollow" href="{{$data->name}}" target="_blank">
                        <img width="207" height="90" src="{{$data->pointAttachmentUrl('logo')}}" />
                    </a>
                </div>
            </div>
        </div>
        <div class="brandname posbtn">
            <div class="dhidden infobox">
                <span class="b font20 line18em rline">{{$data['name']}}</span>
                <span class="companyname font16">上海晨光文具股份有限公司</span>
            </div>
            <em class="bflag bgfff">
                <a href="https://www.cnpp.cn/answer/51.html" target="_blank">
                    <img src="{{$commonAssetUrl}}/sguide/img/844c7-4229.png" height="18" />
                    <span>待认领</span>
                </a>
            </em>
            <div class="btnlist col4">
                @foreach ($brandPresenter->getWebsiteDatas($data) as $website)
                <a rel="nofollow" isconvert="1" href="{{$website->website_url}}" class="btn" target="_blank">
                    <i class="iconfont icon-qijiandian"></i>{{$website->type}}
                </a>
                @endforeach
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

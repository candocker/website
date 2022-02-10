@inject('brandPresenter', 'ModuleInfocms\Presenters\BrandPresenter')
<div class="blockinfo productcol " id="pos_productlist">
    <div class="blocktitle font26 ccc style1 ">
        <span class="color1">
            <em class="dhidden">产品（117个）</em>
            <i class="l bg1"><i class="bg2"></i></i>
            <i class="r bg2"><i class="bg3"></i></i>
            <em class="l bg3"></em>
            <em class="r bg3"></em>
        </span>
    </div>
    <div class="itembox">
        <ul>
            @foreach ($brandPresenter->getProductDatas($data, 8) as $product)
            <li class="item bindhover" hover="$(this).find('.baojialist').slideDown(300)" hover2="$(this).find('.baojialist').slideUp(0)">
                <div class="imgbox">
                    <a target="_blank" isconvert=1 href="{{$product->buy_url}}">
                        <img src="{{$product->pointAttachmentUrl('thumb')}}" />
                    </a>
                </div>
                <div class="cont ">
                    <div class="title font16">
                        <em class="num font14"><i>1</i></em>
                        <a target="_blank" isconvert=1 href="{{$product->buy_url}}" class="c333 ">{{$product->name}}</a>
                    </div>
                    <div class="other ">
                        <div class="price font18">￥12.2</div>
                        <div class="salenum font12">月销:9000+</div>
                    </div>
                    <div class="clear"></div>
                    <div class="shopurl hasbj font16">
                        <a target="_blank" isconvert=1 href="{{$product->shop_url}}" class="dhidden color1">
                            <em class="bg1"><i class="iconfont icon-xuangou"></i></em>{{$product->shop_name}}
                        </a>
                        <div class="bnum orange">2店</div>
                    </div>
                </div>
                <div class="baojialist" style="display:none;">
                    <div class="li dhidden">
                        <a target="_blank" isconvert=1 href="{{$product->shop_url}}" target="_blank" class="fff dhidden shopname">{{$product->shop_name}}</a>
                        <a target="_blank" isconvert=1 href="{{$product->buy_url}}" class="mprice">
                            <em>￥12.2</em>
                            <em class="c999">（1支）</em>
                        </a>
                    </div>
                    <div class="li dhidden">
                        <a target="_blank" isconvert=1 href="https://union-click.jd.com/jdc?e=&p=AyIGZRprFQMTBlQaWxUHEDcRRANLXSJeEF4aVwkMGQlLBkgdSVJKSQVJHEpYAE8SCQITBlQaWhUCFwVKQh5JXyJdPU48RWN5UTUcPQ95bFclfyxrXlpnWRdrEgcUBVwcXRcyGg9cGlsQByI3VRprQ2wSBlQaWhQCEgJXK1kUAxEDUx1SFQUiB1ETWB0AGgRQElkRACIAVRJrFQAVBVUcUxEFGwA7WmslMhE3ZStYJQIiWBFGBiUAEwZREg%3D%3D" target="_blank" class="fff dhidden shopname">晨光自营旗舰店</a>
                        <a target="_blank" isconvert=1 href="https://union-click.jd.com/jdc?e=&p=AyIGZRJTHAsTB10TUiUBFwdVE1slRk1fC0RrTEdXRhcQRQtaV1MJBABAHUBZCQVYEAISD1UEAlBeTzcwYwJUY2IDEHk8Zxx1GTVGXXZAElQTF1clBRcBVxJcEwAiD10SWhUHFzdlG1olVHwHVBpaFAMSB1AZaxcAGwVWHF8XAiIHURNeHAoUBlMYXBACIgddH2sVABUFVRxTEQUbADtaayUyETdlK1slASJZOxoLRlUXUlQcNU9QTFkOTgsQbBcOUxtfEgoWN1caWhcA" class="mprice">
                            <em>￥26.9</em>
                            <em class="c999">（12支）</em></a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <div class="clear"></div>
    </div>
    <div class="blockmorebox font16 ">
        <a class="c333 morebtn" target="_blank" href="https://www.maigoo.com/brand/product_2411.html">
            <i class="iconfont icon-gengduo"></i>
            <span>更多</span></a>
        <div class="clear"></div>
    </div>
</div>
<div class="bline bline1"></div>

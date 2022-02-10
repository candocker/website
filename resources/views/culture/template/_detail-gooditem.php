<script id="isbnItemListTmpl" type="text/x-dot-template">
    {{~it.list:item:index}}
    <li class="isbn-item">
        <div class="isbn-item-info clearfix">
            <img class="isbn-item-img pull-left" src="{{=item.smallImg}}" alt="{{=item.itemName}}">
            <div class="isbn-item-main pull-left">
                <div class="isbn-item-name">{{=item.itemName}}</div>
                <div class="isbn-item-price">
                    <i class="symbol">￥</i><span class="isbn-item-price-num">{{=item.price}}</span>
                    {{?item.promotionId}}
                    <span class="promotion">满{{=item.condit}}包邮</span>
                    {{?}}
                </div>
                <div class="isbn-item-tags">
                    <span class="isbn-item-tag">{{=item.quality}}</span>
                    {{?item.isSeller}}
                    <span class="isbn-item-tag">包邮</span>
                    {{??}}
                    {{?item.totalFee}}
                    <span class="isbn-item-tag">{{=item.shippingName + item.totalFee+'元'}}</span>
                    {{??}}
                    <span class="isbn-item-tag">暂无运费信息</span>
                    {{?}}
                    {{?}}
                </div>
            </div>
            <i class="icon-cart add-cart-btn" itemid="{{=item.itemId}}" shopid="{{=item.shopId}}"></i>
        </div>
        {{?item.importantDesc}}
        <div class="quality-describe">{{=item.importantDesc}}</div>
        {{?}}
    </li>
    {{~}}
    {{?it.noMore}}
    <p class="no-more">—&nbsp;&nbsp;END&nbsp;&nbsp;—</p>
    {{?}}
</script>

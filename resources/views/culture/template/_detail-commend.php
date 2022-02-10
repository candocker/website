<script id="commend_top_list" type="text/x-dot-template">
            {{? it.publicData.onlyItem == 1}}
            <div class="good-view">
                <div class="see-cur-item {{= it.isCheck ? 'check' : 'uncheck'}}" isCheck="{{= it.isCheck ? true : false}}">
                    <i></i>只看当前商品
                </div>
                <span class="good-num"><i class="color_666">好评率</i> <i class="font_weight_550">{{= it.publicData.goodReviewRate}}</i></span>
            </div>
            {{?}}
            <div class="tag-list-wrap" >
                <div class="tag-list-con maxheight" >
                    <ul class="shopcon-tag-list">
                        {{~it.publicData.reviewTagNum:data:i }}
                         <li rating="{{= data.rating}}" class="{{= it.currentTag == data.rating ? 'active-tag' : ''}}">{{= data.tagName}}
                             <i class="fon-wei">{{= data.rating != 'all' ? data.num : ''}}</i>
                         </li>
                        {{~}}
                    </ul>
                </div>
                <div class="open" isUp="true">
                    <span class="open-con">展开</span>
                    <i class="up"></i>
                </div>
            </div>
</script>

<script id="list-template" type="text/x-dot-template">
    <!--数组循环-->
    <div id="menu">
        {{~it["data"]:element:i}}
            {{? i==0}}
                <div class="menuItem active" data-index="{{= i}}">
                    <h2 class="name">{{= element.name}}</h2>
                </div>
            {{??}}
                <div class="menuItem" data-index="{{= i}}">
                    <h2 class="name">{{= element.name}}</h2>
                </div>
            {{?}}
        {{~}}
    </div>
    <div id="content">
        {{~it["data"]:element:i}}
            <h3 class="title" id="title{{= i}}">{{= element.name}}</h3>
            <div class="itemList">
            {{~element.list:item:j}}
                <a class="item" href="{{= it["site"].s_mbook}}C{{= item.pinyin}}/">
                    <div>
                        <img class="lazy" src="data:image/png;base64,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" data-src="{{= item.img}}" alt="">
                        <div class="backgroundImg"></div>
                    </div>
                    <div class="des">
                        <div class="name">
                            {{= item.name}}
                        </div>
                        <div class="num">
                            {{= item.count}}
                        </div>
                    </div>
                </a>
            {{~}}
            </div>
        {{~}}
    </div>
    <div id="title{{= it["data"].length}}"></div>
</script>

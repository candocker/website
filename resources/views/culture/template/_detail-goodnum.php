<script id="auto-goodNum" type="text/x-dot-template">
    {{? it.autoGoodData.autoGoodNum != '0' || it.autoGoodData.noContentNum != '0'}}
    <div class="userless-tip">
        {{? it.autoGoodData.autoGoodNum != '0'}}
        <p>{{= it.autoGoodData.autoGoodNum}}个用户15天内未评价，系统自动好评</p>
        {{?}}
        {{? it.autoGoodData.autoGoodNum != '0' && it.autoGoodData.noContentNum != '0'}}
        <div class="auto-line"></div>
        {{?}}
        {{? it.autoGoodData.noContentNum != '0'}}
        <p class="fold-tip">已折叠对您购买参考帮助不大的评价
            <span class="see-continue seeUselessCom">继续查看 <i></i></span>
        </p>
        {{?}}
    </div>
    {{?}}
</script>

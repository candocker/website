<div class="topBg">
    <div class="topMenu list">
        <ul>
            <li class="a list">
                <div style="width:1200px;">
                    <ul>
                        <li>
                            <span id="topUserBox"></span>
                            <script language="javascript" type="text/javascript">isTopTime = '1';</script>
                            <span id='topTimeBox'></span>
                        </li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </li>
            <li class="b">
                <a href="http://m.yac8.com/" target="_blank">
                    <img id="topWapBtn" src="<?= config('app.assetUrl'); ?>/culture/img/3d6e2-8961.gif" alt="WAP手机版" style="margin:5px 0 0 4px;cursor:pointer;float:right;" /></a>
                <img src="<?= config('app.assetUrl'); ?>/culture/img/01bb4-2415.gif" alt="RSS订阅" style="margin:6px 0 0 4px;cursor:pointer;float:right;" onclick="OpenPopup('rss');" />
                <span onclick="AddFavorite(document.location.href,document.title);" title="加入收藏" class="font1_2d pointer">加入收藏</span>&nbsp;
                <span id="setHomeA" onclick="SetHome($id('setHomeA'),document.location.href);" title="设为首页" class="font1_2d pointer">设为首页</span></li>
        </ul>
        <span id='wapQrBox' style='width:152px;position:relative;float:right;z-index:99999;display:none;'></span>
    </div>
    <div class="clear"></div>
</div>

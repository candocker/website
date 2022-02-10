<div class="btn-toolbar">
    <div class="btn-group mr-2">
        <a class="btn btn-warning wn"><i class="fa fa-star"></i>我的收藏</a>
    </div>
    <div class="btn-group mr-2">
        <a class="btn btn-light t wn" href="#" data-toggle="modal" data-target="#Login" title="注册登录后可添加自己常用的网站、云同步">
            <i class="fa fa-plus"></i>登录添加
        </a>
    </div>
    <div class="btn-group mr-2">
        <a class="btn btn-light wn" href="http://www.baidu.com" target="_blank">test</a>
        <a class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" style="">
            <input type="hidden" name="webid" value="6804">
            <!--<a class="dropdown-item" href="php/editweb.php?webid=6804" data-toggle="modal" data-target="#editweb">修改</a>-->
            <a class="dropdown-item" onclick="return confirm('确定要删除吗？')" href="php/delweb.php?webid=6804">删除</a>
      </div>
    </div>
    <div class="btn-group mr-2">
        <a class="btn btn-light t wn" href="#" data-toggle="modal" data-target="#addweb" title="最多可添加8个网站，下面已收录的不建议重复添加">
            <i class="fa fa-plus"></i> 添加
        </a>
    </div>
</div>

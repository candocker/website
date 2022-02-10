<div class="modal fade" id="addweb" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddTitle">
                    <b>
                        <i class="fa fa-plus"></i>添加网站</b>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-body" method="post" action="php/addweb.php">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="usw_us_id" value="">
                        <label for="exampleDropdownFormEmail1">网站名称</label>
                        <input type="text" class="form-control" id="webname" name="webname" placeholder="建议精简，不超过6个字" maxlength="15" required="required"></div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1">网址</label>
                        <input type="text" class="form-control" id="urls" name="weburl" placeholder="建议从浏览器复制，手输可能出错" maxlength="180" required="required"></div>
                    <!--提示-->
                    <input type="submit" class="btn btn-primary" id="adds" name="submit" value="添加"></input>
                    <small class="form-text text-muted">
                        <i class="fa fa-exclamation-circle"></i>网址必须以http://或https://开头</small>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Start-->
<div class="modal fade" id="editweb" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditTitle">
                    <b>
                        <i class="fa fa-edit"></i>修改网站</b>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-body" method="post" action="php/editweb_server.php">
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">网站名称</label>
                        <input type="text" class="form-control" id="webname" name="webname" placeholder="建议精简，不超过6个字" minlength="1" maxlength="15" required="required" value=""></div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1">网址</label>
                        <input type="text" class="form-control" id="url" name="weburl" placeholder="建议从浏览器复制，手输可能出错" maxlength="180" required="required" value=""></div>
                    <input type="submit" class="btn btn-primary" value="确认修改"></input>
                    <small class="form-text text-muted">
                        <i class="fa fa-exclamation-circle"></i>网址必须以http://或https://开头</small>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit END -->

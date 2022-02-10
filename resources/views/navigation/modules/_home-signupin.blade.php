<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LoginTitle">
                    <b>登 录</b>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-body" action="php/login_check.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="zh" name="emailphone" placeholder="邮箱/手机号" maxlength="50" required="required"></div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="密码" maxlength="18" required="required"></div>
                    <button type="submit" class="btn btn-primary" name="submit">登 录</button>
                    <small class="form-text text-muted">没有账号？
                        <a href="#" id="gotoReg" style="color: #f90">先去注册</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <!--<a href="fdpwd.html" target="_blank" style="color: #9e9e9e;">忘记密码</a>--></small></form>
            </div>
            <!--<div class="modal-footer">其他方式登录 &nbsp;
            <i class="fa fa-wechat" style="color: #62c751;opacity: 0.3"></i> &nbsp;
            <i class="fa fa-qq" style="color: #50C8FD;opacity: 0.3"></i> &nbsp;
            <i class="fa fa-weibo" style="color: #fc661f;opacity: 0.3"></i></div>-->
        </div>
    </div>
</div>
<div class="modal fade" id="Reg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="RegTitle">
                    <b>注 册</b>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-body" action="php/register_check.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="昵称（不超过15个字）" minlength="1" maxlength="15" required="required"></div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="emailphone" placeholder="输入有效的邮箱/手机号" maxlength="50" required="required"></div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" name="password" placeholder="密码（6~18位）" minlength="6" maxlength="18" required="required"></div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="confirm_pwd" name="pwd" placeholder="确认密码（请记牢）" minlength="6" maxlength="18" required="required"></div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="authcode" name="authcode" placeholder="请输入下图 4 位验证码" value="" minlength="4" maxlength="4" required="required"></div>
                    <div class="form-group">
                        <!--<img src="/captcha?r=12618444" id="captcha_img" width="100" height="30">
                        <a href="javascript:void(0)" onclick="document.getElementById('captcha_img').src='/captcha?r='+Math.random()">看不清换一个</a>-->
                    </div>
                    <button type="submit" class="btn btn-primary" id="sign" name="submit">注 册</button>
                    <small class="form-text text-muted">已有账号，
                        <a href="#" id="gotoLogin" style="color: #f90">去登录</a></small>
                </form>
            </div>
            <div class="modal-footer">注册即代表同意
                <a href="gzxy.html" target="_blank" style="color: #999">[果汁协议]</a></div>
        </div>
    </div>
</div>

@if (Auth::check())
欢迎回来，{{Auth::user()->username}}
<span class="separator"> ｜ </span>
<a href="/dashboard">用户中心</a>
<span class="separator"> ｜ </span>
<a href="/logout">退出</a>
@else
<a href="javascript::" id="username" data-toggle="modal" data-target="#model_signin">登录</a><span
    class="separator"> ｜ </span>
<a href="javascript::" id="username" data-toggle="modal" data-target="#model_signup">注册</a>

<!-- signup Modal -->
<div class="modal fade" id="model_signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span
                        aria-hidden="true">&times;</span><span
                        class="sr-only">关闭</span></button>
                <h4 class="modal-title" id="myModalLabel">注册您的账号...</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-success" id="signup_alert" role="alert" style="display:none">
                    恭喜您，注册成功！您可以点击前往<a href="/dashboard">个人中心</a>，或<a href="javascript::"
                                                                      data-dismiss="modal">关闭</a>弹出层后继续访问。
                </div>

                <p style="color:#666;">所有会员信息均会被保密！
                    <small>(密码将会被加密存储，任何人均不能获得你的密码)</small>
                    <br>禁止刊登任何非法广告，拒绝房屋中介！
                    <small>(否则管理员有权删除你的广告和账号)</small>
                </p>
                <div>
                    <form id="signup-form" class="form-horizontal" method="post" action="/signup">

                        <div id="div_id_username" class="form-group"><label for="id_username"
                                                                            class="control-label col-lg-3 requiredField">
                                昵称<span class="asteriskField">*</span></label>

                            <div class="controls col-lg-7"><input class="required textinput textInput form-control"
                                                                  id="id_username" maxlength="30" name="username"
                                                                  type="text" placeholder="可输入6到14个中文字符"/></div>
                        </div>
                        <div id="div_id_email" class="form-group"><label for="id_email"
                                                                         class="control-label col-lg-3 requiredField">
                                常用邮箱<span class="asteriskField">*</span></label>

                            <div class="controls col-lg-7"><input class="required textinput textInput form-control"
                                                                  id="id_email" maxlength="75" name="email"
                                                                  type="text"/>

                                <p id="hint_id_email" class="help-block small">网站不会向您发送广告邮件</p>

                            </div>
                        </div>
                        <div id="div_id_password" class="form-group"><label for="id_password"
                                                                            class="control-label col-lg-3 requiredField">
                                登录密码<span class="asteriskField">*</span></label>

                            <div class="controls col-lg-7"><input class="required textinput textInput form-control"
                                                                  id="id_password" name="password"
                                                                  type="password" placeholder="请输入8至26个错综复杂的字符成为您的密码"/>
                            </div>
                        </div>
                        <div class="form-group"><label class="control-label col-lg-3 requiredField">
                                重复密码<span class="asteriskField">*</span></label>

                            <div class="controls col-lg-7"><input class="required textinput textInput form-control"
                                                                  name="password_confirmation"
                                                                  type="password"/></div>
                        </div>


                        <div class="form-action">
                            <div id="new-property">
                                <a href="javascript:" id="signup_submit_a"
                                   onclick="onSignup($('#signup-form')); return false;">注册</a>
                            </div>
                        </div>
                    </form>


                </div>
                <!--                    <div class="modal-footer">-->
                <!--                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <!--                        <button type="button" class="btn btn-primary">Save changes</button>-->
                <!--                    </div>-->
            </div>
        </div>
    </div>

</div>

<!-- signin Modal -->
<div class="modal fade" id="model_signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span
                        aria-hidden="true">&times;</span><span
                        class="sr-only">关闭</span></button>
                <h4 class="modal-title" id="myModalLabel">登录您的账号...</h4>
            </div>
            <div class="modal-body">
                <p style="color:#666;">
                    <br>禁止刊登任何非法广告，拒绝房屋中介！
                    <small>(否则管理员有权删除你的广告和账号)</small>
                </p>
                <div>
                    <form id="signin-form" class="form-horizontal" method="post" action="/signin">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                        <div id="div_id_email" class="form-group"><label for="id_email"
                                                                         class="control-label col-lg-3 requiredField">
                                注册邮箱<span class="asteriskField">*</span></label>

                            <div class="controls col-lg-7"><input class="required textinput textInput form-control"
                                                                  id="id_email" name="email" type="text"/>
                            </div>
                        </div>
                        <div id="div_id_password" class="form-group"><label for="id_password"
                                                                            class="control-label col-lg-3 requiredField">
                                登录密码<span class="asteriskField">*</span></label>

                            <div class="controls col-lg-7"><input class="required textinput textInput form-control"
                                                                  id="id_password" name="password"
                                                                  type="password"/>

                                <p id="hint_id_email" class="help-block small">
                                    <a href="javascript:alert('即将开放！')">忘记密码了？</a></p>
                            </div>
                        </div>

                        <div class="form-action">
                            <div id="new-property">
                                <a href="javascript:" id="signin_submit_a"
                                   onclick="onSignin($('#signin-form')); return false;">登录</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endif
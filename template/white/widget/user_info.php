<?php
if(!defined('IN_KKFRAME')) exit();
$uinfo = get_baidu_userinfo($uid);
$user = DB::fetch_first("SELECT uid, username, email FROM member WHERE uid='{$uid}'");
?>
<h2>账户信息</h2>
<div class="tab tab-binded hidden">
<p>您的账号正常。</p>
<hr>
<br/>
<p>
账户：<?php echo $user['username'];?><br/>
邮箱：<?php echo $user['email'];?><br/><br/>
</p>
<br>
<div class="baidu_account"></div>
<br>
<p><a href="index.php?action=clear_cookie&formhash=<?php echo $formhash; ?>" id="unbind_btn" class="btn red">解除绑定</a> &nbsp; (解除绑定后自动签到将停止)</p>
</div>
<div class="tab tab-bind">
<p>您还没有绑定百度账号！</p>
<br>
<p>只有绑定百度账号之后程序才能自动进行签到。</p>
<p>您可以使用百度通行证登陆，或是手动填写 Cookie 进行绑定。</p>
<br>
<p><a href="#guide" class="btn submit">使用“配置向导”进行绑定</a></p>
</div>
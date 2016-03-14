<?php
if(!defined('IN_KKFRAME')) exit();
?>
<div id="content-login" class="center-box">
<img src="./template/simple/style/no_avatar.png" class="avatar">
<form method="post" action="member.php?action=login">
<div class="login-info">
<p><input type="text" name="username" required="" tabindex="1" placeholder="用户名"></p>
<p><input type="password" name="password" required="" tabindex="2" placeholder="密码"></p>
</div>
<p><input type="submit" value="登录" tabindex="3"></p>
</form></div>
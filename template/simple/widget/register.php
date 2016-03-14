<?php
if(!defined('IN_KKFRAME')) exit();
?>
<div id="content-register" class="hidden center-box">
<img src="./template/simple/style/no_avatar.png" class="avatar">
<form method="post" action="member.php?action=register">
<div class="login-info">
<p><input type="text" name="<?php echo $form_username; ?>" placeholder="用户名" required tabindex="1"></p>
<p><input type="password" name="<?php echo $form_password; ?>" placeholder="密码" required tabindex="2"></p>
<p><input type="text" name="<?php echo $form_email; ?>" placeholder="邮箱" required tabindex="3"></p>
<?php if($invite_code) echo '<p><input type="text" name="invite_code" placeholder="邀请码" required tabindex="4"></p>'; ?>
</div>
<p><input type="submit" value="注册" tabindex="5"></p>
</form></div>
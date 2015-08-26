<?php
if(!defined('IN_KKFRAME')) exit();
?>
<?php
$user = DB::fetch_first("SELECT uid, username, email FROM member WHERE uid='{$uid}'");
?>
<h2>设置</h2>
<p>绑定邮件：</p>
<p>Email: <b><?php print_r($user['email']);?></b>  <a href="#setting" onclick="createWindow().setTitle('系统消息').setContent('当前无法自助修改，请通过群或者联系邮箱 <b>i@loacg.com</b><br/>附加要修改的电子邮件地址以及您的账户(注：请注明原邮件').addCloseButton('确定').append();">改绑申请</a></p>
<p>注释：邮件地址用于接收签到报告，服务器公告等 (#ﾟДﾟ) </p>
<form method="post" action="index.php?action=update_setting" id="setting_form" onsubmit="return post_win(this.action, this.id)">
<input type="hidden" name="formhash" value="<?php echo $formhash; ?>">
<p>签到方式：</p>
<p><label><input type="radio" name="sign_method" id="sign_method_3" value="3" checked readonly /> V3.0 (模拟客户端签到 +8经验)</label></p>
<p>附加签到：</p>
<p><label><input type="checkbox" disabled name="zhidao_sign" id="zhidao_sign" value="1" /> 自动签到百度知道</label></p>
<p><label><input type="checkbox" disabled name="wenku_sign" id="wenku_sign" value="1" /> 自动签到百度文库</label></p>
<p>报告设置：</p>
<p><label><input type="checkbox" checked disabled name="error_mail" id="error_mail" value="1" /> 当天有无法签到的贴吧时给我发送邮件</label></p>
<p><label><input type="checkbox" disabled name="send_mail" id="send_mail" value="1" /> 每日发送一封签到报告邮件</label></p>
<p><input type="submit" value="保存设置" /></p>
</form>
<?php HOOK::run('user_setting'); ?>
<br>
<p>签到测试：</p>
<p>随机选取一个贴吧，进行一次签到测试，检查你的设置有没有问题</p>
<p><a href="index.php?action=test_sign&formhash=<?php echo $formhash; ?>" class="btn" onclick="return msg_redirect_action(this.href)">测试签到</a></p>
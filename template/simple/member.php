<?php
if(!defined('IN_KKFRAME')) exit();
$extra_title = getSetting('extra_title');
$title = $extra_title ? "用户中心 - 贴吧签到助手 - {$extra_title}" : '用户中心 - 贴吧签到助手';
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<?php include template('widget/meta'); ?>
</head>
<body>
<div class="wrapper" id="page_login">
<h1>贴吧签到助手+</h1>
<p class="title_desc">麻麻再也不用担心我断签了~</p>
<?php include template('widget/login'); ?>
<?php include template('widget/register'); ?>
<?php include template('widget/find_password'); ?>
<p class="other">
<a href="javascript:;" id="menu_login" class="current">已有帐号？点击登录</a>
<?php if(!getSetting('block_register')) { ?><a href="javascript:;" id="menu_register">注册新帐号</a><?php } ?>
<a href="javascript:;" id="menu_lostpass">找回密码</a>
</p>
<div class="footer">
<ul>
<li>贴吧签到助手 <?php echo VERSION; ?></li>
<li>&copy;2014  <a href="http://www.ikk.me" target="_blank">kookxiang</a> - <a href="http://www.kookxiang.com" target="_blank">KK's Laboratory</a> - <a href="https://me.alipay.com/kookxiang" target="_blank">赞助开发</a><?php if(getSetting('beian_no')) echo ' - <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">'.getSetting('beian_no').'</a>'; ?></p></li>
</ul>
</div>
<script src="<?php echo jquery_path(); ?>"></script>
<script src="./template/simple/js/member.js?version=<?php echo VERSION; ?>"></script>
<?php HOOK::run('member_footer'); ?>
</div>
</body>
</html>
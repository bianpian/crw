<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $seo['title'];?></title>
<meta name="Keywords" content="<?php echo $seo['keywords'];?>">
<meta name="Description" content="<?php echo $seo['description'];?>">
<link href="templates/<?php echo $CFG['tplname'];?>/style/reset.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/style.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/reg.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/validator/validator.min.js"></script>
<link href="js/validator/validator.css" type="text/css" rel="stylesheet" />
</head>
<body class="home-page">
<div class="wrapper">

<?php include template(header); ?>

<!-- 主体 -->
<form name="reg" method="post" action="member.php" >
<div id="content">
<div id="regk">
<div id="regz"> 用户注册：</div>
<div class="regc">
<div class="regc_1 clearfix">
<span class="left"><span class="red">*</span>设置一个用户名</span>
<input class="input0" type="text" id="username" name="username" /> <span id=c_username></span></div>
<div class="regc_1 clearfix"><span class="left"><span class="red">*</span>请设置一个密码</span><input class="input0" type="password" id="password" name="password" /> <span id=c_password></span></div>
<div class="regc_1 clearfix"><span class="left"><span class="red">*</span>确认下你的密码</span><input class="input0" type="password" id="repassword" name="repassword" /><span id=c_repassword></span></div>

<div class="regc_1 clearfix"><span class="left"><span class="red">*</span>您电子邮件地址</span><input class="input0" type="text" id="email" name="email" /> <span id="c_email"></span></div>

<div class="regc_1 clearfix"><span class="left"><span class="red">*</span>问题验证</span>
                <input type="text" name="answer" id="answer" size="20" class="textInt"/>
<input type="hidden" id="vid" name="vid" value=<?php echo $verf['vid'];?> />
问题：<?php echo $verf['question'];?>？&nbsp;<span id=imgid></span><span id=c_checkver></span>
</div>

<div class="regc_1 clearfix">
<input type="hidden" name="act" value="act_register">
<input type="hidden" name="submit" value="1">
<input type="submit" name="submit" value="提交注册信息">&nbsp;&nbsp;已经有账号？请 <a href="member.php?act=login&refer=<?php echo $PHP_URL;?>" >登陆</a>
</div></div>
</div>
</div>
</form>
<!-- 主体 结束 -->

<?php include template(footer); ?>

</div>
<script type="text/javascript">
$.validator("username")
.setDefaultMsg("不超过8个汉字，或16个字符(数字，字母和下划线)。")
.setFocusMsg("不超过8个汉字，或16个字符(数字，字母和下划线)。")
.setRequired("请填写用户名。")
.setServerCharset("GBK")
.setStrlenType("byte")
.setMaxLength(16, "不超过8个汉字，或16个字符(数字，字母和下划线)。")
.setAjax("member.php?act=ajax&type=username", "此用户名已被注册，请另换一个。")
.setCallback(function(str){ return /^[\w|\u4E00-\u9FA5]*$/.test(str); }, "用户名仅可使用汉字、字母、数字或下划线。")
.setCallback(function(str){ return ! /^\d{11}$/.test(str); }, "用户名不能是11位数字，请另换一个");

$.validator("email")
.setDefaultMsg("请输入有效的电子邮箱，可用于登录您的帐户和找回密码。")
.setFocusMsg("请输入有效的电子邮箱，可用于登录您的帐户和找回密码。")
.setRequired("请填写电子邮箱。")
.setServerCharset("gbk")
.setStrlenType("symbol")
.setMaxLength(50, "邮箱格式错误")
.setRegexp(/^\w+((-|\.)\w+)*@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/, "电子邮箱格式不正确。", false)
.setAjax("member.php?act=ajax&type=email", "此电子邮箱已被注册，请另换一个。");

$.validator("password")
.setDefaultMsg("6至12个字符(数字，字母和下划线；字母区分大小写)。")
.setFocusMsg("6至12个字符(数字，字母和下划线；字母区分大小写)。")
.setRequired("请填写密码。")
.setRegexp(/^\w+$/, "密码只能由数字、字母和下划线组成。", false)
.setServerCharset("gbk")
.setStrlenType("symbol")
.setMinLength(6, "密码太短，最少为6位。")
.setMaxLength(12, "密码不应超过12个字符。")
.setCallback(is_complex_password, "您的密码太过简单，为保证安全请更换更复杂的密码。")
.setCompareField("!=", "username", "密码不能和用户名相同。");

$.validator("repassword")
.setDefaultMsg("6至12个字符(数字，字母和下划线；字母区分大小写)。")
.setFocusMsg("请输入一致密码。")
.setRequired("请再输入一遍密码。")
.setRegexp(/^\w+$/, "密码只能由数字、字母和下划线组成。", false)
.setServerCharset("gbk")
.setStrlenType("symbol")
.setMinLength(6, "密码太短，最少为6位。")
.setMaxLength(12, "密码不应超过12个字符。")
.setCompareField("==", "password", "两次输入的密码不一致。");

$.validator("answer")
.setRequired("请填写问题验证。")
.setAjax("do.php?act=ver&vid="+$('#vid').val(), "回答不正确。");
</script>
</body>
</html>

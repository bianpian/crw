<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>" />
<title><?php echo $seo['title'];?></title>
<meta name="Keywords" content="<?php echo $seo['keywords'];?>">
<meta name="Description" content="<?php echo $seo['description'];?>">
<link href="templates/<?php echo $CFG['tplname'];?>/style/reset.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/style.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/user.css" type="text/css" rel="stylesheet" />
<script src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body class="home-page">
<div class="wrapper">

<?php include template(header); ?>

<!-- 主体 -->
<div id="content" class="clearfix">
<div class="col_main">
<!-- 会员资料 开始 -->
<div class="user_info clearfix">
<div class="pic"></div>
<div class="info_cont">
<p><span class="blue_skin"><?php echo $_username;?></span>，您好</p>
<p>注册时间：<?php echo date('Y-m-d H:i:s',$userinfo['registertime']);?>　　<span style="color:#999;">最后登陆：<?php echo date('Y-m-d H:i:s',$userinfo['lastlogintime']);?></span></p>
<p><a href="member.php?act=modify" class="green_menu menu_info">完善资料</a><a href="member.php?act=edit_password" class="green_menu menu_info">修改密码</a></p>
</div>

</div>
<!-- 会员资料 结束 -->
<!-- 基本信息 开始 -->
<div class="count_box">
<div class="hd">基本信息</div>
<div class="bd">
<p>名称：<b><?php echo $userinfo['username'];?></b></p>
<p>积分：<b><?php echo $userinfo['credit'];?></b> 分 【<a href="member.php?act=credit_rule">了解积分规则</a>】</p>
<p>信息币：<b><?php echo $userinfo['gold'];?></b> 枚 【<a href="member.php?act=gold">购买/兑换</a>】</p>
<p>资金：<b><?php echo $userinfo['money'];?></b> 元 【<a href="member.php?act=payonline">充值</a>】</p>
<p>
邮箱：<b><?php echo $userinfo['email'];?></b> <?php if(!$status) { ?><a href='member.php?act=send_check_email'>【验证邮箱】</a><?php } ?>&nbsp;&nbsp;
电话：<b><?php echo $userinfo['phone'];?></b> &nbsp;&nbsp;
QQ：<b><?php echo $userinfo['qq'];?></b>
</p>
<p>地址：<b><?php echo $userinfo['address'];?></b></p>
<?php if($notice) { ?>
<p>补全资料，发布信息更方便。<a href="member.php?act=modify"><font color=red>[点此补全资料]</font></a></p>
<?php } ?>

</div>
</div>
<!-- 我的统计 结束 -->

</div>
<div class="col_sub">
<!-- 侧边栏菜单 开始 -->
<div class="side_bar">
<ul>

<?php include template(member_left); ?>

</ul>
</div>
<!-- 侧边栏菜单 结束 -->
</div>
</div>
<!-- 主体 结束 -->

<?php include template(footer); ?>

</div>
</body>
</html>

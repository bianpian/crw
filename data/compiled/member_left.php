<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><li <?php if($act=='index') { ?>class="current"<?php } ?>><a href="member.php">会员首页</a></li>
<li <?php if($act=='modify') { ?>class="current"<?php } ?>><a href="member.php?act=modify">基本资料</a> <a href="member.php?act=avatar" class="small">头像</a></li>
<li <?php if($act=='edit_password') { ?>class="current"<?php } ?>><a href="member.php?act=edit_password">修改密码</a></li>
<li <?php if($act=='payonline') { ?>class="current"<?php } ?>><a href="member.php?act=payonline">在线充值</a></li>
<li <?php if($act=='gold') { ?>class="current"<?php } ?>><a href="member.php?act=gold">购买信息币</a></li>
<li <?php if($act=='exchange') { ?>class="current"<?php } ?>><a href="member.php?act=exchange">交易详情</a></li>
<li <?php if($act=='info') { ?>class="current"<?php } ?>><a href="member.php?act=info">我的信息</a> <a href="<?php echo $CFG['postfile'];?>" class="small">发布</a></li>
<li <?php if($act=='info_comment') { ?>class="current"<?php } ?>><a href="member.php?act=info_comment">信息评论</a> </li>
<li <?php if($act=='com') { ?>class="current"<?php } ?>><a href="member.php?act=com">企业黄页</a> <a href="postcom.php" class="small">发布</a></li>
<li><a href="member.php?act=logout">退出系统</a></li>
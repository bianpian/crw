<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>" />
<title><?php echo $seo['title'];?></title>
<meta name="Keywords" content="<?php echo $seo['keywords'];?>">
<meta name="Description" content="<?php echo $seo['description'];?>">
<link href="templates/<?php echo $CFG['tplname'];?>/style/reset.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/style.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/article.css" type="text/css" rel="stylesheet" />
<script src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body class="home-page">
<div class="wrapper">

<?php include template(header); ?>

<!-- 主体 --> 
<div id="content" class="clearfix">

<?php include template(here); ?>

<div class="col_main">
<!-- 新闻列表 -->
<div class="newsList_box">
<div class="hd"> <?php echo $seo['title'];?> </div>
<div class="bd">
<ul>
<?php if(is_array($articles)) foreach($articles AS $row) { ?>
<li><a href="<?php echo $row['url'];?>" target="_blank"><?php echo $row['title'];?></a><span><?php echo $row['addtime'];?></span></li>

<?php } ?>

</ul>
<div class="manu" style="text-align:left;"><br>

<?php include template(page); ?>
</div>
</div>
</div>
</div>
<div class="col_sub">
<!-- 推荐阅读排行 -->
<div class="tipic_news">
<div class="hd">
<span>推荐阅读排行</span>
</div>
<div class="bd">
<ul>
<?php if(is_array($pro_articles)) foreach($pro_articles AS $row) { ?>
<li><a href="<?php echo $row['url'];?>" target="_blank"><?php echo $row['title'];?></a></li>

<?php } ?>

</ul>
</div>
<div class="ft"></div>
</div>

<div class="html_box">
<div class="hd">
<span>资讯分类列表</span>
</div>
<ul>
<?php if(is_array($type)) foreach($type AS $row) { ?>
<li><a href="<?php echo $row['url'];?>"><?php echo $row['typename'];?></a></li>

<?php } ?>

</ul>
</div>
</div>
</div>
<!-- 主体 结束 -->

<?php include template(footer); ?>

</div>
</body>
</html>
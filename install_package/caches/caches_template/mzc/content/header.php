<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>梦志城建设工程</title>
	<style>
		.services-wrap{
			height:240px;
		}
	</style>

	<!-- core CSS -->
	<link href="<?php echo MZC_PATH;?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo MZC_PATH;?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo MZC_PATH;?>css/animate.min.css" rel="stylesheet">
	<link href="<?php echo MZC_PATH;?>css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo MZC_PATH;?>css/main.css" rel="stylesheet">
	<link href="<?php echo MZC_PATH;?>css/responsive.css" rel="stylesheet">
	<script src="<?php echo MZC_PATH;?>js/jquery.min.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo MZC_PATH;?>js/html5shiv.js"></script>
	<script src="<?php echo MZC_PATH;?>js/respond.min.js"></script>
	<![endif]-->
</head><!--/head-->

<body class="homepage">

<header id="header">
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p>广东梦志城建设工程有限公司</p>
				</div>
				<div class="col-xs-6">
					<div class="top-number pull-right"><p><i class="fa fa-phone-square"></i>  0752-7186360</p></div>
				</div>
			</div>
		</div><!--/.container-->
	</div><!--/.top-bar-->

	<nav class="navbar navbar-inverse" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a style="margin-top: -15px;" class="navbar-brand" href="index.html"><img src="<?php echo MZC_PATH;?>images//mengzhicheng/logo.png" alt=""></a>
			</div>

			<div class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
					<li class="<?php if(!isset($_GET['catid']))echo 'active';?>"><a href="/">网站首页</a></li>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li class="<?php if(isset($_GET['catid'])&&$_GET['catid']==$r['catid'])echo 'active';?>"><a  href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
		</div><!--/.container-->
	</nav><!--/nav-->
	<script>
		$('.nav li').on().click(function(){
			$(this).addClass('active');
			$(this).siblings().removeClass('active');
		});
	</script>
</header><!--/header-->
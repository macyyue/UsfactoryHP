<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package usfactory
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="/common/css/general.css" media="screen">
<link rel="stylesheet" href="/common/css/index.css" media="screen">
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.8.3'></script>
<script type="text/javascript" src="/common/js/script.js"></script>
<script type="text/javascript" src="/common/js/common.js"></script>
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript" src="/common/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="/common/fancybox/source/jquery.fancybox.js?v=2.1.4"></script>
<link rel="stylesheet" type="text/css" href="/common/fancybox/source/jquery.fancybox.css?v=2.1.4" media="screen" />
<script type="text/javascript">
	$(document).ready(function() {
		/*
		 *  Simple image gallery. Uses default settings
		 */

		$('.fancybox').fancybox();

		/*
		 *  Different effects
		 */
	});
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<article id="all_container">
<p class="discription"><span>ゼネコン・サブコン様における熟練技術者不足の問題を解決する会社</span></p>
<header>
<div id="hdr_container" class="clearfix">
<div id="logo">
<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/common/img/logo.png" width="200" height="40" alt=""></a></h1>
<!-- /#hdr_si_logo --></div>
<p class="tel"><a href="#"><img src="/common/img/login.png" width="170" height="30" alt=""></a></p>

<!-- /#hdr_container --></div>


<nav id="gnav">
<ul id="dMenu" class="mainNav dropmenu">
<li class="gnav01"><a href="/robot/"><img src="/common/img/gnav01.png" width="210" height="25" alt=""></a>
<ul>
<li><a href="/robot/">商品説明</a></li>
<li><a href="/inquiry/">問い合わせ</a></li>
</ul>
</li>
<li class="gnav02"><a href="/bi/"><img src="/common/img/gnav02.png" width="160" height="25" alt=""></a>
<ul>
<li><a href="/bi/">商品説明</a></li>
<li><a href="/inquiry/">問い合わせ</a></li>
<li><a href="#">ログイン</a></li>
</ul>
</li>
<li class="gnav03"><a href="/news/"><img src="/common/img/gnav03.png" width="75" height="25" alt=""></a></li>
<li class="gnav04"><a href="/media/"><img src="/common/img/gnav04.png" width="160" height="25" alt=""></a></li>
<li class="gnav05"><a href="/company/"><img src="/common/img/gnav05.png" width="85" height="25" alt=""></a></li>
<li class="gnav06"><a href="/access/"><img src="/common/img/gnav06.png" width="85" height="25" alt=""></a></li>
<li class="gnav07"><a href="/inquiry/"><img src="/common/img/inquiry.png" width="120" height="25" alt=""></a></li>
</ul>
<!-- /#gnav --></nav>

</header>


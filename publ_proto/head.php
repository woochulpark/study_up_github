<!doctype html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="format-detection" content="telephone=no"/>

	<link rel="stylesheet" href="/css/common.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/content.css">

	<link rel="stylesheet" href="/css/fullpage.css">
	<link rel="stylesheet" href="/css/slick.css">
	<link rel="stylesheet" href="/font/NotoSansKR/NotoSansKR.css">

	<title>아이펫</title>

	<script src="/js/jquery-1.8.3.min.js"></script>
	<script src="/js/TweenMax.min.js"></script>
	<script src="/js/jquery.easing.min.js"></script>
	<script src="/js/fullpage.min.js"></script>
	<script src="/js/slick.min.js"></script>
	<script src="/js/jquery.nicescroll.min.js"></script>
	<script src="/js/vendorFreeFix.js"></script>
</head>

<body>

<div id="wrap">

	<header id="header" class="<?=$pn!=99?"sub_hd":""?>">
		<div class="hd_inner">
			<h1 class="logo"><a href="/"><img src="/img/logo.png"/></a></h1>
			<ul class="menu">
				<li><a href="/story.php">ipet 스토리</a></li>
				<li>
					<a href="/insurance.php">ipet 반려견 보험</a>
					<ul class="submenu">
						<li><a href="/product/db_petsafe.php">DB손해보험 펫세이프</a></li>
						<li><a>삼성화재 반려견보험</a></li>
						<li><a>메리츠화재 펫퍼민트</a></li>
						<li><a>보험사별 비교</a></li>
					</ul>
				</li>
				<li><a href="/">커뮤니티</a></li>
			</ul>
			<div class="m-menu_btn">
				<span class="line1"></span>
				<span class="line2"></span>
				<span class="line3"></span>
			</div>
		</div>

		<div id="m-menuWrap">
			<div class="menuBox">
				<ul class="m_gnb">
					<li>
						<a href="/story.php">
							<span>ipet스토리</span>		
						</a>
					</li>
					<li>
						<a><span>ipet 반려견 보험</span><var></var></a>
						<ul class="submenu">
							<li><a><span>DB손해보험 펫세이프</span></a></li>
							<li><a><span>삼성화재 반려견보험</span></a></li>
							<li><a><span>메리츠화재 펫퍼민트</span></a></li>
							<li><a><span>보험사별 비교</span></a></li>
						</ul>
					</li>
					<li>
						<a><span>커뮤니티</span><var></var></a>
						<ul class="submenu">
							<li><a><span>DB손해보험 펫세이프</span></a></li>
							<li><a><span>삼성화재 반려견보험</span></a></li>
							<li><a><span>메리츠화재 펫퍼민트</span></a></li>
							<li><a><span>보험사별 비교</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</header>
	
	<?php if($pn!=99){?>
	<div id="subContainer">
		
	<?php }?>
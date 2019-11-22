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
	<link rel="stylesheet" href="/css/flipclock.css">
	<link rel="stylesheet" href="/font/NotoSansKR/NotoSansKR.css">

	<title>아이펫</title>

	<script src="/js/jquery-1.8.3.min.js"></script>
	<script src="/js/jquery.easing.min.js"></script>
	<script src="/js/TweenMax.min.js"></script>
	<script src="/js/fullpage.min.js"></script>
	<script src="/js/slick.min.js"></script>
	<script src="/js/jquery.nicescroll.min.js"></script>
	<script src="/js/flipclock.min.js"></script>
	<script src="/js/vendorFreeFix.js"></script>
	<script src="/js/common.js"></script>
</head>

<body>

<div id="wrap">

	<header id="header" class="<?=$pn!=99?"sub_hd":""?>">
		<div class="hd_inner">
			<h1 class="logo"><a href="/"><img src="/img/logo.png"/></a></h1>
			<ul class="menu">
				<li class="<?=$pn==1?"active":""?>"><a href="/story.php">ipet 스토리</a></li>
				<li class="<?=$pn==2?"active":""?>">
					<a href="/product/db_petsafe.php">ipet 반려견 보험</a>
					<ul class="submenu">
						<li><a href="/product/db_petsafe.php">DB손해보험 펫세이프</a></li>
						<li><a href="/product/anypet.php">삼성화재 반려견보험</a></li>
						<li><a href="/product/meritz_petpermint.php">메리츠화재 펫퍼민트</a></li>
						<!--191111 수정--><li><a href="/claim.php">보험금 청구 안내</a></li>
					</ul>
				</li>
				<li class="last <?=$pn==3?"active":""?>">
					<a href="/qna/list.php">커뮤니티</a>
					<ul class="submenu">
						<li class="<?=$board=='news'?"active":""?>">
							<a href="/news/list.php">새소식</a>
						</li>
						<li class="<?=$board=='qna'?"active":""?>">
							<a href="/qna/list.php">Q&A</a>
						</li>
						<li class="<?=$board=='faq'?"active":""?>">
							<a href="/faq.php">FAQ</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="m-menu_btn">
				<span class="line1"></span>
				<span class="line2"></span>
				<span class="line3"></span>
			</div>
		</div>

		<div id="m-menuWrap">
			<!--191101 추가--><div class="bg"></div>
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
							<li><a href="/product/db_petsafe.php"><span>DB손해보험 펫세이프</span></a></li>
							<li><a href="/product/anypet.php"><span>삼성화재 반려견보험</span></a></li>
							<li><a href="/product/meritz_petpermint.php"><span>메리츠화재 펫퍼민트</span></a></li>
							<!--191111 수정--><li><a href="/claim.php"><span>보험금 청구 안내</span></a></li>
						</ul>
					</li>
					<li>
						<a><span>커뮤니티</span><var></var></a>
						<ul class="submenu">
							<li><a href="/news/list.php"><span>새소식</span></a></li>
							<li><a href="/qna/list.php"><span>Q&A</span></a></li>
							<li><a href="/faq.php"><span>FAQ</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</header>
	
	<!--191111 추가{-->
	<div id="sideQuick">
		<ul>
			<li class="tel">
				<a href="tel:1670-9010">
					<img src="/img/icon_tel.png"/>
					<h1>고객센터</h1>
					<h2>1670-9010</h2>
				</a>
			</li>
			
			<li class="kakao">
				<a href="https://open.kakao.com/o/sOaMSXJb" target="_blank">
					<img src="/img/icon_kakao.png"/>
					<h1>@아이펫</h1>
				</a>
			</li>
			<li class="top" onclick="fullpage_api.moveTo(1)">
				<a>
				TOP
				</a>
			</li>
		</ul>
	</div>
	<!--}-->

	<?php if($pn!=99){?>
	<div id="subContainer">
		
	<?php }?>
<!doctype html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="description" content="국내최초 반려견, 반려묘 보험 상품 비교 가입 사이트 아이펫!">
<meta property="og:description" content="국내최초 반려견, 반려묘 보험 상품 비교 가입 사이트 아이펫!">
<meta name="keywords" content="반려견보험비교, 반려묘보험비교, 반려동물보험비교, 펫보험, 강아지보험, 고양이보험, 애견보험, 반려견보험, 반려묘보험 애완동물보험, 개보험, 애완견보험, 댕댕이보험, 강아지보험비교, 고양이보험비교, 강아지보험료, 강아지보험추천, 고양이보험추천, 애견보험료">
	<link rel="stylesheet" href="/css/common.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/content.css">	
	<link rel="stylesheet" href="/css/fullpage.css">
	<link rel="stylesheet" href="/css/slick.css">
	<link rel="stylesheet" href="/css/flipclock.css">
	<link rel="stylesheet" href="/font/NotoSansKR/NotoSansKR.css">
			<link rel="stylesheet" href="/css/jquery-ui.css">	
	<link rel="stylesheet" href="/css/jquery.bxslider.min.css">
	<title>아이펫 - 국내최초 반려동물 보험 상품 비교 </title>

	<script src="/js/jquery-1.8.3.min.js"></script>
	<script src="/js/jquery-ui.custom.js"></script>
	<script src="/js/TweenMax.min.js"></script>
	<script src="/js/jquery.easing.min.js"></script>
	<script src="/js/fullpage.min.js"></script>
	<script src="/js/slick.min.js"></script>
	<script src="/js/jquery.nicescroll.min.js"></script>
	<script src="/js/flipclock.min.js"></script>
	<script src="/js/vendorFreeFix.js"></script>
	<script src="/js/common.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152940581-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-152940581-1');
</script>
	<style>
		@media screen and (max-width: 1024px){
			#insu_list li a{
				font-size:0.82em !important;
			}
			#insu_list li{height:2.25em; line-height:2.25em; border-bottom:1px dashed #979797 !important;}
		}
		@media screen and (min-width: 1025px){
		#insu_list li a{	display: inline-block;max-width: 100%;font-size: 15px;color: #2f2f2f;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;text-shadow: #ffffff 1px 1px 1px !important;}
		#insu_list li {height:50px; line-height:50px; border-bottom:1px dashed #979797 !important;}
		
	</style>
</head>
<?php
	$main_chk = $this->uri->segment(1,0);
	
	if($main_chk < 1){
		$main_chk = '';
	}
?>
<body>

<div id="wrap">

	<header id="header" class="<?=( $main_chk != '') ?"sub_hd":"";?>">
		<div class="hd_inner">
			<h1 class="logo"><a href="/"><img src="/img/logo.png"/></a></h1>
			<ul class="menu">
				<li class="<?=($main_chk  == "Story")?'active':'';?>"><a href="/Story">ipet 스토리</a></li>
				<li class="<?=($main_chk  == "Product")?'active':'';?>">
					<a href="/Product/Db_petsafe">ipet 반려동물 보험</a>
					<ul class="submenu">
						<li><a href="/Product/Db_petsafe">DB손해보험 펫세이프</a></li>
						<li><a href="/Product/Anypet">삼성화재 애니펫보험</a></li>
						<li><a href="/Product/Petpermint">메리츠화재 펫퍼민트</a></li>
						<li><a href="/Product/Claim">보험금 청구 안내</a></li>
					</ul>
				</li>
				<li class="last <?=($main_chk  == "Noti" || $main_chk  == "Faq")?'active':'';?>">
						<a href="/Noti">커뮤니티</a>
						<ul class="submenu">
							<li class="<?=($main_chk  == "Noti")?'active':'';?>">
								<a href="/Noti">새소식</a>
							</li>
							<?/*
							<li class="">
								<a href="/qna/list.php">Q&amp;A</a>
							</li>*/?>
							<li class="<?=($main_chk  == "Faq")?'active':'';?>">
								<a href="/Faq">FAQ</a>
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
						<a href="/Story">
							<span>ipet스토리</span>		
						</a>
					</li>
					<li>
						<a><span>ipet 반려동물 보험</span><var></var></a>
						<ul class="submenu">
							<li><a href="/Product/Db_petsafe"><span>DB손해보험 펫세이프</span></a></li>
							<li><a href="/Product/Anypet"><span>삼성화재 애니펫보험</span></a></li>
							<li><a href="/Product/Petpermint"><span>메리츠화재 펫퍼민트</span></a></li>
							<li><a href="/Product/Claim"><span>보험 청구 안내</span></a></li>
						</ul>
					</li>
					<li>
						<a><span>커뮤니티</span><var></var></a>
						<ul class="submenu">
							<li><a href="/Noti"><span>새소식</span></a></li>
							<?/*<li><a href="/qna/list.php"><span>Q&A</span></a></li>*/?>
							<li><a href="/Faq"><span>FAQ</span></a></li>
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
				<a href="https://open.kakao.com/o/sjHkpBLb" target="_blank">
					<img src="/img/icon_kakao.png"/>
					<h1>@아이펫</h1>
				</a>
			</li>
			<li class="top" onclick="<?=($main_chk == "main" || $main_chk == '')?"fullpage_api.moveTo(1)":"go_top()"?>">
				<a>
				TOP
				</a>
			</li>
		</ul>
	</div>
	<!--}-->
	<?php if($main_chk != "main" && $main_chk != ''){?>
	<div id="subContainer">
		
	<?php }?>
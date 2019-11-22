<?php
$pn=1;
include_once('./head.php');
?>

<div class="sub_visual" style="background:url('/img/sub/sub_visual01.jpg')center; background-size:cover">
	<div class="visual_txt">
		<h1><img src="/img/logo.png"/><span>STORY</span></h1>
	</div>
</div>
<div id="ipetStory">
	<div class="section_story01">
		<div class="sub_tit animate_con">
			가족같은 <span class="point1">동반자인 반려견을 위한 다양한 보장을 위한 보험</span><br/>
			<span class="point2">"아이펫"</span>이 함께합니다.
		</div>
		<div class="monthly_expense animate_con">
			<h2>반려견 한달 평균 양육비 (월평균)</h2>
		</div>

		<div class="ranking_expense animate_con">
			<h2>가장 지출이 많은 순위(중복)</h2>
			<dl class="first">
				<dt>1위 사료간식</dt>
				<dd>
					<div class="percent_bar">
						<em class="gage"></em>
						<em class="border"></em>
					</div>
					<span class="num">88%</span>
				</dd>
			</dl>
			<dl class="second">
				<dt>2위 병원/치료비</dt>
				<dd>
					<div class="percent_bar">
						<em class="gage"></em>
						<em class="border"></em>
					</div>
					<span class="num">66%</span>
				</dd>
			</dl>
		</div>

		<div class="banner"></div>

		<div class="treatment_expense">
			<h2>반려견 상해/질병치료 <b>연간 평균비용 75.7만원</b></h2>
			<ul>
				<li>
					<div class="bg floating_circle1"></div>
					<div class="border"></div>
					<div class="circle_con">
						<div class="circle_inner">
							<h1>상해치료</h1>
							<h2>425,000원</h2>
							<img src="/img/sub/icon_treatment1.png"/>
						</div>
					</div>
				</li>
				<li>
					<div class="bg floating_circle2"></div>
					<div class="border"></div>
					<div class="circle_con">
						<div class="circle_inner">
							<h1>질병치료</h1>
							<h2>332,000원</h2>
							<img src="/img/sub/icon_treatment2.png"/>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="section_story02 ">
		<div class="sub_tit animate_con">
			<span class="point1">부담되는 통원, 입원 수술비,</span> 걱정하지 마세요~ <br/>
			<span class="point2">다양한 <b>국내 최고의 보험사가</b> "아이펫"과 함께</span> 합니다.
		</div>
		<div class="insurance_company">
			<img src="/img/sub/section_story02_company.png"/>
		</div>
	</div>

	<div class="section_story03 ">
		<div class="sub_tit animate_con">
			반려견의 다양한 보장내용을<br/>
			<span class="point1">간단한 확인만으로</span>파악하고 가입할 수 있습니다.
		</div>
		<ul class="step_list">
			<li>
				<div class="txt">
					<h1>STEP01</h1>
					<h2>내반려견 정보 입력</h2>
				</div>
				<img src="/img/sub/compensation_step01.png"/>
			</li>
			<li>
				<div class="txt">
					<h1>STEP02</h1>
					<h2>내반려견 정보 입력</h2>
				</div>
				<img src="/img/sub/compensation_step02.png"/>
			</li>
			<li>
				<div class="txt">
					<h1>STEP03</h1>
					<h2>내반려견 정보 입력</h2>
				</div>
				<img src="/img/sub/compensation_step03.png"/>
			</li>
			<li>	
				<div class="txt">
					<h1>STEP04</h1>
					<h2>내반려견 정보 입력</h2>
				</div>
				<img src="/img/sub/compensation_step04.png"/>
			</li>
		</ul>
	</div>
</div>


<script>
var st = $(window).scrollTop();
var winH = $(window).height();

$('.animate_con').each(function(){
	var animateConTop = $(this).offset().top
	if(st + winH > animateConTop){
		$(this).addClass('animated')
	}
})

$(window).scroll(function(){
	var st = $(window).scrollTop();
	var parallax_target = $('.banner');
	var target_top = parallax_target.offset().top-winH
	var rate = ((target_top-st)*100)/(winH+parallax_target.outerHeight())
	
	parallax_target.css('background-position-y',-rate+'%');

	var floatCirHeight = $('.treatment_expense ul li').outerHeight()/2
	var floatValue = (winH+st)-($('.treatment_expense ul li').offset().top+floatCirHeight)
		console.log(floatValue)
		if(floatValue*.01 < 50){
		$('.floating_circle1').css('margin-top',floatValue*.01)
		$('.floating_circle2').css('margin-top',-floatValue*.02)
		}
	
	
	$('.animate_con').each(function(){
		var animateConTop = $(this).offset().top
		if(st + winH > animateConTop){
			$(this).addClass('animated')
		}
	})
});


	
</script>


<?php
include_once('./tail.php');
?>
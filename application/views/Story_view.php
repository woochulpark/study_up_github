<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="sub_visual" style="background:url('/img/sub/sub_visual01.jpg')center; background-size:cover">
	<div class="visual_txt">
		<h1><img src="/img/logo.png"/><span>STORY</span></h1>
	</div>
</div>
<div id="ipetStory">
	<div class="section_story01">
		<div class="sub_tit animate_con">
			반려동물의<span class="point1"> 다양한 보장을 위한<dfn></dfn>
			 보험</span><br>
			<span class="point2">"아이펫"</span>이 함께합니다.
		</div>
		<div class="monthly_expense animate_con">
			<h2>반려동물 한달 평균 양육비 (월평균)</h2>
			<div class="increase_sum">
				<span class="cnt6"></span>
				<span class="cnt5"></span>
				<span class="cnt4"></span>
				<em>,</em>
				<span class="cnt3"></span>
				<span class="cnt2"></span>
				<span class="cnt1"></span>
				<var>원</var>
			</div>
		</div>

		<div class="ranking_expense animate_con">
			<div class="floating_circle circle01"><img src="/img/sub/floating_circle_img01.png"></div>
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

		<div class="treatment_expense animate_con">
			<div class="floating_circle circle02"><img src="/img/sub/floating_circle_img02.png"></div>
			<div class="falling_motion falling_figure1"></div>
			<div class="falling_motion falling_figure2"></div>
			<h2>반려동물 상해/질병치료 <dfn></dfn><b>연간 평균비용 75.7만원</b></h2>
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
			<span class="point1">부담되는 통원치료비, 입원치료비,  수술비,</span> 걱정하지 마세요~ <br/>
			<span class="point2"> <b>국내 최고의 보험사들과</b><dfn></dfn> "아이펫"이 함께</span> 합니다.
		</div>
		<div class="insurance_company">
		</div>
	</div>

	<div class="section_story03 ">
		<div class="sub_tit animate_con">
			반려동물의 다양한 보장내용을<br/>
			<span class="point1">간편하게 확인하고 </span>쉽게 가입할 수 있습니다.
		</div>
		<ul class="step_list">
			<li>
				<div class="txt">
					<h1>STEP01</h1>
					<h2>내반려동물 정보 입력</h2>
				</div>
				<img src="/img/sub/compensation_step01.png"/>
			</li>
			<li>
				<div class="txt">
					<h1>STEP02</h1>
					<h2>가입기준 연령 확인</h2>
				</div>
				<img src="/img/sub/compensation_step02.png"/>
			</li>
			<li>
				<div class="txt">
					<h1>STEP03</h1>
					<h2>가입가능 보험 확인</h2>
				</div>
				<img src="/img/sub/compensation_step03.png"/>
			</li>
			<li>	
				<div class="txt">
					<h1>STEP04</h1>
					<h2>다이렉트 보험 가입</h2>
				</div>
				<img src="/img/sub/compensation_step04.png"/>
			</li>
		</ul>
	</div>
</div>

<script>
/*section_story01 couter*/
var cnt1,cnt2,cnt3,cnt4,cnt5,cnt6;
var cntNum = $('.cnt1').length;
var time = 800;
	cnt1 = $('.cnt1').FlipClock(0, {
		clockFace: 'Counter',
		onStart: function() {
		console.log('start')
		},
	});
	cnt2 = $('.cnt2').FlipClock(0, {
		clockFace: 'Counter'
	});
	cnt3 = $('.cnt3').FlipClock(0, {
		clockFace: 'Counter'
	});
	cnt4 = $('.cnt4').FlipClock(0, {
		clockFace: 'Counter'
	});
	cnt5 = $('.cnt5').FlipClock(0, {
		clockFace: 'Counter'
	});
	cnt6 = $('.cnt6').FlipClock(0, {
		clockFace: 'Counter'
	});

	setTimeout(function() {
		var num = 0;
		var clear = setInterval(function() {
			num++;
			cnt1.increment();

			if(num >= 10){
				clearInterval(clear)
			}
		}, 100);
	});
	setTimeout(function() {
		var num = 0;
		var clear = setInterval(function() {
			num++;
			cnt2.increment();

			if(num >= 10){
				clearInterval(clear)
			}
		}, 100);
	},500);
	setTimeout(function() {
		var num = 0;
		var clear = setInterval(function() {
			num++;
			cnt3.increment();

			if(num >= 10){
				clearInterval(clear)
			}
		}, 100);
	},1000);
	setTimeout(function() {
		var num = 0;
		var clear = setInterval(function() {
			num++;
			cnt4.increment();

			if(num >= 13){
				clearInterval(clear)
			}
		}, 100);
	},1500);
	setTimeout(function() {
		var num = 0;
		var clear = setInterval(function() {
			num++;
			cnt5.increment();

			if(num >= 13){
				clearInterval(clear)
			}
		}, 100);
	},2000);
	setTimeout(function() {
		var num = 0;
		var clear = setInterval(function() {
			num++;
			cnt6.increment();

			if(num >= 11){
				clearInterval(clear)
			}
		}, 100);
	},2500);


/*section_story02*/
var comHeight = $('.insurance_company').height()
var comImgRate = 2071/458;

function comBgRotate(){
	$('.insurance_company').css('margin-left',0)
	$('.insurance_company').stop().animate({'margin-left':-comHeight*comImgRate},10000,'linear',function(){
		comBgRotate()
	})
}
 comBgRotate()
$(window).scroll(function(){
	var parallax_target = $('.banner');
	var target_top = parallax_target.offset().top-winH
	var rate = ((target_top-st)*100)/(winH+parallax_target.outerHeight())
	parallax_target.css('background-position-y',-rate+'%');

});
$(window).resize(function(){
	comHeight = $('.insurance_company').height();
	comBgRotate();
})
falling_motion();
floating_motion();



</script>
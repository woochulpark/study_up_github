<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	
	$main_chk = $this->uri->segment(1,0);

		
		if($main_chk != "main" && $main_chk != ''){?>
	</div><!--} subContainer end-->
	<footer id="footer">
			<div class="footer_top">
			<div class="inner">
				<ul class="footer_menu">
					<li><a href="/Policy/Privacy">개인정보처리방침</a></li>
					<li><a href="/Policy/Service">이용약관</a></li>
					<li><a href="/Policy/Rules">단체규약</a></li>
					<li><a href="/Policy/Sitemap">사이트맵</a></li>
				</ul>
				<div class="go_top_btn" onclick="<?=($main_chk == "main" || $main_chk == '')?"fullpage_api.moveTo(1)":"go_top()"?>">TOP</div>
				<div class="footer_family_site">
					<span>Family Site</span>
					<ul>
						<li><a href="http://bis.co.kr/" target="_blank">BIS</a></li>
						<li><a href="https://www.petsafe.co.kr/Main.do" target="_blank">펫세이프</a></li>
						<li><a href="https://ts1.toursafe.co.kr/" target="_blank">투어세이프 여행자보험</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer_bot">
			<div class="inner">
				<div class="footer_logo"><img src="/img/bis_logo.png"/></div>
				<div class="footer_cs_center">
					<h1>다이렉트 고객센터</h1>
					<a>1670·9010</a>
					<h2>상담가능시간: 평일 09시 ~ 18시</h2>
				</div>
				<div class="footer_info">
					<p>
					(주)비아이에스<br/>
					서울특별시 종로구 경희궁1길 18,2층(신문로2가)<br/>
					대표 김성일 ｜사업자등록번호636-87-00912 ｜이메일 <a href='mailto:insurance@bis.co.kr'>insurance@bis.co.kr</a><br/>
					고객센터 1670-9010｜팩스 02-2088-1673 
					</p>
					<span>Copyright BIS Co. Ltd. All Rights Reserved.</span>
				</div>
			</div>
		</div>
	</footer>
	<?php 
			}
		?>
<div><!--} wrap end-->
<form name="page_move" action="" method="POST">
		<input type="hidden" name="page" />
	</form>
<script src = '/js/jquery.popupWindow.js'></script>
<script src="/js/ipet.js"></script>
<script src = '/js/jquery.bxslider.min.js'></script>
<p id="popzone"></p>
<script>
	/*family site*/
	$('.footer_family_site > span').click(function(){
		$(this).parent('.footer_family_site').toggleClass('active')
	})

	/*menu*/
	var menuOpen = 0;
	$('.m-menu_btn').click(function(){
		if(!menuOpen){
			$('html,body').css('overflow','hidden');
			$('#header').addClass('menu_open')
			$('#m-menuWrap').stop().slideDown();
			menuOpen=1;
		}else{
			$('html,body').css('overflow','visible');
			$('#header').removeClass('menu_open');
			$('#m-menuWrap').stop().slideUp();
			menuOpen=0;
		}
	})

	$('.m_gnb > li > a').click(function(){
		$(this).parent('li').siblings().removeClass('open')
		$(this).parent('li').siblings().find('.submenu').slideUp()
		$(this).parent('li').toggleClass('open')
		$(this).next('.submenu').slideToggle()
	})

	$(document).ready(function(){
		var today = new Date();
		var closeen;
closeen = $("#petbirth").datepicker({
			showOn: "both",
				buttonImage: "/img/ico_cal.png",
				buttonImageOnly: true,
			dateFormat: "yy-mm-dd",				
				changeYear: true,
			showOtherMonths: true,
			dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
			monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
			monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],					
			
			maxDate : new Date(today),				
		});			

		$('#insu_list').bxSlider({
			mode: 'vertical',
			minSlides: 4,
			slideMargin: 0,
			auto:true,
			moveSlides:1,
			controls:false,
			pager:false,
			infiniteLoop:true,
				speed:500,
				responsive:true
		  });		

		if(!isMobile()){
				$('.tel').children('a').attr('href','#none');
				$('.tel').children('a').prop('disable','true');
				$('.tel').children('a').css('cursor','default');
				$('.footer_info p a').attr('href','#none');
				$('.cs_center').attr('href','#none');
				$('.cs_center').css('cursor','default');
			
			} else {
					img_resize();
			}
	});
	
<?php
if($main_chk != "main" && $main_chk != ''){
	?>
		 function isMobile() {
  return navigator.userAgent.indexOf('Mobi') > -1;
}
<?php
}
	?>


			function mv_board_page(plink, pageno){
			
				var mv_p_base = document.page_move;
				mv_p_base.page.value=pageno;
				//mv_p_base.target =  "shadowfrm";	
				mv_p_base.action = plink;			
				mv_p_base.submit();
			}
</script>
<!--style>
.form_box li img {position: absolute; right:10px; top:50%; transform: translateY(-50%); -wbkit-transform: translateY(-50%);width: 24px; height:24px;}
</style-->
</body>
</html>
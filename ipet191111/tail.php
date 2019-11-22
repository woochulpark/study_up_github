

	<?php if($pn!=99){?>
	</div><!--} subContainer end-->
	<footer id="footer">
			<div class="footer_top">
			<div class="inner">
				<ul class="footer_menu">
					<li><a href="/policy/privacy.php">개인정보처리방침</a></li>
					<li><a href="/policy/service.php">이용약관</a></li>
					<li><a href="/policy/rules.php">단체규약</a></li>
					<li><a href="/sitemap.php">사이트맵</a></li>
				</ul>
				<!--191101 수정--><div class="go_top_btn" onclick="go_top()">TOP</div>
				<div class="footer_family_site">
					<span>Family Site</span>
					<ul>
						<li><a href="http://bis.co.kr/" target="_blank">BIS</a></li>
						<li><a href="https://www.petsafe.co.kr/Main.do" target="_blank">펫세이프</a></li>
						<li><a href="https://toursafe.co.kr/" target="_blank">투어세이프</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer_bot">
			<div class="inner">
				<div class="footer_logo"><img src="/img/bis_logo.png"/></div>
				<div class="footer_cs_center">
					<h1>다이렉트 고객센터</h1>
					<a href="tel:1670-9010">1670·9010</a>
					<h2>상담가능시간: 평일 09시 ~ 18시</h2>
				</div>
				<!--191111 링크추가{-->
				<div class="footer_info">
					<p>
					(주)비아이에스<br/>
					서울특별시 종로구 경희궁1길 18,2층(신문로2가)<br/>
					대표 김성일 ｜사업자등록번호636-87-00912 ｜이메일 <a href="mailto:insurance@bis.co.kr">insurance@bis.co.kr</a><br/>
					고객센터 <a href="tel:1670-9010">1670-9010</a>｜팩스 02-2088-1673 
					</p>
					<span>Copyright BIS Co. Ltd. All Rights Reserved.</span>
				</div>
				<!--}-->
			</div>
		</div>
	</footer>
	<?php }?>
</div><!--} wrap end-->


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
</script>

</body>
</html>
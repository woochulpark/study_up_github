<?php
$pn=2; $sn=4;
include_once('./head.php');
?>

<div class="sub_visual" style="background:url('/img/sub/sub_visual02-4.jpg')center; background-size:cover">
	<div class="visual_txt ">
		<h1 class="white"><img src="/img/logo_white2.png"/><span>반려견 보험 비교  조회</span></h1>
	</div>
</div>
<div id="ins_search_wrap">
	<div class="counsel_top_banner">
		<div class="inner">
			<img class="logo" src="/img/logo.png"/>
			<div class="counsel_box_wrap">
				<div class="counsel_box">
					<h1>빠른상담안내</h1>
					<h2>
						다이렉트 고객센터<br/>
						(평일 오전 9시 ~ 오후 6시)
					</h2>
					<a class="cs_center" href="tel:1670·9010">
						<span class="m_show">(평일 오전 9시 ~ 오후 6시)</span>
						<em>1670·9010</em>
					</a>
					<!--191111 카카오링크추가{-->
					<a class="kakao" href=" https://open.kakao.com/o/sOaMSXJb" target="_blank">
						<span>Kakao ID</span>
						<em>@아이펫</em>
					</a>
					<!--}-->
				</div>
			</div>
		</div>
	</div>

	<div class="floating_circle dot_circle"><img src="/img/sub/floating_circle_img02.png"></div>
	<div class="floating_circle dash_circle"><img src="/img/sub/floating_circle_img01.png"></div>

	<div class="ins_search_con">
		<div class="motion_ellipse ellipse2"></div>
		<div class="inner">
			<div class="sch_step01 step_box">
				<div class="step_tit">
					<span>STEP01</span>
					<var>
						간단한 정보 입력으로<br>
						반려견의 보장 내용을 확인해 보세요
					</var>
				</div>
				<form>
					<ul class="step01_form_box">
						<li>
							<span>반려동물 생년월일</span>
							<input type="text" placeholder="예)2019.09.01"></input>
						</li>
						<li>
							<span>반려동물 이름</span>
							<input type="text"></input>
						</li>
						<li>
							<span>반려동물 선택</span>
							<div class="chk_wrap">
								<label>
									<input type="radio" name="pet_cate" id="chk_dog"><em></em><var>강아지</var>
								</label>
								<label>
									<input type="radio" name="pet_cate" id="chk_cat"><em></em><var>고양이</var>
								</label>
							</div>
						</li>
						<li class="chk_dog_size">
							<span>반려견 종류</span>
							<div class="chk_wrap">
								<label>
									<input type="radio" name="dog_size"><em></em><var>대형견</var>
								</label>
								<label>
									<input type="radio" name="dog_size"><em></em><var>중형견</var>
								</label>
								<label>
									<input type="radio" name="dog_size"><em></em><var>소형견</var>
								</label>
							</div>
						</li>
					</ul>
					<div class="btn_submit btn_type_01">반려견 보험 보장내용 조회</div>
				</form>
			</div>
			<div class="sch_step02 step_box">
				<div class="step_tit">
					<span>STEP02</span>
					<var>
						가입기준
					</var>
				</div>
				<ul class="stpe02_criteria">
					<li><span>나이 : 8세</span></li>
					<li><span>종류 : 대형견 기준 (1세~3세)</span></li>
					<li class="ins_coverage">
						<div>
							<span>치료비 보장</span>
							<span>탈구질환 보장</span>
							<span>배상책임 보장</span>
							<span>피부질환 보장</span>
							<span>슬관절 보장</span>
							<span>치료비 보장</span>
							<span>탈구질환 보장</span>
							<span>배상책임 보장</span>
							<span>피부질환 보장</span>
							<span>슬관절 보장</span>
						</div>
					</li>
				</ul>
				<p>
					* 본 내용은 대표적인 각 보험사 별 보장 내용을 소개합니다. 상세한 보장내용은 [보장내용
						더보기]에서 확인 하실 수 있습니다.</p>
				<p>* 각 보험사별 기본 보장내용 비교는 비교표에서 확인하실 수 있습니다.</p>
				
			</div>
		</div>
	</div>

	<div class="sch_step03">
		<div class="falling_motion falling_figure1"></div>
		<div class="falling_motion falling_figure2"></div>
		<div class="step03_inner">
			<div class="step03_top">
				<div class="step_tit">
					<span>STEP03</span>
					<var>
						납입방법 선택
					</var>
					<div class="chk_wrap">
						<label>
							<input type="checkbox" name="chk_all" id="chk_all"><em></em><var>ALL</var>
						</label>
						<label>
							<input type="checkbox" name="chk_payment"><em></em><var>1년분 납입(연납)</var>
						</label>
						<label>
							<input type="checkbox" name="chk_payment"><em></em><var>매월분 납입(월납)</var>
						</label>
					</div>
				</div>
				
				<button class="ins_table_btn btn_type_01" onclick="openInsPopup()">
					<img src="/img/sub/icon_doc.png"/><em>보험사 별 기본 비교표</em>
				</button>
			</div>
			<div class="ins_list">
				<dl>
					<dt><img src="/img/sub/ins_prd_dbpromy.jpg"/></dt>
					<dd>
						<h1>DB손해보험｜<dfn></dfn>프로미반려동물 보험</h1>
						<ul class="txt_box">
							<li>· 대표 3대질환 슬/고관절, 피부질환, 구강질환 (보험가입 31일부터 보장)</li>                          
							<li>· 공인인증서나 동물등록증  없이도   비문(코사진3장) 인식으로 등록가능타사대비 가장 저렴한 보험료 </li>
							<li>· 슬/고관절 질환, 피부질환, 구강질환기본보장(보험가입 1년후 보장)</li>
						</ul>
						<ul class="btn_box">
							<li class="join_state direct">
								<a>
									<img src="/img/sub/icon_pet.png"/>
									<em>다이렉트 가입 가능!</em>
								</a>
							</li>
							<!--191101 수정{	-->
							<li class="btn_join on">
								<a><em class="join_letter">다이렉트 가입 바로가기</em></a>
							</li>
							<!--}-->
							<li class="btn_more btn_type_01">
								<a><em>보장내용 더보기</em></a>
							</li>
						</ul>
					</dd>
				</dl>
				<dl>
					<dt><img src="/img/sub/ins_prd_petpermint.jpg"/></dt>
					<dd>
						<h1>메리츠화재｜<dfn></dfn>펫퍼민트</h1>
						<ul class="txt_box">
							<li>· 슬/고관절 질환, 피부질환, 구강질환기본보장(보험가입 1년후 보장)</li>
							<li>· 동물등록제 등록 확인 시, 추가 2% 할인</li>     
						</ul>
						<ul class="btn_box">
							<li class="join_state tel">
								<a href="tel:1670-9010">
									<img src="/img/sub/icon_join_tel.png"/>
									<em>가입 연령 제한 전화문의 <samp></samp>1670-9010</em>
								</a>
							</li>
							<li class="btn_join off">
								<a><em>다이렉트 가입  바로가기</em></a>
							</li>
							<li class="btn_more btn_type_01">
								<a><em>보장내용 더보기</em></a>
							</li>
						</ul>
					</dd>
				</dl>
				<dl>
					<dt><img src="/img/sub/ins_prd_anypet.jpg"/></dt>
					<dd>
						<h1>삼성화재｜<dfn></dfn>애니펫</h1>
						<ul class="txt_box">
							<li>· 등록번호 없을실 반려견의 생년월일, 견종, 이름 확인 가능한 서류와 사진 2장으로 가입가능. </li>
							<li>· 슬개골 탈구(면책기간 90일) 청구시 or 많이 아팠을 경우 재가입시 가입제한 가능.</li>     
						</ul>
						<ul class="btn_box">
							<li class="join_state direct">
								<a>
									<img src="/img/sub/icon_pet.png"/>
									<em>다이렉트 가입 가능!</em>
								</a>
							</li>
							<!--191101 수정{	-->
							<li class="btn_join on">
								<a><em class="join_letter">다이렉트 가입  바로가기</em></a>
							</li>
							<!--}-->
							<li class="btn_more btn_type_01">
								<a><em>보장내용 더보기</em></a>
							</li>
						</ul>
					</dd>
				</dl>
			</div>
		</div>
	</div>
</div>

<!--191101 수정-->
<div id="popTableWrap">
	<div class="pop_scroll_con">
		<div class="pop_close" onclick="closeInsPopup()"><img src="/img/sub/btn_close.png"/></div>
		<?php include_once('./ins_table.php'); ?>
	</div>
</div>

<script>

/*191101 수정*/
falling_motion();
floating_motion();

$("input[name='pet_cate']").click(function(){
	var dogchk = $('#chk_dog').is(':checked');
	if(dogchk){
		$('.chk_dog_size').css('display','block');	
	}else{
		$('.chk_dog_size').css('display','none');
		$('.chk_dog_size input[name=dog_size]').prop('checked',false);
	}
})

// 모두선택
$("input[name='chk_all']").click(function(){
	if($(this).is(":checked")){
		$("input[name='chk_payment']").prop('checked',true);
	}else{
		$("input[name='chk_payment']").prop('checked',false);
	}
})
$("input[name='chk_payment']").click(function(){
	$("input[name='chk_all']").prop('checked',false);

})

$(".ins_coverage > div").niceScroll({
	background:'#fff',
	cursorborderradius:"5px",
	cursorcolor:"#e0e0e0",
	cursorborder:"1px solid #e0e0e0",
	autohidemode: false,
	scrollbarid:'step02-scrollbar'
});


var popSt;
var pop_scroll =0;
function openInsPopup(){
	popSt = $(window).scrollTop();
	//$("body").css("position","fixed");
	//$("body").css("top",-popSt);
	$('#popTableWrap').css('display','block');
	if(!pop_scroll){
		$(".pop_scroll_con").niceScroll({
			autohidemode: false,
			boxzoom: true,
			background:'#fff',
			cursorborderradius:"5px",
			cursorcolor:"#e0e0e0",
			cursorborder:"3px solid #fff",
		});
		
		pop_scroll=1;
	}	
}

function closeInsPopup(){
	//$("body").css("position","relative");
	//$("body").css("top","0");
	//$('html,body').scrollTop(popSt);
	$('#popTableWrap').css('display','none')
}

/*
191101 추가
hover animation
*/
var letter = document.querySelectorAll('.join_letter');
for(i=0; i<letter.length; i++){
	letter[i].innerHTML = letter[i].textContent.replace(/\S/g, "<span class='lt'>$&</span>");
}

$('.btn_join.on').hover(function(){
	letterChildEven =$(this).find('span:even');
	letterChildOdd =$(this).find('span:odd');
	tl = new TimelineMax({paused: true});
	tl.staggerTo(letterChildEven, .3, {y:-10, opacity:0, ease: Sine.easeIn}, 0.03, "#start");
	tl.staggerTo(letterChildOdd, .3, {y:10, opacity:0, ease: Sine.easeIn}, 0.03, "#start");
	tl.staggerTo(letterChildEven, 0, {color:'#fff', opacity:0, y:5}, "#second");
	tl.staggerTo(letterChildOdd, 0, {color:'#fff', opacity:0, y:-5}, "#second");
	tl.staggerTo(letterChildEven, .6, {opacity:1, y:0, ease: Elastic.easeOut}, 0.03, "#third");
	tl.staggerTo(letterChildOdd, .6, {opacity:1, y:0, ease: Elastic.easeOut}, 0.03,"#third");
	tl.play();
},function(){
	tl.pause();
	tl = new TimelineMax({paused: true});
	tl.staggerTo(letterChildEven, .3, {y:10, opacity:0, ease: Sine.easeIn}, 0.03, "#start");
	tl.staggerTo(letterChildOdd, .3, {y:-10, opacity:0, ease: Sine.easeIn}, 0.03, "#start");
	tl.staggerTo(letterChildEven, 0, {color:'#202020', opacity:0, y:-5}, "#second");
	tl.staggerTo(letterChildOdd, 0, {color:'#202020', opacity:0, y:5}, "#second");
	tl.staggerTo(letterChildEven, .6, {opacity:1, y:0, ease: Elastic.easeOut}, 0.03, "#third");
	tl.staggerTo(letterChildOdd, .6, {opacity:1, y:0, ease: Elastic.easeOut}, 0.03,"#third");
	tl.play();
})



</script>


<?php
include_once('./tail.php');
?>
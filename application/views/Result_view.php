<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="sub_visual" style="background:url('/img/sub/sub_visual02-4.jpg')center; background-size:cover">
	<div class="visual_txt ">
		<h1 class="white"><img src="/img/logo_white2.png"/><span>반려동물 보험 비교  조회</span></h1>
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

					<a class="kakao" href=" https://open.kakao.com/o/sOaMSXJb" target="_blank">
						<span>Kakao ID</span>
						<em>@아이펫</em>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="floating_circle dot_circle"><img src="/img/sub/floating_circle_img02.png"></div>
	<div class="floating_circle dash_circle"><img src="/img/sub/floating_circle_img01.png"></div>
	<? //print_r($this -> session -> userdata);?>
	<div class="ins_search_con">
		<div class="motion_ellipse ellipse2"></div>
		<div class="inner">
			<div class="sch_step01 step_box">
				<div class="step_tit">
			
					<span>STEP01</span>
					<var>
						간단한 정보 입력으로<br>
						반려동물의 보장 내용을 확인해 보세요
						
					</var>
				</div>
				<form name="info_put" method="POST">
				<input type="hidden" name="basech" id="basech" value="info">
					<ul class="step01_form_box">
						<li>
							<span>반려동물 생년월일</span>
							<input type="text" name="petbirth" id="petbirth" readonly placeholder="예)2019-09-01" value="<?=($this -> session -> userdata['prtbirth'] != '') ? $this -> session -> userdata['prtbirth'] : '';?>"></input>
						</li>
						<li>
							<span>반려동물 이름</span>
							<input type="text" id="petname" name="petname" value="<?=($this -> session -> userdata['prtname'] != '' && $this -> session -> userdata['choiceway'] == 'S') ? $this -> session -> userdata['prtname'] : '';?>"></input>
						</li>
						<li>
							<span>반려동물 선택</span>
							<div class="chk_wrap">
								<label>
									<input type="radio" id="chk_dog" name="pet_cate" value="01" <?=($this -> session -> userdata['choicesub'] != 'cat' && $this -> session -> userdata['choiceway'] == 'S') ? 'checked' : '';?>><em></em><var>강아지</var>
								</label>
								<label>
									<input type="radio" id="chk_cat" name="pet_cate" value="02" <?=($this -> session -> userdata['choicesub'] != 'dog' && $this -> session -> userdata['choiceway'] == 'S') ? 'checked' : '';?>><em></em><var>고양이</var>
								</label>
							</div>
						</li>
						<li >
							<span style="line-height:20px;">최근 90일 이내<br />치료 이력</span>
							<div class="chk_wrap">
								<label>
									<input type="radio" id="dog_sick" name="dog_sick" value="Y" <?=($this -> session -> userdata['sickboth'] != 'No' && $this -> session -> userdata['choiceway'] == 'S') ? 'checked' : '';?>><em></em><var>있음</var>
								</label>
								<label>
									<input type="radio" id="dog_sick" name="dog_sick" value="N" <?=($this -> session -> userdata['sickboth'] != 'Yes' && $this -> session -> userdata['choiceway'] == 'S') ? 'checked' : '';?>><em></em><var>없음</var>
								</label>
							</div>
						</li>
						<li class="chk_dog_regi"  <?=(($this -> session -> userdata['choicesub'] != 'dog' && $this -> session -> userdata['choiceway'] == 'S') || $this->session->userdata['choiceway'] != 'S') ? 'style="display:none;"' : '';?>>
							<span>반려동물 등록증</span>
							<div class="chk_wrap">
								<label>
									<input type="radio" name="dog_regi" value="Y" <?=($this -> session -> userdata['regboth'] != 'No' && $this -> session -> userdata['choiceway'] == 'S') ? 'checked' : '';?>><em></em><var>있음</var>
								</label>
								<label>
									<input type="radio" name="dog_regi" value="N" <?=($this -> session -> userdata['regboth'] != 'Yes' && $this -> session -> userdata['choiceway'] == 'S') ? 'checked' : '';?>><em></em><var>없음</var>
								</label>
							</div>
						</li>
						<?/*
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
						*/?>
					</ul>
					<div class="btn_submit btn_type_01" onclick="javascript:submit_pet();">반려동물 보험 보장내용 조회</div>
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
					<li><span>이름 : <?=$this -> session -> userdata['prtname']?></span></li>
					<li><span>나이 : <?=$this -> session -> userdata['prtold']?> (기준 나이 : <?=$this -> session -> userdata['insurance_search_info'][0][0]?>)</span></li>
					<li class="ins_coverage">
						<div>
							<?								
								$bojang = $this -> session -> userdata['insurance_search_info'][0];
								foreach($bojang as $k=>$v){
									if($k > 0){
							?>
							<span><?=$v?></span>
							<?
									}
								}
							?>
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
<?
		if($this -> session -> userdata['choiceway'] == 'S' && $this -> session -> userdata['choicesub'] != 'cat' ){
?>
				<div class="step_tit">
					<span>STEP03</span>
					<var>
						납입방법 선택
					</var>
					<div class="chk_wrap">
						<label>
							<input type="radio" name="chk_payment" value="all"  id="chk_all" checked><em></em><var>ALL</var>
						</label>
						<label>
							<input type="radio" name="chk_payment" value="year"><em></em><var> 일시납 갱신형</var>
						</label>
						<label>
							<input type="radio" name="chk_payment" value="month"><em></em><var>월납 갱신형</var>
						</label>
					</div>
				</div>
	<?
			}
	?>
				<button class="ins_table_btn btn_type_01" onclick="openInsPopup()">
					<img src="/img/sub/icon_doc.png"/><em>보험사 별 기본 비교표</em>
				</button>
			</div>
			<div class="ins_list">
			<? 			

							$print_insuran = $this -> session -> userdata['insurance_search_info'];


							if(array_key_exists('info_insuran1', $print_insuran)){
								$DB_insuran = $print_insuran['info_insuran1'];							
					?>
				<dl>
					<dt><img src="/img/sub/ins_prd_dbpromy.jpg"/></dt>
					<dd>					
						<h1>DB손해보험｜<dfn></dfn>프로미반려동물 보험</h1>
						<ul class="txt_box">
						<?
								foreach($DB_insuran as $k => $v){
									if($k > 0){
						?>
							<li>· <?=$v?></li>
							<?
									}
								}
							?>
						</ul>
						<ul class="btn_box">
							<li class="join_state <?=($DB_insuran[0] != "true") ? 'tel' : 'direct';?>">
								<?
										if($DB_insuran[0] != "true"){
								?>
										<a href="tel:1670-9010">
											<img src="/img/sub/icon_join_tel.png"/>
											<em>다이렉트 가입제한 <samp></samp>전화문의 1670-9010</em>
										</a>								
								<?
										} else {
									?>
								<a>
									<img src="/img/sub/icon_pet.png"/>
									<em>다이렉트 가입 가능!</em>
								</a>	
							<?
								}
							?>
							</li>
							<li class="btn_join <?=($DB_insuran[0] != "true") ? "off":"on";?>">
								<a <?=($DB_insuran[0] == "true") ? 'href="javascript:confirm_insuran(\'DB\');"' : '';?>><em class="join_letter">다이렉트 가입  바로가기</em></a>
							</li>
							<li class="btn_more btn_type_01">
								<a href="/Product/Db_petsafe"><em>보장내용 더보기</em></a>
							</li>
						</ul>
					</dd>
				</dl>
			<?
							}
					if(array_key_exists('info_insuran2', $print_insuran) || array_key_exists('info_insuran4', $print_insuran)){
							if(array_key_exists('info_insuran2', $print_insuran)){
									$Meritz_insuran =$print_insuran['info_insuran2'] ;
							}

							if(array_key_exists('info_insuran4', $print_insuran)){
									$Meritz_insuran =$print_insuran['info_insuran4'] ;
							}
			?>
				<dl>
					<dt><img src="/img/sub/ins_prd_petpermint.jpg"/></dt>
					<dd>
						<h1>메리츠화재｜<dfn></dfn>펫퍼민트</h1>
						<ul class="txt_box">
							<?
									foreach($Meritz_insuran as $k=>$v){
										if($k > 0){
							?>
							<li>· <?=$v?></li>
							
							<?
										}
									}
							?>
						</ul>
						<ul class="btn_box">
							<li class="join_state <?=($Meritz_insuran[0] != "true") ? 'tel' : 'direct';?>">
						<?
								if($Meritz_insuran[0] != "true"){
						?>
								<a href="tel:1670-9010">
									<img src="/img/sub/icon_join_tel.png"/>
									<em>다이렉트 가입제한 <samp></samp>전화문의 1670-9010</em>
								</a>								
						<?
								} else {
							?>
								<a >
									<img src="/img/sub/icon_pet.png"/>
									<em>다이렉트 가입 가능!</em>
								</a>	
							<?
								}
							?>
							</li>
							<li class="btn_join <?=($Meritz_insuran[0] != "true") ? "off":"on";?>">
								<a <?=($Meritz_insuran[0] == "true") ? 'href="javascript:confirm_insuran(\'MERITZ\');"' : '';?>><em class="join_letter">다이렉트 가입  바로가기</em></a>
							</li>
							<li class="btn_more btn_type_01">
								<a href="/Product/Petpermint"><em>보장내용 더보기</em></a>
							</li>
						</ul>
					</dd>
				</dl>
	<?
					} 
			if(array_key_exists('info_insuran3', $print_insuran) || array_key_exists('info_insuran5', $print_insuran)   ){
					if(array_key_exists('info_insuran3', $print_insuran)){
									$SSM_insuran =$print_insuran['info_insuran3'] ;
							}
					if(array_key_exists('info_insuran5', $print_insuran)){
								$SSM_insuran =$print_insuran['info_insuran5'] ;
						}
								
		?>
				<dl>
					<dt><img src="/img/sub/ins_prd_anypet.jpg"/></dt>
					<dd>
						<h1>삼성화재｜<dfn></dfn>애니펫</h1>
						<ul class="txt_box">
							<?
									foreach($SSM_insuran as $k=>$v){
										if($k > 0){
							?>
							<li>· <?=$v?></li>
							
							<?
										}
									}
							?>
						</ul>
						<ul class="btn_box">
							<li class="join_state <?=($SSM_insuran[0] != "true") ? 'tel' : 'direct';?>">
								<?
										if($SSM_insuran[0] != "true"){
								?>
										<a href="tel:1670-9010">
											<img src="/img/sub/icon_join_tel.png"/>
											<em>다이렉트 가입제한 <samp></samp>전화문의 1670-9010</em>
										</a>								
								<?
										} else {
									?>
										<a >
											<img src="/img/sub/icon_pet.png"/>
											<em>다이렉트 가입 가능!</em>
										</a>	
									<?
										}
									?>
							</li>
							<li class="btn_join <?=($SSM_insuran[0] != "true") ? "off":"on";?>">
								<a <?=($SSM_insuran[0] == "true") ? 'href="javascript:confirm_insuran(\'Samsung\');"' : '';?>><em class="join_letter">다이렉트 가입  바로가기</em></a>
							</li>
							<li class="btn_more btn_type_01">
								<a href="/Product/Anypet"><em>보장내용 더보기</em></a>
							</li>
						</ul>
					</dd>
				</dl>
				<?
			}
			?>
			</div>
		</div>
	</div>

</div>

<script>

falling_motion();
floating_motion();

/*
var winH = $(window).height()
$(window).scroll(function(){
	var st = $(window).scrollTop();
	var fallStart = $('.sch_step03').offset().top + $('.sch_step03').outerHeight()/2;
	var floatCir1 = $('.dot_circle').offset().top + $('.dot_circle').outerHeight()/2;
	var floatCir2 = $('.dash_circle').offset().top + $('.dash_circle').outerHeight()/2;
	
	if(winH+st > fallStart){
		$('.sch_step03').addClass('animated');
	}

	$('.dot_circle').css('margin-top',-(winH+st-floatCir1)*.09);
	$('.dash_circle').css('margin-top',-(winH+st-floatCir2)*.1);
})
*/
$("input[name='pet_cate']").click(function(){
	var dogchk = $('#chk_dog').is(':checked');
	if(dogchk){
		$('.chk_dog_size').css('display','block');	
	}else{
		$('.chk_dog_size').css('display','none');
		$('.chk_dog_size input[name=dog_size]').prop('checked',false);
	}

		if(dogchk){
		$('.chk_dog_regi').css('display','block');	
	}else{
		$('.chk_dog_regi').css('display','none');
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
		}).resize();
		
		pop_scroll=1;
	}	
}

function closeInsPopup(){
	//$("body").css("position","relative");
	//$("body").css("top","0");
	//$('html,body').scrollTop(popSt);
	$('#popTableWrap').css('display','none')
}
//kozin 만든것
$(document).ready(function(){

	 $('input[name=chk_payment]').on('change', function(){
		var chkmoney = $('input[name=chk_payment]:checked').val();
	
		if(chkmoney == 'year'){
			$('.ins_list>dl').css('display','block');
			$('.ins_list>dl:eq(1)').css('display','none');
		} else if(chkmoney == 'month'){
			$('.ins_list>dl').css('display','block');
			$('.ins_list>dl:eq(0)').css('display','none');
		} else {
			$('.ins_list>dl').css('display','block');
		}
	 });
});

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
<!--style>
.step01_form_box li img {position: absolute; right:10px; top:50%; transform: translateY(-50%); -wbkit-transform: translateY(-50%);width: 24px; height:24px;}
</style-->
<!--191101 수정-->
<div id="popTableWrap">
	<div class="pop_scroll_con">
		<div class="pop_close" onclick="closeInsPopup()"><img src="/img/sub/btn_close.png"/></div>

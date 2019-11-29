<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="eventWrap">
	<div class="inner">
	<div class="img_coffee"></div>
	<div class="event_intro">
		<h1>
			<img src="/img/logo.png"/><span>OPEN EVENT</span>
		</h1>
		<h2>
			아이펫에서 우리아이 보험 가입하고<br>
			커피 마구마구 받아가세요!
		</h2>
		<h3>
			<b>아이펫에서</b> 우리아이 <b>보험 가입</b>하셨나요?<br>
			그럼 <var>스타벅스 커피 쿠폰 두장!</var> 받아가세요
		</h3>
		<h4>
			아이펫에서 반려견/반려묘 보험을 조회하시고 아이펫에서 제안드리는 <samp></samp>
			보험사 다이렉트 페이지에서 보험가입을 완료하신 후 아래 정보를 입력해주시면<samp></samp>
			확인 후 1월 중 스타벅스 1+1 쿠폰을 입력해주신 휴대폰 번호로 일괄 발송해드립니다
		</h4>
		<ul>
			<li>·기간 : 2019년 12월 1일 ~ 12월 31일</li>
			<li>·참여 대상 : 아이펫에서 보험가입하시는 모든 분들!</li>
			<li>·가입 증정품 : 스타벅스 커피쿠폰 1+1 (2장)</li>
			<li>·쿠폰 발송 : 이벤트 마감 후 2020년 1월 첫째주 중 일괄 발송(입력 휴대번호로 발송)</li>
			<li class="red">·아이펫 홈페이지에서 조회하신 반려동물의 정보와 실제 보험 가입 시 입력하신 정보가 일치하여야 이벤트 참여가 가능합니다.</li>
		</ul>
	</div>

	<div class="event_form_wrap">
		<form id="eventForm">
			<ul class="event_form_list">
				<li>
					<label class="frm_tit">반려견 이름</label>
					<div class="frm_box">
						<input type="text" placeholder="예)댕댕이" class="frm_input" name="pet_name"/>
					</div>
				</li>
				<li>
					<label class="frm_tit">반려견 생년월일</label>
					<div class="frm_box">
						<input type="text" placeholder="예) 20180101" class="frm_input" name="pet_birth" maxlength="8"/>
					</div>
				</li>
				<li>
					<label class="frm_tit">가입자 이름</label>
					<div class="frm_box">
						<input type="text" placeholder="예) 홍길동" class="frm_input" name="mb_name"/>
					</div>
				</li>
				<li>
					<label class="frm_tit">가입자 휴대폰번호</label>
					<div class="frm_box">
						<input type="text" placeholder="예) 010-1234-5678" class="frm_input" name="mb_hp"/>
					</div>
				</li>
				<li>
					<label class="frm_tit">가입보험사</label>
					<div class="select_box frm_box">
						<input type="text" placeholder="보험사 선택" class="frm_input sel_btn" readonly name="insurance"/>
						<ul class="sel_option">
							<li>보험사 선택</li>
							<li>DB손해 보험</li>
							<li>삼성화재</li>
							<li>메리츠</li>
						</ul>
						<var class="sel_arr"></var>
					</div>
				</li>
				<li>
					<label class="frm_tit">가입자 증권번호</label>
					<div class="frm_box">
						<input type="text" placeholder="예) 100-000-0000" class="frm_input" name="policy_num"/>
					</div>
				</li>
				<li class="agree_chk">
					<label>
						<input type="checkbox" name="agree_privacy"/>
						<i></i>
						<span>개인 정보 수집에 동의합니다.</span>
					</label>
				</li>
			</ul>
			<div class="event_form_btn">
				<a class="btn_main" href="/">main</a>
				<span class="btn_submit">이벤트 참여하기</span>
			</div>
		</form>
	</div>
	</div>
</div>

<!--form 필수값 체크 ALERT-->
<div id="pop_alert">
	<div class="pop_alert_box">
		<div class="btn_close" onclick="pop_close()"><img src="/img/skin/btn_close.png"/></div>
		<h1 class="logo"><img src="/img/logo.png"/></h1>
		<h2 class="txt">
			입력되지 않거나 잘못된 입력 정보가 있습니다.<br> 모든 정보를 자세히 입력해 주시기 바랍니다.
		</h2>
		<span class="btn_confirm" onclick="pop_close()">확인</span>
	</div>
</div>

<script>

	//select
	$('.sel_btn').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$(this).parents('.select_box').addClass('open');
		$(this).next('.sel_option').show();
	});

	$('.sel_option li').click(function(){
		var optVal = $(this).text();
		$(this).addClass('selected').siblings().removeClass('selected');
		$(this).parents('.sel_option').siblings('.sel_btn').val(optVal);
		$(this).parents('.sel_option').hide();
		$(this).parents('.select_box').removeClass('open');
	});

	$(document).click(function() {
		$('.sel_option').hide();
		$('.select_box').removeClass('open');
	})

	//form 필수값 체크
	$('.btn_submit').click(function(){
		var regPhone = /(01[0|1|6|9|7])[-](\d{3}|\d{4})[-](\d{4}$)/g;
		var regBirth = /^(19[0-9][0-9]|20\d{2})(0[0-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])$/;
		var frmError =0;
		if ($("[name=pet_name]").val() == "")
		{
			frmError++;
			$("[name=pet_name]").addClass('focus');
		}else{
			$("[name=pet_name]").removeClass('focus');
		}
		
		if ($("[name=pet_birth]").val() == "" || !regBirth.test($("[name=pet_birth]").val()))
		{
			frmError++;
			$("[name=pet_birth]").addClass('focus');
		}else{
			$("[name=pet_birth]").removeClass('focus');
		}
		
		if ($("[name=mb_name]").val() == "")
		{
			frmError++;
			$("[name=mb_name]").addClass('focus');
		}else{
			$("[name=mb_name]").removeClass('focus');
		}
		
		if ($("[name=mb_hp]").val() == "" || !regPhone.test($("[name=mb_hp]").val()))
		{
			frmError++;
			$("[name=mb_hp]").addClass('focus');
		}else{
			$("[name=mb_hp]").removeClass('focus');
		}
		
		if ($("[name=insurance]").val() == "" || $("[name=insurance]").val() =="보험사 선택")
		{
			frmError++;
			$("[name=insurance]").addClass('focus');
		}else{
			$("[name=insurance]").removeClass('focus');
		}

		if ($("[name=policy_num]").val() == "")
		{
			frmError++;
			$("[name=policy_num]").addClass('focus');
		}else{
			$("[name=policy_num]").removeClass('focus');
		}
		
		if (!$("[name=agree_privacy]").is(':checked'))
		{
			frmError++;
			$("[name=agree_privacy]").addClass('focus');
		}else{
			$("[name=agree_privacy]").removeClass('focus');
		}

		if(frmError > 0){
			$('#pop_alert').css('display','block');
		}else{
			//$('#eventForm').submit()
		}
	});

	//pop_close
	function pop_close(){
		$('#pop_alert').css('display','none');
	}
</script>
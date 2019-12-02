<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="sub_visual" style="background:url('/img/sub/sub_visual03.jpg')center; background-size:cover">
	<div class="visual_txt">
		<h1 class="white"><img src="/img/logo_white.png"/><br /><span>FAQ</span></h1>
	</div>
</div>
<div id="faqWrap">
	<div class="con_tit_wrap">
		<div class="con_tit">FAQ</div>
	</div>

	<div class="faq_tab">
		<ul>		
			<li class="active">
				<a>
					DB손해보험 <dfn></dfn>-펫세이프
				</a>
			</li>
			<li>
				<a>
					메리츠 화재 <dfn></dfn>-펫퍼민트
				</a>
			</li>
				<li>
				<a>
					삼성화재  <dfn></dfn>-애니펫
				</a>
			</li>
		</ul>
	</div>

	<div class="faq_contents">		
		
		<div id="faq_petsafe" class="faq_con" >
			<?php 
				if(isset($db)){
								foreach($db as $k => $v ){																			
						?>
			<dl <?=($k < 1) ? 'class="active"' : '';?>>
				<dt>
					<div class="q_tit"><b>Q.</b><?=$v['q_content']?></div>
					<span></span>
				</dt>
				<dd>
					<p>
						<?=nl2br($v['a_content'])?>
					</p>
				</dd>
			</dl>
			<?php
								}
						}
						/*
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>질병확장담보 중 피부질환은 귀에 생긴것도 포함되나요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						선천적이지 않은 외이염, 중이염, 피부알러지, 피부트러블은 피부병으로 간주되어
						해당 치료비가 보장됩니다. 수의사님의 피부질환 진단서가 필요하며 이 청구서를
						보상 청구 시 보장이 가능합니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>중성화 수술을 하지 않아서 생기는 질환은 보상이 가능한가요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						네, 보상 가능합니다. 단, 중성화수술을 받지 않아 발생한 질병이 약관 상 보상하지
						않는 손해에 해당되면 면책 사항이 됩니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>반려견의 정확한 품종과 나이를 알지 못합니다. 어떻게 해야 하나요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						반려견에 대한 연령고지는 보험의 가장 주요한 내용으로 알릴 의무 위반 시 보험금을
						지급받지 못할 수 있습니다. 반려견의 연령 및 품종(혼종 및 믹스견의 경우)을
						정확하게 모르는 경우에는 동물병원 내원 시 고지했던 연령 및 품종으로 가입을
						진행하여 주시기 바랍니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>건강검진도 보상이 되나요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						일반적인 건강검진은 보상되지 않습니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>가입 시 보장되는 내용은 무엇인가요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						우리아이의 의료비에 보장되며 보험 적용항목을 기준으로 입원,통원 1일당 15만원,
						수술 1회당 150만원까지 보장됩니다. 다만, 보험 가입 전 이미 감염 또는 발병한 질병
						및 상해나 선천적 유전적 질병, 백신 접종비용, 미용을 위한 비용은 보장범위에
						해당하지 않습니다. 다만, 선천적, 유전적질병 의 경우 보험기간 중 최초로 발견된
						경우에는 당해 보험기간에 한하여 보상합니다. 더 자세한 사항은 “약관”을 통해
						확인하실 수 있습니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>보험계약이 체결되면 보장은 언제부터 시작되나요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						첫 회 보험료가 납입이 확인되는 날 부터 보험이 개시되는 것으로 하며,
						보험개시일부터 보장을 받을 수 있습니다. 상해로 인한 보장은 보장개시일부터
						적용되며, 질병은 보장개시일을 포함하여 30일 이내에 발생한 사항은 보장되지
						않습니다.(31일 이후부터 보장) 단, 갱신계약인 경우는 해당되지 않습니다. 구체적인
						상해/질병 별 보장개시일이 상이할 수 있으니 상세한 내용은 약관을 참고하세요.
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>질병확장담보 중 구강내 질환은 스케일링이 포함되나요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						단순한 스케일링 치료는 예방적 차원의 처치이므로 보장되지 않습니다. 다만, 질환에
						따른 스케일링 치료는 보장이 되며, 진단서와 함께 보상 청구시 보장이 가능합니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>감기치료 이력이 있는 아이입니다. 고지 후 가입 가능한지 궁금합니다.</div>
					<span></span>
				</dt>
				<dd>
					<p>
						치료이력이 3개월 이내에 있는 경우는 가입이 어렵습니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>현재 피부병약 복용 중 반려견은 가입이 가능하나요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						현재 피부병약을 복용 중인 아이는 가입이 어렵습니다. 완치가 되어 3개월 동안
						치료를 받지 않으면 그 이후 가입 가능합니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>얼마 전에 중성화 수술을 하였는데 가입이 안되나요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						병에 의한 것이 아니고 단순 중성화 수술이라면 예방 목적이기 때문에 가입
						가능합니다. 단, 중성화 수술로 인한 합병증이나 그에 따른 처치 등은 면책 사항입니다.
					</p>
				</dd>
			</dl>
			*/?>
		</div>
		
		<div id="faq_petpermint" class="faq_con" >
			<?php 
			if(isset($meritz)){
								foreach($meritz as $k => $v ){																			
						?>
			<dl <?=($k < 1)? 'class="active"' : '';?>>
				<dt>
					<div class="q_tit"><b>Q.</b><?=$v['q_content']?></div>
					<span></span>
				</dt>
				<dd>
					<p>
						<?=nl2br($v['a_content'])?>
					</p>
				</dd>
			</dl>
			<?php
								}
						}
						/*
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>[강아지] 특별약관 속 [반려동물 특정 질병 보장제한부 인수 특별약관]이란 무엇인가요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						보험계약을 체결할 시 반려동물의 건강상태가 일정 기준에 적합하지 않은 경우나
						계약 전 알릴 의무로 건강에 이상이 있음을 고지할 경우 해당 질병과 직접 관련이
						있는 특정 질병에 대해 보장하지 않는다는 약관을 말합니다. 가입 시 해당 특약을
						부가할 시에는 계약자에게 사유에 대해 설명해 드리며, 펫퍼민트 보험증권과
						ID카드(등록증)에도 해당 제한 범위가 기재됩니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>[강아지] 펫퍼민트 ID카드란 무엇인가요? 어떻게 발급 받나요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						저희 펫퍼민트는 사람의 건강보험증과 같은 펫퍼민트 보험등록증을 계약 시 발급해
						드리고 있습니다. 청약 완료시 계약자의 카카오톡(펫퍼민트 알림톡)을 통해 발송되며,
						재 발행 요청 시 카카오톡 친구찾기에서 플러스 친구[펫퍼민트]를 찾아서 친구 추가를
						하신 뒤 등록증 재발행 요청을 하실 수 있습니다. ID카드는 향후 보험금 자동청구 시
						사용하실 수 있습니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>[강아지] 펫퍼민트 반려동물보험(Puppy&amp;Dog, Cat)은 어떤 보험인가요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						기본적으로 반려동물이 질병, 상해로 입원(특약), 통원 치료 시 보호자가
						동물병원에서 부담한 의료비를 보상하는 보험입니다. 전국 모든 동물병원에서
						통원/입원(특약)/수술치료비를 보상하며, 반려동물 의료비의 70% 또는 50% 보상을
						선택하실 수 있습니다.(각 치료 당 자기부담금 1만원)
					</p>
				</dd>
			</dl>
			*/
			?>
		</div>
		
			
<div id="faq_ipet" class="faq_con">
				<?php 
				if(isset($samsung)){
								foreach($samsung as $k => $v ){																			
						?>
			<dl <?=($k < 1)? 'class="active"' : '';?>>
				<dt>
					<div class="q_tit"><b>Q.</b><?=$v['q_content']?></div>
					<span></span>
				</dt>
				<dd>
					<p>
						<?=nl2br($v['a_content'])?>
					</p>
				</dd>
			</dl>
			<?php
								}
				}
			/*
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>아이펫 사이트에서 보험을 직접 가입하나요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						아이펫은 국내의 다양한 반려견/반려묘 보험을 소개 중개하는 중개사이트입니다. 보험의 보장내용을 간단하게 아이펫 사이트에서 직접 비교하시고 각 보험사 다이렉트페이지에서 보험사의 가입프로세스를 이용하여 가입하게 됩니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>보험의 보상 청구는 어떻게 하나요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						가입 하신 보험의 보상청구는 아래 각 보험사의 보상청구 페이지를 참고하여 청구를 진행하시면 됩니다. 더 설명이 필요하시다면 아이펫 고객센터에 문의 주시면 상세하게 알려드립니다.
						<br><br>
						[각 보험사 보상청구 연락처]<br>
						 - DB 손해보험 (펫세이프) : 1670-9010 <a class="go_link" href="https://www.petsafe.co.kr/Main/Claim.do" target="_blank">바로가기</a><br>
						 - 삼성화재 애니펫 : 1588-5114 <a class="go_link" href="https://www.samsungfire.com/claim/P_P03_01_05_001.html" target="_blank">바로가기</a><br>
						 - 메리츠 화재 펫퍼민트 : 1566-7711 <a class="go_link" href="https://store.meritzfire.com/pet/compensation.do#!/comp" target="_blank">바로가기</a>
					</p>
				</dd>
			</dl>
			<dl>
				<dt>
					<div class="q_tit"><b>Q.</b>보험의 결제도 아이펫에서 진행하나요?</div>
					<span></span>
				</dt>
				<dd>
					<p>
						보험의 결제는 각 보험사의 결제 시스템을 이용하시게 됩니다. 
					</p>
				</dd>
			</dl>
			*/
			?>
		</div>
	</div>
</div>


<script>

$('.faq_con dl dt').click(function(){
	var faq_item = $(this).parent('dl');
	if(faq_item.hasClass('active')){
		//열림
	}else{
		//닫힘->열림
		faq_item.addClass('active');
		faq_item.siblings().removeClass('active');
		faq_item.find('dd').slideDown();
		faq_item.siblings().find('dd').slideUp();
	}
})

$('.faq_tab ul li').click(function(){
	var idx = $(this).index();
	$(this).addClass('active').siblings().removeClass('active');
	$('.faq_contents .faq_con').eq(idx).show().siblings().hide();
})
</script>
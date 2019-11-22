<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="sub_visual" style="background:url('/img/sub/sub_visual02.jpg')center; background-size:cover">
	<div class="visual_txt">
		<h1 class="white"><img src="/img/logo_white2.png"/><span>반려동물 보험</span></h1>
		<h2>메리츠화재 / 펫실비보험 </h2>
	</div>
</div>
<div id="prodWrap" class="meritz">
	<div class="pet_info_wrap">
		<?
	if(isset($this ->session->userdata['insurance_search_info']) && $this->session->userdata['choiceway'] == 'S'){	
		$print_insuran ='';
	$print_insuran = $this -> session -> userdata['insurance_search_info'];
?>
		<div class="inner">
			<div class="pet_info">
				<div class="logo">
					<img src="/img/sub/icon_pet.png"/>
				</div>
				<div class="txt">
					<span>현재 보장 정보를 조회하신 반려 동물 이름
						<var class="name"> : <?=$this -> session -> userdata['prtname']?> | 나이 : <?=$this -> session -> userdata['prtold']?></var>
					</span>
				</div>
			</div>
			<div class="back_btn">
				<a href="/Insuran"><span>비교조회 페이지로 돌아가기</span></a>
			</div>
		</div>
	<?
	}
?>
	</div>

	<div class="prod_intro">
		<div class="floating_circle circle01 reverse"><img src="/img/sub/floating_circle_img02.png"></div>
		<div class="floating_circle circle02 "><img src="/img/sub/floating_circle_img03.png"></div>
		<div class="inner">
			<h1><img src="/img/sub/logo_collabo_meritz.jpg"/></h1>
			<h2>메리츠화재 펫실비보험</h2>
			<div class="sub_tit animate_con">
				반려견&반려묘를 위한 든든한보장<br>
				<span class="point1">아파도 다쳐도 말못하는 </span>우리 댕댕이,냥냥이<br>
				반려동물에게 <span class="point2">꼭 맞는 보험이 필요 합니다!</span>
			</div>
		</div>
	</div>

	<div class="meritz_intro">
		<div class="floating_circle circle03 reverse"><img src="/img/sub/floating_circle_img04.png"></div>
		<div class="floating_circle circle04"><img src="/img/sub/floating_circle_img05.png"></div>
		<div class="floating_circle circle05"><img src="/img/sub/floating_circle_img05.png"></div>
		<div class="floating_circle triangle reverse"><img src="/img/sub/floating_figure_img.png"></div>
		<div class="tit">
			<h1>반려동물 양육을 위한</h1>
			<h2>지출항목 2위, <b>치료비!</b></h2>
			<h3>비용 부담 때문에 <b>걱정이라면?</b></h3>
			<h4>반려동물 양육을 위한 항목별 지출 비중  <dfn></dfn><span class="pc_show">｜</span>KB금융지주경영연구소,2017년</h4>
		</div>
		<div class="ranking">
			<div class="dog"><img src="/img/sub/meritz_ranking_con_dog.png"/></div>
			<ul>
				<li class="rank1">
					<span class="name">사료간식비</span>
					<span class="bar"><em></em></span>
					<span class="num">88.8%</span>
				</li>
				<li class="rank2 active">
					<span class="name">치료비</span>
					<span class="bar"><em></em></span>
					<span class="num">64%</span>
				</li>
				<li class="rank3">
					<span class="name">예방비</span>
					<span class="bar"><em></em></span>
					<span class="num">58.9%</span>
				</li>
				<li class="rank4" >
					<span class="name">미용비</span>
					<span class="bar"><em></em></span>
					<span class="num">55.3%</span>
				</li>
				<li class="rank5">
					<span class="name">의류,액세서리</span>
					<span class="bar"><em></em></span>
					<span class="num">11%</span>
				</li>
				<li class="rank6">
					<span class="name">침대,배변<dfn></dfn>패드 등 일용품</span>
					<span class="bar"><em></em></span>
					<span class="num">10.5%</span>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="meritz_point_wrap">
		<div class="tit">
			<h1>견주님,집사님 부담 덜어드리는</h1>
			<h2>
				메리츠펫보험의 <dfn></dfn>
				<span>3가지</span> <b>핵</b><b>심</b> <b>포</b><b>인</b><b>트</b>
			</h2>
		</div>
		<div class="meritz_point01">
			<div class="floating_circle circle06"><img src="/img/sub/floating_circle_img01.png"></div>
			 <div class="tit_point">
				<span>01</span>펫부모가 만들어 든든한 <b>기본보장!</b>
			 </div>
			 <ul>
				<li>
					이물질섭취 및 골절, 상해사고 기본 보장
				</li>
				<li>
					강아지는 슬개골/고관절 질환 기본 보장
					<span>(슬개골/고관절질환은 가입일부터 1년 이내 발생 시 미보장)</span>
				</li>
				<li>
					고양이는 방광염 기본 보장
					<span>(비뇨기계 질환, 전염성 복막염은 가입 90일내 발생 시 미보장)</span>
				</li>
			 </ul>
		</div>
		<div class="meritz_point02">
			 <div class="tit_point">
				<span>02</span><b>만20세까지</b> 댕댕이,냥냥이 평생보장!
			 </div>
			<h2>
				<b>(3년 자동 갱신, 갱신 시 보험료 인상 가능)</b><br>
				반려동물 생애주기와 평균 수명에 맞춘 넉넉한 보장기간
			</h2>
			<ul>
				<li>
					<div class="bar">
						<span>2018년</span>
					</div>
					<img src="/img/sub/meritz_icon_dog.png"/>
					<span class="age">14.2세</span>
				</li>
				<li class="active">
					<div class="bar">
						<span>메리츠 펫보험 보장나이</span>
					</div>
					<img src="/img/sub/meritz_icon_dog2.png"/>
					<span class="age">만20세</span>
				</li>
				<li>
					<p>반려동물 평균수명 - 한국경제,2018년 1월 16일</p>
				</li>
			 </ul>
			 
		</div>
		<div class="meritz_point03">
			<div class="falling_motion falling_figure1"></div>
			<div class="falling_motion falling_figure2"></div>
			 <div class="tit_point">
				<span>03</span>국내 최초 <b>동물병원에서 보험금 접수 가능!</b>
			 </div>
			 <div class="con">
				<img class="pc_show" src="/img/sub/meritz_point3_con.png"/>
				<img class="m_show" src="/img/m/meritz_point3_con.png"/>
			 </div>
			 <div class="las">보험금 현장접수 가능 동물병원에서 간편하게 청구!</div>
		</div>
	</div>

	<div class="ins_terms_download">
		<?/*<a href="/Download_hlp/download_file/m_t_1"><span>보험약관 다운로드</span></a><!-- 약관 배고 다이렉트  페퍼민트만 -->*/
				if(count($this -> session -> userdata) > 2){

								if($this -> session -> userdata['choicesub'] == 'dog' || $this -> session -> userdata['choicesub'] == 'Dog'){									
									$meritz_both =  $this -> session -> userdata['insurance_search_info']['info_insuran2'][0];
								} else {
									$meritz_both =  $this -> session -> userdata['insurance_search_info']['info_insuran4'][0];								
								}
				
					
			if($meritz_both == "true"){		
		?>
		<a <?=($meritz_both == "true") ? 'href="javascript:confirm_insuran(\'MERITZ\');"' : '';?>><span>보험료 확인하기</span></a>
		<?
			}
				}
			?>
	</div>

	<div class="join_note">
		<div class="tit">유의사항</div>
		<div class="inner">
			<dl>
				<dt><span> 보험 가입 시 꼭 알아 두실 사항</span></dt>
				<dd>
					<p>
					해약환급금 (또는 만기 시 보험금이나 사고 보험금)에 기타 지급금을 합하여 5천 만원 까지(본 보험회사 모든 상품 합산)예금자 보호 적용됩니다. <br>
					<span> 3년마다 갱신되며, 갱신을 통해 최대 20세까지 보장받을 수 있습니다. 갱신 시 보험료가 인상될 수 있습니다.</span> 또한 기존 보험 계약 해지 후, 신계약 체결 시 보험인수가 거절되거나 보험료가 인상 되는 등 보장
					 내용이 달라질 수 있습니다. 약관에 따른 지급 제한 사유 발생 시, 보험금 지급이 제한 될 수 있습니다. 계약 체결 전, 자세한 상품 내용은 약관 및 상품 설명서를 참고 바랍니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt><span></span></dt>
				<dd>
					<p>
					상품 및 가입문의는 메리츠 다이렉트 고객센터 1522-1135로 문의 바랍니다.
					</p>
				</dd>
			</dl>
			<?/*<dl>
				<dt><span>※ 사고 내용, 특성, 상품(보장 내역)에 따라 추가 심사 서류를 요구할 수 있습니다.</span></dt>
			</dl>
			*/?>
			<p>* 손해보험협회 심의필 제21177호(2019.09.09)</p>
		</div>
	</div>
</div>


<script>
falling_motion();
floating_motion();
</script>

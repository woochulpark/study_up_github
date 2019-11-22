<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="sub_visual" style="background:url('/img/sub/sub_visual02.jpg')center; background-size:cover">
	<div class="visual_txt">
		<h1 class="white"><img src="/img/logo_white2.png"/><span>반려동물 보험</span></h1>
		<h2>삼성화재 / 반려동물 보험 애니펫</h2>
	</div>
</div>
<div id="prodWrap" class="anypet">
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
		<div class="floating_circle circle02"><img src="/img/sub/floating_circle_anypet.png"></div>
		<div class="inner">
			<h1><img src="/img/sub/logo_collabo_anypet.jpg"/></h1>
			<h2>삼성화재 반려동물 보험 애니펫</h2>
			<div class="sub_tit animate_con">
				<span class="point1">가족같은 나의 반려동물</span><br>
				반려동물 보험 <span class="point2">애니펫으로 지켜주세요!</span>
			</div>
		</div>
	</div>
	<div class="anypet_comming">
		<div class="cloud cloud1"></div>	
		<div class="illust">
			<div class="inner">
				<img class="dog" src="/img/sub/anypet_coming_dog.png"/>
				<img class="cat" src="/img/sub/anypet_coming_cat.png"/>
			</div>
		</div>
		<div class="cloud cloud2"></div>	
		<div class="btn_con">
			<ul>
				<?/*<li class="btn_type01"><a onclick="openInsPopup()">보험사별 기본 비교표</a></li>*/?>
				<li class="btn_type02"><a href="/Download_hlp/download_file/s_t_1">반려견 보험 약관다운로드</a></li>
				<li class="btn_type02"><a href="/Download_hlp/download_file/s_t_3">반려묘 보험 약관다운로드</a></li>
				<li class="btn_type02"><a href="/Download_hlp/download_file/s_t_2">반려견 보험 소개서 다운로드</a></li>				
				<?
						if(count($this -> session -> userdata) > 2){

								if($this -> session -> userdata['choicesub'] == 'dog' || $this -> session -> userdata['choicesub'] == 'Dog'){
									
								$anypet_both =  $this -> session -> userdata['insurance_search_info']['info_insuran3'][0];
								} else {
									$anypet_both =  $this -> session -> userdata['insurance_search_info']['info_insuran5'][0];
								}
						if($anypet_both == 'true'){
					?>
<li class="btn_type02"><a <?=($anypet_both == "true") ? 'href="javascript:confirm_insuran(\'Samsung\');"' : '';?>>다이렉트 가입  바로가기</a></li>				
						<?
						}
							}
							?>
				<!--li class="btn_type02"><a href="/Download_hlp/download_file/s_t_2">반려묘 보험 소개서 다운로드</a></li-->
			</ul>
			<p><img src="/img/sub/icon_notice.png"/>보험 소개 컨텐츠 심의중입니다</p>
			
		</div>

	</div>
	
	<div class="anypet_banner" style="display:none">
		<h1>
			반려견에게 상해 또는 질병 발생시<br>
			그 치료비를 보장해드리는 삼성화재 반려견 종합보험입니다.
		</h1>
		<img src="/img/sub/anypet_intro_illust.jpg"/>
	</div>
	
	<div class="anypet_detail detail01" style="display:none">
		<div class="inner">
			<div class="tit">
				<h1>01</h1>
				<h2>반려견의 상해 및 질병의료비 가입 가능</h2>
				<h3>반려견 상해, 질병에 대한<dfn></dfn> 입원 · 통원의료비를 보장해 드립니다.</h3>
			</div>
			<ul>
				<li>
					<span>
					(1일당치료비 - 1일당공제금액) X 보장비율70% 과 보험증권에서 정한 1일당 치료비보험금
					보상한도액 중 적은 금액 단, 1일당공제금액은 2만원과 3만원 중 선택 가능합니다.
					</span>
				</li>
				<li>
					<span>
					신규가입의 경우 질병과 사망위로금은 대기기간 30일, 슬관절 수술비용보장 특약과
					일부 중대 질병은 대기기간 90일이 적용됩니다.
					</span>
				</li>
			</ul>
			<div class="percentage_chart">
				<img src="/img/sub/anypet_detail01_img.png" class="pc_show"/>
				<img src="/img/m/anypet_detail01_img.png" class="m_show"/>
			</div>
			<p>[ 반려동물 양육비용 중 가장 지출이 많은 항목<dfn></dfn>(복수응답, ’17년 KB금융연구소 조사결과) ]</p>
		</div>
	</div>

	<div class="anypet_detail detail02" style="display:none">
		<div class="inner">
			<div class="tit">
				<h1>02</h1>
				<h2>배상책임보험 가입으로<dfn></dfn> 생활 속 위험 보장!</h2>
				<h3>
					타인을 물거나, 타인 소유의 동물에<dfn></dfn>
					상처를 입혀 손해를 입힌 경우<samp></samp>법률상의<dfn></dfn>
					배상책임을 보상해드립니다. (해당 특약 가입시)
				</h3>
			</div>
			<ul>
				<li>
					<span>
					가입금액 한도(자기부담금 공제 후 보장), 일부 견종은 가입이 제한될 수 있습니다.
					</span>
				</li>
			</ul>
			<p>[민법 759조 1항] 동물의 점유자는 그 동물이 타인에게 가한 손해를 배상할 책임이 있다.</p>
			<div class="case">
				<dl>
					<dd><img src="/img/sub/anypet_detail02_img1.jpg"/></dd>
					<dt>[엘리베이터에서 옆집 아이를 물었을 때]</dt>
				</dl>
				<dl>
					<dd><img src="/img/sub/anypet_detail02_img2.jpg"/></dd>
					<dt>[놀이터에서 다른 개와 싸우다 상처를 입혔을 때]</dt>
				</dl>
			</div>
		</div>
	</div>

	<div class="anypet_detail detail03" style="display:none">
		<div class="floating_circle circle03 "><img src="/img/sub/floating_circle_img05.png"></div>
		<div class="inner">
			<div class="tit">
				<h1>03</h1>
				<h2>
					가정에서 반려목적으로 기르는<dfn></dfn>
					개가 가입대상으로,<br>
					장애인 안내견도 가입 가능!
				</h2>
				<h3>
					동물보호법 시행령 제3조 제1호에 의거<dfn></dfn>
					가정에서<samp></samp>
					반려목적으로 기르는<dfn></dfn>
					개가 가입 대상입니다
				</h3>
			</div>
			<ul>
				<li>
					<span>
					가입연령 생후 60일부터 만 6세까지, 만기 재가입을 통해 최대 만 12세까지 보장 가능
					</span>
				</li>
				<li class="listtype2">
					<span>가입불가 대상<dfn></dfn><var class="pc_show">:</var> 수렵 / 투견 / 경주견 / 마약탐지견 등 특수 목적견 <br>
								동물농장 / 유기견보호센터 / 판매시설 등에 있는 견
					</span>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="prod_notice" style="display:none">
		<dl>
			<dt><img src="/img/sub/icon_notice.png"/>알아두실 사항</dt>
			<dd>
				상품 안내는 고객님의 이해를 돕기 위해 상품의 주요 내용만을 요약한 자료입니다. <br>
				보험금을 지급하지 않는 사유 등 구체적인 상품 내용은 반드시 약관을 참고해 주세요
			</dd>
		</dl>
	</div>
	<div class="prod_detail" style="display:none">
		<div class="falling_motion falling_figure1"></div>
		<div class="falling_motion falling_figure2"></div>
		<div class="floating_circle circle04 "><img src="/img/sub/floating_circle_img01.png"></div>
		<div class="prod_table_box">
			<h1>
				보험료 예시-상품플랜
			</h1>
			<table class="prod_table">
				<thead>
					<tr>
						<th>구분</th>
						<th>실속형</th>
						<th>안심형</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>기본 Plan</td>
						<td>
							상해/질병 입∙통원비 보장<br>
							(1일 10만원까지, 연간 총 1000만원 한도)
						</td>
						<td>
							상해/질병 입∙통원비 보장<br>
							(1일 15만원까지, 연간 총 1500만원 한도)
						</td>
					</tr>
					<tr>
						<td>수술 확장 Plan</td>
						<td>
							기본 Plan + 수술비 회당 100만원까지 보장<br>
							(연 2회 한)
						</td>
						<td>
							기본 Plan + 수술비 회당 150만원까지 보장<br>
							(연 2회 한)
						</td>
					</tr>
					<tr>
						<td>종합 Plan</td>
						<td>수술확장 Plan + 피부병 보장</td>
						<td>수술확장 Plan + 피부병 보장</td>
					</tr>
					<tr>
						<td>선택형 특약</td>
						<td colspan="2">슬관절(기본Plan 가입불가) 수술비용보장, 배상책임보장, 사망위로금(15만원 정액)<br>
							* 슬관절 가입연령: 60일 ~ 만 11개월(갱신가능), 연1회 100만원까지 담보
						</td>
					</tr>
				</tbody>
			</table>
			<ul>
				<li>- 배상책임은 보상한도 5백만원, 1천만원, 3천만원 중 선택 가능합니다. 일부 견종은 가입이 제한됩니다.</li>
				<li>- 배상책임의 가입불가 견종은 다음과 같습니다. <br>
					아메리칸 핏불 테리어, 스테포드셔 불 테리어, 핏불테리어, 도사견, 진도, 로트와일러, 삽살이, 풍산, 마스티프, 
					티베탄마스티프, 차우차우
				</li>
			</ul>
		</div>
		<div class="prod_table_box" >
			<h1>
				보험료 예시-(말티즈 0세, 1년만기 일시납 기준)
			</h1>
			<table class="prod_table">
				<thead>
					<tr>
						<th>구분</th>
						<th>실속형</th>
						<th>안심형</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>기본 Plan</td>
						<td>
							197,400원
						</td>
						<td>
							255,000원	
						</td>
					</tr>
					<tr>
						<td>수술 확장 Plan</td>
						<td>
							252,600원
						</td>
						<td>
							306,000원
						</td>
					</tr>
					<tr>
						<td>종합 Plan</td>
						<td>327,600원</td>
						<td>402,900원</td>
					</tr>
					<tr>
						<td>선택형 특약</td>
						<td colspan="2">
							슬관절 수술비용보장 148,200원, 배상책임보장 7,400원, 사망위로금 2,500원<br>
							* 배상책임보장은 보상한도 1천만원 기준
						</td>
					</tr>
				</tbody>
			</table>
			<ul>
				<li>- 보험기간은 1년만기, 3년만기 2가지로 선택 가능합니다.</li>
				<li>- 상기 보험료는 요율 변동 및 가입 조건에 따라 변경될 수 있습니다.</li>
			</ul>
		</div>
	</div>

	<div class="ins_terms_download" style="display:none">
		<a><span>보험약관 다운로드</span></a>
	</div>

	<div class="join_note" style="display:none">
		<div class="tit">가입시 유의사항</div>
		<div class="inner">
			<dl>
				<dt><span>1. 예금자보호 안내</span></dt>
				<dd>
					<p>
					이 보험계약은 예금자보호법에 따라, 예금보험공사가 보호하되, 보호 한도는 본 보험회사에 있는 귀하의 모든 예금보호 대상 금융상품의 해약환급금(또는 만기 시 보험금이나 사고보험금)에 기타 지급금을
					합하여 1인당 "최고 5천만원"이며, 5천만원을 초과하는 나머지 금액은 보호하지 않습니다. 다만, 보험계약자 및 보험료 납부자가 법인인 보험계약은 예금자 보호법에 따라 예금보험공사가 보호하지 않습니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt><span>2. 청약 시에는 보험계약의 기본사항을 반드시 확인하시기 바랍니다.</span></dt>
				<dd>
					<p>
					보험계약 청약 시에는 보험상품명, 보험기간, 보험료, 보험료 납입기간, 피보험자 등을 반드시 확인하시고, 보험약관을 반드시 수령 • 설명 받으시기 바랍니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt><span>3. 보험계약자의 자필서명</span></dt>
				<dd>
					<p>
					청약서는 보험계약자 본인이 작성하고 서명란에도 보험계약자 본인이 자필서명을 하셔야 합니다. 자필서명을 하지 않으신 경우 보험계약의 효력 등과 관련하여 불이익이 있을 수 있습니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt><span>4. 가입자의 계약 전 알릴 의무</span></dt>
				<dd>
					<p>
					계약자, 피보험자 또는 이들의 대리인은 청약시 청약서(질문서를 포함합니다)에서 질문한 사항에 대하여 알고 있는 사실을 반드시 사실대로 회사에 알려야 합니다. 그렇지 않은 경우 보험금 지급이 거절되거나 보험계약이 해지될 수 있습니다.
					</p>
				</dd>
			</dl>
			<dl>
				<dt><span>5. 청약철회 및 품질보증제도에 관한 사항</span></dt>
				<dd>
					<p>
					계약자는 보험증권을 받은 날부터 15일 이내(다만, 청약한 날부터 30일을 한도로 합니다)에 그 계약의 청약을 철회할 수 있습니다. 다만, 보험기간이 1년 미만인 계약 또는 전문보험계약자가 체결한 계약은
					청약을 철회할 수 없습니다. 보험계약을 청약할 때 약관과 계약자 보관용 청약서를 전달받지 못하였거나 약관의 중요한 내용을 설명받지 못한 때 또는 자필서명을 하지 않은 때에는 계약자는 계약이 성립한
					날로부터 3개월 이내에 계약을 취소할 수 있습니다.

					</p>
				</dd>
			</dl>
			<dl>
				<dt><span>6. 해지환급금</span></dt>
				<dd>
					<p>
					계약자 또는 피보험자의 책임있는 사유로 해지하는 경우에는 이미 경과한 기간에 대하여 단기요율로 계산한 보험료를 뺀 금액을 지급하여 드립니다.(계약자가 납입한 보험료 중 일부는 불의의 사고를 당한
					다른 가입자에게 지급되는 보험금으로, 일부는 보험회사 운영에 필요한 경비로 사용되므로 중도해지 시 지급되는 환급금은 납입한 보험료보다 적거나 없을 수 있습니다.)
					</p>
				</dd>
			</dl>
			<dl>
				<dt><span>7. 계약해지 후 다른 보험 계약시 유의사항</span></dt>
				<dd>
					<p>
					보험계약자가 기존에 체결했던 보험계약을 해지하고 다른 보험계약을 체결하면 보험인수가 거절되거나 보험료가 인상되거나 보장내용이 달라질 수 있습니다.
					</p>
				</dd>
			</dl>

		</div>
	</div>
</div>


<script>

falling_motion();
floating_motion();


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

</script>
<!--191101 수정-->
<div id="popTableWrap">
	<div class="pop_scroll_con">
		<div class="pop_close" onclick="closeInsPopup()"><img src="/img/sub/btn_close.png"/></div>

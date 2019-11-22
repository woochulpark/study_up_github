<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="mainContainer">
	<div id="loader">
		<div class="bg bg1"></div>
		<div class="bg bg2"></div>
		<div class="ld_table">
			<div class="ld_tableCell">
				<div class="loader_inner">
					<h1>
						<img class="" src="/img/logo.png"/>
						<span class="">
							<img class="logo_letter pet" src="/img/logo-pet.png"/>
							<img class="logo_letter i" src="/img/logo-i.png"/>
							<img class="logo_letter p" src="/img/logo-p.png"/>
							<img class="logo_letter e" src="/img/logo-e.png"/>
							<img class="logo_letter t" src="/img/logo-t.png"/>
						</span>
					</h1>
					<h2 class="text">
						<p class="txt_line1">병원비 걱정없이 소중한 반려동물이</p>
						<p class="txt_line2"> 가족과 함께 행복하게 지낼수 있도록</p>
					</h2>
					<div class="skip" onclick="skip()">
						<span>SKIP</span>
						<div class="timebar">
							<var class="left"><em></em></var>
							<var class="right"><em></em></var>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fullpage-nav">
		<ul>
			<li class="active"><a onclick="fullpage_api.moveTo(1);"><em></em><span>간단 반려동물 보험 보장내용 조회</span></a></li>
			<li><a onclick="fullpage_api.moveTo(2);"><em></em><span>방법에따른 보험선택</span></a></li>
			<li><a onclick="fullpage_api.moveTo(3);"><em></em><span>반려동물 보험사 상품</span></a></li>
			<li><a onclick="fullpage_api.moveTo(4);"><em></em><span>NOTICE/FAQ</span></a></li>
		</ul>
	</div>

	<div class="scroll_box">
		<span>SCROLL</span>
	</div>
<?/*
	<div id="sideQuick">
		<ul>
			<!--191101수정{-->
			<li class="tel">
				<a href="tel:1670-9010">
					<img src="/img/icon_tel.png"/>
					<h1>고객센터</h1>
					<h2>1670-9010</h2>
				</a>
			</li>
			<!--}191101수정-->
			<li class="kakao">
				<a>
					<img src="/img/icon_kakao.png"/>
					<h1>@아이펫</h1>
				</a>
			</li>
			<li class="top" onclick="fullpage_api.moveTo(1)">
				<a>
				TOP
				</a>
			</li>
		</ul>
	</div>
*/?>
	<div id="fullpage">
		<!--SECTION 01-->
		<div class="section section01">
			<div class="bg_wrap">
				<span class="bg bg3"></span>
				<span class="bg bg1 active"></span>
				<span class="bg bg2"></span>
				
			</div>

			<div class="section01_con">
				<div class="section01_con_inner">
					<div class="main_section_tit">
						<h1>

							국내 최초! <b> 반려동물보험 상품 비교서비스</b><br/>
							<b>아이펫</b>에서<dfn></dfn>
							one-stop으로 해결!
						</h1>
					</div>
					<div class="main_insure_wrap">
						<div class="insure_icon_wrap">
							<ul class="icon_list1 active">
								<li>
									<img src="/img/icon_doc.png"/>
									<h1>
										초 간단! <br/>
										상품 비교 서비스
									</h1>
								</li>
								<li>
									<img src="/img/icon_clock.png"/>
									<h1>
										5분만에<br/>
										가입가능
									</h1>
								</li>
								<li>
									<img src="/img/icon_dog.png"/>
									<h1>
										국내 최고 보험사의<br/>
										반려동물 보험
									</h1>
								</li>
							</ul>
							<ul class="icon_list2">
								<li>
									<img src="/img/icon_care.png"/>
									<h1>
										치료비, 배상책임,<br/>
										장례비까지 세심한 보장
									</h1>
								</li>
								<li>
									<img src="/img/icon_hospital.png"/>
									<h1>
										전국 모든 동물병원을<br/>
										이용하셔도 보장가능!
									</h1>
								</li>
							</ul>
						</div>

						<div class="ins_search_wrap">
							<div class="falling_motion falling_figure1"></div>
							<div class="falling_motion falling_figure2"></div>
							<div class="bg_nav">
								<span class="bg_btn bg1 active" onclick="section01_bg(1)"></span>
								<span class="bg_btn bg2" onclick="section01_bg(2)"></span>
							</div>
							<div class="ins_search_box">
								<form name="info_put" method="POST">
									<input type="hidden" name="basech" id="basech" value="info" />									
									<h1 class="tit">
										간단한 정보 입력으로<samp></samp>
										반려동물의<dfn></dfn>
										보장 내용을<samp></samp>
										확인해 보세요
									</h1>
									
									<ul class="form_box">
										<li>
											<span>반려동물 생년월일</span>
											<input type="text" name="petbirth" id="petbirth" readonly='readonly' readonly/>
										</li>
										<li>
											<span>반려동물 이름</span>
											<input type="text" id="petname" name="petname"/>
										</li>
										<li class="chk_pet_cate">
											<span>반려동물 선택</span>
											<div class="chk_wrap">
												<label for="chk_dog"><input type="radio" id="chk_dog" name="pet_cate" value="01">
													<em></em><var>강아지</var>
												</label>
												<label for="chk_cat"><input type="radio" id="chk_cat" name="pet_cate" value="02">
													<em></em><var>고양이</var>
												</label>
											</div>
										</li>
										<li class="chk_pet_sick">
											<span style="line-height:20px;">최근 90일 이내<br /> 치료이력</span>
											<div class="chk_wrap">
												<label><input type="radio" id="" name="dog_sick"  value="Y">
													<em></em><var>있음</var>
												</label>
												<label><input type="radio" id="" name="dog_sick" value="N">
													<em></em><var>없음</var>
												</label>												
											</div>
										</li>
										<li class="chk_dog_regi">
											<span>반려동물 등록증</span>
											<div class="chk_wrap">
												<label><input type="radio" id="" name="dog_regi"  value="Y">
													<em></em><var>있음</var>
												</label>
												<label><input type="radio" id="" name="dog_regi" value="N">
													<em></em><var>없음</var>
												</label>												
											</div>
										</li>
										<?/*
										<li class="chk_dog_size">
											<span>반려견 종류</span>
											<div class="chk_wrap">
												<label><input type="radio" id="" name="dog_size" >
													<em></em><var>대형견</var>
												</label>
												<label><input type="radio" id="" name="dog_size">
													<em></em><var>중형견</var>
												</label>
												<label><input type="radio" id="" name="dog_size">
													<em></em><var>소형견</var>
												</label>
											</div>											
										</li>
										*/?>
									</ul>
									<div class="btn_submit" onclick="javascript:submit_pet();">반려동물 보험 보장내용 조회</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--SECTION 02-->
		<div class="section section02">
			<div class="main_section_tit">
				<h1>
					<b>다양한 방법</b>으로<br/>
					고객님의 반려동물에 맞는 보험을 비교해 보세요.
				</h1>
			</div>
			<div class="main_select_wrap">
				<ul class="ins_type_select">
					<li class="sel_company">
						<div class="sel_vir_con">
							<div class="sel_con_inner">
								<h1><img src="/img/icon_ins_type_company.png"/></h1>
								<h2>보험사선택</h2>
								<ul class="sel_list">
									<li><a href="#none" id ="insuch1">DB손해보험 Petsafe</a></li>
									<li><a href="#none" id ="insuch2">삼성화재 애니펫</a></li>
									<li><a href="#none" id ="insuch3">메리츠화재 펫퍼민트</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="sel_petcate">
						<div class="sel_vir_con">
							<div class="sel_con_inner">
								<h1><img src="/img/icon_ins_type_petcate.png"/></h1>
								<h2 class="pc_show">반려동물 종류<br/>선택</h2>
								<h2 class="m_show">반려동물 선택</h2>
								<ul class="sel_list">
									<li><a href="#none" id ="petch1">강아지</a></li>
									<li><a href="#none" id ="petch2">고양이</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="sel_pay">
						<div class="sel_vir_con">
							<div class="sel_con_inner">
								<h1><img src="/img/icon_ins_type_pay.png"/></h1>
								<h2>보험료 납입방법<br/>선택</h2>
								<ul class="sel_list">
									<li><a href="#none" id ="delich1">월납 갱신형</a></li>
									<li><a href="#none" id ="delich2">일시납 갱신형</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="sel_petsick">
						<div class="sel_vir_con">
							<div class="sel_con_inner">
								<h1><img src="/img/icon_ins_type_petsize.png"/></h1>
								<h2>최근  치료이력<br/><em>(90일 이내 강아지한정)</em></h2>
								<ul class="sel_list">
									<li><a href="#none" id ="sickch1">있음</a></li>
									<li><a href="#none" id ="sickch2">없음</a></li>
								</ul>
							</div>
						</div>
					</li>
					<?/*
					<li class="sel_petsize">
						<div class="sel_vir_con">
							<div class="sel_con_inner">
								<h1><img src="/img/icon_ins_type_petsize.png"/></h1>
								<h2>반려견 크기 선택<br/><em>(강아지한정)</em></h2>
								<ul class="sel_list">
									<li><a href="#none" id ="sizech1">대형견</a></li>
									<li><a href="#none" id ="sizech2">중형견</a></li>
									<li><a href="#none" id ="sizech3">소형견</a></li>
								</ul>
							</div>
						</div>
					</li>*/?>
				</ul>
			</div>
		</div>

		<!--SECTION 03-->
		<div class="section section03">
			<div class="main_section_tit">
				<img src="/img/logo_white.png"/>
				<h1>
					아이펫과 함께하는 <br/><b>국내 최고 보험사의 반려동물보험</b>
				</h1>
			</div>
			<div class="main_product_wrap">
				<div class="main_product_slide">
					<div><a href="/Product/Petpermint"><img src="/img/ins_prd01.png"/></a></div>
					<div><a href="/Product/Db_petsafe"><img src="/img/ins_prd03.png"/></a></div>
					<div><a href="/Product/Anypet"><img src="/img/ins_prd02.png"/></a></div>					
					<div><a href="/Product/Petpermint"><img src="/img/ins_prd01.png"/></a></div>
					<div><a href="/Product/Db_petsafe"><img src="/img/ins_prd03.png"/></a></div>
					<div><a href="/Product/Anypet"><img src="/img/ins_prd02.png"/></a></div>	
				</div>
			</div>
		</div>

		<!--SECTION 04-->
		<div class="section section04">
			<div class="main_section_tit">
				<h1>
					NOTICE
				</h1>
			</div>
			<div class="main_notice_wrap">
				<!--191101 faq 수정{-->
				<div class="faq bo_box">
					<h2>자주묻는 질문<a href="/Faq" class="more_btn">MORE</a></h2>
					<div class="faq_tab">
						<ul>							
							<li class="active">
								<a>
									DB손해보험 <dfn></dfn>-펫세이프
								</a>
							</li>
							<li>
								<a>
									메리츠화재 <dfn></dfn>-펫퍼민트
								</a>
							</li>
							<li >
								<a>
									삼성화재 <dfn></dfn>-애니펫
								</a>
							</li>
						</ul>
					</div>
					
					<div class="faq_list faq_list1 active"">
						<? 
								foreach($db as $k => $v ){																			
						?>
						<dl <?=($k < 1) ? 'class="active"' : '';?>>
							<dt>	
								<var><b>Q.</b><?=$v['q_content']?></var>
								<span></span>
							</dt>
							<dd>
								<p>
								<?=nl2br($v['a_content'])?>
								</p>
							</dd>
						</dl>
						<?
							}
						/*
						<dl>
							<dt>
								<var><b>Q.</b>보상청구 절차는 어떻게 되나요?</var>
								<span></span>
							</dt>
							<dd>
								<p>
								가입 하신 보험의 보상청구는 아래 각 보험사의 보상청구 페이지를 참고하여 청구를 진행하시면 됩니다.
								더 설명이 필요하시다면 아이펫 고객센터에 문의 주시면 상세하게 알려드립니다.</br>
								</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<var><b>Q.</b>질병 확장 담보 중 피부질환은 귀에 생긴 것도 포함되나요?</var>
								<span></span>
							</dt>
							<dd>
								<p>
								선천적이지 않은 외이염, 중이염, 피부알러지, 피부트러블은 피부병으로
								간주되어 해당 치료비가 보장됩니다. 수의사님의 피부질환 진단서가 필요하며
								이 청구서를 보상 청구 시 보장이 가능합니다.
								</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<var><b>Q.</b>중성화 수술을 하지 않아서 생기는 질환은 보상이 가능한가요?</var>
								<span></span>
							</dt>
							<dd>
								<p>
								네, 보상 가능합니다. 단, 중성화수술을 받지 않아 발생한 질병이 약관 상 보상하지 않는 손해에 해당되면 면책 사항이 됩니다.
								</p>
							</dd>
						</dl>
						*/
						?>
					</div>
					<div class="faq_list faq_list2">
						<? 
								foreach($meritz as $k => $v ){																			
						?>
						<dl <?=($k < 1)? 'class="active"' : '';?>>
							<dt>
								<var><b>Q.</b><?=$v['q_content']?></var>
								<span></span>
							</dt>
							<dd>
								<p>
								<?=nl2br($v['a_content'])?>
								</p>
							</dd>
						</dl>
						<?
							}
						/*
						<dl>
							<dt>
								<var><b>Q.</b>보상청구 절차는 어떻게 되나요?</var>
								<span></span>
							</dt>
							<dd>
								<p>
								가입 하신 보험의 보상청구는 아래 각 보험사의 보상청구 페이지를 참고하여 청구를 진행하시면 됩니다.
								더 설명이 필요하시다면 아이펫 고객센터에 문의 주시면 상세하게 알려드립니다.</br>
								</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<var><b>Q.</b>질병 확장 담보 중 피부질환은 귀에 생긴 것도 포함되나요?</var>
								<span></span>
							</dt>
							<dd>
								<p>
								선천적이지 않은 외이염, 중이염, 피부알러지, 피부트러블은 피부병으로
								간주되어 해당 치료비가 보장됩니다. 수의사님의 피부질환 진단서가 필요하며
								이 청구서를 보상 청구 시 보장이 가능합니다.
								</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<var><b>Q.</b>중성화 수술을 하지 않아서 생기는 질환은 보상이 가능한가요?</var>
								<span></span>
							</dt>
							<dd>
								<p>
								네, 보상 가능합니다. 단, 중성화수술을 받지 않아 발생한 질병이 약관 상 보상하지 않는 손해에 해당되면 면책 사항이 됩니다.
								</p>
							</dd>
						</dl>
						*/?>
					</div>
					<div class="faq_list faq_list3">
						<? 
								foreach($samsung as $k => $v ){																			
						?>
						<dl <?=($k < 1)? 'class="active"' : '';?>>					
							<dt>
								<var><b>Q.</b><?=$v['q_content']?></var>
								<span></span>
							</dt>
							<dd>
								<p>
								<?=nl2br($v['a_content'])?>
								</p>
							</dd>
						</dl>
						<?
								}
									
						?>
						<?/*
						<dl>
							<dt>
								<var><b>Q.</b>보상청구 절차는 어떻게 되나요?</var>
								<span></span>
							</dt>
							<dd>
								<p>
								가입 하신 보험의 보상청구는 아래 각 보험사의 보상청구 페이지를 참고하여 청구를 진행하시면 됩니다.
								더 설명이 필요하시다면 아이펫 고객센터에 문의 주시면 상세하게 알려드립니다.</br>
								</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<var><b>Q.</b>질병 확장 담보 중 피부질환은 귀에 생긴 것도 포함되나요?</var>
								<span></span>
							</dt>
							<dd>
								<p>
								선천적이지 않은 외이염, 중이염, 피부알러지, 피부트러블은 피부병으로
								간주되어 해당 치료비가 보장됩니다. 수의사님의 피부질환 진단서가 필요하며
								이 청구서를 보상 청구 시 보장이 가능합니다.
								</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<var><b>Q.</b>중성화 수술을 하지 않아서 생기는 질환은 보상이 가능한가요?</var>
								<span></span>
							</dt>
							<dd>
								<p>
								네, 보상 가능합니다. 단, 중성화수술을 받지 않아 발생한 질병이 약관 상 보상하지 않는 손해에 해당되면 면책 사항이 됩니다.
								</p>
							</dd>
						</dl>
						
						*/?>
					</div>
				</div>
				<!--}-->
				<div class="insured bo_box" >
					<h2>가입현황<!--a class="more_btn">MORE 〉</a--></h2>
					<ul id="insu_list">
						<?
							
								foreach($list_join_rand as $k=>$v){
						?>
						<li><a><?=$v?></a></li>
						<?
							}
						/*
						<li><a>[가입완료] 마르티스 / 8세 / 총보험료 월 45,000 원</a></li>
						<li><a>[가입완료] 마르티스 / 8세 / 총보험료 월 45,000 원</a></li>
						<li><a>[가입완료] 마르티스 / 8세 / 총보험료 월 45,000 원</a></li>
						*/
						?>
					</ul>
				</div>
				<div class="news bo_box">
					<h2>새소식<a href="/Noti" class="more_btn">MORE 〉</a></h2>
					<ul>
						<? 
								foreach($noti as $k => $v ){																			
						?>
						<li><a href="/Noti/Detail/<?=$v['srno']?>"><?=$v['title']?></a><span class="date"><?=date("Y.m.d",strtotime(substr($v['regdate'],0,10)));?></span></li>
						<?
								}
							/*
						<li><a>[아이펫] 조회만해도 애견용품을 드려요!</a><span class="date">2019.10.01</span></li>
						<li><a>[아이펫] 조회만해도 애견용품을 드려요!</a><span class="date">2019.10.01</span></li>
						<li><a>[아이펫] 조회만해도 애견용품을 드려요!</a><span class="date">2019.10.01</span></li>
						*/
						?>
					</ul>
				</div>
			</div>
		</div>

		<div class="section section_footer section05 fp-auto-height">
			<div class="section_counsel">
				<div class="main_section_tit">
					<img src="/img/logo.png"/>
					<h1>
						빠른상담안내
					</h1>
				</div>
				<ul class="counsel_link">
					<li class="cs_center">
						<a>
							<h1>다이렉트 고객센터</h1>
							<h2>1670·9010</h2>
							<h3>(평일 오전 9시 ~ 오후 6시)</h3>
						</a>
					</li>
					<li class="kakao">
						<a href="https://open.kakao.com/o/sjHkpBLb" target="_blank">
							<img src="/img/icon_kakao2.png"/>
							<h1>Kakao ID</h1>
							<h2>@아이펫</h2>
						</a>
					</li>
				</ul>
			</div>

			<footer id="footer">
				<div class="footer_top">
					<div class="inner">
						<ul class="footer_menu">
							<li><a href="/Policy/Privacy">개인정보처리방침</a></li>
					<li><a href="/Policy/Service">이용약관</a></li>
					<li><a href="/Policy/Rules">단체규약</a></li>
					<li><a href="/Policy/Sitemap">사이트맵</a></li>
						</ul>
						<div class="go_top_btn" onclick="fullpage_api.moveTo(1)">TOP</div>
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
					</div>
				</div>
			</footer>
		</div>
	</div>

</div>
<script src="/js/main.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('ul.sel_list > li > a').on('click',function(){
			 choicePath($(this).attr('id'));
		});			
	});
</script>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="popup_ins_con">
		
		<div class="pop_tit">
			<h1>보험사 별 보장 비교표</h1>
			<span>* 각 보험사 별 보장 내용은 해당 보험사의 업데이트 내용에 따라 변동될 수 있습니다.</span>
			<!--191101 추가{-->
			<ul class="pop_cate_tab">
				<li class="active" onclick="insTbl('dog',0)">강아지</li>
				<li onclick="insTbl('cat',1)">고양이</li>
			</ul>
			<!--}-->
		</div>
		<div class="tbl_wrap tbl_dog">
			<table>
				<thead>
					<tr>
						<th>보험사</th>
						<th>DB 손해보험</th>
						<th>메리츠 화재</th>
						<th>삼성화재</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>상품명</th>
						<td>프로미 반려동물보험</td>
						<td>펫퍼민트</td>
						<td>반려견보험 애니펫</td>
					</tr>
					<tr>
						<th>구분</th>
						<td>일반보험</td>
						<td>장기보험</td>
						<td>일반보험/장기보험</td>
					</tr>
					<tr>
						<th>가입대상</th>
						<td>강아지</td>
						<td>강아지,고양이</td>
						<td>강아지</td>
					</tr>
					<tr>
						<th>동물등록</th>
						<td>미등록견 가능</td>
						<td>미등록견 가능</td>
						<td>미등록견 가능</td>
					</tr>
					<tr>
						<th>가입연령</th>
						<td>생후 2개월 ~ 5세</td>
						<td>생후 91일~만 8세</td>
						<td>생후 60일 ~ 만 8세</td>
					</tr>
					<tr>
						<th>가입기간</th>
						<td>1년 갱신/만 10세 종료</td>
						<td>3년 갱신/만 20세 종료</td>
						<td>1년 갱신/재가입12세11개월</td>
					</tr>
					<tr>
						<th>납입방법</th>
						<td>일시납</td>
						<td>월납</td>
						<td>일시납 or 월납</td>
					</tr>
					<tr>
						<th>입원/통원<dfn></dfn> 의료비</th>
						<td>1일당 최고 15만원 연 20일까지</td>
						<td>1일당 15만원  연간 500만원</td>
						<td>1일 15만원 연간 1500만원</td>
					</tr>
					<tr>
						<th>수술비</th>
						<td>1회당 150만원 연 2회</td>
						<td>1일당 200만원  연간 500만원</td>
						<td>1회당 150만원 연 2회</td>
					</tr>
					<tr>
						<th>자기부담금</th>
						<td>0/1/3만원</td>
						<td>1만원</td>
						<td>2만원</td>
					</tr>
					<tr>
						<th>보상비율</th>
						<td>70%</td>
						<td>50%~70%</td>
						<td>70%</td>
					</tr>
					<tr>
						<th>면책기간</th>
						<td>
							30일<br/>
							(슬/고관절,피부/구강질환 포함)
						</td>
						<td>30일 (슬관절, 고관절 1년)</td>
						<td>30일 (슬관절 90일)</td>
					</tr>
					<tr>
						<th>탈구질환</th>
						<td>보장 </td>
						<td>보장 </td>
						<td>보장(50%) 1회 플랜 선택 시</td>
					</tr>
					<tr>
						<th>구강 내 질환</th>
						<td>보장</td>
						<td>보장</td>
						<td>보장 X</td>
					</tr>
					<tr>
						<th>피부질환</th>
						<td>보장</td>
						<td>보장</td>
						<td>보장 (플랜 선택 시)</td>
					</tr>
					<tr>
						<th>배상책임</th>
						<td>보장 (1사고당 500만원)</td>
						<td>보장 (1회 1천만원 한도)</td>
						<td>보장(1사고당,<br>연간 3000만원 한도)</td>
					</tr>
					<tr>
						<th>장례비 지원</th>
						<td>보장 </td>
						<td>보장 X </td>
						<td>보장</td>
					</tr>
					<tr class="tr_lst">
						<th>상품특징</th>
						<td>
							대표 3대질환 슬/고관절,
							피부 질환, 구강질환 (보험가입
							31일 부터 보장) 
							공인인증서나 동물등록증 
							없이도 비문(코사진3장)
							인식으로 등록 가능타사대비
							가장 저렴한 보험료
						</td>
						<td>
							슬/고관절 질환, 피부질환, 
							구강질환기본보장(보험가입 
							1년후 보장) 동물등록제 등록
							확인 시, 추가 2% 할인
						</td>
						<td>
							등록번호 없을실 반려견의 
							생년월일, 견종, 이름 확인
							가능한 서류와 사진 2장으로
							가입가능. 슬개골 탈구(면책
							기간 90일) 청구시 or 많이
							아팠을 경우  재가입시
							가입제한 가능. 슬관절 수술비
							1세 이하만 가입가능
						</td>
					</tr>

				</tbody>
			</table>
		</div>

		<div class="tbl_wrap tbl_cat">
			<table>
				<thead>
					<tr>
						<th>보험사</th>
						<th>메리츠 화재</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>상품명</th>
						<td>펫퍼민트</td>
					</tr>
					<tr>
						<th>구분</th>
						<td>장기보험</td>
					</tr>
					<tr>
						<th>가입대상</th>
						<td>고양이</td>
					</tr>
					<tr>
						<th>동물등록</th>
						<td>미등록묘 가능</td>
					</tr>
					<tr>
						<th>가입연령</th>
						<td>생후 91일~만 8세</td>
					</tr>
					<tr>
						<th>가입기간</th>
						<td>3년 갱신/만 20세 종료</td>
					</tr>
					<tr>
						<th>납입방법</th>
						<td>월납</td>
					</tr>
					<tr>
						<th>입원 의료비</th>
						<td>1일당 15만원 연간 500만원</td>
					</tr>
					<tr>
						<th>통원 의료비</th>
						<td>1일당 15만원 연간 500만원</td>
					</tr>
					<tr>
						<th>수술비</th>
						<td>1일당 200만원 연간 500만원</td>
					</tr>
					<tr>
						<th>자기 부담금</th>
						<td>1만원</td>
					</tr>
					<tr>
						<th>보상 비율</th>
						<td>50%~70%</td>
					</tr>
					<tr>
						<th>면책기간</th>
						<td>
							질병 30일 부담보 90일 (비노기계,전염성복막염)
						</td>
					</tr>
					<tr>
						<th>장례비 지원</th>
						<td>보장 X</td>
					</tr>
					<tr>
						<th>상품 특징</th>
						<td>비뇨기계질환,전염성복막염의경우 가입후 90일이내 발병시 미보장</td>
					</tr>
					<tr>
						<th>가입시 준비사항</th>
						<td>예방접종 받고있는 병원 필수, 얼굴사진 또는 정면사진 첨부</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
<script>
	function insTbl(cate,i){
		$('.pop_cate_tab li').eq(i).addClass('active').siblings().removeClass('active');
		$('.tbl_'+cate).siblings('.tbl_wrap').css('display','none');
		$('.tbl_'+cate).css('display','block');
		$(".pop_scroll_con").getNiceScroll().resize();
	}
	insTbl('dog',0);
</script>

	</div>
</div>
<?php
$pn=3; $board="qna";
include_once('../head.php');
?>

<div class="sub_visual" style="background:url('/img/sub/sub_visual03.jpg')center; background-size:cover">
	<div class="visual_txt">
		<h1 class="white"><img src="/img/logo_white.png"/><span>Q&A</span></h1>
	</div>
</div>

<!--
문의글 비밀번호 확인
-->
<div id="pop_pw_confirm">
	<div class="pw_confirm_box">
		<div class="btn_close" onclick="pop_pw_close()"><img src="/img/skin/btn_close.png"/></div>
		<h1 class="logo"><img src="/img/logo.png"/></h1>
		<form>
			<input type="password" class="frm_input" placeholder="비밀번호"/>
			<input type="submit" value="확인" class="btn_submit"/>
		</form>
	</div>
</div>

<div id="boardWrap">
	<div class="bo_top">
		<div class="bo_tit">Q&A</div>
		<div class="bo_search_wrap">
			<form>
				<select class="bo_search_sel">
					<option>제목</option>
					<option>내용</option>
					<option>제목+내용</option>
				</select>
				<input type="text" class="bo_search_input" placeholder="검색어를 입력해주세요"/>
				<button type="submit" class="bo_search_btn">검색</button>
			</form>
		</div>
	</div>

	<form name="fboardlist" id="fboardlis">
	<table class="bo_list_tbl">
		<thead>
			<th class="th_chk">
				<label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
			</th>
			<th class="th_num">번호</th>
			<th class="th_subject">제목</th>
			<th class="th_name">작성자</th>
			<th class="th_date">작성일</th>
			<th class="th_hit">조회</th>
		</thead>
		<tbody>
			<tr>
				<td class="td_chk">
					<input type="checkbox" name="chk_wr_id[]">
				</td>
				<td class="td_num">387</td>
				<td class="td_subject">
					<a href="/qna/view.php">
					말티즈 9살 건강검진상 문제없었는데 지금도 가입가능한가요??</a>
					<div class="m_info">
						박** | 작성일:2019-10-22 | 조회:51
					</div>
				</td>
				<td class="td_name">박**</td>
				<td class="td_date">2019-10-22</td>
				<td class="td_hit">51</td>
			</tr>
			<tr>
				<td class="td_chk">
					<input type="checkbox" name="chk_wr_id[]">
				</td>
				<td class="td_num">387</td>
				<td class="td_subject">
					<a href="/qna/view.php">
					말티즈 9살 건강검진상 문제없었는데 지금도 가입가능한가요??말티즈 9살 건강검진상 문제없었는데 지금도 가입가능한가요??
					</a>
					<div class="m_info">
						박** | 작성일:2019-10-22 | 조회:51
					</div>
				</td>
				<td class="td_name">박**</td>
				<td class="td_date">2019-10-22</td>
				<td class="td_hit">51</td>
			</tr>
		</tbody>
	</table>
	<div class="bo_btn_list">
		<div class="btn_bo_user">
			<button class="btn_b01 bo_btn">선택삭제</button>
			<button class="btn_b01 bo_btn">선택복사</button>
			<button class="btn_b01 bo_btn">선택이동</button>
		</div>
		<div class="btn_bo_user right">
			<a class="btn_b02 bo_btn" href="/qna/write.php">글쓰기</a>
		</div>
	</div>

	<div class="bo_pagination">
		<a class="pg_page pg_first pg_btn">처음</a>
		<a class="pg_page pg_prev pg_btn">이전</a>
		<strong class="pg_page pg_current">1</strong>
		<a class="pg_page">2</a>
		<a class="pg_page">3</a>
		<a class="pg_page pg_next pg_btn">다음</a>
		<a class="pg_page pg_last pg_btn">맨끝</a>
	</div>

	</form>
</div>


<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function pop_pw_close(){
	$('#pop_pw_confirm').css('display','none');
}

</script>


<?php
include_once('../tail.php');
?>
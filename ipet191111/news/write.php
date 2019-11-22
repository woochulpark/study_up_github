<?php
$pn=3; $board="news";
include_once('../head.php');
?>

<div class="sub_visual" style="background:url('/img/sub/sub_visual03.jpg')center; background-size:cover">
	<div class="visual_txt">
		<h1 class="white"><img src="/img/logo_white.png"/><span>Q&A</span></h1>
	</div>
</div>
<div id="boardWrap">
	
	<div class="bo_write">
		<form>
		<div class="bo_w_wrap">
			<dl class="bo_w_tit">
				<dt>제목</dt>
				<dd>
					<input type="text" placeholder="제목을 입력해 주세요" class="frm_input"/>
				</dd>
			</dl>

			<dl class="bo_w_con">
				<dd>
					<div class="wr_content">
						<textarea></textarea>
					</div>
				</dd>
			</dl>

			<dl class="bo_w_flie">
				<dt>썸네일</dt>
				<dd>
					<div class="bo_file_wrap">
						<input type="file" class="input_file" id="input_file"/>
						<label for="input_file"></label>
						<input type="text" readonly="readonly" placeholder="CLICK" class="file-name frm_input" />
					</div>
					<div class="delete_file">
						<input type="checkbox" id="file_del"/>
						<label for="file_del">파일삭제</label>
					</div>
				</dd>
			</dl>
			
		</div>

		<div class="bo_submit_btn">
			<div class="btn_bo_user right">
				<a href="/qna/list.php" class="btn_cancel btn_b01 bo_btn">취소</a>
				<input type="submit" class="btn_submit btn_b02 bo_btn" value="작성완료">
			</div>
		</div>
		</form>
	</div>
</div>

<script>
$(document).ready(function(){ 
	var fileTarget = $('.input_file'); 
		fileTarget.on('change', function(){ // 값이 변경되면 
			if(window.FileReader){ // modern browser 
				var filename = $(this)[0].files[0].name; 
				} else { // old IE 
					var filename = $(this).val().split('/').pop().split('\\').pop(); // 파일명만 추출 
				} // 추출한 파일명 삽입 
				$(this).siblings('.file-name').val(filename); 
			}); 
	});
</script>
<?php
include_once('../tail.php');
?>
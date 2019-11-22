<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="sub_visual" style="background:url('/img/sub/sub_visual03.jpg')center; background-size:cover">
	<div class="visual_txt">
		<h1 class="white"><img src="/img/logo_white.png"/><br /><span>새소식</span></h1>
	</div>
</div>

<div id="boardWrap">
	<div class="con_tit_wrap">
		<div class="con_tit">새소식</div>
		<div class="bo_search_wrap">
			<form name="sef" method="post">
				<select class="bo_search_sel" name="ssel">
					<option value="title">제목</option>
					<option value="content">내용</option>					
				</select>
				<input type="text" class="bo_search_input" name="puts" placeholder="검색어를 입력해주세요"/>
				<button type="submit" class="bo_search_btn">검색</button>
			</form>
		</div>
	</div>

	<ul class="bo_news_list">
	<?	
						if($listcnt['curpage'] < 2){
							$wr_cnt  = $listcnt['total'];
						} else {
							$wr_cnt = $listcnt['total'] - (($listcnt['curpage']  - 1) * $listcnt['listcnt']);
						}
						if($listcnt['total'] > 0){
					  		foreach($list as $k=>$v){
						
					?>
		<li>
			<a href="/Noti/Detail/<?=$list[$k]['srno']?>">
				<div class="thumb"><img src="<?=($list[$k]['filename'] != '') ? "http://files.ipet.co.kr/data/thum/".$list[$k]['filename'] : "/img/skin/no_img.jpg";?>"/></div>
				<div class="txt">
					<h1><?=$list[$k]['title']?></h1>
					<h2><?=date("Y.m.d",strtotime(substr($list[$k]['regdate'],0,10)))?></h2>
					<p>
						<?=strip_tags($list[$k]['content'])?>
					</p>
				</div>
			</a>
		</li>
		<?
						  $wr_cnt --;
							} //end foreach
						} else {
						/*
		<li>
			<a href="/news/view.php">
				<div class="thumb no_img">
					<img src="/img/skin/no_img.jpg"/>
				</div>
				<div class="txt">
					<h1>[아이펫] 아이펫 오픈 이벤트!!</h1>
					<h2>2019.10.21</h2>
					<p>
						아이펫사이트 오픈 이벤트를 진행합니다아이펫사이트 오픈 이벤트를 진행합니다아이펫사이트 오픈 이벤트를 진행합니다아이펫사이트 오픈 이벤트를
						진행합니다아이펫사이트 오픈 이벤트를 진행합니다니다아이펫사이트 오픈 이벤트를 진행합니다니다아이펫사이트 오픈 이벤트를 진행합니다니다...
					</p>
				</div>
			</a>
		</li>
	*/?>
		<li style="height:120px;"></li>
		<?
						}
		?>
	</ul>
	<?/*
	<div class="bo_btn_list">
		<div class="btn_bo_user">
			<button class="btn_b01 bo_btn">선택삭제</button>
			<button class="btn_b01 bo_btn">선택복사</button>
			<button class="btn_b01 bo_btn">선택이동</button>
		</div>
		<div class="btn_bo_user right">
			<a class="btn_b02 bo_btn" href="/news/write.php">글쓰기</a>
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
</div>
*/?>
	<?
			foreach($pagin as $k=>$v){
				echo $v;
			}
	?>
</div>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}
</script>

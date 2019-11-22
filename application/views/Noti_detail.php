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
		<h1 class="con_tit">새소식</h1>
	</div>
	
	<article class="bo_view">
		<header class="bo_view_hd">
			<h1 class="tit"><?=$detail_info['title']?></h1>
			<div class="info"><?=date("Y.m.d",strtotime(substr($detail_info['regdate'],0,10)))?> ｜ <?=$detail_info['regname']?></div>
		</header>	
		<section class="bo_view_con">
			<p>
			<?=$detail_info['content']?>
			</p>
		</section>
		<?
			if($detail_info['filename1'] != ''){
		?>
		<div class="bo_news_file">
    	파일명 :  <a href="/Download_hlp/downfile/<?=$detail_info['srno']?>"><?=$detail_info['filesource1']?></a>      
		</div>
	<?} ?>
		<div class="bo_move_area">
			<ul>
				<?
						if($ne_pr['prev_info'] != 'false'){
				?>
				<li class="board_prev">
					<a href="/Noti/Detail/<?=$ne_pr['prev_info']['srno']?>">
						<em>이전글 <img src="/img/sub/icon_up.png"/></em>
						<span><?=$ne_pr['prev_info']['title']?></span>
						<var><?=date("Y.m.d",strtotime(substr($ne_pr['prev_info']['regdate'],0,10)))?></var>
					</a>
				</li>
				<?
						}
						
						if($ne_pr['next_info'] != 'false'){
				?>
				<li class="board_next">
					<a href="/Noti/Detail/<?=$ne_pr['next_info']['srno']?>">
						<em>다음글 <img src="/img/sub/icon_down.png"/></em>
						<span><?=$ne_pr['next_info']['title']?></span>
						<var><?=date("Y.m.d",strtotime(substr($ne_pr['next_info']['regdate'],0,10)))?></var>
					</a>
				</li>
				<?
						}
					?>
			</ul>
		</div>
	</article>
	<div class="bo_btn_list">
		<div class="btn_bo_user right">
			<a class="btn_b02 bo_btn" href="/Noti/">목록</a>
		</div>
	</div>
</div>




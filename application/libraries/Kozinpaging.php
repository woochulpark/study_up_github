<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KozinPaging {
	//전체갯수, 현재페이지, 페이지 당 데이터수, 블록당 페이지수 , 주소
		function pagin_cont($totcnt , $curr_page, $lis_cnt, $fix_offset, $urllink){

			$totalPage = ceil($totcnt / $lis_cnt);

		

		$strtPage = ((ceil($curr_page / $fix_offset) - 1) * $fix_offset ) + 1;
		$endPage = $strtPage + $fix_offset - 1;
	
		if($endPage >= $totalPage) $endPage = $totalPage;
	
$paging_start = <<<EOT
	<div class="bo_pagination">
EOT;

$paging_end = <<<EOT
</div>
EOT;

$page_arr[] = $paging_start;

		$prev_parts = ($curr_page  > 1) ? $curr_page - 1 : '';
		$next_parts = ($curr_page < $totalPage) ? $curr_page + 1 : '';


//$page_arr[] = ($pg_first) ? "<li><a href=\"javascript:mv_board_page('".$urllink."', '".$pg_first."');\" aria-label=\"First\"><span aria-hidden=\"true\">&laquo;&laquo;</span></a></li>":"";
//$page_arr[] = ($pg_prev) ? "<li><a href=\"javascript:mv_board_page('".$urllink."', '".$pg_prev."');\" aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span></a></li>":"";

if($curr_page > 1){
	$page_arr[]  = 	"<a href=\"javascript:mv_board_page('".$urllink."', '1');\"  class=\"pg_page pg_first pg_btn\">처음</a>";	
}

if($curr_page  > 1){
	
	$page_arr[]  =  "<a href=\"javascript:mv_board_page('".$urllink."', '".$prev_parts."');\" aria-label=\"Previous\" class=\"pg_page pg_prev pg_btn\"></a>";
}

if($totalPage > 1){
	for($i = $strtPage; $i <= $endPage; $i++){
		if($curr_page != $i) {
			//$page_arr[] = "<li class=\"active\"><a href=\"#\">".$i."</a></li>";
			$page_arr[] = "<a href=\"javascript:mv_board_page('".$urllink."', '".$i."');\"  class=\"pg_page\">".$i."</a>";
		} else {		
			$page_arr[] = "<strong  class=\"pg_page pg_current\">".$i."</strong>"; //선택한 페이지			
		//	$page_arr[] = "<li><a href=\"javascript:mv_board_page('".$urllink."', '".$i."');\" >".$i."</a></li>";
		}
	}
} else {
	if($totcnt > 0){
		$page_arr[] = "<strong  class=\"pg_page pg_current\">1</strong>";
	}
}
if($curr_page < $totalPage){
	$page_arr[] = "<a href=\"javascript:mv_board_page('".$urllink."', '".$next_parts."');\" aria-label=\"Next\"  class=\"pg_page pg_next pg_btn\">다음</a>";
}
//$page_arr[] = ($pg_next) ? "<li><a href=\"javascript:mv_board_page('".$urllink."', '".$pg_next."');\" aria-label=\"Next\"><span aria-hidden=\"true\">&raquo;</span></a></li>":"";
//$page_arr[] = ($pg_last) ? "<li><a href=\"javascript:mv_board_page('".$urllink."', '".$pg_last."');\" aria-label=\"Last\"><span aria-hidden=\"true\">&raquo;&raquo;</span></a></li>":"";

if($curr_page < $totalPage){
	$page_arr[] =  "<a href=\"javascript:mv_board_page('".$urllink."', '".$totalPage."');\" aria-label=\"Last\" class=\"pg_page pg_last pg_btn\">맨끝</a>";
}


return $page_arr;
	}
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Util {
	
		//target = 현재일, input = 생일
		function age_cal($targetDate, $inputDate) {
    
		$targetDate = str_replace('-','',$targetDate);
		$inputDate = str_replace('-','',$inputDate);
		
		// 현재년도
		$to_year = (int)substr($targetDate,0,4);
		// 현재월
		$to_month = (int)substr($targetDate,4,2);
		// 현재일자
		$to_day = (int)substr($targetDate,6,2);
			
		// 주민번호 연도
		$input_year = (int)substr($inputDate,0,4);
		// 주민번호 월
		$input_month = (int)substr($inputDate,4,2);
		// 주민번호 일자
		$input_day = (int)substr($inputDate,6,2);

		$term_year=$to_year-$input_year; // 계산한년도
		$term_month=$to_month-$input_month; // 계산한달
		$term_day=$to_day-$input_day; // 계산한달

		if ($term_month < 0) { // 현재월이 생일월을 지나기 전

		$gap_year = $term_year  - 1;

		} elseif ($term_month > 0) { // 현재월이 생일월을 지난 후
			
		$gap_year = $term_year + 1;

		} elseif ($term_month == 0) { // 현재월이 생일월이 같은경우
			$gap_year=$term_year;
		}

		$manAge = $gap_year;

		if ((int)substr($targetDate,4,4) < (int)substr($inputDate,4,4)) {
			$manAge = $manAge -1;
		}

		$strt = new DateTime($targetDate);
		$end = new DateTime($inputDate);
		$getday  = date_diff($strt, $end);

	return array($getday->days,$manAge);
}

public function prt_key(){		
		$prt = 'i1800pet9010web';
		return $prt;
	}
	
	} // end class

?>
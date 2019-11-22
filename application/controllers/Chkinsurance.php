<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chkinsurance extends CI_Controller {

		public function __construct()
		{
			parent::__construct();	
			$this->load->helper('url');			
			$this->load->library('util');
			$this->load->library('session');
			$this->load->library('encryption');
		}

		public function index()
		{
				if($this->session->userdata('comapny_sess') == ''){

					$comp_arr = array('comapny_sess'=>'MC20191118141121');
					$this->session->set_userdata($comp_arr); // 회원사 등록 코드 세션 절대 삭제 금지 				
				}

				if($this -> session -> userdata('directgo') == 'Ygo'){
				
					unset($_SESSION['choiceway']);
					unset($_SESSION['choicesub']);
					unset($_SESSION['prtold']);
					unset($_SESSION['prtname']);
					unset($_SESSION['insurance_search_info']); 
					 unset($_SESSION['prtbirth']); 
					 unset($_SESSION['sickboth']); 
					 unset($_SESSION['regboth']);		
					 unset($_SESSION['directgo']);		
					 unset($_SESSION['wr_session']);

				}
				$wrsession_prt  = '';
				$req = $this->input->post();
				$info_chk		 = isset($req['basech'])	&&$req['basech']				? $req['basech']			: '';
				$ch_pet	 = isset($req['secondch'])&&$req['secondch']	 	? $req['secondch']	: '';
				$put_birth = isset($req['putinfo1']) && $req['putinfo1']						? $req['putinfo1'] : '';
				$put_name = isset($req['putinfo2']) && $req['putinfo2']						? $req['putinfo2'] : '';
				$ch_sick = isset($req['chinfo1']) && $req['chinfo1']						? $req['chinfo1'] : '';
				$ch_regi = isset($req['chinfo2']) && $req['chinfo2']						? $req['chinfo2'] : '';
				
				$decry_key = $this->util->prt_key();

				$print['Cutdata'] = array('0세 ~ 만 5세', '치료비보장', '탈구질환 보장', '배상책임 보장', '피부질환 보장', '슬관절 보장'); //기준나이:
				$print['Cutdata6'] = array('0세 ~ 만 5세', '다이렉트 가입제한','전화문의 1670-9010'); //기준나이:
				$print['DB']  = array('true','공인인증서 등 복잡한 인증절차 없이 가입 가능.', '보장 기간: 1년 / 10세까지 갱신', '대표 3대질환: 슬/고관절, 피부질환, 구강질환 기본 보장(면책 30일)', '동물등록증 없이 비문(코사진)으로 가입 가능');
				$print['Meritz']  = array('true','보장 기간: 3년 / 20세까지 갱신', '대표 3대질환: 슬/고관절, 피부질환, 구강질환 기본 보장(면책 1년)', '동물등록증 없이 전신사진으로 가입 가능', '동물등록증 등록 시 추가 2% 할인');
				$print['Samsung']  = array('true','보장 기간: 1년, 3년 / 만 12세까지 갱신', '슬관절 수술비: 1살 미만 (면책 90일) / 1살 이상 (면책 1년)', '동물등록증으로 간편 가입 가능','동물등록증 없이 생년월일, 견종, 이름 확인 가능한 서류와 사진 2장으로 가입 가능');

				$print['Cutdata1'] = array('만 6세 ~ 만 8세', '치료비보장', '탈구질환 보장', '배상책임 보장', '피부질환 보장', '슬관절 보장');
				$print['Cutdata7'] = array('만 6세 ~ 만 8세', '다이렉트 가입제한','전화문의 1670-9010');
				$print['DB1']  = array('false','공인인증서 등 복잡한 인증절차 없이 가입 가능.', '보장 기간: 1년 / 10세까지 갱신', '대표 3대질환: 슬/고관절, 피부질환, 구강질환 기본 보장(면책 30일)', '동물등록증 없이 비문(코사진)으로 가입 가능');
				$print['Meritz1']  = array('true','보장 기간: 3년 / 20세까지 갱신', '대표 3대질환: 슬/고관절, 피부질환, 구강질환 기본 보장(면책 1년)', '동물등록증 없이 전신사진으로 가입 가능', '동물등록증 등록 시 추가 2% 할인');
				$print['Samsung1']  = array('true','보장 기간: 1년, 3년 / 만 12세까지 갱신', '슬관절 수술비: 1살 미만 (면책 90일) / 1살 이상 (면책 1년)', '동물등록증으로 간편 가입 가능','동물등록증 없이 생년월일, 견종, 이름 확인 가능한 서류와 사진 2장으로 가입 가능');

				$print['Cutdata2'] = array('만 9세 이상', '다이렉트 가입제한','전화문의 1670-9010');
				$print['DB2']  = array('false','공인인증서 등 복잡한 인증절차 없이 가입 가능.', '보장 기간: 1년 / 10세까지 갱신', '대표 3대질환: 슬/고관절, 피부질환, 구강질환 기본 보장(면책 30일)', '동물등록증 없이 비문(코사진)으로 가입 가능');
				$print['Meritz2']  = array('false','보장 기간: 3년 / 20세까지 갱신', '대표 3대질환: 슬/고관절, 피부질환, 구강질환 기본 보장(면책 1년)', '동물등록증 없이 전신사진으로 가입 가능', '동물등록증 등록 시 추가 2% 할인');
				$print['Samsung2']  = array('false','보장 기간: 1년, 3년 / 만 12세까지 갱신', '슬관절 수술비: 1살 미만 (면책 90일) / 1살 이상 (면책 1년)', '동물등록증으로 간편 가입 가능','동물등록증 없이 생년월일, 견종, 이름 확인 가능한 서류와 사진 2장으로 가입 가능');

				$print['Cutdata3'] = array('60일~만 8세', '통원 치료(수술)비 보장', '반려묘 질병 보장');
				$print['Meritz3']  = array('true','가입 나이 : 생후91일부터 만 8세까지 가입가능', '보장 기간 : 3년 월납 / 20세까지 갱신','정면사진 or 얼굴사진으로 가입가능','보장 비율 : 50% / 70% 선택가능', '질병 30일면책 / 비뇨기계질환,전염성복막염 90일 면책', '자기부담금 : 1만원');
				$print['Samsung3']  = array('true','가입 나이 : 생후 60일부터 만 8세까지 가입가능', '보장 기간 : 1년 월납,일시납 / 20세까지 갱신','정면,측면사진 2장과 분양계약서,병원수첩,예방접종증명서(택1)로 가입가능','보장 비율 : 50% / 70% 선택가능','질병 30일면책 / 비뇨기질환,치과 치료비용, 구강내 질환 면책','비뇨기질환 확장보장 특약 가입가능','자기부담금 : 없음 / 1만원 / 2만원 / 3만원 선택가능');

				$print['Cutdata4'] = array('만 9세 이상', '다이렉트 가입제한','전화문의 1670-9010');
				$print['Cutdata8'] = array('0세 ~ 만 5세', '다이렉트 가입제한','전화문의 1670-9010');
				$print['Meritz4']  = array('false','가입 나이 : 생후91일부터 만 8세까지 가입가능', '보장 기간 : 3년 월납 / 20세까지 갱신','정면사진 or 얼굴사진으로 가입가능','보장 비율 : 50% / 70% 선택가능', '질병 30일면책 / 비뇨기계질환,전염성복막염 90일 면책', '자기부담금 : 1만원');		
				$print['Samsung4']  = array('false','가입 나이 : 생후 60일부터 만 8세까지 가입가능', '보장 기간 : 1년 월납,일시납 / 20세까지 갱신','정면,측면사진 2장과 분양계약서,병원수첩,예방접종증명서(택1)로 가입가능','보장 비율 : 50% / 70% 선택가능','질병 30일면책 / 비뇨기질환,치과 치료비용, 구강내 질환 면책','비뇨기질환 확장보장 특약 가입가능','자기부담금 : 없음 / 1만원 / 2만원 / 3만원 선택가능');		
				
				$print['Cutdata5'] = array('91일~만 8세', '다이렉트 가입제한','전화문의 1670-9010');	



				$insuran = array();

				$gep_day_year = $this->util->age_cal(date("Y-m-d", time()), $put_birth ); // 현재일, 생일

				$prt_cut="";
				$prt_birth="";
				$prt_sick_both="";
				$prt_reg_both = "";

				if($info_chk  == 'info'){
					
					if($ch_pet == 'dog'){						

						if($gep_day_year[0] > 59 && $gep_day_year[1] < 6) {
								$insuran['info_insuran1'] = $print['DB'];	
								if($ch_sick == "Yes"){
									$prt_cut = 5;
								} else {
									$prt_cut = 1;
								}
						} else if($gep_day_year[1] > 5 && $gep_day_year[1] < 9){
								$insuran['info_insuran1'] = $print['DB1'];
								if($ch_sick == "Yes"){
									$prt_cut = 6;
								} else {
									$prt_cut = 2;
								}
						} else {
								if($gep_day_year[1] > 8){ 
									
									$insuran['info_insuran1'] = $print['DB2'];
									$prt_cut = 3;
								} 

								if($gep_day_year[0] < 60){
									$insuran['info_insuran1'] = $print['DB2'];
									$prt_cut = 4;
								}
						}
					
						if($gep_day_year[0] > 90  && $gep_day_year[1] < 6) {
								if($ch_regi  == 'Yes'){
									$insuran['info_insuran2'] = $print['Meritz'];	
								} else {
									unset($print['Meritz'][4]);
									$insuran['info_insuran2'] = $print['Meritz'];	
								}
								if($ch_sick == "Yes"){
									$prt_cut = 5;
								} else {
									$prt_cut = 1;
								}
						} else if($gep_day_year[1] > 5 && $gep_day_year[1] < 9){
								if($ch_regi  == 'Yes'){
									$insuran['info_insuran2'] = $print['Meritz1'];
								} else {									
									unset($print['Meritz1'][4]);
									$insuran['info_insuran2'] = $print['Meritz1'];	
								}
								if($ch_sick == "Yes"){
									$prt_cut = 6;
								} else {
									$prt_cut = 2;
								}
						} else {
								if( $gep_day_year[1] > 8){
									if($ch_regi  == 'Yes'){
										$insuran['info_insuran2'] = $print['Meritz2'];
									} else {
										unset($print['Meritz2'][4]);
										$insuran['info_insuran2'] = $print['Meritz2'];
									}
									$prt_cut = 3;
								} 

								if($gep_day_year[0] < 91){
									if($ch_regi  == 'Yes'){
										$insuran['info_insuran2'] = $print['Meritz2'];
									} else {
										unset($print['Meritz2'][4]);
										$insuran['info_insuran2'] = $print['Meritz2'];
									}
									$prt_cut = 4;
								}
						}

						if($gep_day_year[0] > 59 && $gep_day_year[1] < 5) {
								$insuran['info_insuran3'] = $print['Samsung'];	
								if($ch_sick == "Yes"){
									$prt_cut = 5;
								} else {
									$prt_cut  = 1;
								}
						} else if($gep_day_year[1] > 5 && $gep_day_year[1] < 9){
								$insuran['info_insuran3'] = $print['Samsung1'];	
								if($ch_sick == "Yes"){
									$prt_cut = 5;
								} else {
									$prt_cut = 2;
								}
						} else {
								if( $gep_day_year[1] > 8){
									$insuran['info_insuran3'] = $print['Samsung2'];	
									$prt_cut = 3;
								}

								if($gep_day_year[0] < 60){
									$insuran['info_insuran3'] =  $print['Samsung2'];	
									$prt_cut = 4;
								}
						}
					
						if($ch_sick == "Yes"){
							$insuran['info_insuran1'] = $print['DB2'];
							$insuran['info_insuran2']  = $print['Meritz2'];
							$insuran['info_insuran3']= $print['Samsung2'];	
						} 

							switch($prt_cut){
								case 1:
									$insuran[] = $print['Cutdata'];
								break;
								case 2:
									$insuran[] = $print['Cutdata1'];
								break;
								case 3:
									$insuran[] = $print['Cutdata2'];
								break;
								case 4:
									$insuran[] = $print['Cutdata5'];
								break;
								case 5:
									$insuran[] = $print['Cutdata6'];
								break;
								case 6:
									$insuran[] = $print['Cutdata7'];
								break;
							}
					
						
					} else {

					

						if($gep_day_year[0] > 92  && $gep_day_year[1] < 9) {
								$insuran['info_insuran4'] = $print['Meritz3'];
								if($ch_sick == "Yes"){
									$prt_cut = 6;
								} else {
									$prt_cut = 4;
								}
						} else {
								if( $gep_day_year[1] > 8){
									$insuran['info_insuran4'] = $print['Meritz4'];
									if($ch_sick == "Yes"){
										$prt_cut = 7;
									} else {
										$prt_cut = 5;
									}								
								}

								if($gep_day_year[0] < 91){
										$insuran['info_insuran4'] = $print['Meritz4'];

										
										$prt_cut = 8;
								}
						}

							if($gep_day_year[0] > 59 && $gep_day_year[1] < 9) {
							$insuran['info_insuran5'] = $print['Samsung3'];
								if($ch_sick == "Yes"){
									$prt_cut = 8;
								} else {
									$prt_cut = 4;
								}
						} else {
								if( $gep_day_year[1] > 8){
									$insuran['info_insuran5'] = $print['Samsung4'];
										if($ch_sick == "Yes"){
										$prt_cut = 7;
									} else {
										$prt_cut = 5;
									}							
								}

								if($gep_day_year[0] <60){
										$insuran['info_insuran5'] = $print['Samsung4'];
										
										$prt_cut = 8;
								}
						}


						if($ch_sick == "Yes"){
								$insuran['info_insuran4']= $print['Meritz4'];		
								$insuran['info_insuran5'] = $print['Samsung4'];
						}
						
						switch($prt_cut){
							case 4:
									$insuran[] = $print['Cutdata3'];
							break;
							case 5:
								$insuran[] = $print['Cutdata4'];
							break;
							case 6:
								$insuran[] = $print['Cutdata6'];
							break;
							case 7:
								$insuran[] = $print['Cutdata7'];
							break;
							case 8:
								$insuran[] =$print['Cutdata8'];
							break;
						}
					}
					//print_r($insuran);
				 }
				


				if($info_chk == 'petchoice'){
						if($ch_pet == 'dog'){
								$insuran['info_insuran1'] = $print['DB'];	
								$insuran['info_insuran2'] = $print['Meritz'];	
								$insuran['info_insuran3'] = $print['Samsung'];	
								$insuran[] = $print['Cutdata'];
						} else{
								$insuran['info_insuran4'] = $print['Meritz3'];
									$insuran['info_insuran5'] = $print['Samsung3'];
								$insuran[] = $print['Cutdata3'];
						}
						
						//print_r($insuran);
				}

				if($info_chk == 'insuchoice'){
						if($ch_pet == 'Month'){
								$insuran['info_insuran2'] = $print['Meritz'];	
								$insuran['info_insuran3'] = $print['Samsung'];	
						} else {
							$insuran['info_insuran1'] = $print['DB'];	
							$insuran['info_insuran3'] = $print['Samsung'];	
						}	
						$insuran[] = $print['Cutdata'];
						//print_r($insuran);
				}


				if($info_chk == 'insuchoice1'){
						if($ch_pet == 'DB'){
								$insuran['info_insuran1'] = $print['DB'];	
						} else if($ch_pet == 'Meritz'){
								$insuran['info_insuran2'] = $print['Meritz'];	
						} else {
								$insuran['info_insuran3'] = $print['Samsung'];	
						}		
						
						$insuran[] = $print['Cutdata'];

						//print_r($insuran);
				}
	
				if($info_chk =='petsick'){
					if($ch_pet == 'Yes'){
						$insuran[] = $print['Cutdata'];
						$insuran['info_insuran1'] = $print['DB2'];	
						$insuran['info_insuran2'] = $print['Meritz2'];	
						$insuran['info_insuran3'] = $print['Samsung2'];	
					} else {
						$insuran[] = $print['Cutdata'];
						$insuran['info_insuran1'] = $print['DB'];	
						$insuran['info_insuran2'] = $print['Meritz'];	
						$insuran['info_insuran3'] = $print['Samsung'];	
					}
				}
				$choiceway ='';
				$choicesub='';
				$put_old = '';
				
			switch($info_chk ){
				case 'info':
					$choiceway = 'S';  //정보입력
					$choicesub = $ch_pet; //개냐고양이냐
					$disp_birth = $put_birth;
					$choicesick = $ch_sick;
					$choiceregi = $ch_regi;
					if($gep_day_year[0] < 366){
						$put_old = "만 0 세 (".$gep_day_year[0]." 일)";
					} else {
						$put_old = "만 ".$gep_day_year[1]." 세";
					}
					$prt_sick_both = $choicesick;
					$prt_birth = $disp_birth;
					$prt_old = $put_old;
					$prt_name = $put_name;
					$prt_reg_both = $choiceregi;
				break;
				case 'petchoice':
					$choiceway = 'SP'; //동물종류
					$choicesub = $ch_pet; // 개냐 고양이냐
					$prt_old  = '만 5 세';	
					if($ch_pet == 'Dog'){
						$prt_name = '댕댕이';
					} else {
						$prt_name = '냥냥이';
					}
				break;
				case 'insuchoice':
					$choiceway = 'D'; //납입방법
					$choicesub = $ch_pet; //월납 or 일시납
					$prt_old  = '만 5 세';	
					$prt_name = '댕댕이';
				break;
				case 'insuchoice1':
					$choiceway = 'PR'; //보험상품
					$choicesub = $ch_pet; //동부, 메리츠, 삼성
					$prt_old = '만 5 세';	
					$prt_name = '댕댕이';
				break;
				case 'petsick':
					$choiceway = 'PD'; // 치료이력
					$choicesub = $ch_pet; // Yes, No
					$prt_old  = '만 5 세';	
					$prt_name = '댕댕이';
				break;
			}
			
			//조회자 세션이 없을 경우 암호화된 세션 생성
			if($this ->session->userdata('wr_session') == ''){

				$encry_msg = date("Ymdhms",time());
				$key = bin2hex($decry_key);
				$this->encryption->initialize(array('key'=>$key));
			
				$wrsession_prt =$this->encryption->encrypt($encry_msg);
			} else {
				$wrsession_prt = $this->session->userdata('wr_session');
			}

			$comp_code = $this->session->userdata('comapny_sess');
			//echo $choiceway."바보";
			$insurance_arr = array('choiceway'=>$choiceway, 'choicesub'=>$choicesub, 'prtold'=>$prt_old, 'prtname'=>$prt_name, 'prtbirth'=>$prt_birth , 'sickboth'=>$prt_sick_both , 'regboth'=> $prt_reg_both , 'wr_session'=>$wrsession_prt,'company_code'=>$comp_code, 'insurance_search_info'=>$insuran);
		//	print_r($insurance_arr);
			$this->session->set_userdata($insurance_arr);				

			$insuran['Msg'] = "true";
			$insuran['Locate'] = "/Insuran";
			echo json_encode($insuran);
			exit;
		}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Conf_insu extends CI_Controller {

		public function __construct()
		{
			parent::__construct();	
			$this->load->helper(array('url', 'alert'));		
			$this->load->model('Pet_info_M','pet_in_m');
			$this->load->library(array('kozinpaging','Util'));
		}

		public function index(){

			$req = $this->input->post();
			$mv_ch		 = isset($req['mvch'])	&&$req['mvch']				? $req['mvch']			: '';

			$ch_way = $this->session->userdata['choiceway'];
			$put_wr = $this->session->userdata['wr_session'];
			$com_mem_code = $this->session->userdata['company_code'];		

			if($mv_ch != ''){
				
				switch($mv_ch){
					case 'DB':
						$produ_code = "D";
						$locat_addr = 'https://petsafe.co.kr/PS/ipet.do';
					break;
					case 'MERITZ':
						$produ_code = "M";
						$locat_addr = 'https://mstore.meritzfire.com/DPP1909CA000003/southeaster.do';
					break;
					case 'Samsung':
						$produ_code = "S";
						//$locat_addr = 'https://openapi.samsungfire.com/OpenB2B2CWeb/pages/sfmi/ui/b2b2c/m/agreement/BT_KennelHndlpIntro.html?token=7526df14-d24f-46f6-857f-1539ff456eac';
						$locat_addr = 'https://openapi.samsungfire.com/sfmi?token=203eead3-4997-453c-a446-b87370f65b4f';// 반려견 
					break;					
				}


				//print_r($this->session->userdata);
				
				
				$curr_time = date("Y-m-d H:m:s", time());
					
				if($ch_way == "S"){// 조회 입력
					//choicesub, prtbirth, sickboth, regboth, prtname
					$animal_both = $this->session->userdata['choicesub'];
					if( $animal_both == 'dog'){
						$animal_both_v = 'D';
					} else {
						$animal_both_v = 'C';
					}
					$put_name = $this->session->userdata['prtname'];
					$put_birth = $this->session->userdata['prtbirth'];
					$animal_sick = $this->session->userdata['sickboth'];

					if($animal_sick == 'Yes'){
						$animal_sick_v = 'Y';
					} else {
						$animal_sick_v = 'N';
					}

					$animal_regi = $this->session->userdata['regboth'];
					if($animal_regi == 'Yes'){
						$animal_regi_v = 'Y';
					} else {
						$animal_regi_v = 'N';
					}
					
					

					$ins_query = array('choiceway'=>$ch_way, 'petname'=>$put_name,  'petbirth'=>$put_birth, 'petboth'=>$animal_both_v, 'pet_disease'=>$animal_sick_v, 'pet_enrol'=>$animal_regi_v, 'productcode'=>$produ_code, 'mem_code'=>$com_mem_code, 'wrsession'=>$put_wr, 'regdate'=>$curr_time);
				} else if($ch_way == "PR"){// 보험상품 선택
						$put_insu = $this->session->userdata['choicesub'];
						//Samsung, DB, Meritz
						if($put_insu == 'DB'){
							$put_insu_v = 'D';
						} else if($put_insu == 'Meritz'){
							$put_insu_v = 'M';
						} else if($put_insu == 'Samsung'){
							$put_insu_v = 'S';
						}
						$ins_query = array('choiceway'=>$ch_way, 'pet_insu'=>$put_insu_v, 'productcode'=>$produ_code, 'mem_code'=>$com_mem_code, 'wrsession'=>$put_wr, 'regdate'=>$curr_time);
				} else if($ch_way == "SP"){ // 개, 고양이
						$pet_both = $this->session->userdata['choicesub'];
						//Dog,Cat
						if($pet_both == 'dog'){
							$pet_both_v = 'D';
						} else if($pet_both == 'cat'){
							$pet_both_v = 'C';
						}
						$ins_query = array('choiceway'=>$ch_way, 'petboth'=>$pet_both_v, 'productcode'=>$produ_code, 'mem_code'=>$com_mem_code, 'wrsession'=>$put_wr, 'regdate'=>$curr_time );
				} else if($ch_way == "D"){ // 월납 , 일시납
						$chk_both = $this->session->userdata['choicesub'];
						//Month, Year
						if($chk_both == 'Month'){
							$chk_both_v = 'M';
						} else if($chk_both == 'Year'){
							$chk_both_v = 'Y';	
						}
						$ins_query = array('choiceway'=>$ch_way, 'pet_deli'=>$chk_both_v, 'productcode'=>$produ_code, 'mem_code'=>$com_mem_code, 'wrsession'=>$put_wr, 'regdate'=>$curr_time);
				} else if($ch_way == "PD"){ // 90일 이내 치료 이력
						$chk_yn = $this->session->userdata['choicesub'];
						//No, Yes
						if($chk_yn == 'Yes'){
							$chk_yn_v = 'Y';
						} else if($chk_yn == 'No'){
							$chk_yn_v = 'N';
						}
						$ins_query = array('choiceway'=>$ch_way, 'pet_disease'=>$chk_yn_v, 'productcode'=>$produ_code, 'mem_code'=>$com_mem_code, 'wrsession'=>$put_wr, 'regdate'=>$curr_time);
				}

				$result = $this->pet_in_m->petInsuran($ins_query);
				if($result){
					$insuran['Msg'] = "true";					
					$insuran['Locate'] = $locat_addr;
					$this->session->set_userdata(array('directgo'=>'Ygo'));// 다이렉트로 넘어오면 세션 등록 하고 디비 입력한다.
					echo json_encode($insuran);
					exit;
				} else {
				
				}
			} else {
				alert_move('프로세스 문제로 오작동이 발생되었습니다.','/');
			}
		}
	}// end class
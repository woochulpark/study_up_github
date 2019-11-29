<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Eventp extends CI_Controller {

		public function __construct()
		{
			parent::__construct();	
			$this->load->helper(array('url', 'alert'));		
			$this->load->model('Pet_eve_M','pet_ev_m');
			$this->load->library(array('kozinpaging','Util'));
		}

		public function index(){

			$req = $this->input->post();
		
			$pet_name		= isset($req['eve_pn'])	&&$req['eve_pn']				? $req['eve_pn']			: '';
			$pet_birth			= isset($req['eve_pb'])	&&$req['eve_pb']				? $req['eve_pb']			: '';
			$companame	= isset($req['eve_mn'])	&&$req['eve_mn']				? $req['eve_mn']			: '';
			$compahp		= isset($req['eve_mh'])	&&$req['eve_mh']				? $req['eve_mh']			: '';
			$compainsu	= isset($req['eve_insu'])	&&$req['eve_insu']				? $req['eve_insu']			: '';
			$pet_stock		= isset($req['eve_stock'])	&&$req['eve_stock']				? $req['eve_stock']			: '';
			$p_agree			= isset($req['privacy'])	&&$req['privacy']				? $req['privacy']			: '';
			
			$ins_query = array();
			$indb_agree = "N";
			if($p_agree != 'true'){
				$insuran['Msg'] = "true";
				$insuran['compMent'] = '정보 수집에 동의가 되지 않았습니다.<br> 다시 입력해주세요.';
				$insuran['wboth'] = 'not';
				$insuran['compBtn'] = '닫기';
				echo  json_encode($insuran);
				exit;
			} else {
				if($pet_name == '' || $pet_birth	 == '' || $companame == '' || $compahp == '' || $compainsu == '' || $pet_stock == ''){
					$insuran['Msg'] = "true";
					$insuran['compMent'] = '정보가 전부 입력되지 않았습니다.<br> 다시 입력해주세요.';
					$insuran['wboth'] = 'not';
					$insuran['compBtn'] = '닫기';
					echo  json_encode($insuran);
					exit;
				} else{
					$curr_time = date("Y-m-d H:m:s", time());	
					if($p_agree == 'true'){
						$indb_agree = 'Y';
					}
					$ins_query = array('petname'=>$pet_name, 'petbirth'=>$pet_birth,  'petstock'=>$pet_stock, 'compa_name'=>$companame, 'compa_hp'=>$compahp, 'compa_insu'=>$compainsu, 'collect_agree'=>$indb_agree, 'regdate'=>$curr_time);
				}
			}			

				$result = $this->pet_ev_m->petEvent($ins_query);
				if($result){
					$insuran['Msg'] = "true";
					$insuran['compMent'] = '이벤트 참여가 완료되었습니다.\n 감사합니다.';
					$insuran['wboth'] = 'mv';
					$insuran['compBtn'] = '아이펫 메인';
					echo  json_encode($insuran);
					exit;
				} else {
				
				}
			
		}
	}// end class
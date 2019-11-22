<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Noti extends CI_Controller {

		public function __construct()
		{
			parent::__construct();	
			$this->load->helper(array('url', 'alert'));		
			$this->load->model('Noti_M','noti_v_m');
			$this->load->library(array('kozinpaging','Util'));
		}

		public function index(){

			$req = $this->input->post();
				$curr_page		 = isset($req['page'])	&&$req['page']				? $req['page']			: 1;
				$search_sel = isset($req['ssel'])	&& $req['ssel'] ? $req['ssel'] : '';
				$search_put = isset($req['puts']) && $req['puts'] ? $req['puts'] : '';
			
				$list_cnt = 5; //page당 게시물수 
				$block_page = 5; // 페이지 블럭

				$param = array(
					"sel_both" => $search_sel,
					"put_val" =>$search_put					
				);

				$total_cnt = $this->noti_v_m->noti_total($param);

				$data['param'] = $param;

			
				$data['listcnt'] = array('total'=>$total_cnt, 'listcnt'=>$list_cnt, 'curpage'=>$curr_page);
				
					$s_offset = ($curr_page - 1) * $list_cnt;				
				
		
			$data['list'] = $this->noti_v_m->noti_v($curr_page, $list_cnt,$s_offset, $param); // 현재페이지, 페이지당 게시물수, offset수 , 검색(array)
			$data['pagin'] = $this->kozinpaging->pagin_cont($total_cnt , $curr_page, $list_cnt, $block_page, '/Noti');
			$this->load->view('main_header');
			//$this->load->view('navi');
			$this->load->view('Noti_view' , $data);
			$this->load->view('main_footer');
		}

		public function detail(){

			$noti_sr = $this->uri->segment(3,0);
			
			if(!is_numeric($noti_sr)){
				alert_move('적절한 주소가 아닙니다.', '/Noti');
				exit;
			} else {
				$detail_no = $noti_sr;
			}
			
			$data['detail_info'] = $this->noti_v_m->noti_detail($detail_no);

			$data['ne_pr'] = $this->noti_v_m->noti_next_prev($detail_no);			

			$this->load->view('main_header');
			//$this->load->view('navi');
			$this->load->view('Noti_detail', $data);
			$this->load->view('main_footer');
		}

	} // end class
?>
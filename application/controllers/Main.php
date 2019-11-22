<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

			public function __construct()
			{
				parent::__construct();	
				$this->load->helper('url');			
				$this->load->model('Faq_M','faq_v_m');
				$this->load->model('Noti_M','noti_v_m');
			}

			public function index()
			{

				$data['db'] = $this->faq_v_m->faq_v_main('D');
				$data['meritz'] = $this->faq_v_m->faq_v_main('M');
				$data['samsung'] = $this->faq_v_m->faq_v_main('S');
				
				$data['noti'] = $this->noti_v_m->noti_v_main();

				
				$data['joinNow'] = array('[강아지 가입완료] 마르티스 / 3세 - 메리츠화재', '[강아지 가입완료] 슈나우저 / 5세 - 메리츠화재','[강아지 가입완료] 불독 / 6세 - DB손해보험','[강아지 보장비교 중] 요크셔 테리어 / 1세 - 메리츠화재','[고양이 보장비교 중] 코리안숏헤어 / 2세 - 메리츠화재','[강아지 가입완료] 웰시코기 / 3세 - DB손해보험','[강아지 가입완료] 마르티스 / 5세 - 삼성화재','[고양이 보장비교 중]  페르시안 / 5세 - 메리츠화재','[강아지 가입완료] 포메라니안 / 1세 - 삼성화재','[강아지 가입완료] 푸들 / 1세 - DB손해보험', '[강아지 보장비교 중] 말티즈 / 3세 - 메리츠화재','[고양이 가입완료] 믹스고양이 / 4세 - 메리츠화재','[강아지 가입완료] 슈나우저 / 3세 - 삼성화재','[강아지 가입완료] 불독 / 2세 - 메리츠화재','[고양이 가입완료] 러시안블루 / 6세 - D메리츠화재)');
				$data['list_join_rand'] = array();
					for($k = 0; $k < 10; $k++){
						$put = rand(0,9);
						if(in_array($put, $data['list_join_rand'])){
							$k--;
						} else {
							$data['list_join_rand'][] =$data['joinNow'][$put];
						}
					}

			
				$this->load->view('main_header');
				$this->load->view('Main_view', $data);
				$this->load->view('main_footer');
			}
			
}

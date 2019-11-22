<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insuran extends CI_Controller {

		public function __construct()
		{
			parent::__construct();	
			$this->load->helper(array('url','alert'));				
			$this->load->library('session');
		}

		public function index()
		{
		
			if(isset($this->session->userdata['choiceway'])){
				$this->load->view('main_header');
				$this->load->view('Result_view');
				$this->load->view('ins_table');
				$this->load->view('main_footer');
			} else {
				alert_move('조회된 정보가 없습니다.', '/');
				
			}
		}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Faq extends CI_Controller {

		public function __construct()
		{
			parent::__construct();	
			$this->load->helper('url');		
			$this->load->model('Faq_M','faq_v_m');
			//$this->load->library('kozinpaging');
		}

		public function index(){
	
			$data['db'] = $this->faq_v_m->faq_v('D');
			$data['meritz'] = $this->faq_v_m->faq_v('M');
			$data['samsung'] = $this->faq_v_m->faq_v('S');
			
			$this->load->view('main_header');
			//$this->load->view('navi');
			$this->load->view('Faq_view', $data);
			$this->load->view('main_footer');
		}

		

	} // end class
?>
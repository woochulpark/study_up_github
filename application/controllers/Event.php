<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

		public function __construct()
		{
			parent::__construct();	
			$this->load->helper(array('url','alert'));				
			$this->load->library('session');
		}

		public function index()
		{	
			
				$this->load->view('main_header');
				$this->load->view('Event_view');			
				$this->load->view('main_footer');
					
		}
}
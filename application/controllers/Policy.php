<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy extends CI_Controller {

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
			}

			public function index()
			{
				$this->load->view('main_header');
				$this->load->view('Privacy_view');
				$this->load->view('main_footer');
			}

			public function Service()
			{
				$this->load->view('main_header');
				$this->load->view('Service_view');
				$this->load->view('main_footer');
			}

			public function Rules()
			{
				$this->load->view('main_header');
				$this->load->view('Rules_view');
				$this->load->view('main_footer');
			}

			public function Privacy()
			{
				$this->load->view('main_header');
				$this->load->view('Privacy_view');
				$this->load->view('main_footer');
			}

			public function Sitemap()
			{
				$this->load->view('main_header');
				$this->load->view('Sitemap_view');
				$this->load->view('main_footer');
			}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
	public function index()
	{
		$data['site_data'] = 2;
		$this->load->view('main_header');
		$this->load->view('db_petsafe_view',$data);
		$this->load->view('main_footer.php');
	}

		public function db_petsafe()
	{
		$data['site_data'] = 2;
		$this->load->view('main_header');
		$this->load->view('db_petsafe_view',$data);
		$this->load->view('main_footer.php');
	}

		public function anypet()
	{
		$data['site_data'] = 2;
		$this->load->view('main_header');
		$this->load->view('Anypet_view',$data);
		$this->load->view('ins_table');
		$this->load->view('main_footer.php');
	}

		public function petpermint()
	{
		$data['site_data'] = 2;
		$this->load->view('main_header');
		$this->load->view('Petpermint_view',$data);
		$this->load->view('main_footer.php');
	}

		public function comparision()
	{
		//$data['site_data'] = 2;
		$this->load->view('main_header');
		$this->load->view('ins_comparison_table_view');
		$this->load->view('ins_table_view');
		$this->load->view('main_footer.php');
	}

		public function Claim()
	{
		//$data['site_data'] = 2;
		$this->load->view('main_header');
		$this->load->view('Claim_view');
		//$this->load->view('ins_table_view');
		$this->load->view('main_footer.php');
	}
}

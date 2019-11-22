<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pet_info_M extends CI_Model {

	/* 생성자 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function petInsuran($putdata){
		

		if($this->db->insert('ipetcalsurvey',$putdata)){
			return true;
		} else {
			return false;
		}

	}

} // end class
?>
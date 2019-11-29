<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pet_eve_M extends CI_Model {

	/* 생성자 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function petEvent($putdata){
		

		if($this->db->insert('ipetEventResult',$putdata)){
			return true;
		} else {
			return false;
		}

	}

} // end class
?>
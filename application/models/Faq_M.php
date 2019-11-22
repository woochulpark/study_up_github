<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq_M extends CI_Model {

	/* 생성자 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function faqInsert($clean_write_no,$w_write_comp, $clean_write_q, $clean_write_a, $wr_date, $wr_ip){
		$this->db->set('view_depth',$clean_write_no);
		$this->db->set('company',$w_write_comp);
		$this->db->set('q_content',$clean_write_q);
		$this->db->set('a_content', $clean_write_a);
		$this->db->set('regdate',$wr_date);

		if($this->db->insert('ipetFaq')){
			return true;
		} else {
			return false;
		}

	}

	public function faq_v($insu){
					
					$this->db->where('company', $insu);
					$this->db->order_by('view_depth','asc');
					$query = $this->db->get('ipetFaq');

					if ($query->num_rows() > 0) {
						foreach ($query->result_array() as $row)
						{
						   $data[] = $row;
						}
						return $data;
					}
	}

	public function faq_v_main($insu){
				$this->db->where('company', $insu);
					$this->db->order_by('view_depth','asc');
					$query = $this->db->get('ipetFaq', 4, 0);				

					if ($query->num_rows() > 0) {
						foreach ($query->result_array() as $row)
						{
						   $data[] = $row;
						}
						return $data;
					}
	}


	public function faq_detail($no){
		$this->db->where('srno',$no);
		$query = $this->db->get('ipetFaq');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row)
			{
			   $data = $row;
			}
		
		} else {
			 $data = false;
		}
		return $data;
	}

	public function noti_edit($no){
		$this->db->where('srno',$no);
		$query = $this->db->get('ipetNotice');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row)
			{
			   $data = $row;
			}
		
		} else {
			 $data = false;
		}
		return $data;
	}

	public function faqModi($w_sr_no,$clean_write_no,$w_write_comp,$clean_write_q, $clean_write_a, $wr_date){
		$this->db->set('company',$w_write_comp);
		$this->db->set('view_depth',$clean_write_no);
		$this->db->set('q_content',$clean_write_q);
		$this->db->set('a_content',$clean_write_a);
		
		$this->db->set('regdate',$wr_date);	
		$this->db->where('srno', $w_sr_no);
			if($this->db->update('ipetFaq')){
				return true;
			} else {
				return false;
			}
	}

	public function faq_del($no){
		$this->db->where('srno',$no);
		if($this->db->delete('ipetFaq')){
			return true;
		} else {
			return false;
		}
	}

} // end class
?>
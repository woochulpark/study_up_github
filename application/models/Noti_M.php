<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noti_M extends CI_Model {

	/* 생성자 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function notiInsert($clean_title, $clean_content,$writer, $wr_date, $wr_ip,$f_ori_1, $f_up_1,$f_ori2, $f_up2 ){
		$this->db->set('filename',$f_up_1);
		$this->db->set('filesource',$f_ori_1);
		$this->db->set('filename1',$f_up2);
		$this->db->set('filesource1',$f_ori2);
		$this->db->set('title',$clean_title);
		$this->db->set('content',$clean_content);
		$this->db->set('regname', $writer);
		$this->db->set('regdate',$wr_date);
		$this->db->set('regip',$wr_ip);

		if($this->db->insert('ipetNotice')){
			return true;
		} else {
			return false;
		}

	}

	public function noti_v($curr_page, $list_cnt, $s_offset,  $param){
		if($param['sel_both'] != ''){
			switch($param['sel_both']){
				case 'title':
					$this->db->like('title', $param['put_val']);		
				break;
				case 'content':
					$this->db->like('content', $param['put_val']);
				break;
			}
		}			
					$this->db->order_by('srno','desc');
					$query = $this->db->get('ipetNotice', $list_cnt, $s_offset);

					if ($query->num_rows() > 0) {
						foreach ($query->result_array() as $row)
						{
						   $data[] = $row;
						}
						return $data;
					}
	}

	public function noti_v_main(){
	
					$this->db->order_by('srno','desc');
					$query = $this->db->get('ipetNotice', 3, 0);

					if ($query->num_rows() > 0) {
						foreach ($query->result_array() as $row)
						{
						   $data[] = $row;
						}
						return $data;
					}
	}

	public function noti_total($param){
		
		if($param['sel_both'] != ''){
			switch($param['sel_both']){
				case 'title':
					$this->db->like('title', $param['put_val']);		
				break;
				case 'content':
					$this->db->like('content', $param['put_val']);
				break;
			}
		}

		$query = $this->db->get('ipetNotice');
		$totalcnt =  $query->num_rows();
		
		return $totalcnt;
	}


	public function noti_detail($no){
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

	public function noti_next_prev($no){
	
		
		$this->db->where('srno > ', $no);
		$next_query  = $this->db->get('ipetNotice', 1,0);
	
		if ($next_query ->num_rows() > 0) {
			foreach ($next_query ->result_array() as $row)
			{
			   $data['next_info'] = $row;
			}		
		} else {
			 $data['next_info'] = 'false';
		}
		
		$this->db->where('srno < ', $no);
		$this->db->order_by('srno','desc');
		$prev_query = $this->db->get('ipetNotice', 1, 0);
		
		if ($prev_query ->num_rows() > 0) {
			foreach ($prev_query ->result_array() as $row)
			{
			   $data['prev_info'] = $row;
			}
		
		} else {
			 $data['prev_info'] = 'false';
		}

		return $data;
	}

		public function down_m_noti($down_no){
		$this->db->where('srno', $down_no);
		$this->db->select('filename,filesource,filename1,filesource1');
		$query = $this->db->get('ipetNotice');

		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row)
			{
			   $data = $row;
			}
			return $data;
		}	
	}

/*
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

	public function notiModi($w_edi_no, $clean_title, $clean_content, $wr_date, $wr_ip){
		$this->db->set('title',$clean_title);
		$this->db->set('content',$clean_content);
		
		$this->db->set('regdate',$wr_date);
		$this->db->set('regip',$wr_ip);
		$this->db->where('srno', $w_edi_no);
			if($this->db->update('ipetNotice')){
				return true;
			} else {
				return false;
			}
	}

	public function noti_del($no){
		$this->db->where('srno',$no);
		if($this->db->delete('ipetNotice')){
			return true;
		} else {
			return false;
		}
	}

		public function noti_excel( $param){
		if($param['sel_both'] != ''){
			switch($param['sel_both']){
				case 'title':
					$this->db->like('title', $param['put_val']);		
				break;
				case 'content':
					$this->db->like('content', $param['put_val']);
				break;
			}
		}			
					$this->db->order_by('srno','desc');
					$query = $this->db->get('ipetNotice');

					if ($query->num_rows() > 0) {
						foreach ($query->result_array() as $row)
						{
						   $data[] = $row;
						}
						return $data;
					}
	}
*/
} // end class
?>
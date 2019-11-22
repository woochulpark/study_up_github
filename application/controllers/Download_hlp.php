<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Download helper
 *
 * Created on 2011. 11. 18.
 * @author 불의회상 <hoksi2k@hanmail.net>
 * @package helper
 * @subpackage controllers
 * @version 1.0
 */
class Download_hlp extends CI_Controller {
    function __construct()
    {
        parent::__construct();
         
        // Cookie Helper Load
        $this->load->helper(array('url','download'));
		$this->load->model('Noti_M','noti_v_m');

    }
     
    function index() {
        $data = '';
        //$this->load->view('download_hlp_sample', $data);
    }
    
     
    function download_file()
    {
		
		$down_both = $this->uri->segment(3,0);
		$gojung =  $_SERVER['DOCUMENT_ROOT'];
		switch($down_both){
			case 'db_t_1':
			$downFname = '프로미반려동물보험 약관(DB손해보험).pdf';
			$downFboth = 'd_1.pdf';
			$downFpath = '/insurance/tam';
			break;
			case 'm_t_1':
			$downFname = '펫퍼민트Puppy&Dog1907약관(메리츠화재).pdf';
			$downFboth = 'm_1.pdf';
			$downFpath = '/insurance/tam';
			break;
			case 'm_t_2':
			$downFname = '무배당 펫퍼민트 Cat보험 다이렉트 약관.pdf';
			$downFboth = 'm_2.pdf';
			$downFpath = '/insurance/tam';
			break;
			case 's_t_1':
			$downFname = '반려견보험 애니펫 (삼성화재).pdf';
			$downFboth = 's_1.pdf';
			$downFpath = '/insurance/tam';
			break;
			case 's_t_2':
			$downFname = 'anypet_sogae.pdf';
			$downFboth = 's_2.pdf';
			$downFpath = '/insurance/tam';
			break;
			case 's_t_3':
			$downFname = '반려묘보험 애니펫 (삼성화재).pdf';
			$downFboth = 's_3.pdf';
			$downFpath = '/insurance/tam';
			break;
			case 'db_s_1':
			$downFname = 'DB손해보험_보험금청구를위한필수동의서(개인정보동의서)_일반.pdf';
			$downFboth = 'db_cl_1.pdf';
			$downFpath = '/insurance/claim/db';
			break;
			case 'db_s_2':
			$downFname = 'DB손해보험_일반보험금 청구서.pdf';
			$downFboth = 'db_cl_2.pdf';
			$downFpath = '/insurance/claim/db';
			break;
			case 'db_s_3':
			$downFname = '프로미 반려동물보험_문답서.pdf';
			$downFboth = 'db_cl_3.pdf';
			$downFpath = '/insurance/claim/db';
			break;
			case 'm_s_1':
			$downFname = '메리츠 개인(신용)정보처리동의서[보험금청구용].pdf';
			$downFboth = 'm_cl_1.pdf';
			$downFpath = '/insurance/claim/meritz';
			break;
			case 'm_s_2':
			$downFname = '메리츠 배상책임 보험금청구서.pdf';
			$downFboth = 'm_cl_2.pdf';
			$downFpath = '/insurance/claim/meritz';
			break;
			case 'm_s_3':
			$downFname = '메리츠 배상책임 사고경위서.pdf';
			$downFboth = 'm_cl_3.pdf';
			$downFpath = '/insurance/claim/meritz';
			break;
			case 'm_s_4':
			$downFname = '메리츠 청구서.pdf';
			$downFboth = 'm_cl_4.pdf';
			$downFpath = '/insurance/claim/meritz';
			break;
			case 's_s_1':
			$downFname = '삼성화재 배상책임 사고경위서.pdf';
			$downFboth = 's_cl_1.pdf';
			$downFpath = '/insurance/claim/samsung';
			break;
			case 's_s_2':
			$downFname = '삼성화재 보험금 배상책임 청구서 및 동의서.pdf';
			$downFboth = 's_cl_2.pdf';
			$downFpath = '/insurance/claim/samsung';
			break;
			case 's_s_3':
			$downFname = '삼성화재 보험금 청구서 및 동의서.pdf';
			$downFboth = 's_cl_3.pdf';
			$downFpath = '/insurance/claim/samsung';
			break;
			case 's_s_4':
			$downFname = '삼성화재 사망위로금 청구서 및 동의서(일반의료비청구서와 동일).pdf';
			$downFboth = 's_cl_4.pdf';
			$downFpath = '/insurance/claim/samsung';
			break;
		}

        $data = file_get_contents($gojung. $downFpath."/".$downFboth); // Read the file's contents
        $name = $downFname;
//force_download(mb_convert_encoding($file_name, 'euc-kr', 'utf-8'), $filedata);
       force_download(mb_convert_encoding($name, 'euc-kr', 'utf-8'), $data);
    }

	 function downfile()
    {
		
		//$down_both = $this->uri->segment(4,0);
		$down_no = $this->uri->segment(3,0);
		$down_array = array();
		$gojung = '/home/petfile/public_html';
		$downFname = '';
		$downFboth = '';
		$down_array = $this->noti_v_m->down_m_noti($down_no);
	/*
		if($down_both === 'imgv'){
			//echo '이미지';
			$base_path = '/data/thum';
			if($down_array['filename'] != ''){
				$downFboth = $down_array['filename'];
				$downFname = $down_array['filesource'];
			} else {
				$downFboth = false;	
			}
		} elseif($down_both === 'filev') {
		*/
		//	echo '파일';
			$base_path = '/data/files';
			if($down_array['filename1'] != ''){
				$downFboth = $down_array['filename1'];
				$downFname = $down_array['filesource1'];
			} else {
				$downFboth = false;	
			}
		//}	
		
        $data = file_get_contents($gojung. $base_path."/".$downFboth); // Read the file's contents
        $name = $downFname;
	
//force_download(mb_convert_encoding($file_name, 'euc-kr', 'utf-8'), $filedata);
      force_download(mb_convert_encoding($name, 'euc-kr', 'utf-8'), $data);
    }

}
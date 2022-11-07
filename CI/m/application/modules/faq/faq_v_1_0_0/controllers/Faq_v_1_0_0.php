<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|------------------------------------------------------------------------
| Author : 심정민
| Create-Date : 2021-09-03
| Memo : FAQ
|------------------------------------------------------------------------
*/

class Faq_v_1_0_0 extends MY_Controller {
  function __construct(){
    parent::__construct();

		$this->load->model(mapping('faq').'/model_faq');
  }

//인덱스
	public function index(){

		$this->faq_list();

	}

// faq_list
	public function faq_list(){

		$this->_view(mapping('faq').'/view_faq_list');
	}

  // faq 리스트 get
	public function faq_list_get(){

    $faq_type = $this->_input_check("faq_type",array());
		$page_num = $this->_input_check("page_num",array("ternary"=>'1'));
		$page_size = PAGESIZE;

    $data['faq_type'] = $faq_type;
		$data['page_size'] = $page_size;
		$data['page_no'] = ($page_num-1)*$page_size;

		$result_list = $this->model_faq->faq_list_get($data); //FAQ 리스트
		$result_list_count = $this->model_faq->faq_list_count($data); //FAQ 리스트 총 카운트

		$no = $result_list_count-($page_size*($page_num-1));
		$paging = $this->global_function->paging($result_list_count,$page_size,$page_num);

		$response = new stdClass();

		$response->result_list = $result_list;
		$response->result_list_count = $result_list_count;
		$response->total_block = ceil($result_list_count/$page_size);

		$this->_list_view(mapping('faq').'/view_faq_list_get', $response);
	}
} // 클래스의 끝
?>

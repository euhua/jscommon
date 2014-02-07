<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ref_Basic extends CI_Controller{
	public $ref_category = 'Basic';
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function jquery_common_basics()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_basic/jquery_common_basics_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function javascript_events()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_basic/javascript_events_view';
		$this->load->view('templates/reference_template_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/ref_basic.php */
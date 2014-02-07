<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ref_String extends CI_Controller{
	public $ref_category = 'String';
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function get_current_date_time_in_string()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_string/get_current_date_time_in_string_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function get_date_time_in_string()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_string/get_date_time_in_string_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function get_hash_value()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_string/get_hash_value_view';
		$this->load->view('templates/reference_template_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/ref_animation.php */
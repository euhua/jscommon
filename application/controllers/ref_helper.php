<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ref_Helper extends CI_Controller{
	public $ref_category = 'Helper';
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function preload_image()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_helper/preload_image_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function postload_image()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_helper/postload_image_view';
		$this->load->view('templates/reference_template_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/ref_animation.php */
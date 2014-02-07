<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ref_Animation extends CI_Controller{
	public $ref_category = 'Animation';
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function scroll_to_element_animated()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_animation/scroll_to_element_animated_view';
		$this->load->view('templates/reference_template_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/ref_animation.php */
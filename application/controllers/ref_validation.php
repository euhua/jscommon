<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ref_Validation extends CI_Controller{
	public $ref_category = 'Validation';
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function is_hand_held_device()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_validation/is_hand_held_device_view';
		$this->load->view('templates/reference_template_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/ref_validation.php */
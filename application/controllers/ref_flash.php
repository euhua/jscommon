<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ref_Flash extends CI_Controller{
	public $ref_category = 'Flash';
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function init_flash()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_flash/init_flash_view';
		$this->load->view('templates/reference_template_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/ref_flash.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reference extends CI_Controller{
	public function index()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'reference_view';
		$this->load->view('templates/common_template_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/reference.php */
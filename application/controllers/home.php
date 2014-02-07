<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	public function index()
	{
		$data['page_title']				= 'Home';
		$data['content'] 				= 'home_view';
		$this->load->view('templates/common_template_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/home.php */
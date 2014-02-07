<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller{
	public function index()
	{
		$data['page_title']				= 'Download';
		$data['content'] 				= 'download_view';
		$this->load->view('templates/common_template_view', $data);
	}
	
	public function pack_file()
	{
		$this->load->library('zip');
		$this->zip->read_file('js/jquery.js');
		$this->zip->read_file('js/jquery-ui.js');
		$this->zip->read_file('js/jquery.mousewheel.js');
		$this->zip->read_file('js/jquery.flash.js');
		$this->zip->read_file('js/common.js');
		$this->zip->read_file('js/common.expanded.js');
		
		$this->zip->download('js_common_lib_'.$this->config->item('current_version').'.zip');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/download.php */
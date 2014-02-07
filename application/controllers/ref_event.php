<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ref_Event extends CI_Controller{
	public $ref_category = 'Event';
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function auto_to_next_field()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_event/auto_to_next_field_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function bind_alpha_numeric_only()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_event/bind_alpha_numeric_only_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function bind_back_to_top_trigger()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_event/bind_back_to_top_trigger_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function bind_char_counter()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_event/bind_char_counter_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function bind_default_text()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_event/bind_default_text_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function bind_friendly_date()
	{
		$this->load->helper('date');
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_event/bind_friendly_date_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function bind_numeric_only()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_event/bind_numeric_only_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function bind_numeric_only_with_sign()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_event/bind_numeric_only_with_sign_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function bind_overlay_window()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_event/bind_overlay_window_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function bind_scroller()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_event/bind_scroller_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function bind_slider()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_event/bind_slider_view';
		$this->load->view('templates/reference_template_view', $data);
	}
	
	public function bind_word_counter()
	{
		$data['page_title']				= 'Reference';
		$data['content'] 				= 'ref_event/bind_word_counter_view';
		$this->load->view('templates/reference_template_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/ref_event.php */
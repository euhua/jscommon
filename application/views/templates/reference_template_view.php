<?php 
	$this->load->view('components/header_view');
	$this->load->view('components/reference_nav_view');
	$this->load->view($content);
	$this->load->view('components/footer_view'); 
?>
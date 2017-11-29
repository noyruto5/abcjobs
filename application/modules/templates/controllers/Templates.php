<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends MX_Controller {

	public function header($data)
	{
		$this->load->view('header', $data);
	}

	public function header_with_sidebar($data)
	{
		$this->load->view('header_with_sidebar', $data);
	}

	public function footer()
	{
		$this->load->view('footer');
	}

	public function footer_with_sidebar()
	{
		$this->load->view('footer_with_sidebar');
	}
}

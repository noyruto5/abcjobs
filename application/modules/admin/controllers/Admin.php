<?php
class Admin extends MX_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->module('templates');
	}


	public function index()
	{
		$data['title'] = "Admin Home Page";

		 $this->templates->header_with_sidebar($data);
		 $this->load->view('index', $data);
		 $this->templates->footer();
	}

}
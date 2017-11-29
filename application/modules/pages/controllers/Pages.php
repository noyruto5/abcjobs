<?php
class Pages extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper(array('url_helper', 'cookie'));
	}

	public function view($page = 'home')
	{
	    if ( ! file_exists(APPPATH.'modules/pages/views/'.$page.'.php'))
	    {
	        // Whoops, we don't have a page for that!
	        show_404();
	    }

	    $data['title'] = ucfirst($page). " | Sagay Jobsite System"; // Capitalize the first letter

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);
	}
}
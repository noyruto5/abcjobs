<?php
class Summerjobs extends MX_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('summerjobs_model');
	}

	public function index()
	{
		$this->auth();

		$data['summerjobs_item'] = $this->summerjobs_model->get_summer_jobs();
		$this->session->set_userdata('sj_id', $data['summerjobs_item']['id']);
		$data['title'] = "Summer Job Hiring";

		$this->load->view('templates/header_with_sidebar', $data);
		$this->load->view('summerjobs/index', $data);
		$this->load->view('templates/footer_with_sidebar');
	}

	public function create()
	{
		$this->auth();

		$data['title'] = 'Create Summber Jobs';

		$config = array(
			array('field' => 'slots', 'label' => 'Slots', 'rules' => 'required'),
			array('field' => 'details', 'label' => 'Details', 'rules' => 'required')
		);

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header_with_sidebar', $data);
		    $this->load->view('summerjobs/create', $data);
		    $this->load->view('templates/footer_with_sidebar');
        }
        else
        {
            $this->summerjobs_model->set_summer_jobs();
            $this->load->view('templates/header_with_sidebar', $data);
            $this->load->view('summerjobs/create_success');
            $this->load->view('templates/footer_with_sidebar');
        }
	}

	public function update()
	{
		$this->auth();

		$data['title'] = 'Update Summber Jobs';

		$config = array(
			array('field' => 'slots', 'label' => 'Slots', 'rules' => 'required'),
			array('field' => 'details', 'label' => 'Details', 'rules' => 'required')
		);

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() === FALSE)
        {
	        $data['summerjobs_item'] = $this->summerjobs_model->get_summer_jobs();

            $this->load->view('templates/header_with_sidebar', $data);
		    $this->load->view('summerjobs/update', $data);
		    $this->load->view('templates/footer_with_sidebar');
        }
        else
        {
            $this->summerjobs_model->update_summer_jobs();
            redirect('summerjobs/index');
        }
	}

	public function auth()
	{
		if ($this->users_model->authenticate() === FALSE)
        {
            redirect('users/login');
            exit();
        }
	}

}

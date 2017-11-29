<?php
class Jobs extends MX_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('jobs_model');
	}

	public function index()
	{
		$this->auth();

		$data['jobs'] = $this->jobs_model->get_jobs();
		$data['title'] = "Job Hiring";

		$this->load->view('templates/header_with_sidebar', $data);
		$this->load->view('jobs/index', $data);
		$this->load->view('templates/footer_with_sidebar');
	}

	public function view($id = NULL)
    {
    	$this->auth();

        $data['jobs_item'] = $this->jobs_model->get_jobs($id);

        if (empty($data['jobs_item']))
        {
            show_404();
        }

        $data['title'] = $data['jobs_item']['job_title'];

        $this->session->set_userdata('job_id', $data['jobs_item']['id']);

        $this->load->view('templates/header_with_sidebar', $data);
        $this->load->view('jobs/view', $data);
        $this->load->view('templates/footer_with_sidebar');
    }

	public function create()
	{
		$this->auth();

		$data['title'] = "Add Job Hiring";

		$config = array(
			array('field' => 'agency_name', 'label' => 'Agency Name', 'rules' => 'required' ),
			array('field' => 'agency_address', 'label' => 'Agency Address', 'rules' => 'required' ),
			array('field' => 'job_title', 'label' => 'Job Title', 'rules' => 'required' ),
			array('field' => 'hiring_country', 'label' => 'Hiring Country/Places', 'rules' => 'required' )
		);

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header_with_sidebar', $data);
		    $this->load->view('jobs/create', $data);
		    $this->load->view('templates/footer_with_sidebar');
        }
        else
        {
            $data['jobs_item'] = $this->jobs_model->set_jobs();
            $sms_message = "Hiring: ". $data['jobs_item']['job_title'] ." in " . $data['jobs_item']['hiring_country'] . " country. Apply now!";
            // Send sms to applicants about new job hiring
            $this->jobs_notif($sms_message);            
        }
	}

	public function jobs_notif($message)
	{
		$this->load->library('itextmo_sms');
		$message = $message;
		$api_code = "TR-MICHA699339_3R52S";

		$data['jobs'] = $this->jobs_model->get_app_number();

		foreach ($data['jobs'] as $jobs_item) {
			$send_to = $jobs_item['mobile_no'];
			$result = $this->itextmo_sms->send_sms($send_to, $message, $api_code);

			if ($result == ""){
				echo "iTexMo: No response from server!!!
				Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
				Please CONTACT US for help. ";	
			}else if ($result == 0){
				// message sent
			}
			else{	
				echo "Error Num ". $result . " was encountered!";
			}
		}

		redirect('jobs/index');
	}

	public function update()
	{
		
			$this->auth();

			$data['title'] = "Update Job Hiring";

			$config = array(
				array('field' => 'agency_name', 'label' => 'Agency Name', 'rules' => 'required' ),
				array('field' => 'agency_address', 'label' => 'Agency Address', 'rules' => 'required' ),
				array('field' => 'job_title', 'label' => 'Job Title', 'rules' => 'required' ),
				array('field' => 'hiring_country', 'label' => 'Hiring Country/Places', 'rules' => 'required' )
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() === FALSE)
	        {
	        	$job_id = $this->session->userdata('job_id');
	        	$data['jobs_item'] = $this->jobs_model->get_jobs($job_id);

	            $this->load->view('templates/header_with_sidebar', $data);
			    $this->load->view('jobs/update', $data);
			    $this->load->view('templates/footer_with_sidebar');
	        }
	        else
	        {
	            $this->jobs_model->update_jobs();
	            redirect('jobs/index');
	        }
	}

	public function delete()
	{
	    $this->jobs_model->delete_jobs();
	    redirect('jobs/index');
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
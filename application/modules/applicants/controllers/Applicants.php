<?php
class Applicants extends MX_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('applicants_model');
		$this->load->module('templates');
	}

	/* This function must have value for $field_name && $field_value
	*  or else it will return show_404()
	*  the $field_name must correspond to field name of the table in database. and also the value
	*/
	public function index($field_name1 = NULL, $field_value1 = NULL, $field_name2 = NULL, $field_value2 = NULL)
	{
		$this->auth();

		if ($field_name1 !== NULL && $field_value1 !== NULL && $field_name2 !== NULL && $field_value2 !== NULL)
		{
			$data['applicants'] = $this->applicants_model->get_applicants(FALSE, $field_name1, $field_value1, $field_name2, $field_value2);

			$title = ($field_value1 == "any") ? "Hired" : $field_value1;

			$data['title'] = ucfirst($title) . " Applicants";
			$data['field_name1'] = $field_name1;
	        $data['field_value1'] = $field_value1;
	        $data['field_name2'] = $field_name2;
	        $data['field_value2'] = $field_value2;

			$this->templates->header_with_sidebar($data);
			$this->load->view('index', $data);
			$this->templates->footer_with_sidebar();
		}
		else
		{
			show_404();
		}
		
	}

	/* This function must have value for $applicant_id && $field_name && $field_value
	*  or else it will return show_404()
	*  the $field_name must correspond to field name of the table in database. and also the value
	*/
	public function view($applicant_id = NULL, $field_name1 = NULL, $field_value1 = NULL, $field_name2 = NULL, $field_value2 = NULL)
    {
    	$this->auth();

    	if ($field_name1 !== NULL && $field_value1 !== NULL && $field_name2 !== NULL && $field_value2 !== NULL)
		{
	        $data['applicants_item'] = $this->applicants_model->get_applicants($applicant_id, $field_name1, $field_value1, $field_name2, $field_value2);

	        if (empty($data['applicants_item']))
	        {
	            show_404();
	        }

	        $title = ($field_value1 == "any") ? "Hired" : $field_value1;

	        $data['category'] = ucfirst($title) . " Applicants";
	        $data['title'] = $data['category'] . " | " . $data['applicants_item']['fname'];
	        $data['field_name1'] = $field_name1;
	        $data['field_value1'] = $field_value1;
	        $data['field_name2'] = $field_name2;
	        $data['field_value2'] = $field_value2;

	        $this->session->set_userdata('applicant_id', $data['applicants_item']['applicant_id']);

	        $this->templates->header_with_sidebar($data);
	        $this->load->view('view', $data);
	        $this->templates->footer_with_sidebar();
	    }
		else
		{
			show_404();
		}
    }

	public function create()
	{
		$this->auth();

		$data['title'] = 'Create Profile';

    	$data['applicants_item'] = $this->applicants_model->was_hired();

    	if ($data['applicants_item']['accepted'] === 'yes')
    	{
    		$data['title'] = "Application Block";
    		$this->templates->header_with_sidebar($data);
	        $this->load->view('application_block');
	        $this->templates->footer_with_sidebar();
    	}
    	else
    	{
    		$config = array(
				array('field' => 'lname', 'label' => 'Surname', 'rules' => 'required'),
				array('field' => 'fname', 'label' => 'First Name', 'rules' => 'required'),
				array('field' => 'mname', 'label' => 'Last Name', 'rules' => 'required'),
				array('field' => 'bdate', 'label' => 'Birth Date', 'rules' => 'required'),
				array('field' => 'bplace', 'label' => 'Place of Birth', 'rules' => 'required'),
				array('field' => 'sex', 'label' => 'Sex', 'rules' => 'required'),
				array('field' => 'status', 'label' => 'Civil Status', 'rules' => 'required'),
				array('field' => 'citizenship', 'label' => 'Citizenship', 'rules' => 'required'),
				array('field' => 'present_add', 'label' => 'Present Address', 'rules' => 'required'),
				array('field' => 'mobile_no', 'label' => 'Mobile No.', 'rules' => 'required'),
				array('field' => 'employment_status', 'label' => 'Employment Status', 'rules' => 'required')
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() === FALSE)
	        {
	            $this->templates->header($data);
			    $this->load->view('create', $data);
			    $this->templates->footer();
	        }
	        else
	        {
	            $this->applicants_model->set_applicant();
	            $this->templates->header_with_sidebar($data);
	            $this->load->view('create_success');
	            $this->templates->footer_with_sidebar($data);
	        }
    	}

		
	}

	public function accept_reject_applicants()
	{
		$this->auth();

		if ($this->applicants_model->update_accept() === TRUE)
		{
			$this->load->library('itextmo_sms');
			$send_to = $this->input->post('sms_to');
			$message = $this->input->post('sms_message');
			$api_code = "TR-MICHA699339_3R52S";

			$result = $this->itextmo_sms->send_sms($send_to, $message, $api_code);

			if ($result == ""){
				echo "iTexMo: No response from server!!!
				Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
				Please CONTACT US for help. ";	
			}else if ($result == 0){
				// message sent
				$data['title'] = ($this->input->post('accepted') === "yes") ? 'Applicant Accepted' : 'Applicant Rejected';
				$data['body'] = ($this->input->post('accepted') === "yes") ? 'You accepted the applicant for this job.' : 'You rejected an applicant for this job.';

				$this->templates->header_with_sidebar($data);
	            $this->load->view('accept_reject_applicants');
	            $this->templates->footer_with_sidebar();
			}
			else{	
				echo "Error Num ". $result . " was encountered!";
			}
		}


	}

	public function application_status()
	{
		$this->auth();
		
		$data['applicants'] = $this->applicants_model->get_app_status();
		$data['title'] = "Application Status";

	    $this->templates->header_with_sidebar($data);
	    $this->load->view('application_status', $data);
	    $this->templates->footer_with_sidebar();
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
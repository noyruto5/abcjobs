<?php
class Students extends MX_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('students_model');
	}

	/* This function must have value for $field_name && $field_value
	*  or else it will return show_404()
	*  the $field_name must correspond to field name of the table in database. and also the value
	*/
	public function index($field_name1 = NULL, $field_value1 = NULL)
	{
		$this->auth();

		if ($field_name1 !== NULL && $field_value1 !== NULL)
		{
			$data['students'] = $this->students_model->get_students(FALSE, $field_name1, $field_value1);

			$title = ($field_name1 == "accepted" && $field_value1 == "yes") ? "Hired" : "Applicant";

			$data['title'] = ucfirst($title) . " Students";
			$data['field_name1'] = $field_name1;
	        $data['field_value1'] = $field_value1;

			$this->load->view('templates/header_with_sidebar', $data);
			$this->load->view('students/index', $data);
			$this->load->view('templates/footer_with_sidebar');
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
	public function view($student_id = NULL, $field_name1 = NULL, $field_value1 = NULL)
    {
    	$this->auth();

    	if ($field_name1 !== NULL && $field_value1 !== NULL)
		{
	        $data['students_item'] = $this->students_model->get_students($student_id, $field_name1, $field_value1);

	        if (empty($data['students_item']))
	        {
	            show_404();
	        }

	        $title = ($field_name1 == "accepted" && $field_value1 == "yes") ? "Hired" : "Applicant";

	        $data['category'] = ucfirst($title) . " Students";
	        $data['title'] = $data['category'] . " | " . $data['students_item']['fname'];
	        $data['field_name1'] = $field_name1;
	        $data['field_value1'] = $field_value1;

	        $this->session->set_userdata('student_id', $data['students_item']['student_id']);
	        $this->session->set_userdata('sj_id', $data['students_item']['sj_id']);

	        $this->load->view('templates/header_with_sidebar', $data);
	        $this->load->view('students/view', $data);
	        $this->load->view('templates/footer_with_sidebar');
	    }
		else
		{
			show_404();
		}
    }

	public function create()
	{
		$this->auth();

		$data['students_item'] = $this->students_model->was_applied();

    	if ($data['students_item']['student_id'] > 1)
    	{
    		$data['title'] = "Application Block";
    		$this->load->view('templates/header_with_sidebar', $data);
	        $this->load->view('students/application_block');
	        $this->load->view('templates/footer_with_sidebar');
    	}
    	else
    	{
    		$data['title'] = 'Create Profile';

			$config = array(
				array('field' => 'lname', 'label' => 'Surname', 'rules' => 'required' ),
				array('field' => 'fname', 'label' => 'First Name', 'rules' => 'required' ),
				array('field' => 'mname', 'label' => 'Middle Name', 'rules' => 'required' ),
				array('field' => 'bdate', 'label' => 'Birth Date', 'rules' => 'required' ),
				array('field' => 'bplace', 'label' => 'Place of Birth', 'rules' => 'required' ),
				array('field' => 'citizenship', 'label' => 'Citizenship', 'rules' => 'required' ),
				array('field' => 'contact_no', 'label' => 'Contact No.', 'rules' => 'required' ),
				array('field' => 'status', 'label' => 'Status', 'rules' => 'required' ),
				array('field' => 'sex', 'label' => 'Sex', 'rules' => 'required' ),
				array('field' => 'sclass', 'label' => 'Student Category', 'rules' => 'required' ),
				array('field' => 'address', 'label' => 'Permanent Address', 'rules' => 'required' ),
				array('field' => 'fathers_name', 'label' => 'Fathers Name', 'rules' => 'required' ),
				array('field' => 'mothers_name', 'label' => 'Mothers Name', 'rules' => 'required' ),
				array('field' => 'school_name1', 'label' => 'School Name', 'rules' => 'required' ),
				array('field' => 'yr_level1', 'label' => 'Year/Level', 'rules' => 'required' ),
				array('field' => 'date_attend1', 'label' => 'Date of Attendant', 'rules' => 'required' ),
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() === FALSE)
	        {
	            $this->load->view('templates/header', $data);
			    $this->load->view('students/create', $data);
			    $this->load->view('templates/footer');
	        }
	        else
	        {
	            $this->students_model->set_students();
	            $this->load->view('templates/header_with_sidebar', $data);
	            $this->load->view('students/create_success');
	            $this->load->view('templates/footer_with_sidebar');
	        }
    	}
		
	}

	public function accept_reject_students()
	{
		$this->auth();

		if ($this->students_model->update_accept() === TRUE)
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

				redirect('students/index/accepted/no');
			}
			else{	
				echo "Error Num ". $result . " was encountered!";
			}

			
		}

	}

	public function application_status()
	{
		$data['students_item'] = $this->students_model->get_app_status();
		$data['title'] = "Application Status";

	    $this->load->view('templates/header_with_sidebar', $data);
	    $this->load->view('students/application_status', $data);
	    $this->load->view('templates/footer_with_sidebar');
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
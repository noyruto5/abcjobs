<?php
class Users extends MX_Controller {
	
	public function __construct()
	{
		parent::__construct();
        $this->load->module('templates');
	}

    public function index()
    {
        $data['users'] = $this->users_model->get_users();
        $data['title'] = 'List of Users';

        $this->templates->header_with_sidebar($data);
        $this->load->view('index', $data);
        $this->templates->footer_with_sidebar();
    }

    public function verified_user($user_id)
    {
        if (isset($user_id))
        {
            $this->users_model->update_user_status($user_id);

            $data['users_item'] = $this->users_model->get_users($user_id);

            $to = $data['users_item']['email'];
            $subject = "Account Verified";
            $message = "Your account in sagayjobs.000webhostapp.com has been verified. You may now login.";

            mail($to, $subject, $message);

            redirect('/users/index');
        }
        else
        {
            show_404();
        }
    }

    public function deactivate_user($user_id)
    {
        if (isset($user_id))
        {
            $this->users_model->deactivate_user($user_id);

            redirect('/users/index');
        }
    }

	public function sign_up()
	{
        $data['title'] = 'Sign up';

        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password_repeat', 'Password', 'required|matches[password]',
        						array('matches' => 'Password must match')
        );
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE)
        {
            $this->templates->header($data);
		    $this->load->view('sign_up', $data);
		    $this->templates->footer();
        }
        else
        {
            $this->users_model->set_user();
            $this->templates->header($data);
            $this->load->view('signup_success');
            $this->templates->footer();
        }
	}

	public function login()
	{
		$data['title'] = 'Login';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->templates->header($data);
		    $this->load->view('login', $data);
		    $this->templates->footer();
        }
        else
        {
            if ($this->users_model->check_user() === "deactivated")
            {
                $this->templates->header($data);
                $this->load->view('login_deactivated');
                $this->templates->footer();
            }

            if ($this->users_model->check_user() === TRUE)
            {
                switch ($this->session->userdata('role')) {
                    case 'student':
                        redirect('/summerjobs/index');
                        break;
                    case 'applicant':
                        redirect('/jobs/index');
                    
                    default:
                        redirect('/users/index');
                        break;
                }
            }
            else
            {
            	$this->templates->header($data);
	            $this->load->view('login', $data);
	            $this->templates->footer();
            }
        }
	}

    public function signup_success()
    {
        $data['title'] = 'Sign up Success';
        $this->templates->header($data);
        $this->load->view('signup_success', $data);
        $this->templates->footer();
    }

    public function logout()
    {
        $users_data = array('username', 'password', 'role', 'email', 'sj_id', 'job_id', 'student_id', 'applicant_id');
        $this->session->unset_userdata($users_data);
        redirect('/users/login');
    }
}
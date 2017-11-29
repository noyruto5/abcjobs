<?php
class Users_model extends CI_Model {

    public function __construct()
    {
       
    }

    public function set_user()
    {
    	$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

	    $data = array(
	        'username' => $this->input->post('username'),
	        'password' => $password,
            'email' => $this->input->post('email'),
	        'role' => $this->input->post('role')
	    );

	    return $this->db->insert('users', $data);
    }

    public function get_users($user_id = FALSE)
    {
        if ($user_id === FALSE)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('id' => $user_id));
        return $query->row_array();
    }

    public function check_user()
    {
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');

        $this->db->where('username', $username);
        $query = $this->db->get('users');
        $data = $query->result_array();

        if (isset($data[0]['password']) && $data[0]['status'] === 'deactivated')
        {
            return "deactivated";
        }


    	if (isset($data[0]['password']) && $data[0]['status'] === 'verified')
    	{
            $db_password = $data[0]['password'];
    		//$role = $data[0]['role'];
    		
    		if (password_verify($password, $db_password)) {
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('password', $password);
                $this->session->set_userdata('role', $data[0]['role']);
                $this->session->set_userdata('email', $data[0]['email']);

    			return TRUE;
    		} else {
    			return FALSE;
    		}
    	}
    	else
    	{
    		// users doesn't exist
    		return FALSE;
    	}
    }

    public function update_user_status($user_id)
    {
        $this->db->where('id', $user_id)->update('users', array('status' => 'verified'));
    }

    public function deactivate_user($user_id)
    {
        $this->db->where('id', $user_id)->update('users', array('status' => 'deactivated'));
    }

    public function authenticate()
    {
        if ($this->session->userdata('username'))
        {
            $username = $this->session->userdata('username');
            $password = $this->session->userdata('password');

            $query = $this->db->query("SELECT password FROM users WHERE username = '$username'");
            $row = $query->row();

            if (isset($row))
            {
                $db_pass = $row->password;
                if (password_verify($password, $db_pass)) {
                    return TRUE;
                } else {
                    return FALSE;
                }
            }
            else
            {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }

}
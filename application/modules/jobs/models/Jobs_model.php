<?php
class Jobs_model extends CI_Model {

    public function __construct()
    {
        
    }

	public function get_jobs($id = FALSE)
	{
	    if ($id === FALSE)
	    {
	        $query = $this->db->get('jobs');
	        return $query->result_array();
	    }

	    $query = $this->db->get_where('jobs', array('id' => $id));
	    return $query->row_array();
	}    

    public function set_jobs()
    {
    	$data = array(
    		'agency_name' => $this->input->post('agency_name'),
    		'agency_address' => $this->input->post('agency_address'),
    		'job_title' => $this->input->post('job_title'),
            'position_available' => $this->input->post('position_available'),
    		'hiring_country' => $this->input->post('hiring_country'),
    		'qualifications' => $this->input->post('qualifications'),
    		'requirements' => $this->input->post('requirements'),
    		'benifits' => $this->input->post('benifits')
    	);

    	$this->db->insert('jobs', $data);

        // get the last inserted id
        $job_id = $this->db->insert_id();
        // get the data of this id
        return $this->get_jobs($job_id);
    }

    public function update_jobs()
    {
        $job_id = $this->session->userdata('job_id');
        
        $data = array(
            'agency_name' => $this->input->post('agency_name'),
            'agency_address' => $this->input->post('agency_address'),
            'job_title' => $this->input->post('job_title'),
            'hiring_country' => $this->input->post('hiring_country'),
            'qualifications' => $this->input->post('qualifications'),
            'requirements' => $this->input->post('requirements'),
            'benifits' => $this->input->post('benifits')
        );

        $this->db->where('id', $job_id)->update('jobs', $data);
    }

    public function delete_jobs()
    {
        $job_id = $this->session->userdata('job_id');
        $this->db->delete('jobs', array('id' => $job_id));
    }

    /*
    * Get 3 sample mobile number of job applicants
    */
    public function get_app_number()
    {
        $this->db->select('mobile_no')->from('app_personal_info')->where('accepted !=', 'yes')->limit(3);
        $query = $this->db->get();
        return $query->result_array();
    }

}
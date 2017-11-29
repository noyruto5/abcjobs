<?php
class Summerjobs_model extends CI_Model {

    public function __construct()
    {
        
    }

    public function get_summer_jobs()
	{
		$year = date("Y");
	    $query = $this->db->get_where('summer_jobs', array('year' => $year));
	    return $query->row_array();
	}    

    public function set_summer_jobs()
    {
    	$year = date("Y");
    	$data = array(
    		'slots' => $this->input->post('slots'),
    		'details' => $this->input->post('details'),
    		'year' => $year
    	);

    	$this->db->insert('summer_jobs', $data);
    }

    public function update_summer_jobs()
    {
        $sj_id = $this->session->userdata('sj_id');
        
        $data = array(
            'slots' => $this->input->post('slots'),
            'details' => $this->input->post('details')
        );

        $this->db->where('id', $sj_id)->update('summer_jobs', $data);
    }
}
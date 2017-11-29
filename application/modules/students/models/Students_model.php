<?php
class Students_model extends CI_Model {

    public function __construct()
    {
        
    }

    public function get_students($student_id = FALSE, $field_name1 = FALSE, $field_value1 = FALSE)
    {
        $this->db->select('*');
        $this->db->from('students1');
        $this->db->join('students2', 'students2.student_id = students1.student_id');
        $this->db->join('students3', 'students3.student_id = students1.student_id');
        $this->db->join('students4', 'students4.student_id = students1.student_id');
        $this->db->join('summer_jobs', 'summer_jobs.id = students1.sj_id');

        $year = date("Y");

        if ($student_id === FALSE && $field_name1 !== FALSE && $field_value1 !== FALSE)
        {
            $this->db->where('summer_jobs.year', $year);
            $this->db->where($field_name1, $field_value1);
            $query = $this->db->get();
            return $query->result_array();
        }

        if ($field_name1 !== FALSE && $field_value1 !== FALSE)
        {
            $this->db->where('students1.student_id', $student_id);
            $this->db->where('summer_jobs.year', $year);
            $this->db->where($field_name1, $field_value1);
            $query = $this->db->get();
            return $query->row_array();
        }
    }

    public function set_students()
    {

    	$parent_status = implode(',', $this->input->post('parent_status'));
        $qualifications = implode(';', $this->input->post('qualifications'));
        $date_today = date("Y-m-d");

    	$data1 = array(
            'username' => $this->session->userdata('username'),
            'sj_id' => $this->session->userdata('sj_id'),
    		'lname' => $this->input->post('lname'),
    		'fname' => $this->input->post('fname'),
    		'mname' => $this->input->post('mname'),
    		'bdate' => $this->input->post('bdate'),
    		'bplace' => $this->input->post('bplace'),
    		'citizenship' => $this->input->post('citizenship'),
    		'contact_no' => $this->input->post('contact_no'),
    		'email' => $this->input->post('email'),
    		'status' => $this->input->post('status'),
    		'sex' => $this->input->post('sex'),
    		'sclass' => $this->input->post('sclass'),
    		'parent_status' => $parent_status, // This is an array of input
    		'address' => $this->input->post('address'),
            'qualifications' => $qualifications,
            'date_status' => $date_today
    	);

        $this->db->insert('students1', $data1);
        $student_id = $this->db->insert_id();

    	$data2 = array(
    		'student_id' => $student_id,
    		'fathers_name' => $this->input->post('fathers_name'),
    		'fathers_contact' => $this->input->post('fathers_contact'),
    		'fathers_occupation' => $this->input->post('fathers_occupation'),
    		'mothers_name' => $this->input->post('mothers_name'),
    		'mothers_contact' => $this->input->post('mothers_contact'),
    		'mothers_occupation' => $this->input->post('mothers_occupation')
    	);

    	$data3 = array(
    		'student_id' => $student_id,
    		'school_name1' => $this->input->post('school_name1'),
    		'school_name2' => $this->input->post('school_name2'),
    		'school_name3' => $this->input->post('school_name3'),
    		'school_name4' => $this->input->post('school_name4'),
    		'course1' => $this->input->post('course1'),
    		'course2' => $this->input->post('course2'),
    		'course3' => $this->input->post('course3'),
    		'course4' => $this->input->post('course4'),
    		'yr_level1' => $this->input->post('yr_level1'),
    		'yr_level2' => $this->input->post('yr_level2'),
    		'yr_level3' => $this->input->post('yr_level3'),
    		'yr_level4' => $this->input->post('yr_level4'),
    		'date_attend1' => $this->input->post('date_attend1'),
    		'date_attend2' => $this->input->post('date_attend2'),
    		'date_attend3' => $this->input->post('date_attend3'),
    		'date_attend4' => $this->input->post('date_attend4')
    	);

    	$data4 = array(
    		'student_id' => $student_id,
    		'skills' => $this->input->post('skills'),
    		'spes_avail1' => $this->input->post('spes_avail1'),
    		'spes_avail2' => $this->input->post('spes_avail2'),
    		'spes_avail3' => $this->input->post('spes_avail3'),
    		'spes_avail4' => $this->input->post('spes_avail4'),
    		'spes_year1' => $this->input->post('spes_year1'),
    		'spes_year2' => $this->input->post('spes_year2'),
    		'spes_year3' => $this->input->post('spes_year3'),
    		'spes_year4' => $this->input->post('spes_year4'),
    		'spes_id1' => $this->input->post('spes_id1'),
    		'spes_id2' => $this->input->post('spes_id2'),
    		'spes_id3' => $this->input->post('spes_id3'),
    		'spes_id4' => $this->input->post('spes_id4')
    	);

    	$this->db->insert('students2', $data2);
    	$this->db->insert('students3', $data3);
    	$this->db->insert('students4', $data4);
    }
    
    public function update_accept()
    {
        $student_id = $this->session->userdata('student_id');
        $accepted = $this->input->post('accepted');
        $today = date("Y-m-d");
        $data = array(
            'accepted' => $accepted,
            'date_status' => $today
        );
        $this->db->where('student_id', $student_id)->update('students1', $data);

        if ($accepted === "yes")
        {
            // update slots in summer_jobs table
            $sj_id = $this->session->userdata('sj_id');

            $this->db->select('slots')->where('id', $sj_id);
            $query = $this->db->get('summer_jobs');
            $data = $query->result_array();

            $slots = $data[0]['slots'];
            $slots-=1;

            $this->db->where('id', $sj_id)->update('summer_jobs', array('slots' => $slots));
        }
        return TRUE;
    }

    public function get_app_status()
    {
        $this->db->select('*');
        $this->db->from('summer_jobs');
        $this->db->join('students1', 'students1.sj_id = summer_jobs.id');

        $this->db->where('students1.username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query->row_array();
    }

    public function was_applied()
    {
        $this->db->select('student_id')->from('students1')->where('username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query->row_array();
    }
}
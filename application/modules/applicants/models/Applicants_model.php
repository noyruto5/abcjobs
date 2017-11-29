<?php
class Applicants_model extends CI_Model {

    public function __construct()
    {
        
    }

    /* 
    * function - This get applicants who is employed, unemployed or hired
    * var $field_name - required
    * var $field_value - required
    *
    */
    public function get_applicants($applicant_id = FALSE, $field_name1 = FALSE, $field_value1 = FALSE, $field_name2 = FALSE, $field_value2 = FALSE)
    {
        $this->db->select('*');
        $this->db->from('app_personal_info');
        $this->db->join('app_job_preferences', 'app_job_preferences.applicant_id = app_personal_info.applicant_id');
        $this->db->join('app_lang_proficiency', 'app_lang_proficiency.applicant_id = app_personal_info.applicant_id');
        $this->db->join('app_educ_background', 'app_educ_background.applicant_id = app_personal_info.applicant_id');
        $this->db->join('app_eligibility', 'app_eligibility.applicant_id = app_personal_info.applicant_id');
        $this->db->join('app_work_exp', 'app_work_exp.applicant_id = app_personal_info.applicant_id');
        $this->db->join('app_techvoc_training', 'app_techvoc_training.applicant_id = app_personal_info.applicant_id');
        $this->db->join('app_skills', 'app_skills.applicant_id = app_personal_info.applicant_id');

        if ($applicant_id === FALSE && $field_name1 !== FALSE && $field_value1 !== FALSE && $field_name2 !== FALSE && $field_value2 !== FALSE)
        {
            if ($field_value1 == "any")
            {
                // with out any condition of emp_status
                $this->db->where($field_name2, $field_value2);
            }
            else
            {
                // with condition of emp_status
                $this->db->where($field_name1, $field_value1);
                $this->db->where($field_name2, $field_value2);
            }
            
            $query = $this->db->get();
            return $query->result_array();
        }

        if ($field_name1 !== FALSE && $field_value1 !== FALSE && $field_name2 !== FALSE && $field_value2 !== FALSE)
        {
            if ($field_value1 == "any")
            {
                // with out any condition of emp_status
                $this->db->where('app_personal_info.applicant_id', $applicant_id);
                $this->db->where($field_name2, $field_value2);
            }
            else
            {
                // with condition of emp_status
                $this->db->where('app_personal_info.applicant_id', $applicant_id);
                $this->db->where($field_name1, $field_value1);
                $this->db->where($field_name2, $field_value2);
            }
            
            $query = $this->db->get();
            return $query->row_array();
        }
    }

    public function set_applicant()
    {
        $employment_status = $this->input->post('employment_status');
        $emp_status;

        if ($employment_status === "Wage Employed" || $employment_status === "Self Employed")
        {
            $emp_status = "employed";
        }
        else
        {
            $emp_status = "unemployed";
        }

        $date_today = date("Y-m-d");

    	$data_personal_info = array(
            'username' => $this->session->userdata('username'),
            'job_id' => $this->session->userdata('job_id'),
    		'lname' => $this->input->post('lname'),
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('mname'),
            'bdate' => $this->input->post('bdate'),
            'bplace' => $this->input->post('bplace'),
            'sex' => $this->input->post('sex'),
            'status' => $this->input->post('status'),
            'citizenship' => $this->input->post('citizenship'),
            'height' => $this->input->post('height'),
            'weight' => $this->input->post('weight'),
            'religion' => $this->input->post('religion'),
            'tin_no' => $this->input->post('tin_no'),
            'gsss_no' => $this->input->post('gsss_no'),
            'pagibig_no' => $this->input->post('pagibig_no'),
            'philhealth_no' => $this->input->post('philhealth_no'),
            'email' => $this->input->post('email'),
            'present_add' => $this->input->post('present_add'),
            'perm_add' => $this->input->post('lname'),
            'landline_no' => $this->input->post('landline_no'),
            'mobile_no' => $this->input->post('mobile_no'),
            'employment_status' => $employment_status,
            'emp_status' => $emp_status,
            'date_status' => $date_today
    	);

        $this->db->insert('app_personal_info', $data_personal_info);
        $applicant_id = $this->db->insert_id();

    	$data_job_pref = array(
    		'applicant_id' => $applicant_id,
    		'occupation1' => $this->input->post('occupation1'),
            'occupation2' => $this->input->post('occupation2'),
            'occupation3' => $this->input->post('occupation3'),
            'industry1' => $this->input->post('industry1'),
            'industry2' => $this->input->post('industry2'),
            'industry3' => $this->input->post('industry3'),
            'pref_location' => $this->input->post('pref_location'),
            'location1' => $this->input->post('location1'),
            'location2' => $this->input->post('location2'),
            'location3' => $this->input->post('location3'),
            'with_passport' => $this->input->post('with_passport'),
            'pass_exp_date' => $this->input->post('pass_exp_date')
    	);

    	$data_lang_prof = array(
    		'applicant_id' => $applicant_id,
    		'eng_read' => $this->input->post('eng_read'),
            'eng_write' => $this->input->post('eng_write'),
            'eng_speak' => $this->input->post('eng_speak'),
            'eng_under' => $this->input->post('eng_under'),
            'fil_read' => $this->input->post('fil_read'),
            'fil_write' => $this->input->post('fil_write'),
            'fil_speak' => $this->input->post('fil_speak'),
            'fil_under' => $this->input->post('fil_under'),
            'other_lang' => $this->input->post('other_lang'),
            'olang_read' => $this->input->post('olang_read'),
            'olang_write' => $this->input->post('olang_write'),
            'olang_speak' => $this->input->post('olang_speak'),
            'olang_under' => $this->input->post('olang_under')
    	);

    	$data_educ_bg = array(
    		'applicant_id' => $applicant_id,
    		'in_school' => $this->input->post('in_school'),
            'hi_ed_level' => $this->input->post('hi_ed_level'),
            'year_grad' => $this->input->post('year_grad'),
            'school_name' => $this->input->post('school_name'),
            'course' => $this->input->post('course'),
            'award' => $this->input->post('award')
    	);

        $data_techvoc_training = array(
            'applicant_id' => $applicant_id,
            'training1' => $this->input->post('training1'),
            'training2' => $this->input->post('training2'),
            'training3' => $this->input->post('training3'),
            'training4' => $this->input->post('training4'),
            'course_duration1' => $this->input->post('course_duration1'),
            'course_duration2' => $this->input->post('course_duration2'),
            'course_duration3' => $this->input->post('course_duration3'),
            'course_duration4' => $this->input->post('course_duration4'),
            'institution1' => $this->input->post('institution1'),
            'institution2' => $this->input->post('institution2'),
            'institution3' => $this->input->post('institution3'),
            'institution4' => $this->input->post('institution4'),
            'cert1' => $this->input->post('cert1'),
            'cert2' => $this->input->post('cert2'),
            'cert3' => $this->input->post('cert3'),
            'cert4' => $this->input->post('cert4'),
            'completed1' => $this->input->post('completed1'),
            'completed2' => $this->input->post('completed2'),
            'completed3' => $this->input->post('completed3'),
            'completed4' => $this->input->post('completed4')
        );

        $data_elig = array(
            'applicant_id' => $applicant_id,
            'el_name1' => $this->input->post('el_name1'),
            'el_name2' => $this->input->post('el_name2'),
            'el_no1' => $this->input->post('el_no1'),
            'el_no2' => $this->input->post('el_no2'),
            'exp_date1' => $this->input->post('exp_date1'),
            'exp_date2' => $this->input->post('exp_date2')
        );

        $data_work = array(
            'applicant_id' => $applicant_id,
            'comp_name1' => $this->input->post('comp_name1'),
            'comp_name2' => $this->input->post('comp_name2'),
            'comp_name3' => $this->input->post('comp_name3'),
            'comp_address1' => $this->input->post('comp_address1'),
            'comp_address2' => $this->input->post('comp_address2'),
            'comp_address3' => $this->input->post('comp_address3'),
            'position1' => $this->input->post('position1'),
            'position2' => $this->input->post('position2'),
            'position3' => $this->input->post('position3'),
            'work_date1' => $this->input->post('work_date1'),
            'work_date2' => $this->input->post('work_date2'),
            'work_date3' => $this->input->post('work_date3'),
            'appointment1' => $this->input->post('appointment1'),
            'appointment2' => $this->input->post('appointment2'),
            'appointment3' => $this->input->post('appointment3')
        );

        $data_skills = array(
            'applicant_id' => $applicant_id,
            'skills1' => $this->input->post('skills1'),
            'skills2' => $this->input->post('skills2'),
            'skills3' => $this->input->post('skills3'),
            'skills4' => $this->input->post('skills4'),
            'skills5' => $this->input->post('skills5'),
            'skills6' => $this->input->post('skills6')
        );

    	$this->db->insert('app_job_preferences', $data_job_pref);
    	$this->db->insert('app_lang_proficiency', $data_lang_prof);
    	$this->db->insert('app_educ_background', $data_educ_bg);
        $this->db->insert('app_techvoc_training', $data_techvoc_training);
        $this->db->insert('app_eligibility', $data_elig);
        $this->db->insert('app_work_exp', $data_work);
        $this->db->insert('app_skills', $data_skills);
    }

    public function update_accept()
    {
        $applicant_id = $this->session->userdata('applicant_id');
        $today = date("Y-m-d");
        $data = array(
            'accepted' => $this->input->post('accepted'),
            'date_status' => $today
        );
        $this->db->where('applicant_id', $applicant_id)->update('app_personal_info', $data);

        return TRUE;
    }

    public function get_app_status()
    {
        $this->db->select('*');
        $this->db->from('jobs');
        $this->db->join('app_personal_info', 'app_personal_info.job_id = jobs.id');

        $this->db->where('app_personal_info.username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query->result_array();
    }

    public function was_hired()
    {
        $this->db->select('accepted')->from('app_personal_info')->where('username', $this->session->userdata('username'))->like('accepted', 'yes');
        $query = $this->db->get();
        return $query->row_array();
    }

}
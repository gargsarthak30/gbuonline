<?php

class Alumni_profile extends CI_Controller {

    function basic_form_1() {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('dob', 'Date Of birth', 'required|max_length[100]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('marital_status', 'Marital status', 'required|max_length[100]');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
    }

    function basic_form_2() {

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('start_year', 'Start Year', 'required|max_length[15]');
        $this->form_validation->set_rules('end_year', 'End Year (Enter CURRENT in case of ongoing)', 'required|max_length[15]');
        $this->form_validation->set_rules('company_name', 'Company Name', 'required|max_length[50]');
        $this->form_validation->set_rules('location', 'Location', 'max_length[100]');
        $this->form_validation->set_rules('designation', 'Designation', 'required|max_length[100]');
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
    }

    function create() {
        if ($this->session->userdata('loggedin') != 1)
            redirect('/users?redirect=' . current_url());

        $check_q = $this->db->query("select count(*) as profiles from alumni_basic where user_id = '" . $this->session->userdata('user_id') . "'");
        $check = $check_q->row();
        if ($check->profiles >= 1)
            redirect('alumni_profile');

        $this->basic_form_1();


        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
            $data['heading'] = ' GBU Alumni ';
            $data['message'] = 'Let the world know you.....';
            $this->load->view('pages/common/link', $data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading', $data);
            $this->load->view('pages/alumni/create_profile');
            $this->load->view('pages/common/footer');
        } else {
            $form_data = array(
                'user_id' => $this->session->userdata('user_id'),
                'dob' => set_value('dob'),
                'address' => set_value('address'),
                'gender' => set_value('gender'),
                'marital_status' => set_value('marital_status')
            );


            $this->insert_basic($form_data);
            redirect('Alumni_profile/success');
        }
    }

    function update() {
        if ($this->session->userdata('loggedin') != 1)
            redirect('/users?redirect=' . current_url());

        $check_q = $this->db->query("select count(*) as profiles from alumni_basic where user_id = '" . $this->session->userdata('user_id') . "'");
        $check = $check_q->row();
        if ($check->profiles == 0)
            redirect('alumni_profile/create');

        $this->basic_form_1();

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            set_value('dob', '333');
            $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
            $data['heading'] = ' GBU Alumni ';
            $data['message'] = 'Let the world know you.....';
            $this->load->view('pages/common/link', $data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading', $data);

            $query = $this->db->get_where('alumni_basic', array('user_id' => $this->session->userdata('user_id')));

            $form_data = $query->row();

            $this->load->view('pages/alumni/create_profile', $form_data);
            $this->load->view('pages/common/footer');
        } else {
            $form_data = array(
                'user_id' => $this->session->userdata('user_id'),
                'dob' => set_value('dob'),
                'address' => set_value('address'),
                'gender' => set_value('gender'),
                'marital_status' => set_value('marital_status')
            );


            $this->update_basic($form_data);
            redirect('Alumni_profile/update');
        }
    }

    function insert_basic($form_data) {
        $this->db->insert('alumni_basic', $form_data);

        if ($this->db->affected_rows() == '1') {
            return TRUE;
        }

        return FALSE;
    }

    function update_basic($form_data) {

        $this->db->update('alumni_basic', $form_data, "user_id = '" . $form_data['user_id'] . "'");
    }

    function view_work_info() {
        $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
        $data['heading'] = ' GBU Alumni ';
        $data['message'] = 'Let the world know you.....';
        $this->load->view('pages/common/link', $data);
        $this->load->view('pages/common/header');
        $this->load->view('pages/common/page-heading', $data);
        $u_info['user_id'] = $this->session->userdata('user_id');
        $this->load->view('pages/alumni/work_info', $u_info);
        $this->load->view('pages/common/footer');
    }

    function add_work_info() {
        $this->basic_form_2();

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['title'] = 'Alumni &nbsp;|&nbsp;  GBU Online';
            $data['heading'] = ' GBU Alumni ';
            $data['message'] = 'Let the world know you.....';
            $this->load->view('pages/common/link', $data);
            $this->load->view('pages/common/header');
            $this->load->view('pages/common/page-heading', $data);
            $u_info['user_id'] = $this->session->userdata('user_id');
            $this->load->view('pages/alumni/work_info_form', $u_info);
            $this->load->view('pages/common/footer');
        } else {
            $form_data = array(
                'user_id' => $this->session->userdata('user_id'),
                'start_year' => set_value('start_year'),
                'end_year' => set_value('end_year'),
                'company_name' => set_value('company_name'),
                'location' => set_value('location'),
                'designation' => set_value('designation')
            );

            $this->db->insert('work_details', $form_data);
            redirect('Alumni_profile/view_work_info');
        }
    }

    function view() {
        
    }

}

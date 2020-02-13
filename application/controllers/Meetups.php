<?php
    class Meetups extends CI_Controller{
        public function awesome_meetups_people($offset = 0){
        $config['base_url'] = base_url() .'meetups/awesome_meetups_people';
        $config['total_rows'] = $this->db->count_all('awesome_cards_engine_notes');
        $config['per_page'] = 20;
        $config['uri_segment'] = 3;
        $config['num_links'] = 1;
        $config['attributes'] = array('class' => 'pagination-links');
        $data['people'] = $this->meetups_model->awesome_meetups_people($config['per_page'], $offset);
        $this->pagination->initialize($config); 
          $this->load->view('meetups/templates/header'); 
          $this->load->view('meetups/pages/people', $data);
          $this->load->view('meetups/templates/footer') 
        }

        public function my_profile(){
            $id = $this->session->userdata('id');
            $email_address = $this->session->userdata('email_address');
            $data['my_profile'] = $this->meetups_model->my_profile($id, $email_address)
            $this->load->view('meetups/templates/header'); 
            $this->load->view('meetups/pages/my_profile', $data);
            $this->load->view('meetups/templates/footer') 
        }

        public function edit_my_profile(){
            $id = $this->session->userdata('id');
            $email_address = $this->session->userdata('email_address');
            $data['my_profile'] = $this->meetups_model->my_profile($id, $email_address)
            $this->load->view('meetups/templates/header'); 
            $this->load->view('meetups/pages/edit_my_profile', $data);
            $this->load->view('meetups/templates/footer') 
        }

        public function update_my_profile(){
            $id = $this->input->post('id');
            $email_address = $this->input->post('email_address');
            $user_name = $this->input->post('user_name');
            $bio = $this->input->post('bio');
            $gender = $this->input->post('gender');
            $cellphone_number = $this->input->post('cellphone_number');
            $this->meetups_model->update_my_profile($id, $email_address, $user_name, $bio, $gender, $cellphone_number)
        }

        
    }





?>
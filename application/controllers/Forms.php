<?php
    class Forms extends CI_Controller{
        public function man_crush_monday_card(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }
            $this->load->view('card_templates/header.php');
            $this->load->view('forms/man_crush_monday.php');
            $this->load->view('templates/footer.php');
        }

        public function submit_man_crush_monday_order(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }
            $this->form_validation->set_rules('name_of_card', 'name_of_card', 'required');
            $this->form_validation->set_rules('location_of_receiver', 'location_of_receiver', 'required');
            $this->form_validation->set_rules('user_cellphone_number', 'user_cellphone_number', 'required');
            $this->form_validation->set_rules('include_senders_number_on_card', 'include_senders_number_on_card', 'required');
            $this->form_validation->set_rules('message_to_receiver', 'message_to_receiver', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('card_templates/header.php');
                $this->load->view('forms/man_crush_monday.php');
                $this->load->view('templates/footer.php'); 
            }else{
                $this->submit_order_model->submit_man_crush_monday_order();
                $this->session->set_flashdata('order_submitted', 'Thank you. We have recieved your order. We will contact you via WhatsApp.');
                redirect('man_crush_monday_card');
            }
            
        }

        public function motivational_tuesday_card(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }
            $this->load->view('card_templates/header.php');
            $this->load->view('forms/motivational_tuesday.php');
            $this->load->view('templates/footer.php');
        }

        public function submit_motivational_tuesday_order(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }

            
            $this->form_validation->set_rules('name_of_card', 'name_of_card', 'required');
            $this->form_validation->set_rules('location_of_receiver', 'location_of_receiver', 'required');
            $this->form_validation->set_rules('user_cellphone_number', 'user_cellphone_number', 'required');
            $this->form_validation->set_rules('include_senders_number_on_card', 'include_senders_number_on_card', 'required');
            $this->form_validation->set_rules('message_to_receiver', 'message_to_receiver', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('card_templates/header.php');
                $this->load->view('forms/motivational_tuesday.php');
                $this->load->view('templates/footer.php'); 
            }else{
                $this->submit_order_model->submit_motivational_tuesday_order();
                $this->session->set_flashdata('order_submitted', 'Thank you. We have recieved your order. We will contact you via WhatsApp.');
                redirect('motivational_tuesday_card');
            }
        }

        public function woman_crush_wednesday_card(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }
            $this->load->view('card_templates/header.php');
            $this->load->view('forms/woman_crush_wednesday.php');
            $this->load->view('templates/footer.php');
        }

        public function submit_woman_crush_wednesday_order(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }

            $this->form_validation->set_rules('name_of_card', 'name_of_card', 'required');
            $this->form_validation->set_rules('location_of_receiver', 'location_of_receiver', 'required');
            $this->form_validation->set_rules('user_cellphone_number', 'user_cellphone_number', 'required');
            $this->form_validation->set_rules('include_senders_number_on_card', 'include_senders_number_on_card', 'required');
            $this->form_validation->set_rules('message_to_receiver', 'message_to_receiver', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('card_templates/header.php');
                $this->load->view('forms/woman_crush_wednesday.php');
                $this->load->view('templates/footer.php'); 
            }else{
                $this->submit_order_model->submit_woman_crush_wednesday_order();
                $this->session->set_flashdata('order_submitted', 'Thank you. We have recieved your order. We will contact you via WhatsApp.');
                redirect('woman_crush_wednesday_card');
            }
        }

        public function throwback_thursday_card(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }
            $this->load->view('card_templates/header.php');
            $this->load->view('forms/throwback_thursday.php');
            $this->load->view('templates/footer.php');
        }

        public function submit_throwback_thursday_order(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }

            $this->form_validation->set_rules('name_of_card', 'name_of_card', 'required');
            $this->form_validation->set_rules('location_of_receiver', 'location_of_receiver', 'required');
            $this->form_validation->set_rules('user_cellphone_number', 'user_cellphone_number', 'required');
            $this->form_validation->set_rules('include_senders_number_on_card', 'include_senders_number_on_card', 'required');
            $this->form_validation->set_rules('message_to_receiver', 'message_to_receiver', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('card_templates/header.php');
                $this->load->view('forms/throwback_thursday.php');
                $this->load->view('templates/footer.php'); 
            }else{
                $this->submit_order_model->submit_throwback_thursday_order();
                $this->session->set_flashdata('order_submitted', 'Thank you. We have recieved your order. We will contact you via WhatsApp.');
                redirect('throwback_thursday_card');
            }
        }

        public function forgiveness_friday_card(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }
            $this->load->view('card_templates/header.php');
            $this->load->view('forms/forgiveness_friday.php');
            $this->load->view('templates/footer.php');
        }

        public function submit_forgiveness_friday_order(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }
            $this->form_validation->set_rules('name_of_card', 'name_of_card', 'required');
            $this->form_validation->set_rules('location_of_receiver', 'location_of_receiver', 'required');
            $this->form_validation->set_rules('user_cellphone_number', 'user_cellphone_number', 'required');
            $this->form_validation->set_rules('include_senders_number_on_card', 'include_senders_number_on_card', 'required');
            $this->form_validation->set_rules('message_to_receiver', 'message_to_receiver', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('card_templates/header.php');
                $this->load->view('forms/forgiveness_friday.php');
                $this->load->view('templates/footer.php'); 
            }else{
                $this->submit_order_model->submit_forgiveness_friday_order();
                $this->session->set_flashdata('order_submitted', 'Thank you. We have recieved your order. We will contact you via WhatsApp.');
                redirect('forgiveness_friday_card');
            }
        }

        public function midnight_dirty_talks_card(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }
            $this->load->view('card_templates/header.php');
            $this->load->view('forms/midnight_dirty_talks.php');
            $this->load->view('templates/footer.php');
        }

        public function submit_midnight_dirty_talks_order(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }

            $this->form_validation->set_rules('name_of_card', 'name_of_card', 'required');
            $this->form_validation->set_rules('location_of_receiver', 'location_of_receiver', 'required');
            $this->form_validation->set_rules('user_cellphone_number', 'user_cellphone_number', 'required');
            $this->form_validation->set_rules('include_senders_number_on_card', 'include_senders_number_on_card', 'required');
            $this->form_validation->set_rules('message_to_receiver', 'message_to_receiver', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('card_templates/header.php');
                $this->load->view('forms/midnight_dirty_talks.php');
                $this->load->view('templates/footer.php'); 
            }else{
                $this->submit_order_model->submit_midnight_dirty_talks_order();
                $this->session->set_flashdata('order_submitted', 'Thank you. We have recieved your order. We will contact you via WhatsApp.');
                redirect('midnight_dirty_talks_card');
            }
        }

        public function submit_contact_message_to_administrator(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('message', 'message', 'required');

            if($this->form_validation->run()===FALSE){
                redirect('home_page');
            }else{
                $this->submit_message_model->submit_contact_message_to_administrator();
                $this->session->set_flashdata('message_submitted', 'We have recieved your message. We will send you an email soon');
                redirect('home_page');
            }
        }
    }

?>
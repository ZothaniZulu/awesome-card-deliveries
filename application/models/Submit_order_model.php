<?php
    class Submit_order_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }


        public function submit_man_crush_monday_order(){
            $data = array(
                'name_of_card' =>$this->input->post('name_of_card'),
                'user_name' => $this->input->post('user_name'),
                'receiver' => $this->input->post('name_of_receiver'),
                'receiver_location' => $this->input->post('location_of_receiver'),
                'senders_cellphone' => $this->input->post('user_cellphone_number'),
                'include_number' => $this->input->post('include_senders_number_on_card'),
                'receiver_cellphone' => $this->input->post('receiver_cellphone_number'),
                'message_to_receiver' => $this->input->post('message_to_receiver')
            );
            return $this->db->insert('orders' ,$data); 
        }
        public function submit_motivational_tuesday_order(){
            $data = array(
                'name_of_card' =>$this->input->post('name_of_card'),
                'user_name' => $this->input->post('user_name'),
                'receiver' => $this->input->post('name_of_receiver'),
                'receiver_location' => $this->input->post('location_of_receiver'),
                'senders_cellphone' => $this->input->post('user_cellphone_number'),
                'include_number' => $this->input->post('include_senders_number_on_card'),
                'receiver_cellphone' => $this->input->post('receiver_cellphone_number'),
                'message_to_receiver' => $this->input->post('message_to_receiver')
            );

            return $this->db->insert('orders' ,$data); 
        }

        public function submit_woman_crush_wednesday_order(){
            $data = array(
                'name_of_card' =>$this->input->post('name_of_card'),
                'user_name' => $this->input->post('user_name'),
                'receiver' => $this->input->post('name_of_receiver'),
                'receiver_location' => $this->input->post('location_of_receiver'),
                'senders_cellphone' => $this->input->post('user_cellphone_number'),
                'include_number' => $this->input->post('include_senders_number_on_card'),
                'receiver_cellphone' => $this->input->post('receiver_cellphone_number'),
                'message_to_receiver' => $this->input->post('message_to_receiver')
            );

            return $this->db->insert('orders' ,$data); 
        }
        public function submit_throwback_thursday_order(){
            $data = array(
                'name_of_card' =>$this->input->post('name_of_card'),
                'user_name' => $this->input->post('user_name'),
                'receiver' => $this->input->post('name_of_receiver'),
                'receiver_location' => $this->input->post('location_of_receiver'),
                'senders_cellphone' => $this->input->post('user_cellphone_number'),
                'include_number' => $this->input->post('include_senders_number_on_card'),
                'receiver_cellphone' => $this->input->post('receiver_cellphone_number'),
                'message_to_receiver' => $this->input->post('message_to_receiver')
            );

            return $this->db->insert('orders' ,$data); 
        }
        public function submit_forgiveness_friday_order(){
            $data = array(
                'name_of_card' =>$this->input->post('name_of_card'),
                'user_name' => $this->input->post('user_name'),
                'receiver' => $this->input->post('name_of_receiver'),
                'receiver_location' => $this->input->post('location_of_receiver'),
                'senders_cellphone' => $this->input->post('user_cellphone_number'),
                'include_number' => $this->input->post('include_senders_number_on_card'),
                'receiver_cellphone' => $this->input->post('receiver_cellphone_number'),
                'message_to_receiver' => $this->input->post('message_to_receiver')
            );

            return $this->db->insert('orders' ,$data); 
        }
        public function submit_midnight_dirty_talks_order(){
            $data = array(
                'name_of_card' =>$this->input->post('name_of_card'),
                'user_name' => $this->input->post('user_name'),
                'receiver' => $this->input->post('name_of_receiver'),
                'receiver_location' => $this->input->post('location_of_receiver'),
                'senders_cellphone' => $this->input->post('user_cellphone_number'),
                'include_number' => $this->input->post('include_senders_number_on_card'),
                'receiver_cellphone' => $this->input->post('receiver_cellphone_number'),
                'message_to_receiver' => $this->input->post('message_to_receiver')
            );

            return $this->db->insert('orders' ,$data); 
        }
    }



?>
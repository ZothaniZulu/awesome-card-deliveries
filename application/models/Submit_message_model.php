<?php
    class Submit_message_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function submit_contact_message_to_administrator(){
            $data = array(
                'name' =>$this->input->post('name'),
                'email' =>$this->input->post('email'),
                'message' =>$this->input->post('message')
            );

            return $this->db->insert('customer_messages', $data);
        }
    }


?>
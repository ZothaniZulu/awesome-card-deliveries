<?php
    class User_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function login($username){
			// Validate
			$result = $this->db->get_where('awesome_cards_engine_notes', array('email_address' => $username));
			if($result->num_rows() == 1){
				return $result->result();
			} else {
				return false;
			}
        }
        
        public function register($enc_password){
			// User data array
			$data = array(
				'email_address' => $this->input->post('email_address'),
				'user_name' => $this->input->post('username'),
				'cellphone_number' => $this->input->post('cellphone_number'),
				'gender' => $this->input->post('gender'),
                'password' => $enc_password,
			);

			// Insert user
			return $this->db->insert('awesome_cards_engine_notes', $data);
		}

		public function check_email_exists($username){
			$query = $this->db->get_where('awesome_cards_engine_notes', array('email_address' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

    }

?>
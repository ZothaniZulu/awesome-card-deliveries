<?php
    class Meetups_model extends CI_Model{
        public function awesome_meetups_people($limit = FALSE, $offset = FALSE){
            if($limit){
                $this->db->limit($limit, $offset);
            }

            $query = $this->db->get('awesome_cards_engine_notes');
            return $query->result_array();
        }

        public function my_profile($id, $email_address){
            $query = $this->db->get_where('awesome_cards_engine_notes', array('id' => $id,'email_address' => $username));
            return $query->row_array();
        }

        public function update_my_proile($id, $email_address, $user_name, $bio, $gender, $cellphone_number){
           $data = array(
               'user_name' => $user_name,
               'bio' => $bio,
               'gender' => $gender,
               'cellphone' => $cellphone
           ); 

           return $this->db->update('awesome_cards_engine_notes', $data, array('id' => $id, 'email_address' => $email_address));
        }
    }



?>
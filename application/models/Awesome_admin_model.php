<?php
    class Awesome_admin_model extends CI_Model{
        public function list_new_orders($limit = FALSE, $offset = FALSE){
            if($limit){
                $this->db->limit($limit, $offset);
            }
            $this->db->order_by('created_at', 'ASC');
            $query = $this->db->get_where('orders', array('order_status' => 0));
            return $query->result_array();

        }

        public function processed_orders($limit = FALSE, $offset = FALSE){
            $this->db->order_by('created_at', 'ASC');
            $query = $this->db->get_where('orders', array('order_status' => 1));
            return $query->result_array();
        }

        public function reverse_order($order_id){
            $data = array(
                'order_status' => 0
            );
            $this->db->where(array('id' => $order_id));
            return $this->db->update('orders', $data);
        }

        public function process_order($order_id){
            $data = array(
                'order_status' => 1
            );
            $this->db->where(array('id' => $order_id));
            return $this->db->update('orders', $data);
        }


        public function customer_messages($limit = FALSE, $offset = FALSE){
            if($limit){
                $this->db->limit($limit, $offset);
            }
            $query = $this->db->get('customer_messages');
            return $query->result_array();

        }

        public function list_users($limit = FALSE, $offset = FALSE){
            if($limit){
                $this->db->limit($limit, $offset);
            }
            $query = $this->db->get('awesome_cards_engine_notes');
            return $query->result_array();
        }



        public function count_users(){
            $query = $this->db->get('awesome_cards_engine_notes');
            return $query->num_rows();
          
        }

        public function login($username){
			// Validate
			$result = $this->db->get_where('awesome_cards_administrators', array('username' => $username));
			if($result->num_rows() == 1){
				return $result->result();
			} else {
				return false;
			}
        }

    }

?>
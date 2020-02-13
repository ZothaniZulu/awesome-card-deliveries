<?php
    class Awesome_admin extends CI_Controller{
        public function login(){
            $this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('admin_area/admin_access_templates/header');
				$this->load->view('admin_area/admin_access_pages/login');
				$this->load->view('admin_area/admin_access_templates/footer');
			} else{
				// Get username
                $username = $this->input->post('username');
                //Get password
				$password = $this->input->post('password');
            
                //unset any previous sessions
				$this->session->unset_userdata('logged_in');
				// die(print_r($user_id));
				
				if($user_id = $this->awesome_admin_model->login($username)){
					foreach($user_id as $row){
						$stored_password = $row->password;
						$name = $row->user_name;
						
					}
					
				}else{
                    $this->session->set_flashdata('login_failed', 'The email address/password entered is incorrect');
					redirect('awesome_cards_admin_login_area');
                }


                    if(password_verify($password, $stored_password)){
						// Create session
					
							$user_data = array(
								'username' => $username,
								'administrator' => true
							);
                            $this->session->set_userdata($user_data);
							// Set message
							$this->session->set_flashdata('user_loggedin', 'You are now logged in');
							redirect('awesome_cards_admin_dashboard');
                    }else{
						$this->session->set_flashdata('login_failed', 'The username/password entered is incorrect');
						redirect('awesome_cards_admin_login_area');
					}
      
            }
        }

        public function logout(){
			// Unset user data
			$this->session->unset_userdata('administrator');
			$this->session->unset_userdata('user_id');
		
			// Set message
			$this->session->set_flashdata('administrator_loggedout', 'You are now logged out');
			redirect('awesome_cards_admin_login_area');
		}

        public function register(){

        }
        
        public function dashboard($offset = 0){
            if(!$this->session->userdata('administrator')){
				redirect('awesome_cards_admin_login_area');
            }
            $config['base_url'] = base_url() .'awesome_admin/dashboard';
            $config['total_rows'] = $this->db->count_all('orders');
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            $config['num_links'] = 1;
            $config['attributes'] = array('class' => 'pagination-links');
            $data['orders'] = $this->awesome_admin_model->list_new_orders($config['per_page'], $offset);
            $this->pagination->initialize($config); 
            $data['number_of_users'] = $this->awesome_admin_model->count_users();
            $this->load->view('admin_area/templates/header.php');
            $this->load->view('admin_area/pages/admin_area.php', $data);
            $this->load->view('admin_area/templates/footer.php'); 
        }

        public function processed_orders($offset = 0){
            if(!$this->session->userdata('administrator')){
				redirect('awesome_cards_admin_login_area');
            }
            $config['base_url'] = base_url() .'awesome_admin/processed_orders';
            $config['total_rows'] = $this->db->count_all('orders');
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            $config['num_links'] = 1;
            $config['attributes'] = array('class' => 'pagination-links');
            $data['processed_orders'] = $this->awesome_admin_model->processed_orders($config['per_page'], $offset);
            $this->pagination->initialize($config);
            $data['number_of_users'] = $this->awesome_admin_model->count_users();
            $this->load->view('admin_area/templates/header.php');
            $this->load->view('admin_area/pages/processed_orders.php', $data);
            $this->load->view('admin_area/templates/footer.php');
        }

        public function process_order(){
            if(!$this->session->userdata('administrator')){
				redirect('awesome_cards_admin_login_area');
            }
            $order_id = $this->input->post('order_id');
            $this->awesome_admin_model->process_order($order_id);
            $this->session->set_flashdata('order_processed', 'The order was processed successfully');
            redirect('awesome_cards_admin_dashboard');
        }

        public function reverse_order(){
            if(!$this->session->userdata('administrator')){
				redirect('awesome_cards_admin_login_area');
            }
            $order_id = $this->input->post('order_id');
            $this->awesome_admin_model->reverse_order($order_id);
            $this->session->set_flashdata('order_reversed', 'The order was reversed successfully');
            redirect('awesome_cards_admin_processed_orders');
        }

        public function registered_users($offset = 0){
            if(!$this->session->userdata('administrator')){
				redirect('awesome_cards_admin_login_area');
            }
            $config['base_url'] = base_url() .'awesome_admin/registered_users';
            $config['total_rows'] = $this->db->count_all('customer_messages');
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            $config['num_links'] = 1;
            $config['attributes'] = array('class' => 'pagination-links');
            $data['users'] = $this->awesome_admin_model->list_users($config['per_page'], $offset);
            $this->pagination->initialize($config); 
            $data['number_of_users'] = $this->awesome_admin_model->count_users();
            $this->load->view('admin_area/templates/header.php');
            $this->load->view('admin_area/pages/registered_users.php', $data);
            $this->load->view('admin_area/templates/footer.php');
        }

        public function customer_messages($offset = 0){
            if(!$this->session->userdata('administrator')){
				redirect('awesome_cards_admin_login_area');
            }
            $config['base_url'] = base_url() .'awesome_admin/customer_messages';
            $config['total_rows'] = $this->db->count_all('customer_messages');
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            $config['num_links'] = 1;
            $config['attributes'] = array('class' => 'pagination-links');
            $data['messages'] = $this->awesome_admin_model->customer_messages($config['per_page'], $offset);
            $this->pagination->initialize($config); 
            $data['number_of_users'] = $this->awesome_admin_model->count_users();
            $this->load->view('admin_area/templates/header.php');
            $this->load->view('admin_area/pages/customer_messages.php', $data);
            $this->load->view('admin_area/templates/footer.php');
        }
    }



?>
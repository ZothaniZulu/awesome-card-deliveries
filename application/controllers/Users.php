<?php
    class Users extends CI_Controller{
		/**
		 * This function logs the user in. 
		*/
		// public function login(){
        //     $this->form_validation->set_rules('email_address', 'email', 'required');
		// 	$this->form_validation->set_rules('password', 'Password', 'required');

		// 	if($this->form_validation->run() === FALSE){
		// 		$this->load->view('user_templates/header');
		// 		$this->load->view('users/login');
		// 		$this->load->view('user_templates/footer');
		// 	} else{
		// 		// Get username
        //         $username = $this->input->post('email_address');
        //         //Get password
		// 		$password = $this->input->post('password');
            
        //         //unset any previous sessions
		// 		$this->session->unset_userdata('administrator');
		// 		// die(print_r($user_id));
				
		// 		if($user_id = $this->user_model->login($username)){
		// 			foreach($user_id as $row){
		// 				$stored_password = $row->password;
		// 				$id = $row->id;
		// 				$email_address = $row->email_address;
		// 				$username = $row->user_name;
						
		// 			}
					
		// 		}else{
        //             $this->session->set_flashdata('login_failed', 'The email address/password entered is incorrect');
		// 			redirect('login');
        //         }


        //             if(password_verify($password, $stored_password)){
		// 				// Create session
					
		// 					$user_data = array(
		// 						'username' => $username,
		// 						'email_address' => $email_address
		// 						'id'=> $id,
		// 						'logged_in' => true
		// 					);
        //                     $this->session->set_userdata($user_data);
		// 					// Set message
		// 					$this->session->set_flashdata('user_loggedin', 'You are now logged in');
		// 					redirect('home_page');
        //             }else{
		// 				$this->session->set_flashdata('login_failed', 'The email address/password entered is incorrect');
		// 				redirect('login');
		// 			}
      
        //     }
        // }

		/**
		 * This function logs the user out from Awesome Cards
		*/
        // public function logout(){
		// 	// Unset user data
		// 	$this->session->unset_userdata('logged_in');
		// 	$this->session->unset_userdata('user_id');
		// 	$this->session->unset_userdata('email_address');
		// 	// Set message
		// 	$this->session->set_flashdata('user_loggedout', 'You are now logged out');
		// 	redirect('login');
		// }

		 
		/**
		 * This function registers the user to Awesome Cards
		*/
        // public function register(){
        //     $data['title'] = '';
        //     $this->form_validation->set_rules('username', 'Your name', 'required');
        //     $this->form_validation->set_rules('cellphone_number', 'Cellphone Number', 'required');
			
		// 	$this->form_validation->set_rules('email_address', 'Email', 'required|callback_check_email_exists');
		// 	$this->form_validation->set_rules('password', 'Password', 'required');
		// 	$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
		// 	if($this->form_validation->run() === FALSE){
		// 		$this->load->view('user_templates/header');
		// 		$this->load->view('users/register', $data);
		// 		$this->load->view('user_templates/footer');
		// 	} else {
		// 		// Encrypt password
		// 		$username = $this->input->post('email_address');
		// 		$password = $this->input->post('password');
				

		// 		// $data['email_address'] = $username;
		// 		// $this->load->view('user_templates/header');
		// 		// $this->load->view('users/user_registered', $data);
				
		// 		// $this->load->view('user_templates/footer');

		// 		$enc_password = password_hash($password,PASSWORD_DEFAULT);

		// 		$this->user_model->register($enc_password);
				
				
		// 		//set data

		// 		/* This will come in whe the user has activaed the account */
		// 		$user_data = array(
		// 			'username' => $username,
		// 			'logged_in' => true
		// 		);

		// 		$this->session->set_userdata($user_data);

		// 		// // Set message
        //         $this->session->set_flashdata('user_registered', 'You are now registered on the Awesome Cards App.');

		// 		redirect('home_page');
		// 		/* Try and retain the info on the form if the operation fail */
		// 		// redirect('user_registered');
		// 	}
		// }

		/**
		 * This function checks whether the email exists already or not.
		*/
		public function check_email_exists($username){
			$this->form_validation->set_message('check_email_exists', 'This email address already in use.');
			if($this->user_model->check_email_exists($username)){
				return true;
			} else {
				return false;
			}
		}

		/**
		 * This function tells the user that they have been registered and they have to check their emails
		*/
		public function user_registered($username){
			
		}


		/**
		 * This function displays the reset password form
		*/
		
		public function reset_password(){
			$this->load->view('user_templates/header');
			$this->load->view('users/forgot_password');
			$this->load->view('user_templates/footer');
		}

		/**
		 * This function submits an email for password retrieval
		*/
		public function submit_email_to_reset_password(){
			$email_address = $this->input->post('email_address');
			// $this->user_model->reset_password();
		}
		
		// public function user_profile(){
        //     if(!$this->session->userdata('logged_in')){
		// 		redirect('login');
		// 	}
		// 	$username = $this->session->userdata('username');
        //     $data['user_info'] = $this->user_model->get_user_data_for_interfaces($username);
		// 	$data['profile'] = $this->user_model->user_profile_info($username);
		// 	$this->load->view('templates/header', $data);
		// 	$this->load->view('users/profile', $data);
		// 	$this->load->view('templates/footer');
		// }
		
		// public function update_profile(){
		// 	if(!$this->session->userdata('logged_in')){
		// 		redirect('login');
		// 	}
		// 	$username = $this->session->userdata('username');
		// 	$data['user_info'] = $this->user_model->get_user_data_for_interfaces($username);
		// 	$data['profile'] = $this->user_model->user_profile_info($username);
		// 	$this->load->view('templates/header', $data);
		// 	//I need to work on the update profile part of the site
		// 	$this->load->view('users/update_my_profile' ,$data);
		// 	$this->load->view('templates/footer');
		// }

		// public function submit_profile_update(){
		// 	//pass in the username into database
		// }
	}
	



?>
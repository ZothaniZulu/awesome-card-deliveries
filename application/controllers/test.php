<?php
    if(password_verify($password, $stored_password)){
        // Create session
    
            $user_data = array(
                'username' => $username,
                'logged_in' => true
            );
            $this->session->set_userdata($user_data);
            $data['salutation'] = $name;
            // Set message
            $this->session->set_flashdata('user_loggedin', 'You are now logged in');
            redirect('home_page');
    }


?>
<?php
    class Home extends CI_Controller{
        public function home_page(){
            // if(!$this->session->userdata('logged_in')){
			// 	redirect('login');
            // }
            $this->load->view('templates/header.php');
            $this->load->view('interface/home.php');
            $this->load->view('templates/footer.php');
        }
            
       
    }

?>
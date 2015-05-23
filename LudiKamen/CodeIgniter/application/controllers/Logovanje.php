<?php
session_start();

class Logovanje extends CI_Controller {

    function login() {
        $data['flag'] = 0;
        $this->load->view("Login", $data);
    }

    function provera() {
        $data['flag'] = 0;
        $this->load->model('LoginModel');
        $data['flag'] = $this->LoginModel->check();
        if ($data['flag'] == 1 || $data['flag'] == 2) {
            $this->load->view("Login", $data);
         //   session_destroy();
            return;
        }
        $data['username'] = $this->input->post('korime');
        $data['lozinka'] = $this->input->post('lozinka');
       
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['lozinka'];
      //  echo 'parametri sesije: ' .$_SESSION['username'];
        
        $this->load->view("UspesanLogin", $data);
    }

    function logout() {
      //  echo 'parametri sesije koju brisem: ' .$_SESSION['username'];
        session_destroy();
        $this->load->view("Logout");
    }
    
    function nalog() {
        $data = array (
            'username' => $_SESSION['username'],
            'password' => $_SESSION['password'],
            'ime' => "",
            'grad' => "",
            
            'flag' => 0
        );
        $this->load->model('LoginModel');
        $this->LoginModel->getParams($data);
        $this->load->view("Nalog", $data);
        
 
    }
}

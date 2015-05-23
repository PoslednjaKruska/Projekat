<?php

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
            return;
        }
       $this->load->view("UspesanLogin");
    }

}

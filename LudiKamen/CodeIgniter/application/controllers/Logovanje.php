<?php

class Logovanje extends CI_Controller {
    function login () {
        $data['flag'] = 0;
        $this->load->view("Login", $data);
    }
}

<?php

session_start();

class LudiKamen extends CI_Controller {

    function Pocetna() {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
        {
            $data['sesija'] = $_SESSION['username'];
            $this->load->model('LoginModel');
            $data['username'] = $_SESSION['username'];
            $data =$this->LoginModel->getParams($data);
         }
        else {
            $data['sesija'] = 0;
            $this->load->view('Pocetna', $data);
            return;
        }
        $this->load->model('LoginModel');
        $data['username'] = $_SESSION['username'];
        $data = $this->LoginModel->getParams($data);
        if ($data['kategorija'] == 0)
            $data['admin'] = 1;
        else $data['admin'] = 0;
        $this->load->view('Pocetna', $data);
    }
	function Galerija() {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        
       
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;

        $this->load->view('Galerija', $data);
    }
}

?>

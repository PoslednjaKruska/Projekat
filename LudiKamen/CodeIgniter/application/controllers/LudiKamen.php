<?php
session_start();

class LudiKamen extends CI_Controller {
    
    function Pocetna () {
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        $this->load->view('Pocetna', $data);
    }
    
}

?>

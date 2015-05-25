<?php
session_start();

class AdminKontroler extends CI_Controller {
    function nalozi () {
    }
    function usluge () {
        
    }
    function  rezervacije () {
        
    }
    
    function adminsPage () {
        $data['username'] = $_SESSION['username'];
        $this->load->view('AdminsPage', $data);
    }
}

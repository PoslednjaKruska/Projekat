<?php
session_start();

class AdminKontroler extends CI_Controller {
    function nalozi () {
       $this->load->model('AdminModel');
       $data['admin'] = 1;
       $data['sesija'] = 1;
       $data['username'] = $_SESSION['username'];
       $data['kateg'] = 1;
       $data['query'] = $this->AdminModel->getFromDate($data);
       if (!$data['query'])
           $data['empty'] = 1;
       else
           $data['empty'] = 0;
//       print_r($data['query']);
       $this->load->view('Korisnici', $data);
    }
    function usluge () {
       $this->load->model('AdminModel');
       $data['admin'] = 1;
       $data['sesija'] = 1;
       $data['username'] = $_SESSION['username'];
       $data['kateg'] = 2;
       $data['query'] = $this->AdminModel->getFromDate($data);
         if (!$data['query'])
           $data['empty'] = 1;
       else
           $data['empty'] = 0;
//       print_r($data['query']);
       $this->load->view('Usluge', $data);
    }
    function  rezervacije () {
       $this->load->model('AdminModel');
       $data['admin'] = 1;
       $data['sesija'] = 1;
       $data['username'] = $_SESSION['username'];
       $data['kateg'] = 3;
       $data['query'] = $this->AdminModel->getFromDate($data);
         if (!$data['query'])
           $data['empty'] = 1;
       else
           $data['empty'] = 0;
//       print_r($data['query']);
       $this->load->view('Rezervacije', $data);
    }
    
    function adminsPage () {
        $data['username'] = $_SESSION['username'];
        $this->load->view('AdminsPage', $data);
    }
    
    function brisanje () {
        $this->load->Model('AdminModel');
        $this->AdminModel->deleteUser();
        $this->nalozi();
    }
    
    function brisanjeUsluge ($ime) {
        $this->load->model('AdminModel');
        $this->AdminModel->brisiUslugu($ime);
        $this->usluge();
    }
}

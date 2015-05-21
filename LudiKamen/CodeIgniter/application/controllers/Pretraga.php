<?php

class Pretraga extends CI_Controller {
    
    function Restorani () {
        $this->load->model('RestoranModel');
        $data['brRedova'] = $this->RestoranModel->numRows();
        $data['query'] = $this->RestoranModel->getAll();
        $this->load->view('Restorani', $data);
    }
    
    function Muzika () {
        $this->load->model('MuzikaModel');
        $data['brRedova'] = $this->MuzikaModel->numRows();
        $data['query'] = $this->MuzikaModel->getAll();
        $this->load->view('Muzika', $data);
    }
    
    function Torte () {
        $this->load->model('TorteModel');
        $data['brRedova'] = $this->TorteModel->numRows();
        $data['query'] = $this->TorteModel->getAll();
        $this->load->view('Torte', $data);
    }
    
    function Vencanice () {
        $this->load->model('VencaniceModel');
        $data['brRedova'] = $this->VencaniceModel->numRows();
        $data['query'] = $this->VencaniceModel->getAll();
        $this->load->view('Vencanice', $data);
    }
    
    function Pozivnice () {
        $this->load->model('PozivniceModel');
        $data['brRedova'] = $this->PozivniceModel->numRows();
        $data['query'] = $this->PozivniceModel->getAll();
        $this->load->view('Pozivnice', $data);
    }
    
}

?>

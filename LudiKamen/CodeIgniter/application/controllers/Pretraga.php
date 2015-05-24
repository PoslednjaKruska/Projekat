<?php

session_start();

class Pretraga extends CI_Controller {

    function Restorani() {
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        $this->load->model('RestoranModel');
        $data['brRedova'] = $this->RestoranModel->numRows();
        $data['query'] = $this->RestoranModel->getAll();
        $this->load->view('Restorani', $data);
    }

    function Muzika() {
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        $this->load->model('MuzikaModel');
        $data['brRedova'] = $this->MuzikaModel->numRows();
        $data['query'] = $this->MuzikaModel->getAll();
        $this->load->view('Muzika', $data);
    }

    function Torte() {
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        $this->load->model('TorteModel');
        $data['brRedova'] = $this->TorteModel->numRows();
        $data['query'] = $this->TorteModel->getAll();
        $this->load->view('Torte', $data);
    }

    function Vencanice() {
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        $this->load->model('VencaniceModel');
        $data['brRedova'] = $this->VencaniceModel->numRows();
        $data['query'] = $this->VencaniceModel->getAll();
        $this->load->view('Vencanice', $data);
    }

    function Pozivnice() {
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        $this->load->model('PozivniceModel');
        $data['brRedova'] = $this->PozivniceModel->numRows();
        $data['query'] = $this->PozivniceModel->getAll();
        $this->load->view('Pozivnice', $data);
    }

}

?>

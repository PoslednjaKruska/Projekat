<?php

session_start();

class Pretraga extends CI_Controller {
    // Autor: Maša Reko

    function Restorani() {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        $this->load->model('RestoranModel');
        $data['brRedova'] = $this->RestoranModel->numRows();
        $data['query'] = $this->RestoranModel->getAll();
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;
        $this->load->view('Restorani', $data);
    }

    function Muzika() {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        $this->load->model('MuzikaModel');
        $data['brRedova'] = $this->MuzikaModel->numRows();
        $data['query'] = $this->MuzikaModel->getAll();
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;

        $this->load->view('Muzika', $data);
    }

    function Torte() {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        $this->load->model('TorteModel');
        $data['brRedova'] = $this->TorteModel->numRows();
        $data['query'] = $this->TorteModel->getAll();
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;
        $this->load->view('Torte', $data);
    }

    function Vencanice() {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        $this->load->model('VencaniceModel');
        $data['brRedova'] = $this->VencaniceModel->numRows();
        $data['query'] = $this->VencaniceModel->getAll();
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;

        $this->load->view('Vencanice', $data);
    }

    function Pozivnice() {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        $this->load->model('PozivniceModel');
        $data['brRedova'] = $this->PozivniceModel->numRows();
        $data['query'] = $this->PozivniceModel->getAll();
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;

        $this->load->view('Pozivnice', $data);
    }

}

?>

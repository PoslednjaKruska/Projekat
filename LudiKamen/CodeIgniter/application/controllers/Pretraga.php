<?php

class Pretraga extends CI_Controller {
    
    function Restorani () {
        $this->load->model('RestoranModel');
        $data['brRedova'] = $this->RestoranModel->numRows();
        $data['query'] = $this->RestoranModel->getAll();
        $this->load->view('Restorani', $data);
    }
    
}

?>

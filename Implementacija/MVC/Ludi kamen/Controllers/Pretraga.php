<?php

class Pretraga extends CI_Controller {
    
    function Restorani () {
        $this->load->model('RestoranModel');
        $data['query'] = $this->RestoranModel->getAll();
        $this->load->view('Restorani', $data);
    }
    
}

?>

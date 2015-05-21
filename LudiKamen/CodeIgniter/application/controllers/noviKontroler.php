<?php

class noviKontroler extends CI_Controller {
    public function index () {
        $niz['tekst'] = "danas je utorak";
        $niz['drugitekst'] = "sutra je sreda";
        
        $this->load->model('sajt_model');
        $niz['podaci'] = $this->sajt_model->getAll();
         
        $this->load->view('oNama', $niz);
        
        
    }
    public function metoda () {
        echo 'softverskii';
    }

}
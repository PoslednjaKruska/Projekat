<?php

class Rezervacija extends CI_Controller {
    
    function Restoran ($naziv='') {
        $data['naziv'] = $naziv;
        $this->load->view('RezervacijaRestorana', $data);
    }
    
}

?>


<?php

class Rezervacija extends CI_Controller {
    
    function Restoran ($ime='') {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $this->load->view('RezervacijaRestorana', $data);
    }
    
}

?>


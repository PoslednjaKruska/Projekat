
<?php

class Pregled extends CI_Controller {
    
    function Restoran ($ime='') {
        $this->load->model('RestoranModel');
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $data['query'] = $this->RestoranModel->getOne($naziv);
        $this->load->view('PregledRestorana', $data);
    }
    
    function Muzika ($ime='') {
        $this->load->model('MuzikaModel');
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $data['query'] = $this->MuzikaModel->getOne($naziv);
        $this->load->view('PregledMuzike', $data);
    }
    
    function Poslasticarnica ($ime='') {
        $this->load->model('TorteModel');
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $data['query'] = $this->TorteModel->getOne($naziv);
        $this->load->view('PregledPoslasticarnice', $data);
    }
    
    function GetImage ($ime, $broj) {
        $slika = "url('http://localhost:8080/Slike/" . $ime . $broj . ".jpg')";
        echo $slika;
    }
  
}

?>

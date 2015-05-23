
<?php

class Pregled extends CI_Controller {
    
    function Restoran ($ime='') {
        $this->load->model('RestoranModel');
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $data['brRedova'] = $this->RestoranModel->getOneNum($naziv);
        $data['query'] = $this->RestoranModel->getOne($naziv);
        $this->load->view('PregledRestorana', $data);
    }
    
    function Muzika ($ime='') {
        $this->load->model('MuzikaModel');
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $data['brRedova'] = $this->MuzikaModel->getOneNum($naziv);
        $data['query'] = $this->MuzikaModel->getOne($naziv);
        $this->load->view('PregledMuzike', $data);
    }
    
    function Poslasticarnica ($ime='') {
        $this->load->model('TorteModel');
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $data['query'] = $this->TorteModel->getOne($naziv);
        $data['brRedova'] = $this->TorteModel->getNumCakes($naziv);
        $data['query1'] = $this->TorteModel->getAllCakes($naziv);
        $this->load->view('PregledPoslasticarnice', $data);
    }
    
    function Salon ($ime='') {
        $this->load->model('VencaniceModel');
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $data['query'] = $this->VencaniceModel->getOne($naziv);
        $data['brRedova'] = $this->VencaniceModel->getNumDresses($naziv);
        $data['query1'] = $this->VencaniceModel->getAllDresses($naziv);
        $this->load->view('PregledSalona', $data);
    }
    
    function Stamparija ($ime='') {
        $this->load->model('PozivniceModel');
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $data['query'] = $this->PozivniceModel->getOne($naziv);
        $data['brRedova'] = $this->PozivniceModel->getNumInvites($naziv);
        $data['query1'] = $this->PozivniceModel->getAllInvites($naziv);
        $this->load->view('PregledStamparije', $data);
    }
    
    function GetImage ($ime, $broj) {
        $slika = "url('http://localhost:8080/Slike/" . $ime . $broj . ".jpg')";
        echo $slika;
    }
  
}

?>

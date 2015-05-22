
<?php

class Pregled extends CI_Controller {
    
    function Restoran ($ime='') {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $this->load->view('PregledRestorana', $data);
    }
    
    function GetImage ($ime, $broj) {
        $slika = "url('http://localhost:8080/Slike/" . $ime . $broj . ".jpg')";
        echo $slika;
    }
  
}

?>

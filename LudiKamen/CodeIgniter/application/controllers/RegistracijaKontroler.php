<?php

class RegistracijaKontroler extends CI_Controller {

    function Registracija() {
        //    $this->load->model('RegistracijaModel');
        $data['flag'] = 0;
        $this->load->view('Registracija', $data);
    }

    function provera() {
        $this->load->model('RegistracijaModel');
        $data['flag'] = $this->RegistracijaModel->checkIfExists();
        if ($data['flag'] == 1 || $data['flag'] == 4) {
            $this->load->view('Registracija', $data);
        }
        $data['flag'] = $this->RegistracijaModel->checkPassword();
        if ($data['flag'] == 2 || $data['flag'] == 3)
            $this->load->view('Registracija', $data);
       
        $data['kategorija'] = $this->RegistracijaModel->category();
        // ako je sve korektno,
        // dovuci select
        // proveriti kategoriju
        // usmeriti na odgovarajuci view
        $this->load->view('Registracija', $data);  // nece ici na ovu stranu registracije
    }

}

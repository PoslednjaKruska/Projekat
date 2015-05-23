<?php

//session_start();

class RegistracijaKontroler extends CI_Controller {

    //  protected $data = array("flag"=>"", "kategorija"=>"", "ime"=>"", "grad"=>"", "username"=>"" );

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
            return;
        }
        $data['flag'] = $this->RegistracijaModel->checkPassword();
        if ($data['flag'] == 2 || $data['flag'] == 3) {
            $this->load->view('Registracija', $data);
            return;
        }

        $data['username'] = $this->input->post('korime');
        $data['password'] = $this->input->post('lozinka');
        $data['kategorija'] = $this->input->post('kategorija');
        
        //    $_SESSION['username'] = $this->input->post('korime');
        //    $_SESSION['password'] = $this->input->post('lozinka');

        $this->load->view('Registracija', $data);
    }

    function proveraDetalji() {
        $this->load->model('RegistracijaModel');
        echo 'username je: ';
        //   echo $_SESSION['username'];
        print_r($_SESSION);
        $this->load->view('UspesnaRegistracija');  // prosledi parametre
    }

}

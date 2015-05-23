<?php


class RegistracijaKontroler extends CI_Controller {

    function Registracija() {
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
        if ($data['kategorija'] == 1) {
            $data['kategorija'] = 2;
        }
        $pomoc = $this->input->post('imePrezime');
        $data['ime'] = explode(" ", $pomoc);
        
        $data['ime'] = $this->RegistracijaModel->formatMe($data['ime']);
        if (sizeof($data['ime']) == 0)
        {
            $data['flag'] = 5;
              $this->load->view('Registracija', $data);
            return;
        }
        
        $data['email'] = $this->input->post('email');
        $ret = preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $data['email']);
        if ($ret==0)
        {
            $data['flag'] = 6;
            $this->load->view('Registracija', $data);
            return;
        }
        $data['adresa'] = $this->input->post('adresa');
        $pomocna = $this->input->post('grad');
        $data['grad'] = explode(" ", $pomocna);
        $data['grad'] = $this->RegistracijaModel->formatMe($data['grad']);
        if (sizeof($data['grad']) == 0)
        {
            $data['flag'] = 7;
            $this->load->view('Registracija', $data);
            return;
        }
        $this->RegistracijaModel->insertUser($data);
        $this->load->view('UspesnaRegistracija', $data);
    }

}

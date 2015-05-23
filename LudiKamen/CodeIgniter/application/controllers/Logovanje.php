<?php

session_start();

class Logovanje extends CI_Controller {

    function login() {
        $data['flag'] = 0;
        $this->load->view("Login", $data);
    }

    function provera() {
        $data['flag'] = 0;
        $this->load->model('LoginModel');
        $data['flag'] = $this->LoginModel->check();
        if ($data['flag'] == 1 || $data['flag'] == 2) {
            $this->load->view("Login", $data);
            //   session_destroy();
            return;
        }
        $data['username'] = $this->input->post('korime');
        $data['lozinka'] = $this->input->post('lozinka');

        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['lozinka'];
        //  echo 'parametri sesije: ' .$_SESSION['username'];

        $this->load->view("UspesanLogin", $data);
    }

    function logout() {
        //  echo 'parametri sesije koju brisem: ' .$_SESSION['username'];
        session_destroy();
        $this->load->view("Logout");
    }

    function nalog() {
        $data = array(
            'username' => $_SESSION['username'],
            'password' => $_SESSION['password'],
            'ime' => "",
            'grad' => "",
            'kategorija' => "",
            'email' => "",
            'adresa' => "",
            'flag' => 0
        );
        $this->load->model('LoginModel');
        $data = $this->LoginModel->getParams($data);
        $this->load->view("Nalog", $data);
    }

    function proveraNaloga() {
          $data = array(
            'flag' => 0,
            'username' => "",
            'password' => "",
            'kategorija' => "",
            'ime' => "",
            'email' => "",
            'adresa' => "",
            'grad' => ""
        );

        $this->load->model('RegistracijaModel');
        $this->load->model('LoginModel');
        $usern = $this->input->post('korime');
        if ($usern != $_SESSION['username'])
            $data['flag'] = $this->RegistracijaModel->checkIfExists();
        if ($data['flag'] == 1 || $data['flag'] == 4) {
            $data['username'] = $_SESSION['username'];
            $data['password'] = $_SESSION['password'];
           $data = $this->LoginModel->getParams($data);
            $this->load->view('Nalog', $data);
            return;
        }
        $data['flag'] = $this->RegistracijaModel->checkPassword();
        if ($data['flag'] == 2 || $data['flag'] == 3) {
            $data['username'] = $_SESSION['username'];
            $data['password'] = $_SESSION['password'];
            $data = $this->LoginModel->getParams($data);
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
        if (sizeof($data['ime']) == 0) {    
            $data['username'] = $_SESSION['username'];
            $data['password'] = $_SESSION['password'];
            $data = $this->LoginModel->getParams($data);
            $data['flag'] = 5;
            $this->load->view('Nalog', $data);
            return;
        }

        $data['email'] = $this->input->post('email');
        $ret = preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $data['email']);
        if ($ret == 0) {   
            $data['username'] = $_SESSION['username'];
            $data['password'] = $_SESSION['password'];
            $data = $this->LoginModel->getParams($data);
            $data['flag'] = 6;
            $this->load->view('Nalog', $data);
            return;
        }
        $data['adresa'] = $this->input->post('adresa');
        $pomocna = $this->input->post('grad');
        $data['grad'] = explode(" ", $pomocna);
        $data['grad'] = $this->RegistracijaModel->formatMe($data['grad']);
        if (sizeof($data['grad']) == 0) {    
            $data['username'] = $_SESSION['username'];
            $data['password'] = $_SESSION['password'];
            $data = $this->LoginModel->getParams($data);
            $data['flag'] = 7;
            $this->load->view('Nalog', $data);
            return;
        }
        $this->RegistracijaModel->updateUser($data, $_SESSION['username']);
        $this->load->view('UspesnaPromena', $data);
    }

}

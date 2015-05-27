<?php

session_start();

class Logovanje extends CI_Controller {

    function login() {
        $data['flag'] = 0;
        $this->load->view("Login", $data);
    }

    function provera() {
        $data['flag'] = 0;
        $data['admin'] = 0;
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
        $data = $this->LoginModel->getParams($data);
        $_SESSION['kategorija'] = $data['kategorija'];
        if ($data['flag'] != 10)
            $this->load->view("UspesanLogin", $data);
        else {
            $data['admin'] = 1;
            $this->load->view('AdminsPage', $data);
        }
    }

    function logout() {
        $this->load->model('LoginModel');
        $data['username'] = $_SESSION['username'];
        $this->LoginModel->logout($data);
        session_destroy();
//        $_SESSION['is_open'] = FALSE;
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
            'flag' => 0,
            'admin' => 0
        );
        $this->load->model('LoginModel');
        $data = $this->LoginModel->getParams($data);
        if ($data['kategorija'] == 0)
            $data['admin'] = 1;
        if ($data['kategorija'] > 2)
            $this->load->view('NalogPruzaoca', $data);
        else
            $this->load->view("Nalog", $data);  // if kategorija pruzaoca, usmeri na drugi view !!!
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
            'grad' => "",
            'admin' => 0
        );


        $this->load->model('RegistracijaModel');
        $this->load->model('LoginModel');
        $usern = $this->input->post('korime');
        if ($usern != $_SESSION['username']) {
            $data['flag'] = $this->RegistracijaModel->checkIfExists();
            if ($data['flag'] == 1 || $data['flag'] == 4) {
                $data['username'] = $_SESSION['username'];
                $data['password'] = $_SESSION['password'];
                $data = $this->LoginModel->getParams($data);
                if ($data['kategorija'] == 0)
                    $data['admin'] = 1;

                $this->load->view('Nalog', $data);
                return;
            }
        }
        $data['flag'] = $this->RegistracijaModel->checkPassword();
        if ($data['flag'] == 2 || $data['flag'] == 3) {
            $data['username'] = $_SESSION['username'];
            $data['password'] = $_SESSION['password'];
            $data = $this->LoginModel->getParams($data);
            if ($data['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->view('Nalog', $data);
            return;
        }
        $data['username'] = $this->input->post('korime');
        $data['password'] = $this->input->post('lozinka');
        $data = $this->LoginModel->getParams($data);

        $data['kategorija'] = $this->input->post('kategorija');
        $pomoc = $this->input->post('imePrezime');
        $data['ime'] = explode(" ", $pomoc);

        $data['ime'] = $this->RegistracijaModel->formatMe($data['ime']);
        if (sizeof($data['ime']) == 0) {
            $data['username'] = $_SESSION['username'];
            $data['password'] = $_SESSION['password'];
            $data = $this->LoginModel->getParams($data);
            if ($data['kategorija'] == 0)
                $data['admin'] = 1;

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
            if ($data['kategorija'] == 0)
                $data['admin'] = 1;
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
            if ($data['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->view('Nalog', $data);
            return;
        }
        if ($data['kategorija'] == 0)
            $data['admin'] = 1;

        $this->RegistracijaModel->updateUser($data, $_SESSION['username']);
        $this->load->view('UspesnaPromena', $data);
    }

    function nalogKorisnika($prom) {    // za admina!!!
  
        $data = array(
            'username' => $prom,
            'password' => "",
            'ime' => "",
            'grad' => "",
            'kategorija' => "",
            'email' => "",
            'adresa' => "",
            'flag' => 0,
            'admin' => 1
        );
          $this->load->model('LoginModel');
        $data = $this->LoginModel->getParams($data);
//        $this->load->model('LoginModel');
//        $data = $this->LoginModel->getParams($data);
        if ($data['kategorija'] == 0)
            $data['admin'] = 1;
        $data['flagAdmin'] = 0; // admin ne podesava svoj nalog
        $this->load->view("PodesavanjaNaloga", $data);
    }
    
    function korisnikPodesavanja () {   
        $data = array(
            'username' => $_SESSION['username'],
            'password' => $_SESSION['password'],
            'ime' => "",
            'grad' => "",
            'kategorija' => "",
            'email' => "",
            'adresa' => "",
            'flag' => 0,
            'admin' => 0
        );
          $this->load->model('LoginModel');
        $data = $this->LoginModel->getParams($data);
//        $this->load->model('LoginModel');
//        $data = $this->LoginModel->getParams($data);
        if ($data['kategorija'] == 0)
        {
            $data['admin'] = 1;
            $data['flagAdmin'] = 1; // znaci da admin pregleda svoj nalog
        }
        $this->load->view("PodesavanjaNaloga", $data);
   
        
    }

}

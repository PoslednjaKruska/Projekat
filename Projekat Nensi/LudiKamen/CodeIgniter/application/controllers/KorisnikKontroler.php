<?php

session_start();

class KorisnikKontroler extends CI_Controller {

    // Autor: Nevena Milinković
    function checkIfPruzalac() {
        if ($_SESSION == false) {
            //   $this->load->view('GreskaStranica');
            return 1;
        }
        if ($_SESSION['kategorija'] < 3)
            return 2;
    }

    function checkIfUser() {
        if ($_SESSION == false) {
            return 1;
        }
        if ($_SESSION['kategorija'] == 0 || $_SESSION['kategorija'] > 2)
            return 2;
    }

    function rezervacije() {
        $pom = $this->checkIfUser();
        if ($pom == 1 || $pom == 2) {
            if ($_SESSION == true) {
                $data['sesija'] = 1;
                $data['kategorija'] = $_SESSION['kategorija'];
                $data['username'] = $_SESSION['username'];
                if ($data['kategorija'] == 0)
                    $data['admin'] = 1;
                else
                    $data['admin'] = 0;
            } else
                $data['sesija'] = 0;
            $this->load->view('GreskaStranica', $data);
            return;
        }
        $data['admin'] = 0;
        $data['sesija'] = 1;
        $data['username'] = $_SESSION['username'];
        $data['kateg'] = 3;
        $this->load->model('LoginModel');
        $data = $this->LoginModel->getReserv($data);
        if (!$data['users'])
            $data['empty'] = 1;
        else
            $data['empty'] = 0;
// print_r($data['query']);
        $this->load->view('Rezervacije', $data);
    }

    function pruzalac() {
        $pom = $this->checkIfPruzalac();
        if ($pom == 1 || $pom == 2) {
            if ($_SESSION == true) {
                $data['sesija'] = 1;
                $data['kategorija'] = $_SESSION['kategorija'];
                $data['username'] = $_SESSION['username'];
                if ($data['kategorija'] == 0)
                    $data['admin'] = 1;
                else
                    $data['admin'] = 0;
            } else
                $data['sesija'] = 0;
            $this->load->view('GreskaStranica', $data);
            return;
        }
        $this->load->model('AdminModel');
        $data['admin'] = 0;
        $data['sesija'] = 1;
        $data['username'] = $_SESSION['username'];
        $data['query'] = $this->AdminModel->getServices($data);
        if (!$data['query'])
            $data['empty'] = 1;
        else
            $data['empty'] = 0;
//       print_r($data['query']);
        $this->load->view('Usluge', $data);
    }

    function pruzalacSlike() {
        $pom = $this->checkIfPruzalac();

        if ($pom == 1 || $pom == 2) {
            if ($_SESSION == true) {
                $data['sesija'] = 1;
                $data['kategorija'] = $_SESSION['kategorija'];
                $data['username'] = $_SESSION['username'];
                if ($data['kategorija'] == 0)
                    $data['admin'] = 1;
                else
                    $data['admin'] = 0;
            } else
                $data['sesija'] = 0;
            $this->load->view('GreskaStranica', $data);
            return;
        }
        $data['username'] = $_SESSION['username'];
        $data['admin'] = 0;
        $data['sesija'] = 1;
        $this->load->helper(array('form', 'url'));
        $this->load->view('DodavanjeSlika', $data);
    }

    function dodavanjeSlika() {
        $pom = $this->checkIfPruzalac();

        if ($pom == 1 || $pom == 2) {
            if ($_SESSION == true) {
                $data['sesija'] = 1;
                $data['kategorija'] = $_SESSION['kategorija'];
                $data['username'] = $_SESSION['username'];
                if ($data['kategorija'] == 0)
                    $data['admin'] = 1;
                else
                    $data['admin'] = 0;
            } else
                $data['sesija'] = 0;
            $this->load->view('GreskaStranica', $data);
            return;
        }

        $data['admin'] = 0;
        $data['sesija'] = $_SESSION['username'];
        $data['flag'] = 0;
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;
        $pruzalac = $_SESSION['username'];
        $kategorija = $_SESSION['kategorija'];
        if ($_FILES['slika1']['name']) {
            if (!$_FILES['slika1']['error']) {
                $i = preg_replace('/\s+/', '', $pruzalac);
                $new_file_name = $i . "1.jpg";
                $valid_file = true;
                if ($_FILES['slika1']['size'] > (1024000)) {
                    $valid_file = false;
                }
                if ($valid_file) {
                    move_uploaded_file($_FILES['slika1']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/Slike/' . $new_file_name);
                    $data['flag'] = 1;
                }
            }
        }
        if ($_FILES['slika2']['name']) {
            if (!$_FILES['slika2']['error']) {
                $i = preg_replace('/\s+/', '', $pruzalac);
                $new_file_name = $i . "2.jpg";
                $valid_file = true;
                if ($_FILES['slika2']['size'] > (1024000)) {
                    $valid_file = false;
                }
                if ($valid_file) {
                    move_uploaded_file($_FILES['slika2']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/Slike/' . $new_file_name);
                    $data['flag'] = 1;
                }
            }
        }
        if ($_FILES['slika3']['name']) {
            if (!$_FILES['slika3']['error']) {
                $i = preg_replace('/\s+/', '', $pruzalac);
                $new_file_name = $i . "3.jpg";
                $valid_file = true;
                if ($_FILES['slika3']['size'] > (1024000)) {
                    $valid_file = false;
                }
                if ($valid_file) {
                    move_uploaded_file($_FILES['slika3']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/Slike/' . $new_file_name);
                    $data['flag'] = 1;
                }
            }
        }
        if ($_FILES['slika4']['name']) {
            if (!$_FILES['slika4']['error']) {
                $i = preg_replace('/\s+/', '', $pruzalac);
                $new_file_name = $i . "4.jpg";
                $valid_file = true;
                if ($_FILES['slika4']['size'] > (1024000)) {
                    $valid_file = false;
                }
                if ($valid_file) {
                    move_uploaded_file($_FILES['slika4']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/Slike/' . $new_file_name);
                    $data['flag'] = 1;
                }
            }
        }
        $this->load->view('UspesanUnosSlika', $data);

        /*     else {
          $this->load->view('GreskaUnos', $data);
          } */
    }

    function brisanjeUsluge($ime) {
             $pom = $this->checkIfPruzalac();
        if ($pom == 1 || $pom == 2) {
            if ($_SESSION == true) {
                $data['sesija'] = 1;
                $data['kategorija'] = $_SESSION['kategorija'];
                $data['username'] = $_SESSION['username'];
                if ($data['kategorija'] == 0)
                    $data['admin'] = 1;
                else
                    $data['admin'] = 0;
            } else
                $data['sesija'] = 0;
            $this->load->view('GreskaStranica', $data);
            return;
        }
   
        $this->load->model('AdminModel');
        $this->AdminModel->brisiUslugu($ime);
        $this->pruzalac();
    }

    function otkazivanje($ime) {
        $data['username'] = $_SESSION['username'];
        $data['admin'] = 0;
        $data['sesija'] = 1;
        $this->load->model('LoginModel');
        $this->LoginModel->brisiRez($data['username'], $ime);
        $this->load->view('UspesnoOtkazivanje', $data);
    }

    function rezervisanePruzalac() {
        $pom = $this->checkIfPruzalac();
        if ($pom == 1 || $pom == 2) {
            if ($_SESSION == true) {
                $data['sesija'] = 1;
                $data['kategorija'] = $_SESSION['kategorija'];
                $data['username'] = $_SESSION['username'];
                if ($data['kategorija'] == 0)
                    $data['admin'] = 1;
                else
                    $data['admin'] = 0;
            } else
                $data['sesija'] = 0;
            $this->load->view('GreskaStranica', $data);
            return;
        }
        $data = array(
            'username' => $_SESSION['username'],
            'sesija' => 0,
            'admin' => 0,
            'numOfRows' => 0,
            'users' => "",
            'services' => "",
            'dates' => "",
            'empty' => 0,
        );
        $this->load->model('LoginModel');
        $data = $this->LoginModel->dohvatiRez($data);
        if (!$data['users'])
            $data['empty'] = 1;
        if ($_SESSION['kategorija'] == 0)
            $data['admin'] = 1;
        else
            $data['admin'] = 0;
        if ($_SESSION['kategorija'] > 2)
            $data['admin'] = 10; // ako je pruzalac u pitanju, drugaciji meni
        $this->load->view('Rezervacije', $data);
    }

    function izmenaUsluge($usluga) {
        $data = array(
            'username' => $_SESSION['username'],
            'sesija' => 0,
            'admin' => 0,
            'naziv' => "",
            'opis' => "",
            'cena' => "",
            'velicina' => "",
            'id' => $usluga,
            'idPruzalac' => ""
        );
        $this->load->helper(array('form', 'url'));
        $this->load->model('AdminModel');
        $data = $this->AdminModel->uslugaRet($data);
        $this->load->view('IzmenaUsluge', $data);
    }

}

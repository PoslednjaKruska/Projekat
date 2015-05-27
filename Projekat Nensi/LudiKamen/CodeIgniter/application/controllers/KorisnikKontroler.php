<?php

session_start();

class KorisnikKontroler extends CI_Controller {

    function rezervacije() {
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
        $data['username'] = $_SESSION['username'];
        $data['admin'] = 0;
        $data['sesija'] = 1;
        $this->load->helper(array('form', 'url'));
        $this->load->view('DodavanjeSlika', $data);
    }

    function dodavanjeSlika() {
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

}

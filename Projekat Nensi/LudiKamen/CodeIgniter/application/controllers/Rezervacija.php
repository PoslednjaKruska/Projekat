<?php

session_start();

class Rezervacija extends CI_Controller {

    // Autor: Maša Reko

    function Restoran($ime = '') {
        $data['admin'] = 0;
        if ($_SESSION == TRUE) {
            $data['sesija'] = $_SESSION['username'];
            $data['kat'] = $_SESSION['kategorija'];
        } else
            $data['sesija'] = 0;

        $this->load->model('PomocniModel');
        $korisnik = $this->PomocniModel->getKorisnik($data['sesija']);
        $imePrezime = null;
        $adresa = null;
        $email = null;
        foreach ($korisnik as $row) {
            $imePrezime = $row->ImePrezime;
            $adresa = $row->Adresa;
            $email = $row->Email;
        }

        $data['imePrezime'] = $imePrezime;
        $data['adresa'] = $adresa;
        $data['email'] = $email;

        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $this->load->helper(array('form', 'url'));
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;

        $this->load->view('RezervacijaRestorana', $data);
    }

    function Muzika($ime = '') {
        $data['admin'] = 0;
        if ($_SESSION == TRUE) {
            $data['sesija'] = $_SESSION['username'];
            $data['kat'] = $_SESSION['kategorija'];
        } else
            $data['sesija'] = 0;

        $this->load->model('PomocniModel');
        $korisnik = $this->PomocniModel->getKorisnik($data['sesija']);
        $imePrezime = null;
        $adresa = null;
        $email = null;
        foreach ($korisnik as $row) {
            $imePrezime = $row->ImePrezime;
            $adresa = $row->Adresa;
            $email = $row->Email;
        }

        $data['imePrezime'] = $imePrezime;
        $data['adresa'] = $adresa;
        $data['email'] = $email;

        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $this->load->helper(array('form', 'url'));
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;

        $this->load->view('RezervacijaMuzike', $data);
    }

    function Torta($imeP = '', $imeT = '') {
        $data['admin'] = 0;
        if ($_SESSION == TRUE) {
            $data['sesija'] = $_SESSION['username'];
            $data['kat'] = $_SESSION['kategorija'];
        } else
            $data['sesija'] = 0;

        $this->load->model('PomocniModel');
        $korisnik = $this->PomocniModel->getKorisnik($data['sesija']);
        $imePrezime = null;
        $adresa = null;
        $email = null;
        foreach ($korisnik as $row) {
            $imePrezime = $row->ImePrezime;
            $adresa = $row->Adresa;
            $email = $row->Email;
        }

        $data['imePrezime'] = $imePrezime;
        $data['adresa'] = $adresa;
        $data['email'] = $email;

        $nazivP = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeP);
        $nazivT = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeT);
        $data['nazivP'] = $nazivP;
        $data['nazivT'] = $nazivT;
        $this->load->helper(array('form', 'url'));
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;

        $this->load->view('RezervacijaTorte', $data);
    }

    function Vencanica($imeS = '', $imeV = '') {
        $data['admin'] = 0;
        if ($_SESSION == TRUE) {
            $data['sesija'] = $_SESSION['username'];
            $data['kat'] = $_SESSION['kategorija'];
        } else
            $data['sesija'] = 0;

        $this->load->model('PomocniModel');
        $korisnik = $this->PomocniModel->getKorisnik($data['sesija']);
        $imePrezime = null;
        $adresa = null;
        $email = null;
        foreach ($korisnik as $row) {
            $imePrezime = $row->ImePrezime;
            $adresa = $row->Adresa;
            $email = $row->Email;
        }

        $data['imePrezime'] = $imePrezime;
        $data['adresa'] = $adresa;
        $data['email'] = $email;

        $nazivS = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeS);
        $nazivV = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeV);
        $data['nazivS'] = $nazivS;
        $data['nazivV'] = $nazivV;
        $this->load->helper(array('form', 'url'));
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;

        $this->load->view('RezervacijaVencanice', $data);
    }

    function Pozivnica($imeS = '', $imeP = '') {
        $data['admin'] = 0;
        if ($_SESSION == TRUE) {
            $data['sesija'] = $_SESSION['username'];
            $data['kat'] = $_SESSION['kategorija'];
        } else
            $data['sesija'] = 0;

        $this->load->model('PomocniModel');
        $korisnik = $this->PomocniModel->getKorisnik($data['sesija']);
        $imePrezime = null;
        $adresa = null;
        $email = null;
        foreach ($korisnik as $row) {
            $imePrezime = $row->ImePrezime;
            $adresa = $row->Adresa;
            $email = $row->Email;
        }

        $data['imePrezime'] = $imePrezime;
        $data['adresa'] = $adresa;
        $data['email'] = $email;

        $nazivS = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeS);
        $nazivP = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeP);
        $data['nazivS'] = $nazivS;
        $data['nazivP'] = $nazivP;
        $this->load->helper(array('form', 'url'));
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;

        $this->load->view('RezervacijaPozivnica', $data);
    }

    function ProveraRestoran($ime = '') {
        $data['admin'] = 0;
        if ($_SESSION == TRUE) {
            $data['sesija'] = $_SESSION['username'];
            $data['kat'] = $_SESSION['kategorija'];
        } else
            $data['sesija'] = 0;

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        $this->form_validation->set_rules('ime', ' ', 'required');
        $this->form_validation->set_rules('adresa', ' ', 'required');
        $this->form_validation->set_rules('email', ' ', 'required|valid_email');

        $this->form_validation->set_rules('datum', ' ', 'required|callback_date_check');
        $this->form_validation->set_rules('brgosti', ' ', 'required|is_natural_no_zero');

        $this->form_validation->set_rules('brkartice', ' ', 'required|callback_card_check');
        $this->form_validation->set_rules('datumisteka', ' ', 'required|callback_date_check');
        $this->form_validation->set_rules('sigurnosnibr', ' ', 'required|numeric|callback_safetyno_check');

        if ($this->form_validation->run() == FALSE) {
            $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
            $data['naziv'] = $naziv;
            if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->model('PomocniModel');
            $korisnik = $this->PomocniModel->getKorisnik($data['sesija']);
            $imePrezime = null;
            $adresa = null;
            $email = null;
            foreach ($korisnik as $row) {
                $imePrezime = $row->ImePrezime;
                $adresa = $row->Adresa;
                $email = $row->Email;
            }

            $data['imePrezime'] = $imePrezime;
            $data['adresa'] = $adresa;
            $data['email'] = $email;

            $this->load->view('RezervacijaRestorana', $data);
        } else {
            /*        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
              $from = "ludikamen@gmail.com";

              $emailKor = $this->input->post('email');
              $subjectKor = "Potvrda rezervacije";
              $commentKor = "neki tekst"; // napisati...

              mail($emailKor, $subjectKor, $commentKor, $from);

              $this->load->model('PomocniModel');
              $query = $this->PomocniModel->getEmail($naziv);
              $emailUsl = null;
              foreach ($query as $row) {
              $emailUsl = $row->Email;
              }

              $subjectUsl = "Rezervacija Vase usluge";
              $commentUsl = "neki tekst"; // napisati...

              mail($emailUsl, $subjectUsl, $commentUsl, $from); */
            if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->model('RestoranModel');
            $korisnik = $_SESSION['username'];
            $usluga = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
            $datum = $this->input->post('datum');
            $rezultat = $this->RestoranModel->rezervisi($korisnik, $usluga, $datum);

            if ($rezultat == 1) {
                $this->load->view('UspesnaRezervacija', $data);
            } else if ($rezultat == 2) {
                $this->load->view('VecRezervisano', $data);
            } else if ($rezultat == 3) {
                $this->load->view('Nedostupno', $data);
            } else {
                $this->load->view('Greska', $data);
            }
        }
    }

    function ProveraMuzika($ime = '') {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
        {
            $data['sesija'] = $_SESSION['username'];
            $data['kat'] = $_SESSION['kategorija'];
        }
        else
            $data['sesija'] = 0;

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        $this->form_validation->set_rules('ime', ' ', 'required');
        $this->form_validation->set_rules('adresa', ' ', 'required');
        $this->form_validation->set_rules('email', ' ', 'required|valid_email');

        $this->form_validation->set_rules('datum', ' ', 'required|callback_date_check');
        $this->form_validation->set_rules('brsati', ' ', 'required|is_natural_no_zero');

        $this->form_validation->set_rules('brkartice', ' ', 'required|callback_card_check');
        $this->form_validation->set_rules('datumisteka', ' ', 'required|callback_date_check');
        $this->form_validation->set_rules('sigurnosnibr', ' ', 'required|numeric|callback_safetyno_check');

        if ($this->form_validation->run() == FALSE) {
            $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
            $data['naziv'] = $naziv;
            if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->model('PomocniModel');
            $korisnik = $this->PomocniModel->getKorisnik($data['sesija']);
            $imePrezime = null;
            $adresa = null;
            $email = null;
            foreach ($korisnik as $row) {
                $imePrezime = $row->ImePrezime;
                $adresa = $row->Adresa;
                $email = $row->Email;
            }

            $data['imePrezime'] = $imePrezime;
            $data['adresa'] = $adresa;
            $data['email'] = $email;

            $this->load->view('RezervacijaMuzike', $data);
        } else {
            /*        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
              $from = "ludikamen@gmail.com";

              $emailKor = $this->input->post('email');
              $subjectKor = "Potvrda rezervacije";
              $commentKor = "neki tekst"; // napisati...

              mail($emailKor, $subjectKor, $commentKor, $from);

              $this->load->model('PomocniModel');
              $query = $this->PomocniModel->getEmail($naziv);
              $emailUsl = null;
              foreach ($query as $row) {
              $emailUsl = $row->Email;
              }

              $subjectUsl = "Rezervacija Vase usluge";
              $commentUsl = "neki tekst"; // napisati...

              mail($emailUsl, $subjectUsl, $commentUsl, $from); */
            if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->model('MuzikaModel');
            $korisnik = $_SESSION['username'];
            $usluga = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
            $datum = $this->input->post('datum');
            $rezultat = $this->MuzikaModel->rezervisi($korisnik, $usluga, $datum);

            if ($rezultat == 1) {
                $this->load->view('UspesnaRezervacija', $data);
            } else if ($rezultat == 2) {
                $this->load->view('VecRezervisano', $data);
            } else if ($rezultat == 3) {
                $this->load->view('Nedostupno', $data);
            } else {
                $this->load->view('Greska', $data);
            }
        }
    }

    function ProveraTorta($imeP = '', $imeT = '') {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
        {
            $data['sesija'] = $_SESSION['username'];
            $data['kat'] = $_SESSION['kategorija'];            
        }
        else
            $data['sesija'] = 0;

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        $this->form_validation->set_rules('ime', ' ', 'required');
        $this->form_validation->set_rules('adresa', ' ', 'required');
        $this->form_validation->set_rules('email', ' ', 'required|valid_email');

        $this->form_validation->set_rules('datum', ' ', 'required|callback_date_check');
        $this->form_validation->set_rules('kolicina', ' ', 'required|is_natural_no_zero');

        $this->form_validation->set_rules('brkartice', ' ', 'required|callback_card_check');
        $this->form_validation->set_rules('datumisteka', ' ', 'required|callback_date_check');
        $this->form_validation->set_rules('sigurnosnibr', ' ', 'required|numeric|callback_safetyno_check');

        if ($this->form_validation->run() == FALSE) {
            $nazivP = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeP);
            $nazivT = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeT);
            $data['nazivP'] = $nazivP;
            $data['nazivT'] = $nazivT;
            if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->model('PomocniModel');
            $korisnik = $this->PomocniModel->getKorisnik($data['sesija']);
            $imePrezime = null;
            $adresa = null;
            $email = null;
            foreach ($korisnik as $row) {
                $imePrezime = $row->ImePrezime;
                $adresa = $row->Adresa;
                $email = $row->Email;
            }

            $data['imePrezime'] = $imePrezime;
            $data['adresa'] = $adresa;
            $data['email'] = $email;

            $this->load->view('RezervacijaTorte', $data);
        } else {
            /*        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
              $from = "ludikamen@gmail.com";

              $emailKor = $this->input->post('email');
              $subjectKor = "Potvrda rezervacije";
              $commentKor = "neki tekst"; // napisati...

              mail($emailKor, $subjectKor, $commentKor, $from);

              $this->load->model('PomocniModel');
              $query = $this->PomocniModel->getEmail($naziv);
              $emailUsl = null;
              foreach ($query as $row) {
              $emailUsl = $row->Email;
              }

              $subjectUsl = "Rezervacija Vase usluge";
              $commentUsl = "neki tekst"; // napisati...

              mail($emailUsl, $subjectUsl, $commentUsl, $from); */
            if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->model('TorteModel');
            $korisnik = $_SESSION['username'];
            $usluga = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeT);
            $datum = $this->input->post('datum');
            $rezultat = $this->TorteModel->rezervisi($korisnik, $usluga, $datum);

            if ($rezultat == 1) {
                $this->load->view('UspesnaRezervacija', $data);
            } else if ($rezultat == 2) {
                $this->load->view('VecRezervisano', $data);
            } else {
                $this->load->view('Greska', $data);
            }
        }
    }

    function ProveraVencanica($imeS = '', $imeV = '') {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
        {
            $data['sesija'] = $_SESSION['username'];
            $data['kat'] = $_SESSION['kategorija'];
        }
        else
            $data['sesija'] = 0;

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        $this->form_validation->set_rules('ime', ' ', 'required');
        $this->form_validation->set_rules('adresa', ' ', 'required');
        $this->form_validation->set_rules('email', ' ', 'required|valid_email');

        $this->form_validation->set_rules('datum', ' ', 'required|callback_date_check');
        $this->form_validation->set_rules('kolicina', ' ', 'required|is_natural_no_zero');

        $this->form_validation->set_rules('brkartice', ' ', 'required|callback_card_check');
        $this->form_validation->set_rules('datumisteka', ' ', 'required|callback_date_check');
        $this->form_validation->set_rules('sigurnosnibr', ' ', 'required|numeric|callback_safetyno_check');

        if ($this->form_validation->run() == FALSE) {
            $nazivS = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeS);
            $nazivV = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeV);
            $data['nazivS'] = $nazivS;
            $data['nazivV'] = $nazivV;
            if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->model('PomocniModel');
            $korisnik = $this->PomocniModel->getKorisnik($data['sesija']);
            $imePrezime = null;
            $adresa = null;
            $email = null;
            foreach ($korisnik as $row) {
                $imePrezime = $row->ImePrezime;
                $adresa = $row->Adresa;
                $email = $row->Email;
            }

            $data['imePrezime'] = $imePrezime;
            $data['adresa'] = $adresa;
            $data['email'] = $email;

            $this->load->view('RezervacijaVencanice', $data);
        } else {
            /*        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
              $from = "ludikamen@gmail.com";

              $emailKor = $this->input->post('email');
              $subjectKor = "Potvrda rezervacije";
              $commentKor = "neki tekst"; // napisati...

              mail($emailKor, $subjectKor, $commentKor, $from);

              $this->load->model('PomocniModel');
              $query = $this->PomocniModel->getEmail($naziv);
              $emailUsl = null;
              foreach ($query as $row) {
              $emailUsl = $row->Email;
              }

              $subjectUsl = "Rezervacija Vase usluge";
              $commentUsl = "neki tekst"; // napisati...

              mail($emailUsl, $subjectUsl, $commentUsl, $from); */
            if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->model('VencaniceModel');
            $korisnik = $_SESSION['username'];
            $usluga = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeV);
            $datum = $this->input->post('datum');
            $rezultat = $this->VencaniceModel->rezervisi($korisnik, $usluga, $datum);

            if ($rezultat == 1) {
                $this->load->view('UspesnaRezervacija', $data);
            } else if ($rezultat == 2) {
                $this->load->view('VecRezervisano', $data);
            } else if ($rezultat == 3) {
                $this->load->view('Nedostupno', $data);
            } else {
                $this->load->view('Greska', $data);
            }
        }
    }

    function ProveraPozivnica($imeS = '', $imeP = '') {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
        {
            $data['sesija'] = $_SESSION['username'];
            $data['kat'] = $_SESSION['kategorija'];            
        }
        else
            $data['sesija'] = 0;

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        $this->form_validation->set_rules('ime', ' ', 'required');
        $this->form_validation->set_rules('adresa', ' ', 'required');
        $this->form_validation->set_rules('email', ' ', 'required|valid_email');

        $this->form_validation->set_rules('datum', ' ', 'required|callback_date_check');
        $this->form_validation->set_rules('kolicina', ' ', 'required|is_natural_no_zero');

        $this->form_validation->set_rules('brkartice', ' ', 'required|callback_card_check');
        $this->form_validation->set_rules('datumisteka', ' ', 'required|callback_date_check');
        $this->form_validation->set_rules('sigurnosnibr', ' ', 'required|numeric|callback_safetyno_check');

        if ($this->form_validation->run() == FALSE) {
            $nazivS = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeS);
            $nazivP = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeP);
            $data['nazivS'] = $nazivS;
            $data['nazivP'] = $nazivP;
            if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->model('PomocniModel');
            $korisnik = $this->PomocniModel->getKorisnik($data['sesija']);
            $imePrezime = null;
            $adresa = null;
            $email = null;
            foreach ($korisnik as $row) {
                $imePrezime = $row->ImePrezime;
                $adresa = $row->Adresa;
                $email = $row->Email;
            }

            $data['imePrezime'] = $imePrezime;
            $data['adresa'] = $adresa;
            $data['email'] = $email;

            $this->load->view('RezervacijaPozivnica', $data);
        } else {
            /*        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
              $from = "ludikamen@gmail.com";

              $emailKor = $this->input->post('email');
              $subjectKor = "Potvrda rezervacije";
              $commentKor = "neki tekst"; // napisati...

              mail($emailKor, $subjectKor, $commentKor, $from);

              $this->load->model('PomocniModel');
              $query = $this->PomocniModel->getEmail($naziv);
              $emailUsl = null;
              foreach ($query as $row) {
              $emailUsl = $row->Email;
              }

              $subjectUsl = "Rezervacija Vase usluge";
              $commentUsl = "neki tekst"; // napisati...

              mail($emailUsl, $subjectUsl, $commentUsl, $from); */
            if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->model('PozivniceModel');
            $korisnik = $_SESSION['username'];
            $usluga = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeP);
            $datum = $this->input->post('datum');
            $rezultat = $this->PozivniceModel->rezervisi($korisnik, $usluga, $datum);

            if ($rezultat == 1) {
                $this->load->view('UspesnaRezervacija', $data);
            } else if ($rezultat == 2) {
                $this->load->view('VecRezervisano', $data);
            } else {
                $this->load->view('Greska', $data);
            }
        }
    }

    function date_check($date) {

        $uzorak = '@(([0][1-9]|[1-2][0-9])/([0][1-9]|[1-2][0-9]|[3][0-1])/([0-9][0-9][0-9][0-9]))@';
        if (preg_match($uzorak, $date) != 1) {
            $this->form_validation->set_message('date_check', 'The field %s must contain a valid date in mm/dd/gggg format.');
            return FALSE;
        } else {
            $niz = explode('/', $date);
            if (checkdate($niz[0], $niz[1], $niz[2])) {
                return TRUE;
            } else {
                $this->form_validation->set_message('date_check', 'The field %s must contain a valid date in mm/dd/gggg format.');
                return FALSE;
            }
        }
    }

    function card_check($card) {
        $card = preg_replace('/\s+/', '', $card);
        $uzorak = '@(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})@';
        if (preg_match($uzorak, $card) != 1) {
            $this->form_validation->set_message('card_check', 'The field %s must contain a valid credit card number.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function safetyno_check($no) {
        if ($no < 100 || $no > 999) {
            $this->form_validation->set_message('safetyno_check', 'The field %s must contain a valid safety number.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function Potvrda() {
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;
        else
            $data['admin'] = 0;
        if ($_SESSION == TRUE)
        {
            $data['sesija'] = $_SESSION['username'];
            $data['kat'] = $_SESSION['kategorija'];
        }
        else
            $data['sesija'] = 0;

        $this->load->view('UspesnaRezervacija', $data);
    }

    function CenaRestoran($ime, $brgosti) {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $this->load->model('PomocniModel');
        $cena = $this->PomocniModel->getPrice($naziv);
        $ukupno = null;
        foreach ($cena as $row) {
            $ukupno = $row->Cena * $brgosti;
        }
        if ($ukupno == null) {
            $poruka = "GREŠKA";
        } else {
            $poruka = $ukupno . " €";
        }
        echo $poruka;
    }

    function CenaMuzika($ime, $brsati) {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $this->load->model('PomocniModel');
        $cena = $this->PomocniModel->getPrice($naziv);
        $ukupno = null;
        foreach ($cena as $row) {
            $ukupno = $row->Cena * $brsati;
        }
        if ($ukupno == null) {
            $poruka = "GREŠKA";
        } else {
            $poruka = $ukupno . " €";
        }
        echo $poruka;
    }

    function CenaTorta($ime, $kolicina) {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $this->load->model('PomocniModel');
        $cena = $this->PomocniModel->getPrice1($naziv);
        $ukupno = null;
        foreach ($cena as $row) {
            $ukupno = $row->Cena * $kolicina;
        }
        if ($ukupno == null) {
            $poruka = "GREŠKA";
        } else {
            $poruka = $ukupno . " €";
        }
        echo $poruka;
    }

    function CenaVencanica($ime, $kolicina) {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $this->load->model('PomocniModel');
        $cena = $this->PomocniModel->getPrice1($naziv);
        $ukupno = null;
        foreach ($cena as $row) {
            $ukupno = $row->Cena * $kolicina;
        }
        if ($ukupno == null) {
            $poruka = "GREŠKA";
        } else {
            $poruka = $ukupno . " €";
        }
        echo $poruka;
    }

    function CenaPozivnica($ime, $kolicina) {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $this->load->model('PomocniModel');
        $cena = $this->PomocniModel->getPrice1($naziv);
        $ukupno = null;
        foreach ($cena as $row) {
            $ukupno = $row->Cena * $kolicina;
        }
        if ($ukupno == null) {
            $poruka = "GREŠKA";
        } else {
            $poruka = $ukupno . " €";
        }
        echo $poruka;
    }

    function Zabranjeno() {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
        {
            $data['sesija'] = $_SESSION['username'];
            $data['kat'] = $_SESSION['kategorija'];            
        }
        else
            $data['sesija'] = 0;
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;
        $this->load->view('ZabranjenaRezervacija', $data);
    }

}
?>


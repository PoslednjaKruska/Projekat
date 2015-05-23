<?php

class Rezervacija extends CI_Controller {
    
    function Restoran ($ime='') {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $this->load->helper(array('form', 'url'));
        $this->load->view('RezervacijaRestorana', $data);
    }
    
    function Muzika ($ime='') {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $data['naziv'] = $naziv;
        $this->load->helper(array('form', 'url'));
        $this->load->view('RezervacijaMuzike', $data);
    }
    
    function Torta ($imeP='', $imeT='') {
        $nazivP = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeP);
        $nazivT = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeT);
        $data['nazivP'] = $nazivP;
        $data['nazivT'] = $nazivT;
        $this->load->helper(array('form', 'url'));
        $this->load->view('RezervacijaTorte', $data);
    }
    
    function Vencanica ($imeS='', $imeV='') {
        $nazivS = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeS);
        $nazivV = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeV);
        $data['nazivS'] = $nazivS;
        $data['nazivV'] = $nazivV;
        $this->load->helper(array('form', 'url'));
        $this->load->view('RezervacijaVencanice', $data);
    }
    
    function Pozivnica ($imeS='', $imeP='') {
        $nazivS = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeS);
        $nazivP = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeP);
        $data['nazivS'] = $nazivS;
        $data['nazivP'] = $nazivP;
        $this->load->helper(array('form', 'url'));
        $this->load->view('RezervacijaPozivnica', $data);
    }
    
    function ProveraRestoran ($ime='') {
        $this->load->helper(array('form', 'url'));

	$this->load->library('form_validation');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        $this->form_validation->set_rules('ime', ' ', 'required|alpha');
	$this->form_validation->set_rules('adresa', ' ', 'required|alpha_dash');
	$this->form_validation->set_rules('email', ' ', 'required|valid_email');
        
        $this->form_validation->set_rules('datum', ' ', 'required|callback_date_check');
	$this->form_validation->set_rules('brgosti', ' ', 'required|is_natural_no_zero');
        
        $this->form_validation->set_rules('brkartice', ' ', 'required');
	$this->form_validation->set_rules('datumisteka', ' ', 'required|callback_date_check');
	$this->form_validation->set_rules('sigurnosnibr', ' ', 'required|numeric');

	if ($this->form_validation->run() == FALSE) {
            $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
            $data['naziv'] = $naziv;
            $this->load->view('RezervacijaRestorana', $data);
	}
	else {    
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
            
            mail($emailUsl, $subjectUsl, $commentUsl, $from);  */
            
            $this->load->view('UspesnaRezervacija');
	}
    }
    
    function ProveraMuzika ($ime='') {
        $this->load->helper(array('form', 'url'));

	$this->load->library('form_validation');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        $this->form_validation->set_rules('ime', ' ', 'required|alpha');
	$this->form_validation->set_rules('adresa', ' ', 'required|alpha_dash');
	$this->form_validation->set_rules('email', ' ', 'required|valid_email');
        
        $this->form_validation->set_rules('datum', ' ', 'required|callback_date_check');
	$this->form_validation->set_rules('brsati', ' ', 'required|is_natural_no_zero');
        
        $this->form_validation->set_rules('brkartice', ' ', 'required');
	$this->form_validation->set_rules('datumisteka', ' ', 'required|callback_date_check');
	$this->form_validation->set_rules('sigurnosnibr', ' ', 'required|numeric');

	if ($this->form_validation->run() == FALSE) {
            $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
            $data['naziv'] = $naziv;
            $this->load->view('RezervacijaMuzike', $data);
	}
	else {    
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
            
            mail($emailUsl, $subjectUsl, $commentUsl, $from);  */
            
            $this->load->view('UspesnaRezervacija');
	}
    }
    
    function ProveraTorta ($imeP='', $imeT='') {
        $this->load->helper(array('form', 'url'));

	$this->load->library('form_validation');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        $this->form_validation->set_rules('ime', ' ', 'required|alpha');
	$this->form_validation->set_rules('adresa', ' ', 'required|alpha_dash');
	$this->form_validation->set_rules('email', ' ', 'required|valid_email');
        
        $this->form_validation->set_rules('datum', ' ', 'required|callback_date_check');
	$this->form_validation->set_rules('kolicina', ' ', 'required|is_natural_no_zero');
        
        $this->form_validation->set_rules('brkartice', ' ', 'required');
	$this->form_validation->set_rules('datumisteka', ' ', 'required|callback_date_check');
	$this->form_validation->set_rules('sigurnosnibr', ' ', 'required|numeric');

	if ($this->form_validation->run() == FALSE) {
            $nazivP = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeP);
            $nazivT = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeT);
            $data['nazivP'] = $nazivP;
            $data['nazivT'] = $nazivT;
            $this->load->view('RezervacijaTorte', $data);
	}
	else {    
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
            
            mail($emailUsl, $subjectUsl, $commentUsl, $from);  */
            
            $this->load->view('UspesnaRezervacija');
	}
    }
    
    function ProveraVencanica ($imeS='', $imeV='') {
        $this->load->helper(array('form', 'url'));

	$this->load->library('form_validation');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        $this->form_validation->set_rules('ime', ' ', 'required|alpha');
	$this->form_validation->set_rules('adresa', ' ', 'required|alpha_dash');
	$this->form_validation->set_rules('email', ' ', 'required|valid_email');
        
        $this->form_validation->set_rules('datum', ' ', 'required|callback_date_check');
	$this->form_validation->set_rules('kolicina', ' ', 'required|is_natural_no_zero');
        
        $this->form_validation->set_rules('brkartice', ' ', 'required');
	$this->form_validation->set_rules('datumisteka', ' ', 'required|callback_date_check');
	$this->form_validation->set_rules('sigurnosnibr', ' ', 'required|numeric');

	if ($this->form_validation->run() == FALSE) {
            $nazivS = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeS);
            $nazivV = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeV);
            $data['nazivS'] = $nazivS;
            $data['nazivV'] = $nazivV;
            $this->load->view('RezervacijaVencanice', $data);
	}
	else {    
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
            
            mail($emailUsl, $subjectUsl, $commentUsl, $from);  */
            
            $this->load->view('UspesnaRezervacija');
	}
    }
    
    function ProveraPozivnica ($imeS='', $imeP='') {
        $this->load->helper(array('form', 'url'));

	$this->load->library('form_validation');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        $this->form_validation->set_rules('ime', ' ', 'required|alpha');
	$this->form_validation->set_rules('adresa', ' ', 'required|alpha_dash');
	$this->form_validation->set_rules('email', ' ', 'required|valid_email');
        
        $this->form_validation->set_rules('datum', ' ', 'required|callback_date_check');
	$this->form_validation->set_rules('kolicina', ' ', 'required|is_natural_no_zero');
        
        $this->form_validation->set_rules('brkartice', ' ', 'required');
	$this->form_validation->set_rules('datumisteka', ' ', 'required|callback_date_check');
	$this->form_validation->set_rules('sigurnosnibr', ' ', 'required|numeric');

	if ($this->form_validation->run() == FALSE) {
            $nazivS = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeS);
            $nazivP = preg_replace('/(?<!^)([A-Z])/', ' \\1', $imeP);
            $data['nazivS'] = $nazivS;
            $data['nazivP'] = $nazivP;
            $this->load->view('RezervacijaPozivnica', $data);
	}
	else {    
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
            
            mail($emailUsl, $subjectUsl, $commentUsl, $from);  */
            
            $this->load->view('UspesnaRezervacija');
	}
    }
    
    function date_check ($date) {
        $uzorak = '@(([0][1-9]|[1-2][0-9])/([0][1-9]|[1-2][0-9]|[3][0-1])/([0-9][0-9][0-9][0-9]))@';
        if (preg_match($uzorak, $date) != 1) {
            $this->form_validation->set_message('date_check', 'The field %s must contain a valid date in mm/dd/gggg format.');
            return FALSE;
        }
        else {
            $niz = explode('/', $date);
            if (checkdate($niz[0], $niz[1], $niz[2])) { return TRUE; }
            else { 
                $this->form_validation->set_message('date_check', 'The field %s must contain a valid date in mm/dd/gggg format.');
                return FALSE; 
            }
        } 
    }
    
    function Potvrda () {
        $this->load->view('UspesnaRezervacija');
    }
    
    function CenaRestoran ($ime, $brgosti) {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $this->load->model('PomocniModel');
        $cena = $this->PomocniModel->getPrice($naziv);
        $ukupno = null;
        foreach ($cena as $row) {
            $ukupno = $row->Cena * $brgosti;
        }
        $poruka = $ukupno . " €";
        echo $poruka;
    }
    
    function CenaMuzika ($ime, $brsati) {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $this->load->model('PomocniModel');
        $cena = $this->PomocniModel->getPrice($naziv);
        $ukupno = null;
        foreach ($cena as $row) {
            $ukupno = $row->Cena * $brsati;
        }
        $poruka = $ukupno . " €";
        echo $poruka;
    }
    
    function CenaTorta ($ime, $kolicina) {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $this->load->model('PomocniModel');
        $cena = $this->PomocniModel->getPrice1($naziv);
        $ukupno = null;
        foreach ($cena as $row) {
            $ukupno = $row->Cena * $kolicina;
        }
        $poruka = $ukupno . " €";
        echo $poruka;
    }
    
    function CenaVencanica ($ime, $kolicina) {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $this->load->model('PomocniModel');
        $cena = $this->PomocniModel->getPrice1($naziv);
        $ukupno = null;
        foreach ($cena as $row) {
            $ukupno = $row->Cena * $kolicina;
        }
        $poruka = $ukupno . " €";
        echo $poruka;
    }
    
    function CenaPozivnica ($ime, $kolicina) {
        $naziv = preg_replace('/(?<!^)([A-Z])/', ' \\1', $ime);
        $this->load->model('PomocniModel');
        $cena = $this->PomocniModel->getPrice1($naziv);
        $ukupno = null;
        foreach ($cena as $row) {
            $ukupno = $row->Cena * $kolicina;
        }
        $poruka = $ukupno . " €";
        echo $poruka;
    }
    
}

?>


<?php

session_start();

class Usluga extends CI_Controller {
    
    function Unos() {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;
        
        if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
            $data['admin'] = 1;
        
        $this->load->helper(array('form', 'url'));
        $this->load->view("UnosUsluge", $data);
    }
    
    function ProveraUnosa() {
        $data['admin'] = 0;
        if ($_SESSION == TRUE)
            $data['sesija'] = $_SESSION['username'];
        else
            $data['sesija'] = 0;

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        $this->form_validation->set_rules('naziv', ' ', 'required');
        $this->form_validation->set_rules('opis', ' ', 'required');
        $this->form_validation->set_rules('cena', ' ', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('velicina', ' ', 'required|is_natural_no_zero');

        if ($this->form_validation->run() == FALSE) {
            if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;

            $this->load->view('UnosUsluge', $data);
        }
        else {
           if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;
           $this->load->model("PomocniModel");
           $naziv = $this->input->post('naziv');
           $opis = $this->input->post('opis');
           $cena = $this->input->post('cena');
           $pruzalac = $_SESSION['username'];
           $velicina = $this->input->post('velicina');
           $kategorija = $_SESSION['kategorija'];
           $rezultat = $this->PomocniModel->unesiUslugu($naziv, $opis, $cena, $pruzalac, $velicina, $kategorija);
           
           if ($rezultat == 1) {
               if($_FILES['slika']['name']) {
                    if(!$_FILES['slika']['error']) {
                        $naziv = $this->input->post('naziv');
                        $i = preg_replace('/\s+/', '', $naziv);
                        $new_file_name = $i . ".jpg";
                        $valid_file = true;
                        if($_FILES['slika']['size'] > (1024000)) {
                            $valid_file = false;
                        }
                        if($valid_file) {
                            move_uploaded_file($_FILES['slika']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/Slike/'.$new_file_name);
                        }
                    }
                }
               $this->load->view('UspesanUnos', $data);
           }
           else if ($rezultat == 2) {
               $this->load->view('GreskaUnos', $data);
           }
           else {
               $this->load->view('GreskaUnos1', $data);
           }
        }
    }
    
    
        function ProveraIzmene($idPruzalac, $idUsluga) {
        $data['admin'] = 0;
        $data['sesija'] = 1;
        $data['idPruzalac'] = $idPruzalac;
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        $this->form_validation->set_rules('naziv', ' ', 'required');
        $this->form_validation->set_rules('opis', ' ', 'required');
        $this->form_validation->set_rules('cena', ' ', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('velicina', ' ', 'required|is_natural_no_zero');

        if ($this->form_validation->run() == FALSE) {
            if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;
            
            $this->load->view('IzmenaUsluge', $data);
        }
        else {
           if ($_SESSION == TRUE && $_SESSION['kategorija'] == 0)
                $data['admin'] = 1;
           $this->load->model("PomocniModel");
           $naziv = $this->input->post('naziv');
           $opis = $this->input->post('opis');
           $cena = $this->input->post('cena');
           $velicina = $this->input->post('velicina');
           $kategorija = $_SESSION['kategorija'];
           $this->PomocniModel->azurirajUslugu($naziv, $opis, $cena, $idPruzalac, $idUsluga, $velicina, $kategorija);
      
           if($_FILES['slika']['name']) {
                    if(!$_FILES['slika']['error']) {
                        $naziv = $this->input->post('naziv');
                        $i = preg_replace('/\s+/', '', $naziv);
                        $new_file_name = $i . ".jpg";
                        $valid_file = true;
                        if($_FILES['slika']['size'] > (1024000)) {
                            $valid_file = false;
                        }
                        if($valid_file) {
                            move_uploaded_file($_FILES['slika']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/Slike/'.$new_file_name);
                        }
                    }
                }
               $this->load->view('UspesnaIzmena', $data);
           
        }
    }
}

?>


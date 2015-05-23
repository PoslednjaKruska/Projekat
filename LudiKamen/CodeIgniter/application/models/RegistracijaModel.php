<?php

class RegistracijaModel extends CI_Model {

    function checkIfExists() {
        $flag = 0;
        $this->load->database();
        $korime = $this->input->post('korime');

        if (strlen($korime) < 6) {
            $flag = 4;
            return $flag;
        }

        $this->db->select('*');
        $this->db->from('korisnik k');
        $this->db->where('k.Username', $korime);
        $upit = $this->db->get();
        if ($upit->num_rows() > 0) {
            $flag = 1;
        }
        return $flag;
    }

    function checkPassword() {
        $flag = 0;
        $password1 = $this->input->post('lozinka');
        if (strlen($password1) < 6) {
            $flag = 2;
            return $flag;
        }
        $password2 = $this->input->post('lozinkaPonovo');
        if ($password1 != $password2) {
            $flag = 3;
        }
        return $flag;
    }

    function formatMe($words) {
        $i = 0;
        $niz = array();
        foreach ($words as $rec) {
            $ret = preg_match("/^[A-Z][a-z]+$/", $rec);
            if ($ret == 1) {
                $niz[$i++] = $rec;
            }
            /*     else
              {
              $retu = preg_match("/[a-z]+/", $rec);
              if ($retu == 1)
              $rec = ucfirst($rec);
              } */
        }
        return $niz;
    }
    
    function insertUser ($data) {
        $this->load->database();
     
        $ime = implode(" ", $data['ime']);
        $grad = implode(" ", $data['grad']);
        
        $red = array(
            'Username' => $data['username'],
            'Password' => $data['password'],
            'Email' => $data['email'],
            'Adresa' => $data['adresa'], 
            'ImePrezime' => $ime,
            'Kategorija' => $data['kategorija'],
            'Grad' => $grad,
            'DatumReg' => 'danas', 
            'DatumIzmene' => 'danas'
            );
        
        $this->db->insert('Korisnik', $red);
    }
}

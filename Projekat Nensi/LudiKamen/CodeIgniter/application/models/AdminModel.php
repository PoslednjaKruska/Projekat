<?php

class AdminModel extends CI_Model {
    function getAdminDate ($username) {
        $id;
        $this->load->database();
        $this->db->select('IDKorisnik');
        $this->db->from('korisnik');
        $this->db->where('Username', $username);
        $ret = $this->db->get()->result();
        foreach ($ret as $red) {
            $id = $red->IDKorisnik;
        }
        $this->db->select('Datum');
        $this->db->from('logovanjeadmina');
        $this->db->where('IDKorisnik', $id);
        $datum = $this->db->get()->result();
        $ret;
        foreach ($datum as $dat)
            $ret = $dat->Datum;
        return $ret;
    }

    function getFromDate ($data) {
        $date = $this->getAdminDate($data['username']);
  //      echo 'datum poslednjeg logovanja: '. $date;
        if ($data['kateg'] == 1)    // dohvatamo najnovije naloge
        {
            $this->db->select('*');
            $this->db->from('Korisnik');
            $this->db->where('DatumIzmene>=', $date);
            $this->db->where('Username !=', $data['username']);
            $rez = $this->db->get()->result();
            return $rez;
        }
        if ($data['kateg'] == 2)    // dohvatamo usluge
        {
            $this->db->select('*');
            $this->db->from('Usluga');
            $this->db->where('DatumIzmene>=', $date);
            $rez = $this->db->get()->result();
            return $rez;
        }
        if ($data['kateg'] == 3)    // dohvatamo rezervacije
        {
            $this->db->select('*');
            $this->db->from('Usluga');
            $this->db->where('DatumIzmene>=', $date);
            $rez = $this->db->get()->result();
            return $rez;
        }
    }
}

<?php

class AdminModel extends CI_Model {

    function getAdminDate($username) {
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

    function getFromDate($data) {
        $date = $this->getAdminDate($data['username']);
       
         $this->load->database();
        //      echo 'datum poslednjeg logovanja: '. $date;
        if ($data['kateg'] == 1) {    // dohvatamo najnovije naloge
            $this->db->select('*');
            $this->db->from('Korisnik');
            $this->db->where('DatumIzmene>=', $date);
            $this->db->where('Username !=', $data['username']);
            $rez = $this->db->get()->result();
            return $rez;
        }
        if ($data['kateg'] == 2) {    // dohvatamo usluge
            $this->db->select('*');
            $this->db->from('Usluga');
            $this->db->where('DatumIzmene>=', $date);
            $rez = $this->db->get()->result();
            return $rez;
        }
        if ($data['kateg'] == 3) {    // dohvatamo rezervacije
            $this->db->select('*');
            $this->db->from('Koristi');
            $this->db->where('DatumUnosa>=', $date);
            $rez = $this->db->get()->result();
            $i=0;
            $niz = array ();
            $niz1 = array ();
            $niz2 = array ();
            foreach ($rez as $red) {
                $niz[$i] = $red->DatumUnosa;
                $this->db->select('Username');
                $this->db->from('korisnik');
                $this->db->like('IDKorisnik', $red->IDKorisnik);
                $pom = $this->db->get()->result();
                foreach ($pom as $prom)
                    $niz1[$i] = $prom->Username;
                $this->db->select('Naziv');
                $this->db->from('usluga');
                $this->db->like('IDUsluga', $red->IDUsluga);
                $pom2 = $this->db->get()->result();
                foreach ($pom2 as $prom2)
                    $niz2[$i++] = $prom2->Naziv;
            }
            $data['numOfRows'] = $i;
            $data['dates'] = $niz;
            $data['users'] = $niz1;
            $data['services'] = $niz2;
            return $data;
        }
    }

    function deleteUser() {
        $this->load->database();
        $user = $this->input->post('korime');
        $this->db->from('korisnik');
        $this->db->where('Username', $user);
        $this->db->delete();
    }

    function brisiUslugu($ime) {
        $this->load->database();
        $this->db->from('usluga');
        $this->db->where('Naziv', $ime);
        $this->db->delete();
    }

    function getServices ($data) {
        $this->load->database();
        $this->db->select('IDKorisnik');
        $this->db->from('Korisnik');
        $this->db->where('Username', $data['username']);
        $rez1 = $this->db->get()->result();
        $id;
        foreach ($rez1 as $red1)
        {
            $id = $red1->IDKorisnik;
        }
        $this->db->select('*');
        $this->db->from('Usluga');
        $this->db->where('IDPruzalac', $id);
        $rez = $this->db->get()->result();
        return $rez;
    }
    
    function uslugaRet ($data) {
        $id = $data['id'];
        $this->load->database();
        $this->db->select('*');
        $this->db->from('usluga');
        $this->db->where('IDUsluga', $id);
        $rez = $this->db->get()->result();
        foreach ($rez as $red) {
            $data['naziv'] = $red->Naziv;
            $data['opis'] = $red->Opis;
            $data['cena'] = $red->Cena;
            $data['velicina'] = $red->Velicina;
            $data['idPruzalac'] = $red->IDPruzalac;
        }
        return $data;
    }
}

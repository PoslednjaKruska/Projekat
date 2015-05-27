<?php

class LoginModel extends CI_Model {

    function check() {
        $this->load->database();
        $username = $this->input->post('korime');
        $lozinka = $this->input->post('lozinka');

        $this->db->select('IDKorisnik');
        $this->db->from('Korisnik');
        $this->db->where('Username', $username);

        $rez = $this->db->get();
        if ($rez->num_rows() == 0) {
            $flag = 1;
            return $flag;
        }

        $this->db->select('IDKorisnik, Kategorija');
        $this->db->from('Korisnik');
        $this->db->where('Username', $username);
        $this->db->where('Password', $lozinka);
        $rezultat2 = $this->db->get()->result();
        if (!$rezultat2) {
            $flag = 2;
            return $flag;
        }
        foreach ($rezultat2 as $red) {
            if ($red->Kategorija == 0) {
                $flag = 10;  // admin
            } else
                $flag = 0;
        }
        return $flag;
    }

    function getParams($data) {
        $this->load->database();
        $korime = $data['username'];
        $this->db->select('*');
        $this->db->from('korisnik k');
        $this->db->where('k.Username', $korime);
        $r = $this->db->get()->result();
        foreach ($r as $row) {
            $data['ime'] = $row->ImePrezime;
            $data['grad'] = $row->Grad;
            $data['kategorija'] = $row->Kategorija;
            $data['email'] = $row->Email;
            $data['adresa'] = $row->Adresa;
            if ($data['admin'] == 1)
                $data['password'] = $row->Password;
        }
        return $data;
    }

    function logout($data) {
        $this->load->database();
        $niz = array(
            'IDKorisnik' => "",
            'Datum' => date("d/m/Y")
        );
        $this->db->select('*');
        $this->db->from('Korisnik');
        $this->db->where('Username', $data['username']);
        $ret = $this->db->get()->result();
        foreach ($ret as $red) {
            if ($red->Kategorija == 0) {
                $niz['IDKorisnik'] = $red->IDKorisnik;
                $this->db->where('IDKorisnik', $red->IDKorisnik);
                $this->db->update('logovanjeadmina', $niz);
            }
        }
    }

    function getReserv($data) {
        $this->load->database();
        $this->db->select('IDKorisnik');
        $this->db->from('Korisnik');
        $this->db->where('Username', $data['username']);
        $rez = $this->db->get()->result();
        $ID;
        foreach ($rez as $red)
            $ID = $red->IDKorisnik;
        $this->db->select('*');
        $this->db->from('Koristi');
        $this->db->where('IDKorisnik', $ID);
        $rez = $this->db->get()->result();
        $i = 0;
        $niz = array();
        $niz1 = array();
        $niz2 = array();
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

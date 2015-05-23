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

        $this->db->select('IDKorisnik');
        $this->db->from('Korisnik');
        $this->db->where('Username', $username);
        $this->db->where('Password', $lozinka);
        $rez = $this->db->get();
        if ($rez->num_rows() == 0) {
            $flag = 2;
            return $flag;
        }
        $flag = 0;
        return $flag;
    }

    function getParams ($data) {
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
        }
        return $data;
    }
}

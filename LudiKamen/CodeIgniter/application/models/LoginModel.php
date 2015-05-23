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

}

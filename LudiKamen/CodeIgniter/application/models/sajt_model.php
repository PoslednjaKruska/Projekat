<?php

class Sajt_model extends CI_model {
    function getAll () {
        $this->load->database();
        
        $this->db->select('k.IDKorisnik');
        $this->db->from('Korisnik k');
        $this->db->where('k.IDKorisnik', 1);
        
        $upit = $this->db->get();
        if ($upit->num_rows() > 0) {
            foreach ($upit->result() as $red) {
                $niz[] = $red;
            }
        }
        return $niz;
    }
}
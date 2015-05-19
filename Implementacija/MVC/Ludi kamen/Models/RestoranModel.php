<?php

class RestoranModel extends CI_Model {
    
    function getAll() {
        $this->load->database();
        
        $grad = $this->input->post('grad');
        
        $this->db->select('*');
        $this->db->from('restoran r');
        $this->db->join('pruzalacusluga p', 'r.IDKorisnik = p.IDKorisnik', 'left');
        $this->db->join('korisnik k', 'k.IDKorisnik = r.IDKorisnik', 'left');
        $query = $this->db->get('restoran');
        
        return $query->result();
    }
    
}

?>
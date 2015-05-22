<?php

class PomocniModel extends CI_Model {
    
    function getPrice ($naziv) {
        $this->load->database();
         
        $this->db->select('u.Cena');
        $this->db->distinct();
        $this->db->from('usluga u');
        $this->db->join('korisnik k', 'u.IDPruzalac = k.IDKorisnik', 'left');
        $this->db->where('k.ImePrezime', $naziv);
        
        $query = $this->db->get('usluga');
        
        return $query->result();
    }
    
    function getEmail ($naziv) {
        $this->load->database();
         
        $this->db->select('k.Email');
        $this->db->distinct();
        $this->db->from('korisnik k');
        $this->db->where('k.ImePrezime', $naziv);
        
        $query = $this->db->get('korisnik');
        
        return $query->result();
    }
    
}

?>

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
    
    function getPrice1 ($naziv) {
        $this->load->database();
         
        $this->db->select('u.Cena');
        $this->db->distinct();
        $this->db->from('usluga u');
        $this->db->where('u.Naziv', $naziv);
        
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
    
    function getKorisnik ($username) {
        $this->load->database();
        
        $this->db->select('k.ImePrezime, k.Adresa, k.Email');
        $this->db->distinct();
        $this->db->from('korisnik k');
        $this->db->where('k.Username', $username);
        
        $query = $this->db->get('korisnik');
        
        return $query->result();
    }
    
}

?>

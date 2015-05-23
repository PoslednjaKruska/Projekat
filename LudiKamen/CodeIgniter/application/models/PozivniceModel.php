<?php

class PozivniceModel extends CI_Model {
    
    function numRows() {
        $this->load->database();
        
        $grad = $this->input->post('grad');
        $this->db->select('k.ImePrezime, k.Adresa');
        $this->db->distinct();
        $this->db->from('korisnik k');
        $this->db->where('k.Kategorija', 6);
        
        if ($grad != "") { $this->db->like('k.Grad', $grad); }
                
        $query = $this->db->get('korisnik');
        
        return $query->num_rows();
    }
    
    function getAll() {
        $this->load->database();
        
        $grad = $this->input->post('grad');
        
        $this->db->select('k.ImePrezime, k.Adresa');
        $this->db->distinct();
        $this->db->from('korisnik k');
        $this->db->where('k.Kategorija', 6);
        
        if ($grad != "") { $this->db->like('k.Grad', $grad); }
                
        $query = $this->db->get('korisnik');
        
        return $query->result();
    }
    
}

?>

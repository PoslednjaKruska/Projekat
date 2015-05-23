<?php

class TorteModel extends CI_Model {
    
    function numRows() {
        $this->load->database();
        
        $grad = $this->input->post('grad');
        
        $this->db->select('k.ImePrezime, k.Adresa');
        $this->db->distinct();
        $this->db->from('korisnik k');
        $this->db->where('k.Kategorija', 3);
        
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
        $this->db->where('k.Kategorija', 3);
        
        if ($grad != "") { $this->db->like('k.Grad', $grad); }
                
        $query = $this->db->get('korisnik');
        
        return $query->result();
    }
    
      function getOne ($naziv) {
        $this->load->database();
        
        $this->db->select('k.ImePrezime, k.Grad, k.Adresa, k.Email');
        $this->db->distinct();
        $this->db->from('usluga u');
        $this->db->join('korisnik k', 'u.IDPruzalac = k.IDKorisnik', 'left');
        $this->db->where('k.ImePrezime', $naziv);

        $query = $this->db->get('usluga');
        
        return $query->result();
    }
    
}

?>

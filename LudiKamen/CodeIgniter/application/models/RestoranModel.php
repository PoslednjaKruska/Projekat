<?php

class RestoranModel extends CI_Model {
    
    function numRows() {
        $this->load->database();
        
        $grad = $this->input->post('grad');
        $gosti = $this->input->post('gosti');
        $cena = $this->input->post('cena');
        
        $this->db->select('*');
        $this->db->from('restoran r');
        $this->db->join('pruzalacusluga p', 'r.IDKorisnik = p.IDKorisnik', 'left');
        $this->db->join('korisnik k', 'k.IDKorisnik = r.IDKorisnik', 'left');
        
        if ($grad != "") { $this->db->like('Grad', $grad); }
        if ($gosti > 0) { $this->db->where('r.Kapacitet >=', $gosti); }
        if ($cena > 0) { $this->db->where('r.Cena <=', $cena); }
                
        $query = $this->db->get('restoran');
        
        return $query->num_rows();
    }
    
    function getAll() {
        $this->load->database();
        
        $grad = $this->input->post('grad');
        $gosti = $this->input->post('gosti');
        $cena = $this->input->post('cena');
        
        $this->db->select('*');
        $this->db->from('restoran r');
        $this->db->join('pruzalacusluga p', 'r.IDKorisnik = p.IDKorisnik', 'left');
        $this->db->join('korisnik k', 'k.IDKorisnik = r.IDKorisnik', 'left');
        
        if ($grad != "") { $this->db->like('Grad', $grad); }
        if ($gosti > 0) { $this->db->where('r.Kapacitet >=', $gosti); }
        if ($cena > 0) { $this->db->where('r.Cena <=', $cena); }
                
        $query = $this->db->get('restoran');
        
        return $query->result();
    }
    
}

?>
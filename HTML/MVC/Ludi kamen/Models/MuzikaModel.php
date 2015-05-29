<?php

class MuzikaModel extends CI_Model {
    
    function numRows() {
        $this->load->database();
        
        $grad = $this->input->post('grad');
        $cena = $this->input->post('cena');
        $datum = $this->input->post('datum');
        
        $rezervisane = array();
        
        if ($datum != "") {
            $this->db->select('k.IDKorisnik');
            $this->db->from('korisnik k');
            $this->db->where('k.Kategorija', 4);
            $r = $this->db->get('korisnik')->result();
            $i = 0;
            $res = array();
            foreach ($r as $row) {
                $res[$i] = $row->IDKorisnik;
                $i++;
            }
            
            $this->db->select('u.IDUsluga');
            $this->db->from('usluga u');
            $this->db->where_in('u.IDPruzalac', $res);
            $u = $this->db->get('usluga')->result();
            $i = 0;
            $usl = array();
            foreach ($u as $row) {
                $usl[$i] = $row->IDUsluga;
                $i++;
            }
            
            $this->db->select('r.IDUsluga');
            $this->db->from('koristi r');
            $this->db->where_in('r.IDUsluga', $usl);
            $this->db->where('r.DatumRezervacije', $datum);
            $dat = $this->db->get('koristi')->result();
            $i = 0;
            foreach ($dat as $row) {
                $rezervisane[$i] = $row->IDUsluga;
                $i++;
            }
        }
        
        $this->db->select('k.ImePrezime, u.Opis, u.Ocena, u.Cena');
        $this->db->distinct();
        $this->db->from('usluga u');
        $this->db->join('korisnik k', 'u.IDPruzalac = k.IDKorisnik', 'left');
        $this->db->where('k.Kategorija', 4);
        
        if ($grad != "") { $this->db->like('k.Grad', $grad); }
        if ($cena > 0) { $this->db->where('u.Cena <=', $cena); }
        
        if ($datum != "" && count($rezervisane)>0) { $this->db->where_not_in('u.IDUsluga', $rezervisane); }
                
        $query = $this->db->get('usluga');
        
        return $query->num_rows();
    }
    
    function getAll() {
        $this->load->database();
        
        $grad = $this->input->post('grad');
        $cena = $this->input->post('cena');
        $datum = $this->input->post('datum');
        
        $rezervisane = array();
        
        if ($datum != "") {
            $this->db->select('k.IDKorisnik');
            $this->db->from('korisnik k');
            $this->db->where('k.Kategorija', 4);
            $r = $this->db->get('korisnik')->result();
            $i = 0;
            $res = array();
            foreach ($r as $row) {
                $res[$i] = $row->IDKorisnik;
                $i++;
            }
            
            $this->db->select('u.IDUsluga');
            $this->db->from('usluga u');
            $this->db->where_in('u.IDPruzalac', $res);
            $u = $this->db->get('usluga')->result();
            $i = 0;
            $usl = array();
            foreach ($u as $row) {
                $usl[$i] = $row->IDUsluga;
                $i++;
            }
            
            $this->db->select('r.IDUsluga');
            $this->db->from('koristi r');
            $this->db->where_in('r.IDUsluga', $usl);
            $this->db->where('r.DatumRezervacije', $datum);
            $dat = $this->db->get('koristi')->result();
            $i = 0;
            foreach ($dat as $row) {
                $rezervisane[$i] = $row->IDUsluga;
                $i++;
            }
        }
        
        $this->db->select('k.ImePrezime, u.Opis, u.Ocena, u.Cena');
        $this->db->distinct();
        $this->db->from('usluga u');
        $this->db->join('korisnik k', 'u.IDPruzalac = k.IDKorisnik', 'left');
        $this->db->where('k.Kategorija', 4);
        
        if ($grad != "") { $this->db->like('k.Grad', $grad); }
        if ($cena > 0) { $this->db->where('u.Cena <=', $cena); }
        
        if ($datum != "" && count($rezervisane)>0) { $this->db->where_not_in('u.IDUsluga', $rezervisane); }
                
        $query = $this->db->get('usluga');
        
        return $query->result();
    }
    
}

?>

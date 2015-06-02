<?php

class TorteModel extends CI_Model {
    // Autor: Maša Reko
    
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
        $this->db->from('korisnik k');
        $this->db->where('k.ImePrezime', $naziv);

        $query = $this->db->get('usluga');
        
        return $query->result();
    }
    
    function getAllCakes ($naziv) {
        $this->load->database();
        
        $this->db->select('u.Naziv, u.Opis, u.Velicina, u.Ocena, u.Cena');
        $this->db->distinct();
        $this->db->from('usluga u');
        $this->db->join('korisnik k', 'u.IDPruzalac = k.IDKorisnik', 'left');
        $this->db->where('k.ImePrezime', $naziv);

        $query = $this->db->get('usluga');
        
        return $query->result();
    }
    
    function getNumCakes ($naziv) {
        $this->load->database();
        
        $this->db->select('u.Naziv, u.Opis, u.Velicina, u.Ocena, u.Cena');
        $this->db->distinct();
        $this->db->from('usluga u');
        $this->db->join('korisnik k', 'u.IDPruzalac = k.IDKorisnik', 'left');
        $this->db->where('k.ImePrezime', $naziv);

        $query = $this->db->get('usluga');
        
        return $query->num_rows();
    }
    
    function rezervisi ($korisnik, $usluga, $datum) {
        $this->load->database();
        $idKor = null;
        $idUsl = null;
        
        $this->db->select('k.IDKorisnik');
        $this->db->from('Korisnik k');
        $this->db->where('k.Username', $korisnik);
        $query1 = $this->db->get('korisnik')->result();
        foreach ($query1 as $row) {
            $idKor = $row->IDKorisnik;
        }
        
        $this->db->select('u.IDUsluga');
        $this->db->from('Usluga u');
        $this->db->where('u.Naziv', $usluga);
        $query2 = $this->db->get('usluga')->result();
        foreach ($query2 as $row) {
            $idUsl = $row->IDUsluga;
        }
        
        if ($idKor == null || $idUsl == null || $datum == null) {
            return 3;
        }
        
        $this->db->select('r.IDKorisnik');
        $this->db->from('koristi r');
        $this->db->where('r.IDKorisnik', $idKor);
        $this->db->where('r.IDUsluga', $idUsl);
        $provera = $this->db->get('koristi');
        if ($provera->num_rows() != 0) { 
            return 2; 
        }
        else {
            $red['IDKorisnik'] = $idKor;
            $red['IDUsluga'] = $idUsl;
            $red['DatumRezervacije'] = $datum;
            $red['DatumUnosa'] = date("d/m/Y");

            $this->db->insert('Koristi', $red);        
            return 1;          
        }
        
        return 3;

    }
    
}

?>

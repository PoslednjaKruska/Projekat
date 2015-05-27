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
    
    function getOne ($naziv) {
        $this->load->database();
        
        $this->db->select('k.ImePrezime, u.Ocena, k.Grad, k.Adresa, u.Opis, u.Cena, k.Email');
        $this->db->distinct();
        $this->db->from('usluga u');
        $this->db->join('korisnik k', 'u.IDPruzalac = k.IDKorisnik', 'left');
        $this->db->like('k.ImePrezime', $naziv);

        $query = $this->db->get('usluga');
        
        return $query->result();
    }
    
    function getOneNum ($naziv) {
        $this->load->database();
        
        $this->db->select('k.ImePrezime, u.Ocena, k.Grad, k.Adresa, u.Opis, u.Cena, k.Email');
        $this->db->distinct();
        $this->db->from('usluga u');
        $this->db->join('korisnik k', 'u.IDPruzalac = k.IDKorisnik', 'left');
        $this->db->like('k.ImePrezime', $naziv);

        $query = $this->db->get('usluga');
        
        return $query->num_rows();
    }
    
    function rezervisi ($korisnik, $usluga, $datum) {
        $this->load->database();
        $idKor1 = null;
        $idKor2 = null;
        $idUsl = null;
        
        $this->db->select('k.IDKorisnik');
        $this->db->from('Korisnik k');
        $this->db->where('k.Username', $korisnik);
        $query1 = $this->db->get('korisnik')->result();
        foreach ($query1 as $row) {
            $idKor1 = $row->IDKorisnik;
        }
        
        $this->db->select('k.IDKorisnik');
        $this->db->from('Korisnik k');
        $this->db->where('k.ImePrezime', $usluga);
        $query2 = $this->db->get('korisnik')->result();
        foreach ($query2 as $row) {
            $idKor2 = $row->IDKorisnik;
        }
        
        $this->db->select('u.IDUsluga');
        $this->db->from('Usluga u');
        $this->db->where('u.IDPruzalac', $idKor2);
        $query3 = $this->db->get('usluga')->result();
        foreach ($query3 as $row) {
            $idUsl = $row->IDUsluga;
        }
        
        if ($idKor1 == null || $idUsl == null || $datum == null) {
            return 4;
        }
        
        $this->db->select('r.DatumRezervacije');
        $this->db->from('koristi r');
        $this->db->where('r.DatumRezervacije', $datum);
        $this->db->where('r.IDUsluga', $idUsl);
        $proveraDat = $this->db->get('koristi');
        if ($proveraDat->num_rows() != 0) { 
            return 3; 
        }
        
        $this->db->select('r.IDKorisnik');
        $this->db->from('koristi r');
        $this->db->where('r.IDKorisnik', $idKor1);
        $this->db->where('r.IDUsluga', $idUsl);
        $provera = $this->db->get('koristi');
        if ($provera->num_rows() != 0) { 
            return 2; 
        }
        else {
            $red['IDKorisnik'] = $idKor1;
            $red['IDUsluga'] = $idUsl;
            $red['DatumRezervacije'] = $datum;
            $red['DatumUnosa'] = date("d/m/Y");
            
            $this->db->insert('Koristi', $red);        
            return 1;          
        }
        
        return 4;

    }
    
}

?>

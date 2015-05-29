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
    
    function unesiUslugu($naziv, $opis, $cena, $pruzalac, $velicina, $kategorija) {
        $this->load->database();
        $idPruzalac = null;
        
        $this->db->select('k.IDKorisnik');
        $this->db->from('Korisnik k');
        $this->db->where('k.Username', $pruzalac);
        $query1 = $this->db->get('korisnik')->result();
        foreach ($query1 as $row) {
            $idPruzalac = $row->IDKorisnik;
        }
        
        if ($kategorija == 4 || $kategorija == 7) {
            $this->db->select('u.IDUsluga');
            $this->db->from('usluga u');
            $this->db->where('u.IDPruzalac', $idPruzalac);
            $proveraPostoji = $this->db->get('usluga');
            if ($proveraPostoji->num_rows() != 0) { 
                return 3; 
            }
        }
        
        $this->db->select('u.IDUsluga');
        $this->db->from('usluga u');
        $this->db->where('u.Naziv', $naziv);
        $proveraIme = $this->db->get('usluga');
        if ($proveraIme->num_rows() != 0) { 
            return 2; 
        }
        
        $red['IDPruzalac'] = $idPruzalac;
        $red['Naziv'] = $naziv;
        $red['Opis'] = $opis;
        $red['Cena'] = $cena;
        $red['Velicina'] = $velicina;
        $red['DatumReg'] = date("d/m/Y");
        $red['DatumIzmene'] = date("d/m/Y");
        $this->db->insert('Usluga', $red);        
        return 1;    
    }
    
    function azurirajUslugu ($naziv, $opis, $cena, $idPruzalac,$idUsluga, $velicina, $kategorija) {
        $this->load->database();
        $niz = array (
            'Naziv' => $naziv,
            'Opis' => $opis,
            'Cena' => $cena,
            'IDPruzalac' => $idPruzalac,
            'Velicina' => $velicina,
            'DatumIzmene' => date("d/m/Y")
        );
        
        $this->db->where('IDUsluga', $idUsluga);
        $this->db->update('usluga', $niz);
        
    }
   
}

?>

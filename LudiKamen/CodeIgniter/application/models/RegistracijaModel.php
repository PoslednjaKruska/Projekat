<?php

class RegistracijaModel extends CI_Model {

    function checkIfExists() {
        $flag = 0;
        $this->load->database();
        $korime = $this->input->post('korime');
    
        if (strlen($korime)<6)
        {
            $flag = 4;
            return $flag;
        }
        
        $this->db->select('*');
        $this->db->from('korisnik k');
        $this->db->where('k.Username', $korime);
        $upit = $this->db->get();
        if ($upit->num_rows() > 0) {
            $flag = 1;
        }
        return $flag;
    }
    
    function checkPassword() {
        $flag = 0;
        $this->load->database();
        $password1 = $this->input->post('lozinka');
        if (strlen($password1)<6)
        {
            $flag = 2;
            return $flag;
        }
        $password2 = $this->input->post('lozinkaPonovo');
        if ($password1 != $password2)
        {
            $flag = 3;
        }
        return $flag;
    }
    
    function category () {
        
    }
}

        
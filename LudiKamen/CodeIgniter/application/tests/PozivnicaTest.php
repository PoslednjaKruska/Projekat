<?php

class PozivnicaTest extends PHPUnit_Framework_TestCase
{    
    private $CI;
    
    public function setUp()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('PozivniceModel');
    }

    public function testNumRows()
    {
        $qty = $this->CI->PozivniceModel->numRows();
        $this->assertEquals($qty, 1);
    }
    
    public function testGetAll()
    {
        $query = $this->CI->PozivniceModel->getAll();
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->Naziv;
        }
        $this->assertEquals($poslednji, 'Stamparija pozivnica');
    }
    
    public function testGetOne()
    {   
        $naziv = "Stamparija pozivnica";
        $query = $this->CI->PozivniceModel->getOne($naziv);
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->ImePrezime;
        }
        $this->assertEquals($poslednji, 'Stamparija pozivnica');
    }
    
    public function testGetAllInvites()
    {
        $query = $this->CI->PozivniceModel->getAllInvites();
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->Naziv;
        }
        $this->assertEquals($poslednji, 'MojaPozivnicica');
    }
    
     public function testGetNumInvites()
    {
        $query = $this->CI->PozivniceModel->getNumInvites();
        $this->assertEquals($query, 2);
    }
    
    public function testRezervisi1()
    {   
        $korisnik = 'markoMarko';
        $usluga = 'Restoran Gajic';
        $datum = '10/22/2015';
        $qty = $this->CI->RestoranModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 2);
    }
    
    public function testRezervisi2()
    {   
        $korisnik = 'udavaca';
        $usluga = 'Restoran Gajic';
        $datum = '10/22/2015';
        $qty = $this->CI->RestoranModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 1);
    }
    
    public function testRezervisi3()
    {   
        $korisnik = 'tiksiMacka';
        $usluga = 'Restoran Gajic';
        $datum = '11/12/2015';
        $qty = $this->CI->RestoranModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 3);
    }
    
}

?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

